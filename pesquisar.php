<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-pesquisar.css">
    <script src="https://kit.fontawesome.com/27d55b8184.js" 
    crossorigin="anonymous"></script>

</head>
<?php
            @session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }

        require('perfil_arrumado/connect.php');
        require('conectar.php');
        //$codigo = $_GET['cod'];
        //$busca = mysqli_query($con,"Select * from `tb_perfil` where `codigo` = '$codigo';");
        //$perfil = mysqli_fetch_array($busca);
        //var_dump($perfil);
        //echo "o código é $cod_usuario";
?>
<header>
        <div class="menu">

            </ul>   
            
            <div class="burguer">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>

        </div>

    </header>

    <fieldset class="grupos">
    <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" id="logo">
    <a href="#" id="nome"><h1>SocialTec</h1></a>

        <form action="pesquisar.php" method="post">
        <div class="barra">
            <input type="text" name="pesquisar" class="pesquisar" placeholder="Explore as publicações">
            <input type="submit" value="enviar" class="btnEnviar" onclick="searchData()"></input>
        </div>
        </form>

        
        <fieldset class="grupoHTML">
            <img src="imagens/imagens/chat-p.png" alt="logo-html" class="logoHTML" id="chat">
            <a href="chat_socialtec/index.php">
            <h2>Chat</h2></a>
        </fieldset>

        <fieldset class="grupoCSS">
            <img src="imagens/imagens/wiki-p.png" alt="logo-css" class="logoCSS" id="wiki">
            <a href="wiki/index.php">
            <h2>Wiki</h2></a>
        </fieldset>

        
        
    </fieldset>

    <!-- <div class="nav2">
<div class="classPerfil">
    <a href="perfil_arrumado/perfil.php?cod=<?php  echo $perfil['codigo']; ?>"><img src="perfil_arrumado/<?php  echo $perfil['url']; ?>" id="fotoPerfil" title="Foto de perfil">
   
</div> -->

    <div class="botao"><!--BOTAO DOS GRUPOS-->
    <div class="linha4"></div>
    <div class="linha5"></div>
    <div class="linha6"></div>
    </div>
<body>
<?php
extract($_POST);
extract($_FILES);

require('conectar.php');
//$busca = mysqli_query($tec, "Select * from `tb_perfil` where `codigo` = '$codigo';");

if(!empty($_POST['pesquisar'])){
    $pesquisar = $_POST['pesquisar'];
    $result_pesquisa = "SELECT * FROM tb_publicacao WHERE nome LIKE '%$pesquisar%' or texto LIKE '%$pesquisar%'";
    $resultado_pesquisa = mysqli_query($tec, $result_pesquisa);
    
    echo "<fieldset class=principal>";

    while($row_pesquisa = mysqli_fetch_array($resultado_pesquisa)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $row_pesquisa[codigo]</p>";
        echo "<h3>$row_pesquisa[nome]</h3>";
        echo "<textarea class=txt disabled=true>$row_pesquisa[texto]</textarea>";
        echo "<textarea class=trechoCod disabled=true>$row_pesquisa[trechoCod]</textarea>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "</div>";//final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        echo "</div>";//final da div curtidas


        // echo "<fieldset class=partComentario>";//inicio da caixa com 
        $comentarios = mysqli_query($tec, "Select * from `tb_comentarios` where `codPublicacao` = '$row_pesquisa[codigo]'");
        while($comentario = mysqli_fetch_array($comentarios)){
            echo "<p class=nomeComentFeito>$comentario[NomeComentario]</p>";
            echo "<textarea class=txtComentFeito disabled=true>$comentario[txtComentario]</textarea>";
        }//FINAL DA PARTE DOS COMENTARIOS
        // echo "</fieldset>";//final da caixa com comentarios
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";
}else{
    $publicacoes = mysqli_query($tec, "Select * from `tb_publicacao`");

    echo "<fieldset class=principal>";

    while($publicacao = mysqli_fetch_array($publicacoes)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $publicacao[codigo]</p>";
        echo "<h3>$publicacao[nome]</h3>";
        echo "<textarea class=txt disabled=true>$publicacao[texto]</textarea>";
        echo "<textarea class=trechoCod disabled=true>$publicacao[trechoCod]</textarea>";
        

        echo "<div class=comentarios id=container>";//inicio da div comentarios
        //COMEÇO DA PARTE DOS COMENTARIOS
        
        echo "</div>";//final da div comentarios
    
        $comentarios = mysqli_query($tec, "Select * from `tb_comentarios` where `codPublicacao` = '$publicacao[codigo]'");
        while($comentario = mysqli_fetch_array($comentarios)){
            
            echo "<p class=nomeComentFeito>$comentario[NomeComentario]</p>";

            echo "<textarea class=txtComentFeito cols='50' rows='100' disabled=true>$comentario[txtComentario]</textarea>";

            
        }//FINAL DA PARTE DOS COMENTARIOS
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";

}
?>

<script src="js-pesquisar.js"></script>
</body>
</html>

