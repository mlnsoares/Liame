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

  <title>Termos e condições de uso | Liame</title>

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
  <main>
    <?php
  include_once 'menu3.php';
  Menu($id_mae, $id_profissional, $id_adm);
  
  ?>
    
    <!--//navbar-->

    <main class="">
      <div class="container content shadow-lg mb-5">
        <h4 class="mb-4">Termos de Uso e Condições de Uso</h4>


        <h5>1. Objeto</h5>
        <p>
          A plataforma visa licenciar o uso de seu software, website e demais ativos
          de propriedade intelectual, fornecendo ferramentas para auxiliar e dinamizar o dia a dia
          dos seus usuários.
        </p>
        <p>
          A plataforma caracteriza-se pela prestação do seguinte serviço: Facilitar o acesso a informações sobre a gestação junto de especialistas, além do mais ajudar a guardar informações até o primeiro ano de vida da criança, e disponibilizar
          meios
          para fazer um agendamento médico de maneira prática e rápida; Divulgar serviços de profissionais da área da saúde com possibilidade de agendamentos em seus consultórios, além de disponibilizar seus contatos para informatizar o público do
          site, divulgando suas redes sociais, e-mails e contato telefônico profissional.
        </p>
        <p>O uso do site Liame pelos usuários mães que procuram informações acessíveis e confiáveis de profissionais é gratuito.</p>



        <h5 class="pt-4">2. Comunicação</h5>
        <p>Para o contato direto com a equipe administrativa do site, fornecemos os seguintes meios:</p>
        <p>E-mail: liametcc2021@gmail.com</p>
        <p>Telefone: 0800 999 9999.</p>


        <h5 class="pt-4">3. Aceitação</h5>
        <p>O presente Termo estabelece obrigações contratadas de livre e espontânea vontade, por tempo indeterminado, entre a plataforma e as pessoas físicas ou jurídicas, usuárias do site.</p>
        <p>Ao utilizar a plataforma o usuário aceita integralmente as presentes normas e compromete-se a observá-las, sob o risco de aplicação das penalidades cabíveis.</p>
        <p>A aceitação do presente instrumento é imprescindível para o acesso e para a utilização de quaisquer serviços fornecidos pela empresa. Caso não concorde com as disposições deste instrumento, o usuário não deve utilizá-los.</p>


        <h5 class="pt-4">4. Acesso dos usuários</h5>
        <p>Serão utilizadas todas as soluções técnicas à disposição do responsável pela plataforma para permitir o acesso ao serviço 24 (vinte e quatro) horas por dia, 7 (sete) dias por semana. No entanto, a navegação na plataforma ou em alguma de
          suas
          páginas poderá ser interrompida, limitada ou suspensa para atualizações, modificações ou qualquer ação necessária ao seu bom funcionamento.</p>


        <h5 class="pt-4">5. Cadastro</h5>
        <p>O acesso às funcionalidades da plataforma exigirá a realização de um cadastro prévio e, a depender dos serviços escolhidos, o pagamento de determinado valor.</p>
        <p>Ao se cadastrar o usuário deverá informar dados completos, recentes e válidos, sendo de sua exclusiva responsabilidade manter referidos dados atualizados, bem como o usuário se compromete com a veracidade dos dados fornecidos.</p>
        <p>O usuário se compromete a não informar seus dados cadastrais e/ou de acesso à plataforma a terceiros, responsabilizando-se integralmente pelo uso que deles seja feito.</p>
        <p>Menores de 18 anos e aqueles que não possuírem plena capacidade civil deverão obter previamente o consentimento expresso de seus responsáveis legais para utilização da plataforma e dos serviços ou produtos, sendo de responsabilidade
          exclusiva dos mesmos o eventual acesso por menores de idade e por aqueles que não possuem plena capacidade civil sem a prévia autorização.</p>
        <p>Mediante a realização do cadastro o usuário declara e garante expressamente ser plenamente capaz, podendo exercer e usufruir livremente dos serviços e produtos.</p>
        <p>O usuário deverá fornecer um endereço de e-mail válido, através do qual o site realizará todas comunicações necessárias.</p>
        <p>Após a confirmação do cadastro, o usuário possuirá um login e uma senha pessoal, a qual assegura ao usuário o acesso individual à mesma. Desta forma, compete ao usuário exclusivamente a manutenção de referida senha de maneira confidencial
          e
          segura, evitando o acesso indevido às informações pessoais.</p>
        <p>Toda e qualquer atividade realizada com o uso da senha será de responsabilidade do usuário, que deverá informar prontamente a plataforma em caso de uso indevido da respectiva senha.</p>
        <p>Não será permitido ceder, vender, alugar ou transferir, de qualquer forma, a conta, que é pessoal e intransferível.</p>
        <p>Caberá ao usuário assegurar que o seu equipamento seja compatível com as características técnicas que viabilize a utilização da plataforma e dos serviços ou produtos.</p>
        <p>O usuário poderá, a qualquer tempo, requerer o cancelamento de seu cadastro junto ao site Liame. O seu descadastramento será realizado o mais rapidamente possível, desde que não sejam verificados débitos em aberto.</p>
        <p>O usuário, ao aceitar os Termos e Condições, autoriza expressamente a plataforma a coletar, usar, armazenar, tratar, ceder ou utilizar as informações derivadas do uso dos serviços, do site e quaisquer plataformas, incluindo todas as
          informações preenchidas pelo usuário no momento em que realizar ou atualizar seu cadastro, além de outras expressamente descritas na Política de Privacidade que deverá ser autorizada pelo usuário.</p>


        <h5 class="pt-4">6. Serviços</h5>
        <p>A plataforma poderá disponibilizar para o usuário um conjunto específico de funcionalidades e ferramentas para otimizar o uso dos serviços e produtos.A plataforma poderá disponibilizar para o usuário um conjunto específico de
          funcionalidades
          e ferramentas para otimizar o uso dos serviços e produtos.</p>
        <p>Na plataforma os serviços ou produtos oferecidos estão descritos e apresentados com o maior grau de exatidão, contendo informações sobre suas características, qualidades, quantidades, composição, preço, garantia, prazos de validade e
          origem,
          entre outros dados.</p>
        <p>Antes de finalizar a compra sobre determinado produto ou serviço, o usuário deverá se informar sobre as suas especificações.</p>

        <div class="pl-4">
          <h5 class="pt-4">6.1 Serviços</h5>
          <p>O usuário poderá encontrar especialistas através da página de especialistas e, com as informações de contato disponibilizadas pelo próprio profissional, entrar em contato com o mesmo.</p>
          <p>O usuário mãe terá as seguintes ferramentas:</p>
          <div class="list">
            <ul>
              <li>Possibilidade de avaliar o serviço oferecido pelos profissionais;</li>
              <li>Marcar consultas;</li>
              <li>Acompanhar a gestação e os primeiros meses de vida do bebê por um diário de bordo;</li>
              <li> Carteira de vacinação virtual.</li>
            </ul>
          </div>
          <p>Este site não tem o objetivo de diagnosticar, e sim de oferecer de maneira acessível informações sobre a maternidade, tampouco a Liame possui relação com qualquer dos serviços que os profissionais da saúde fornecem. Portanto, não é
            garantido que o profissional seja o adequado na realização do diagnóstico. </p>

          <h5 class="pt-4">6.2. Termos e Condições de Uso dos Serviços – Profissionais</h5>
          <p>É oferecido ao usuário profissional:</p>
          <div class="list">
            <ul>
              <li>Publicar informações a respeito de seu serviço, como fotos e redes sociais;</li>
              <li>Promover seu trabalho;</li>
              <li>Agendar consultas com usuários do site. </li>
            </ul>
          </div>
          <p>É de responsabilidade do usuário a veracidade das informações anunciadas em seu perfil. </p>
        </div>


        <h5 class="pt-4">7. Preços</h5>
        <p>A plataforma se reserva no direito de reajustar unilateralmente, a qualquer tempo, os valores dos serviços ou produtos sem consulta ou anuência prévia do usuário.</p>
        <p>Os valores aplicados são aqueles que estão em vigor no momento do pedido.</p>
        <p>Os preços são indicados em reais e na contratação de determinado serviço ou produto, a plataforma poderá solicitar as informações financeiras do usuário, como CPF, endereço de cobrança e dados de cartões. Ao inserir referidos dados o
          usuário
          concorda que sejam cobrados, de acordo com a forma de pagamento que venha a ser escolhida, os preços então vigentes e informados quando da contratação. Referidos dados financeiros poderão ser armazenados para facilitar acessos e
          contratações
          futuras.</p>
        <p>A contratação dos serviços será renovada automaticamente pela plataforma, independentemente de comunicação ao usuário, mediante cobrança periódica da mesma forma de pagamento indicada pelo usuário quando da contratação do serviço.</p>


        <h5 class="pt-4">8. Cancelamento</h5>
        <p>O usuário poderá cancelar a contratação dos serviços de acordo com os termos que forem definidos no momento de sua contratação. Ainda, o usuário também poderá cancelar os serviços em até 7 (sete) dias após a contratação, mediante contato
          com
          a equipe administrativa do site, de acordo com o Código de Defesa do Consumidor (Lei no. 8.078/90).</p>
        <p>O serviço poderá ser cancelado por:</p>
        <div class="list">
          <ol>
            <li>parte do usuário: nessas condições os serviços somente cessarão quando concluído o ciclo vigente ao tempo do cancelamento;</li>
            <li>violação dos Termos de Uso: os serviços serão cessados imediatamente.</li>
          </ol>
        </div>


        <h5 class="pt-4">9. Suporte</h5>
        <p>Em caso de qualquer dúvida, sugestão ou problema com a utilização da plataforma, o usuário poderá entrar em contato com o suporte, através do email liametcc2021@gmail.com.</p>
        <div class="pl-4">
          <h5 class="pt-4">9.1. Denúncias</h5>
          <p>Denúncias de qualquer tipo devem ser comunicadas e deverão ser examinadas dentro de 7 dias úteis. Queixas menores como comentários ou erros devem ser comunicados por email: liametcc2021@gmail.com.</p>
        </div>
        <h5 class="pt-4">10. Responsabilidades</h5>
        <p>É de responsabilidade do usuário:</p>
        <div class="list">
          <ol>
            <li>defeitos ou vícios técnicos originados no próprio sistema do usuário;</li>
            <li>a correta utilização da plataforma, dos serviços ou produtos oferecidos, prezando pela boa convivência, pelo respeito e cordialidade entre os usuários;</li>
            <li>pelo cumprimento e respeito ao conjunto de regras disposto nesse Termo de Condições Geral de Uso, na respectiva Política de Privacidade e na legislação nacional e internacional;</li>
            <li>pela proteção aos dados de acesso à sua conta (login e senha).</li>
          </ol>
        </div>
        <p>É de responsabilidade da plataforma Liame:</p>
        <div class="list">
          <ol>
            <li>indicar as características do serviço ou produto;</li>
            <li>os defeitos e vícios encontrados no serviço ou produto oferecido desde que lhe tenha dado causa;</li>
            <li>as informações que foram por ela divulgadas, sendo que os comentários ou informações divulgadas por usuários são de inteira responsabilidade dos próprios usuários;</li>
            <li>os conteúdos ou atividades ilícitas praticadas através da sua plataforma.</li>
          </ol>
        </div>
        <p>A Liame não é responsável pelos danos infringidos por:</p>
        <div class="list">
          <ul>
            <li>Atualidade dos conteúdos, impossibilidade de acesso, presença de vírus ou elementos que causam alterações no dispositivo ou dados do usuário.</li>
            <li>Quaisquer danos sofridos pelo usuário ou terceiros que, de qualquer modo, tenha origem ou dependência relacionada às ferramentas.</li>
          </ul>
        </div>
        <p>A Liame não comanda o serviço de saúde oferecido pelos Profissionais, tampouco, intervém no procedimento, cuja negociação se inicie no site.</p>
        <p>A plataforma não se responsabiliza por links externos contidos em seu sistema que possam redirecionar o usuário à ambiente externo a sua rede.</p>
        <p>Não poderão ser incluídos links externos ou páginas que sirvam para fins comerciais ou publicitários ou quaisquer informações ilícitas, violentas, polêmicas, pornográficas, xenofóbicas, discriminatórias ou ofensivas.</p>


        <h5 class="pt-4">11. Direitos autorais</h5>
        <p>O presente Termo de Uso concede aos usuários uma licença não exclusiva, não transferível e não sublicenciável, para acessar e fazer uso da plataforma e dos serviços e produtos por ela disponibilizados.</p>
        <p>A estrutura do site ou aplicativo, as marcas, logotipos, nomes comerciais, layouts, gráficos e design de interface, imagens, ilustrações, fotografias, apresentações, vídeos, conteúdos escritos e de som e áudio, programas de computador,
          banco
          de dados, arquivos de transmissão e quaisquer outras informações e direitos de propriedade intelectual da razão social Liame, observados os termos da Lei da Propriedade Industrial (Lei nº 9.279/96), Lei de Direitos Autorais (Lei nº
          9.610/98)
          e Lei do Software (Lei nº 9.609/98), estão devidamente reservados.</p>
        <p>Este Termos de Uso não cede ou transfere ao usuário qualquer direito, de modo que o acesso não gera qualquer direito de propriedade intelectual ao usuário, exceto pela licença limitada ora concedida.</p>
        <p>O uso da plataforma pelo usuário é pessoal, individual e intransferível, sendo vedado qualquer uso não autorizado, comercial ou não-comercial. Tais usos consistirão em violação dos direitos de propriedade intelectual da razão social Liame
          puníveis nos termos da legislação aplicável.</p>


        <h5 class="pt-4">12. Sanções</h5>
        <p>Sem prejuízo das demais medidas legais cabíveis, a razão social Liame poderá, a qualquer momento, advertir, suspender ou cancelar a conta do usuário:</p>
        <div class="list">
          <ol>
            <li>que violar qualquer dispositivo do presente Termo;</li>
            <li>que descumprir os seus deveres de usuário;</li>
            <li>que tiver qualquer comportamento fraudulento, doloso ou que ofenda a terceiros.</li>
          </ol>
        </div>


        <h5 class="pt-4">13. Rescisão</h5>
        <p>A não observância das obrigações pactuadas neste Termo de Uso ou da legislação aplicável poderá, sem prévio aviso, ensejar a imediata rescisão unilateral por parte da razão social Liame e o bloqueio de todos os serviços prestados ao
          usuário.</p>


        <h5 class="pt-4">14. Alterações</h5>
        <p>Os itens descritos no presente instrumento poderão sofrer alterações, unilateralmente e a qualquer tempo, por parte da plataforma Liame, para adequar ou modificar os serviços, bem como para atender novas exigências legais. As alterações
          serão veiculadas pelo site Liame e o usuário poderá optar por aceitar o novo conteúdo ou por cancelar o uso dos serviços, caso seja assinante de algum serviço.</p>


        <h5 class="pt-4">15. Política de privacidade</h5>
        <p>Além do presente Termo, o usuário deverá consentir com as disposições contidas na respectiva Política de Privacidade a ser apresentada a todos os interessados dentro da interface da plataforma.</p>
      </div>
    </main>
    
    <center>
      <img id="publicidade" class="img-fluid" src="../assets/img/Propaganda_whats.png">
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
