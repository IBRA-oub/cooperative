
var csrfToken = $('#csrf-token').val();
function sendMessage() {
   
    var formData = {
        _token: csrfToken,
        sender: 'stockiste', 
        content: $('input[name=content]').val(),
        recipient: $('input[name=recipient]').val()
    };

    
    $.ajax({
        url: '/stockiste-message-admin-post', 
        type: 'POST',
        data: formData,
        success: function(response) {
           
            console.log('Message envoyé avec succès');
            $('input[name=content]').val('');
        },
        error: function(xhr, status, error) {
           
            console.error('Erreur lors de l\'envoi du message :', error);
        }
    });
}

$('#messageForm').submit(function(event) {
    
    event.preventDefault();
    
    
    sendMessage();
});


// _________________________recuperer les message________________


function loadMessages() {
    $.ajax({
        url: "/api/message-stockiste-admin",
        type: "GET",
        dataType: "json",
        success: function(response) {
            var messages = response.messages;
            // console.log(messages);

            
            messages.forEach(function(message) {
                var messageHTML = '<div class=" chat-message">' +
                    
                   
                    '<div>';

                
                if (message.sender === 'stockiste') {
                    // console.log('log')
                    messageHTML += '<div class="flex justify-end">'+
                    '<span class="px-4 py-2 rounded-lg rounded-br-none bg-purple-300 text-white">';
                } 
                 else if (message.sender === 'admin') {
                    
                    messageHTML += '<span class="inline-block ml-5  mb-5 px-4 py-2 rounded-lg  rounded-bl-none bg-green-600 text-white">';
                }

                messageHTML += message.content + '</span></div></div>';

                
                var existingMessage = $('#messagesStockisteAdmin').find('#message_' + message.id);
                if (existingMessage.length > 0) {
                    
                   
                    existingMessage.html(messageHTML);
                } else {
                    
                    $('#messagesStockisteAdmin').append('<div  id="message_' + message.id + '">' + messageHTML + '</div>');
                }
            });
        },
        error: function(xhr, status, error) {
            console.error('Erreur lors de la récupération des messages :', error);
        }
    });
}


$(document).ready(function() {
    loadMessages(); 
    
    setInterval(loadMessages, 3000);
});


