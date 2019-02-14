<?php
if(isset($_REQUEST['g_nuevo'])){
    //incluyo la conexion
    include ('conexion.php');
    //inclyo la libreria de funciones
    include ('funciones.php');
    //recibe el tipo de publicacion que puede ser informacion, columnas y cartelera
    $tipo=$_REQUEST['tipo'];
    //recibe el select con la carteleta, columna o zona
    if ($tipo == "tipo1") {
        $dependencia=$_REQUEST['dependencia1'];
    }else
    if ($tipo == "tipo2") {
        $dependencia=$_REQUEST['dependencia2'];
    }else
    if ($tipo == "tipo3") {
        $dependencia=$_REQUEST['dependencia3'];
    }
    //seleeciona el formato que pueden ser 4 nota, videoreportajes, columnas y articulos o fotoreportajes
    $formato=$_REQUEST['formato'];
    //se comienzan a recibir las variables de los formatos
    switch ($formato) {
        case "forma1":
        $categoria=$_REQUEST['categoriaf1'];
        $titulo=$_REQUEST['titulof1'];
        $sub_titulo=$_REQUEST['sub1f1'];
        $sub_titulo2=$_REQUEST['sub2f1'];
        $nota_contenido=$_REQUEST['notaf1'];    
        $imagen=$_FILES['archivof1']['name'];
        //parte que crea  la ruta de la imagen
        $target_path = "imagen/";
        $target_path = $target_path . basename( $_FILES['archivof1']['name']);
        move_uploaded_file($_FILES['archivof1']['tmp_name'], $target_path);
        rename ($target_path , $imagenaleatorio2);

        $query="INSERT INTO `contenido`(`tipo`,`dependencia`,`formato`,`categoria_contenido`, `titulo_contenido`, `subtitulo_contenido`,`subtitulo2_contenido`, `nota_contenido`,`imagen_contenido`,`estado_public_contenido`) 
        VALUES ('$tipo','$dependencia','$formato','$categoria','$titulo','$sub_titulo','$sub_titulo2','$nota_contenido','$imagenaleatorio2','0')";
        $result= mysqli_query($conn,$query);
            break;
        // header('Location: form.php');
        case "forma2":
        $categoria=$_REQUEST['categoriaf2'];
        $titulo=$_REQUEST['titulof2'];
        $sub_titulo=$_REQUEST['sub1f2'];
        $sub_titulo2=$_REQUEST['sub2f2'];
        $nota_contenido=$_REQUEST['notaf2'];
        $video=$_REQUEST['archivof2'];
        $video=substr($video, -11);
            
        $query="INSERT INTO `contenido`(`tipo`,`dependencia`,`formato`,`categoria_contenido`, `titulo_contenido`, `subtitulo_contenido`,`subtitulo2_contenido`, `nota_contenido`,`video_contenido`,`estado_public_contenido`) 
        VALUES ('$tipo','$dependencia','$formato','$categoria','$titulo','$sub_titulo','$sub_titulo2','$nota_contenido','$video','0')";
        $result= mysqli_query($conn,$query);
            break;
        // header('Location: form.php');
        case "forma3":
        $categoria=$_REQUEST['categoriaf3'];
        $escritor=$_REQUEST['escritorf3'];
        $titulo=$_REQUEST['titulof3'];
        $nota_contenido=$_REQUEST['notaf3'];
        $imagen=$_FILES['archivof3']['name'];
        //parte que crea  la ruta de la imagen
        $target_path = "imagen/";
        $target_path = $target_path . basename( $_FILES['archivof3']['name']);
        move_uploaded_file($_FILES['archivof3']['tmp_name'], $target_path);
        rename ($target_path , $imagenaleatorio2);

        $query="INSERT INTO `contenido`(`tipo`,`dependencia`,`formato`,`categoria_contenido`,`escritor_contenido`,`titulo_contenido`, `subtitulo_contenido`,`subtitulo2_contenido`, `nota_contenido`,`imagen_contenido`,`estado_public_contenido`) 
        VALUES ('$tipo','$dependencia','$formato','$categoria','$escritor','$titulo','$sub_titulo','$sub_titulo2','$nota_contenido','$imagenaleatorio2','0')";
        $result= mysqli_query($conn,$query);
            break;
        // header('Location: form.php');
        case "forma4":
        $categoria=$_REQUEST['categoriaf4'];
        $titulo=$_REQUEST['titulof4'];

        $texto_a=$_REQUEST['10'];
        $imagen_a=$_FILES['0']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['0']['name']);
         move_uploaded_file($_FILES['0']['tmp_name'], $target_path);
         rename ($target_path , $imagen_aa);

        $texto_b=$_REQUEST['11'];
        $imagen_b=$_FILES['1']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['1']['name']);
         move_uploaded_file($_FILES['1']['tmp_name'], $target_path);
         rename ($target_path , $imagen_bb);

        $texto_c=$_REQUEST['12'];
        $imagen_c=$_FILES['2']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['2']['name']);
         move_uploaded_file($_FILES['2']['tmp_name'], $target_path);
         rename ($target_path , $imagen_cc);

        $texto_d=$_REQUEST['13'];
        $imagen_d=$_FILES['3']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['3']['name']);
         move_uploaded_file($_FILES['3']['tmp_name'], $target_path);
         rename ($target_path , $imagen_dd);

        $texto_e=$_REQUEST['14'];
        $imagen_e=$_FILES['4']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['4']['name']);
         move_uploaded_file($_FILES['4']['tmp_name'], $target_path);
         rename ($target_path , $imagen_ee);

        $texto_f=$_REQUEST['15'];
        $imagen_f=$_FILES['5']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['5']['name']);
         move_uploaded_file($_FILES['5']['tmp_name'], $target_path);
         rename ($target_path , $imagen_ff);

        $texto_g=$_REQUEST['16'];
        $imagen_g=$_FILES['6']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['6']['name']);
         move_uploaded_file($_FILES['6']['tmp_name'], $target_path);
         rename ($target_path , $imagen_gg);

        $texto_h=$_REQUEST['17'];
        $imagen_h=$_FILES['7']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['7']['name']);
         move_uploaded_file($_FILES['7']['tmp_name'], $target_path);
         rename ($target_path , $imagen_hh);

        $texto_i=$_REQUEST['18'];
        $imagen_i=$_FILES['8']['name'];

         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['8']['name']);
         move_uploaded_file($_FILES['8']['tmp_name'], $target_path);
         rename ($target_path , $imagen_ii);

        $texto_j=$_REQUEST['19'];
        $imagen_j=$_FILES['9']['name'];
        
         //parte que crea  la ruta de la imagen
         $target_path = "imagen/";
         $target_path = $target_path . basename( $_FILES['9']['name']);
         move_uploaded_file($_FILES['9']['tmp_name'], $target_path);
         rename ($target_path , $imagen_jj);


        $query="INSERT INTO `contenido`(`tipo`,`dependencia`,`formato`,`categoria_contenido`, `titulo_contenido`,`estado_public_contenido`, `texto_a`,`imagen_a`, `texto_b`,`imagen_b`, `texto_c`,`imagen_c`, `texto_d`,`imagen_d`, `texto_e`,`imagen_e`, `texto_f`,`imagen_f`, `texto_g`,`imagen_g`, `texto_h`,`imagen_h`, `texto_i`,`imagen_i`, `texto_j`,`imagen_j`) 
        VALUES ('$tipo','$dependencia','$formato','$categoria','$titulo','0','$texto_a','$imagen_aa','$texto_b','$imagen_bb','$texto_c','$imagen_cc','$texto_d','$imagen_dd','$texto_e','$imagen_ee','$texto_f','$imagen_ff','$texto_g','$imagen_gg','$texto_h','$imagen_hh','$texto_i','$imagen_ii','$texto_j','$imagen_jj')";
        $result= mysqli_query($conn,$query);
            break;
            // header('Location: form.php');
    }

    mysqli_close($conn);
    header('Location: form.php');
}
?>