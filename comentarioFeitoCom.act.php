<?php
extract($_POST);
require('conectar.php');
require('perfil_arrumado/connect.php');

//$codigo = $_POST['codigo'];
$busca = mysqli_query($con,"Select * from `tb_perfil` where `codigo` = '$codigo';");
$perfil = mysqli_fetch_array($busca);
//var_dump($perfil);

$str = 'porra';
$str = 'caralho';
$str = 'filho da puta'; 
$str = 'filha da puta';
$str = 'arombado';
$str = 'arrombada';
$str = 'bicha';
$str = 'boiola';
$str = 'buceta';
$str = 'boquete'; 
$str = 'bosta';
$str = 'bronha';
$str = 'bunda'; 
$str = 'burra';
$str = 'burro';
$str = 'bêbado';
$str = 'cacete';
$str = 'corno';
$str = 'corna';
$str = 'canalha';
$str = 'criolo';
$str = 'cu';
$str = 'cuzão';
$str = 'debiloide';
$str = 'deficiente';
$str = 'demônio';
$str = 'doida';
$str = 'doido';
$str = 'escroto';
$str = 'escrota';
$str = 'facista';
$str = 'foda';
$str = 'fode';
$str = 'fudida';
$str = 'fudendo';
$str = 'gay';
$str = 'grelo';
$str = 'homo-sexual';
$str = 'idiota'; 
$str = 'imbecil';
$str = 'ladrão';
$str = 'leprosa';
$str = 'leproso';
$str = 'louco';
$str = 'louca';
$str = 'macaca';
$str = 'macaco';
$str = 'macumbeiro';
$str = 'macumbeiro';
$str = 'mulata';
$str = 'mulato';
$str = 'nazista';
$str = 'otario';
$str = 'otaria';
$str = 'perereca';
$str = 'pinto';
$str = 'piranha';
$str = 'prostituo';
$str = 'prostituta';
$str = 'punheta';
$str = 'puta';
$str = 'puto';
$str = 'pênis';
$str = 'retardada';
$str = 'retardado';
$str = 'ridícula';
$str = 'racista';
$str = 'safado';
$str = 'safada';
$str = 'sapatão';
$str = 'sifilis';
$str = 'siririca'; 
$str = 'tarado';
$str = 'tarada';
$str = 'trouxa';
$str = 'traveco';
$str = 'vaca';
$str = 'vadia';
$str = 'viado';
$str = 'xereca';
$str = 'xota';
$str = 'vai toma no cu';
$str = 'lixo';

    if (strpos($txtComentarioCom, 'caralho') !== false || strpos($txtComentarioCom, 'porra') !== false || strpos($txtComentarioCom, 'filho da puta') !== false || strpos($txtComentarioCom, 'filha da puta') !== false || strpos($txtComentarioCom, 'arrombado') !== false || strpos($txtComentarioCom, 'arromada') !== false || strpos($txtComentarioCom, 'bicha') !== false || strpos($txtComentarioCom, 'boiola') !== false || strpos($txtComentarioCom, 'buceta') !== false || strpos($txtComentarioCom, 'boquete') !== false || strpos($txtComentarioCom, 'bosta') !== false || strpos($txtComentarioCom, 'bronha') !== false || strpos($txtComentarioCom, 'bunda') !== false || strpos($txtComentarioCom, 'burra') !== false || strpos($txtComentarioCom, 'burro') !== false || strpos($txtComentarioCom, 'bêbado') !== false || strpos($txtComentarioCom, 'cacete') !== false || strpos($txtComentarioCom, 'corno') !== false || strpos($txtComentarioCom, 'corna') !== false || strpos($txtComentarioCom, 'canalha') !== false || strpos($txtComentarioCom, 'criolo') !== false || strpos($txtComentarioCom, 'cu') !== false || strpos($txtComentarioCom, 'cuzão') !== false || strpos($txtComentarioCom, 'debiloide') !== false || strpos($txtComentarioCom, 'deficiente') !== false || strpos($txtComentarioCom, 'demônio') !== false || strpos($txtComentarioCom, 'doida') !== false || strpos($txtComentarioCom, 'doido') !== false || strpos($txtComentarioCom, 'escrota') !== false || strpos($txtComentarioCom, 'escroto') !== false || strpos($txtComentarioCom, 'facista') !== false || strpos($txtComentarioCom, 'foda') !== false || strpos($txtComentarioCom, 'fode') !== false || strpos($txtComentarioCom, 'fudida') !== false || strpos($txtComentarioCom, 'fudendo') !== false || strpos($txtComentarioCom, 'gay') !== false || strpos($txtComentarioCom, 'grelo') !== false || strpos($txtComentarioCom, 'homo-sexual') !== false || strpos($txtComentarioCom, 'idiota') !== false || strpos($txtComentarioCom, 'imbecil') !== false || strpos($txtComentarioCom, 'ladrão') !== false || strpos($txtComentarioCom, 'lebrosa') !== false || strpos($txtComentarioCom, 'lebroso') !== false || strpos($txtComentarioCom, 'louco') !== false || strpos($txtComentarioCom, 'louca') !== false || strpos($txtComentarioCom, 'macaca') !== false || strpos($txtComentarioCom, 'macaco') !== false || strpos($txtComentarioCom, 'macumbeiro') !== false || strpos($txtComentarioCom, 'macumbeira') !== false || strpos($txtComentarioCom, 'mulata') !== false || strpos($txtComentarioCom, 'mulato') !== false || strpos($txtComentarioCom, 'nazista') !== false || strpos($txtComentarioCom, 'otaria') !== false || strpos($txtComentarioCom, 'otario') !== false || strpos($txtComentarioCom, 'perereca') !== false || strpos($txtComentarioCom, 'pinto') !== false || strpos($txtComentarioCom, 'piranha') !== false || strpos($txtComentarioCom, 'prostituto') !== false || strpos($txtComentarioCom, 'prostituta') !== false || strpos($txtComentarioCom, 'punheta') !== false || strpos($txtComentarioCom, 'puto') !== false || strpos($txtComentarioCom, 'puta') !== false || strpos($txtComentarioCom, 'pênis') !== false || strpos($txtComentarioCom, 'retardada') !== false || strpos($txtComentarioCom, 'retardado') !== false || strpos($txtComentarioCom, 'ridícula') !== false || strpos($txtComentarioCom, 'racista') !== false || strpos($txtComentarioCom, 'safada') !== false || strpos($txtComentarioCom, 'safado') !== false || strpos($txtComentarioCom, 'sapatão') !== false || strpos($txtComentarioCom, 'sífilis') !== false || strpos($txtComentarioCom, 'siririca') !== false || strpos($txtComentarioCom, 'tarada') !== false || strpos($txtComentarioCom, 'tarado') !== false || strpos($txtComentarioCom, 'trouxa') !== false || strpos($txtComentarioCom, 'traveco') !== false || strpos($txtComentarioCom, 'vaca') !== false || strpos($txtComentarioCom, 'vadia') !== false || strpos($txtComentarioCom, 'viado') !== false || strpos($txtComentarioCom, 'xereca') !== false || strpos($txtComentarioCom, 'xota') !== false || strpos($txtComentarioCom, 'vai toma no cu') !== false || strpos($txtComentarioCom, 'lixo') !== false){
       //header("location:comunicados.php");
        $msg ="<script>alert('LINGUAGEM INAPROPRIADA!! Por favor, utilize palavras apropriadas.')</script>";

    }else if($nomeComentarioCom=='' || $txtComentarioCom==''){
        //header("location:comunicados.php");
        $msg ="<script>alert('Preencha todos os campos.')</script>";

    }else
    if (mysqli_query($tec, "INSERT INTO `tb_comentarios_comunicados` 
    (`codComenCom`, `nomeComenCom`, `txtComenCom`, `codigoComunicado`)
    VALUES (NULL, '$nomeComentarioCom', '$txtComentarioCom', '$codigoComunicado');")){
        header("location:comunicados.php?cod=$codigo");
        $msg ="<script>alert('comentário incluído com sucesso!!')</script>";
    }else {
        //header("location:comunicados.php");
        $msg ="<script>alert('comentário erro!!')</script>";
    }



@session_start();
 $_SESSION['msg'] = $msg;
//header("location:comunicados.php?cod=$codigo");

?>