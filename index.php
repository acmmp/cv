<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Interactivo - Adrián Campayo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>

<header>
    <h1>Currículum de Adrián Campayo</h1>
</header>

<div class="container">
    <img src="ruta/a/tu/foto.jpg" alt="Foto de Adrián Campayo" class="profile-photo">
    
    <section>
        <h2>Contacto</h2>
        <div class="contact">
            <div>
                <p><i class="fas fa-user icon"></i><strong>Nombre:</strong> Adrián Campayo Martin</p>
                <p><i class="fas fa-phone icon"></i><strong>Teléfono:</strong> 685-905-896</p>
                <p><i class="fas fa-envelope icon"></i><strong>Email:</strong> adriancampayo@hotmail.com</p>
            </div>
            <div>
                <p><i class="fas fa-id-card icon"></i><strong>Carnet de conducir:</strong> B</p>
                <p><i class="fas fa-car icon"></i><strong>Vehículo propio:</strong> Sí</p>
                <p><i class="fas fa-calendar-alt icon"></i><strong>Disponibilidad:</strong> Total</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Perfil</h2>
        <p>Me considero un aprendiz constante, siempre buscando oportunidades para mejorar mis habilidades y conocimientos.</p>
    </section>

    <section>
        <h2>Habilidades</h2>
        <div class="skills">
            <div>
                <ul>
                    <li><i class="fas fa-check icon"></i>Buena comunicación</li>
                    <li><i class="fas fa-check icon"></i>Resolución de problemas</li>
                    <li><i class="fas fa-check icon"></i>Dominio del paquete Office</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><i class="fas fa-check icon"></i>Agilidad con los resultados</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <h2>Datos Académicos</h2>
        <p><i class="fas fa-school icon"></i><strong>Ciclo Formativo Grado Superior - Cesur Málaga-Este</strong></p>
        <p>Desarrollo y Aplicaciones Web | Septiembre 2022 - Junio 2024</p>
        <p><i class="fas fa-school icon"></i><strong>Ciclo Formativo Grado Medio - Cesur Málaga-Este</strong></p>
        <p>Sistemas Microinformáticos y Redes | Septiembre 2020 - Junio 2022</p>
    </section>

    <section>
        <h2>Habilidades Idiomas</h2>
        <p><i class="fas fa-language icon"></i>Castellano: Nativo.</p>
        <p><i class="fas fa-language icon"></i>Inglés: Nivel bajo.</p>
    </section>

    <section>
        <h2>Experiencia Laboral</h2>
        <p><i class="fas fa-briefcase icon"></i><strong>Técnico Informático - OPPLUS</strong></p>
        <p>FCT Grado Medio. | mar. 2022 - jun. 2022 · 4 meses</p>
   
        <p><i class="fas fa-briefcase icon"></i><strong>Desarrollador de front-end- IURBAN</strong></p>
        <p>FCT Grado Superior. | mar. 2024 - jun. 2024 · 4 meses</p>
    </section>

    <section>
        <h2>Conocimientos Técnicos</h2>
        <div class="tech-icons">
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP">
                <p>PHP</p>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML">
                <p>HTML</p>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" alt="Bootstrap">
                <p>Bootstrap</p>
            </div>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript">
                <p>JavaScript</p>
            </div>
        </div>
    </section>



    <section>
        <button class="button" onclick="toggleGitHub()">Mostrar GitHub</button>
        <div class="github-info" id="githubInfo">
            <p><i class="fab fa-github icon"></i><strong>GitHub:</strong> <a href="https://github.com/acmmp?tab=repositories" target="_blank">https://github.com/acmmp?tab=repositories</a></p>
        </div>
    </section>

    <section>
        <button class="button" onclick="toggleMoreInfo()">Más Información</button>
        <div class="more-info" id="moreInfo">
            <p>Adrián Campayo es un técnico informático dedicado con experiencia en sistemas microinformáticos y redes. Siempre busca mejorar sus habilidades y aportar valor a su equipo.</p>
        </div>
    </section>
</div>

<footer>
    &copy; 2024 Adrián Campayo
</footer>

<script>
    function toggleMoreInfo() {
        var moreInfo = document.getElementById('moreInfo');
        if (moreInfo.style.display === 'none' || moreInfo.style.display === '') {
            moreInfo.style.display = 'block';
        } else {
            moreInfo.style.display = 'none';
        }
    }

    function toggleGitHub() {
        var githubInfo = document.getElementById('githubInfo');
        if (githubInfo.style.display === 'none' || githubInfo.style.display === '') {
            githubInfo.style.display = 'block';
        } else {
            githubInfo.style.display = 'none';
        }
    }
</script>

</body>
</html>
