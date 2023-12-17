<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <!--Imagen De Fondo-->
        <div class="img">
            <img src="img/Hor1.jpeg" alt="Fondo">
        </div>
        <!--Formulario de Login y registro-->
        <div class="container">
            <div>
                <div class="contenedor_login">
                    <img src="img/perfilm.jpeg" alt="perfil">
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                        <input type="text" placeholder="Nombre completo" name="nombre_completo" >
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario"name="usuario">
                        <input type="password" placeholder="Contraseña"name="contrasena">
                        <button>Regístrarse</button> 
                        <button>Login In</button>
                    </form>
                </div>


            </div>
            

        </div>
    </main>

    <script src="js/script.js"></script>

</body>
</html>