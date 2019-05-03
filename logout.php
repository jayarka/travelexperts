<!-- Author: Jonathan Arca
     This logout script will destroy all session variables and reload the index page. -->

<?php
session_start();
session_destroy();

header("Location: index.php");
exit();
?>