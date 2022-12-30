<?php
if (isset($_POST['submit'])) {
  $secret = "YOUR_SECRET_KEY";
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
  $data = file_get_contents($url);
  $row = json_decode($data, true);

  if ($row['success'] == "true") {
    echo "<script>alert('Wow you are not a robot 😲');</script>";
  } else {
    echo "<script>alert('Oops you are a robot 😡');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="ScriptDan - Desarrollador Web">
    <meta name="description" content="Empieza a tener presencia online, no pierdas tiempo, desarrollo tu web a medida, landing page, E-commerce, blogs, trabajemos juntos, sea cual sea su idea le ayudare a hacerla realidad.">
    <title>ScriptDan | Desarrollo Web</title>
    <link rel="icon" type="image/png" href="imagenes/iconoscript.png" />
    <link rel="stylesheet" href="../normalize/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css?v2.1.5">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="mainstyle.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="61144006-2c6e-4d08-a19c-fee2468dfc1a";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
 <div class="snaptarget"></div>
        <i  class="icon-menu burguer-button" id="burguer-menu"></i>

<!-- menu -->
<header class="header">
    <div class="container">
        <div class="logo">
            <img height="65" src="./imagenes/scriptdanlg.png" alt="logo de https://www.scriptdan.xyz">
        </div>
        <nav class="menu ">
            <ul>
                <li><a class="desplazar" href="#hero">Inicio</a></li>
                <li><a class="desplazar" href="#portafolio">Sobre mí</a></li>
                <li><a class="desplazar" href="#paginas">Portafolio</a></li>
                <li><a class="desplazar" href="#contacto">Contáctame</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- /menu -->
<!-- particulas -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="contenedor-texto">
                <div class="titulo">
                    <span class="typed"></span>
                </div>
                <div class="titulo" id="cadenas-texto">
                    <p>Hola!! soy <span class="escrito">Adán Hernández</span><br>Desarrollador <i class="escrito">Front-End.</i></p>
                    <p>Hola!! soy <span class="escrito">Adán Hernández</span><br>Desarrollador <i class="escrito">Back-End.</i></p>
                </div>

            </div>
            <div id="particles-js"></div>
        </div>
    </section>
<!-- /particulas -->
<!-- Portafolio -->
    <section id="portafolio" class="portafolio">
        <div class="container">
            <h2 class="list-title">Más sobre mi</h2>
            <article class="project">
                <div class="project-details">
                    <h3 class="project-title">ScriptDan</h3>
                    <h6 class="project-course">html <span class="fab fa-html5"></span> / css <span class="fab fa-css3"></span> / Javascript <span class="fab fa-js"></span><br>php <span class="fab fa-php"></span> / Mysql <span class="fas fa-database"></span></h6>
                    <p class="project-date"><small><strong>Tiempo de actividad: 2019-2020</strong></small></p>
                    <p class="project-description">¡Hola! Me llamo <strong>Adán Hernández</strong> y soy un <strong>Freelance Full Stack Developer Junior</strong> (Front-End, Back-End), informático especializado
                        en programación web y desarrollos avanzados, tengo experiencia a nivel empresarial desde proyectos orientados a particulares hasta startups y empresas.<br><br>
                    Este sitio web fue diseñado y construido por mí, una pequeña muestra de los conocimientos que he ido forjando a través del tiempo y que seguirán creciendo, ya que me considero muy afortunado, porque mi "trabajo", tal como es,
                    generalmente implica hacer lo que amo.</p>
                </div>
                <figure class="project-imageContainer">
                    <img class="project-image" src="./imagenes/dev.svg" alt="Im root">
                </figure>
            </article>

        </div>

    </section>
<!-- /Portafolio -->
<!-- cards  -->
    <section class="tarjetas" id="paginas">
        <div class="container">
            <h2 class="cards-title">Desarrollo de sitios Web</h2>
            <div class="tarjetitas">
                <div class="card">
                    <img src="./imagenes/web.jpg" alt="">
                    <h4>A medida</h4>
                    <p>Sitios web diseñados de cero y programados de cero.</p>
                </div>
                <div class="card">
                    <img src="./imagenes/medida.jpg" alt="">
                    <h4>Blogs</h4>
                    <p>Para desarrollo de blogs uso cms como wordpress o de cero con bootstrap.</p>
                </div>
                <div class="card">
                    <img src="./imagenes/estatica.png" alt="">
                    <h4>Landing page</h4>
                    <p>Para landing page puedo usar cms como wordpress o de cero con bootstrap u otros frameworks.</p>
                </div>
                <div class="card">
                    <img src="./imagenes/desarrollo.png" alt="">
                    <h4>Otros</h4>
                    <p>Páginas estáticas, Informativas, Intranets, Ecommerces.</p>
                </div>
            </div>
        </div>

    </section>
<!-- cards -->
<!-- experiencia -->
    <div class="container">
        <h2 class="pagi-list-title">Portafolio</h2>
    </div>
    <section id="paginas" class="pagi-list">
        <div class="container">
            <!--<article class="pagi">-->
            <!--    <figure class="pagi-imageContainer">-->
            <!--        <img  src="./imagenes/agenda.png" alt="agendacomunitaria">-->
            <!--    </figure>-->
            <!--    <div class="pagi-details">-->
            <!--        <h3>Agenda comunitaria anzoátegui</h3>-->
            <!--        <p class="pagi-description">Web diseñada para una excelente comunidad que busca brindar herramientas que contribuyan a la reconciliación, reconocimiento-->
            <!--             y respeto entre venezolanos.</p>-->
            <!--        <a class="pagi-url" href="https://www.agendacomunitaria.com.ve/" target="_blank">Ver más</a>-->
            <!--    </div>-->
            <!--</article>-->
            <article class="pagi">
                <figure class="pagi-imageContainer" >
                    <img src="./imagenes/mobilefirst.jpg" alt="mobilefirst">

                </figure>
                <div class="pagi-details">
                    <h3>Mobile First</h3>
                    <p class="pagi-description">Diseño responsive de una web de criptomonedas, partiendo de la vista mobile a la Desktop, 10/2020.</p>
                    <a href="https://adanhernandez2.github.io/mobilefirst/" class="pagi-url" target="_blank">Ver más</a>
                </div>
            </article>
            <article class="pagi">
                <figure class="pagi-imageContainer" >
                    <img  src="./imagenes/bootstrapdan.png" alt="bootstrap">

                </figure>
                <div class="pagi-details">
                    <h3>Template bootstrap</h3>
                    <p class="pagi-description">Template basico realizado en bootstrap.</p>
                        <a href="https://adanhernandez2.github.io/responsive-designe/" class="pagi-url" target="_blank">Ver más</a>
                </div>
            </article>
            <!--<article class="pagi">-->
            <!--    <figure class="pagi-imageContainer" >-->
            <!--        <img src="./imagenes/hiteacher.jpg" alt="wordpress">-->

            <!--    </figure>-->
            <!--    <div class="pagi-details">-->
            <!--        <h3>Hi teacher academy</h3>-->
            <!--        <p class="pagi-description">E-learning desarrollada en wordpress para una academia de cursos online.</p>-->
            <!--            <a href="https://www.hiteacherjanethacademy.tk/" class="pagi-url" target="_blank">Ver más</a>-->
            <!--    </div>-->
            <!--</article>-->
            <article class="pagi">
                <figure class="pagi-imageContainer" >
                    <img src="./imagenes/landingwordp.jpg" alt="wordpress">

                </figure>
                <div class="pagi-details">
                    <h3>Malaga invesment</h3>
                    <p class="pagi-description">Landing page realizada en wordpress para empresa de inmuebles en españa.</p>
                        <a href="https://dev.scriptdan.xyz/" class="pagi-url" target="_blank">Ver más</a>
                </div>
            </article>
            <article class="pagi">
                <figure class="pagi-imageContainer" >
                    <img src="./imagenes/parallax.png" alt="efecto parallax">

                </figure>
                <div class="pagi-details">
                    <h3>Página web con efecto parallax</h3>
                    <p class="pagi-description">Muestra de página web con efecto parallax, efecto que da satisfacción a la vista, 12/2018.</p>
                        <a href="https://adanhernandez2.github.io/New_Repository/" class="pagi-url" target="_blank">Ver más</a>
                </div>
            </article>
            <article class="pagi">
                <figure class="pagi-imageContainer" >
                    <img src="./imagenes/estatica.png" alt="web estatica">

                </figure>
                <div class="pagi-details">
                    <h3>Página web estática</h3>
                    <p class="pagi-description">Muestra de página web estática sencilla.</p>
                        <a href="https://adanhernandez2.github.io/estatica/" class="pagi-url" target="_blank">Ver más</a>
                </div>
            </article>


        </div>
    </section>
<!-- /experiencia -->
<!-- contacto -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="main-content">
                <div class="left box">
                    <h2>Sobre mí</h2>
                    <span class="arr-barra"></span>

                    <div class="content">
                        <p>Me encanta programar, me gusta como ha aportado la programación al mundo, el como mi manera de pensar cambio, me ha enseñado a tener la cabeza más organizada y poder expandir mis horizontes, no es para nada sencillo, pero al sentarme y hacer lo que me gusta, programar, me siento increíble.</p>
                            <div class="social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="https://twitter.com/adan_hernandez2" target="_blank"><span class="fab fa-twitter" ></span></a>
                                <a href="https://www.instagram.com/hernandez2_adan/" target="_blank"><span class="fab fa-instagram" ></span></a>
                                <a href="https://github.com/AdanHernandez2" target="_blank"><span class="fab fa-github" ></span></a>
                                <a href="https://codepen.io/Hernandezluis2" target="_blank"><span class="fab fa-codepen" ></span></a>
                                <a href="https://t.me/DeveloperDan" target="_blank"><span class="fab fa-telegram" ></span></a>
                            </div>
                    </div>
                </div>
                <div class="center box">
                    <h2>Información</h2>
                    <span class="arr-barra"></span>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Anzoategui, Barcelona</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+58 416-318-40-20</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">scriptsdan@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="rigth box">
                    <h2>Contactame</h2>
                    <span class="arr-barra"></span>
                    <div class="content">
                        <form class="form-email" method="post">
                                <input name="name" type="text" placeholder="Nombre completo" id="email" required><span class="barra"></span>
                                <input name="cel" type="tel" placeholder="+00 000 00 00" id="email" required><span class="barra"></span>
                                <input type="email" placeholder="Déjame tu email" id="email" required><span class="barra"></span>
                                <textarea id="msgForm" name="message" placeholder="Asunto..." rows="2" cols="25"></textarea><span class="barra"></span>
                                 <div class="g-recaptcha" data-sitekey="6LdgRukeAAAAAAy4oOl4cNIykBGvVmDTw8YZvCfv"></div>
                                
                                <button type="submit" name="button">Enviar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </section>
<!-- /contacto -->
<!-- boton ir arriba -->

    <i class="icon-flecha regresar" id="buttonUp"></i>

<!-- /boton ir arriba -->
<!-- footer -->
<footer class="footer">
    <div class="container">
        <div>
                <span class="far fa-copyright"></span><a href="#"> ScriptDan </a>
                 <span class="credit">| 2020 All rights reserved.</span>
        </div>
    </div>
</footer>
<!-- /footer -->
<script src="./js/particles.js"></script>
<script src="./js/app.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="main.js" charset="utf-8"></script>
</body>

</html>
