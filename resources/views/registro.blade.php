<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/Diseño.css') }}"/>
    <title>Registro</title>
    <img src="{{ asset('imagenes/login.jpg') }}" alt="Fondo pagina de inicio"/>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Registrate</h1>
            <div class="input-box">
                <input type="text" placeholder="Nombre" 
                required>
                <br>
                <br>
                <input type="text" placeholder=" Email" 
                required>
                <br>
                <i class='bx bxs-user'></i>
            </div>
            <br>
            <div class="input-box">
                <input type="password" 
                placeholder="Contraseña" required>
                <i class='bx bxs-lock-alt'></i>
                
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Recuerdame</label>

            </div>

            <a href="index.html">
                <button type="button" class="btn">Registrate</button>
            </a>

            <div class="register-link">
                <p>¿Ya eres miembro?  <a 
                    href="inicioSesion.html">Inicia sesión</a></p>
            </div>
</body>
</html>