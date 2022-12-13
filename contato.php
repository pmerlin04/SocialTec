<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-contato.css">
    <script src="libs/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/27d55b8184.js" crossorigin="anonymous"></script>
    <!--link dos icones-->
</head>

    <header>
            <div class="input">
                <input type="checkbox" class="checkbox" id="chk">
                    <label for="chk" class="label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                    </label>
            </div>
            
            </ul>  



        <fieldset class="grupos">
            <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" id="logo">
            <a href="#" id="nome"><h1>SocialTec</h1></a>
        </fieldset>

    </header>

<body>




        <script>
            let menuToggle = document.querySelector('.menuToggle');
            menuToggle.onclick = function() {
            menuToggle.classList.toggle('active')
            }
        </script>





<?php

    @session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>
    <div class="box">   
    <form action="contato.act.php" method="post" enctype="multipart/form-data">
        <fieldset id="borda">
            <legend><b>Contate-nos</b></legend>

        <label for="nome" class="labelInput" id="nome"><b>Seu e-mail</b></label>
        <input type="text" name="nomeContato"  class="inputUser">

        <label for="problema" class="labelInput" id="problema"><b>Qual é o seu problema?</b></label>
        <select name="problema" class="inputUser"  id="faixa">
            <option value>Selecione um tópico</option>
            <option value="1">Falha no carregamento da foto de perfil</option>
            <option value="2">Uso de linguagem desrespeitosa</option>
            <option value="3">Outro</option>
        </select>
        
       
        <label for="texto" class="labelInput" id="txt"><b>Explique seu problema</b></label>
        <textarea name="descriProblema" cols="25" rows="5" class="inputUser" wrap="hard" id="texto"></textarea>


        <input type="submit" value="Enviar" id="incluir">
        </fieldset>
    </form>
    </div>
   

  

<script src="js-contato.js"></script>
</body>
</html>
