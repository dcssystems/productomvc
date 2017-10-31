<?php include_once './vista/inc/cabecera.php' ?>
<?php include_once './vista/inc/menu.php' ?>
<div class="span-20 last">
<table border="1" style="margin: auto"> 
    <caption>Mantenimiento Productos</caption>
    <thead>
        <tr><th>Id</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th><a href="./formProducto.php">Add++</a></th>
        </tr>       
    </thead>
    <tbody>
        <?php foreach ($lista as $p) {?>
        <tr>
            <td><?php echo $p["idproducto"]?></td>
            <td><?php echo $p["idtipo"]?></td>
            <td><?php echo $p["nombre"]?></td>
            <td><?php echo $p["precio"]?></td>
            <td>&nbsp;   <a href="formProducto.php?accion=del&id=<?php echo $p["idproducto"]?>">
                    X
                </a>&nbsp;&nbsp;&nbsp;&nbsp;E&nbsp;</td>
        </tr>
        <?php }?>
    </tbody>
</table>
<?php include_once './vista/inc/pie.php' ?>