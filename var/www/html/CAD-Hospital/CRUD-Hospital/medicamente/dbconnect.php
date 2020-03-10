<?php

$host="localhost";
$user="root";
$password='';
$dbname="spital";

$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
    die("Eroare la conexiune");
}else {
    echo "Conexiune reusita!";
}


?>