<html>
<head>
    <title>Ler o maior e menor</title>
</head>
<body>
    <form action="Lista6.php" method="POST">
        <label> Digite os numeros: </label><br />
        Numero 1:  <input type="text" name="numero1" /><br />
        Numero 2:  <input type="text" name="numero2" /><br />
        Numero 3:  <input type="text" name="numero3" /><br />
        <input type="submit" name="submit" value="Mostrar" />
    </form> 
    <?php 
        if(isset($_POST['numero1'])){
        $menor = $_POST['numero1'];
        $meio = $_POST['numero2'];
        $maior = $_POST['numero3'];

        if($meio < $menor){
            $temp=$menor;
            $menor=$meio;
            $meio=$temp;
        }
        if($maior < $menor){
            $temp=$menor;
            $menor=$maior;
            $maior=$temp;
        }
        if($maior < $meio){
            $temp=$meio;
            $meio=$maior;
            $maior=$temp;
        }
        echo "$menor < $meio < $maior";
    }
    ?>
</body>
</html>