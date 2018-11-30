<HTML>
<meta charset='utf-8'/>
<head>
	<TITLE>Sistema de Notícias :: Login</TITLE>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

  
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
<body></body>
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
      <li><a href="create.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

    </ul>
  </div>
</nav>

<form action="login_vai.php" method="post">
Sistema Autenticação de Notícias.<BR>
E-mail: <input type="text" name="email"><br>
Senha: <input type="password" name="senha"><br>
<input type="submit" value="OK!">
</form>
</body>
</html>