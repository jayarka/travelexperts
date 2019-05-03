<?php
//==============regprocess.php======================
//-----------Author: Wei Guang Yan------------------
//----Function:(3 main steps)-----------------------
//----1. Receive log in and profile information;----
//----2. Check whether user ID has been used;-------
//----3. Write log in and profile onfo to database--
//==================================================

//--- Parameters (Arguments) used to transfering between files------
// ----Input parameters:  $_SESSION['pagetoprocess'], -------------------
//------------------------$_POST;-----------------------------------
// ----Output parameters: $_SESSION['UserIdExist'], ----------------
//------------------------$_SESSION['insertProfile'], --------------
// -----------------------$_SESSION['insertLogin'], ----------------
//------------------------$_SESSION['userId'].----------------------

//------Import values of parameters from outside--------
    session_start();
    if(isset($_SESSION['pagetoprocess'])){
        $pgFrom=$_SESSION['pagetoprocess'];
        unset($_SESSION['pagetoprocess']);
    }

    include("custmerclass.php");
    include("dbfunctions.php");

    function pwdHash($pwd){
    //---------Function------------------
    //---------Hass the password.--------
    //-----------------------------------
        $hash=password_hash($pwd, PASSWORD_DEFAULT);
        return $hash;
    }
    
    function sliceArray(&$arrayOriginal,$num){
    //---------Function------------------
    // Seperate array into two arrays: first array is set as he return value; 
    // Second array is saved in the import array and return as a "global" item.
    //-----------------------------------
        $arrayNew=array_slice($arrayOriginal,0,2);
        $arrayOriginal=array_slice($arrayOriginal,2);
        return $arrayNew;
    }

    function isUidExist($Custlgin,$tableName){
    //  Check whether user id exist in login table.
        $userId=$Custlgin->getCustUserId();             //get userid from object
        $colName="UserId";
        $uidArray=retrieveCol($colName,$tableName);     //get userid array from table
        $flag=false;
        foreach($uidArray as $str){                     //compare userid with array elements
            if($str == $userId){
                $flag=true;                             //If match, set flag="true"
            }
        }
        return $flag;
    }

    function keyValueToStrs($newCust, &$strCol, &$strValue){
        //---------Functon----------------
        // Implode associative array of new customer information to two strings,
        // Set all key's name to string variable "strCol", 
        // and values to string variable "strValue".
        //--------------------------------
        $len=count($newCust);
        $arrayKeys=array_keys($newCust);
        $lastKey=$arrayKeys[$len-1];
        $strCol="";
        $strValue="";
        foreach($newCust as $x => $x_value){
            //print("key=$x, value=$x_value<br>");
            if ($x != $lastKey){
                $strCol .= $x.", ";
                $strValue .= "\"".$x_value."\", ";
            }
            else{
                $strCol .= $x;
                $strValue .= "\"".$x_value."\"";
            }
        }
    }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta chart="utf-8">
        <meta name="description" content="Registration Page">
        <meta name="author" content="wei Guang Yan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
<body>
    <?php
