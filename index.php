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
              
              $test = new cy_queryBuilder();
              $array = array("Name", "Gender","Address");
              
              echo $test->selectCustomTable($tablename, $array)->where("Name", "=", "Thilina");
        ?>
    </body>
</html>
