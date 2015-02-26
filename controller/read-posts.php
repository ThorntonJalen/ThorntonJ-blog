<?php

    require_once(__DIR__ . "/../model/config.php");
    
    $query = "SELECT *  FROM posts";
    $results = $_SESSION["connection"]->query($query);
    
    if($results)    {
        while($row = mysqli_fetch_array($results)){
           echo "<div class= 'post'>";
           echo "<h2>" . $row['title'] . "</h2>";
           echo "<br />";
           echo "<p>" . $row['post'] . "</h1>";
           echo "br/>";
           echo "/div";
           
            
        }
    
    }