$(document).ready(function() {
  
  //AJAX/// api call to get the gif the user wants
  
  //need to somehow return the value of current to use in the form submission maybe
  $("#searchgif").on('click', function(){

    var key = $('#stickerInput').val();
    
    keyVal = key.replace(/ /g,"_");
    // console.log(key);
    
    var searchSticker = $.get("https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&rating=PG&tag="+ keyVal);
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
    var getRandomSticker = $.get("https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&tag=&rating=PG");
      getRandomSticker.done(function(data) {
        //console.log(data["data"]["fixed_height_small_url"]);
        var current = data["data"]["fixed_height_small_url"];
        $("#currentSticker").attr("src", current);
         $('#stickerInput').attr('value', 'random');
      }); 
      getRandomSticker.fail(function(data){
        console.log("fail");
      });
  });

  //AJAX/// submitting the gif and user data to the database - guest book table
  //adds the gif to the guestbook on the dom
  //hides the form 

  $('#guestbook_form').submit(function(e){
        e.preventDefault();

    var sticker = $('#stickerInput').val(); 
    
    var gif = $('#currentSticker').attr("src");

    var who = $('#who').val();

    $.ajax({
      type: "POST",
      url: "add-sticker.php", 
      data: { giphyurl: gif, stickerName: sticker, stickerContributor: who },
      success: function(){
      // $("#guestbook_form").hide();
      $(".submissionRemove").remove();
      $("#thanks").show(); 
      //$("#stickerPage").prepend('<img src="'+ gif +'" />'); 

      }
      
       

    });
  
  });

});