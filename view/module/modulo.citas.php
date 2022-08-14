<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view/css/modulo.citas.css">
    
    

</head>
<body>

<header class="header">
    <nav class="nav">
        
        <a href="index.php?ruta=citas"><button type="button" class="btn-home">HOME <i class="fa-solid fa-house-user"></i></i></button></a>

    </nav>
</header>

<div class="user">
<div class="imag">
<img src="view/img/colombia.png" class="img-circ"  alt="User Image">
</div>
<div class="info">
<a href="#" class="name">Nombre de usuario</a>
</div>
</div>



<div class="col">
    <h1 class = "titulo">GO TO</h1>
<div class="nav" id="tab" role="tablist" aria-orientation="vertical">


<a class="btn btn-app" href="index.php?ruta=Usuario">
<i class="fa-solid fa-circle-user logo-mod"></i><br>
USUARIO
</a>




</div>
</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Citas</h3>
</div>

<div class="card-body">
<form method="post">
<div class="form-group">
<label for="exampleInputEmail1">Nombre</label>
<input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="Ingrese nombre" required>




<?php 

$mysqli = mysqli_connect("localhost", "root","","barbers");
$resultado = mysqli_query($mysqli,"select * from servicios");

?>



<label for="exampleInputPassword1">Servicio adicional</label>
<select name="servicio" class="form-control" id="txtservicio" name="txtservicio" required>
<option value="">Seleccionar servicio</option>
    <?php

        while ($fila = $resultado->FETCH_ASSOC()):
        $id = $fila['ID_SERVICIO'];
        $descrip = $fila['DESCRIPCION'];
        echo "<option value=$id>$descrip</option>";
            endwhile;

    ?>
</select>





<label for="exampleInputPassword1">Barberia</label>
<select name="servicio" class="form-control" id="txtbarberia" name="txtbarberia" required>
    <option value="">Seleccionar Barberia</option>
    <?php
    $resultado = mysqli_query($mysqli,"select * from barberias");

        while ($fila = $resultado->FETCH_ASSOC()):
        $id = $fila['ID_BARBERIA'];
        $barb= $fila['NOMBRE'];
        echo "<option value=$id>$barb</option>";
            endwhile;

    ?>
    
</select>


</div>

<div class="form-group2">
<label for="exampleInputEmail1">fecha</label>
<input type="date" class="form-control" id="datefecha" name="datefecha" required >



<label for="exampleInputPassword1">hora</label>
<input type="time" class="form-control" id="timehora" name="timehora" required>


<label for="exampleInputPassword1">Barbero</label>
<select name="servicio" class="form-control" id="txtbarbero" name="txtbarbero" required>
    <option value="">Seleccionar Barbero</option>
<?php
    $resultado = mysqli_query($mysqli,"select * from barberos");

        while ($fila = $resultado->FETCH_ASSOC()):
        $id = $fila['ID_BARBERO'];
        $barb= $fila['NOMBRE'];
        echo "<option value=$id>$barb</option>";
            endwhile;

    ?>
</select>


</div>




<div class="card-footer">
<h1>*Diligenciar todos los campos.</h1>
</div>


</form>

<?php
if (isset($_POST["txtnombre"]))

?>

</div>











<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>