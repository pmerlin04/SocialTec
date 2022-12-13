<?php
extract($_POST);
require('conectar.php');
$senha = md5($senha);
$confir_senha = md5($confir_senha);
$busca = mysqli_query($tec, "Select * from `tb_perfil` where `email_usuario` = '$email';");
$busca_nome = mysqli_query($tec, "Select * from `tb_perfil` where `nome` = '$nome';");
//var_dump($busca);


        if($busca->num_rows !=0){//verifica se existe o e-mail ja cadastrdo
            $msg ="<div class = alertaRed>Este e-mail já está sendo utilizado</div>";
            header("location:cadastro.php");
        }else if($busca_nome->num_rows !=0){//verifica se existe o nome ja cadastrado
            $msg ="<div class = alertaRed>Este nome já está sendo utilizado</div>";
            header("location:cadastro.php");
        }else if($nome == "" || $email == ""){//verifica se tem campos que não foram digitados no cadastro
            $msg ="<div class = alertaRed>Há campos vazios</div>";
            header("location:cadastro.php");
        }else if($senha<4){//verifica se o tamanho da senha é maior que 5
            $msg ="<div class = alertaRed>A senha precisa conter pelo menos 5 caracteres</div>";
            header("location:cadastro.php");
        }
        else {
            if ($senha == $confir_senha && mysqli_query($tec, "INSERT INTO `tb_perfil`
            (`codigo`, `nome`, `url`, `txt`, `color`, `email_usuario`, `senha`, `confir_senha`) VALUES 
            (NULL, '$nome', '', '', '', '$email', '$senha', '$confir_senha');")){
            //$msg ="<div class = alerta>Bem vindo(a) $nome!</div>";
            header("location:login.php");
            }else if ($senha != $confir_senha){
                $msg ="<div class = alertaRed>As senhas precisam ser identicas!</div>";
                header("location:cadastro.php");
            }   
                
        }


@session_start();
$_SESSION['logado'] = true;//essa linha é pro navegador entender que quando o usuario fizer o cadstro, ele estará logado
 $_SESSION['msg'] = $msg;

?>
 
 