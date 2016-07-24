<?php
namespace Xzik\Table;
class Artiste{
    public function __get($key){
        // faire une methode magique desque bésoin d'autre geteur
    }
    public function getUrl(){
        return 'index.php?p=pa&id=' . $this->id_art;
    }
}