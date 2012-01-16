
<?php



//echo("here");


$day=$_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];
$event3=$_GET['event3'];
$time2=$_GET['time2'];
session_start();
       $username=$_SESSION['USER'];
	   //echo $username;
	   
	   if($username!="guest"){
	  // echo "in";	   
      //echo($username);
	  
       // $name=$_GET['name'];
		$sqlserver=mysql_connect('localhost','wustl_i','wustl_pass');
		mysql_select_db('wustl',$sqlserver);
		mysql_query("insert into events values ('$day','$time2','$username', '$event3','NULL')", $sqlserver) or die('Error, insert query failed');

		//echo "[event1, event2, event3]";
		
	//	return "data!";
		}
		else{
		
		echo("guest");
}
		?>
