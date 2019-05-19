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
 
  $username = $_POST["usernamePost"];
  $gameID = $_POST["gameIDPost"];
  
  //Gets UserID based on username/////////////////////////////////////////////////////
  $getUserIDQuery = "SELECT UserID FROM user WHERE Username = '" . $username . "' LIMIT 1;";
  $userIDResult =  mysqli_query($conn, $getUserIDQuery) or die('Query Failed.' .mysql_error());
  $row = mysqli_fetch_array($userIDResult);
  $userID = $row['UserID'];
  ////////////////////////////////////////////////////////////////////////////////////
  
  $getScoreQuery = "SELECT Score from userleaderboard where UserID = '" . $userID . "' AND GameID = '" . $gameID . "' ORDER BY Score DESC;";
  $result = mysqli_query($conn, $getScoreQuery) or die('Query Failed.' .mysql_error());
  
  $num_results = mysqli_num_rows($result);
  for($i = 0; $i < $num_results; $i++)
  {
	  $row = mysqli_fetch_array($result);
	  echo $row['Score'] . "\t";
  }
 
 ?>