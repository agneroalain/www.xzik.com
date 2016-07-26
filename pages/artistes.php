<?php $i = 0;?>
<div class="fake_element"></div>
<div id="artiste">
    <div id="rech_" >
        <input type="text" class="input_" name="_rech" placeholder="Rechercher un artiste"/>
        <div class="row">
            <div class="col">
                <select>
                    <option>Genre</option>
                    <option>Rap</option>
                    <option>Soul</option>
                    <option>Zouk</option>
                    <option>Coupe Decale</option>
                </select>
                <select>
                    <option>Masculin</option>
                    <option>Feminin</option>
                </select>
                    <input type="submit"/>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach(\Xzik\Table\Artiste::getArtiste() as $artiste): ?>
        <?php
            $i++;
            if($i%4 == 0){
            echo '</div><vr/><div class="row">';
            }
        ?>
        <a href="<?= $artiste->url; ?>">
        <div class="artiste">
            <div class="avatar_artiste">
                
            </div>
            <div class="desc_artiste">
                <div class="nom_artiste">
                    <?=$artiste->nom_art;?>
                </div>
                <div class="nbr_chanson_artiste">
                    25
                </div>
            </div>
        </div>
        </a>
         <?php endforeach; ?>
    </div>
</div>