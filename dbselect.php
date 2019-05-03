
<!DOCTYPE html>
<html>
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
 body{
 	  background-image:url("maxresdefault.jpg");
	 margin-top:30px;
	  background-repeat: no-repeat;  
   background-size: cover;   
 }

 td{font-size:20px}
 </style>

</head>


<?php
//create class
class Table
   {
		private  $tableName;
		
		public function __construct($tableData)
		{
			$values = array_keys($tableData);
			$this->tableName = $values[0];
			
		}
	  public function gettableName()
	    {
		return $this->tableName;
	      }
	  public function settableName($value)
	     {
		$this->tableName = $value;
        }
      }
	  $table = new Table($_POST);
	$qq = $table->gettableName();

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
   
   //select table and print data
   $result = mysqli_query($dbh, "SELECT * FROM $qq");
    //print $result;
  
   print '<h2 style="text-align:center">'.$qq.'</h2>
   <table class="table table-bordered table-hover">';
  

    
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
    
   
    
//javascript for user go back to main page
?>
  <script>
                function select() {
                    var qq = window.open('http://localhost/my project/webapplication2.php', '_self', 'width=1300,height=1200,menubar=yes,toolbar=yes, status=yes,scrollbars=yes');       
            }
            </script>

 <button type="button" class="btn btn-outline-success" onclick="select()" id="myButton">back to main menu</button>
</body>
</html>
