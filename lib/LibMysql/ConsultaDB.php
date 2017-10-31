<?php
include_once './lib/LibMysql/ConexionDB.php';
class ConsultaDB extends ConexionDB{
    private $resulado;
    function __construct() {
        parent::__construct();
    }
    public function getRow(){
        $lista=array();
        if(!$this->resulado=mysql_query($this->stm)){
            die("Consulta no procesada");
        }
        while($row=mysql_fetch_array($this->resulado)) {
            array_push($lista, $row);
        }
        return $lista;
    }
}
