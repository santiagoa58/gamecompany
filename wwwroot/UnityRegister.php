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
	echo "<script type='text/javascript'>";
	echo "window.open('http://gamecompany.azurewebsites.net/index.php')";
    echo "alert('DB Connection error!');";
    echo "</script>";
	 exit();
 }
 
 //Variables from the user for registration
 $username = $_POST["user"];
 $password = $_POST["password"];
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $dob =  $_POST["dob"];
 $email =  $_POST["email"];
 $conf_password = $_POST["conf-password"];
 
 //Check if username already exist in our database
 $nameCheckQuery = "SELECT Username FROM user WHERE Username = '" . $username . "';";
 $nameCheck = mysqli_query($conn, $nameCheckQuery) or die("2: Name Check query failed"); //error code # 2 - name check query failed
 
 if(mysqli_num_rows($nameCheck) > 0)
 {
	echo "<script type='text/javascript'>";
    echo "alert('Username already exist!');";
	echo "window.open('//gamecompany.azurewebsites.net/index.php')";
	echo "</script>";
	mysqli_close($conn);
	exit();
 }

 //Add User to table
 $salt = "\$5\$rounds=5000\$" . "steamedhams" . $username . "\$";
 $hash = crypt($password, $salt);
 
 $insertUserQuery = "INSERT INTO user (Username, Hash, Salt,Lname,Fname,dob,email,CreatedDate) VALUES('".$username."' , '".$hash."' , '".$salt."','".$lname."','".$fname."','".$dob."','".$email."','".date("Y-m-d H:i:s")."');";
 if (mysqli_query($conn, $insertUserQuery)){
	  echo "<script type='text/javascript'>";
      echo "alert('Congratulation! Your account has been created!');";
	  echo "window.open('gamecompany.azurewebsites.net/index.php')";
	  echo "</script>";
	  mysqli_close($conn);
 }
 else{
 	echo "<script type='text/javascript'>";
    echo "alert('Insert user query failed');";
	echo "window.open('gamecompany.azurewebsites.net/index.php')";
    echo "</script>";
	
	mysqli_close($conn);
	exit();
 }	
 
?>