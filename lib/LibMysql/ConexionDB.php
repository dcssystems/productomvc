<?php
include_once './lib/LibMysql/ParametrosDB.php';
class ConexionDB {
    private $link=null;
    public $stm=null;
    function __construct() {
        $host=  ParametrosDB::DB_HOST;
        $user=  ParametrosDB::DB_USER;
        $password=  ParametrosDB::DB_PSW;
        $DBname=  ParametrosDB::DB_NAME;
        if(!$this->link=mysql_connect($host,$user,$password)){
            die("No se pudo Conectar");
        }
        if(!mysql_select_db($DBname)){
            die("No se acceder a la Base de Datos");
        }
    }
    public function getLink() {
        return $this->link;
    }
}
