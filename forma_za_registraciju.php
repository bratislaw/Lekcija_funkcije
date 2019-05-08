<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forma za registraciju</title>
    </head>
    <body>
        <?php if(isset($_POST['forma_poslata'])): ?>
        <?php if (isset($_POST['agree'])): ?>
        <h2> Hvala <?php echo($_POST['ime']) ?></h2>
        <p>
            Registrovani ste kao <?php echo($_POST['ime']. ' ' . $_POST['prezime']) ?>
        </p>
        <p>
            Idite <a href="forma_za_registraciju.php">nazad </a> na formu za registraciju.
        </p>
        <?php else: ?>
        <p>Niste prihvatili uslove koriscenja!</p>
        <?php endif; ?>
        <?php else: ?>
        <h2>Forma za registraciju</h2>
        <form action="forma_za_registraciju.php" method="POST">
            Ime: <input type="text" name="ime"><br>
            Prezime: <input type="text" name="prezime"><br>
            Slazem se sa uslovima koriscenja! <input type="checkbox" name="agree"><br>
            <input type="hidden" name="forma_poslata" value="1" >
            <input type="submit" value="Posalji">
        </form>
        <?php endif; ?>
    </body>
</html>
