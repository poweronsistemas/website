<?php
/* 
 * Copyright (C) PowerOn Sistemas - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Lucas Sosa <sosalucas87@gmail.com>, Octubre 2018
 */
if (filter_input(INPUT_POST, 'email')) {
    require 'vendor/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/src/SMTP.php';

    $email = strtolower(trim(filter_input(INPUT_POST, 'email')));
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $phone = trim(filter_input(INPUT_POST, 'phone'));
    $name = ucwords(trim(filter_input(INPUT_POST, 'name')));
    $reason = filter_input(INPUT_POST, 'reason');
    $message = trim(filter_input(INPUT_POST, 'message'));
    $recaptchaResult = filter_input(INPUT_POST, 'g-recaptcha-response');
    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaKey = '****************************';
    $location = filter_input(INPUT_POST, 'location') == 'index' ? 'index' : 'contact';
    $data = [
        'secret' => $recaptchaKey,
        'response' => $recaptchaResult
    ];
    $query = http_build_query($data);
    $options = [
        'http' => [
            'header' => [
                'Content-Type: application/x-www-form-urlencoded' . PHP_EOL .
                'Content-Length: ' . strlen($query) . PHP_EOL .
                'User-Agent: MyAgent/1.0' . PHP_EOL,
            ],
            'method' => 'POST',
            'content' => $query
        ]
    ];
    $context  = stream_context_create($options);
    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
    $recaptchaSuccess = json_decode($verify);
    $data = '&name=' . $name . '&reason=' . $reason . '&message=' . $message . '&phone=' . $phone . '&email=' . $email;

    if (!$recaptchaSuccess->success) {
        header('Location: ' . $location . '.html?error=captcha-field' . $data . '#captcha-field');
        exit();
    }
    if (!$validEmail) {
        header('Location: ' . $location . '.html?error=email-field' . $data . '#email-field');
        exit();
    }
    if (!$name || strlen($name) < 4) {
        header('Location: ' . $location . '.html?error=name-field' . $data . '#name-field');
        exit();
    }
    if (!$reason) {
        header('Location: ' . $location . '.html?error=reason-field' . $data . '#reason-field');
        exit();
    }
    if (!$message || strlen($message) < 10) {
        header('Location: ' . $location . '.html?error=message-field' . $data . '#message-field');
        exit();
    }
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = '*******'; 
    $mail->Username = 'consultas@poweronsistemas.com.ar'; 
    $mail->Password = '********';

    $mail->setFrom($email, $name);
    $mail->addAddress('consultas@poweronsistemas.com.ar', 'PowerOn Sistemas');
    $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
    $mail->isHTML(true);
    $mail->Subject = 'CONSULTA DESDE LA WEB: ' . $reason;
    $args = [
        'date' => date('d-m-Y H:i'),
        'name' => $name,
        'email' => $email,
        'reason' => $reason,
        'phone' => $phone,
        'message' => $message
    ];
    $ds = DIRECTORY_SEPARATOR;
    ob_start();
    include_once 'templates' . $ds . 'main_contact.php';
    $body = ob_get_clean();
    $mail->msgHTML($body);

    try {
        if ( $mail->send() ) {
            $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = '*************'; 
            $mail->Username = 'consultas@poweronsistemas.com.ar'; 
            $mail->Password = '******';

            $mail->setFrom('consultas@poweronsistemas.com.ar', 'PowerOn Sistemas');
            $mail->addAddress($email, $name);
            $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
            $mail->isHTML(true);
            $mail->Subject = 'Recibimos tu consulta por ' . $reason;

            ob_start();
            include_once 'templates' . $ds . 'client_contact.php';
            $body = ob_get_clean();

            $mail->msgHTML($body);

            header('Location: sent.php?name=' . $name);
        } else {
            header('Location: ' . $location . '.php?error=no-sent-field' . $data . '#no-sent-field');
        }
    } catch (\PHPMailer\PHPMailer\Exception $ex) {
        header('Location: ' . $location . '.php?error=no-sent-field' . $data . '#no-sent-field');
    }
}
$sector = 'contact';
$title = 'Contacto';
$description = 'Contactanos para obtener asesoramiento gratuito, podemos ayudarte en lo que necesites';
$scripts = [
    ['src' => 'https://www.google.com/recaptcha/api.js', 'tags' => ['async', 'defer']]
];
$styles = [
    '/assets/css/index.css'
];
include_once 'header.php';
?>
<div class="header-success-background-container">
    <div class="text-header-container">
        <h1 class="ui huge inverted header">
            <div class="content">
                CONTACTANOS
                <span class="sub header">
                    Ponete en contacto con nosotros por cualquíer canal
                </span>
            </div>
        </h1>
    </div>
</div>
<div class="ui text container">
    <a class="ui huge button labeled icon primary fluid " href="https://wa.me/541133509980">
        <i class="icon whatsapp"></i>
        POR WHATSAPP al +54 911 33509980
    </a><br><br>
    <h2 class="ui centered header">
        O complentando el siguiente formulario
    </h2><br><br>
</div>
<div class="ui text container">
    <div class="ui dimmer">
        <div class="ui text loader">Enviando consulta... por favor espere</div>
    </div>
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
<?php include_once 'footer.php';