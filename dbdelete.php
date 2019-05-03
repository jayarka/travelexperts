
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="search.css">
    <title>Travel Experts Database System</title>
   <style>
   input{
      width:60px;
	  margin-left:70px;
	  }
	  body{
 	  background-image:url("maxresdefault.jpg");
	  margin-top:30px;
	  background-repeat: no-repeat;  
      background-size: cover;   
      }


   </style>
</head>


<html>
<head><title>Database Select Example</title></head>
<body style="margin-top:30px">

<?php
    //connect to database
   //the "@" suppresses error messages
   $dbh = @mysqli_connect("localhost","root","") or die("can't connect");
   if (!$dbh)
   {
      print("can't connect");
	  exit();
   }
   
   if (mysqli_select_db($dbh, "travelexperts"))
   {
      print("Selected DB: travelexperts");
   }
   else
   {
      print("can't select DB: travelexperts");
	  exit();
   }
   
   //select table
    $tablename=array_keys($_POST)[0]; 
   $result = mysqli_query($dbh, "SELECT * FROM $tablename");
    //print $result;
   
    //print table
   print '<h2 style="text-align:center">'.$tablename.'</h2>
   <table class="table table-bordered table-hover">';
  
    $fieldinfo=mysqli_fetch_field($result);
	$id=$fieldinfo->name;
    //print $id;
	 $result = mysqli_query($dbh, "SELECT * FROM $tablename");
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
    
   //get value of id for deleting 
      print ' <form method="get" action="dbdelete1.php">';    
      print "<input autofocus   type='text' required  name='$id' >please input the Id you want to delete and submit:      </input>";
	 print "<input  type='text' class='btn-success'  onclick='submitForm()' value='submit' name='$tablename'></input>";
	  print  '</form>';

	
?>
  <script>
     
		function submitForm() {
            if (confirm("Are you sure you want to delete?")) {
       document.forms[0].submit();
            }
        }
        </script>

</body>
</html>