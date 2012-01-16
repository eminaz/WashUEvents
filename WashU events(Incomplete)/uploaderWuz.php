

<?php

$target_path ="http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/.html/upload/";
session_start();
//$str=$_SESSION['USER'];
$target_path="wuzPhoto/";
echo $target_path;


$_SESSION['photo']= basename($_FILES['uploadedfile']['name']);


$target_path = $target_path . basename($_FILES['uploadedfile']['name']);

if(is_uploaded_file($_FILES['uploadedfile']['tmp_name'])){
echo "ok";
}


if(is_writable($target_path)){
echo "writeable";
}


if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']) . " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}


     Header("Location: http://ec2-50-19-207-165.compute-1.amazonaws.com/~hx3/eventAddA2.php");


?>
