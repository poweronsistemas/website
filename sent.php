<?php 
    $sector = 'services';
    $title = 'Gracias por su mensaje';
    $description = 'Ofrecemos múltiples servicios informáticos, como integraciones con WhatsApp propias, tiendas virtuales avanzadas, diseños de páginas web exclusivos, y muchos más';
    $scripts = [];
    $styles = [];
    include_once 'header.php';
?>
<div class="header-success-background-container">
    <div class="text-header-container">
        <h1 class="ui huge inverted header">
            <i class="huge icons">
                <i class="icon mail"></i>
                <i class="icon right corner green checkmark"></i>
            </i>
            <div class="content">
                Su mensaje fue enviado correctamente
                <span class="sub header">
                    Muchas gracias por su consulta, le responderemos en la brevedad
                </span>
            </div>
        </h1>
    </div>
</div>
<?php include_once 'footer.php';