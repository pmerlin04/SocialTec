<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-feed.css">
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
        // var_dump($nome_usuario);
        //echo "o código é $cod_usuario";
?>

    <header>
        <div class="menu">

            <ul class="nav-links">
            <!-- <li><div class="classPerfil">
            <a href="perfil_arrumado/perfil.php?cod=<?php  echo $perfil['codigo']; ?>"><img src="perfil_arrumado/<?php  echo $perfil['url']; ?>
            
            id="fotoPerfil"></a> -->
               
            </div></div></div></li>
  

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

        
                        <!--BARRA DE PESQUISA-->
                        
    <form action="pesquisar.php" method="post">
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
        <a href="#abrirModal"><img src="imagens/adc_pub-b.png" alt="logo-php" class="logoPHP"><h2>Nova Publicação</h2>
            <div id="abrirModal" class="modal">
            <a href="#fechar" title="Fechar" class="fechar">X</a>

            <div class="box">   
            <form action="cad_pub.act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">

            <fieldset>
                <legend><b>Faça sua publicação</b></legend>

            <label for="nome" class="labelInput"><p id="Nome_do_usuario">Nome do usuário:</p></label>
            <input type="text" name="nome"  class="inputUser" id="nomeUser" value="<?php echo $perfil['nome']; ?>">

            <div id="partTexto"><!--inicio da parte do texto-->
            <label for="texto" class="labelInput"><p id=txtNP>Texto</p></label>
            <p id="textoNP">Descreva sua pergunta de forma detalhada para que outras pessoas possam responder.</p>
            <textarea name="texto" cols="25" rows="5" class="inputUser" wrap="hard" id="texto"></textarea>
            </div><!--final da parte do texto-->

            <div id="partCod"><!--inicio da parte do codigo-->
            <label for="trechoCod" class="labelInput"><p id="txtCodNP">Código</p></label>
            <p id="textoCodNP">Mostre o trecho do seu código que está com o problema informado acima</p>
            <textarea name="trechoCod" cols="25" rows="5" class="inputUser" wrap="hard" id="trechoCod"></textarea>
            </div><!--final da parte do codigo-->

            
            <!-- parte da foto -->
            <!-- <label for="foto" id="labelAddFoto">
                <h1>Upload</h1></label>
            <input type="file" name="foto" id ="foto">  -->

            <!-- publicar -->
            <input type="submit" value="Publicar" id="incluir">
            </fieldset>
        </form>
        </div>
    </div>
    </a>    
    </fieldset>
    



</fieldset>
    
    <div class="botao"><!--BOTAO DOS GRUPOS-->
                <div class="linha4"></div>
                <div class="linha5"></div>
                <div class="linha6"></div>
    </div>

<div class="nav2">
<div class="classPerfil">
    <a href="perfil_arrumado/perfil.php?cod=<?php  echo $perfil['codigo']; ?>"><img src="perfil_arrumado/<?php  echo $perfil['url']; ?>" id="fotoPerfil" title="Foto de perfil">
    <a id="nomeUsuario" href="perfil_arrumado/perfil.php?cod=<?php  echo $perfil['codigo']; ?>"><?php echo $perfil['nome']; ?> </a>
        <?php
        @session_start();
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        echo "<a href=logoff.php><img src='imagens/sair-p.png' alt='sair'></img></a>";
        }else{
        echo "<a href=login.php><img src='imagens/icons-feed/sair-p.png' id='sair' alt='sair' title='Sair'></img></a>";
        }
        ?>      
</div>

    <div class="novosUsuarios">
        <div class="caixa">

        <h1>Novos usuários</h1>

        <ul id="ListaPerfil"><li>
        <img src="imagens/pedrao.jpg" class="fotoPessoa" id="pedro"><b><p>Pedro Barbosa</p></b></img></li></ul>

        <ul id="ListaPerfil"><li>
        <img src="imagens/isaias.jpg" class="fotoPessoa" id="isaias"><b><p>Isaías Belarmina</p></b></img></li></ul>

        <ul id="ListaPerfil"><li>
        <img src="imagens/fernanda.jpg" class="fotoPessoa" id="fernanda"><b><p>Fernanda Almeida</p></b></img></li></ul>

        <ul id="ListaPerfil"><li>
        <img src="imagens/guilherme.png" class="fotoPessoa" id="guilherme"><b><p>Guilherme de Lima</p></b></img></li></ul>

        <ul id="ListaPerfil"><li>
        <img src="imagens/gustavo.png" class="fotoPessoa" id="gustavo"><b><p>Gustavo Duarte</p></b></img></li></ul>

        </div>

        </div>

        <a href="contato.php" id="contate">Contate-nos</a>
    </div>






<?php

    @session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require('conectar.php');
    $publicacoes = mysqli_query($tec, "Select * from `tb_publicacao`");

    echo "<fieldset class=principal>";

    while($publicacao = mysqli_fetch_array($publicacoes)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $publicacao[codigo]</p>";
        echo "<h3>$publicacao[nome]</h3>";
        echo "<textarea class=txt disabled=true>$publicacao[texto]</textarea>";
        echo "<textarea class=trechoCod disabled=true>$publicacao[trechoCod]</textarea>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "<input type=button value=Comentar class=comentar id=comentar onclick=comentar()>";
        echo "</div>"; //final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        // echo "<img src = imagens/coracao-curtir.png alt=coracao-curtir>";
        // echo "<p class=num-curtidas></p>";//contador de curtidas
        echo "</div>";//final da div curtidas

        echo "<div class=comentarios id=container>";//inicio da div comentarios
        //COMEÇO DA PARTE DOS COMENTARIOS
        ?>
        <form action="comentarioFeito.act.php" method="post">
        <input type="hidden" name="codigo" value="<?php echo $perfil['codigo']; ?>">
        <input type="hidden" name="codPublicacao" value="<?php echo $publicacao['codigo'] ?>">
        <input type="text" name="nome" id="nomeComentario" value="<?php echo $perfil['nome']; ?>">
        <textarea name="comentario" id="txtComentario" maxlength="200" placeholder="Escreva um comentário..." required></textarea>
        <input type="submit" value="Enviar" id="btn-coment">
        <?php
        
        echo "</form>";
        echo "</div>";//final da div comentarios
    
        $comentarios = mysqli_query($tec, "Select * from `tb_comentarios` where `codPublicacao` = '$publicacao[codigo]'");
        while($comentario = mysqli_fetch_array($comentarios)){
            
            echo "<p class=nomeComentFeito>$comentario[NomeComentario]</p>";
            // echo "<img src=imagens/perfil id=fotoPerfilComent $perfil[url]>";
            echo "<textarea class=txtComentFeito cols='50' rows='100' disabled=true>$comentario[txtComentario]</textarea>";

            
        }//FINAL DA PARTE DOS COMENTARIOS
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";

?>




<script src="js-feed.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>
</html>


