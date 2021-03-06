<!doctype html>
<html lang="pt-br">

<?php
session_start();
if(isset($_SESSION['id_mae'])){
  $id_mae = $_SESSION['id_mae'];
  $id_profissional = 0;
  $id_adm = 0;
}
else if(isset($_SESSION['id_profissional'])){
  $id_profissional = $_SESSION['id_profissional'];
  $id_mae = 0;
  $id_adm = 0;
}
else if(isset($_SESSION['id_adm'])){
  $id_adm = $_SESSION['id_adm'];
  $id_profissional = 0;
  $id_mae = 0;
}
else{
  $id_adm=0;
  $id_profissional = 0;
  $id_mae = 0;
}
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Central de ajuda | Liame</title>

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
  <?php
  include_once 'menu3.php';
  Menu($id_mae, $id_profissional, $id_adm);
  
  ?>
  <main>
   
    <!--//navbar-->

  <main class="">
    <div class="container content shadow-lg mb-5">
      <h4 class="mb-4">Central de ajuda para especialistas</h4>


      <h5>Introdução</h5>
      <p>Ela tem duas “categorias” uma sobre a criação da conta e o outro sobre a conta. Só foi
          realizada a central de ajuda para os especialistas pois a mãe não tem necessidade de
          coloca os dados dela de modo público, pagar é pelo serviço e nem nada do tipo. </p>

      <h5 class="pt-4">1. Criação da conta</h5>
      <p><b>Quem pode se registrar na plataforma Liame?</b></p>
        <p>Liame é uma plataforma que aceita o registro de duas formas:</p>

      <p>- Especialistas individuais, ou seja, profissionais da saúde cujo registro é comprovado, e que realizem consultas em consultórios particulares ou centros médicos (tais como clínicas e hospitais);<br>
         - Mães, gestantes e tutores de crianças que pretendem registar o desenvolvimento da criança ou realizar acompanhamento profissional para a gestação e maternidade.</p>


      <h5 class="pt-4">Por que é importante completar o perfil?</h5>
      <p> A internet é uma fonte de informações praticamente completa. Tudo o que pesquisamos nos traz resultados efetivos. Nós, como usuários, buscamos obter todas as informações necessárias e, a partir disto, tomamos a decisão da aquisição de um produto ou serviço, por exemplo.<br>
        Na visão do paciente, obter as informações necessárias antes da tomada da decisão de um agendamento de consulta é fundamental para a escolha do profissional da saúde. Por isso, preencher o seu perfil com o máximo de detalhes possível garante que o paciente saiba de tudo antes de comparecer ao consultório.
        </p>

        <h5 class="pt-4">Recomendações para Fotos</h5>
         <p> Dicas para uma boa foto de perfil:<br>
            - Imagem frontal do Profissional (idealmente o busto) ou do logotipo do consultório.<br>
            - Se você não quiser mostrar sua imagem, pode adicionar uma foto relacionada ao seu consultório ou sua especialidade.<br>
            - Utilize sempre imagens coloridas, não em preto e branco ou com filtros.<br>
            - A imagem não deve incluir marcas d'água ou informações de contato como e-mail e telefone.<br>
            - Tamanho mínimo: 100 × 100 pixels<br>
            - Peso máximo: 5MB<br>
            - Formato: jpg ou png (para logos recomendamos png). </p>

        <h5 class="pt-4">Demais imagens a serem adicionadas em seu perfil na seção Fotos:</h5>
        <p> Recomendamos enviar fotos das instalações ou do seu consultório para que os pacientes possam ter uma ideia de onde você trabalha.<br>
            Fotos não recomendadas: No Liame, temos experiência no assunto e sabemos que imagens explícitas sobre intervenções cirúrgicas ou doenças podem prejudicar a sensibilidade dos pacientes que visitam seu perfil.</p>

      

         <h5 class="pt-4">Como posso recuperar minha senha?</h5>

               <p> 1. Na página inicial do Liame, no canto superior direito, clique em Entrar.<br>
                2. Escolha a opção Esqueci minha senha e informe o e-mail em que deseja receber sua nova senha.<br>
                3. Você receberá uma nova senha no endereço de e-mail informado.<br>
                4. No seu e-mail, refaça uma nova senha e, com o e-mail e senha, faça login novamente em seu perfil Liame. </p>

                <h5 class="pt-4">Para mais informações você pode nos escontrar:</h5>
                <p>- Telefone: 0800 999 9999<br>
                    - Email: liametcc2021@gmail.com<br></p>
  </main>
  <div class="publicidade col-md-20">
    <center>
    <img id="publicidade" class="img-fluid" src="../assets/img/vivo.jpg">
  </center>
</div>

  <footer>
    <div id="rodape" class="container">
      <div class="conteudo py-5">
        <div class="row">
          <div class="logo col-md-2">
            <img id="logo" class="img-fluid" src="../assets/img/logo_liame.png" alt="">
          </div>
          <div class="py-lg-0 py-mb-5 col-md-8 d-flex justify-content-center align-self-center">
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Mães</h5>
              <ul class="list-unstyled">
                <li class=""><a href="../php/procura_profissional.php">Consultas</a></li>
                <li class=""><a href="../php/diario_bordo.php">Diário de bordo</a></li>
                <li class=""><a href="../php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
                
              </ul>
            </div>
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Especialistas</h5>
              <ul class="list-unstyled">
                <li class=""><a href="central_ajuda.php">Central de ajuda</a></li>
                <li class=""><a href="termos_uso_profissional.php">Termos de uso de profissional</a></li>
                <li class=""></li><a href="../index.php">Página Inicial</a>
              </ul>
            </div>
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Serviços</h5>
              <ul class="list-unstyled">
                <li class="list-item"><a href="quem_somos.php">Quem somos</a></li>
                <li class=""><a href="Contatos.php">Contato</a></li>
                <li class=""><a href="termos_condicoes_uso.php">Termos e condições de uso</a></li>
              </ul>
            </div>
          </div>
          <div class="social col-md-2">
            <ul>
              <li>
                <a href="https://www.instagram.com/projeto_liame/">
                <img src="../assets/img/instagram.svg" alt="Icone Instagram">
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
                <img src="../assets/img/facebook.svg" alt="Icone Facebook">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
