<?php
$localhost = "localhost";
$root ="root";
$password ="";
mysql_connect($localhost,$root,$password) or die("".mysql_error());
mysql_select_db("alqaswa")  or die("".mysql_error());
?>