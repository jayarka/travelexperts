<link rel="stylesheet"  href="packages.css">
   
   <?php

   //create variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travelexperts";

    // Create connection
    $con= mysqli_connect("localhost","root","","travelexperts");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      //select all columns from table 
      $sql="SELECT * from packages";
      print'<div class="container">'; 
      
      // If connection to database and selected right table true continue
    if ($result=mysqli_query($con,$sql))
      {
        
               
      
      // Fetch one and one row, at time 
       while ($row=mysqli_fetch_row($result))
      
          // The value of this is row one column number
      
echo <<<GO
     
       <div class="card" >
             <img src=$row[7] alt="Vacation Packages" style="width:100%">
                <div class="text"> 
                  <h2>$row[1]</h2>
                    <p class="date">$row[2] <br>  
                      $row[3]</p>
                    <p class="price">ONLY $$row[5]</p>
                    <p>$row[4]</p>
                </div>
                <form method='post' action='package$row[0].php'>
                  <input class="book btn-outline-success" type='submit' value='Details' name=$row[0]></input>
                </form>
        </div>
GO;
      }
     
             
?>
    
          
          

