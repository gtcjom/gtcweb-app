<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ServiceController extends Controller
{
    public function services() {
        $services = Service::get();
        // dd($services); // Add this line for debugging
        return view("services", compact("services"));
    }
    // public function services()
    // {
    //     $services = Service::get();

    //     return view("services", compact("services"));
    // }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Service $service, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("service", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $service = Service::find($request->service);

        $subscription = $request->user()->newSubscription($request->service, $service->stripe_plan)
                        ->create($request->token);

        return view("subscription_success");
    }
}
