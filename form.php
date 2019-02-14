<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logos-i19-1-267x127.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Formulario</title>
    <?php
        include_once 'Vistas/links.html';
    ?>
</head>
<body>
    <?php
        include_once 'Vistas/head.html';
    ?>
<br>
<form action="save_new.php" method="POST">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2">
            <br>
            <select name="tipo" id="tipo" class="form-control" onChange="mosTip(this.value);">
                <option value="#">Elige la sección</option>
                <option value="tipo1">Información</option>
                <option value="tipo2">Columnas</option>
                <option value="tipo3">Cartelera</option>
            </select>
            <br>
            <div id="tipo1" style="display: none;">
                <select name="dependencia1" id="" class="form-control">
                    <option value="#">Seleciona una opcion</option>
                    <option value="Metropolitano">Metropolitano</option>
                    <option value="ZonaOriente">Zona Oriente</option>
                    <option value="ValleToluca">Valle de Toluca</option>
                    <option value="ZonaSur">Zona Sur</option>
                    <option value="Nacional">Nacional</option>
                </select>
                <br>
            </div>
            <div id="tipo2" style="display: none;">
                <select name="dependencia2" id="" class="form-control">
                    <option value="#">Seleciona una opcion</option>
                    <option value="Deportes">Deportes</option>
                    <option value="Cultura">Cultura</option>
                    <option value="Teceinnova">Tecnología e Innovación</option>
                    <option value="CultuGeek">Cultura Geek</option>
                    <option value="InvestigaEspeciales">Investigaciones Especiales</option>
                </select>
                <br>
            </div>
            <div id="tipo3" style="display: none;">
                <select name="dependencia3" id="" class="form-control">
                    <option value="#">Seleciona una opcion</option>
                    <option value="Teatro">Teatro</option>
                    <option value="Cine">Cine</option>
                    <option value="Exposiciones">Exposiciones</option>
                    <option value="Conciertos">Conciertos</option>
                </select>
                <br>
            </div>
                <select name="formato" id="formato" class="form-control" onChange="mosfor(this.value);">
                    <option value="#">Elige el tipo de formato</option>
                    <option value="forma1">Nota</option>
                    <option value="forma2">Videoreportajes</option>
                    <option value="forma3">Columnas y articulos</option>
                    <option value="forma4">Fotoreportajes</option>
                </select>
                <br>
                <div id="forma1" style="display: none;">
                    <select name="categoriaf1" id="categoria" class="form-control">
                        <option value="#">Selecciona una categoria</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Teceinnova">Tecnología e innovación</option>
                        <option value="CultuGeek">Cultura Geek</option>
                        <option value="InvestigaEspeciales">Investigaciones especiales</option>
                    </select>
                    <br>
                    <input name="titulof1" type="text" placeholder="Titulo" class="form-control">
                    <br>
                    <input name="sub1f1" type="text" placeholder="Subtitulo 1" class="form-control">
                    <br>
                    <input name="sub2f1" type="text" placeholder="Subtitulo 2" class="form-control">
                    <br>
                    <textarea name="notaf1" placeholder="Cuerpo de la nota" cols="30" rows="10" class="form-control">

                    </textarea>
                    <br>
                    <input type="file" name="archivof1" accept="image/*"> 
                    <br>
                    <br>
                    <button name="g_nuevo" type="submit" class="btn btn-primary">Publicar</button>
                </div>
                <div id="forma2" style="display: none;">
                    <select name="categoriaf2" id="categoria" class="form-control">
                        <option value="#">Selecciona una categoria</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Teceinnova">Tecnología e innovación</option>
                        <option value="CultuGeek">Cultura Geek</option>
                        <option value="InvestigaEspeciales">Investigaciones especiales</option>
                    </select>
                    <br>
                    <input name="titulof2" type="text" placeholder="Titulo" class="form-control">
                    <br>
                    <input name="sub1f2" type="text" placeholder="Subtitulo 1" class="form-control">
                    <br>
                    <input name="sub2f2" type="text" placeholder="Subtitulo 2" class="form-control">
                    <br>
                    <textarea placeholder="Cuerpo de la nota" name="notaf2" cols="30" rows="10" class="form-control">

                    </textarea>
                    <br>
                    <!--  -->
                    <input type="text" name="archivof2" class="form-control" placeholder="Pega aqui el link de youtube">
                    <!-- substr (cadena de texto de link de youtube, -11)  -->
                    <br>
                    <br>
                    <button name="g_nuevo" type="submit" class="btn btn-primary">Publicar</button>
                </div>
                <div id="forma3" style="display: none;">
                    <select name="categoriaf3" id="categoria" class="form-control">
                        <option value="#">Selecciona una categoria</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Teceinnova">Tecnología e innovación</option>
                        <option value="CultuGeek">Cultura Geek</option>
                        <option value="InvestigaEspeciales">Investigaciones especiales</option>
                    </select>
                    <br>
                    <input name="escritorf3" type="text" placeholder="Escritor" class="form-control">
                    <br>
                    <input name="titulof3" type="text" placeholder="Titulo" class="form-control">
                    <br>
                    <textarea placeholder="Cuerpo de la nota" name="notaf3" cols="30" rows="10" class="form-control">

                    </textarea>
                    <br>
                    <!-- Delimitar que sea imagen -->
                    <input type="file" name="archivof3" accept="image/*">
                    <!-- Delimitar que sea imagen -->
                    <br>
                    <br>
                    <button name="g_nuevo" type="submit" class="btn btn-primary">Publicar</button>
                </div>
                <div id="forma4" style="display: none;">
                    <select name="categoriaf4" id="categoria" class="form-control">
                        <option value="#">Selecciona una categoria</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Cultura">Cultura</option>
                        <option value="Teceinnova">Tecnología e innovación</option>
                        <option value="CultuGeek">Cultura Geek</option>
                        <option value="InvestigaEspeciales">Investigaciones especiales</option>
                    </select>
                    <br>
                    <input name="titulof4" type="text" placeholder="Titulo" class="form-control" name="" id="">
                    <br>
                    <hr>
                    <input type="text" placeholder="Texto de la foto" class="form-control" name="10" id="tomame">
                    <br>
                    <!-- Delimitar -->
                    <input type="file" name="0" accept="image/*">
                    <!-- Delimitar que sea imagen -->
                    <br>
                    <br>
                    <div class="aquimas">
                    </div>
                    <button id="mas" type="button" class="btn btn-primary-outline" onclick="hacermas();">+</button>
                    <br>
                    <br>
                    <button name="g_nuevo" type="submit" class="btn btn-primary">Publicar</button>
                </div>
        </div>
    </div>
