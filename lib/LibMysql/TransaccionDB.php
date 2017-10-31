<?php
class TransaccionDB extends ConexionDB {
    public $confirmacion=false;
    function __construct() {
        parent::__construct();
    }
    public function ExecuteTxn() {
        mysql_query("BEGIN");
        if (!mysql_query($this->stm)) {
            //die(mysql_error());
            mysql_query("ROLLBACK");
            return $this->confirmacion;
        }
        $this->confirmacion=true;
        mysql_query("COMMIT");
        return $this->confirmacion;
    }
}
