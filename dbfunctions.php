<?php
//=================dbfunctions.php========================
//---------------Author: Wei Guang Yan--------------------

// Define functions on database operation:
//--------------------------------------------------------
// 1. Connect to database: "mysqlconnect()"
// 2. Check whether table exist: "isTable Exist()"
// 3. Creat a table: "createTable()"
// 4. Retrieve a column from a table: "retrieveCol()"
// 5. Insert a row in a table: "dbinsert()"
// 6. Select specialized values from a table: "dbselect()"
//========================================================

   include("dbvariables.php");
   
   function mysqlconnect(){
      //------Function:-----------------
      //    Used to connect to database and return the handle of database.
      //--------------------------------
      global $host, $user, $password, $dbName;
      $dbh = mysqli_connect($host, $user, $password,$dbName);  
      if (!$dbh){
         $fh=fopen("log.txt","a");
         fwrite($fh,"Time: ".date("l, Y-m-d h:i:s a")."\r\n");
         fwrite($fh,"Cannot link to DB: \"$dbName\".\r\n\r\n");
         fclose($fh);
         //-------For test------------
         //   print("Can't connect to mySQL DB: '$dbName'.<br>");
         //-------Test End------------
         exit();
      }
      else{
         $fh=fopen("log.txt","a");
         fwrite($fh,"Time: ".date("l, Y-m-d h:i:s a")."\r\n");
         fwrite($fh,"Connect to DB \"$dbName\" successfully.\r\n\r\n");
         fclose($fh);
         //-------For test------------
         //   print("Selected DB: \"$dbName\" successfully!<br>");
         //-------Test End------------
         return $dbh;
      }
   }
   
   function isTableExist($tableName){
      //------Function:-----------------
      //    Check whether a table exist in database.
      //--------------------------------
      $dbh=mysqlconnect() or die("Cannot open database!");
      $sql="SHOW TABLES LIKE '".$tableName."'";
      $result=mysqli_query($dbh,$sql);
      mysqli_close($dbh);
      if($result->num_rows >= 1){
         return true;
      }
      else{
         return false;
      }
   }

   function createTable($tableName,$cols){
      //------Function:-----------------
      //    Creat table wtih specialized table name and columns.
      //--------------------------------
      $dbh=mysqlconnect() or die("Cannot open database!");
      $aLen=count($cols);
      $sql="CREATE TABLE ".$tableName." (".$cols[0];
      for($i=1; $i<$aLen; $i++){
         $sql=$sql.", ".$cols[$i];
      }
      $sql=$sql.")";
      $result=mysqli_query($dbh,$sql);
      mysqli_close($dbh);
      return $result;
   }

   function retrieveCol($colName,$tableName){
      //------Function:-----------------
      //    Retrieve specialized column from table
      //--------------------------------
      $dbh=mysqlconnect() or die("Cannot open database!");
      $sql="SELECT ".$colName." FROM ".$tableName;
      $result=mysqli_query($dbh,$sql);
      $storeArray = Array();
      if($result->num_rows >= 1){
         while ($row = mysqli_fetch_assoc($result)) {
               $storeArray[]=$row[$colName];  
         }
      }
      else{
         $storeArray[]="";
      }
      mysqli_close($dbh);
      return $storeArray;
   }


   function dbinsert($table, $strCol, $strValue){
      //------Function:-----------------
      //    Insert a record into a table.
      //--------------------------------
      $dbh=mysqlconnect() or die("Cannot open database!");;
      $sql ="INSERT INTO $table ($strCol) VALUES ($strValue)";
      $result = mysqli_query($dbh, $sql);
      if ($result) 
      {
         // Insert successfuly! 

         mysqli_close($dbh);           // Close database, write log file
         $fh=fopen("log.txt","a");
         fwrite($fh,"Time: ".date("l, Y-m-d h:i:s a")."\r\n");
         fwrite($fh,"Insert data to table \"$table\" successfully.\r\n\r\n");
         fclose($fh);
         $flag=true;
         return $flag;
      }
      else 
      {
         mysqli_close($dbh);
         $fh=fopen("log.txt","a");
         fwrite($fh,"Time: ".date("l, Y-m-d h:i:s a")."\r\n");
         fwrite($fh,"Failed to insert data to table \"$table\".\r\n\r\n");
         fclose($fh);
         //print("Failed to insert data to table \"$table\".<br>");
         $flag=false;
         return $flag;
      }
   }

   function dbselect($table, $strCol, $option){
      //------Function:-----------------
      //    Select specialized values with condition
      //--------------------------------
      $dbh=mysqlconnect();
      $sql="SELECT $strCol FROM $table $option";
      $list = mysqli_query($dbh, $sql) or die("SQL select Error");
      $result=array();
      while($row = mysqli_fetch_row($list)){
         $result[]=$row;
      }
      return $result;
   }
   
?>
<!DOCTYPE html>

<html>
   <head>
      <title>Function</title>
      <meta chart="utf-8">
      <meta name="description" content="Registration Page">
      <meta name="author" content="wei Guang Yan">
   </head>
   <body>
   </body>
</html>