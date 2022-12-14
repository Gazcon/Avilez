<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../../view/css/usuariosStyle.css">
    <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    <script src="view/js/sweetalert2.all.min.js"></script>
 
</head>
 
<body>
    <header>
        <div class="logo1u">
            <img class="logo1a" src="veiw/img/logo.jpg">
        </div>
        <div class="R_usuari">REGISTRO DE USUARIOS</div>
    </header>
    <main class="main1">
        <form class="Form_datper" method="POST">
            <fieldset class="DatPers1">
                <legend class="Lege_txto">Datos Personales</legend>
                <div>
                    <br>
                    <input type="text" id="txt_nombre" name="txt_nombre" placeholder="Nombres" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="text" id="txta_pellido" name="txt_apellido" placeholder="Apellidos" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="text" id="txt_cedula" name="txt_cedula" placeholder="cedula" class="BotDatPer" required>
                </div>
                <br>
                <br>
                <div>
                    <select class="indi">
                        <option>+57</option>
                        <option>+54</option>
                        <option>+51</option>
                        <option>+591</option>
                    </select><input type="number" id="txt_numerocel" name="txt_numerocel" placeholder="# Movil" class="BotDa_Num" required>
                </div>
                <br>
                <br>
                <div>
                    <input type="date_create" id="txt_fnacimiento" name="txt_fecha" placeholder="a??o/mes/dia" class="BotDatPer" required>
                    <br>
                    *Fecha de Nacimiento
                </div>
                <br>
                <div>
                    <input type="email" id="txt_email" name="txt_email" placeholder="E-mail" class="Bot_emai" required>
                    <br>
                    *este funcionara como tu usuario
                </div>
                <br>
                <br>
                <div>
                    <input type="password" id="txt_contrasena" name="txt_contrasena" placeholder="Contrase??a" class="BotDatUsu" required>
                    <br>
                    *minimo 6 caracteres maximo 12
 
                </div>
                <br>
                <br>
                <br>
                <p class="TyC"><input type="checkbox" required>Acepto terminos y condiciones <a href="ver TyC">ver tyc</a> </p>
 
                <p class="TyC"><input type="checkbox" required>Acepto tratamientos de datos personales </p>
                <br>
                <div class="b">
                    <button type="submit" class="btnCo4">Guardar</button>
                </div>
                <br>
            </fieldset>
        </form>
        <?php
        if (isset($_POST["txt_cedula"])) {
 
            $objCtrUsu = new ControllerRegistro();
            $objCtrUsu->ctrInsertarUsuario(
                $_POST["txt_cedula"],
                $_POST["txt_nombre"],
                $_POST["txt_apellido"],
                $_POST["txt_numerocel"],
                $_POST["txt_fecha"],
                $_POST["txt_email"],
                $_POST["txt_contrasena"]
            );
        }
 
        ?>
 
</body>
 
</html>
 
