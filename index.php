<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="language" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="ArealAlien,arealalien,snake,html,css,javascript,php">
    <meta name="author" content="Areal Alien">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======= -->
    <!-- General -->
    <title>Snake</title>
    <link rel="icon" href="../../images/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../images/favicon/favicon.ico" type="image/x-icon">
    <!-- ===== -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- ======= -->
    <!-- Scripts -->
    <script src="app.js" defer></script>
    <!-- =========== -->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="app.css">
</head>
<body>
<div id="app" class="app">
    <div class="start-screen animated bounceIn">
        <img class="start-screen-logo" src="logo.png" alt="">

        <div class="options">
            <h3>Choose Difficulty</h3>
            <p class="end-score"></p>
            <button data-difficulty="75" class="active">Easy</button>
            <button data-difficulty="50">Medium</button>
            <button data-difficulty="25">Hard</button>
        </div>

        <button class="play-btn">Play</button>
    </div>

    <canvas></canvas>

    <div class="score">0</div>
</div>
</body>
</html>
