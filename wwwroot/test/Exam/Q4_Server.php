<?php
$cols=3;
$rows=100000;
$array2D = array("First Name","Last Name","Email Address");
	
for($i=0;$i<$rows;$i++)
	{
	for($j=0;$j<$cols;$j++)
	{
		$array2D[$i][$j]=$i."-".$j;
	}
}

$search  = $_GET["q"];
$pattern = "*".$search."*";

echo "Results for searching :".$pattern."<br />";
echo "<table>";
echo "<tr>";
echo "<th>First Name</th>";	
echo "<th>Last Name</th>";
echo "<th>Email</th>";	
echo "</tr>";

for ($i=0;$i<$rows;$i++)
{
	if (fnmatch($pattern,$array2D[$i][0])==1 || fnmatch($pattern,$array2D[$i][1])==1 || fnmatch($pattern,$array2D[$i][2])==1)
	{ 
		echo "<tr>";
		echo "<td>FName ".$array2D[$i][0] ."</td>";	
		echo "<td>Lname ".$array2D[$i][1] ."</td>";	
		echo "<td>Email ".$array2D[$i][2] ."</td>";
		echo "</tr>";
	}		
}

echo "</table>";
echo "<br /";	
echo "End of the results!";
?>