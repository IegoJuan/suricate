<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/m.css" rel="stylesheet" type="text/css">
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <script src="main.js"></script>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 25%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 
<fieldset>
    <legend>Cadastro</legend>
 
    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Nome</th>
                <td><input type="text" name="nome" placeholder="Nome" /></td>
            </tr>     
            <tr>
                <th>E-mail</th>
                <td><input type="email" name="email" placeholder="exemplo@email.com" /></td>
            </tr>
            <tr>
                <th>Senha</th>
                <td><input type="password" name="senha" placeholder="Senha"  minlength="8" required /></td>
            </tr>

            <tr>
                <td><button type="submit">Salvar</button></td>
                <td><a href="index.php"><button type="button">Voltar</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>