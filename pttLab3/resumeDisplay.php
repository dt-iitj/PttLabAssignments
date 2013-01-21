<html>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pttlab", $con);

$result = mysql_query("SELECT * FROM pttassignment3 WHERE RollNo ='" . $_POST["myRollNo"]  . "'  ");

echo "<table border='1'>
<tr>
<td>Roll No</td>
<th>Name of the Student</th>
<th>Hobbies</th>
<th>Projects</th>
</tr>";


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['RollNo'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Hobbies'] . "</td>";
  echo "<td>" . $row['Project'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?> 

</body>
</html>