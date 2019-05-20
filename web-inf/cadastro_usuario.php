
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuários</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet"  href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Noto+Sans+TC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Modak|Noto+Sans+TC" rel="stylesheet">
  
</head>
<body>

<div id = "corpo-imagem">
<img src="./imagens/CREA-DF.jpg"/>
</div>

<div id = "corpo-form">
<h1>CADASTRO DE USUÁRIO</h1>
<form action = "" method="POST">
    <input type = "text" name = "usuario" placeholder = "Nome Completo">
    <input type = "email" name = "email" placeholder = "Email">
    <input type = "password" name = "senha" placeholder = "Senha">
    <input type = "password" name = "confsenha" placeholder = "Confirmar Senha">
    <input type = "submit" name = "enviar" value = "Cadastrar">
    <h3>Já possui cadastro? <a href = "index.php"><strong>Faça Login</strong></a></h3>
    </form>
</div>

</body>
</html>