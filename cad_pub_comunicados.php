<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-pub-comunicados.css">
    <script src="https://kit.fontawesome.com/27d55b8184.js" crossorigin="anonymous"></script>
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous">

      
    <?php
        session_start();
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
        //echo "o código é $cod_usuario";
    ?>
</head>
<body>
    <header>
        <div id="nav-menu">
            <img src="imagens/logo_oficial-p.png" alt="LOGO-SOCIALTEC" class="logotipo" id="logo">
            <ul id="nav-links">
                <li><a href="#">Chat</a></li>
                <li><a href="feed.php?cod=<?php  echo $perfil['codigo']; ?>" id="nome"><p id="feed">Feed</p></a></li>
                <li><a href="#" id="perfil">Perfil</a></li>
            </ul>

            <div class="burguer">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>
        </div>

        <div class="inputModo">
        <input type="checkbox" class="checkbox" id="chk">
        <label for="chk" class="label">
        <i class="fas fa-moon"></i>
        <i class="fas fa-sun"></i>
        <div class="ball"></div>
        </label>
        </div>
    </header>
      
    <div class="box">   
        <form action="cad_pub_comunicados.act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="codigo" value="<?php echo $perfil['codigo']; ?>">
            <fieldset class="caixa">
                    <legend><b>Publique um comunicado</b></legend>
                    <label for="representante" class="labelInput" id="codigo"><b>Código do representante</b></label>
                    <input type="text" name="representante"  class="inputUser" id="codigo">
                    
                    <label for="titulo" class="labelInput" id="titulo"><b>Título do Comunicado</b></label>
                    <input type="text" name="titulo" id="titulo" class="inputUser">

                    <div id="partTexto"><!--inicio da parte do texto-->
                    <label for="texto_comunicado" class="labelInput" id="texto_comunicado"><b>Texto</b></label>
                    <p id="descricao_comunicado">Descreva sua pergunta de forma detalhada para que outras pessoas possam responder.</p>
                    <textarea name="texto_comunicado" cols="25" rows="5" class="inputUser" wrap="hard" id="texto_comunicado"></textarea>
                    </div><!--final da parte do texto-->

                    <div id="partFoto">
                    <label for="foto" class="labelInput" id="foto"><b>Foto<b></label>
                    <input type="file" name="foto" class="inputUser"> 
                    </div>

                    <input type="submit" value="Publicar" id="incluir">
                </fieldset>
        </form>
    </div><!--final da box-->


    
    <script>
        var burguer =  document.querySelector('.burguer');
        var navLinks = document.querySelector('.nav-links');
        var burguer1 = document.querySelector('.burguer div:nth-child(1)');
        var burguer3 = document.querySelector ('.burguer div:nth-child(3)');
        var burguer2 = document.querySelector ('.burguer div:nth-child(2)');

        /*function do botao menu*/
        burguer.addEventListener('click', () => {
            navLinks.classList.toggle('exibir');
            burguer1.classList.toggle('close1');
            burguer3.classList.toggle('close3');
            burguer2.classList.toggle('close2');
        })


        var chk = document.getElementById('chk');
        var navlinks = document.querySelector('#nav-links li a');
        var feed = document.querySelector('#feed');
        var perfil = document.querySelector('#perfil');
        var pub = document.querySelector('.box');
        var tituloComunicado = document.querySelector('#titulo');
        var tituloRepre = document.querySelector('#codigo');
        var tituloTexto = document.querySelector('#texto_comunicado');
        var txtComunicado = document.querySelector('#descricao_comunicado');
        var tituloFoto = document.querySelector('#foto');
        var logo = document.querySelector("#logo");

        chk.addEventListener('change', ()=>{
            document.body.classList.toggle('dark');
            navlinks.classList.toggle('dark2');
            feed.classList.toggle('dark2');
            perfil.classList.toggle('dark2');
            pub.classList.toggle('dark1');
            tituloComunicado.classList.toggle('dark2');
            tituloRepre.classList.toggle('dark2');
            tituloTexto.classList.toggle('dark2');
            tituloFoto.classList.toggle('dark2');
            txtComunicado.classList.toggle('dark2');
            logo.setAttribute('src', 'imagens/logo_oficial-b.png');
            
        })

    </script>

</body>
</html>