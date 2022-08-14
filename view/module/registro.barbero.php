<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barbero</title>
        <script src="https://kit.fontawesome.com/42541bfd20.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../css/registro.barbero.css">

    </head>
    <body>
        <!---header--->
        <header>
            <div class="logo"> 
                <img  class="logo1" src="../img/logo.jpg">
            </div>
            <div class="registro">REGISTRO BARBERO</div>
        </header>
        <!---aside--->
       <aside>
            <fieldset>
                <legend>Datos Barbero</legend>
                <!---formulario--->
                <form method="POST" name="formulario" id="formulario">
                    <div>
                    <input type="text1" id="txt1_nombre" name="txt1_nombre" placeholder="Nombres" required>
                    </div>
                    <div>
                    <input type="text2" id="txt2_apellido" name="txt2_apellido" placeholder="Apellidos" required>
                    </div>
                    <div required>
                    <select class="Nro" required>
                        <option value="Colombia">+57</option>
                        <option value="Brasil">+55</option>
                        <option value="Francia">+33</option>
                        <option value="Alemania">+49</option>
                        <option value="Chile">+56</option>
                        <option value="México">+52</option>
                        <option value="Perú">+51</option>
                        <option value="Venezuela">+58</option>
                        <option value="Italia">+39</option>
                        <option value="Ecuador">+593</option>
                        <option value="Honduras">+504</option>
                    </select>
                        <input type="number" id="txt_numbernumero" name="txt_numbernumero" placeholder="#Movil" required>
                    </div>
                    <div>
                        <input type="date" id="txt_datefecha" name="txt_datefecha" class="date1" placeholder="Fecha de nacimiento" required>
                        <label class="lbel1" for="2name">*Fecha de Nacimiento</label>
                    </div>
                    <div>
                        <select class="Fcion" id="txt_select" name="txt_select"required>
                            <option value="Formacion Academica">Formacion Academica</option>
                            <option value="Bachiller">Ninguna</option>
                            <option value="Bachiller">Primaria</option>
                            <option value="Bachiller">Segundaria</option>
                            <option value="Bachiller">Bachiller</option>
                            <option value="Tecnico">Tecnico</option>
                            <option value="Tecnologo">Tecnologo</option>
                            <option value="Bachiller">Profesional</option>
                            <option value="Bachiller">Otra</option>
                        </select>
                    </div>
                    <div>
                        <input type="text3" id="txt3_barberia" name="txt3_barberia" placeholder="Barberio o Establecimiento" required>
                    </div>
                    <div>
                        <input type="text4" id="txt4_direccion" name="txt_direccion" placeholder="Direccion" required>
                    </div>
                    <div>
                        <input type="email" id="txt_email" name="txt_email" placeholder="Email">
                        <label  class="lbel" for="tname">*Este funcionara como tu usuario</label>
                    </div>
                    <div>
                        <input type="text5" id="txt5_contrasena" name="txt5_contrasena" placeholder="Contraseña">
                        <label class="lbel1" for="2name">*Minimo 6 caracteres, máxino 12</label>
                    </div>
                    <div>
                        <button class="Cuar" type="submit">Guardar</button>
                    </div>
                </form>
                <?php
                    //-captura de datos para validar---//
                    if (isset($_POST["txt1_nombre"]) and $_POST["txt1_nombre"] != NULL) {
                        if (isset($_POST["txt5_contrasena"]) and $_POST["txt5_contrasena"] != NULL){
                            $objCon = new Prueba();
                            $objCon -> ctrCrearBarbero(
                                $_POST["txt1_nombre"],
                                $_POST["txt2_apellido"],
                                $_POST["txt_numbernumero"],
                                $_POST["txt_datefecha"],
                                $_POST["txt_select"],
                                $_POST["txt3_barberia"],
                                $_POST["txt4_direccion"],
                                $_POST["txt_email"],
                                $_POST["txt5_contrasena"]
                            );
                        }else {
                            echo "<script>alert('error al registrar usuario');</script>";
                        }    
                    }
                ?>
            </fieldset>
        </aside>
        <!---footer--->
        <footer>
            <div class="frase">
                I LOVE BARBER <i class="fa-solid fa-face-grin-hearts icon2"></i>
            </div>
        </footer>
    </body>
</html>