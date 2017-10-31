<?php
include_once './modelo/ProductoGestion.php';
try {
    switch ($_GET["accion"]) {
        case "del": // formulario para eliminar
            $id=$_GET["id"];
            $objProdGestion= new ProductoGestion();
            $p=$objProdGestion->obtenerProducto($id);
            $parametros= array("label"=>"Eliminar",
                               "accion"=>"del",
                               "opcion"=>"readonly",
                               "action"=>"eliminarProducto.php");
            break;
        case "upd": // formulario para actulizar (completar)
            $parametros= array("label"=>"",
                               "accion"=>"",
                               "opcion"=>"",
                               "action"=>""
                );
            $p="";
            break;
        default: // insertar
            $parametros= array("label"=>"Insertar",
                               "accion"=>"ins",
                               "opcion"=>"",
                               "action"=>"insertarProducto.php");
            $p=array("idproducto"=>"","idtipo"=>"","nombre"=>"","precio"=>"");
            break;
    }
    $appNombre = "GestorProductos";
    $appTitulo = "Mantenimiento de Productos";
    $appAutor = "SistemasUni";
    $parametros=$parametros;
    $producto=$p;
    include_once './vista/formProductoView.php';
} catch (Exception $e) {
    echo $e->getMessage();
}