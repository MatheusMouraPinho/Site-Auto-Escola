<!DOCTYPE html>
<html lang="br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Auto Escola Arco Iris</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="vendor/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">

</head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="controller">
      <img class="mb-4 logo" src="img/icone.jpg">
      <h1 class="h3 mb-3 font-weight-normal">Administração</h1>
      <label for="usuario" class="sr-only">Usuario</label>
      <input name="usuario" style="margin-bottom:20px" type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus>

      <label for="senha" class="sr-only">Senha</label>
      <input name="senha" type="password" id="senha" class="form-control" placeholder="Senha" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted"><a href="inicio">Voltar para o site</a></p>
    </form>
  </body>
</html>