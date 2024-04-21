
var csrfToken = $('#csrf-token').val();
function sendMessage() {
   
    var formData = {
        _token: csrfToken,
        sender: 'admin', 
        content: $('input[name=content]').val(),
        recipient: $('input[name=recipient]').val()
    };

    
    $.ajax({
        url: '/admin-message-stockiste-post', 
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
        url: "/api/admin-message-stockiste",
        type: "GET",
        dataType: "json",
        success: function(response) {
            var messages = response.messages;
            // console.log(messages);

            // Parcourir chaque message et mettre à jour le contenu existant
            messages.forEach(function(message) {
                var messageHTML = '<div class=" chat-message">' +
                    
                   
                    '<div>';

                // Vérifier l'expéditeur du message
                if (message.sender === 'admin') {
                    messageHTML += '<div class="flex justify-end">'+
                    '<span class="px-4 py-2 rounded-lg rounded-br-none bg-green-600 text-white">';
                } 
                 if (message.sender === 'stockiste') {
                    messageHTML += '<span class="inline-block ml-5  mb-5 px-4 py-2 rounded-lg  rounded-bl-none bg-purple-300 text-white">';
                }

                messageHTML += message.content + '</span></div></div>';

                // Vérifier si le message existe déjà dans le div
                var existingMessage = $('#messagesStockiste').find('#message_' + message.id);
                if (existingMessage.length > 0) {
                    
                    // Mettre à jour le contenu du message existant
                    existingMessage.html(messageHTML);
                } else {
                    // Ajouter le message s'il n'existe pas déjà
                    $('#messagesStockiste').append('<div  id="message_' + message.id + '">' + messageHTML + '</div>');
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
    
    setInterval(loadMessages, 1000);
});


