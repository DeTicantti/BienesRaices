<?php
require 'includes/functions.php';
incluirTemplate('header');
?>
    <main class="container seccion contenido-centrado">
       <div class="anun">
        <h1>Casa con alberca</h1>
        

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="Imagen casa en el lago">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000.00</p>
            
            <ul class="caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="baños"><p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="parking"><p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="cuartos" loading="lazy"><p>4</p>
                </li>
            </ul>
            <p>or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versor-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various vers</p>
        </div>
    </div>


    </main>
    <?php 
    incluirTemplate('footer');
    ?>
    