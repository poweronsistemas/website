<?php 
    $sector = 'services';
    $title = 'ChatBot';
    $description = 'PowerOn ChatBot es un bot programado con inteligencia artificial destinado a distintos propósitos totalmente personalizables, atendé tu WhatsApp y/o tu página web de forma automática con tu propio bot.';
    $scripts = [];
    $styles = ['/assets/css/chatbot.css'];
    include_once '../header.php';
?>
<div class="header-success-background-container">
    <div class="text-header-container">
        <h1 class="ui huge inverted header">
            <div class="content">
                POWERON CHATBOT
                <span class="sub header">
                    Un bot para atención automática de tus clientes, totalmente personalizable
                </span>
            </div>
        </h1>
    </div>
</div>
<div class="ui container chatbot-container">
    <img src="/assets/img/services/chatbot_logo.png" class="ui centered aligned image">
    <div class="ui divider"></div>
    <div class="ui images">
        <img src="/assets/img/services/chatbot_screen3.png">
        <img src="/assets/img/services/chatbot_screen4.png">
    </div>
    <br>
    <a class="ui massive labeled icon button primary" href="https://chatbot.poweronsistemas.com.ar/account/register">
        <i class="icon arrow up"></i>
        CREAR CUENTA GRATUITA
    </a>
    <br><br>        
</div>
<br><br>
<div class="ui text container">
    <h1 class="ui header">
        <i class="icon teal users "></i>
        <div class="content">
            NO PIERDAS NINGÚN CLIENTE
        </div>
    </h1>
    <p>
        Con el ChatBot de PowerOn Sistemas podés atender las 24hs los 7 días a la semana a tus clientes de forma automática,
        de forma inteligente, programá tu chatbot para el propósito que necesites.
    </p>
    <br>
    <h1 class="ui header">
        <i class="icon whatsapp green"></i>
        <div class="content">
            INTEGRACIÓN CON WHATSAPP
        </div>
    </h1>
    <p>
        Dejá que tu chatbot también atienda tu WhatsApp, contestando respuestas programadas de forma automática. Totalmente configurable.
        ¡Pedí tus días de prueba!.
    </p>
    <br>
    <h1 class="ui header">
        <i class="icon comments violet"></i>
        <div class="content">
            RESPUESTAS AUTOMÁTICAS CONFIGURABLES
        </div>
    </h1>
    <p>
        Programá las respuestas automáticas, el bot detecta la consulta del usuario y da la respuesta configurada correcta.
    </p>
    <br><br>
    <a class="ui massive labeled icon button fluid primary" href="https://chatbot.poweronsistemas.com.ar/account/register">
        <i class="icon arrow up"></i>
        CREAR UNA CUENTA GRATUITA AHORA
    </a>
</div>
<?php include_once '../footer.php';