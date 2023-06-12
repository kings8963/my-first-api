<?php

class Conectar{

    protected $dbh;

    protected function Conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:host=localhost;port=3307;dbname=php_api", 'root', '');

            return $conectar;

      
        }catch(Exception $e){
            print "ERROR DB:" .$e->getMessage()."<br/>";
            die();
        }
    }

    public function set_name(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}



?>