<?php

$serverName="localhost";
$userName="rrot";
$databaseName="prova";

$tableName="alunno";
$column1="nome";

$dataType1="char";
$lenght1="10";



$connessione= new mysqli($serverName,$userName);
if(!$connessione){
  echo" connessione faild ";
  exit;
}
else{
 echo" connnessione succesfull ";
}


$sql1="USE $databaseName";
$verf=mysqli_query($connessione, $sql1);

// verifica se la querry e andata a buon fine
if($verf){
    echo" database in uso $databaseName ";
}
else{
    echo" impossibile usare il database ";
    
}


$sql="CREATE TABLE $tableName($column1 $dataType1($lenght1));";
//
$verf=mysqli_query($connessione, $sql);
if($verf){
    echo" tabella creata e colonne create ";
}
else{
    echo" tabella non craeta ";
}
    
    
?>