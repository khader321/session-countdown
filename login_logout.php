<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['name'] && $_POST['pass'])
{
 $name=$_POST['name'];
 $pass=$_POST['pass'];
 if($name=="123" && $pass=="123")
 {
  $_SESSION['name']=$name;
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Pssword";
 }
}
if(isset($_POST['logout']))
{
 unset($_SESSION['name']);
 unset($_SESSION['password']);
 echo "success";
 exit();
}
?>
