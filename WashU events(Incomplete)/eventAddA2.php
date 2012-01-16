

<br>
<br>


<html>
<head></head>
<body>


<form enctype="multipart/form-data" action="uploaderWuz.php" method="POST">

<input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000000" />
Upload Photo: <input name="uploadedfile" type="file" /><br>
<input type="submit" value="Upload File" />
</form>
<br><br>


<form action= <?php echo $_SERVER['PHP_SELF'] ?> method="post">
 <input type="submit" name="Submit" value="Submit the Event">
<br><br>
<label for="text_field">Event Name: </LABEL>
<br>

<input type="text"  name="title" >


<br><br>






<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 


<script language="javascript" type="text/javascript" src="datetimepicker.js">

//Date Time Picker script- by TengYong Ng of http://www.rainforestnet.com
//Script featured on JavaScript Kit (http://www.javascriptkit.com)
//For this script, visit http://www.javascriptkit.com



</script>




----------------------------------------------------------------<br>
When Event Start:<br>
Date <input id="demo3" type="text" size="12" name="start_date"><a href="javascript:NewCal('demo3','ddmmmyyyy',false,24)"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
Time
<select name="start_time">
<option value="0">-choose a time-</option>
<?php
	echo ("<option value = '12:00 am' >12:00 am</option>\n");
	echo ("<option value = '12:30 am' >12:30 am</option>\n");
	echo ("<option value = '1:00 am' >1:00 am</option>\n");
	echo ("<option value = '1:30 am' >1:30 am</option>\n");
	echo ("<option value = '2:00 am' >2:00 am</option>\n");
	echo ("<option value = '2:30 am' >2:30 am</option>\n");
	echo ("<option value = '3:00 am' >3:00 am</option>\n");
	echo ("<option value = '3:30 am' >3:30 am</option>\n");
	echo ("<option value = '4:00 am' >4:00 am</option>\n");
	echo ("<option value = '4:30 am' >4:30 am</option>\n");
	echo ("<option value = '5:00 am' >5:00 am</option>\n");
	echo ("<option value = '5:30 am' >5:30 am</option>\n");
	echo ("<option value = '6:00 am' >6:00 am</option>\n");
	echo ("<option value = '6:30 am' >6:30 am</option>\n");
	echo ("<option value = '7:00 am' >7:00 am</option>\n");
	echo ("<option value = '7:30 am' >7:30 am</option>\n");
	echo ("<option value = '8:00 am' >8:00 am</option>\n");
	echo ("<option value = '8:30 am' >8:30 am</option>\n");
	echo ("<option value = '9:00 am' >9:00 am</option>\n");
	echo ("<option value = '9:30 am' >9:30 am</option>\n");
	echo ("<option value = '10:00 am' >10:00 am</option>\n");
	echo ("<option value = '10:30 am' >10:30 am</option>\n");
	echo ("<option value = '11:00 am' >11:00 am</option>\n");
	echo ("<option value = '11:30 am' >11:30 am</option>\n");
	echo ("<option value = '12:00 pm' >12:00 pm</option>\n");
	echo ("<option value = '12:30 pm' >12:30 pm</option>\n");
	echo ("<option value = '1:00 pm' >1:00 pm</option>\n");
	echo ("<option value = '1:30 pm' >1:30 pm</option>\n");
	echo ("<option value = '2:00 pm' >2:00 pm</option>\n");
	echo ("<option value = '2:30 pm' >2:30 pm</option>\n");
	echo ("<option value = '3:00 pm' >3:00 pm</option>\n");
	echo ("<option value = '3:30 pm' >3:30 pm</option>\n");
	echo ("<option value = '4:00 pm' >4:00 pm</option>\n");
	echo ("<option value = '4:30 pm' >4:30 pm</option>\n");
	echo ("<option value = '5:00 pm' >5:00 pm</option>\n");
	echo ("<option value = '5:30 pm' >5:30 pm</option>\n");
	echo ("<option value = '6:00 pm' >6:00 pm</option>\n");
	echo ("<option value = '6:30 pm' >6:30 pm</option>\n");
	echo ("<option value = '7:00 pm' >7:00 pm</option>\n");
	echo ("<option value = '7:30 pm' >7:30 pm</option>\n");
	echo ("<option value = '8:00 pm' >8:00 pm</option>\n");
	echo ("<option value = '8:30 pm' >8:30 pm</option>\n");
	echo ("<option value = '9:00 pm' >9:00 pm</option>\n");
	echo ("<option value = '9:30 pm' >9:30 pm</option>\n");
	echo ("<option value = '10:00 pm' >10:00 pm</option>\n");
	echo ("<option value = '10:30 pm' >10:30 pm</option>\n");
	echo ("<option value = '11:00 pm' >11:00 pm</option>\n");
	echo ("<option value = '11:30 pm' >11:30 pm</option>\n");
	
