    <?php

function hexa($carac){

    $caracteres = "0123456789ABCDEF";
    $rand = '';

    for($i=0; $i<$carac; $i++){

        $rand .= $caracteres[rand(0,strlen($caracteres)-1)];

    }

    return $rand;

}

$activate=hexa(20);

$pass=hexa(12);

$imagenaleatorio="fotos/";
// $imagenaleatorio.="noeselmismo";
$imagenaleatorio.=hexa(20);
$imagenaleatorio.=".bmp";

$imagenaleatorio2="imagen/";
// $imagenaleatorio.="noeselmismo";
$imagenaleatorio2.=hexa(20);
$imagenaleatorio2.=".bmp";

$imagen_aa="imagen/";
$imagen_aa.=hexa(20);
$imagen_aa.=".bmp";
//----------------------
$imagen_bb="imagen/";
$imagen_bb.=hexa(20);
$imagen_bb.=".bmp";
//----------------------
$imagen_cc="imagen/";
$imagen_cc.=hexa(20);
$imagen_cc.=".bmp";
//----------------------
$imagen_dd="imagen/";
$imagen_dd.=hexa(20);
$imagen_dd.=".bmp";
//----------------------
$imagen_ee="imagen/";
$imagen_ee.=hexa(20);
$imagen_ee.=".bmp";
//----------------------
$imagen_ff="imagen/";
$imagen_ff.=hexa(20);
$imagen_ff.=".bmp";
//----------------------
$imagen_gg="imagen/";
$imagen_gg.=hexa(20);
$imagen_gg.=".bmp";
//----------------------
$imagen_hh="imagen/";
$imagen_hh.=hexa(20);
$imagen_hh.=".bmp";
//----------------------
$imagen_ii="imagen/";
$imagen_ii.=hexa(20);
$imagen_ii.=".bmp";
//----------------------
$imagen_jj="imagen/";
$imagen_jj.=hexa(20);
$imagen_jj.=".bmp";

?>