<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pretraga</title>
    </head>
    <body>
        <?php if(isset($_GET['forma_poslata'])): ?>
        <h2> Rezultati za pojam <?php echo $_GET['trazeni_pojam']; ?></h2>
        <?php if($_GET['trazeni_pojam']== "GET"): ?>
        <p>
            GET metod ispisuje vrednosti u okviru URL-a
        </p>
        <?php endif; ?>
        <p>
            Idite <a href="pretraga.php"> nazad </a> na formu za pretragu
        </p>
        <?php else: ?>
        <form action="pretraga.php" method="GET">
            Trazeni pojam 
            <input type="text" name="trazeni_pojam"><br>
            <input type="hidden" name="forma_poslata" value="1"/>
            <input type="submit" value="Posalji">
        </form>
        <?php endif;?>
    </body>
</html>
