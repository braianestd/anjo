
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="imagens/gamers.png">

    <title>Usuario</title>

    
    <link href="css/bootstrap.css" rel="stylesheet">


    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

   
  </head>

  <body>

    <div class="container"  >

      <form  class="form-signin" method="POST" action="loginusok.php">
        <h1 class="form-signin-heading" >Login</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="Email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="Senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Login</button>
      </form>

    </div>


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php

if(isset($_GET['msg'])){echo"<script>alert('Login e/ou Senha não Conferem!')
	;</script>";
}
?>