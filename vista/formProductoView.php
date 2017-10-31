<?php include_once './vista/inc/cabecera.php' ?>
<?php include_once'./vista/inc/menu.php' ?>
<fieldset>
    <legend>
        <?php echo $parametros["label"]?> Productos
    </legend>
    <form method="POST" action="<?php echo $parametros["action"] ?>">
        <div>Tipo: </div>
        <div>
            <select name="selTipo">
                    <option value="1" <?php echo (!empty($producto[0]["idtipo"]) == 1 )?'selected':''; ?>>1</option>
                    <option value="2" <?php echo (!empty($producto[0]["idtipo"]) == 2 )?'selected':''; ?>>2</option>
                    <option value="3" <?php echo (!empty($producto[0]["idtipo"]) == 3 )?'selected':''; ?>>3</option>
            </select>
        </div>
        <div>Nombre: </div>
        <div><input type="text" name="txtNombre" 
                    value="<?php echo (!empty($producto[0]["nombre"])==1)?$producto[0]["nombre"]:'';?>"
                      <?php echo ($parametros["opcion"] == "readonly" )?'readonly':''; ?> >
        </div>
        <div>Precio: </div>
        <div><input type="text" name="txtPrecio" size="4"
                    value="<?php echo (!empty($producto[0]["precio"])==1)?$producto[0]["precio"]:'';?>">
        </div>
        <div><input type="submit" value="<?php echo $parametros["label"] ?>"></div>
        <input type="hidden" name="idproducto" 
               value="<?php echo (!empty($producto[0]["idproducto"])==1)?$producto[0]["idproducto"]:'';?>">
               <!--<pre><?php echo var_dump($producto) ?></pre>-->
    </form>
</fieldset>
<?php include_once './vista/inc/pie.php' ?>