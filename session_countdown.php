<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="session_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function start_countdown()
{
 var counter=10;
 myVar= setInterval(function()
 { 
  if(counter>=0)
  {
   document.getElementById("countdown").innerHTML="You Will Be Logged Out In <br>"+counter+" Sec";
  }
  if(counter==0)
  {
   $.ajax
   ({
     type:'post',
     url:'login_logout.php',
     data:{
      logout:"logout"
     },
     success:function(response) 
     {
      window.location="";
     }
   });
   }
   counter--;
 }, 1000)
}
</script>
</head>
<body>
<div id="wrapper">

<?php
if($_SESSION['password']=="123" && $_SESSION['name']=="123")
{
 ?>
 <script>start_countdown();</script>
 <p id="countdown"></p>
 <?php
}
else
{
 ?>
 <form method="post" action="login_logout.php" id="login_form">
  <h1>LOGIN TO PROCEED</h1>
  <input type="text" name="name" placeholder="Name">
  <input type="password" name="pass" placeholder="*******">
  <input type="submit" name="submit_pass" value="DO SUBMIT">
  <p>"Name : 123" , "Password : 123"</p>
  <p><font style="color:red;"><?php echo $error;?></font></p>
 </form>
 <?php	
}
?>

</div>
</body>
</html>
