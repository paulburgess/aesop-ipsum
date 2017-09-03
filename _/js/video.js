// start when video is loaded
// flexible iframe
// $(window).on("load", function() {

//   $('iframe').reframe();

// });

// YouTube API
// This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
player = new YT.Player('videoplayer', {
  events: {
    'onReady': onPlayerReady,
    'onStateChange': onPlayerStateChange
  }
});

}

// play and mute when ready
function onPlayerReady() {
player.playVideo();
// Mute!
player.mute();
}



jQuery('#mute-toggle').on('click', function() {
var mute_toggle = $(this);

if (player.isMuted()) {
  player.unMute();
  mute_toggle.html('Turn sound off');
} else {
  player.mute();
  mute_toggle.html('Turn sound on');
}
});

// states:
// https://developers.google.com/youtube/js_api_reference?csw=1#Events

var done = false;

function onPlayerStateChange(event) {


switch (event.data) {
  //  case 0:
  //   alert('video ended');
  //  break;
  case 1:
    $('body').removeClass('ended');
    $('body').removeClass('paused');
   // alert('PLAYING');
    $('body').addClass('playing');
    break;
   case 3:
    $('body').addClass('paused');
    break;
  case 2:
    console.log('video paused at ' + player.getCurrentTime());
      break;
  case 0:
    $('body').addClass('ended');
}
}



// controls
jQuery('#play-pause').on('click', function() {
var play_pause = $(this);

if (player.getPlayerState() == 2) {
  player.playVideo();
  play_pause.html('Pause');
  $('body').removeClass('paused');
} else {
  player.pauseVideo();
  play_pause.html('Play');
  $('body').addClass('paused');
}
});

// Next video

jQuery('#next-video').on('click', function() {
 player.nextVideo();
});


// Prev video
jQuery('#prev-video').on('click', function() {
 player.previousVideo();
});

// Restart

jQuery('#restart').on('click', function() {
 player.seekTo(0);
});
