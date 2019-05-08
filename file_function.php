<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(file_exists('my_settings.txt'))
        {
         echo "Fajl postoji!" ;  
        }
        else 
        {
            echo "Fajl my_settings.txt nije pronadjen!";
        }
        ?>
    </body>
</html>
