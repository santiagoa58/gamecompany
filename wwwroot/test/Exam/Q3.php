<html>
<link rel="stylesheet" href="mystyle.css">
<head>Question 2</head>	
<!--- Q3 ---->
<script>
	function myalert(x){
		if (x!=4884)
			alert("you have clicked on Row #" + x);
		else	
			alert("you have clicked on Row #" + x +", which is the same as my CUNYID");
	}
</script>
<!--- Q3 ---->	
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
		echo "<tr onclick=myalert($i)>"; //---- Q3-----
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