?>
</select>
<br><br>



When Event End:<br>
Date <input id="demo2" type="text" size="12" name="end_date"><a href="javascript:NewCal('demo2','ddmmmyyyy',false,12)"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
Time
<select name="end_time">
<option value="0">-choose a time-</option>
<?php
	echo ("<option value = '12:00 am' >12:00 am</option>\n");
	echo ("<option value = '12:30 am' >12:30 am</option>\n");
	echo ("<option value = '1:00 am' >1:00 am</option>\n");
	echo ("<option value = '1:30 am' >1:30 am</option>\n");
	echo ("<option value = '2:00 am' >2:00 am</option>\n");
	echo ("<option value = '2:30 am' >2:30 am</option>\n");
	echo ("<option value = '3:00 am' >3:00 am</option>\n");
	echo ("<option value = '3:30 am' >3:30 am</option>\n");
	echo ("<option value = '4:00 am' >4:00 am</option>\n");
	echo ("<option value = '4:30 am' >4:30 am</option>\n");
	echo ("<option value = '5:00 am' >5:00 am</option>\n");
	echo ("<option value = '5:30 am' >5:30 am</option>\n");
	echo ("<option value = '6:00 am' >6:00 am</option>\n");
	echo ("<option value = '6:30 am' >6:30 am</option>\n");
	echo ("<option value = '7:00 am' >7:00 am</option>\n");
	echo ("<option value = '7:30 am' >7:30 am</option>\n");
	echo ("<option value = '8:00 am' >8:00 am</option>\n");
	echo ("<option value = '8:30 am' >8:30 am</option>\n");
	echo ("<option value = '9:00 am' >9:00 am</option>\n");
	echo ("<option value = '9:30 am' >9:30 am</option>\n");
	echo ("<option value = '10:00 am' >10:00 am</option>\n");
	echo ("<option value = '10:30 am' >10:30 am</option>\n");
	echo ("<option value = '11:00 am' >11:00 am</option>\n");
	echo ("<option value = '11:30 am' >11:30 am</option>\n");
	echo ("<option value = '12:00 pm' >12:00 pm</option>\n");
	echo ("<option value = '12:30 pm' >12:30 pm</option>\n");
	echo ("<option value = '1:00 pm' >1:00 pm</option>\n");
	echo ("<option value = '1:30 pm' >1:30 pm</option>\n");
	echo ("<option value = '2:00 pm' >2:00 pm</option>\n");
	echo ("<option value = '2:30 pm' >2:30 pm</option>\n");
	echo ("<option value = '3:00 pm' >3:00 pm</option>\n");
	echo ("<option value = '3:30 pm' >3:30 pm</option>\n");
	echo ("<option value = '4:00 pm' >4:00 pm</option>\n");
	echo ("<option value = '4:30 pm' >4:30 pm</option>\n");
	echo ("<option value = '5:00 pm' >5:00 pm</option>\n");
	echo ("<option value = '5:30 pm' >5:30 pm</option>\n");
	echo ("<option value = '6:00 pm' >6:00 pm</option>\n");
	echo ("<option value = '6:30 pm' >6:30 pm</option>\n");
	echo ("<option value = '7:00 pm' >7:00 pm</option>\n");
	echo ("<option value = '7:30 pm' >7:30 pm</option>\n");
	echo ("<option value = '8:00 pm' >8:00 pm</option>\n");
	echo ("<option value = '8:30 pm' >8:30 pm</option>\n");
	echo ("<option value = '9:00 pm' >9:00 pm</option>\n");
	echo ("<option value = '9:30 pm' >9:30 pm</option>\n");
	echo ("<option value = '10:00 pm' >10:00 pm</option>\n");
	echo ("<option value = '10:30 pm' >10:30 pm</option>\n");
	echo ("<option value = '11:00 pm' >11:00 pm</option>\n");
	echo ("<option value = '11:30 pm' >11:30 pm</option>\n");
