<?php
$con = mysql_connect("localhost","dan","cat");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("steve", $con);
 
$sql="INSERT INTO addressbook (firstname, surname, nickname,phonenumber,height)
VALUES
('$_POST[firstname]','$_POST[surname]','$_POST[nickname]','$_POST[phonenumber]','$_POST[height]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo"<html><body>";
echo "1 record added<br>";
echo "<a href=\"index.html\">back</a>";
echo "</html></body>";
 
 
mysql_close($con);
?>