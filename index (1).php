<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Edição.css">
<head>
</head>
<body id = site>

<h1> Crie Sua Conta </h1>
<form action="querecebe.php" method="post" id="form">
Nome: <input type="text" name="nome" id = "nome" class="form"><br>
E-mail: <input type="text" name="email" class="form" id="email"><br>
<input type="submit" class="form" id="botao">
</form>

<style>

body {
    background-color: #78aaaf;
    font-weight: bold;
    font: 20px Arial, sans-serif;
}


.form {
    background-color: #4ab5a5;
    border-color: #43dcc9;
    border-style: inset;
    position: relative;
    
}

#nome {

}

#botao {
    position: relative;
    width: 100px;
    height: 35px;
    bottom: -20px;
    font-size: 20px;
}

</style>

</body>
</html>
