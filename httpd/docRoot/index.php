<?php

require('db_params.php');

try{
   $dsn='mysql:host=172.19.0.2;port=3306;dbname=mycartdb';
   $pdo = new PDO($dsn, $dbuser, $dbpass);
   echo 'Connected to DB';
}

catch(Exception $e){
   echo $e;
}

$sql="select * from products";
$statement=$pdo->prepare($sql);
//$stmt->bindParam(1, $_GET['id']); // <-placeholder
$statement->execute();

while($row=$statement->fetch()){

   require('row.php');

}
