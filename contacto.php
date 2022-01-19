
 <?php
require 'includes/functions.php';
incluirTemplate('header');
?>
    <main class="container seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="imagen contacto" loading="lazy">
        </picture>
        <h2>Rellene el formulario</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>
                <label for="name">Nombre:</label>
                <input type="text" placeholder="nombre" id="name">
                <label for="mail">Email</label>
                <input type="email" placeholder="email@..." id="mail">
                <label for="tel">Teléfono:</label>
                <input type="tel" placeholder="telefono" id="tel">
                <label for="msj">Mensaje</label>
                <textarea id="msj"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>
                <label for="opciones">Vender/Comprar</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>
                <label for="price">Precio o presupuesto</label>
                <input type="number" placeholder="$$$" id="price">

            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>como desea ser contactado</p>
                <div class="form-contacto">
                    <label for="telcontact">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="telcontact">  
                    <label for="mailcontact">E-mail</label>
                    <input  name="contacto" type="radio" value="email" id="mailcontact">  

                </div>
                <p>Si eligio telefono elija la fecha y la hora para ser contactado</p>
                
                <label for="date">Fecha</label>
                <input type="date" id="date">  
                
                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">  

            </fieldset>
            <input type="submit" class="btn-inline">
        </form>

    </main>

    <?php 
    incluirTemplate('footer');
    ?>
    