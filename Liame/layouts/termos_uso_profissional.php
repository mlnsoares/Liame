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

  <title>Termos de uso do profissional | Liame</title>

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
        <h4 class="mb-4">Termos de Uso e Condições do Profissional</h4>
        <p>
          O presente termo é firmado entre LIAME, detentora dos serviços de disponibilização de uma
          plataforma Web que utiliza a tecnologia para facilitar a contratação de PROFISSIONAIS da área
          da saúde para atendimento médico simples a USUÁRIOS que necessitam destes serviços.
        </p>
        <p>
          O PROFISSIONAL que deseja ofertar seus serviços ao USUÁRIO por meio da LIAME deverá aceitar
          os termos e condições gerais e todas as políticas e os princípios que o regem.
        </p>
        <p><b>O PROFISSIONAL ESTÁ CIENTE E DESDE JÁ CONCORDA, QUE QUALQUER SERVIÇO PRESTADO ATRAVÉS DA
            PLATAFORMA DISPONIBILIZADA PELA LIAME É FEITO DIRETAMENTE POR ELE, RESPONDENDO EXCLUSIVA E
            INTEIRAMENTE PELA ENTREGA, QUALIDADE, QUANTIDADE, ESTADO, EXISTÊNCIA, LEGITIMIDADE E INTEGRIDADE
            DOS SERVIÇOS OFERTADOS.</b></p>

        <p><b>A ACEITAÇÃO DESTES TERMOS E CONDIÇÕES GERAIS É ABSOLUTAMENTE INDISPENSÁVEL À UTILIZAÇÃO
            DOS SERVIÇOS DISPONIBILIZADOS.</b></p>

        <p><b>OBS: O PROFISSIONAL deverá ler e certificar-se de haver entendido e, ainda, aceitar todas
            as condições estabelecidas no termo, antes de iniciar o uso do serviço. </b></p>



        <h5 class="pt-4">1. Definições</h5>
        <p>1.1. Para os efeitos do presente termo todas as palavras e expressões constantes da lista abaixo,
          deverão ser entendidas conforme o respectivo significado:</p>
        <p>1.2. USUÁRIO: é quem se utilizará dos serviços disponibilizados pelos PROFISSIONAIS;</p>
        <p>1.3. PROFISSIONAIS: são os profissionais da área da saúde que desejam ofertar seus serviços aos
          USUÁRIOS, de acordo com a disponibilidade de horário em sua agenda, bem como os valores definidos
          para prestação dos serviços, através da plataforma da LIAME;</p>
        <p> 1.4. PLATAFORMA: é o sistema que possibilita que os USUÁRIOS busquem e agendem através de
          seus próprios critérios os serviços oferecidos pelos PROFISSIONAIS, sendo representada pelo
          endereço eletrônico www.liame.com.br.</p>


        <h5 class="pt-4">2. Objeto</h5>
        <p>2.2. A LIAME não é fornecedora de quaisquer serviços anunciados e oferecidos em sua plataforma.
          A LIAME apenas disponibiliza um espaço virtual para que o PROFISSIONAL possa informar a disponibilidade
          de sua agenda, fornecendo mecanismos para que o USUÁRIO consiga encontrá-lo</p>
        <p>2.3. A LIAME, por meio de sua plataforma, permite a interligação de USUÁRIOS com PROFISSIONAIS,
          para que estes possam firmar contrato diretamente entre si e exclusivamente através da plataforma. </p>
        <p> 2.4. A LIAME se compromete a oferecer os seguintes serviços aos PROFISSIONAIS: </p>
        <p>2.4.1. Espaço para que o PROFISSIONAL possa hospedar na plataforma a disponibilidade de sua
          agenda, para a realização de atendimentos aos possíveis USUÁRIOS, informando o dia, hora;</p>
        <p>2.4.2. Informações analisadas previamente sobre o perfil dos usuários cadastrados, a fim de
          tentar oferecer segurança aos seus profissionais;</p>
        <p>2.4.3. Disponibilização de um sistema de avaliação do USUÁRIO pelo PROFISSIONAL, como uma forma
          e proporcionar segurança no tocante à receptividade durante os serviços prestados pelos PROFISSIONAIS.</p>

        <h5 class="pt-4">3. Funcionamento </h5>
        <div>
          <p>3.1. O PROFISSIONAL, através da plataforma da LIAME, seja pelo site www.liame.com.br, onde
            ele pode fazer seu cadastro informando seus dados pessoais, formação, capacitações e
            habilidades. Uma vez encaminhadas as informações. Durante o cadastro, o PROFISSIONAL terá
            conhecimento dos tipos de serviços e procedimentos que a LIAME oferece aos seus USUÁRIOS. O
            ROFISSIONAL indicará quais destes serviços e procedimentos ele quer e está qualificado a
            realizar. O PROFISSIONAL terá a liberdade de ficar disponível para os USUÁRIOS da LIAME
            quando quiser e assim, dar o aceite em um atendimento programado podendo ser uma sessão
            única ou mais de uma, dependendo da especialidade contratada.</p>
          <p>3.2. Uma vez que o PROFISSIONAL se encontra logado no aplicativo LIAME profissional, este estará disponível
            para receber mensagens informativas da plataforma, bem como a solicitações de atendimentos
            programados.</p>
          <p>3.3. De acordo com os critérios estabelecidos pelo USUÁRIO, será apresentada uma lista de
            PROFISSIONAIS disponíveis na região deste. Antes mesmo de escolher um PROFISSIONAL, o
            USUÁRIO poderá analisar o perfil deste PROFISSIONAL, bem como ter acesso a avaliações
            anteriores e até mesmo a um vídeo de apresentação deste PROFISSIONAL, caso ele o tenha
            inserido.</p>
          <p> 3.4. Entende-se por:<br>
            <b>Atendimento Programado:</b> O USUÁRIO que pretende contratar o PROFISSIONAL para um
            atendimento futuro, irá selecionar o profissional, em seguida o serviço que quer contratar,
            o número de sessões e enfim, o endereço para onde quer o atendimento. Após apresentada a
            lista de PROFISSIONAIS disponíveis, o USUÁRIO define qual irá contratar e quando fizer a
            solicitação, lhe aparecerá a agenda de disponibilidade deste profissional para que indique os
            dias que quer programar os serviços. O PROFISSIONAL recebe uma mensagem onde terá até 4hs
            para que dê o aceite e confirme a disponibilidade de atendimento para as datas solicitadas uma
            vez aceito, fica entre as partes firmado o compromisso do serviço.
          </p>
          <p><b>Vale ressaltar que o PROFISSIONAL tem ciência de que uma vez aceito um atendimento
              programado, este deverá estar comprometido em comparecer as consultas nos dias e horários
              cordados. Ficando o profissional sujeito a penalidades na plataforma caso não venha a cumprir
              com seu compromisso.</b></p>
          <p> 3.5. Ficará a critério da LIAME definir de forma sistêmica através da sua plataforma, a
            lista de PROFISSIONAIS disponíveis quando feita uma busca pelo USUÁRIO. </p>
          <p> 3.6. Com relação aos valores cobrados pelo PROFISSIONAL, estes acordados entre USUÁRIO e
            PROFISSIONAL antes do aceite dos serviços ofertados. Porém, uma vez aceito, o valor será
            debitado do USUÁRIO em particular com o PROFISSIONAL conforme o acordado. A efetivação deste
            pagamento só ocorrerá após a finalização de cada atendimento.</p>
          <p> <b>3.7. Entende-se por:</b><br>
            – <b>Apto:</b> PROFISSIONAL que atende a todos os critérios de validação cadastral estabelecidos pela LIAME. <br>
            – <b>Qualificado:</b> Quando o PROFISSIONAL possui a formação mínima exigida pela LIAME, com base no conselho regional de classe de cada profissão ou mesmo um decreto que rege sua profissão. <br>
            – <b>Logado:</b> PROFISSIONAL que acessou com seu login e senha o aplicativo LIAME Profissional e está disponível para receber mensagens informativas da plataforma, bem como a solicitações de atendimentos programados. <br>
            – <b>Logado e ativo:</b> PROFISSIONAL que acessou com seu login e senha o aplicativo LIAME Profissional e está disponível para receber mensagens informativas da plataforma, bem como a solicitações de atendimentos programados por USUÁRIOS
            que estejam fazendo uma busca por proximidade pela região deste. <br>
          </p>
          <p> 3.8. Caberá ao PROFISSIONAL a responsabilidade de aceitar ou não analisar previamente o prontuário e
            alertar o USUÁRIO caso perceba alguma inconsistência que contraindique o procedimento que a
            ele está sendo solicitado.</p>


          <h5 class="pt-4">4. Política de reagendamento</h5>
          <p> 4.1. Para atendimentos programados poderá ocorrer o reagendamento como segue: </p>
          <p> 4.1.1. POR PARTE DO USUÁRIO: Este poderá, respeitando os prazos estabelecidos na Política de
            cancelamento, acessar a agenda do PROFISSIONAL e buscar uma nova data disponível. Ao
            selecionar esta data, o PROFISSIONAL receberá um alerta sobre a alteração, para que dê o
            aceite. O reagendamento se dará apenas com o aceite do PROFISSIONAL, pois do contrário, o
            USUÁRIO deverá cancelar o atendimento e buscar outro PROFISSIONAL que possa lhe atender.</p>
          <p> 4.1.2. POR PARTE DO PROFISSIONAL: Este poderá, respeitando os prazos estabelecidos na
            Política de cancelamento e solicitar que o USUÁRIO acesse sua agenda e selecione uma nova
            data. Vale salientar que poderá o USUÁRIO se recusar a reagendar o atendimento e assim vir a
            cancelar o chamado. </p>


          <h5 class="pt-4">5. Condições Gerais</h5>
          <p> 5.1. O “Aceite” dos Termos é condição indispensável para qualquer forma de utilização da
            plataforma LIAME Profissional para fornecimento dos seus serviços como PROFISSIONAL. O
            cadastro como PROFISSIONAL no âmbito da plataforma LIAME Profissional é proibido para
            qualquer pessoa que não reúna as exigências profissionais impostas por Lei, estendendo-se
            a proibição para pessoas juridicamente incapazes, ou, que não concordem integral e
            plenamente com os presentes Termos. </p>
          <p> 5.2. Os Termos vinculam legalmente o PROFISSIONAL com relação aos atuais ou novos serviços
            oferecidos pela LIAME. </p>
          <p>5.3. A conclusão do cadastramento como PROFISSIONAL no âmbito da plataforma LIAME profissional resulta na sua vinculação aos
            Termos e, consequentemente, na sua obrigação de observá-los. </p>
          <p>5.4. A LIAME se resguarda no direito de realizar alterações/atualizações nestes Termos a qualquer momento, sem aviso prévio, com o
            que o PROFISSIONAL se declara concorde. </p>
          <p>5.5. A continuidade na utilização da plataforma LIAME profissional após alteração/atualização dos Termos importará em concordância com
            tais alterações/atualizações e, em caso de discordância com as alterações, o PROFISSIONAL poderá desativar sua conta, definitiva, ou, temporariamente,
            cessando no período toda e qualquer utilização da plataforma LIAME profissional. Recomendamos que o PROFISSIONAL revise estes Termos com frequência, para
            manter-se constantemente informado e ciente de quaisquer alterações/atualizações. A LIAME emitirá comunicados, sempre que houver eventuais alterações nestes
            termos, dando ao PROFISSIONAL pleno conhecimento acerca das mudanças, facultando-lhe a vontade de permanecer cadastrado ou não. </p>
          <p>5.6. Fica vedado ao PROFISSIONAL emitir qualquer opinião desabonadora sobre a LIAME e sua forma
            de atuação no mercado, seja por meio particular, em sites de relacionamento, redes sociais,
            similares etc. Igualmente, o PROFISSIONAL assume que executará os serviços oferecem, em seu
            nome próprio, não possuindo junto à LIAME qualquer vínculo empregatício, sendo-lhe vedado
            identificar-se perante aos USUÁRIOS do aplicativo, como funcionário/empregado da LIAME, seja
            a que título for. </p>
          <p>5.7. Pelo seu serviço, o PROFISSIONAL poderá cobrar o valor que entende adequado, desde que
            esteja acordado com o USUÁRIO o valor, a LIAME não se responsabiliza pelo pagamento de
            consultas/serviços. </p>
          <p>5.8. As marcas, nomes, logotipos, nomes de domínio e demais sinais distintivos, bem como todo e
            qualquer conteúdo, desenho, programa de computador, arte ou layout publicado no site e no aplicativo
            são de propriedade exclusiva da LIAME, que exerce todos os direitos reservados. O uso desautorizado destes
            elementos e direitos acarretará nas competentes sanções legais, cíveis e criminais, sem prejuízo do ressarcimento
            dos danos eventualmente causados. </p>
          <p>5.9. Uma vez aproximado do USUÁRIO por meio da plataforma LIAME, o PROFISSIONAL somente poderá fornecer e continuar a fornecer
            seus serviços por meio do aplicativo, ficando-lhe proibido contratar com o USUÁRIO de outra forma, com o que o PROFISSIONAL concorda,
            assumindo aqui seu dever de agir com probidade e boa-fé. O descumprimento desta regra pelo PROFISSIONAL poderá dar ensejo a penalidades,
            inclusive, resultar na suspensão temporária, ou, no bloqueio definitivo da conta do PROFISSIONAL na plataforma LIAME se esta entender que
            assim é necessário.</p>
          <p>5.10. O PROFISSIONAL é o único responsável pela veracidade/idoneidade das informações prestadas a seu respeito, bem como às informações constantes
            nos documentos que venha a encaminhar para a LIAME. </p>
          <p>5.11. Com o aceite destes Termos, o PROFISSIONAL concorda em permitir que a LIAME tenha acesso e consulte fotografias, dados pessoais e profissionais, bem
            como dados de geolocalização, uma vez que o mesmo esteja “logado” na plataforma LIAME profissional. </p>
          <p>5.12. O PROFISSIONAL aceita, reconhece e concorda que seu relacionamento contratual junto à LIAME será de “locação de plataforma de tecnologia”, por meio de concessão
            de uso desta plataforma, após à regularidade de seu cadastramento. Portanto, o PROFISSIONAL aceita, reconhece e concorda com o fato de que, entre ele e a LIAME não haverá
            qualquer espécie de vínculo de emprego, ou, relação de trabalho, seja nos termos da Consolidação das Leis do Trabalho, ou, outras legislações trabalhistas. Inclusive, a LIAME
            não irá controlar o tempo em que o PROFISSIONAL ficará disponível no aplicativo e ainda sugere que seja utilizado quando o PROFISSIONAL, em seu horário livre, optar por uma forma
            de auferir rendimento extra. </p>
          <p>5.13. O PROFISSIONAL se submeterá a todas as diretrizes, princípios e normas legais e
            profissionais impostas para o exercício da sua profissão, devendo, inclusive, se submeter
            aos preceitos emanados pelos Conselhos Representativos de Classes, sejam estes Estaduais ou
            Federais.</p>
          <p>5.14. Por força da plena autonomia de que gozará o PROFISSIONAL, sua contratação de serviços perante o USUÁRIO será com ele tratada e negociada, por ele. Desta forma, o descumprimento do contrato pelo
            PROFISSIONAL perante o USUÁRIO será de sua absoluta responsabilidade, podendo ensejar as sanções e penalidades previstas na Lei, tanto no âmbito cível quanto no âmbito criminal. Inclusive, podendo resultar
            na suspensão temporária, ou, no bloqueio definitivo da conta do PROFISSIONAL na plataforma LIAME profissional se esta entender que assim é necessário. </p>
          <p> 5.15. O PROFISSIONAL aceita, concorda e se submete às eventuais “avaliações” feitas pelos USUÁRIOS da plataforma a seu respeito, estando de comum acordo com a implantação de medidor de “nível de satisfação”.
            Também concorda que tais informações estejam disponíveis para os USUÁRIOS, caso queiram consultá-las. </p>
          <p> 5.16. O PROFISSIONAL declara que preenche os seguintes requisitos comportamentais: (i) que todas as informações e documentos emitidos à LIAME a seu respeito são verdadeiros e idôneos; (ii) que agirá com postura,
            probidade, lisura e boa-fé profissional; (iii) que atua com paciência; (iv) que é comprometido; (v) que exerce sua profissão com disposição; (vi) que procurará se utilizar de boa comunicação; (vii) que procurará agir
            com flexibilidade de horários; (viii) que é solidário; (ix) que sabe trabalhar em equipe; (x) que sabe respeitar as limitações dos demais seres humanos; (xi) que é pessoa dinâmica. </p>
          <p>5.17. O PROFISSIONAL concorda e autoriza que seja divulgada sua imagem através de fotos, vídeos e/ou voz, para fins de apresentação do seu perfil profissional, sendo que tais divulgações, aqui autorizadas, somente ocorrerão
            pelo período em que o PROFISSIONAL estiver ativo no portal LIAME. </p>
          <p>7.18. Por meio do referido acesso e uso, estes Termos imediatamente encerram, substituem e superam todos os acordos, Termos e acertos anteriores entre você PROFISSIONAL e a LIAME, ou qualquer afiliada desta. A LIAME informa que
            poderá, imediatamente, encerrar estes Termos ou quaisquer Serviços em relação a você ou, de modo geral, deixar de oferecer ou negar acesso aos Serviços ou a qualquer parte deles, a qualquer momento e por qualquer motivo, sem a
            necessidade de prévio aviso, interpelação e/ou, notificação. </p>
          <p>5.19. Vale lembrar que termos adicionais são acessórios e complementares, portanto, considerados parte integrante destes Termos para os efeitos dos respectivos serviços. Termos adicionais prevalecerão sobre estes Termos em caso de
            conflito com relação aos referidos serviços. </p>
          <p>5.20. A LIAME informa que poderá alterar os Termos relativos aos serviços a qualquer momento, sem prévio aviso. Eventuais aditamentos entrarão em vigor quando a LIAME fizer a postagem da versão atualizada dos Termos neste local, podendo
            emitir COMUNICADO(S), ou, novas condições atualizadas ou Termos adicionais sobre o respectivo serviço em algum dos seguintes canais de comunicação: (i) e-mail; (ii) telefone; (iii) SMS, (iv) WhatsAPP; (v) qualquer outro meio de mensageria
            existente ou, que venha a existir. O fato de você PROFISSIONAL continuar a fornecer seus serviços após esta postagem, representa seu consentimento em vincular-se aos Termos, eventualmente, alterados. </p>
          <p>5.21. O PROFISSIONAL concorda que a LIAME e seus representantes poderão entrar em contato por meio dos canais de mensageria já mencionados anteriormente (inclusive por meios automatizados) no endereço de e-mail, ou, número, fornecidos
            pelo PROFISSIONAL,
            incluindo-se finalidades de marketing </p>


          <h5 class="pt-4">6. Política de limitação de responsabilidade da KDCARE</h5>
          <p> 6.1. A LIAME não garantirá ao PROFISSIONAL com cadastro devidamente validado e <b>logado e ativo</b> na plataforma, a certeza de acionamentos por parte dos USUÁRIOS, pois esta escolha não tem qualquer interferência por parte da LIAME
            que apenas disponibiliza o
            cadastro dos profissionais. </p>
          <p> 6.2. O PROFISSIONAL declara que atuará sem qualquer vinculação empregatícia formal junto à LIAME, haja vista que o PROFISSIONAL fará uso da plataforma de tecnologia da LIAME sob a forma de concessão de uso por locação, para oferecer,
            executar e fornecer seus serviços
            aos USUÁRIOS, de forma autônoma e não subordinada à LIAME. </p>
          <p> 6.3. O PROFISSIONAL declara e reconhece que sua atuação profissional aos USUÁRIOS não está, nem estará subordinada a qualquer ordem direta da LIAME, sendo que poderá oferecer, fornecer e executar seus serviços de forma totalmente
            autônoma e livre, ou seja, no(s) dia(s), na(s)
            hora(s), e, para quem bem entender, sendo de livre escolha, inclusive, o local de trabalho e a área geográfica desejada para atuação. </p>
          <p> 6.4. O PROFISSIONAL declara que executará seus serviços ao USUÁRIO pelo número de horas, dias, ou, sessões contratadas pelo USUÁRIO, assumindo o fato de que tais estipulações não serão determinadas pela LIAME, ou a mando desta. Todavia,
            embora lhe seja dada plena autonomia, o PROFISSIONAL
            assumirá, junto ao USUÁRIO, o compromisso de honrar com todas as estipulações e obrigações, então assumidas e contratadas. </p>
          <p> 6.5. O PROFISSIONAL declara que é livre para deliberar e determinar se sua prestação de serviços ao USUÁRIO se dará no período diurno, ou, noturno, declarando e concordando que não haverá qualquer espécie de vínculo trabalhista, nem de
            controle de horário por parte da LIAME e seus administradores. </p>
          <p> 6.6. O PROFISSIONAL declara que sobre si não haverá qualquer espécie de subordinação empregatícia, hierárquica nem econômica por parte da LIAME. </p>
          <p> 6.7. O PROFISSIONAL declara-se completamente autônomo para escolher a melhor forma de prestar e executar seus serviços, gerindo-os de acordo com sua liberalidade e liberdade profissionais, limitado, apenas, às imposições legais que
            regem sua profissão, sem prejuízo das imposições contratuais assumidas por si,
            perante o USUÁRIO do aplicativo.</p>
          <p> 6.8. O PROFISSIONAL aceita a exclusão de qualquer responsabilidade solidária da LIAME em eventuais danos materiais e morais resultantes da relação havida entre o PROFISSIONAL e o USUÁRIO, independentemente de quem seja a parte lesada.
            Da mesma forma, não haverá responsabilidade solidária da LIAME, se, da relação havida
            entre o PROFISSIONAL e o USUÁRIO resultarem obrigações, ou, débitos de natureza trabalhista, ou, similar. </p>
          <p> 6.9. As despesas e/ou gastos com transporte/locomoção até o local de execução dos serviços serão, sempre, suportadas pelo PROFISSIONAL, com o que concorda e se declara ciente. </p>
          <p> 6.10. O PROFISSIONAL não poderá sublocar, ceder, tampouco transferir estes Termos a outrem, total ou parcialmente, sem prévia aprovação por escrito da LIAME. Você PROFISSIONAL concede sua aprovação para que a LIAME ceda e transfira
            estes Termos, total ou parcialmente, inclusive: (i) para uma subsidiária ou afiliada LIAME; (ii)
            um adquirente das participações acionárias, negócios ou bens da LIAME; ou (iii) para um sucessor em razão de qualquer operação societária. Não existe joint-venture, sociedade, emprego ou relação de representação comercial entre o
            PROFISSIONAL e a LIAME, ou com quaisquer outros profissionais, como resultado do contrato havido entre
            o PROFISSIONAL e a LIAME, pelo fornecimento de seus serviços pela plataforma. </p>
          <p> 6.11. Caso qualquer disposição destes Termos seja tida como ilegal, inválida ou inexequível total ou parcialmente, por qualquer legislação, essa disposição ou parte dela será, naquela medida, considerada como não existente para os
            efeitos destes Termos, mas a legalidade, validade e exequibilidade das demais disposições contidas nestes
            Termos não serão afetadas. Nesse caso, as partes substituirão a disposição ilegal, inválida ou inexequível, ou parte dela, por outra que seja legal, válida e exequível e que, na máxima medida possível, tenha efeito similar à disposição
            tida como ilegal, inválida ou inexequível para fins de conteúdo e finalidade dos presentes Termos. Estes
            Termos constituem a totalidade do acordo e entendimento das partes sobre este assunto e substituem e prevalecem sobre todos os entendimentos e compromissos anteriores sobre este assunto. Nestes Termos, as palavras “inclusive” e “inclui”
            significam “incluindo, sem limitação”. </p>
          <p> 6.12. O uso da plataforma LIAME de forma indevida, e, em desacordo com estes Termos, implicará na exclusão do cadastro do PROFISSIONAL, bem como na proibição da concessão de uso da plataforma dos serviços. Ainda assim, os dados do
            PROFISSIONAL serão preservados para uso das autoridades competentes, caso a LIAME seja notificada, ou, acionada pela
            violação de direitos de terceiros decorrente do mau uso do sistema.</p>
          <p> 6.13. O PROFISSIONAL concorda em indenizar a LIAME, suas filiais, empresas controladas ou controladoras, diretores, sócios, administradores, colaboradores, representantes e empregados por qualquer perda, responsabilização, reclamação ou
            demanda, por quaisquer prejuízos devido a, ou resultantes da má utilização do aplicativo e/ou faltas contratuais. </p>

          <h5 class="pt-4">7. Do Aceite</h5>
          <p> 7. O PROFISSIONAL declara e confirma que leu estes termos, dele compreendendo todas as ideias e propostas, as quais ficam aqui ratificadas por meio do
            aceite.</p>
          
        </div>
    </main>

    <div class="avast col-md-20">
      <center>
      <img id="avast" class="img-fluid" src="../assets/img/AVAST.jpeg">
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
