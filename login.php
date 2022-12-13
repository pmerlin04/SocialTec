
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login - SocialTec</title>
    <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
    
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
      <div class="Login">
          <div class="loginOpt"><p class="LoginP">Login</p> <a href="cadastro.php"><p class="CadastroP"> Cadastro</p></a></div>
          <div class="tudoLogin">
              <div class="tituloLogin">
               <h1>Conecte-se ao mundo</h1>
              </div>
              <form action="login.act.php" method="post" enctype="multipart/form-data">
                <label for="email">   
                  <input type="email" id="email" name="email" placeholder="Endereço de e-mail">
                </label>
                <label for="senha">
                  <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                  <div id="img-senha"><img src="imagens/olho-aberto.png" alt="" id="olho" onclick="mostrarSenha()"></div>
                </label>
                <input type="submit" value="Entrar">
              </form>
          </div>

      </div>

      



      <script>
        var nome_usuario = document.getElementById('nome');
        var email_usuario = document.getElementById('email');
        var password = document.getElementById('senha');
        var confirmar_password = document.getElementById('confirm_senha');
        var container = document.getElementById('img-senha');

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
      </script>
</body>
</html>