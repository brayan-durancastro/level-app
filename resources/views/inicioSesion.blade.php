<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title>Login Form in HTML and CSS | codehal</title>
        <link rel="stylesheet" href="{{ asset('public/Diseño.css') }}"/>
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <img src="{{ asset('imagenes/login.jpg') }}" alt="Fondo pagina de inicio"/>
    </head>

    <body>
        <div class="wrapper">
            <form action="">
                <h1>Inicia sesión</h1>
                <div class="input-box">
                    <input
                        type="text"
                        placeholder="Nombre de usuario"
                        required
                    />
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" required />
                    <i class="bx bxs-lock-alt"></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" />Recuerdame</label>
                    <a href="#">Olvidaste la contraseña?</a>
                </div>

                <!-- <button type="submit" class="btn">Iniciar</button> -->
                <a href="index.html"
                    ><button type="button" class="btn">Iniciar</button></a
                >

                <div class="register-link">
                    <p>
                        ¿No tienes una cuenta?
                        <a href="registro.html">Registrate</a>
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>
