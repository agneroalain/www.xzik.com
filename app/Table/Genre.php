<?php
namespace Xzik\Table;
use Xzik\App;

class Genre extends Table{
    protected static $table = "genres";
    
    public function getUrl(){
        return 'index.php?p=categorie&id=' . $this->id_art;
    }
}