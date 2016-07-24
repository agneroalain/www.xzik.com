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
        <?php foreach($db->query('SELECT * FROM artiste', 'Xzik\Table\Artiste') as $post): ?>
        <?php
        $i++;
        if($i%4 == 0){
         echo '</div><vr/><div class="row">';
        }
        ?>
        <a href="<?= $post->getUrl(); ?>">
        <div class="artiste">
            <div class="avatar_artiste">
                
            </div>
            <div class="desc_artiste">
                <div class="nom_artiste">
                    <?=$post->nom_art;?>
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