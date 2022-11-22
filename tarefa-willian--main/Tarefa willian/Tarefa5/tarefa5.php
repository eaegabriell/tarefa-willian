<html>
<head>
    </head>
        <body>
        <form action="Tarefa5.php" method="POST">
        <fieldset>
            </br>
            <p>
                <label for="nota1">Nota 1: </label>
                <input type="number" name="nota1" id="nota1">
            </p>
            <p>
                <label for="nota2">Nota 2: </label>
                <input type="number" name="nota2" id="nota2">
            </p>
            <p>
                <label for="nota3">Nota 3: </label>
                <input type="number" name="nota3" id="nota3">
            </p>
            <p>
                <label for="nota4">Nota 4: </label>
                <input type="number" name="nota4" id="nota4">
            </p>
            <p>
            <input type="submit" name="submit" value="Testar" />
        </form> 
        <?php 
            if(isset($_POST['nota1'])){
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];
            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

            echo "A média deu: ".$media;
            
            if ($media >= 10)
            {
                echo "Aprovado";
            }
           elseif ($media > 5  && $media < 6)
            {
               echo "Recuperação";
            }
           elseif ($media <= 5)
            {       
               echo "Reprovado";
            }
        }
        ?>
    </body>
</html>
