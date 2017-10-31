<?php include_once './vista/inc/cabecera.php' ?>
<?php include_once './vista/inc/menu.php' ?>
<fieldset><legend>Insertar Productos</legend>
    <form method="POST" action="InsertarProducto.php">
        <div>Tipo: </div>
        <div>
            <select name="selTipo">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
            </select>
        </div>
        <div>Nombre: </div>
        <div><input type="text" name="txtNombre"></div>
        <div>Precio: </div>
        <div><input type="text" name="txtPrecio" size="4"></div>
        <div><input type="submit" value="Add++"></div>
    </form>
</fieldset>
<?php include_once './vista/inc/pie.php' ?>