<?php

$serverName=$_POST["serverName"];
$userName=$_POST["userName"];
$password=$_POST["password"];
$databaseName=$_POST["databaseName"];

$tableName=$_POST["tableName"];
$column1=$_POST["att1"];
$column2=$_POST["attr"];
$column3=$_POST["attrb"];

$dataType1=$_POST["dataType1"];
$lenght1=$_POST["lenght1"];

$dataType2=$_POST["dataType2"];
$lenght2=$_POST["lenght2"];

$dataType3=$_POST["dataType3"];
$lenght3=$_POST["lenght3"];





//crea connesione
$connessione= new mysqli($serverName,$userName,$password);
if(!$connessione){
  echo" connessione faild ";
  exit;
}
else{
 echo" connnessione succesfull ";
}

//imposta la variabile querry
$sql="USE $databaseName";
$verf=mysqli_query($connessione, $sql);

// verifica se la querry e andata a buon fine
if($verf){
    echo" database in uso $databaseName ";
}
else{
    echo" impossibile usare il database ";
    
}
//crea la tabbella e le colonne
$sql="CREATE TABLE $tableName($column1 $dataType1($lenght1),$column2  $dataType2($lenght2),$column3  $dataType3($lenght3));";

$verf=mysqli_query($connessione, $sql);
if($verf){
    echo" tabella creata e colonne create ";
}
else{
    echo" tabella non craeta ";
    
}

// chiude la connessione
mysqli_close($connessione);	
echo" connessione chiusa ";

?>
