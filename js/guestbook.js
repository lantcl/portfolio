$(document).ready(function() {
  
  //AJAX/// api call to get the gif the user wants

  //need to somehow return the value of current to use in the form submission maybe
  $("#randomgif").on('click', function(){
    
    var searchSticker = $.get("https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&tag=&rating=PG");
      searchSticker.done(function(data) {
        //console.log(data["data"]["fixed_height_small_url"]);
        var current = data["data"]["fixed_height_small_url"];
        $("#currentSticker").attr("src", current);
      }); 
      searchSticker.fail(function(data){
        console.log("fail");
      });
  });

  //AJAX/// api call to get a random gif

  $("#randomgif").on('click', function(){
    var s = $('#stickerInput').val();
    var getRandomSticker = $.get("https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&rating=PG&tag="s);
      getRandomSticker.done(function(data) {
        //console.log(data["data"]["fixed_height_small_url"]);
        var current = data["data"]["fixed_height_small_url"];
        $("#currentSticker").attr("src", current);
      }); 
      getRandomSticker.fail(function(data){
        console.log("fail");
      });
  });


  //AJAX/// submitting the gif and user data to the database - guest book table
  //adds the gif to the guestbook on the dom
  //hides the form 

  // $("#guestbook_form").submit(function(event){
  //   event.preventDefault(); //prevent default action 
  //   var post_url = $(this).attr("action"); //get form action url
  //   var form_data = $(this).serialize(); //Encode form elements for submission
    
  //   $.ajax({post_url, form_data, function(response){
  //     $("#server-results").html(response);
  //     $("form").hide();
      
  //   });

  // });

});