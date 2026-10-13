<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="./images/logo_fondo.png">
</head>
<body>
  
<div class="signupFrm">
    <form name="loginForm" action="" method="post" class="form">
        <img src="./images/logo_fondo.png" alt="Logo" class="logo">
        <h1 class="title">Iniciar sesión</h1>

        <div class="inputContainer">
            <input type="text" class="input" placeholder="Email">
            <label for="" class="label">Email</label>
        </div>

        <!-- <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label">Usuario</label>
        </div> -->

        <div class="inputContainer">
            <input type="text" class="input" placeholder="Contraseña">
            <label for="" class="label">Contraseña</label>
        </div>

        <!-- <div class="inputContainer">
            <input type="text" class="input" placeholder="a">
            <label for="" class="label">Confirmar Contraseña</label>
        </div> -->

        <input type="submit" class="submitBtn" value="Entrar">
        <a class="forgotPassword" href="cambiar_contraseña.html">Cambiar contraseña</a>
    </form>
</div>
</body>
</html>