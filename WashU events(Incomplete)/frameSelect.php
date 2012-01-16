<html>
<head>
</head>
<body>


<br>
<br>

<a target="showframe" href="eventAdd.php">Add New Event</a>
<br>

<br>
<br>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 

Category/Type<br />
<br>

<input type="checkbox" value="freefood" name="food">Food<br />
<input type="checkbox" value="party" name="party">Music<br />
<input type="checkbox" value="social" name="social">Nightlife<br />
<input type="checkbox" value="social" name="academic">Academic<br />
<input type="checkbox" value="social" name="sports">Sports<br />
<input type="checkbox" value="social" name="outdoor">Outdoor<br />
<input type="checkbox" value="social" name="art">Art<br />
<input type="checkbox" value="social" name="perform">Performing Arts<br />
<br>
<br>
<input type="checkbox" value="social" name="offcampus">Off Campus<br />
<input type="checkbox" value="social" name="oncampus">On Campus<br />
<br>


<input type="checkbox" value="social" name="today">Happening Today<br />


<input type="submit" value="submit" name="eventSubmit">
</form>


<br>
<br>

<br>

</body>
</html>


<?php 

//<a target="showframe" href="eventsDisplaySession.php">Show Events</a>

if (isset($_POST['eventSubmit'])){


session_start();
if(isset($_POST['freefood'])){
$_SESSION['freefood']=1;
$_SESSION['freefoodcheck']=1;

}
if(isset($_POST['party'])){
$_SESSION['party']=1;

}
if(isset($_POST['social'])){
$_SESSION['social']=1;

}

//echo "ok";

echo("<script language=\"javascript\">"); 
//echo("showframe.location.href = \"http:/www.your.com/somepage.php\";"); 

echo("top.frames['showframe'].location.href = \"eventsDisplaySession.php\"; ");

//echo("top.frames['showframe'].location.href = 'http://www.google.com' ");

echo("</script>");

}



?>