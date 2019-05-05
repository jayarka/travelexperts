<?php
//=========dbvariables.php===============
//------Author: Wei Guang Yan------------

//----data for logging in database-------
//=======================================

   $host = "remotemysql.com";
   $user = "zo6pxhXKOe";
   $password = "ONL4QhPYCa";
   $dbName = "zo6pxhXKOe";

   /*
      @Jonathan Arca
      Establish connection
   */
   $conn = mysqli_connect($host, $user, $password, $dbName);

   if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
   }
?>
