<?php
  session_start();
  include ('conexao.php');
  if(isset($_SESSION['id_mae'])){
    $id_mae = $_SESSION['id_mae'];
  } 
  else{
    $id_mae = 0;
    
  } 
  if(isset($_SESSION['id_profissional'])){
    $id_profissional = $_SESSION['id_profissional'];
  
  }
  else{
     $id_profissional = 0;
  }
  if(isset($_SESSION['id_adm'])){
    $id_adm = $_SESSION['id_adm'];
  
  }else{
    $id_adm=0;
  }

  if(($id_adm != 0)){
    
    $status = 0;
    $documentacao = "";
    //o profissional só é avaliado se ele tiver o status igual a 0 (se for igual a 0 é porque ele não passou por nenhuma verificação ainda) e se ele já tiver adicionado algum documento
    $sql_busca = 'SELECT id_profissional, nome_profissional, email_profissional, status_validacao_profissional, 
                  documentacao_validacao_profissional from profissional 
                  WHERE status_validacao_profissional = "'.$status.'" 
                  AND documentacao_validacao_profissional != "'.$documentacao.'"';
    
                $consulta = mysqli_query($link, $sql_busca);

		// transformando os dados do banco em variavel
                if($consulta->num_rows > 0){
                  while ($vetor = mysqli_fetch_array($consulta)){
                    $id_profissional = $vetor['id_profissional'];
                    $nome_profissional= $vetor['nome_profissional'];
                    $email_profissional=$vetor['email_profissional'];
                    $documentacao_profissional=$vetor['documentacao_validacao_profissional'];
                    $status_profissional=$vetor['status_validacao_profissional'];
?>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <?php
                        //exibindo as variaveis
                                echo utf8_encode ('<b>Nome: </b>' .$nome_profissional.'<br>');
                                echo utf8_encode ('<b>Email: </b>' .$email_profissional.'<br>');
                                echo utf8_encode ('<b>Documento: </b>' .$documentacao_profissional.'<br>');
                        // fazendo o link para ele ser aprovado ou reprovado
                                echo "<a href=aprovar_profissional.php?id=".$vetor['id_profissional'].">Aprovar</a><br>";
                                echo "<a href=reprovar_profissional.php?id=".$vetor['id_profissional'].">Reprovar</a>";
              
                                ?><hr><?php	
                              ?>
                            </div>                    
                          </div>
                        </div>
                      <br>
<?php
                  }
              }else{
                echo "Nenhum profissional para ser avaliado.";
              
  }

            ?>
            </div>
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
  }else{
    header('Location: ../index.php');
      
    }

  ?>
  
