




<html>
<head><title>Login Page</title></head>
<body>

<form action= <?php echo $_SERVER['PHP_SELF'] ?> method="post">
    <label for="text_field">                 Username: </LABEL>
    <input type="text" name="username" id="text_field">
    <label for="text_field">Password: </LABEl>
    <input type="password" name="password" id="text_field">
    <input type="submit" value="Login">
        <input type="submit" name="logout"   value="Logout">

   <A href="registration.php"> Register </A>

 <!--<input type="submit" name="Register" value="Register">
-->


</form>

<?php

error_reporting(0);

session_start();

if(isset($_POST['logout']) ||  $_SESSION['LOGINmysql']==0 ){
  //   $_SESSION['LOGINmysql']=0;
     }


$_SESSION['LOGINmysql'] =0;
//$_SESSION['USER']=null;
  // if(isset($_POST['username']))
   // echo "<b>", $_POST['user_text'], "</b>";
$username=$_POST['username'];
$password=$_POST['password'];
$hashPassword=crypt($username,$password);

$sqlserver=mysql_connect('localhost','wustl_i','wustl_pass');
mysql_select_db('wustl',$sqlserver);
$result = mysql_query('select * from Users',$sqlserver);

  while($row = mysql_fetch_array($result, MYSQL_BOTH))
  {
   // if( $row['id']==$username && $row['password']==$password){
     //     echo "ok";

       if(crypt($username,$hashPassword)==$row['password']){

        $_SESSION["LOGINmysql"]=1;
        $_SESSION['USER']=$username;

        echo $_SESSION['USER'];
        echo isset($_SESSION["LOGINmysql"]);
}
}

//$username='0';


if(isset($_POST['Register'])==1){

echo "here";
//Header("Location:  http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/registration.php");

}


if($_SESSION["LOGINmysql"]=="1"){
echo "ok";

//      Header("home/hx3/.html/welcome.php");
Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/welcomeMysql2.php");
}else{
//        Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/loginMysql.php");
}



?>