//====STEP1: IMPORT DATA INTO ARRAY, THEN CONVERT INTO TWO OBJECTS=========
//====OBJECT 1: CUSTOMER LOG IN INFO; OBJECT 2: CUSTOMER PROFILES==========
        if (isset($_POST)){     // Check whether receive form informtion
            $custInfo=$_POST;
            // Slice customer information into two arrays:
            // Assign first array "$custIdPwd" two elements ['userId'] and ['Password'];
            // Assign second array to original array "$custInfo", which has left elements. 
            $i=2;
            $custIdPwd=sliceArray($custInfo, $i);

        // If there is element ['submit'], which is the last element in imported array, remove it.
            $keys=array_keys($custInfo);
            $len=count($custInfo);
            if($len>0){
                if($keys[$len-1]=="submit"){
                    array_pop($custInfo);
                }
            }
            /*
            //-----test sliced arrays result------
            print("<pre>");
            print_r($custIdPwd);
            print("</pre><br>");
            print("<pre>");
            print_r($custInfo);
            print("</pre><br>");
            //----------------test end----------------
            */
//======================STEP 1 END================================


//==========STEP 2: CHECK WHETHER USER ID HAS BEEN USED============
//==========ADDITION:IF LOGIN TABLE NOT EXIST, CREATE IT===========
            //Assign object to transfer log in information,
            //Check whether the user Id exist in the table.
            $Custlgin=new CustLgInfo($custIdPwd);
            $table1="customer_login";
            $tableExist=isTableExist($table1);   // Check whether login table exist
            if($tableExist){                        // Login table exist
                $IdExist=isUidExist($Custlgin,$table1); // check whether User ID exist
                if($IdExist){
                // If user Id exist in database, show error
                    $_SESSION['UserIdExist']=true;
                    header("location: $pgFrom");
                    exit();
                }
            }
            else{       // Table not exist, create table "customer_login"
                //------------For test--------------
                //    print("Table does not exist! Need create table.<br>");
                //------------Test End--------------
                $columns=array();
                $columns[]="Id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
                $columns[]="UserId VARCHAR(30) NOT NULL";
                $columns[]="Password VARCHAR(100) NOT NULL";
                $columns[]="Class VARCHAR(2) NOT NULL DEFAULT 'C'";
                $columns[]="CustomerId INT(11)";
                $columns[]="AgentId INT(11)";
                $columns[]="reg_date TIMESTAMP";
                $columns[]="FOREIGN KEY (CustomerId) REFERENCES customers (CustomerId)";
                $columns[]="FOREIGN KEY (AgentId) REFERENCES agents (AgentId)";

                //---------Create login table--------------
                $res=createTable($table1,$columns);
                if(!$res){
                    print('<script>alert("1.1 Login table does not exist.\\nFail to create login table!");</script>');
                }
                else{
                    print('<script>alert("1.2 Login table does not exist. \\nCreate login table!");</script>');
                }
            }
//==============================STEP 2 END==========================================


//=========STEP 3: INSERT LOG IN INFO AND CUSTOMER PROFILE INTO DATABASE============
            
    //-------Sub-step 1: Insert customer details to table "customers"------------        
            //Transfer customer profile object to two strings: "keys" and "values"
            $CustProfile=new CustmerInfo($custInfo);
            $strKey2=$CustProfile->getCustKeyString();
            $strValue2=$CustProfile->getCustValueString();
            /*
            //-------For Test: object 2 strings--------
            print("Strkey2=".$strKey2."<br>");
            print("Strvalue2=".$strValue2."<br>");
            //---------------Test end------------------
            */
            date_default_timezone_set("America/Edmonton");
            $table2="customers";

            $result2=dbinsert($table2, $strKey2, $strValue2);
            if($result2){               // Insert customer details successfully
                $flog_Profile=true;     // Set status flag of customer profile insert
                print("<script>alert('2.1 Succeed to insert customer profile data.');</script>");

    //------Sub-step 2: Get value of first column in last row of "customers"----------
                $strCol="CustomerId";
                $option="ORDER BY CustomerId DESC LIMIT 1";
                $result3=dbselect($table2, $strCol, $option);
                $result3=$result3[0][0];

    //------Sub-step 3: Hash password and write back to object----------
                $pwd=$Custlgin->getCustPwd();
                $str=pwdHash($pwd);
                $Custlgin->setCustPwd($str);
                                
    //------Sub-step 4: Combine value of "CustomerId" into login info----------
                $addCol="CustomerId";
                $addValue=$result3;
                $strKey1=$Custlgin->getCustLoginKeyString();
                $strValue1=$Custlgin->getCustLoginValueString();
                $strKey1=$strKey1.", ".$addCol;
                $strValue1=$strValue1.", '".$addValue."'";
                /*
                //-------For Test: object 1 strings--------
                print("<br>After hash:<br>");
                print("Strkey1=".$strKey1."<br>");
                print("Strvalue1=".$strValue1."<br>");
                //---------------Test end------------------
                */
    //------Sub-step 5: Insert login info into table "customer_login"------------
                $result1=dbinsert($table1, $strKey1, $strValue1);
            if($result1){               // Set status flag of customer profile insert
                    $flag_login=true;
                    print("<script>alert('3.1 Succeed to insert customer logins data.');</script>");
                }
                else{
                    $flag_login=false;
                    print("<script>alert('3.2 Fail to insert customer logins data.');</script>");
                }
    
            }
            else{
                $flog_Profile=false;
                print("<script>alert('2.2 Fail to insert customer profile data.');</script>");

            }
//===================STEP 3 END================================        
        }
        else{
            print("<script>alert('Did not get $_POST.');</script>");
        }

        if($flag_login and $flog_Profile){
            $_SESSION['reg_stat']=true;
        }
        header("Location: $pgFrom");
        exit();

    ?>
    
</body>
</html>