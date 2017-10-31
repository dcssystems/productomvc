<?php
class Producto{
    private $codigo;
    private $nombre;
    private $tipo;
    private $precio;
    public function __construct($codigo, $nombre, $tipo, $precio) {
        $this->codigo = $codigo; $this->nombre = $nombre;
        $this->tipo = $tipo; $this->precio = $precio;
    }
    public function getCodigo() {
        return $this->codigo;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getPrecio() {
        return $this->precio;
    }
}
?>