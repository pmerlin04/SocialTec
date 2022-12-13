<?php
extract($_POST);
extract($_FILES);
require('conectar.php');

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


   
    if(strpos($nomeContato, 'caralho') !== false || strpos($nomeContato, 'porra') !== false || strpos($nomeContato, 'filho da puta') !== false || strpos($nomeContato, 'filha da puta') !== false || strpos($nomeContato, 'arrombado') !== false || strpos($nomeContato, 'arromada') !== false || strpos($nomeContato, 'bicha') !== false || strpos($nomeContato, 'boiola') !== false || strpos($nomeContato, 'buceta') !== false || strpos($nomeContato, 'boquete') !== false || strpos($nomeContato, 'bosta') !== false || strpos($nomeContato, 'bronha') !== false || strpos($nomeContato, 'bunda') !== false || strpos($nomeContato, 'burra') !== false || strpos($nomeContato, 'burro') !== false || strpos($nomeContato, 'bêbado') !== false || strpos($nomeContato, 'cacete') !== false || strpos($nomeContato, 'corno') !== false || strpos($nomeContato, 'corna') !== false || strpos($nomeContato, 'canalha') !== false || strpos($nomeContato, 'criolo') !== false || strpos($nomeContato, 'cu') !== false || strpos($nomeContato, 'cuzão') !== false || strpos($nomeContato, 'debiloide') !== false || strpos($nomeContato, 'deficiente') !== false || strpos($nomeContato, 'demônio') !== false || strpos($nomeContato, 'doida') !== false || strpos($nomeContato, 'doido') !== false || strpos($nomeContato, 'escrota') !== false || strpos($nomeContato, 'escroto') !== false || strpos($nomeContato, 'facista') !== false || strpos($nomeContato, 'foda') !== false || strpos($nomeContato, 'fode') !== false || strpos($nomeContato, 'fudida') !== false || strpos($nomeContato, 'fudendo') !== false || strpos($nomeContato, 'gay') !== false || strpos($nomeContato, 'grelo') !== false || strpos($nomeContato, 'homo-sexual') !== false || strpos($nomeContato, 'idiota') !== false || strpos($nomeContato, 'imbecil') !== false || strpos($nomeContato, 'ladrão') !== false || strpos($nomeContato, 'lebrosa') !== false || strpos($nomeContato, 'lebroso') !== false || strpos($nomeContato, 'louco') !== false || strpos($nomeContato, 'louca') !== false || strpos($nomeContato, 'macaca') !== false || strpos($nomeContato, 'macaco') !== false || strpos($nomeContato, 'macumbeiro') !== false || strpos($nomeContato, 'macumbeira') !== false || strpos($nomeContato, 'mulata') !== false || strpos($nomeContato, 'mulato') !== false || strpos($nomeContato, 'nazista') !== false || strpos($nomeContato, 'otaria') !== false || strpos($nomeContato, 'otario') !== false || strpos($nomeContato, 'perereca') !== false || strpos($nomeContato, 'pinto') !== false || strpos($nomeContato, 'piranha') !== false || strpos($nomeContato, 'prostituto') !== false || strpos($nomeContato, 'prostituta') !== false || strpos($nomeContato, 'punheta') !== false || strpos($nomeContato, 'puto') !== false || strpos($nomeContato, 'puta') !== false || strpos($nomeContato, 'pênis') !== false || strpos($nomeContato, 'retardada') !== false || strpos($nomeContato, 'retardado') !== false || strpos($nomeContato, 'ridícula') !== false || strpos($nomeContato, 'racista') !== false || strpos($nomeContato, 'safada') !== false || strpos($nomeContato, 'safado') !== false || strpos($nomeContato, 'sapatão') !== false || strpos($nomeContato, 'sífilis') !== false || strpos($nomeContato, 'siririca') !== false || strpos($nomeContato, 'tarada') !== false || strpos($nomeContato, 'tarado') !== false || strpos($nomeContato, 'trouxa') !== false || strpos($nomeContato, 'traveco') !== false || strpos($nomeContato, 'vaca') !== false || strpos($nomeContato, 'vadia') !== false || strpos($nomeContato, 'viado') !== false || strpos($nomeContato, 'xereca') !== false || strpos($nomeContato, 'xota') !== false || strpos($nomeContato, 'vai toma no cu') !== false || strpos($nomeContato, 'lixo') !== false){
        $msg ="<div class = alertaRedLinguagem>Por favor, utilize palavras apropriadas para o contato conosco</div>";
        
    }else if($nomeContato == "" || $problema == ""){
        $msg= "<div class = alertaRedEmail>Preencha os campos de identificação</div>";
       

    }else{
        if(mysqli_query($tec, "INSERT INTO `tb_contato` 
        (`codContato`, `nome`, `problema`, `descriProblema`) 
            VALUES (NULL, '$nomeContato', '$problema', '$descriProblema');")){
            $msg ="<script>alert('obrigado pela sua informação, entraremos em contato com você!!')</div>";            
        }

        }


@session_start();
 $_SESSION['msg'] = $msg;
header("location:contato.php");

?>