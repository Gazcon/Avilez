 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/login.css">
   
</head>
<body>
<!-- FORMULARIO INICIO DE SESION-->
   
    <form method="post" class="formulario">
        <div class="bienvenido">¡Bienvenido!</div>
        <i class="fa-solid fa-circle-user icon3"></i>
<!-- INICIA EL CONTENEDOR-->
        <div class="contenedor">
       
                     
            <input type="text" class ="inputs" name="txtUser" placeholder="Ingresar E-mail" require>
            
            
            <input type="password" class ="inputs" name="txtPass" placeholder="Ingresar Contraseña" require>
            
 
           
<!-- ENLACES -->
            <a class="link" href="view/module/recordar.clave.php">Recordar Contraseña</a><br/>
            <br>¿Eres Barbero?<a class="link2" href=""> Registrate</a>
            <br>
<!-- BOTONES-->        
            <br><input class="btn" type="submit" value="Iniciar Sesion">
            <input href="Form_Usua.php"class="btn2" type="button" value="Registrar Cuenta">
        </div>
           
    </form>
    <!--CONTRALADOR CONEXION -->
    <?php
    if (isset($_POST["txtUser"])){
        $user = $_POST["txtUser"];
        $pass = $_POST["txtPass"];
        $objCon = new ConexionController();
        $objCon -> ctrLogin($user, $pass);
    }
 
    ?>
 
    <div class="frase">
        I LOVE <i class="fa-solid fa-face-grin-hearts icon2"></i><br>BARBER
    </div>
</body>
</html>
 
 
