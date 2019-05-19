<html>
<!--- Q2 --->	
<link rel="stylesheet" href="mystyle.css">
<!--- Q2 --->
<head>Question 2</head>	
<body>	
<?php
	echo "<table>";
    echo "<tr><th>First Name</th>";
	echo "<th>Last Name</th>";
	echo "<th>Email Address</th></tr>";
	
	$cols=3;
	$rows=100000;
	$array2D = array("First Name","Last Name","Email Address");
		
	for($i=0;$i<$rows;$i++)
	{
		echo "<tr>";
		for($j=0;$j<$cols;$j++)
		{
			$array2D[$i][$j]=$i."-".$j;
			if ($i != 4884)
				echo "<td>".$array2D[$i][$j]."</td>";
			else
				echo "<td>"."     "."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>	
</body>
</html>
	
