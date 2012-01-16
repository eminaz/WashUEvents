
<link rel="stylesheet" type="text/css" href="calendar.css">

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/start/jquery-ui.css"
 
type="text/css" rel="Stylesheet" /> <!-- We need the style sheet linked
 above or the dialogs/other parts of jquery-ui won't display correctly!-->

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script><!-- The main library. 
Note: must be listed before the jquery-ui library -->



<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

function changeURL( url ) {
    document.location = url;
}
</script>


  <style type="text/css" rel="stylesheet">
#mysubmit { background-color: green; font-size: 60%; 
    padding: 10px; font-weight: bold; }
</style>




<html>
<head>
<style>
    .somediv4 {
      -moz-border-radius: 20px;
      -webkit-border-radius: 20px;
      -khtml-border-radius: 20px;
      border-radius: 20px;
      border: 2px solid grey;
      height: 100px;
      width: 500px;
      position: fixed;
      top: 10px;
      right: 110px;
    }
  </style>

</head>


<body>
  <div class="somediv4"  style="background-color: red; position:fixed;">

<?php

echo "<br>";
echo "<font size='6' face='Arial' color='green'>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";

echo "Connect With WashU";
echo "<br>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";
echo "For Students Only";

echo "<br>";
echo "<br>";
echo "<br>";

?>


</div>










<html>
<head>
<style>
    .somediv3 {
      -moz-border-radius: 20px;
      -webkit-border-radius: 20px;
      -khtml-border-radius: 20px;
      border-radius: 20px;
      border: 2px solid grey;
      height: 250px;
      width: 600px;
      position: fixed;
      top: 150px;
      right: 50px;
    }
  </style>

</head>


<body>
  <div class="somediv3"  style="background-color: grey; position:fixed;">

<form action= <?php echo $_SERVER['PHP_SELF'] ?> method="post">
<BR>
    <label for="text_field">Username: </LABEL>
    <input type="text" name="username" id="text_field"><BR>
    <label for="text_field">Password: </LABEl>
    <input type="password" name="password" id="text_field"><BR>
    <label for="text_field">WUSTL Email:</LABEl>
    <input type="text" name="password" id="text_field">@go.wustl.edu
   <p align=left> 
   <input type="submit" id="mysubmit" value="Sign Up" name="Register" size="40" onClick="parent.changeURL('www.google.com' );">
   </p>
</form>

</div>





<?php


if(isset($_POST['Register'])){
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$hash=crypt($username,$password);
//echo $username;
$sqlserver=mysql_connect('localhost','wustl_i','wustl_pass');
mysql_select_db('wustl',$sqlserver);
mysql_query("insert into Users values ('$username','$hash','0')", $sqlserver) or die('Error, insert query failed');

//header('Window-target: _top');
//Header("Location:http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/loginMysql.php");

echo "<script>
   parent.changeURL('hello.php' );
</script>";


}

echo "<br>";echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";
echo "Join Us NOW";
echo "<br>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";
echo "Find Out About Fun Events!";
echo "<br>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";
echo "See what Wash U students are doing";
echo "<br>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";
echo "Keep track of your events";
echo "<br>";
echo " <tr>&nbsp   &nbsp &nbsp &nbsp </tr>    ";
echo "Comment on events";
echo "<br>";








?>