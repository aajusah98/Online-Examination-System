<?php
session_start();
$getcon=mysqli_connect("localhost","root","");
if ($getcon) {
  echo "Registarion sucessful";
}
else
{
  echo "data base is not connected";
}
mysqli_select_db($getcon,"SGVU");
$Fname=$_POST['Fname'];
$pass=$_POST['pass'];
$Email=$_POST['email'];
//$img_name=$_FILES['img']['name'];
//$tmp_name=$_FILES['img']['img_name'];
//move_uploaded_file($tmp_name,"img/".$img_name);
$val="SELECT * from student WHERE Fname='$Fname' && Password='$pass'" ;
$result =mysqli_query($getcon,$val);
$num = mysqli_num_rows($result);
if ($num == 1) {
  echo "You are alredy registered";
  $_SESSION["uname"]=$Fname;
  $_SESSION["email"]=$Email;
header("location:home.php");
}


?>
