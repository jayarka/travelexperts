================Registration page==================
---------------Author: Wei Guang Yan---------------

File list and functions:
============================================================================================
    Caller          main page                                                          database
("Index.php")---->"register.php"----->"regprocess.php"---->"dbfunctions.php"<---->"("travelexperts.sql")
                     ^  ^     	                 ^                      ^
                     |  |                        |                      |
  "regvalidchk.js"<---  |  "customerclass.php"----  "dbvariables.php"----
  "registerstyle.css"----
--------------------------------------------------------------------------------------------

1. Register page: "register.php"

(There is another sample file "register--test.php" where values has been filled for test)
	Provide a form to customer to fill out his(her) information, 
	validate all cell's information (with javascript) before sending to "regprocess.php". 
	The validation processes are written in "regvalidchk.js".
---------------------------------------------------------------------------------------------

2. Validation file: "regprocess.php"
    
    Step 1: Data pre-processing
	3.1.1 Import data from "$_POST" into an associative array;
	3.1.2 Slice the array into two parts:
	  (1) first array include User Id and password;
	  (2) Second array include user name and contact information.
	3.1.2 Declare two objects: "$Custlgin" and "$Cust", assign values during declaration.
	  (1) First object: 
		Set value Cust ID and password, which will be sent to table "customer_login";
	  (2) Second object: 
		Set cust detailed information, which will be sent to table "customers".

    Step 2: Check whether the new customer user ID has existed
	1) Check whether table "customer_login" exist?
	2) If did not find the table, create the table first. 
	3) Check whether the user ID has been used (exist in table), 
	4) If it is exist, redirect back to register page and show warning message. 


    Step 3: Write data to database
	1) pre-process array. Seperate array from $_POST into 2 object:
	3) call relative function in "dbfunctions.php" to make query to database.
---------------------------------------------------------------------------------------------

3. Database Query page: "dbfunctions.php"

	Functions:
	1) Connect to database;
	2) Check whether a table exist;
	3) Create a table; 
	4) Insert row(s) in table;
	5) Select special cell(s) in a table;
	6) Update special cell(s) in special user ID row;
=============================================================================================