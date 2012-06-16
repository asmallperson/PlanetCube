<?php
$con = mysql_connect("localhost","dan","cat");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("steve", $con);
 
$result=mysql_query("SELECT firstname, surname, nickname,phonenumber,height FROM addressbook WHERE nickname='$_POST[nickname]'");
 
echo"<html><body>";
 
 
while($row = mysql_fetch_array($result))
{
     echo $row['firstname'] . " " . $row['surname'] .  " ";
     echo $row['nickname'] . " " . $row['phonenumber'] . " ";
     echo $row['height'];
     echo "<br />";
}
echo "<a href=\"index.html\">back</a>";
echo "</body></html>";
 
mysql_close($con);
?>