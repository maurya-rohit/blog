<?php
include('connect.php');
session_start();
if(!$_SESSION["user"])
{
echo "please login" ;
}
$userid=$_SESSION["user"];
$title=$_POST['title'];
$related=$_POST['related'];
$content=$_POST['content'];
$sql = "INSERT INTO blogs VALUES('', '$userid', '$title' , '$related' , '$content')";
$result= mysql_query($sql);
echo "your post has recorded successfully";
?>