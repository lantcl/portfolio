$(document).ready(function() {
  
  $("#searchgif").on('click', function(){
    var getSticker = $.ajax({
      //make a request to the api with the user input
      url : "get-sticker.php",
      data : form_data,
    });
    
    getSticker.done(function(data){
      $.post()
    });  
    getSticker.fail(function(data){
      
    });
    getSticker.always(function(data){
        
    });
  
  });

  $("#guestbook_form").submit(function(event){
    event.preventDefault(); //prevent default action 
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    
    $.ajax({
      url : post_url,
      type: request_method,
      data : form_data
    }).done(function(response){ //
      //$("#server-results").html(response);
      $("form").hide();
      
    });

  });

});