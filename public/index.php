<?php
require '../app/Autoloader.php';
Xzik\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

//Initialisation des objets

$db = new Xzik\Database('bd_xzik');         

ob_start();

if($p === 'home'){
    require '../pages/home.php';
}else if( $p === 'event'){
    require '../pages/event.php';
}else if( $p === 'artistes'){
    require '../pages/artistes.php';
}else if( $p === 'pa'){
    require '../pages/profil_artiste.php';
}else if( $p === 'musique'){
    require '../pages/musique.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';
?>
     
