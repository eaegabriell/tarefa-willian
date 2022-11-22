<!DOCTYPE html>
<html lang="en">
<html>
<body>
    <form action="" method="get">
        Digite um caractere:  <input type="text" name="carac" /><br />
        <input type="submit" name="submit" value="Testar" />
    </form> 
    <?php 
        $meuCaractere = $_GET['carac'];
        if( ctype_digit($meuCaractere) )
            echo "vogal";
        else
            echo "consoante";
    ?>
</body>
</html>