<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Profissionais | Liame</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">
  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
  <!--navbar-->
  <div id="header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <div class="container-fluid">
          <a href="../index.php" class="navbar-brand">
            <img class="img-fluid" id="logo" src="../assets/img/logo_liame.png" alt="Liame">
          </a>
        </div>
      </nav>
    </div>
  </div>
  <!--//navbar-->
  <main>
    <div id="login-container" class="d-flex">
      <div class="container justify-content-center align-self-center">
        <div class="row">
          <div class="col-md-6 d-flexalign-center text-center">
            <img id="icone" class="img-fluid" src="../assets/img/icone-especialista.png" alt="">
            <h1 class="hero-title">
              Login
            </h1>
            <h6 class="mb-5 subtitle">Bem-vindo! Faça seu login para começar.</h6>
            <div class="">
              <form class="ps-lg-5 me-lg-5" action="login_profissional.php" method="post">
                <div class="mb-3">
                  <input type="email" name= "email_profissional" class="form-control input input-login" id="email-login-profissional" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="mb-3">
                  <input type="password" name = "senha_profissional" class="form-control input input-login" id="senha-login-profissional" placeholder="Senha" required>
                </div>
                <div class="mb-3">
                  <input type="submit" name="enviar" class="hero-button button-primary btn btn-primary" value="Confirmar" required>
                </div>
                <ul class="list-unstyled">
                  <li class="list-item"><a href="cadastro_profissional1.php">Crie seu cadastro</a></li>
              </ul>
              </form>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
          </div>
        </div>
      </div>
    </div>
    <!--implementação jquery, poppers.js e plugin bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/bootstrap-validate.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
      bootstrapValidate('#email-login-profissional' , 'email:Insira um e-mail válido')
      bootstrapValidate('#senha-login-profissional' , 'matches:#senha-mae:As senhas devem ser iguais')
    </script>
</body>

</html>

<?php

  include("conexao.php");
    if(isset($_POST['enviar'])){
      $email_profissional = $_POST['email_profissional'];
      $senha_profissional = MD5($_POST['senha_profissional']);
      $query ='SELECT id_profissional, nome_profissional, email_profissional FROM profissional 
              WHERE email_profissional = "'.$email_profissional.'"
              AND senha_profissional = "'.$senha_profissional.'"';

      $resultado = mysqli_query($link, $query);
      $linhas = mysqli_num_rows($resultado);

        if ($linhas<=0){
          echo "inexistente";
        }else{
          $r = $resultado->fetch_array();
          session_start();
          $_SESSION['id_profissional'] = $r['id_profissional'];
          $_SESSION['nome_profissional'] = $r['nome_profissional'];
          $_SESSION['email_profissional'] = $r['email_profissional'];
          header('Location: ../index.php');

          //$_SESSION['email_profissional'] = $email_profissional;
          //setcookie("email_mae",$email_mae);

        }

    }
 ?>
