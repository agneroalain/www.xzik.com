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
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/main.js"></script>
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