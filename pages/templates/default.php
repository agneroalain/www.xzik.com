<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>XZIK la musique comme jamais</title>
        <link rel="stylesheet" href="../public/css/main.css">
        <link rel="stylesheet" href="../public/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../public/css/font-awesome.min.css">
        <link rel="stylesheet" href="../public/css/slit-slider.css">
        <link rel="stylesheet" href="../public/css/main2.css">
        <script src="../public/js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
           <header>
            <div id="logo">
                <img src="assets/image/logo.png" width="200px"/>
            </div>
            <nav>
                <ul id="menu">
                    <a  href="index.php"><li><i class="fa fa-home"></i>Accueil</li></a>
                    <a href="musique.php"><li><i class="fa fa-music"></i>Musique</a>
                        <ul class="drop">
                            <li>Single</li>
                            <li>Album</li>
                            <li>Top 10</li>
                            <li>Mix tape</li>
                        </ul>
                    </li>
                    <a href="video.php"><li><i class="fa fa-video-camera"></i>Video</a>
                        <ul class="drop">
                            <li>Clip</li>
                            <li>Interview</li>
                            <li>Making OFF</li>
                            <li>Concert</li>
                        </ul>
                    </li>
                    <a href="artiste.php"><li><i class="fa fa-user"></i>Artiste</li></a>
                    <a href="index.php?p=event"><li><i class="fa fa-calendar"></i>Evenement</li></a>
                    <a href="signin.php"><li class="active">Sign In</li></a>
                </ul>
            </nav>
    </header>
    
        <?= $content; ?>
        
    <footer>
        <figure id="audioplayer" itemprop="track" itemtype="http://schema.org/MusicRecording">
        <figcaption>
        <!--<div>Track-->
        <!--<span itemprop="name">Asa - Moving On</span>-->
        </div>
        <!--<div id="album">Album
        <span itemprop="inAlbum"><i>unset</i></span>
        </div>
        <div id="artist">Artist
        <span itemprop="byArtist">ASA</span>
        </div>
        <div id="time">Time
        <span>00:00</span>
        </div>-->
        </figcaption>
        <meta itemprop="duration" content="PT2M29S">
        <!--<div id="fader">
        <input type="range" min="0" max="1" step="any" value="1"
        orient="vertical" id="volumeSlider">
        <button type="button">volumehigh</button>
        </div>-->
        <!--<div id="playback">
        <button type="button">Play</button>
        <progress min="0" max="100" value="0" id="playhead">
        </progress>
        </div>-->
        <audio src="Asa - Moving On (Ofiicial audio).mp3" id="audiotrack"
        itemprop="audio" preload="auto"></audio>
        </figure>
        <!--<div id="xxzik_player">
            <img id="thumb_cover_player" src="" alt="" class="thumb_cover"/>
            <div id="xxzik_player_control"> <span>PREVIOUS</span> <span>PLAY/PAUSE</span> <span>NEXT</span> </div>
            <div id="xxzik_player_piste"></div>
            <div id="xxzik_player_timer"></div>
            <div id="xxzik_player_volume"></div>
        </div>-->
    </footer>
    <script src="../public/js/jquery-1.11.1.min.js"></script>
    <script src="../public/js/jquery.slitslider.js"></script>
    <script src="../public/js/jquery.ba-cond.min.js"></script>
    <script src="../public/js/main.js"></script>
    <script>
        function player() {
            if (audioTrack.paused) {
            setText(this, "Stop");
            audioTrack.play();
            } else {
            setText(this,"Play");
            audioTrack.pause();
            }
        }
        function setText(el,text) {
            el.innerHTML = text;
        }
        function finish() {
            audioTrack.currentTime = 0;
            setText(playButton,"Play");
        }
        function volumizer() {
            if (audioTrack.volume == 0) {
            setText(muteButton,"Unmute");
            } else {
            setText(muteButton,"Mute");
            }
        }
        function muter() {
            if (audioTrack.volume == 0) {
            audioTrack.volume = restoreValue;
            volumeSlider.value = restoreValue;
            } else {
            audioTrack.volume = 0;
            restoreValue = volumeSlider.value;
            volumeSlider.value = 0;
            }
        }
        function setAttributes(el, attrs) {
            for(var key in attrs){
            el.setAttribute(key, attrs[key]);
            }
        }
        var audioPlayer = document.getElementById("audioplayer"),
        audioTrack = document.getElementById("audiotrack"),
        playButton = document.createElement("button"),
        muteButton = document.createElement("button"),
        volumeSlider = document.createElement("input");
        setText(playButton, "Play");
        setText(muteButton, "Mute");
        setAttributes(playButton, { "type": "button" });
        setAttributes(muteButton, { "type": "button" });
        setAttributes(volumeSlider, { "type": "range", "min": "0", "max":
        "1", "step": "any", "value": "1" });
        audioPlayer.appendChild(volumeSlider);
        audioPlayer.appendChild(muteButton);
        audioPlayer.appendChild(playButton);
        audioTrack.removeAttribute("controls");
        playButton.addEventListener("click", player, false);
        muteButton.addEventListener("click", muter, false);
        volumeSlider.addEventListener("input", function(){
        audioTrack.volume = volumeSlider.value;
        }, false);
        audioTrack.addEventListener('volumechange', volumizer, false);
        audioTrack.addEventListener('ended', finish, false);
    </script>
</body>
</html>