<?php 
    $sector = 'home';
    $title = 'Soluciones Informáticas';
    $description = 'Nos dedicamos al diseño de Tiendas Virtuales, Páginas Web, Sistemas de Gestión de Empresas y mucho más, consultá nuestros servicios';
    $scripts = [
        ['src' => '/assets/js/index.js'],
        ['src' => 'https://www.google.com/recaptcha/api.js', 'tags' => ['async', 'defer']]
    ];
    $styles = [
        '/assets/css/index.css'
    ];
    include_once 'header.php';
?>
<div class="header-video-background-container">
    <video autoplay muted loop class="header-video-background">
        <source src="/assets/img/header_video_background.mp4" type="video/mp4">
    </video>
    <div class="text-header-container">
        <h1 class="ui huge inverted header text-header1 transition hidden">
            Bienvenido a PowerOn Sistemas
            <span class="sub header">
                Brindamos soluciones informáticas
            </span>
        </h1>
        <h1 class="ui huge inverted header text-header2 transition hidden">
            Convertí tu idea en algo real
            <span class="sub header">
                Todos los trabajos son personalizados
            </span>
        </h1>
        <h1 class="ui huge inverted header text-header3 transition hidden">
            Tiendas Virtuales, Páginas Web
            <span class="sub header">
                Trabajos especiales, diseños únicos, estudio de marca y posicionamiento
            </span>
        </h1>
    </div>
</div>
<div class="ui centered link cards services-summary">
    <div class="ui card transition hidden">
        <div class="image">
            <img src="/assets/img/virtual_store_icon.png" alt="">
        </div>
        <div class="content">
            <a class="header">Tu tienda virtual</a>
            <div class="meta">
                <span class="date">Planes económicos | <strong>Desde $ 5.000</strong></span>
            </div>
            <div class="description">
                <div class="ui list">
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Sin comisión por venta
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Dominio propio
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Diseños exclusivos
                    </div>
                </div>
            </div>
        </div>
        <div class="extra content">
            <a class="ui fluid primary right icon labeled button" href="services.html#virtual_store">
                <i class="icon right caret"></i>
                Más información
            </a>
        </div>
    </div>
    <div class="ui card transition hidden">
        <div class="image">
            <img src="/assets/img/web_design_icon.png" alt="">
        </div>
        <div class="content">
          <a class="header">Diseño Web</a>
          <div class="meta">
                <span class="date">Diseño exclusivo desde | <strong>Desde $ 5.000</strong></span>
          </div>
          <div class="description">
              <div class="ui list">
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Plan mensual de mantenimiento
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Estudio de marca y diseño
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Presupuesto sin cargo
                    </div>
                </div>
          </div>
        </div>
        <div class="extra content">
            <a class="ui fluid primary right icon labeled button" href="services.html#web_design">
                <i class="icon right caret"></i>
                Más información
            </a>
        </div>
    </div>
    <div class="ui card transition hidden">
        <div class="image">
            <img src="/assets/img/system_design_icon.png" alt="">
        </div>
        <div class="content">
            <a class="header">Sistemas de administración</a>
            <div class="meta">
                <span class="date">Controlá tu negocio como te gusta</span>
            </div>
            <div class="description">
                <div class="ui list">
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Estudio y diseño de sistemas
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Simplificá tu trabajo
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Tecnología de punta
                    </div>
                </div>
            </div>
        </div>
        <div class="extra content">
            <a class="ui fluid primary right icon labeled button" href="services.html#computer_repair">
                <i class="icon right caret"></i>
                Más información
            </a>
        </div>
    </div>
    <div class="ui card transition hidden">
        <div class="image">
            <img src="/assets/img/mobile_repair_icon.png" alt="">
        </div>
        <div class="content">
            <a class="header" href="/services.html"></a>
            <div class="meta">
                <span class="date">Dispositivos Móviles y Computadoras</span>
            </div>
            <div class="description">
                <div class="ui list">
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Celulares, Tablets, Notebooks y PC
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Liberación y desbloqueo de equipos
                    </div>
                    <div class="item">
                        <i class="checkmark green icon"></i>
                        Actualizacion de hardware y software
                    </div>
                </div>
            </div>
        </div>
        <div class="extra content">
            <div class="ui fluid primary right icon labeled button" href="services.html#mobile_repair">
                <i class="icon right caret"></i>
                Más información
            </div>
        </div>
    </div>
</div>
<div class="middle-block-message">
    <div class="ui stackable grid">
        <div class="four wide column transition hidden">
            <a class="block1">
                <i class="sitemap circular icon"></i><br>
                ORGANIZA TU TRABAJO
                <div class="middle-block-circle"></div>
            </a>
        </div>
        <div class="four wide column transition hidden">
            <a class="block2">
                <i class="chart line scale circular icon"></i><br>
                MAYOR EFICIENCIA
                <div class="middle-block-circle"></div>
            </a>
        </div>
        <div class="four wide column transition hidden">
            <a class="block3">
                <i class="stopwatch circular icon"></i><br>
                MEJOR TIEMPO DE RESPUESTA
                <div class="middle-block-circle"></div>
            </a>
        </div>
        <div class="four wide column transition hidden">
            <a class="block4">
                <i class="paint brush circular icon"></i><br>
                IMAGEN PROFESIONAL
                <div class="middle-block-circle"></div>
            </a>
        </div>
        <div class="middle-block-connector"></div>
        <div class="middle-block-connector-hidder"></div>
        <div class="blue-circle position1"></div>
    </div>
