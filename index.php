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
              
              //create a query object
              $query  = new cy_queryBuilder();
              //print query with or clause
              echo $query->selectTable("Customers")->findOR("Name", "Thilina")->find("Name", "Naveen");
              //print query with whereOR
              echo "</br>";
              $query2 = new cy_queryBuilder();
              echo $query->selectTable("Universities")->whereOR("Rank", ">", "23")->where("Rank", "<", "50");
        ?>
    </body>
</html>
