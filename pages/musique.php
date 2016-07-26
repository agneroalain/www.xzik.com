<?php $i = 0;?>
<div id="page_musique">
    <div class="fake_element"></div>
    <div class="fake_element"></div>
    <div class="row">
        <?php foreach(\Xzik\Table\Genre::All() as $genre): ?>
        <span class="musique_genre"><a href="<?= $genre->url; ?>"><?= $genre->lib_genr; ?></span>
        <?php endforeach; ?>
    </div>
    <div class="row">
         <?php foreach(\Xzik\Table\Musique::getSon() as $son): ?>
        <?php
            $i++;
            if($i%5 == 0){
            echo '</div><vr/><div class="row">';
            }
        ?>
        <div class="col">
            <div class="musique">
                <i class="fa fa-play-circle fa-1x bt bt_play"> </i>
                <i class="fa fa-download fa-1x bt bt_download"> </i>
                <i class="fa fa-eye fa-1x bt bt_voir"> </i>
                <div class="musique_cover" style="background-image:url('../public/assets/image/cover_song/<?=$son->id_son?>.jpg');background-size:cover;"></div>
                <div class="musique_info">
                    <div>
                        <span class="musique_nom"><?= $son->titre_son; ?></span>
                <span class="musique_genre"><?= $son->genre; ?></span>
                        <div class="artiste_musique"><span class="musique_artiste">Artiste</span> <div class="thumb_artiste" ></div></div>
                        <!--<span class="musique_duree">03 : 04</span><br>-->
                        <span class="musique_desc"><?= $son->desc_son; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
