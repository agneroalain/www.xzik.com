<?php
namespace Xzik\Table;
use Xzik\App;
class Artiste extends Table{
    public static function getArtiste(){
        return App::getDb()->query('SELECT * FROM artiste', __CLASS__);
    }
    //Bien revoir le fonctionnement de ce geteur (classe magique) avant de modiffier cette classe 
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
    public function getUrl(){
        return 'index.php?p=pa&id=' . $this->id_art;
    }
    public function getAvatar(){
        return $this->avatar_art;
    }
}