document.getElementById('sendButton').addEventListener('click', sendMessage);

function sendMessage() {
    const userInput = document.getElementById('userInput').value;
    if (!userInput.trim()) return;

    // Display user's message
    displayMessage(userInput, 'user');
    document.getElementById('userInput').value = '';

    // Send message to the server
    fetch('server.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `message=${encodeURIComponent(userInput)}`,
    })
    .then(response => response.text())
    .then(botReply => {
        // Display bot's reply
        displayMessage(botReply, 'bot');
    })
    .catch(error => console.error('Error:', error));
}

function displayMessage(message, sender) {
    const chatMessages = document.getElementById('chatMessages');
    const messageElement = document.createElement('div');
    messageElement.className = `message ${sender}`;
    messageElement.textContent = message;
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll to the bottom
}
