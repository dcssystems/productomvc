<?php
include_once './lib/LibMysql/ConexionDB.php';
include_once './lib/LibMysql/ConsultaDB.php';
include_once './lib/LibMysql/TransaccionDB.php';
include_once './modelo/ProductoInterface.php';
class ProductoGestion implements ProductoInterface{
    private $link=null;
    function __construct() {
        $objCnxDB=new ConexionDB();
        $this->link=$objCnxDB->getLink();
    }
    public function registrarProducto(Producto $p) {
        $objTxn= new TransaccionDB();
        $stm="INSERT INTO producto(idtipo,nombre,precio) ";
        $stm.="VALUE('".$p->getTipo()."','".$p->getNombre()."','".$p->getPrecio()."')";
        $objTxn->stm=$stm;
        $c=$objTxn->ExecuteTxn();
        //var_dump($c);exit();
    }

    public function eliminarProducto($id) {
       
        $objTxn= new TransaccionDB();
        $stm = "DELETE FROM producto WHERE idproducto=".$id;      
        $objTxn->stm=$stm;
        $c=$objTxn->ExecuteTxn();
    }

    public function actualizarProducto(Producto $p) {
        $encontrado = 0;
        foreach ($this->listaProducto as $k => $prod) {
            if ($prod->getCodigo() == $p->getCodigo()) {
                $posicion = $k;
                $encontrado = 1;
            }
        }
        if ($encontrado) {
            echo "Actualizado";
            $this->listaProducto[$posicion]=$p;
            echo "<hr>";
        } else {
            echo "Producto No encontrado";
            echo "<hr>";
        }
    }

    public function obtenerProducto($id) {
         $objConsulta=new ConsultaDB();
        $objConsulta->stm="SELECT idproducto, idtipo, nombre, precio FROM producto where idproducto = ".$id;
        $p=$objConsulta->getRow();
        return $p;
    }

    public function getListaProducto() {
        $objConsulta=new ConsultaDB();
        $objConsulta->stm="SELECT * FROM producto";
        $lista=$objConsulta->getRow();
        return $lista;
    }

}
