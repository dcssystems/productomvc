<?php
include_once './modelo/Producto.php';
include_once './modelo/ProductoGestion.php';
//var_dump($_POST);
$idproducto=null;
$idtipo=$_POST["selTipo"];
$nombre=$_POST["txtNombre"];
$precio=$_POST["txtPrecio"];
$objProdGestion=new ProductoGestion();
$p=new Producto("", $nombre, $idtipo, $precio);
$objProdGestion->registrarProducto($p);
header("location: index.php");