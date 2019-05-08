<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php setcookie("user_name", "Guru99", time() - 360,'/');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        if(isset($_SESSION['page_count']))
        {
           $_SESSION['page_count'] +=1;
        }
        else
        {
            $_SESSION['page count'] =1;
        }
        echo "Vi ste posetilac broj " . $_SESSION['page_count'];
        ?>
    </body>
</html>
