<?php
 //Variables for DB connection
 $servername = "csci355-mysql.mysql.database.azure.com";
 $server_username = "csci355admin@csci355-mysql";
 $server_password = "csci_355";
 $dbName = "gamecompany";

 //Make the connection
 $conn = new mysqli($servername, $server_username, $server_password, $dbName);
 
 if(mysqli_connect_errno())
 {
	 echo "1";
	 exit();
 }
 
 //Variables from the user for registration
 $username = $_POST["user"];
 $password = $_POST["password"];
 $confpassword = $_POST["conf-password"];
 $lname = $_POST["lname"];
 $fname = $_POST["fname"];
 $dob = $_POST["dob"];
 $email = $_POST["email"];
 
 //Check if username already exist in our database
 $nameCheckQuery = "SELECT Username FROM user WHERE Username = '" . $username . "';";
 $nameCheck = mysqli_query($conn, $nameCheckQuery) or die("2: Name Check query failed"); //error code # 2 - name check query failed
 
 if(mysqli_num_rows($nameCheck) > 0)
 {
	 echo "3: Username already exist!"; 
	 exit();
 }

 //Add User to table
 $salt = "\$5\$rounds=5000\$" . "steamedhams" . $username . "\$";
 $hash = crypt($password, $salt);
 
 $insertUserQuery = "INSERT INTO user (Username, Hash, Salt) VALUES('".$username."' , '".$hash."' , '".$salt."');";
 mysqli_query($conn, $insertUserQuery) or die("4: Insert user query failed");
 
 echo ("0");
?>