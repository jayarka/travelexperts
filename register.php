<?php

//===============Registration Page===============================
//--------------Author: Wei Guang Yan----------------------------

// --------------------Function: --------------------------------
// 1. This is the page used for customer create account and register his/her profile details.
// 2. Validate each input information, show instruction, error description, and validation pass message.
// 3. After customer submit, check whether the new user ID has been used. If  yes, feedback warning message.
// 4. If all correct and user ID has not been used, write information to database, then show success message.
// 5. Record the url of caller page, and rederict back to the caller page ("index.php" or "").
//===============================================================

// =========================Main file============================
// 1. regster.php    (Main file)
//    |            * Provide a form for customer to create account and input profile information.
//    |
//    |   ============Supportting files of main file=============
//    |---- 2. Regvalidchk.js
//    |            * Check validation before submition and feedback error indications or "OK" to customer.
//    |---- 3. registerstyle.css
//    |            * Set webpage style;
//    |---- 4. regprocess.php
//              |  * Proceed data and database read/write;
//              |---- 5. customerclass.php
//              |          * Define two classes for Object-Oriented programming (OOP).
//              |            It wll be called by "reprocess.php".
//              |---- 6. dbfunctions.php
//                       |     * include functions including database connection, checking table exist,
//                       |       creating table, row(s) insert, content selection from table;
//                       |       It will be called by "reprocess.php".
//                       |---- 7. dbvariables.php
//                                   * Store database url, database name, user name and password. 
//                                     It will be called by "dbfunctions.php".
//----------------------------------------------------------------

//--------------Other details on redirection-----------
// 1. The caller page, which redirect to this page, need to asign webpage url to "$_SESSION['pagefrom']".
//    ----> transfered the url through "$_SESSION['pagefrom']" to this page; 
// 2. To retrun caller page, Set action of form2 to url of caller page. Setting in "function resetForm()"--->".action=..." 
//-----------------------------------------------------
//----------------- Need to improve: ------------------
// (1) Dynamical redirect to previous page----coding in php part before html.----> test need to be done with index.php;  
// (2) Disabled "confirm password" if password is not long enough (len<6)----in regprocess.js.---->during debugging;
// (3) Return all form values by cookie from server to client (register.php) if user ID exist.---->programming on half way.
//-----------------------------------------------------
    session_start();
    function redirectBack($pgFrom){
        print("<script>window.location.replace(\"".$pgFrom."\")</script>");
        exit();
    }

    $_SESSION['pagetoprocess']=$_SERVER['PHP_SELF'];
        
    if(isset($_SESSION['UserIdExist'])){
        $msg="The user ID you set has been used! \\nPlease try a new user ID.";
        print("<script>alert(\"$msg\");</script>");
        unset($_SESSION['UserIdExist']);
        unset($msg);
    }
    if(isset($_SESSION['reg_stat'])){
        $msg="Your registration information has been saved! \\nThank you very much!";
        print("<script>alert(\"$msg\");</script>");
        unset($_SESSION['reg_stat']);

        $pgFrom="index.php";
        redirectBack($pgFrom);

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta chart="utf-8">
        <meta name="description" content="Registration Page">
        <meta name="author" content="wei Guang Yan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="reset.css">

        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" href="registerstyle.css">
        
        <script type="text/javascript" src="regvalidchk.js"></script>

        <title>Registration</title>

    </head>
    <body>
        <?php
            include("header.php");
        ?>

        <!--      ----------Create form for registration-----------     -->
        <div id="maindiv">
            <h4 id="tbheading">Please register your information:</h4>
            <p><span style="color:#FF0000;">* All information are required.</span></p>
            <table id="tb">
                <tr>
                <form method="POST" id="fm1" action="regprocess.php" autocomplete="off" >
                    <td class="lab"><label>User ID:</label></td>
                    <td calss="input"><input type="text" name="UserId" class="text" form="fm1"/></td>
                    <td class="mg" rowspan="14">
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                        <p class="msg"></p>
                    </td>
                </tr>
                <tr>
                    <td class="lab"><label>Password:</label></td>
                    <td calss="input"><input type="password" name="Password" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Confirm Password:</label></td>
                    <td calss="input"><input type="password" class="text"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>First Name:</label></td>
                    <td calss="input"><input type="text" name="CustFirstName" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Last Name:</label></td>
                    <td calss="input"><input type="text" name="CustLastName" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Address:</label></td>
                    <td calss="input"><input type="text" name="CustAddress" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>City:</label></td>
                    <td calss="input"><input type="text" name="CustCity" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Province:</label></td>
                    <td class="input">
                        <select name="CustProv" class="text" form="fm1">
                            <option value="">Select One</option>
                            <option value="AB">Alberta</option>
                            <option value="BC">British Columbia</option>
                            <option value="MB">Manitoba</option>
                            <option value="NB">New Brunswick</option>
                            <option value="NF">Newfoundland</option>
                            <option value="NT">Northwest Territories</option>
                            <option value="NS">Nova Scotia</option>
                            <option value="NU">Nunavut</option>
                            <option value="ON">Ontario</option>
                            <option value="PE">Prince Edward Island</option>
                            <option value="QC">Quebec</option>
                            <option value="SK">Saskatchewan</option>
                            <option value="YT">Yukon Territory</option>
                        </select>
                    </td>   
                </tr>
                <tr>
                    <td class="lab"><label>Post Code:</label></td>
                    <td calss="input"><input type="text" name="CustPostal" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Country:</label></td>
                    <td>
                        <select name="CustCountry" class="text" form="fm1">
                        <option value="">Select One</option>
                        <option value="Canada">Canada</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td class="lab"><label>Home Phone:</label></td>
                    <td calss="input"><input type="text" name="CustHomePhone" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Business Phone:</label></td>
                    <td calss="input"><input type="text" name="CustBusPhone" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"><label>Email:</label></td>
                    <td calss="input"><input type="text" name="CustEmail" class="text" form="fm1"/></td>
                </tr>
                <tr>
                    <td class="lab"></td>
                    <td style="padding:20px 5px";>
                        <input type="button" value="Register" class="butn" form="fm1" onclick="isAllInputOk()"/>
                </form>
                <span style="float:right; margin-right:15px">
                    <form method="POST" id="fm2" action="">
                        <input type="button" name="cancel" value="Cancel" class="butn" form="fm2" onclick="resetForm()"/>
                    </form>
                </span>
                </td>
                </tr>
            </table>
        </div>
        <br/>
        <br/>

        <p id="demo"></p>

        <?php
        
        ?>

    </body>
</html>