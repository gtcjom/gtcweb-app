<button id="toggleChat" onclick="openForm()">Chat</button>
<div class="chat" id="chatContainer">
    <button id="minimizeChat" onclick="closeForm()">_</button>
    <div class="top">
        <img src="img/avatar-female.png" alt="chat1" width="50px">
        <div>
            <p>Ross Edlin</p>
            <small>Online</small>
        </div>
    </div>

    <div class="messages">
        @include('receive', ['message' => "Hey! What's up?"])
    </div>

    <div class="bottom">
        <form action="">
            <div class="recipient">
                <input type="text" id="message" class="input-email message" name="message"
                    placeholder="Enter message" style="min-width: 425px; width: auto;">
                <button type="submit" id="btn"><i class="fa fa-send"></i></button>
            </div>
        </form>
    </div>
</div>
