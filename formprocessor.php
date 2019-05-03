<!--Author:Jonathan Arca
    This script prints everything the user submitted using the form on the contact page.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
// assign the local variables from the post array
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


// process the data entered into the previous form
print "<h2>Thank you $first_name $last_name, we received the following information</h2>";
print "First Name: $first_name<br>";
print "Last Name: $last_name<br>";
print "Email Address: $email<br>";
print "Message: $message<br>";

?>
<br>
</body>
</html>