</div>
</form>
<!-- <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> -->
<div class="empujar">
    
</div>
    <?php
        include_once 'Vistas/footer.html';
    ?>
<script>
    var contador = 0;
    var contador2 = 10;
    function hacermas() {
        contador++;
        contador2++;
        if (contador < 10) {
        $('div.aquimas').append("<hr><input type='text' placeholder='Texto de la foto' class='form-control' name='"+contador2+"'> <br> <input type='file' name='"+contador+" accept='image/*''> <br> <br>");
        }
        else{
            alert("Has llegado al limite de imagenes que puedes subir.");
        }
    }
    function mosTip(id) {
        if (id == "#") {
            $("#tipo1").hide();
            $("#tipo2").hide();
            $("#tipo3").hide();
        }
        if (id == "tipo1") {
            $("#tipo1").fadeIn().show();
            $("#tipo2").hide();
            $("#tipo3").hide();
        }
        if (id == "tipo2") {
            $("#tipo1").hide();
            $("#tipo2").fadeIn().show();
            $("#tipo3").hide();
        }
        if (id == "tipo3") {
            $("#tipo1").hide();
            $("#tipo2").hide();
            $("#tipo3").fadeIn().show();
        }

    }
    function mosfor(id) {
        if (id == "#") {
            $("#forma1").hide();
            $("#forma2").hide();
            $("#forma3").hide();
            $("#forma4").hide();
        }
        if (id == "forma1") {
            $("#forma1").fadeIn().show();
            $("#forma2").hide();
            $("#forma3").hide();
            $("#forma4").hide();
        }
        if (id == "forma2") {
            $("#forma1").hide();
            $("#forma2").fadeIn().show();
            $("#forma3").hide();
            $("#forma4").hide();
        }
        if (id == "forma3") {
            $("#forma1").hide();
            $("#forma2").hide();
            $("#forma3").fadeIn().show();
            $("#forma4").hide();
        }
        if (id == "forma4") {
            $("#forma1").hide();
            $("#forma2").hide();
            $("#forma3").hide();
            $("#forma4").fadeIn().show();
        }
    }
</script>
    <?php
        include_once 'Vistas/scripts.html';
    ?>
</body>
</html>