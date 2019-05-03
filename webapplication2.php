<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script> 
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   
    <title>Travel Experts Database System</title>
   
  <style>
  
          .card, .card-body {
          
           
            animation: myfirst 2s;
            -moz-animation: myfirst 2s; /* Firefox */
            -webkit-animation: myfirst 2s; /* Safari and Chrome */
            -o-animation: myfirst 2s; /* Opera */
        }

        @keyframes myfirst {
            0% {
                opacity:0;
			
            }
            }

            25% {
                opacity: 0.3;
              
            }

            50% {
                opacity: 0.7;
				
            }

            100% {
                opacity: 1;
			
            }
        }

        @-moz-keyframes myfirst /* Firefox */
        {
             0% {
                opacity:0;
				height:0;
            }

            25% {
                opacity: 0.3;
                height:100px;
            }

            50% {
                opacity: 0.7;
				height:230px;
            }

            100% {
                opacity: 1;
				height:330px;
           
            }
        }

        @-webkit-keyframes myfirst /* Safari and Chrome */
        {
              0% {
                opacity:0;
				height:0;
            }

            25% {
                opacity: 0.3;
                height:100px;
            }

            50% {
                opacity: 0.7;
				height:230px;
            }

            100% {
                opacity: 1;
				height:330px;
            }
        }

        @-o-keyframes myfirst /* Opera */
        {
             0% {
                opacity:0;
				height:0;
            }

            25% {
                opacity: 0.3;
                height:100px;
            }

            50% {
                opacity: 0.7;
				height:230px;
            }

            100% {
                opacity: 1;
				height:330px;
            }
        }
  h4{
  text-align:left;
  margin-top:px;
  color:green;
  }
  .headermenu{
  float:right;
  padding:0 15px;
  color:green;
  }
  .navbar-nav
  {
  	  color:black;
  }
  .nav-link{
  	  height:50px;
	  margin-top:-5px;
	  margin-left:15px;
	  font-size:20px;
	  color:black;
  }
  .card{
  text-align:left;
  width:270px;
  height:420px;
  float:left;
  margin-left:50px;
  border:solid 1px green;
  }
   .card-img-top{
  	 width:100%;
	 height:200px;
  }
  .buttonstyle{
        
			   color: green;
               font-size:22px;
               text-align:left;
			   opacity:0.9;
			   width:250px;
              }
    i{
      font-size:50px;
    }   
	
