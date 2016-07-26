<?php
namespace Xzik\Table;
use Xzik\App;
class Musique{
    public static function getSon(){
        return App::getDb()->query('SELECT * FROM son', __CLASS__);
    }
    //Bien revoir le fonctionnement de ce geteur (classe magique) avant de modiffier cette classe 
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
    
    public function getTitre(){
        return $this->titre_son;
    }
    public function getDesc(){
        return $this->desc_son;
    }
    public function getId(){
        return $this->id_son;
    }
}