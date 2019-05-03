
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
   
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  
    
   

    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    
    <title>Booking Page</title>
<style>
#packdesc{  margin-left:50px;
           }

.box {
            margin-left: 800px;
            margin-top:-100px;
            width:300px;
            height:300px; 
          
        }
        .imgsize {
            width: 300px;
            height: 260px;
        }
        .position{
            margin-bottom:0px;
        }

#iddesc{margin-left:50px}
#select1,#input1,#input2,#input3{width:110px;height:30px;}


.container {
  width:300px;
  height:650px;
  margin-left:50px;
  background-color: #f2f2f2;
  padding: 5px 10px 5px 10px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
/*placeholdercolor*/
::-webkit-input-placeholder { /* WebKit browsers */
    color:#ccc;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:#ccc;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:#ccc;opacity:1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:#ccc !important;
}


#payment{
	margin-top:-660px;
	margin-left:350px
}

#totalprice{
margin-top:-515px;
	margin-left:350px

}


input[type=text] {
  width:100%;
  margin-bottom: 10px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=email] {
  width:100%;
  margin-bottom: 20px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=month] {
  width:100%;
  margin-bottom: 10px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 3px;
}



label {
  margin-bottom: 5px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.class1{
height:40px;
width:100%
}

.btn1 {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn1:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
   
    margin-bottom: 20px;
  }
}

.ok{visibility:hidden}
</style>

 
</head>
<html>
<body>

<?php
   include "header.php";
// the "@" suppresses error messages
   $dbh = @mysqli_connect("localhost","root","") or die("can't connect");
   if (!$dbh)
   {
      print("can't connect");
	  exit();
   }
   
   if (!mysqli_select_db($dbh, "travelexperts"))
   {
      print("can't select DB: travelexperts");
	  exit();
   }

//get package ID print package information
    $ID=array_keys($_GET)[0];
    //PRINT $ID;
    $result = mysqli_query($dbh, "SELECT * FROM packages where PackageId=$ID");
	  $row = mysqli_fetch_row($result);
     
        print "<div id='packdesc'>";
        print "<h4>$row[4]</h4>";
        print "<h4>start date: ".$row[2]."</h4>";
        print "<h4>end date: ".$row[3]."</h4>"; 
        print "<h4>price :$".$row[5]."  (Canadian dollar) </h4>";
        print "</div>";
         
		 //display package pictures in slideshow
        print '<div id="demo" class="carousel slide box" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="imgsize" src='.$row[11].'>
                <div class="carousel-caption position">
                    <h6>Bratislava</h6>
                </div>
            </div>
            <div class="carousel-item">
                <img class="imgsize" src='.$row[12].'>
                <div class="carousel-caption position">
                    <h6>Chisinau</h6>
                </div>
            </div>
            <div class="carousel-item">
                <img class="imgsize" src='.$row[13].'>
                <div class="carousel-caption position">
                    <h6>Ljubljana</h6>
                </div>
            </div>  
        </div>

        <!-- button for change picture -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>';
	?>


<!-- ask number of customers-->
   <div id="iddesc">
	 <form action="" method="post"> <span>How many travellers do you have?</span>
       <select name="q" id="mySelect">
        <option value="1">1</option>
        <option value="2">2</option>
	    <option value="3">3</option>
	     <option value="4">4</option>
         <option value="5">5</option>
	     <option value="6">6</option>
	    </select>
	   <input type="submit" value="submit" >
	 </form>

	<?php

//get number of customers,let customer fill in personal information.
	error_reporting( E_ALL&~E_NOTICE );
	$number=$_POST["q"];
    $i=1;
    print "<br>";
    print "<p >You have  ".$number."   travller(s)<p>";
    print "<p><i class='fa fa-warning' style='font-size:22px;color:red'></i>Important: Traveller names must match your government-issued photo ID exactly.<p>";
	while ($i<= $_REQUEST["q"]){
	echo <<<EOT
   <div>

    <p> * All information are required</p>
     <p><i class='fas fa-portrait' style='font-size:36px;color:green'></i>Traveller $i</p>	
  
	 <ul >
	   <li style="display:inline;">Title</li>
	   <li style="display:inline;padding-left:80px">First name<sup>*</sup></li>
	   <li style="display:inline;padding-left:40px">Middle name</li>
	   <li style="display:inline;padding-left:30px">Last name<sup>*</sup></li>
	   <li style="display:inline;padding-left:20px;">Birthday<sup>*</sup></li>
	  </ul>
 
    <select id='select1'><option value='Mr'>Mr</option><option value='Mrs'>Mrs.</option><option value='Ms'>Ms.</option></select>
    <input id='input1' type='text' name='fname'>
    <input id='input2' type='text' name='mname'>
	<input id='input3' type='text' name='lname'>
    <input  type="date" name="birth" value="birth"> 
   </div>


EOT;
$i++;
}
?>
  
