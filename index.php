<?php
//include_once './lib/Savant3-3.0.1/Savant3.php';
//Controlador
//error_reporting(~E_DEPRECATED);
include_once "./modelo/Producto.php";
include_once './modelo/ProductoGestion.php';
//llama al modelo:
$objProdGestion= new ProductoGestion();
$lista=$objProdGestion->getListaProducto();
//lamando a la vista:
//$tpl=new Savant3();
$appNombre="GestorProductos";
$appTitulo="Mantenimiento de Productos";
$appAutor="SistemasUni";
//$tpl->listaProd=$lista;
//$tpl->display('./vista/indexView.php');
include_once './vista/indexView.php';
?>
