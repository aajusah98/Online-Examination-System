<?php
session_start();

$getcon=mysqli_connect("localhost","root","");
mysqli_select_db($getcon,"SGVU");
$Fname=$_POST['FName'];
$Lname=$_POST['LName'];
$Email=$_POST['email'];
$Mobile=$_POST['mob'];
$pass=$_POST['pass'];
$Cpassword=$_POST['Conform'];
//$img_name=$_FILES['img']['name'];
//$tmp_name=$_FILES['img']['img_name'];
//move_uploaded_file($tmp_name,"img/".$img_name);
$val="SELECT * from student WHERE Email='$Email' && Mobile='$Mobile'";
$result =mysqli_query($getcon,$val);
$num = mysqli_num_rows($result);
if ($num == 1) {
  echo "You are alredy registered";
}
else {
  $ary="insert into student (Fname,Lname,Email,Mobile,Password,Cpassword) VALUES ('".$Fname."','".$Lname."','".$Email."','".$Mobile."','".$pass."','".$Cpassword."')";
  mysqli_query($getcon,$ary);
  }
?>
