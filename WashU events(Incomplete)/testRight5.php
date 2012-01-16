

<html>
<head>
<style>
    .somediv {
      -moz-border-radius: 20px;
      -webkit-border-radius: 20px;
      -khtml-border-radius: 20px;
      border-radius: 20px;
      border: 2px solid grey;
      height: 500px;
      width: 125px;
      top: 20px;
      right: 450px;
    }
  </style>
  
  
  <style type="text/css">
  .transparent {
    filter:alpha(opacity=50);
    opacity: 0.5;
    background-color:green;
    display:none;
    width:900;
    height:900;
    position:absolute;
    color: white;
    border: 1 green solid;
}


</style>



<script>
    /* this function shows the pop-up when
     user moves the mouse over the link */
    function Show()
    {
        /* get the mouse left position */
        x = event.clientX + document.body.scrollLeft;
        /* get the mouse top position  */
        y = event.clientY + document.body.scrollTop + 35;
        /* display the pop-up */
        Popup.style.display="block";
        /* set the pop-up's left */
        Popup.style.left = x;
        /* set the pop-up's top */
        Popup.style.top = y;
    }
    /* this function hides the pop-up when
     user moves the mouse out of the link */
    function Hide()
    {
        /* hide the pop-up */
        Popup.style.display="none";
    }
</script>



  
  
</head>


<?php

//	session_start();
//	$_SESSION['LOGINmysql']=1;
//	$_POST['logout']=0;
//	$_SESSION['USER']=123;
    
    //<iframe class="" width="400" height="225" frameborder="0" style= "position:absolute;top:500;left:560" src="http://player.vimeo.com/video/30239097?title=0&amp;byline=0&amp;portrait=0">
    //</iframe>
    
    ?>


    
<iframe name="showframe" frameborder="0" src="eventsDisplayHome.php" style= "position:absolute;top:80;left:250;background-color: white;" width=900   height=670>
</iframe>

<iframe name="showframe" frameborder="0" src="leftWhite.php" style= "position:absolute;top:80;left:30;background-color: white;" width=250   height=670>
</iframe>



<iframe name="showframe3" frameborder="0" src="right.php" style= "position:absolute;top:0;left:1710;" width=0   height=0>
</iframe>

<iframe name="showframe3" frameborder="0" src="bottom.php" style= "position:absolute;top:730;left:0;background-color: black;" width=1440   height=100>
</iframe>



<iframe name="showframe3" frameborder="0" src="bottomBlock.php" style= "position:absolute;top:800;left:30;background-color: white;" width=200   height=300>
</iframe>

</html>


<style>
body {background-image:url('http://th01.deviantart.net/fs71/PRE/f/2011/008/f/3/pattern___dark_grey_by_flinafoto-d36ovtw.jpg');}
</style>









<div id="spoiler" style="display:block; position: fixed; bottom: 0; left: 0px;  top:0px;  width: 1400; height:50; ">
<div id="fb-root" class=" fb_reset">
<div style="position: absolute; top: -10000px; height: 0pt; width: 0pt;">
</div>

<div >

 <iframe src="eventHeader.php" name="hello1" frameborder="0" style= "position:relative;top:0;left:0;" width=1700   height=72>
  </iframe>

</div>












<?php

//below is frameSelect.php

?>




<script>
if (!document.layers)
document.write('<div id="divStayTopLeft" style="position:absolute">')
</script>


<div class="somediv"  style="background-color: grey; right: 500px; top:20px;"


<layer id="divStayTopLeft">

<!--EDIT BELOW CODE TO YOUR OWN MENU-->
<table border="0" width="100" height="100"  cellspacing="0" cellpadding="0">

<br>


  <tr>
    <td width="100%" bgcolor="grey">

       
              
              
              


<a target="showframe" href="eventsDisplayHome.php" onClick="yahoo()" >Add Event</a>
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


<input type="submit" value="submit" name="eventSubmit"  >
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








              
              </td>

  </tr>
</table>
<!--END OF EDIT-->

</layer>


</div>



<script type="text/javascript">

/*
Floating Menu script-  Roy Whittle (http://www.javascript-fx.com/)
Script featured on/available at http://www.dynamicdrive.com/
This notice must stay intact for use
*/

//Enter "frombottom" or "fromtop"
var verticalpos="frombottom"

if (!document.layers)
document.write('</div>')

function JSFX_FloatTopDiv()
{
	var startX = 30,
	startY = 650;
	var ns = (navigator.appName.indexOf("Netscape") != -1);
	var d = document;
	function ml(id)
	{
		var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
		if(d.layers)el.style=el;
		el.sP=function(x,y){this.style.left=x;this.style.top=y;};
		el.x = startX;
		if (verticalpos=="fromtop")
		el.y = startY;
		else{
		el.y = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		el.y -= startY;
		}
		return el;
	}
	window.stayTopLeft=function()
	{
		if (verticalpos=="fromtop"){
		var pY = ns ? pageYOffset : document.body.scrollTop;
		ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
		var pY = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		ftlObj.y += (pY - startY - ftlObj.y)/8;
		}
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", 10);
	}
	ftlObj = ml("divStayTopLeft");
	stayTopLeft();
}
JSFX_FloatTopDiv();
</script>



<div id="Popup" class="transparent">
    <div style="background-color: #003366;width:900px" >
      <b>Title goes here</b></div>
    <div></b>Description goes here</div>
</div>
</body>
















<html>
<head>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
</td>


 



  <script>

function google() {

 $(document).ready(function() {
    $("#dialog").dialog();
    

  });

}


function yahoo() {

 $(document).ready(function() {
    $("#dialog2").dialog();

  });

}

function google2() {
if(document.getElementById("googleImage").style.display=="block"){
document.getElementById("googleImage").style.display="none";

}
else{
document.getElementById("googleImage").style.display="block";
}
}

function yahoo2() {
if(document.getElementById("yahooImage").style.display=="block"){
document.getElementById("yahooImage").style.display="none";

}
else{
document.getElementById("yahooImage").style.display="block";
}
}


  </script>
</head>
<body style="font-size:62.5%;">
  

</body>
</html>




<div id="dialog" title="Dialog Title" style="display:none; opacity: 0.9">
<input type = button value="change" onClick="google2();"></input>


</div>

<div id="dialog2" title="Dialog Title" style="display:none; opacity: 0.9;width: 900px">


















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





























</div>

    <img id="googleImage" src="http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/google_apple_logo.jpg" onClick="google();" style="display:none">

    <img id="yahooImage" src="http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/yahoo-messenger.jpg" onClick="yyy();" style="display:none">












