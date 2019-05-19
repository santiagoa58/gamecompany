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
  $username = $_POST["usernamePost"];
  $score = $_POST["scorePost"];
  
  $getUserIDQuery = "SELECT UserID FROM user WHERE Username = '" . $username . "' LIMIT 1;";
  
  $userIDResult =  mysqli_query($conn, $getUserIDQuery) or die('Query Failed.' .mysql_error());
  $row = mysqli_fetch_array($userIDResult);
  $userID = $row['UserID'];
  
  $insertScoreQuery = "INSERT INTO userleaderboard (UserID, GameID, Score) VALUES('".$userID."' , '".$gameID."' , '".$score."');";
  mysqli_query($conn, $insertScoreQuery) or die("4: Insert user query failed");
  
  echo ("0");
  
?>