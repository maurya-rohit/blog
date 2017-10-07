<?php
include('connect.php');
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
//echo $username;
$sql="SELECT * FROM user WHERE username = '$username'";
$result=mysql_query($sql);
if(!mysql_fetch_array($result))
{
$sql = "INSERT INTO user VALUES('', '$name' , '$username' , '$password')";
$result= mysql_query($sql);
//echo "your record has created successfully";
echo "<script> alert('Your record has created successfully');</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">';    
//header('location:register.php?rc=1');
}
else
{
//echo "username already taken";
echo "<script> alert('Username already taken');</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register1.php">';    
    
//header('location:form.php');
}
?>