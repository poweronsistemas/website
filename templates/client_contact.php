<html>
    <body style="min-width: 400px;
                width: 100%;
                color: black;
                font-family: arial, sans-serif;
                margin: 0;
                padding: 15px;
                box-sizing: border-box;">
        <div style="width: 100%;
                background-image: url('https://www.poweronsistemas.com.ar/assets/img/header_background.jpg');
                height: 230px;
                text-align: center;
                box-shadow: 0px 0px 4px #000;
                border-radius: 15px 15px 0 0;
                padding-top: 60px;
                box-sizing: border-box;
                z-index: 2;
                position: relative;">
            <a href="https://www.poweronsistemas.com.ar" target="_blank" title="Ir a la página principal">
                <img style="width: 300px;" src="https://www.poweronsistemas.com.ar/assets/img/logo.png" alt="PowerOn Sistemas">
            </a>
        </div>
        <div class="container" style="border-left: 2px #2a2829 solid;
                border-right: 2px #2a2829 solid;
                margin: 0;
                padding: 30px;
                box-sizing: border-box;
                background-color: white;
                box-shadow: 0px 0px 4px #000;
                z-index: 1;
                position: relative;">
            <h1 style="margin-top: 0">Hola <?= $args['name'] ?>,</h1>
            <p>
                Muchas gracias por por ponerte en contacto con nosotros, tu consulta fue recibida correctamente y te estaremos contactando
                en la brevedad para brindarte la información que necesitas.
            </p>
            <h2>Copia de tu consulta enviada</h2>
            <table style="width: 100%;
                border: 3px #d3d3d3 solid;
                border-radius: 10px;
                border-spacing: 0px;
                border-collapse: collapse;" cellpadding="15">
                <tr style="border-bottom: 1px #d3d3d3 solid;">
                    <td style="background-color: #eceaea;font-weight: bold;width: 250px;">Fecha de consulta</td><td><?= $args['date'] ?></td>
                </tr>
                <tr style="border-bottom: 1px #d3d3d3 solid;">
                    <td style="background-color: #eceaea;font-weight: bold;width: 250px;">Nombre</td><td><?= $args['name'] ?></td>
                </tr>
                <tr style="border-bottom: 1px #d3d3d3 solid;">
                    <td style="background-color: #eceaea;font-weight: bold;width: 250px;">Correo electrónico</td><td><?= $args['email'] ?></td>
                </tr>
                <tr style="border-bottom: 1px #d3d3d3 solid;">
                    <td style="background-color: #eceaea;font-weight: bold;width: 250px;">Teléfono / WhatsApp</td><td><?= $args['phone'] ?></td>
                </tr>
                <tr style="border-bottom: 1px #d3d3d3 solid;">
                    <td style="background-color: #eceaea;font-weight: bold;width: 250px;">Motivo de consulta</td><td><?= $args['reason'] ?></td>
                </tr>
                <tr style="border-bottom: 1px #d3d3d3 solid;">
                    <td style="background-color: #eceaea;font-weight: bold;width: 250px;">Consulta</td><td><?= $args['message'] ?></td>
                </tr>
            </table>
        </div>
        <div style="width: 100%;
                background-image: url('https://www.poweronsistemas.com.ar/assets/img/footer_background.jpg');
                background-position: bottom left;
                height: 100px;
                text-align: center;
                box-shadow: 0px 0px 4px #000;
                border-radius: 0 0 15px 15px;
                padding-bottom: 20px;
                box-sizing: border-box;
                z-index: 2;
                position: relative;
                color: #d3d3d3;
                padding-top: 3px;
                font-size: .8em;">
            <p>
                Este mensaje fue recibido porque realizaste una consulta a través de la página web 
                <a href="https://www.poweronsistemas.com.ar" style="color: #d3d3d3">www.poweronsistemas.com.ar</a>
                <br>
                Si recibiste este correo por error ignoralo por completo.
            </p>
        </div>
    </body>
</html>