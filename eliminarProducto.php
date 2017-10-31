<?php
include_once './modelo/Producto.php';
include_once './modelo/ProductoGestion.php';
try {
    $idproducto = $_POST["idproducto"];
    $objProdGestion = new ProductoGestion();
    $objProdGestion->eliminarProducto($idproducto);
    header("location: index.php");
} catch (Exception $e) {
    echo $e->getMessage();
}

