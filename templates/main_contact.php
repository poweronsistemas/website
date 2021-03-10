<html>
    <body style="min-width: 400px;
                width: 100%;
                color: black;
                font-family: arial, sans-serif;
                margin: 0;
                padding: 15px;
                box-sizing: border-box;">
        <h1>Consulta desde la página web</h1>
        <h2>Detalles</h2>
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
        </table>
        <h2>Consulta</h2>
        <div class="message">
            <?= $args['message'] ?>
        </div>
    </body>
</html>