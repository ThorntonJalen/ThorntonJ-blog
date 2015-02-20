<?php

require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli ($host, $username, $password);

if($connection->connect_error) {
    die("<p> Error: " . $connection->connect_error . "</p>");
}
 
 $exsits = $connection->select_db($database);
 
 if(!$exsits) {
     $query = $connection->query("CREATE DATABASE $database");
     
     if($query) {
         echo "<p>Successfully created database " . $database . "</p>";
     }
 }
 
 else{
     echo "<p> Database already exsits.</p>";
 }
 
 $query = $connection->query("CREATE TABLE pots ("
         . "id int(11) NOT NULL AUTO_INCREMENT,"
         . "title varchar (255) NOT NULL,"
         . "post text NOT NULL,"
         . "PRIMARY KEY (id))");

if($query) {
     echo "<p>Successfuly create table: posts</p>";
 }
 else{
     echo "<p>$connection->error</p>";
 }
 
 $connection->close();