</div>
<div class="ui stackable centered grid middle-block-content content1 transition animating in fade">
    <div class="four wide column">
        <img src="/assets/img/database.png" class="ui centered aligned small image" alt="Base de datos">
    </div>
    <div class="eight wide column">
        <div class="ui huge list">
            <div class="item">
                <i class="green checkmark icon"></i>
                Esquema de datos ordenada
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Listado de tablas organizadas
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Base de datos personalizada
            </div>
        </div>
    </div>
</div>

<div class="ui stackable centered grid middle-block-content content2 transition hidden">
    <div class="four wide column">
        <img src="/assets/img/sales.png" class="ui centered aligned small image" alt="Incremento de ventas">
    </div>
    <div class="eight wide column">
        <div class="ui huge list">
            <div class="item">
                <i class="green checkmark icon"></i>
                Incremento de ventas garantizada
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Mejor experiencia para el cliente
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Mejor cálculo de costos y ganancias
            </div>
        </div>
    </div>
</div>

<div class="ui stackable centered grid middle-block-content content3 transition hidden">
    <div class="four wide column">
        <img src="/assets/img/time.png" class="ui centered aligned small image" alt="Tiempo de respuesta">
    </div>
    <div class="eight wide column">
        <div class="ui huge list">
            <div class="item">
                <i class="green checkmark icon"></i>
                Tiempos de respuesta optimizados
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Intregración con sistemas de mensajería
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Respuesta a clientes con múltiples plataformas
            </div>
        </div>
    </div>
</div>

<div class="ui stackable centered grid middle-block-content content4 transition hidden">
    <div class="four wide column">
        <img src="/assets/img/company.png" class="ui centered aligned small image" alt="Mejor imagen empresarial">
    </div>
    <div class="eight wide column">
        <div class="ui huge list">
            <div class="item">
                <i class="green checkmark icon"></i>
                Imagen mas moderna de la empresa
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Integración con todas las redes sociales
            </div>
            <div class="item">
                <i class="green checkmark icon"></i>
                Plataforma de soporte al cliente moderna
            </div>
        </div>
    </div>
</div>

<div class="ui segment home-contact">
    <div class="ui dimmer">
        <div class="ui text loader">Enviando consulta... por favor espere</div>
    </div>
    <div class="ui stackable centered grid">
        <div class="ten wide column">
            <form class="ui big form" action="contact.php" method="post">
                <div class="two required fields">
                    <div class="field" id="name-field">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Ingresá tu nombre">
                        <div class="ui tiny error message">
                            <i class="warning sign icon"></i>
                            Este campo es obligatorio y debe contener almenos 4 caracteres.
                        </div>
                    </div>
                    <div class="field" id="reason-field">
                        <label for="motive">Motivo de la consulta</label>
                        <select class="ui dropdown" id="reason" name="reason">
                            <option value="" selected>Seleccione el motivo de su consulta</option>
                            <option value="Diseño Web">Quiero mi página web</option>
                            <option value="Tienda Virtual">Quiero mi tienda virtual</option>
                            <option value="Reparación de Celular / Tablet">Necesito reparar un equipo móvil</option>
                            <option value="Reparación de Computadora / Notebook">Necesito reparar mi computadora o notebook</option>
                            <option value="Asesoramiento por Sistema">Quiero un sistema a medida</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <div class="ui tiny error message">
                            <i class="warning sign icon"></i>
                            Debe seleccionar una opción
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field required" id="email-field">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" placeholder="Tu correo electrónico">
                        <div class="ui tiny error message">
                            <i class="warning sign icon"></i>
                            Este campo es obligatorio y debe ser un email válido. Ejemplo: <em>tunombre@gmail.com</em>.
                        </div>
                    </div>
                    <div class="field" id="phone-field">
                        <label for="phone">Teléfono / WhatsApp</label>
                        <input type="text" id="phone" name="phone" placeholder="Tu número de teléfono o WhatsApp">
                    </div>
                </div>
                <div class="field required" id="message-field">
                    <label for="message">Consulta</label>
                    <textarea name="message" id="message" placeholder="Escriba aquí el mensaje..." rows="5"></textarea>
                    <div class="ui tiny error message">
                        <i class="warning sign icon"></i>
                        Este campo es obligatorio y debe contener almenos 10 caracteres.
                    </div>
                </div>
                <div class="two fields" id="captcha-field">
                    <div class="field required" id="captcha-field">
                        <label>Confirmá que no sos un robot</label>
                        <div class="g-recaptcha" data-sitekey="6LdCddAZAAAAAOHS9ZyjjFfZ3j7PfzPB6uQ2CE0u"></div>
                        <div class="ui mini error message">
                            <i class="icon warning sign"></i>
                            No se pudo verificar el captcha, inténtelo nuevamente
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui info mini  message">
                            <div class="header">¿Por qué debo verificar esto?</div>
                            <p>Para evitar recibir SPAM enviado por robots necesitamos que solo hagas clic
                            en la casilla de verificación.</p>
                        </div>
                    </div>
                </div>
                <div class="field" id="no-sent-field">
                    <div class="ui error mini  message">
                        <i class="icon warning sign"></i>
                        No se pudo enviar el mensaje en este momento, por favor inténtelo nuevamente en unos minutos
                    </div>
                </div>
                <div class="field">
                    <input type="hidden" value="index" name="location">
                    <button class="ui primary fluid big icon right labeled button">
                        <i class="icon right caret"></i>
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php';