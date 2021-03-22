<?php

 require_once 'classes.php';

 $publications = array();

 $con = mysqli_connect("localhost","root","","polimorf");
 if (mysqli_connect_errno()){
     echo "Failed to connetc to MySQL: " . mysqli_connect_error();
 }

 $result = mysqli_query($con, "SELECT * FROM bublication");

 while ($row = mysqli_fetch_array($result)){

     $publications[] = new $row['type']($row);
 }
