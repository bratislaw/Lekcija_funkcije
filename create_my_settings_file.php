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
echo "<pre>"; // Enables display of line feeds
echo file_get_contents("my_settings.txt");
echo "</pre>"; // Terminates pre tag
?>    
    </body>
</html>
