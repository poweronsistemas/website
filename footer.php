<?php
$comments = [
    ['logo' => 'latienditashabbychic.png', 'url' => 'https://www.latienditashabbychic.com.ar', 'company' => 'La Tiendita Shabby Chic', 'author' => 'María Figueredo', 'date' => '12-06-2020', 'text' => 'Muy conforme con el diseño y el mantenimiento de mi tienda, me facilitaron todo el trabajo que hacía antes con lapiz y papel.', 'portfolio' => '/portfolio/index.php?work=latienditashabbychic'],
    ['logo' => 'absol.png', 'url' => '', 'company' => 'Sistema Absol', 'author' => 'Cristian Mazzaron', 'date' => '19-03-2018', 'text' => 'Necesitabamos un sistema único adaptado a nuestra forma de trabajar, PowerOn Sistemas nos brindó la solución a todos nuestros problemas.', 'portfolio' => '/portfolio/index.php?work=abesol'],
    ['logo' => 'cnc40.png', 'url' => '', 'company' => 'CNC 4.0', 'author' => 'Marcos Bustamante', 'date' => '30-04-2020', 'text' => 'Luego de que mi negocio creciera me vi en la necesidad de automatizar parte de mi trabajo hoy en día PowerOn Sistemas me brinda todas las soluciones que necesito, de forma rápida y acorde a mi presupuesto.', 'portfolio' => '/portfolio/index.php?work=cnc40'],
    ['logo' => 'movefit.png', 'url' => 'http://www.movefit.com.ar/tickets', 'company' => 'Move FIT Argentina', 'author' => 'Pablo Aleluya', 'date' => '10-09-2019', 'text' => 'Excelente trabajo, se adapta a todas las necesidades y se toma el tiempo para obtener el resultado que uno desea. Muy recomendable!!!', 'portfolio' => '/portfolio/index.php?work=movefit']
];
?>
<footer class="main-footer">
    <div class="ui container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Sitio</h4>
                <div class="ui inverted link list">
                    <a href="/" class="item">Inicio</a>
                    <a href="/services" class="item">Servicios</a>
                    <a href="/portfolio" class="item">Portfolio</a>
                    <a href="contact.php" class="item">Contacto</a>
                </div>
            </div>
            <div class="five wide column">
                <h4 class="ui inverted header">Redes sociales</h4>
                <div class="ui inverted link list">
                    <a href="https://www.facebook.com/poweronsistemas" target="_blank" class="item">
                        <i class="icon blue facebook"></i> Facebook /poweronsistemas
                    </a>
                    <a href="http://www.instragram.com/poweronsistemas" target="_blank" class="item">
                        <i class="icon orange instagram"></i> Instagram @poweronsistemas
                    </a>
                </div>
            </div>
            <div class="eight wide column">
                <h4 class="ui inverted header">Comentarios de clientes</h4>
                <div class="ui inverted comments">
                    <?php foreach ($comments as $key => $comment): ?>
                    <div class="comment comment<?= $key + 1 ?> transition hidden">
                        <a class="avatar">
                            <img src="/assets/img/clients/<?= $comment['logo'] ?>">
                        </a>
                        <div class="content">
                            <a class="author" href="<?= $comment['url'] ?>" target="_blank"><?= $comment['company'] ?></a>
                            <div class="metadata">
                              <span class="date"><?= $comment['author'] ?> | <?= $comment['date'] ?></span>
                            </div>
                            <div class="text">
                              <?= $comment['text'] ?>
                            </div>
                            <div class="actions">
                              <a class="reply" href="<?= $comment['portfolio'] ?>">Ver trabajo</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>