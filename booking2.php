<HTML>
<HEAD>
<TITLE>Your Form Values</TITLE>
</HEAD>
<BODY>
<?PHP

//print form 
   /* This page prints the form field names and values
   that were received
    */
   print("<h1>Your form sent the following values:</h1>");
   print("<table border='1'><tr><th>FIELDNAME</th><th>VALUE</th></tr>");
   
   if ($_SERVER["REQUEST_METHOD"] == "GET")
   {
      foreach (array_keys($_GET) as $name)
      {
         print("<tr><td>$name</td><td>$_GET[$name]</td></tr>");
      }
   }
   else if (isset($_POST))
   {
      foreach (array_keys($_POST) as $name)
      {
         print("<tr><td>$name</td><td>$_POST[$name]</td></tr>");
      }
   }
    print("</table>");

    //get value of column from form
  $name1=$_REQUEST['CustFirstName'];
  $name2=$_REQUEST['CustLastName'];
   $name3=$_REQUEST['CustAddress'];
  $name4=$_REQUEST['CustCity'];
   $name5=$_REQUEST['CustProv'];
  $name7=$_REQUEST['CustPostal'];
  $name8=$_REQUEST['CustHomePhone'];
   $name9=$_REQUEST['CustBusPhone'];
  $name10=$_REQUEST['CustEmail'];

  
//connect to database 
   $dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

	if (mysqli_select_db($dbh, "travelexperts"))
	{
		print("Selected DB: travelexperts<br />");
	}
	else
	{
		print("can't select DB: travelexperts<br />");
		exit();
	}
   	 
	
//select database and insert customer personal information
   $result = mysqli_query($dbh, "SELECT * FROM customers");
 
   //$sql = "insert into customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustHomePhone,CustBusPhone,CustEmail)
   //values ('$name1','$name2','$name3','$name4','$name5','$name6',$name8','$name9','$name10')"; 
   $sql = "insert into customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustHomePhone,CustBusPhone,CustEmail) 
   values ('$name1','$name2','$name3','$name4','$name5','$name7','$name8','$name9','$name10')"; 
   print $sql;


   print $sql;
   $result = mysqli_query($dbh, $sql);
   
   //get value of id after inserting
   $result1 = mysqli_query($dbh,"SELECT * FROM customers ORDER BY CustomerId  desc limit 1");
   while($row = mysqli_fetch_array($result1))
   {  
       $id1=$row['CustomerId'];
   }

   if ($result)
	{
	 print("New Record was inserted");
	}
	else
	{
	 print("error inserted");
	}
   

   //print costomers table after inserting
	 print '<h2 style="text-align:center">customers</h2>';
        $result = mysqli_query($dbh, "SELECT * FROM customers");
    $fieldinfo=mysqli_fetch_field($result);
	$id=$fieldinfo->name;
    //print $id;
	 $result = mysqli_query($dbh, "SELECT * FROM customers");
     
       print "<table class='table table-bordered table-hover'>";
  
    while( $fieldinfo=mysqli_fetch_field($result))
    {
	     print ("<th>$fieldinfo->name</th>");
	  }
   while ($row = mysqli_fetch_row($result))
   {
	   print("<tr>");
	  foreach ($row as $col)
	  {
	     print("<td>$col</td>");
	  }
	  print("</tr>");
   }
   print("</table>");

   //print form
 print("<h1>Your form sent the following values:</h1>");
   print("<table border='1'><tr><th>FIELDNAME</th><th>VALUE</th></tr>");
   
   if ($_SERVER["REQUEST_METHOD"] == "GET")
   {
      foreach (array_keys($_GET) as $name)
      {
         print("<tr><td>$name</td><td>$_GET[$name]</td></tr>");
      }
   }
   else if (isset($_POST))
   {
      foreach (array_keys($_POST) as $name)
      {
         print("<tr><td>$name</td><td>$_POST[$name]</td></tr>");
      }
   }
   print("</table>");


   //get information for payment
   $name1=$_REQUEST['CCName'];
   $name2=$_REQUEST['CCNumber'];
   $name3=$_REQUEST['expmonth'];
   $name5=$_REQUEST['cvv'];
 
   
   //connect database
   $dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

	if (mysqli_select_db($dbh, "travelexperts"))
	{
		print("Selected DB: travelexperts<br />");
	}
	else
	{
		print("can't select DB: travelexperts<br />");
		exit();
	}
   
   //insert information into creditcard table
   $result = mysqli_query($dbh, "SELECT * FROM creditcards");
   $sql = "insert into creditcards (CCName,CCNumber,expmonth,cvv,CustomerId) values ('$name1','$name2','$name3','$name5','$id1')";
   
   //print $sql;
   
	$result = mysqli_query($dbh, $sql);
 
   if ($result)
	{
	print("New Record was inserted");
	}
	else
	{
	 print("error inserted");
	}
   
   //print creditcard table after inserting
    print '<h2 style="text-align:center">creditcards</h2>';
    
        $result = mysqli_query($dbh, "SELECT * FROM creditcards");
      
        $fieldinfo=mysqli_fetch_field($result);

	  $id=$fieldinfo->name;
    
	 $result = mysqli_query($dbh, "SELECT * FROM creditcards");
     
       print "<table class='table table-bordered table-hover'>";
  
    while( $fieldinfo=mysqli_fetch_field($result))
    {
	     print ("<th>$fieldinfo->name</th>");
	  }
   while ($row = mysqli_fetch_row($result))
   {
	   print("<tr>");
	  foreach ($row as $col)
	  {
	     print("<td>$col</td>");
	  }
	  print("</tr>");
   }
   print("</table>");

?>
</BODY>
</HTML>
