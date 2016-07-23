<?php
require '../app/Autoloader.php';
Xzik\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

ob_start();

if($p === 'home'){
    require '../pages/home.php';
}else if( $p === 'event'){
    require '../pages/event.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';
?>
     
