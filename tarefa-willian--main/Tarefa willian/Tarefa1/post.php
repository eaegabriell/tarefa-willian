<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table align="center">
            <tr>
                <td>Número 1</td>
                <td><input type="text" name="n1"></td>
            </tr>
            <tr>
                <td>Número 2</td>
                <td><input type="number" name="n2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
        </table>

    </form>
</body>
</html>

<?php 

if (isset($_POST["enviar"])) 
{
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $verificaMaior = false; 

    if ($n1 > $n2)
    {
       $maior = $n1;
       $verificaMaior = true;
    }
    else if ($n2 > $n1)
    {
       $maior = $n2;
       $verificaMaior = true;
    }

    if ($verificaMaior)
    {
        echo "Maior número corresponde a ".$maior;
    }
    else 
    {
        echo "Os valore são iguais!";
    }
    
}
