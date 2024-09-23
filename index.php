<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Invitación al cumple de Delfi">
    <meta name="keywords" content="Invitaciones, Cumple, Delfi">
    <meta name="author" content="dinamo">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Delfi">
    <meta property="og:description" content="Invitación al cumple de Delfi">
    <meta property="og:image" content="img/portada.jpg">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="526">
    <meta property="og:image:height" content="526">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:description" content="Invitación al cumple de Delfi">
    <meta name=" twitter:title" content="Delfi">
    <meta name="twitter:description" content="Invitación al cumple de Delfi">
    <meta name="twitter:image" content="img/portada.jpg">
    <title>Invitaciones Delfi</title>
    <link media="all" rel="shortcut icon" href="favicon.ico">
    <!--       CSS        -->
    <link media="all" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="preconnect"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link media="all" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link media="all" rel="preconnect" href="css/estilo.css">
    <link media="all" rel="stylesheet" href="css/estilo.css?<?= uniqid(); ?>">
    <link media="all"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;family=Roboto+Condensed:wght@400;700&amp;display=swap"
        rel="preconnect">
    <link media="all"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;family=Roboto+Condensed:wght@400;700&amp;display=swap"
        rel="stylesheet">
    <link media="all" rel="preconnect"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link media="all" rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!--       JS         -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer async></script>
    <script src="https://kit.fontawesome.com/c26ff7bcbf.js" crossorigin="anonymous" defer async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer async></script>
</head>

<body>
    <div class="container">
        <div class="invitacion">
            <div class="countdown-container">
                <div class="countdown-items">
                    <div class="countdown-item">
                        <div class="countdown-number" id="days">00</div>
                        <div class="countdown-label">Días</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="hours">00</div>
                        <div class="countdown-label">Horas</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="minutes">00</div>
                        <div class="countdown-label">Minutos</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="seconds">00</div>
                        <div class="countdown-label">Segundos</div>
                    </div>
                </div>
                <button class="confirmation-button"><a href="https://forms.gle/PQar2ByTtLJVs3L7A">Confirmar</a></button>
                <div class="confirmation-message">Confirmar asistencia para luego<br>recibir la invitación.</div>
            </div>
        </div>
    </div>
</body>
<script>
    // Establece la fecha a la que estamos contando
    var countDownDate = new Date("Oct 27, 2024 14:00:00").getTime();

    // Actualiza la cuenta regresiva cada 1 segundo
    var x = setInterval(function() {

        // Obtiene la fecha y hora actuales
        var now = new Date().getTime();

        // Calcula la distancia entre ahora y la fecha de cuenta regresiva
        var distance = countDownDate - now;

        // Calcula el tiempo en días, horas, minutos y segundos
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Añade un 0 delante si el número es menor a 10
        days = String(days).padStart(2, '0');
        hours = String(hours).padStart(2, '0');
        minutes = String(minutes).padStart(2, '0');
        seconds = String(seconds).padStart(2, '0');

        // Muestra los resultados en los elementos correspondientes
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // Si la cuenta regresiva ha terminado, muestra "¡Feliz cumpleaños!"
        if (distance < 0) {
            clearInterval(x);
            document.querySelector(".countdown-container").innerHTML = "<div class='celebration-message'>¡Feliz cumpleaños!</div>";
        }
    }, 1000);
</script>
</html>