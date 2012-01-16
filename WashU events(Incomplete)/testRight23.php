

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
    
    
    
    body{
	text-align:center;
}
.container{
	text-align:left;
	margin:0 auto;
	width: 500px;
}


  </style>
</head>



<body>
<div class="container">


<?php

//	session_start();
//	$_SESSION['LOGINmysql']=1;
//	$_POST['logout']=0;
//	$_SESSION['USER']=123;
    
    //<iframe class="" width="400" height="225" frameborder="0" style= "position:absolute;top:500;left:560" src="http://player.vimeo.com/video/30239097?title=0&amp;byline=0&amp;portrait=0">
    //</iframe>
    
    ?>



<iframe name="showframe" frameborder="0" src="TopWhite.php" style= "background-color: D9D9D9;" width=1200   height=70>
</iframe>

    
<iframe name="showframe" frameborder="0" src="eventsDisplayHome.php" style= "background-color: white;" width=930   height=670>
</iframe>

<iframe name="showframe" frameborder="0" src="leftWhite.php" style= "background-color: white;" width=280   height=670>
</iframe>



<iframe name="showframe3" frameborder="0" src="right.php" style= "" width=0   height=0>
</iframe>

<iframe name="showframe3" frameborder="0" src="bottom.php" style= "background-color: black;" width=1440   height=100>
</iframe>



<iframe name="showframe3" frameborder="0" src="bottomBlock.php" style= "background-color: white;" width=200   height=300>
</iframe>











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

       
              
              
              


<a target="showframe" href="eventAdd.php">Add Event</a>
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





</div>





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
	var startX = 70,
	startY = 600;
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


</body>
</html>


