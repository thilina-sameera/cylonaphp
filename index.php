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
        <h1>Welcome To CylonaPHP</h1>
        <?php  
              include_once './models/cy_queryBuilder.php';  
              //select * from Customers
             $query = new cy_queryBuilder();
             echo $query->selectTableOnly("Customer");
             echo "<br>";
             
              //select * from Customers Where Country = USA
             $query2 = new cy_queryBuilder();
             echo $query2->selectTable("Customer")->where("Country", "=", "USA");
             echo "<br>";
      
              //select * from Customer Where Country = USA OR age > 50
             $query3  = new cy_queryBuilder();
             echo $query3->selectTable("Customer")->whereOR("Country","=", "USA")->where("Age", ">", "50");
             echo "<br>";
              
        ?>
    </body>
</html>