?>
</select>
<br>
----------------------------------------------------------------


 

<br><br>
<label>Where: </Label>
<br>

 <input type="text"   name="location" >
<br>




<br><br>
<label>Event Description: </Label>
<br>

 <input type="text"   name="description" style="width:300px; height:200px;font-size:14pt;">
<br>




Category/Type<br />
<br>

<input type="checkbox" value="freefood" name="food">Food<br />
<input type="checkbox" value="party" name="music">Music<br />
<input type="checkbox" value="social" name="nightlife">Nightlife<br />
<input type="checkbox" value="social" name="academic">Academic<br />
<input type="checkbox" value="social" name="sports">Sports<br />
<input type="checkbox" value="social" name="outdoor">Outdoor<br />
<input type="checkbox" value="social" name="art">Art<br />
<input type="checkbox" value="social" name="perform">Performing Arts<br />
<input type="checkbox" value="social" name="meetup">Meet Up<br />

<br>

<?php

echo "-----------------------------------";

?>




<br><br>

<input type="checkbox" value="offcampus" name="offcampus">Off Campus<br />
<input type="checkbox" value="oncampus" name="oncampus">On Campus<br />
<br>




</form>






</form>


<br>




<?php


error_reporting(0);

$startTime=$_POST['start_time'];
$startDate=$_POST['start_date'];
$endTime=$_POST['end_time'];
$endDate=$_POST['end_date'];



session_start();
$user=$_SESSION['USER'];


//    if(isset($_POST['logout']) ||  $_SESSION['LOGINmysql']==0 ){
  //   $_SESSION['LOGINmysql']=0;
    // echo "ok";
   //  Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/loginMysql.php");
//}

//    if(isset($_POST['profile']) &&  $_SESSION['LOGINmysql']==1 ){

//     Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/profile.php?name=$user");
//}


//add an event to the list, if submit button is pressed
if(isset($_POST['Submit'])){

$errorMessage = "";
 
 //add more error messages
//  if(empty($tag))
  //{
  //  $errorMessage = "<li>You forgot to select a category!</li>";
 // }
 
  if($errorMessage != "")
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }


//echo "here";
$title=$_POST['title'];
$month=$_POST['month'];
$date=$_POST['date'];
$hour=$_POST['hour'];
$location=$_POST['location'];
$description=$_POST['description'];

$food=$_POST['food'];
$music=$_POST['music'];
$nightlife=$_POST['nightlife'];
$academic=$_POST['academic'];
$sports=$_POST['sports'];
$outdoor=$_POST['outdoor'];
$art=$_POST['art'];
$perform=$_POST['perform'];
$meetup=$_POST['meetup'];

//$oncampus=$_POST['oncampus'];

$oncampus=1;

if($_POST['offcampus']!=""){

$oncampus=0;

}



session_start();
$photo=$_SESSION['photo'];

//echo $name;

if($user!="guest"){
$sqlserver=mysql_connect('localhost','wustl_i','wustl_pass');
mysql_select_db('wustl',$sqlserver);
//mysql_query("insert into News values ('$name','$user','$link','$summary','$text','no','$tag')", $sqlserver) or die(mysql_error());

mysql_query("insert into wuz values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'user1','')", $sqlserver) or die(mysql_error());

if($food!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'food','user1','')", $sqlserver) or die(mysql_error());

}

if($music!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'music','user1','')", $sqlserver) or die(mysql_error());

}

if($nightlife!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'nightlife','user1','')", $sqlserver) or die(mysql_error());

}

if($academic!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'academic','user1','')", $sqlserver) or die(mysql_error());

}

if($sports!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'sports','user1','')", $sqlserver) or die(mysql_error());

}

if($outdoor!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'outdoor','user1','')", $sqlserver) or die(mysql_error());

}


if($art!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'art','user1','')", $sqlserver) or die(mysql_error());

}

if($perform!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'perform','user1','')", $sqlserver) or die(mysql_error());

}

if($meetup!=""){

mysql_query("insert into wuzTag values ('$title','$photo','$startDate','$startTime','$endDate','$endTime','$location','$oncampus',\"$description\",'meetup','user1','')", $sqlserver) or die(mysql_error());

}






}
else {echo "Guest cannot submit stories!";}


//Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/thankYouSubmit.php");


}


?>


<style>
body {background-color:green;}
</style>


<br>
<br>
<br>
<br>
<br>
