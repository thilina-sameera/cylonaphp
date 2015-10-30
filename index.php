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
        <h1>Boothaya</h1>
        <?php  
              include_once './models/cy_queryBuilder.php';  
        
              echo "<h1>Hello Thilina</h1>"; 
              $row = new cy_queryBuilder();
              $row->table("Hi")->find();
        ?>
    </body>
</html>
