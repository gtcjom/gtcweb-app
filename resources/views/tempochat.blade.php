<button class="open-button" onclick="openForm()"><i class="fad fa-comment-dots"></i>Message</button>

<div class="chat-popup" id="myForm">
    <form action="/action_page.php" class="form-container" onsubmit="sendMessage(event)">
        <h1>Chat</h1>
        <label for="msg"><b>Message</b></label>
        <div class="messages" id="chat-messages">
            @include('receive', ['message' => "Hey! What's up?"])
        </div>
        <textarea id="message-input" placeholder="Type message.." name="msg" required></textarea>

        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">_</button>
    </form>
</div>
