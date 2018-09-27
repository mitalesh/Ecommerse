<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include ("includes/dbcon.php");
//include ("Functions/functions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ecommerse3</title>
        
    </head>
    <body>
        
        <div>hello</div>
        
        <?php include 'templates/header.php';
        include 'templates/megadropdown.php';
        include 'templates/productcontainer.php';
        ?>
  </body>
</html>
