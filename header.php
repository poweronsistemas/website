<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PJXVQVVXZK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-PJXVQVVXZK');
    </script>
    <title>PowerOn Sistemas | <?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
    <meta property="og:title" content="PowerOn Sistemas - <?= $title ?>"/>
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.poweronsistemas.com.ar/assets/img/logo_circle.png">
    <link rel="stylesheet" href="/assets/semantic-ui/semantic.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <?php foreach ($styles as $style): ?>
    <link rel="stylesheet" href="<?= $style ?>">
    <?php endforeach ?>
    <script src="/assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="/assets/semantic-ui/semantic.min.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <?php foreach ($scripts as $script): ?>
    <script src="<?= $script['src'] ?>" <?= key_exists('tags', $scripts) ? implode(' ', $script['tags']) : '' ?> type="text/javascript"></script>
    <?php endforeach ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#ec8b12">
    <link rel="shortcut icon" href="/assets/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript" src="https://chatbot.poweronsistemas.com.ar/api/chatbot.js?k=M2ZlTUJkMzRIa2g1LytVZmZ1M0VTdz09"></script>
</head>
<body>
    <div class="main-header">
        <img src="/assets/img/logo_h_letters_white.png" class="logo" alt="POWERON SISTEMAS">
        <div class="center-circle"></div>
        <img src="/assets/img/logo_circle_small.png" class="center-image">
        <div class="typewriter">
            <div class="typewriter-text">Estudia, organiza, proyecta tus ideas.</div>
        </div>
    </div>
    <div class="mobile-menu-container">
        <div class="mobile-menu ui icon menu small fixed top inverted">
            <div class="ui dropdown item">
                <i class="icon bars"></i>
                <div class="menu">
                    <a class="item <?= $sector == 'home' ? 'active' : '' ?>" href="/"><i class="icon home"></i> INICIO</a>
                    <a class="item <?= $sector == 'services' ? 'active' : '' ?>" href="/services"><i class="icon wrench"></i> SERVICIOS</a>
                    <a class="item <?= $sector == 'portfolio' ? 'active' : '' ?>" href="/portfolio"><i class="icon briefcase"></i> PORTFOLIO</a>
                    <a class="item <?= $sector == 'contact' ? 'active' : '' ?>" href="/contact.php"><i class="icon mail"></i> CONTACTO</a>
                </div>
            </div>
            <div class="item header">
                <img src="/assets/img/logo_circle_small.png">
                PowerOn Sistemas
            </div>
        </div>
    </div>
    <nav>
        <ul class="navigation-left">
            <li <?= $sector == 'home' ? 'class="active"' : '' ?>>
                <a href="/">
                    INICIO
                </a>
            </li>
            <li <?= $sector == 'services' ? 'class="active"' : '' ?>>
                <a href="/services">
                    SERVICIOS
                </a>
            </li>
        </ul>
        <ul class="navigation-right">
            <li <?= $sector == 'portfolio' ? 'class="active"' : '' ?>>
                <a href="/portfolio">
                    PORTFOLIO
                </a>
            </li>
            <li <?= $sector == 'contact' ? 'class="active"' : '' ?>>
                <a href="/contact.php">
                    CONTACTO
                </a>
            </li>
        </ul>
    </nav>
    <div class="middle-hidder"></div>