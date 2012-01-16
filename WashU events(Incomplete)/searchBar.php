





<form action= <?php echo $_SERVER['PHP_SELF'] ?> method="post">


<?php

echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";

?>

<label>Search Events</LABEL>
<input type="text"  name="searchTerm" size="30" style= "background-image:url(http://xandesigns.com/images/content/tuts/smash/bghighlightlarge.jpg);">
<input target='showframe' type="submit" name="searchSubmit" value="   "   style= "background-image:url(http://t0.gstatic.com/images?q=tbn:ANd9GcR4xR3tGSsLLKGQTSNEA_JXAtJmTsgfMW1REJ3QWmms-RI88vNg); size:1">

<?php

echo "<font size='3' face='Arial' color=white>";

echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </tr>    ";



echo "Wuzhap";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp &nbsp </tr>    ";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp &nbsp </tr>    ";

echo "Attending";


?>
</form>


<?php
//list the categorizations so the user can see events in those categorizations.


if(isset($_POST['searchSubmit'])){

$searchTerm=$_POST['searchTerm'];

echo("<script language=\"javascript\">"); 
//echo("showframe.location.href = \"http:/www.your.com/somepage.php\";"); 

echo("top.frames['showframe'].location.href = \"http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/eventDisplaySearch.php?searchTerm=$searchTerm\"; ");

echo("</script>");


}




?>