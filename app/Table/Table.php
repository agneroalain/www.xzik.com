<?php
namespace Xzik\Table;
use Xzik\App;


class Table{
    
    protected static $table;
    
    
    private static function getTable(){
        if(self::$table === null){
            $class_name = explode('\\', get_called_class());
            self::$table = strtolower(end($class_name)) . 's';
            die(self::$table);
        }
        return self::$table;
    }
      public static function All(){
        return App::getDb()->query("
            SELECT * FROM ".self::getTable()."
        ",__CLASS__);
    }
    
    //Bien revoir le fonctionnement de ce geteur (classe magique) avant de modiffier cette classe 
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}