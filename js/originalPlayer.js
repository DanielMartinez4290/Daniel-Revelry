$(window).load(function() {

    //container = $('.container');
    //cover = $('.cover');
    mainPlay = $('#play1');
    play1 = $('#play1');
    play2 = $('#play2');
    songPlay = $('#song1');
    songPlay2 = $('#song2');
    pause1 = $('#pause1');
    pause2 = $('#pause2');
    //mute = $('#mute');
    //muted = $('#muted');
    //close = $('#close');
    song1 = new Audio('music/track1.ogg','http://danielrevelry.com/wp-content/uploads/2015/12/danteyolo-12_6_15-3.19-PM.m4a');
    song2 = new Audio('music/track1.ogg','http://danielrevelry.com/wp-content/uploads/2015/12/Gypsy-Soul.m4a');
    duration = song1.duration;

    if (song1.canPlayType('audio/mpeg;')) {
        song1.type= 'audio/mpeg';
        song1.src= 'http://danielrevelry.com/wp-content/uploads/2015/12/danteyolo-12_6_15-3.19-PM.m4a';
    } else {
        song1.type= 'audio/ogg';
        song1.src= 'music/track1.ogg';
    }
    if (song2.canPlayType('audio/mpeg;')) {
        song2.type= 'audio/mpeg';
        song2.src= 'http://danielrevelry.com/wp-content/uploads/2015/12/Gypsy-Soul.m4a';
    } else {
        song2.type= 'audio/ogg';
        song2.src= 'music/track1.ogg';
    }

    songPlay.live('click', function(e) {
        e.preventDefault();
        song1.currentTime = 0;
        song1.play();
        song2.pause();
        $('#titleOne').show();
        $('#titleTwo').hide();
        $('#artistOne').show();
        $('#artistTwo').hide();
        $('#playerPictureTwo').hide();
        $('#playerPictureOne').show();
        $('#play1').replaceWith('<a class="button gradient pauseButton" id="pause1" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        
        $('#play2').replaceWith('<a class="button gradient pauseButton" id="pause1" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        $('#pause2').replaceWith('<a class="button gradient pauseButton" id="pause1" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        //$('#close').fadeIn(300);
        $('#seek').attr('max',song1.duration);
    });
    songPlay2.live('click', function(e) {
        
        song2.currentTime = 0;
        e.preventDefault();
        song2.play();
        song1.pause();
        $('#titleOne').hide();
        $('#titleTwo').show();
        $('#artistOne').hide();
        $('#artistTwo').show();
        $('#playerPictureTwo').show();
        $('#playerPictureOne').hide();
        $('#play1').replaceWith('<a class="button gradient pauseButton" id="pause2" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        //$('#play2').replaceWith('<a class="button gradient" id="pause2" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        $('#pause1').replaceWith('<a class="button gradient pauseButton" id="pause2" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');        
        //$('#close').fadeIn(300);
        $('#seek').attr('max',song2.duration);
    });

    mainPlay.live('click', function(e) {
        e.preventDefault();
        song1.play();
        $(this).replaceWith('<a class="button gradient pauseButton" id="pause1" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        $('#close').fadeIn(300);
        $('#seek').attr('max',song1.duration);
    });

    play1.live('click', function(e) {
        e.preventDefault();
        song1.currentTime = 0;
        song2.currentTime = 0;
        song1.play();
        song2.pause();
        $('#play1').replaceWith('<a class="button gradient pauseButton" id="pause1" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
        //$('#pause2').replaceWith('<a class="button gradient" id="play1" href="" title=""><i class="fa fa-play fa-2x"></i></a>');
    });
    play2.live('click', function(e) {
        e.preventDefault();
        song1.currentTime = 0;
        song2.currentTime = 0;
        song1.pause();
        song2.play();
        $('#play2').replaceWith('<a class="button gradient pauseButton" id="pause2" href="" title=""><i class="fa fa-pause fa-2x"></i></a>');
    });
 
    pause1.live('click', function(e) {
        e.preventDefault();
        song1.pause();
        $('#pause1').replaceWith('<a class="button gradient playButton" id="play1" href="" title=""><i class="fa fa-play fa-2x"></i></a>');
    });
    pause2.live('click', function(e) {
        e.preventDefault();
        song2.pause();
        $('#pause2').replaceWith('<a class="button gradient playButton" id="play2" href="" title=""><i class="fa fa-play fa-2x"></i></a>');
    });

/*
    mute.live('click', function(e) {
        e.preventDefault();
        song.volume = 0;
        $(this).replaceWith('<a class="button gradient" id="muted" href="" title=""></a>');
 
    });
*/

    $("#seek").bind("change", function() {
        song1.currentTime = $(this).val();
        $("#seek").attr("max", song.duration);
    });

    song1.addEventListener('timeupdate',function (){
    curtime = parseInt(song.currentTime, 10);
        $("#seek").attr("value", curtime);
    });

  });