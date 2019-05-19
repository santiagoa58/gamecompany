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
  
  $getLeaderboardQuery = "SELECT user.Username, userleaderboard.Score
  from userleaderboard INNER JOIN user ON userleaderboard.UserID = user.UserID 
  WHERE userleaderboard.GameID = '" . $gameID . "' ORDER BY userleaderboard.Score DESC;";
  
  $result = mysqli_query($conn, $getLeaderboardQuery) or die('Query Failed.' .mysql_error());
  
  $num_results = mysqli_num_rows($result);
  for($i = 0; $i < $num_results; $i++)
  {
	  $row = mysqli_fetch_array($result);
	  echo $row['Username'] . "\t" . $row['Score'] . "\t";
  }
  
 ?>