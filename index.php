<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    <form action="pegaValor.php" method="POST">
        Valor 1: <input name="n1" type="text"><br><br>
        Valor 2: <input name="n2" type="text"><br>
        <br>
        <input type="submit" value="Somar" name="operacao" >
        <input type="submit" value="Subtrair" name="operacao">
        <input type="submit" value="Multiplicar" name="operacao">
        <input type="submit" value="Dividir" name="operacao">
    </form>
</body>
</html>