<?php
require 'includes/functions.php';
incluirTemplate('header');
?>
    <main class="container seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entradaBlog">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img src="build.img.blog1.jpg" alt="Blog" loading="lazy">
                </picture>
            </div>
            <div class="textoEntrada">
                <a href="entrada.php">
                    <h4>Terraza para el techo de tu casa</h4>
                    <p>Escrito el: <span>20-10-21</span> por: <span>Admin</span></p>
                    <p>comienzo de la entrada de el blog par que se vea un oodo de texto y asi estar empresanzo a usar todos los desdoss</p>
                </a>
            </div>
        </article>

        <article class="entradaBlog">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img src="build.img.blog2.jpg" alt="Blog">
                </picture>
            </div>
            <div class="textoEntrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu casa</h4>
                    <p>Escrito el: <span>20-10-21</span> por: <span>Admin</span></p>
                    <p>comienzo de la entrada de el blog par que se vea un oodo de texto y asi estar empresanzo a usar todos los desdoss</p>
                </a>
            </div>
        </article>
        <article class="entradaBlog">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpg">
                    <img src="build.img.blog3.jpg" alt="Blog" loading="lazy">
                </picture>
            </div>
            <div class="textoEntrada">
                <a href="entrada.php">
                    <h4>Terraza para el techo de tu casa</h4>
                    <p>Escrito el: <span>20-10-21</span> por: <span>Admin</span></p>
                    <p>comienzo de la entrada de el blog par que se vea un oodo de texto y asi estar empresanzo a usar todos los desdoss</p>
                </a>
            </div>
        </article>

        <article class="entradaBlog">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpg">
                    <img src="build.img.blog4.jpg" alt="Blog" loading="lazy">
                </picture>
            </div>
            <div class="textoEntrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu casa</h4>
                    <p>Escrito el: <span>20-10-21</span> por: <span>Admin</span></p>
                    <p>comienzo de la entrada de el blog par que se vea un oodo de texto y asi estar empresanzo a usar todos los desdoss</p>
                </a>
            </div>
        </article>

    </main>

    <?php 
    incluirTemplate('footer');
    ?>
    