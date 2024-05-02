<?php 

$servername="localhost:3306";
$username ="root";
$password ="root";
$dbname="recipes";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn == true)
{
    echo "Bağlanti Olmadi";
}

 