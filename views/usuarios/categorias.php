<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
<div class="row">
<div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'monitor'?>">
monitor
</a>
</div>
<div class="col-sm-4">
<a class="catequiposPC" href="productosCategoria.php?categoria=<?php echo 'equipos PC'?>">
equipos PC
</a>
</div> 

<div class="col-sm-4">
<a class="catteclado" href="productosCategoria.php?categoria=<?php echo 'teclapo'?>">
teclado
</a>
</div>

<div class="col-sm-4">
<a class="catmouse" href="productosCategoria.php?categoria=<?php echo 'mouse'?>">
mouse
</a>
</div>

<div class="col-sm-4">
<a class="catnodisponible" href="productosCategoria.php?categoria=<?php echo 'no disponible'?>">
no disponibles
</a>
</div>

</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>



<html>
        <head>
                <style>
                        .catelectronico {
                                background: rgb(233, 179, 227);
                                color: black;
                                border: 4px solid rgb(238, 13, 148);
                                font-weight: bold;
                                padding: 60px;
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        .catequiposPC {
                                background: rgb(233, 179, 227);
                                color: black;
                                border: 4px solid rgb(238, 13, 148);
                                font-weight: bold;
                                padding: 60px;
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        .catteclado {
                            background: rgb(233, 179, 227);
                                color: black;
                                border: 4px solid rgb(238, 13, 148);
                                font-weight: bold;
                                padding: 60px;
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        .catmouse {
                            background: rgb(233, 179, 227);
                                color: black;
                                border: 4px solid rgb(238, 13, 148);
                                font-weight: bold;
                                padding: 60px;
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        .catnodisponible {
                                background: rgb(233, 179, 227);
                                color: black;
                                border: 4px solid rgb(238, 13, 148);
                                font-weight: bold;
                                padding: 60px;
                                border-radius: 6px;
                                text-align:center;
                                width: 90%;
                                margin: 20px;
                                display: inline-block;
                                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        }
                        
                </style>
        </head>
</html>