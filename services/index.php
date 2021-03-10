<?php 
    $sector = 'services';
    $title = 'Nuestros servicios';
    $description = 'Ofrecemos múltiples servicios informáticos, como integraciones con WhatsApp propias, tiendas virtuales avanzadas, diseños de páginas web exclusivos, y muchos más';
    $scripts = [];
    $styles = ['/assets/css/services.css'];
    include_once '../header.php';
?>
<div class="header-success-background-container">
    <div class="text-header-container">
        <h1 class="ui huge inverted header">
            <div class="content">
                NUESTROS SERVICIOS
                <span class="sub header">
                    Integraciones con WhatsApp, ChatBots, Sistemas de gestión personalizados, Páginas Web avanzadas y más...
                </span>
            </div>
        </h1>
    </div>
</div>
<div class="ui text container">
    <div class="ui divided items">
        <div class="item">
          <div class="image">
            <img src="/assets/img/services/chatbot.png">
          </div>
          <div class="content">
            <a class="header">ChatBot</a>
            <div class="meta">
              <span>PowerOn ChatBot v1.6</span>
            </div>
            <div class="description">
              <p>Servicio de ChatBot, atiende tu página automáticamente con un Bot de inteligencia artificial programado para distintos propósitos</p>
            </div>
            <div class="extra">
                <a class="ui fluid button primary" href="/services/chatbot.php">
                    Echar un vistazo
                </a>
            </div>
          </div>
        </div>
        
      </div>
</div>
<?php include_once '../footer.php';