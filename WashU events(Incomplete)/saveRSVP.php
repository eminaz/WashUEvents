

<?php


$name=$_GET['name'];
session_start();
$user=$_SESSION['USER'];
//session_start();
//$name=$_SESSION['name'];


$sqlserver=mysql_connect('localhost','wustl_i','wustl_pass');
mysql_select_db('wustl',$sqlserver);
//mysql_query("insert into attending values ('ok23','$name','ok','ok','ok','no','ok','ok')", $sqlserver) or die(mysql_error());

//mysql_query("UPDATE News SET text='$text' WHERE name = '$name'");


mysql_query("insert into attending values ('$name','$user','NULL')", $sqlserver) or die(mysql_error());

//Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/eventsDisplaySession.php");


?>