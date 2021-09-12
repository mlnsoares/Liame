<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Liame - Unindo do início ao fim.</title>

	<!--implementação bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--css-->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--favicon-->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">

	<!--unicons (icones que serão usados no site)-->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body>
  <div id="login">

       <form method="post" class="card" action="entrar.php" id="formlogin" name="formlogin">

           <div class="card-header">

               <h2>Login</h2>

           </div>

           <div class="card-content">

               <div class="card-content-area">

                   <label for="usuario">Usuário</label>

                   <input type="text" id="usuario" autocomplete="off">

               </div>

               <div class="card-content-area">

                   <label for="password">Senha</label>

                   <input type="password" id="password" autocomplete="off">

               </div>

           </div>

           <div class="card-footer">

               <input type="submit" value="login" class="submit">

               <a href="#" class="recuperar_senha">Esqueceu a senha?</a>

           </div>

       </form>

   </div>
</body>

</html>