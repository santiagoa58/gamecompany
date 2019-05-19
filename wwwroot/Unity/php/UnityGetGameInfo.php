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
 
 $gameID = $_POST["gameIDPost"];
 
 $getGameInfoQuery = "SELECT GameID, Name FROM game WHERE GameID = '" . $gameID . "' LIMIT 1;";
 
 $result = mysqli_query($conn, $getGameInfoQuery) or die('Query Failed.' .mysql_error());
 
 $row = mysqli_fetch_array($result);
 echo $row['GameID'] . "\t" . $row['Name'];
 
 
 ?>