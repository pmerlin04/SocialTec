
<?php
require('conectar.php');

extract($_POST);
$busca = mysqli_query($tec, "Select * from `tb_perfil` where `email_usuario` = '$email';");
$busca_senha = mysqli_query($tec, "Select * from `tb_perfil` where `senha` = '$senha';");



        if($email == "" || $senha == ""){//verifica se tem campos que não foram digitados no cadastro
            $msg ="<div class = alertaRed>Há campos vazios</div>";
            header("location:login.php");
        }else if ($busca->num_rows == 1){
                $usuario = mysqli_fetch_array($busca);
                $senha = md5($senha);
                if($usuario['senha']== $senha ){
                    session_start();
                    $_SESSION['logado'] = true;
                    $_SESSION['nome'] = $usuario['nome'];
                    //$msg ="<div class = alerta>Bem vindo(a) $usuario[nome]!</div>";
                    header("location:feed.php?cod=$usuario[codigo]");
                    
                }else{
                    $msg ="<div class = alertaRed>Email ou senha incorreto!</div>";
                    header("location:login.php");
                }
                }else{
                    $msg ="<div class = alertaRed>Email ou senha incorreto!</div>";
                    header("location:login.php");
        }


//var_dump($busca)
@session_start();
$_SESSION['msg'] = $msg;
