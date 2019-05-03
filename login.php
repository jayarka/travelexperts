<!-- Author: Jonathan Arca
    This login script will take the user submitted username and password and log the user in if a matching record is found in the database. It will return the user to the index page with error notification in the
    url under the following conditions: wrong password, empty fields, or sql error. -->
<?php
if (isset($_POST['login-submit'])) {

    require 'dbvariables.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // If error connecting, show error
    if (!$conn) {
      die("Connection failed: ".mysqli_connect_error());
    }
    
    // If empty fields, return to index page
    if (empty($username) || empty($password)) {
        header("Location: index.php?error=emptyfields");
        exit();
    }
    /* Search database for userid 
       If user is an agent (Class is 'A' in database), forward to agent database interface
       If user is a customer (Class 'C' in database), forward to index page.
    */
    else {
        $sql = "SELECT * FROM customer_login WHERE userId=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                echo $row['Password'];
                $pwdCheck = password_verify($password, $row['Password']);
                if ($pwdCheck == false) {
                    header("Location: index.php?error=error=wrongpassword");
                    exit();
                }
                // login to respective section if username and password match record in database
                else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['username'] = $row['UserId'];
                    $_SESSION['usertype'] = $row['Class'];
                    if ($row['Class'] == 'A') {
                        header("Location: webapplication2.php?login=success");
                        exit();
                    }
                    header("Location: index.php?login=success");
                    exit();
                } 
                // all other cases return 'wrong password'
                else {
                    header("Location: index.php?error=wrongpassword");
                    exit();
                }
            }
            else {
                header("Location: index.php");
                exit();
            }
        }
    }
?>

    <?php } ?>