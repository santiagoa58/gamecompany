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
 
  //Check if username already exist in our database
 $nameCheckQuery = "SELECT Username, Salt, Hash FROM user WHERE Username = '" . $username . "';";
 $nameCheck = mysqli_query($conn, $nameCheckQuery) or die("2: Name Check query failed"); //error code # 2 - name check query failed
 if(mysqli_num_rows($nameCheck) != 1)
 {
	 echo "5: Username Doesn't Exist!";
	 exit();
 }
 
 //get login info from query
 $existinginfo = mysqli_fetch_assoc($nameCheck);
 $salt = $existinginfo["Salt"];
 $hash = $existinginfo["Hash"];
 
 $loginhash = crypt($password, $salt);
 if($hash != $loginhash)
 {
	 echo "6: Incorrect Password";
	 exit();
 }
 
 echo "0";
 
 ?>