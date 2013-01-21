<html>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pttlab", $con);

$r = $_POST['myRollNo'];
$n = $_POST['myName'];
$h = $_POST['myHobbies'];
$p = $_POST['myProjects'];

$sql = "INSERT INTO pttassignment3(RollNo, Name, Hobbies,Project)VALUES ('$r','$n','$h','$p')";
mysql_query($sql,$con)or die(mysql_error());
echo "Your resume is uploaded";
mysql_close($con);
?>
</br><td><a href = 'Assign3Php.html'><b><u>OK</u></b></a></td>
</html>