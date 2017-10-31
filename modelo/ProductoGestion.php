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
        $encontrado = 0;
        foreach ($this->listaProducto as $k => $prod) {
            if ($prod->getCodigo() == $id) {
                $posicion = $k;
                $encontrado = 1;
            }
        }
        if ($encontrado) {
            echo "Eliminado";
            $this->listaProducto[$posicion]=null;
            echo "<hr>";
        } else {
            echo "Producto No encontrado";
            echo "<hr>";
        }
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
        $encontrado = 0;
        foreach ($this->listaProducto as $k => $prod) {
            if ($prod->getCodigo() == $id) {
                $posicion = $k;
                $encontrado = 1;
            }
        }
        if ($encontrado) {
            return  $this->listaProducto[$posicion];
        } else {
            return false;
        }
    }

    public function getListaProducto() {
        $objConsulta=new ConsultaDB();
        $objConsulta->stm="SELECT * FROM producto";
        $lista=$objConsulta->getRow();
        return $lista;
    }

}
