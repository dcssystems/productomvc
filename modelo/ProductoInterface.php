<?php
interface ProductoInterface {
    public function registrarProducto(Producto $p);

    public function eliminarProducto($id);

    public function actualizarProducto(Producto $p);

    public function obtenerProducto($id);

    public function getListaProducto();
}
