function windowPopup(url, width, height) {
  // Calculate the position of the popup so
  // it’s centered on the screen.
  var left = (screen.width / 2) - (width / 2),
      top = (screen.height / 2) - (height / 2);

  window.open(
    url,
    "",
    "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
  );
}

  (function($){
    $(document).ready(function (){
  // ------------------

  $(".share a").on("click", function(e) {
    e.preventDefault();
    windowPopup($(this).attr("href"), 500, 300);
  });



      //var video_height = $('#video').height();
      //alert(video_height);

      $('#theatre-mode').click(function() {



     if($('body').hasClass('theatre-on')){
       // Turn Theatre mode OFF
        $('body').removeClass('theatre-on');
        $('#mode').text('Larger video');
        // apply class after initial animation
        window.setTimeout(function(){
             $('body').removeClass('finished');
         }, 500);


      } else {
        // Theater mode ON
        $('body').addClass('theatre-on');
        $('#mode').text('Smaller video');
        //$('#content').css('transform','translateY('+video_height+'px)');
        // apply class after animation
        window.setTimeout(function(){
             $('body').addClass('finished');
         }, 500);



      }

    });

  // ------------------
    });
  })(window.jQuery);
