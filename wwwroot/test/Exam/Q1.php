<html>
<head>Question 1</head>
<style>
th{
	background-color:black;
	color:white;
	}
</style>		
<body>	
<?php
	$cols=3;
	$rows=100000;
	$array2D = array("First Name","Last Name","Email Address");
	echo "<table>";
	echo "<tr>";
	echo "<th>First Name</th>";
	echo "<th>Last Name</th>";
	echo "<th>Email Address</th></tr>";
	
	for($i=0;$i<$rows;$i++)
	{
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
	
