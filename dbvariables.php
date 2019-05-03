<?php
//=========dbvariables.php===============
//------Author: Wei Guang Yan------------

//----data for logging in database-------
//=======================================

   $host = "localhost";
   $user = "root";
   $password = "";
   $dbName = "travelexperts";

   /*
      @Jonathan Arca
      Establish connection
   */
   $conn = mysqli_connect($host, $user, $password, $dbName);

   if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
   }
?>
