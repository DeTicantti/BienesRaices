<?php
require '../../includes/config/database.php';
$db = connectDb();

var_dump($_POST);

require '../../includes/functions.php';
incluirTemplate('header');
?>
    <main class="container seccion">
        <h1>crear</h1>
        <div class="alinear-derecha">
        <a href="/o8.0/desarrolloWeb/bienesRaices/admin/" class="btn-inline alinear-derecha">volver</a>
        </div>

        <form action="/o8.0/desarrolloWeb/bienesRaices/admin/propiedades/crear.php" method="POST" class="formulario">
            <fieldset>
                <legend>Información general</legend>
                <label for="tit">Titulo:</label>
                <input type="text" id="tit" name="titulo" placeholder="Titulo de propiedad"> 

                <label for="pre">Precio:</label>
                <input type="number" id="pre" name="precio" placeholder="$$$">

                <label for="img">Documento:</label>
                <input type="file" id="img" name="imagen" accept="application/pdf">

                <label for="des">Descripcion:</label>
                <textarea name="desc" id="des" cols="30" rows="10"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información del titulo</legend>
            
                <label for="pag">Páginas</label>
                <input type="number" id="pag" name="paginas" placeholder="Páginas">
                <label for="eng">Costo con engargolad</label>
                <input type="number" id="eng" name="eng" placeholder="$$$+$$$">
            </fieldset>
            <fieldset>
                <legend>Subido por:</legend>
                <select name="idVen" id="idVen">
                    <option value="1">Alicia</option>
                    <option value="2">Laura</option>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="btn-inline">
            

        </form>

    </main>
    <?php 
    incluirTemplate('footer');
    ?>
    