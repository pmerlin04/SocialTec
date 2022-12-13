<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-pesquisarCom.css">
    <script src="https://kit.fontawesome.com/27d55b8184.js" 
    crossorigin="anonymous"></script>

</head>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

?>
<header>
        <div class="menu">
            <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" id="logo">

                <!-- BARRA DE PESQUISA
    <form action="pesquisar.php" method="post">
        <div class="barra">
            <input type="text" name="pesquisar" class="pesquisar" placeholder="Explore as publicações">
            <input type="submit" value="enviar" class="btnEnviar" onclick="searchData()"></input>
        </div>
    </form> -->

            <!-- <ul class="nav-links">
                <li><a href="cad_pub.php">Publicação</a></li> -->

            <div class="input">
                <input type="checkbox" class="checkbox" id="chk">
                    <label for="chk" class="label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                    </label>
            </div>
            
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

        <form action="pesquisar_comunicados.php" method="post">
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



    <script>
        let menuToggle = document.querySelector('.menuToggle');
        menuToggle.onclick = function() {
        menuToggle.classList.toggle('active')
        }
    </script>


    </div>

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

if(!empty($_POST['pesquisar'])){
    $pesquisar_comunicados = $_POST['pesquisar'];
    $resul_pesquisa = "SELECT * FROM tb_publicacao_comunicados WHERE titulo LIKE '%$pesquisar_comunicados%' or texto_comunicado LIKE '%$pesquisar_comunicados%'";
    $resultado_pesquisa = mysqli_query($tec, $resul_pesquisa);
    
    echo "<fieldset class=principal>";

    while($row_pesquisa = mysqli_fetch_array($resultado_pesquisa)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $row_pesquisa[codigo_comunicado]</p>";
        echo "<h3>$row_pesquisa[titulo]</h3>";
        echo "<textarea class=txt disabled=true>$row_pesquisa[texto_comunicado]</textarea>";
        echo "<img src = $row_pesquisa[urlComunicado] alt='Faça o update da imagem do seu código'>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "</div>";//final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        echo "</div>";//final da div curtidas

    
        $comentariosComunicado = mysqli_query($tec, "Select * from `tb_comentarios_comunicados` where `codigoComunicado` = '$row_pesquisa[codigo_comunicado]'");
        while($comentarioCom = mysqli_fetch_array($comentariosComunicado)){
            echo "<p class=nomeComentFeito>Nome: $comentarioCom[nomeComenCom]</p>";
            echo "<textarea class=txtComentFeito disabled=true>$comentarioCom[txtComenCom]</textarea>";
        }//FINAL DA PARTE DOS COMENTARIOS
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";
}else{
    $publicacoes_comunicados = mysqli_query($tec, "Select * from `tb_publicacao_comunicados`");

    echo "<fieldset class=principal>";

    while($publicacoes_comun = mysqli_fetch_array($publicacoes_comunicados)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $publicacoes_comun[codigo_comunicado]</p>";
        echo "<h3>$publicacoes_comun[titulo]</h3>";
        echo "<textarea class=txt disabled=true>$publicacoes_comun[texto_comunicado]</textarea>";
        echo "<img src = $publicacoes_comun[urlComunicado] alt='Faça o update da imagem do comunicado'>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "</div>";//final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        echo "</div>";//final da div curtidas
        //COMEÇO DA PARTE DOS COMENTARIOS
        
    

        $comentariosComunicado = mysqli_query($tec, "Select * from `tb_comentarios_comunicados` where `codigoComunicado` = '$publicacoes_comun[codigo_comunicado]'");
        while($comentarioCom = mysqli_fetch_array($comentariosComunicado)){
            echo "<br><br><br><p class=nomeComentFeito>Nome: $comentarioCom[nomeComenCom]</p>";
            echo "<textarea class=txtComentFeito disabled=true>$comentarioCom[txtComenCom]</textarea>";
        }//FINAL DA PARTE DOS COMENTARIOS
 
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";
}
?>

<script src="js-pesquisar.js"></script>
</body>
</html>
