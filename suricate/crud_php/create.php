<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
 
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