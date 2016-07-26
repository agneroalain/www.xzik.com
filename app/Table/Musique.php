<?php
namespace Xzik\Table;
use Xzik\App;
class Musique{
    public static function getSon(){
        return App::getDb()->query("
                SELECT son.id_son, son.titre_son, desc_son, genres.lib_genr as genre 
                FROM son 
                LEFT JOIN genres
                    ON son.id_genr = genres.id_genr
        ", __CLASS__);
    }
    //Bien revoir le fonctionnement de ce geteur (classe magique) avant de modiffier cette classe 
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}