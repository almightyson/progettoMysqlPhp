<?php

$serverName=$_POST["serverName"];
$userName=$_POST["userName"];
$password=$_POST["password"];
$databaseName=$_POST["databaseName"];

$connessione= new mysqli($serverName,$userName,$password);
if(!$connessione){
  echo" connessione faild ";
  exit;
}
else{
 echo" connnessione succesfull ";
}
$sql="CREATE DATABASE $databaseName";
$verf=mysqli_query($connessione, $sql);
if($verf){
    echo" database $databaseName creato";
}
else{
    echo" database non creato ";
    
}

mysqli_close($connessione);	


?>
