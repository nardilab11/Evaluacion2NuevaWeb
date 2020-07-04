<?php
session_start();
include_once 'Modelo/Venta.php';
include_once 'Modelo/Cliente.php';
include_once 'Controlador/CProducto.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <link href="CSS/CSSCompra.css" rel="stylesheet" type="text/css"/>
    </head>    
    <body> <?php
if(isset($_SESSION["user"])){
    $total = 0;
    foreach(unserialize($_SESSION["catalogo"])->getCarrito() as $item){
        $total = $total + $item->getPrecio();
        $fecha = date("jnY");
        $idProducto = $item->getId();
        $idCliente = unserialize($_SESSION["user"])->getTelefono();
        $venta = new Venta($fecha, $idProducto, $idCliente); ?>
        <div class="itemCompra">
            <div>
                <label> <?php echo ("ID del producto: ".$item->getId()); ?> </label>
            </div>
            <div>
                <label> <?php echo ($item->getNombre()); ?> </label>
            </div>
            <img src="Img/box.png" alt="" width=100" height="100"/>
            <div>
                <label> <?php echo ("Cantidad disponible: ".$item->getCantidad()); ?> </label>
            </div>
            <div>
                <label> <?php echo ("Precio: $".$item->getPrecio()); ?> </label>
            </div>
        </div> <?php 
        
    } ?>
    <div id="lblTotal">
        <label> <?php echo ("Total: $".$total); ?> </label>
    </div>
        <div class="btnVolverCompra">
        <a href="index.php">Volver</a>
    </div> <?php 
}else{ ?>
    <div id="lblNoSesionCompra">
        <label>No hay sesión iniciada. Inicie sesión para poder comprar.</label>
    </div>
    <div class="btnVolverCompra">
        <a href="index.php" >Volver</a>
    </div>
<?php } ?>
    </body>
</html>