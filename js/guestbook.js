$(document).ready(function() {
  
  //AJAX/// api call to get the gif the user wants

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

  //AJAX/// api call to get a random gif

  $("#randomgif").on('click', function(){
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

  //AJAX/// submitting the gif and user data to the database - guest book table
  //adds the gif to the guestbook on the dom
  //hides the form 

  $("#guestbook_form").submit(function(event){
    event.preventDefault(); //prevent default action 
    var post_url = $(this).attr("action"); //get form action url
    var form_data = $(this).serialize(); //Encode form elements for submission
    
    $.ajax({post_url, form_data, function(response){
      $("#server-results").html(response);
      $("form").hide();
      
    });

  });

});