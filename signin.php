<?php
    require('include/header.php');
?>
 <div  class="box_center">
    <div id="signup" class='sign'>
        <h3 class="h3gray" align='center'>Pas encore inscrit ? </h3>
        <form action="#" method="POST" class="form_style_1">
            <input type="text" placeholder="Votre nom !"/>
            <input type="text" placeholder="Vos prenoms !"/>
            <input type="date" placeholder="Votre age !"/>
            <select>
                <option>Artiste</option>
                <option>Producteur</option>
                <option>Maison de production</option>
                <option>Manager</option>
                <option>Fan</option>
            </select>
            <input type="password" placeholder="Votre mot de passe ici !"/>
            <input type="submit" value="VALIDER"/>
            
        </form>
    </div>
    <div id="signin" class='sign'>
        <h3 class="h3gray" align='center'>Deja inscrit ?, connectez vous ! </h3>
        <form action="#" method="POST" class="form_style_1">
            <input type="text" placeholder="Votre nom utilisateur ici !"/>
            <input type="text" placeholder="Votre mot de passe ici !"/>
            <input type="submit" value="VALIDER"/>
            <h3 class="h3gray" align='center'>OU </h3>
            <div class="row">
                <div class="col colone_rs">
                    <div>
                        <a><i class="fa fa-facebook-official fa-2x fb" aria-hidden="true"></i>Se connecter avec facebook !</a>
                    </div>
                    <div>
                        <a><i class="fa fa-google-plus fa-2x fb" aria-hidden="true"></i>Seconnecter avec google+ !</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--<div class="col"><a>Pas encore inscrit ?</a></div>-->
                <div class="col"><a>Mot de passe oublié ?</a></div>
            </div>
        </form>
    </div>
</div>
<?php
    require('include/footer.php');
?>