body{
    background-image:url("back1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

}
  </style>
</head>
<body >
  
  <!--header for system heardermenu tooltip dropdown-->
    <h3 >Welcome to Travel Experts Database System (2019)</h3>
    <img src="icon.jpg" style="width:100px;margin-top:-10px">
	  <a style="float:right; margin-top:-25px;margin-right:10px" href="#" data-toggle="tooltip" data-placement="bottom" title="profile" ><i class='fas fa-portrait' style='font-size:36px;color:green'></i></a>
	   <div style="margin-top:-45px;margin-right:60px;display:block" class="container">
          <a class="headermenu"  href="#" data-toggle="tooltip" data-placement="bottom" title="feedback" ><i class='far fa-grin' style='font-size:24px'></i></a>
		
      <!--setting , user can change photos and background image-->   
		 <a class="nav-item dropdown"><a class="headermenu " class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  data-toggle="tooltip" data-placement="bottom" title="setting" >
	         <i class="fa fa-cog" style="font-size:24px"></i>
	        <div class="dropdown-menu">
             <a class="dropdown-item" href="#" onclick="reset()" >reset</a>
             <a class="dropdown-item" href="#" onclick="changeblue()" >blue background</a>
             <a class="dropdown-item" href="#" onclick="changegrey()" >grey background</a>
	   	     <a class="dropdown-item" href="#" onclick="changegreen()" >green background</a>
			 <a class="dropdown-item" href="#" onclick="changepicture()" >chang picture</a>
			 <a class="dropdown-item" href="#"><label>your own picture</label>
			 <input type="file" id="fileInput" multiple onchange="yourown()"/></a>
            </div>
	      </a>

		  <a class="headermenu" href="#" data-toggle="tooltip" data-placement="bottom" title="techical support:1-403-456-6829!" ><i class='fas fa-question-circle' style='font-size:24px'></i></a>
          <a class="headermenu" href="#" data-toggle="tooltip" data-placement="bottom" title="nitification" ><i class='far fa-bell' style='font-size:24px'></i></a>
          <a class="headermenu" href="#" data-toggle="tooltip" data-placement="bottom" title="Email" ><i class='far fa-envelope' style='font-size:24px;'></i> </a> 

    </div>


<!--navgation bar-->
   <nav class="navbar navbar-expand-sm bg-success navbar-dark">
   <ul class="navbar-nav">
    <li class="nav-item">

<!--Search by table name-->
       <a style="margin-top:-10px;color:black" class="nav-link" href="#" ><input class="border-success" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ..."></a>
    </li>

<!--dropdown menu-->  
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
        Human Resorces
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>

	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
        Finance
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>

	 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Sales
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>

	 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
	  <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>
	 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Suppliers
      </a>
      <div class="dropdown-menu">
	  <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>

	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Customers
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>

	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Booking
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Daily Report</a>
        <a class="dropdown-item" href="#">Monthly Report</a>
        <a class="dropdown-item" href="#">Yearly Report</a>
		<a class="dropdown-item" href="#">Export Excel</a>
      </div>
    </li>

	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        History Report
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">2018</a>
        <a class="dropdown-item" href="#">2017</a>
        <a class="dropdown-item" href="#">2016</a>
      </div>
    </li>	
  </ul>
</nav>

 <!--table button-->
	 <ul id="myUL">	   			  
	           <div  class="card" ><img class="card-img-top" src="card1.jpg" id="div1">
               <div class="card-body">	
	                <div class="btn-group" >
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >1.Agencies</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit"  class="card-title  btn-outline-success" value="Browse"  name="agencies"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="agencies"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="agencies"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="agencies"></form>
						  </div>    
					</div>
				  
				  
				    <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle " data-toggle="dropdown" >2.Agents</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="agents"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="agents"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="agents"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="agents"></form>
						  </div>    
						  </div>

                       <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >3.Bookingdetails</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="bookingdetails"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="bookingdetails"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="bookingdetails"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="bookingdetails"></form>
						  </div>    
						  </div>
				  
				     <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >4.Bookings</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="bookings"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="bookings"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="bookings"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="bookings"></form>
						  </div>    
						  </div>

           </div>
		   </div>

		   	<div  class="card" ><img class="card-img-top" src="card2.jpg" id="div2" >
               <div class="card-body">	
	                <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle " data-toggle="dropdown" >5.Classes</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="classes"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="classes"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="classes"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="classes"></form>
						  </div>    
						  </div>
				  
				  
				    <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >6. Creditcards</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="creditcards"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="creditcards"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="creditcards"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="creditcards"></form>
						  </div>    
						  </div>

                       <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >7. customers </button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="customers"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="customers"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="customers"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="customers"></form>
						  </div>    
						  </div>
				  
				     <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >8. customers_rewards</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="customers_rewards"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="customers_rewards"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="customers_rewards"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="customers_rewards"></form>
						  </div>    
						  </div>

           </div>
		   </div>

		   	<div  class="card" ><img class="card-img-top" src="card3.jpg" id="div3">
    <div class="card-body">	
	                <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >9. fees</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="fees"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="fees"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="fees"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="fees"></form>
						  </div>    
						  </div>
				  
				  
				    <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >10. packages</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="packages"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="packages"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="packages"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="packages"></form>
						  </div>    
						  </div>

                       <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >11. packages_products</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="packages_products_suppliers"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="packages_products_suppliers"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="packages_products_suppliers"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="packages_products_suppliers"></form>
						  </div>    
						  </div>
				  
				     <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >12. products</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="products"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="products"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="products"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="products"></form>
						  </div>    
						  </div>

           </div>
		   </div>

		   	<div  class="card" ><img class="card-img-top" src="card4.jpg" id="div4">
    <div class="card-body">	
	                <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >13. products_suppliers</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="products_suppliers"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="products_suppliers"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="products_suppliers"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="products_suppliers"></form>
						  </div>    
						  </div>
				  
				  
				    <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >14. regions</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="regions"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="regions"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="regions"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="regions"></form>
						  </div>    
						  </div>

                       <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >15. suppliercontacts</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="suppliercontacts"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="suppliercontacts"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="suppliercontacts"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="suppliercontacts"></form>
						  </div>    
						  </div>
				  
				     <div class="btn-group">
                    <button  type="button"  class="buttonstyle btn btn-link dropdown-toggle" data-toggle="dropdown" >16. triptypes</button>
					      <div class="dropdown-menu ">
					         <form method="post" action="dbselect.php"> 
                             <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Browse"  name="triptypes"></form>
						     <form method="post" action="dbadd.php"> 
                              <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Add Record"  name="triptypes"></form>
							<form method="post" action="dbdelete.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Delete Record"  name="triptypes"></form>	
                              <form method="post" action="dbupdate.php"> 
							  <input class="dropdown-item"  type="submit" class="card-title  btn-outline-success" value="Update Record"  name="triptypes"></form>
						  </div>    
						  </div>

                     </div>
		             </div>

 <!--announcement-->
			   <textarea rows="4" cols="45" style="float:right;margin-right:30px;text-align:left;border:green solid 1px">
             announcement:
           </textarea>

		    </ul>
       
 <!--instruction-->
           <div>
		    <h3 style="margin-left:20px; padding-top:500px">instrution: 1 click table button 2 choose function 3 you can copy data to excel</h3>
			</div>
		
<!--search fountion-->
    <script>
        function myFunction() {
		    
            var input, filter, ul, li, a, i;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByClassName("btn-group");

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("button")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }


<!-- fountion for header menu-->
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


<!--function for setting(chang photos and background image-->
function reset()
{
   document.body.style.backgroundImage = "url('back1.jpg')";
  document.getElementById("div1").src = "card1.jpg";
  document.getElementById("div2").src = "card2.jpg";
  document.getElementById("div3").src = "card3.jpg";
  document.getElementById("div4").src = "card4.jpg";

}	
function changeblue()
{
document.body.style.backgroundImage = "url('back2.jpg')";
}

function changegrey()
{
document.body.style.backgroundImage = "url('back3.jpg')";
}
function changegreen()
{
document.body.style.backgroundImage = "url('back4.jpg')";
}

function changepicture()
{
  document.getElementById("div1").src = "card5.jpg";
  document.getElementById("div2").src = "card6.jpg";
  document.getElementById("div3").src = "card7.jpg";
  document.getElementById("div4").src = "card8.jpg";
}



function yourown() {
      var name = document.getElementById('fileInput'); 
       document.getElementById("div4").src =name.files.item(0).name;
      
    };



    </script>



</body>
</html>

