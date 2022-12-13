<?php
extract($_POST);
extract($_FILES);
require('perfil_arrumado/connect.php');
require('conectar.php');
//$codigo = $_POST['cod'];
$busca = mysqli_query($con,"Select * from `tb_perfil` where `codigo` = '$codigo';");
$perfil = mysqli_fetch_array($busca);
//var_dump($perfil);

$urlComunicado = "imagens/".md5(time().$foto['name']).".jpg";

//palavras e expressões proibidas
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


   
    if(strpos($titulo, 'caralho') !== false || strpos($titulo, 'porra') !== false || strpos($titulo, 'filho da puta') !== false || strpos($titulo, 'filha da puta') !== false || strpos($titulo, 'arrombado') !== false || strpos($titulo, 'arromada') !== false || strpos($titulo, 'bicha') !== false || strpos($titulo, 'boiola') !== false || strpos($titulo, 'buceta') !== false || strpos($titulo, 'boquete') !== false || strpos($titulo, 'bosta') !== false || strpos($titulo, 'bronha') !== false || strpos($titulo, 'bunda') !== false || strpos($titulo, 'burra') !== false || strpos($titulo, 'burro') !== false || strpos($titulo, 'bêbado') !== false || strpos($titulo, 'cacete') !== false || strpos($titulo, 'corno') !== false || strpos($titulo, 'corna') !== false || strpos($titulo, 'canalha') !== false || strpos($titulo, 'criolo') !== false || strpos($titulo, 'cu') !== false || strpos($titulo, 'cuzão') !== false || strpos($titulo, 'debiloide') !== false || strpos($titulo, 'deficiente') !== false || strpos($titulo, 'demônio') !== false || strpos($titulo, 'doida') !== false || strpos($titulo, 'doido') !== false || strpos($titulo, 'escrota') !== false || strpos($titulo, 'escroto') !== false || strpos($titulo, 'facista') !== false || strpos($titulo, 'foda') !== false || strpos($titulo, 'fode') !== false || strpos($titulo, 'fudida') !== false || strpos($titulo, 'fudendo') !== false || strpos($titulo, 'gay') !== false || strpos($titulo, 'grelo') !== false || strpos($titulo, 'homo-sexual') !== false || strpos($titulo, 'idiota') !== false || strpos($titulo, 'imbecil') !== false || strpos($titulo, 'ladrão') !== false || strpos($titulo, 'lebrosa') !== false || strpos($titulo, 'lebroso') !== false || strpos($titulo, 'louco') !== false || strpos($titulo, 'louca') !== false || strpos($titulo, 'macaca') !== false || strpos($titulo, 'macaco') !== false || strpos($titulo, 'macumbeiro') !== false || strpos($titulo, 'macumbeira') !== false || strpos($titulo, 'mulata') !== false || strpos($titulo, 'mulato') !== false || strpos($titulo, 'nazista') !== false || strpos($titulo, 'otaria') !== false || strpos($titulo, 'otario') !== false || strpos($titulo, 'perereca') !== false || strpos($titulo, 'pinto') !== false || strpos($titulo, 'piranha') !== false || strpos($titulo, 'prostituto') !== false || strpos($titulo, 'prostituta') !== false || strpos($titulo, 'punheta') !== false || strpos($titulo, 'puto') !== false || strpos($titulo, 'puta') !== false || strpos($titulo, 'pênis') !== false || strpos($titulo, 'retardada') !== false || strpos($titulo, 'retardado') !== false || strpos($titulo, 'ridícula') !== false || strpos($titulo, 'racista') !== false || strpos($titulo, 'safada') !== false || strpos($titulo, 'safado') !== false || strpos($titulo, 'sapatão') !== false || strpos($titulo, 'sífilis') !== false || strpos($titulo, 'siririca') !== false || strpos($titulo, 'tarada') !== false || strpos($titulo, 'tarado') !== false || strpos($titulo, 'trouxa') !== false || strpos($titulo, 'traveco') !== false || strpos($titulo, 'vaca') !== false || strpos($titulo, 'vadia') !== false || strpos($titulo, 'viado') !== false || strpos($titulo, 'xereca') !== false || strpos($titulo, 'xota') !== false || strpos($titulo, 'vai toma no cu') !== false || strpos($titulo, 'lixo') !== false){
        header("location:cad_pub_comunicados.php?cod=$codigo");
        $msg ="<div class = alertaRedLinguagem>Cuidado com a linguagem!! Por favor, utilize palavras apropriadas para a publicação.</div>";

    }else if(strpos($texto_comunicado, 'caralho') !== false || strpos($texto_comunicado, 'porra') !== false || strpos($texto_comunicado, 'filho da puta') !== false || strpos($texto_comunicado, 'filha da puta') !== false || strpos($texto_comunicado, 'arrombado') !== false || strpos($texto_comunicado, 'arromada') !== false || strpos($texto_comunicado, 'bicha') !== false || strpos($texto_comunicado, 'boiola') !== false || strpos($texto_comunicado, 'buceta') !== false || strpos($texto_comunicado, 'boquete') !== false || strpos($texto_comunicado, 'bosta') !== false || strpos($texto_comunicado, 'bronha') !== false || strpos($texto_comunicado, 'bunda') !== false || strpos($texto_comunicado, 'burra') !== false || strpos($texto_comunicado, 'burro') !== false || strpos($texto_comunicado, 'bêbado') !== false || strpos($texto_comunicado, 'cacete') !== false || strpos($texto_comunicado, 'corno') !== false || strpos($texto_comunicado, 'corna') !== false || strpos($texto_comunicado, 'canalha') !== false || strpos($texto_comunicado, 'criolo') !== false || strpos($texto_comunicado, 'cu') !== false || strpos($texto_comunicado, 'cuzão') !== false || strpos($texto_comunicado, 'debiloide') !== false || strpos($texto_comunicado, 'deficiente') !== false || strpos($texto_comunicado, 'demônio') !== false || strpos($texto_comunicado, 'doida') !== false || strpos($texto_comunicado, 'doido') !== false || strpos($texto_comunicado, 'escrota') !== false || strpos($texto_comunicado, 'escroto') !== false || strpos($texto_comunicado, 'facista') !== false || strpos($texto_comunicado, 'foda') !== false || strpos($texto_comunicado, 'fode') !== false || strpos($texto_comunicado, 'fudida') !== false || strpos($texto_comunicado, 'fudendo') !== false || strpos($texto_comunicado, 'gay') !== false || strpos($texto_comunicado, 'grelo') !== false || strpos($texto_comunicado, 'homo-sexual') !== false || strpos($texto_comunicado, 'idiota') !== false || strpos($texto_comunicado, 'imbecil') !== false || strpos($texto_comunicado, 'ladrão') !== false || strpos($texto_comunicado, 'lebrosa') !== false || strpos($texto_comunicado, 'lebroso') !== false || strpos($texto_comunicado, 'louco') !== false || strpos($texto_comunicado, 'louca') !== false || strpos($texto_comunicado, 'macaca') !== false || strpos($texto_comunicado, 'macaco') !== false || strpos($texto_comunicado, 'macumbeiro') !== false || strpos($texto_comunicado, 'macumbeira') !== false || strpos($texto_comunicado, 'mulata') !== false || strpos($texto_comunicado, 'mulato') !== false || strpos($texto_comunicado, 'nazista') !== false || strpos($texto_comunicado, 'otaria') !== false || strpos($texto_comunicado, 'otario') !== false || strpos($texto_comunicado, 'perereca') !== false || strpos($texto_comunicado, 'pinto') !== false || strpos($texto_comunicado, 'piranha') !== false || strpos($texto_comunicado, 'prostituto') !== false || strpos($texto_comunicado, 'prostituta') !== false || strpos($texto_comunicado, 'punheta') !== false || strpos($texto_comunicado, 'puto') !== false || strpos($texto_comunicado, 'puta') !== false || strpos($texto_comunicado, 'pênis') !== false || strpos($texto_comunicado, 'retardada') !== false || strpos($texto_comunicado, 'retardado') !== false || strpos($texto_comunicado, 'ridícula') !== false || strpos($texto_comunicado, 'racista') !== false || strpos($texto_comunicado, 'safada') !== false || strpos($texto_comunicado, 'safado') !== false || strpos($texto_comunicado, 'sapatão') !== false || strpos($texto_comunicado, 'sífilis') !== false || strpos($texto_comunicado, 'siririca') !== false || strpos($texto_comunicado, 'tarada') !== false || strpos($texto_comunicado, 'tarado') !== false || strpos($texto_comunicado, 'trouxa') !== false || strpos($texto_comunicado, 'traveco') !== false || strpos($texto_comunicado, 'vaca') !== false || strpos($texto_comunicado, 'vadia') !== false || strpos($texto_comunicado, 'viado') !== false || strpos($texto_comunicado, 'xereca') !== false || strpos($texto_comunicado, 'xota') !== false || strpos($texto_comunicado, 'vai toma no cu') !== false || strpos($texto_comunicado, 'lixo') !== false){
        header("location:cad_pub_comunicados.php?cod=$codigo");
        $msg ="<div class = alertaRedLinguagem>LINGUAGEM INAPROPRIADA!! Por favor, utilize palavras apropriadas para a publicação.</div>";
    }
    else if($representante == "" || $titulo == ""){
            $msg ="<div class = alertaRedIden>Preencha todos os campos de identificação</div>";
            header("location:cad_pub_comunicados.php?cod=$codigo");

    }else if($representante != "pedro"){
        $msg ="<div class = alertaRedCodigo>Tente outro código de acesso</div>";
        header("location:cad_pub_comunicados.php?cod=$codigo");
    }else {

        if(move_uploaded_file($foto['tmp_name'],$urlComunicado)){
            if(mysqli_query($tec, "INSERT INTO `tb_publicacao_comunicados` 
                (`codigo_comunicado`, `representante`, `titulo`, `texto_comunicado`, `urlComunicado`) 
                    VALUES (NULL, '$representante', '$titulo', '$texto_comunicado', '$urlComunicado');")){
                    $msg ="<script>alert('incluido')</script>";
                    header("location:comunicados.php?cod=$codigo");

                        
                }
                }else if(mysqli_query($tec, "INSERT INTO `tb_publicacao_comunicados` 
                (`codigo_comunicado`, `representante`, `titulo`, `texto_comunicado`, `urlComunicado`) 
                    VALUES (NULL, '$representante', '$titulo', '$texto_comunicado', '$urlComunicado');")){
                        $msg ="<script>alert('incluido')</script>";
                        header("location:comunicados.php?cod=$codigo");
                    }

    }
        


@session_start();
$_SESSION['msg'] = $msg;
//header("location:comunicados.php?cod=$codigo");

?>