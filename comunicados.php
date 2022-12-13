<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-comunicados.css">
    <script src="libs/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/27d55b8184.js" crossorigin="anonymous"></script>
    <!--link dos icones-->
</head>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        require('perfil_arrumado/connect.php');
        require('conectar.php');
        $codigo = $_GET['cod'];
        $busca = mysqli_query($con,"Select * from `tb_perfil` where `codigo` = '$codigo';");
        $perfil = mysqli_fetch_array($busca);
        $buscaNome = mysqli_query($con, "Select `codigo` from `tb_perfil` where `codigo` = '$codigo';");
        $nome_usuario = mysqli_fetch_array($buscaNome);
        //var_dump($perfil);
?>

    <header>
        <div class="menu">

                <!-- BARRA DE PESQUISA
    <form action="pesquisar.php" method="post">
        <div class="barra">
            <input type="text" name="pesquisar" class="pesquisar" placeholder="Explore as publicações">
            <input type="submit" value="enviar" class="btnEnviar" onclick="searchData()"></input>
        </div>
    </form> -->

            <!-- <ul class="nav-links">
                <li><a href="cad_pub.php">Publicação</a></li> -->

            <!-- <div class="input">
                <input type="checkbox" class="checkbox" id="chk">
                    <label for="chk" class="label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                    </label>
            </div> -->
            
            </ul>   
            
            <div class="burguer">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>

        </div>

    </header>

<body>

    <fieldset class="grupos">
    <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" id="logo">
    
        <a href="feed.php?cod=<?php  echo $perfil['codigo']; ?>" id="nome"><h1>SocialTec</h1></a>

            <!-- <fieldset class="grupoRecados">
                <img src="imagens/auto-falante.png" alt="auto-falante" class="logoRecados">
                <h2>Recados</h2>
            </fieldset>
            <fieldset class="grupoNoticias">
                <img src="imagens/img-noticia" alt="auto-falante" class="logoRecados">
                <h2>Notícias</h2>
            </fieldset> -->
            
                            <!--BARRA DE PESQUISA-->
            <form action="pesquisar_comunicados.php" method="post">
            <div class="barra">
            <img src="imagens/icons-feed/lupa-p" alt="logo-html" id="lupa"></img>
                <input type="text" name="pesquisar" class="pesquisar" placeholder="Explore as publicações">
                <input type="submit" value="enviar" class="btnEnviar" onclick="searchData()"></input>
            </div>
            </form>

        

        <fieldset class="grupoHTML">
            <img src="imagens/imagens/chat-p.png" alt="logo-html" class="logoHTML" id="chat">
            <a href="chat_socialtec/index.php">
            <h2>Chat</h2>
        </fieldset>
            
        <fieldset class="grupoCSS">
            <img src="imagens/imagens/wiki-p.png" alt="logo-css" class="logoCSS" id="wiki">
            <a href="wiki/index.php">
            <h2>Wiki</h2>
        </fieldset>

        <fieldset class="grupoJS">
            <img src="imagens/icons-feed/comunicados-p" alt="logo-js" class="logoJS" id="comunicado">
            <a href="comunicados.php?cod=<?php  echo $perfil['codigo']; ?>">
            <h2>Comunicados</h2>
            </a>
        </fieldset>

        <fieldset class="grupoJAVA">
            <img src="imagens/dark-mode.png" alt="logo-php" class="logoJAVA" id="light-mode">
            <h2>Tema</h2>
            <div class="exibirTema">
            <div class="input" id="input">
                <input type="checkbox" class="checkbox" id="chk">
                    <label for="chk" class="label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                    </label>
            </div>
            </div>
            </fieldset>
            

            <fieldset class="grupoPHP">
            <a href="cad_pub_comunicados.php?cod=<?php  echo $perfil['codigo']; ?>">
            <img src="imagens/adc_pub-b.png" alt="logo-php" class="logoPHP"><h2>Nova Publicação</h2>
            </a>
            </fieldset>
        </fieldset>

            <!-- <fieldset class="grupoJAVA">
                <img src="imagens/logo-java.png" alt="logo-java" class="logoJAVA">
                <h2>JAVA</h2>
            </fieldset>
            <fieldset class="grupoSQL">
                <img src="imagens/logo-sql.png" alt="logo-sql" class="logoSQL">
                <h2>SQL</h2>
            </fieldset> -->

    </fieldset>

   

    <div class="nav2">
<div class="classPerfil">
    <a href="perfil_arrumado/perfil.php?cod=<?php  echo $perfil['codigo']; ?>"><img src="perfil_arrumado/<?php  echo $perfil['url']; ?>" id="fotoPerfil" title="Foto de perfil">
    <a id="nomeUsuario" href="perfil_arrumado/perfil.php?cod=<?php  echo $perfil['codigo']; ?>"><?php echo $perfil['nome']; ?></a>
        <?php
        @session_start();
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        echo "<a href=logoff.php><img src='imagens/sair-p.png' alt='sair'></img></a>";
        }else{
        echo "<a href=login.php><img src='imagens/icons-feed/sair-p.png' id='sair' title='Sair'></img></a>";
        }
        ?>      
</div>

<div class="novosUsuarios">

</div>
</div>

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


<?php

    @session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require('conectar.php');
    $publicacoes_comunicados = mysqli_query($tec, "Select * from `tb_publicacao_comunicados`");

    echo "<fieldset class=principal>";

    while($publicacoes_comun = mysqli_fetch_array($publicacoes_comunicados)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $publicacoes_comun[codigo_comunicado]</p>";
        echo "<h3>$publicacoes_comun[titulo]</h3>";
        echo "<textarea class=txt disabled=true>$publicacoes_comun[texto_comunicado]</textarea>";
        echo "<img src = $publicacoes_comun[urlComunicado] alt='Faça o update da imagem do comunicado' id='imgComunicado'>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "<input type=button value=Comentar class=comentar id=comentar onclick=comentar()>";
        echo "</div>";//final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        echo "</div>";//final da div curtidas
        //COMEÇO DA PARTE DOS COMENTARIOS
        
        ?>
        <form action="comentarioFeitoCom.act.php" method="post">
        <input type="hidden" name="codigo" value="<?php echo $perfil['codigo']; ?>">
        <input type="hidden" name="codigoComunicado" value="<?php echo $publicacoes_comun['codigo_comunicado'] ?>">
        <input type="text" name="nomeComentarioCom" id="nomeComentario" value="<?php echo $perfil['nome']; ?>">
        <textarea name="txtComentarioCom" id="txtComentario" maxlength="200" placeholder="Escreva um comentário..." required></textarea>
        <input type="submit" value="Enviar" id="btn-coment">
        <?php
        
        echo "</form>";
    

        $comentariosComunicado = mysqli_query($tec, "Select * from `tb_comentarios_comunicados` where `codigoComunicado` = '$publicacoes_comun[codigo_comunicado]'");
        while($comentarioCom = mysqli_fetch_array($comentariosComunicado)){
            echo "<br><p class=nomeComentFeito>$comentarioCom[nomeComenCom]</p>";
            echo "<textarea class=txtComentFeito disabled=true>$comentarioCom[txtComenCom]</textarea>";
        }//FINAL DA PARTE DOS COMENTARIOS
 
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";

?>  


<script src="js-comunicados.js"></script>
</body>
</html>