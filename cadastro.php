<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro - SocialTec</title>
    <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
    <script  defer src="../Privacidade/assets/js/bootstrap.min.js"></script>
    
    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
</head>
<body>

    <div class="cube">
        <div class="top"></div>
        <div>
            <span style="--i:0"></span>
            <span style="--i:1"></span>
            <span style="--i:2"></span>
            <span style="--i:3"></span>
        </div>
        </div>
    </div>
      <div class="Cadastro">
          <div class="loginOpt"><a href="login.php"><p class="LoginP">Login</p> </a><p class="CadastroP"> Cadastro</p>
          </div>
          <div class="tudoLogin">
              <div class="tituloLogin">
               <h1>Conecte-se ao mundo</h1>
              </div>
              <form action="cad.act.php" method="post" enctype="multipart/form-data">
                <label for="nome">   
                    <input type="text" id="nome_usuario" name="nome" placeholder="Nome" >
                </label>

                <label for="email">   
                  <input type="email" id="email_usuario" name="email" placeholder="Endereço de e-mail" >
                </label>

                <label for="senha">
                  <input type="password" id="senha_usuario" name="senha" placeholder="Digite sua senha">
                </label>

                <label for="confirmar_senha"> <input type="password" id="confirm_senha" name="confir_senha" placeholder="Confirme a senha"> <div id="img-senha">

                <img src="imagens/olho-aberto.png" alt="" id="olho" onclick="mostrarSenha()"></div></label>

                <div class="checkbox">

                  <input type="checkbox" id="termo" placeholder="Aceito os termos"> 
                  <p>Aceito os <a href="termo-privacidade/index.html">termos</a></p><br>
                  </div>


                <input type="submit" value="Cadastrar" onclick="enviarDados()">
                <div class="alertaPrivacidade">
                  Por favor, aceite o termo de privacidade
                </div>
              </form>
          </div>
      </div>

      <script>
        var nome_usuario = document.getElementById('nome_usuario');
        var email_usuario = document.getElementById('email_usuario');
        var password = document.getElementById('senha_usuario');
        var confirmar_password = document.getElementById('confirm_senha');
        var container = document.getElementById('img-senha');
        var alertaCampos = document.querySelector('.alertaRed');
        var alertaPriv = document.querySelector('.alertaPrivacidade');


        function mostrarSenha(){
          container.classList.toggle('visible');
          if(container.classList.contains('visible')){
            document.getElementById('olho').src = 'imagens/olho-fechado.png';
            password.type ='text';
            confirmar_password.type = 'text';
          }else{
            document.getElementById('olho').src = 'imagens/olho-aberto.png';
            password.type = 'password';
            confirmar_password.type = 'password';
          }
        }

        function enviarDados(){
          var input = document.getElementById('termo');
          if(input.checked == false){
            //alert('concorde');
            event.preventDefault();
            alertaPriv.style.visibility = "visible";
          }
        }
      </script>
      
</body>
</html>