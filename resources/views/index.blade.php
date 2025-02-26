<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>LevenGym - Home | By code info</title>
        <title>Pagina leven gym</title>
        <link rel="stylesheet" href="{{ asset('public/Diseño.css') }}"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
    
        <img src="{{ asset('imagenes/mejor.jpg') }}" alt="Fondo pagina de inicio"/>

        <a href="#"></a>
    </head>
    <body>
        <header class="header">
            <a href="#" class="Logo">
                <i class="fas fa-dumbbell"></i><b>LevelGym</b> </a
            >.
            <nav class="navbar">
                <a href="#">Inicio</a>
                <!--Home-->
                <a href="#">Servicios</a>
                <!--services-->
                <a href="error404.html">Contacto</a>
                <!--contact-->
                <a href="error500.html">Nosotros</a>
                <!--pricing-->
                <a href="#">|</a>
                <a href="inicioSesion.html" class="btn">Inicia sesión</a>
                <!--Login-->
                <a href="registro.html" class="btn"> Registrate</a>
                <!--sign up-->
            </nav>
        </header>

        <section class="home">
            <div class="max-width">
                <div class="home-content">
                    <h3>El exceso de entreno es bueno pa' la salud</h3>
                    <p>
                        ¡En el entreno no hay limites!. Es momento de darla toda
                        y sacar lo mejor de nosotros.Juntos!, vamos a romperla y
                        alcanzar nuestras metras! Aprovecha nuestros beneficios.
                    </p>
                    <button class="btn">¡Inscríbete!</button>
                </div>
                <div class="home-image">
                    <img src="imagenes/platano.jpg" alt="" />
                </div>
            </div>
        </section>
    </body>
</html>
