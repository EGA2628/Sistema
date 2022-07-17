<?php
    require "conexion.php";

    //recibir y almacenar los datos
    $nombre = $_POST["Nombre"];
    $identificacion = $_POST["Id"];
    $email = $_POST["Email"];
    $contraseña = $_POST["Pass"];
    $Usuario = $_POST["User"];

    //consulta
    $insertar = "INSERT INTO usuarios(email, identificacion, usuario, password, nombre, tipo_usuario) 
                 VALUES ('$email', '$identificacion', '$Usuario', '$contraseña', '$nombre', 2)";
            

    $verificar_usuario = $mysqli_query($mysqli, "SELECT * FROM usuarios WHERE usuarios = '$Usuario'");
    //ejecutar consulta
    $resultado = mysqli_query($mysqli, $insertar);

    if (!$resultado) {
        echo 'Error al registrarse';
    }else {
        echo 'Usuario registrado correctamente';
    }

    //cerrar conexion
    mysqli_close($mysqli);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear Cuenta</h3></div>
                                    <div class="card-body">
                                    <form method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Nombre Completo</label><input id="Nombre" name="Nombre" class="form-control py-4" type="text" placeholder="Nombre Completo" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Identificación</label><input id="Id" name="Id" class="form-control py-4" type="text" placeholder="Identificación(CC ó Similar)" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input id="Email" name="Email" class="form-control py-4" type="email" aria-describedby="emailHelp" placeholder="Email" /></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Contraseña</label><input id="Pass" name="Pass" class="form-control py-4" type="password" placeholder="Contraseña" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Usuario</label><input id="User" name="User" class="form-control py-4" type="password" placeholder="usuario" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.html">Crear Cuenta</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">Tienes cuenta?! Inicia Sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