<!--let customer fill in information about payment-->
</div>
<br>
<p style="margin-left:50px;font-size:18px">How do you want to pay?<p>
<p  style="margin-left:50px"><img src="phone.jpg" style="width:30px">help telephone 1-403-686-8429      <a href="#">contact us</a><p>
</div>

 
    <div class="container">
        <form action="booking2.php" method="request"> 
 

          <div >
            
			<h3>Billing Address</h3>
		 
            <label for="CustFirstName"><i class="fa fa-user"></i> First Name<sup>*</sup>
            <input type="text" id="fname" name="CustFirstName" placeholder="John" required></label>
			<label for="CustLastName"><i class="fa fa-user"></i>Last Name<sup>*</sup>
            <input type="text" id="lname" name="CustLastName" placeholder="Doe" required></label>
             <label for="CustAddress"><i class="fa fa-address-card-o"></i>Address
            <input type="text" id="adr" name="CustAddress" placeholder="14 Meleod Street"></label>
            <label for="CustCity"><i class="fa fa-institution"></i>City
            <input type="text" id="city" name="CustCity" placeholder="Calgary"></label>
			
            <label for="CustProv ">Province
                 <select class="class1" name="CustProv" id="prov">
				    <option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="MB">Manitoba</option>
					<option value="NB">New Brunswick</option>
					<option value="NL">Newfoundland and Labrador</option>
					<option value="NS">Nova Scotia</option>
					<option value="ON">Ontario</option>
					<option value="PE">Prince Edward Island</option>
					<option value="QC">Quebec</option>
					<option value="SK">Saskatchewan</option>
					<option value="NT">Northwest Territories</option>
					<option value="NU">Nunavut</option>
					<option value="YT">Yukon</option>
				 </select></label>
				
                  <label for="CustPostal">Zip
                  <input id="postal" class="class1" onblur="post()" type="text" name="CustPostal" placeholder="T5A 3A8" required></label>
				
			     <label for="CustHomePhone"><i class="fa fa-phone"></i>CustHomePhone<sup>*</sup>
                 <input style="display:inline" type="text" id="hphone" name="CustHomePhone" placeholder="780-680-8421" required>
			     <label for="CustBusPhone"><i class="fa fa-phone"></i>CustBusPhone
                  <input style="display:inline" type="text" id="bphone" name="CustBusPhone" placeholder="780-482-3421">
			  
			       <label for="CustEmail"><i class="fa fa-envelope"></i>Email
                   <input class="class1" type="email" id="email" name="CustEmail" placeholder="john@example.com"></label>
            </div>
   

		     <div  id="payment" class="container">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <p>Please select a valid year of credit card expiration.<p>
            <label for="CCName">Name on Card<sup>*</sup></label>
            <input type="text" onblur="cname1()" id="cname" name="CCName" placeholder="John Doe" required><span id="cname1" class="ok">name is ok<i class="fa fa-check" style="font-size:20px"></i></span>
            <label for="CCNumber ">Credit card number<sup>*</sup></label>
            <input type="text" onblur="ccnum1()" id="ccnum" name="CCNumber" placeholder="1111-2222-3333-4444" required><span id="cnumber1" class="ok">number is ok<i class="fa fa-check" style="font-size:20px"></i></span>
            <label for="expmonth">Exp Month and Year<sup>*</sup></label>
            <input type="month"  name="expmonth" required>
              <div >
                <label for="cvv">CVV<sup>*</sup></label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
           <div id="totalprice"  class="container">
	    <?php
    
//calculate total price for customers
	print  '<h4><img style="width:150px" src="shoppingcart.gif"></i> <b>Traveller(s):'.$_POST["q"].'</b></h4>';
    $total=$row[5]*($_POST["q"]); 
    $i=1;
    while ($i<=$_POST["q"]) 
    {
      
      PRINT '<p>'.$i.'<a href="#"> traveller(s)<a/>';  
     print '<span class="price">$'.$row[5]. '</span></p>';
    
    $i++;
    }
    print '<hr>';
	  print '<p>Total price : <span class="price" style="color:black"><b>$'.$total.'</b></span></p>';
	  ?>
      </div>
	 </div>
	
 </div>
  

<!--continue to check out-->
     <br>
      <div>
        <label style="margin-left:50px;font-size:20px">
          <input  type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing</label>
		  <p  style="margin-left:50px;font-size:20px"><img src="phone.jpg" style="width:30px">help telephone 1-403-686-8429      <a href="#">contact us</a><p>
        <input type="submit" value="Continue to checkout" class="btn1">
        </div>
        </form>
	
<!--check if postal number name, number on creditcard   is valid-->
<script>
      function post() {
                var str = document.getElementById("postal").value;
                var patt = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/;
                if (patt.test(str)) {
                    alert("right postal code");
                }
                else 
                    { alert("wrong postal code");}
               
            }
 

         function cname1() {
           var str = document.getElementById("cname").value;
                var patt = /^[A-Za-z]/;
                if (patt.test(str)) {
                    document.getElementById("cname1").style.visibility = "visible";
                }
                else 
                    { alert("wrong name format");}
            }

            function ccnum1() {
                 var str = document.getElementById("ccnum").value;
                var patt = /^[0-9]/;
                if (patt.test(str)) {
                    document.getElementById("cnumber1").style.visibility = "visible";
                }
                else 
                    { alert("should be number");}
            }

		</script>


</body>
</html>