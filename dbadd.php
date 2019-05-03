<html>
<head>
<title>add new package</title>
    <style>

        input{font-size:20px}
	body{
 	  background-image:url("maxresdefault.jpg");
	  margin-top:30px;
	  background-repeat: no-repeat;  
      background-size: cover;   
      }

       
    </style>
	

</head>
<body>
   
    <?php
    //connect to database
		//the "@" suppresses error messages connect database
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

   //print table
   $tablename=array_keys($_POST)[0]; 
   $result = mysqli_query($dbh, "SELECT * FROM $tablename");  
   print '<h2 >'.$tablename.'</h2>';
     mysqli_field_seek($result,0);
     $fieldinfo=mysqli_fetch_field($result);
     $firstfield=$fieldinfo->name;
   print $firstfield." must be a new id for a new record";
   
   //select table
	 $result = mysqli_query($dbh, "SELECT * FROM $tablename");  
     print ' <form method="get" action="dbadd1.php">';    
     while( $fieldinfo=mysqli_fetch_field($result))
    {
		 $fieldname=$fieldinfo->name;
     
   //get ID for inserting new record  
		print '<input autofocus required type="text" name='.$fieldname.'>'.$fieldname.'<br>';
      
	  }
	      
          print "<br>";
		  print "<button style='width:100px;color:green;height:30px' type='text' class='btn-success'  onclick='submitForm()' value='submit' name='$tablename'>submit</button>";
	      print  '</form>';

	  ?>

	

<script>
			function submitForm() {
			if (confirm("Are you sure you want to submit?")){
			document.forms[0].submit();
			}
			}
		</script>

</body>
</html>





