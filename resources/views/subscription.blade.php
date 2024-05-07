
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    You will be charged ${{ number_format($service->price, 2) }} for {{ $service->name }} Plan
                </div>

                <div class="card-body">

                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" id="plan" value="{{ $service->id }}">

                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="card-holder-name" class="form-control" value="" placeholder="Name on the card">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="form-group">
                                    <label for="">Card details</label>
                                    <div id="card-element"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                            <hr>
                                <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">Purchase</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
$(document).ready(function() {
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    $('#payment-form').submit(async function(e) {
        e.preventDefault();

        $('#card-button').prop('disabled', true);
        var cardBtn = $('#card-button');
        var cardHolderName = $('#card-holder-name');

        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.data('secret'), {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.val()
                    }
                }
            }
        );

        if (error) {
            $('#card-button').prop('disabled', false);
        } else {
            var token = $('<input>').attr({
                type: 'hidden',
                name: 'token',
                value: setupIntent.payment_method
            });
            $('#payment-form').append(token);
            $('#payment-form').submit();
        }
    });
});
</script>
@endsection
