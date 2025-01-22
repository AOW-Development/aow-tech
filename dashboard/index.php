<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui=1">
<title>Log In</title> 
<meta name="theme-color" content="#00008B">
  <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/load.css">
        <link rel="stylesheet" href="css/header.css">
  <script src="js/load.js"></script>
</head>
<body onload='document.login1.userno.focus()'>
   <div id="loader" style="transform: matrix(1.3, 0, 0, 1.3, 0, 0);">
     <h3 style="position: fixed;bottom: 100px;display: block;width: 100%;text-align: center; color: white;">Loading...</h3>
   </div>
    <div id="header"> 
  <b id="name" style="color: white;">AOW dashboard</b>
</div>
   <div id="mainpage">
<p id="title">
  Log In
</p>
 <?php 
            if( isset($_SESSION['errno'])) {
           echo '<h4 style="font-size: 20px;margin-top: 2%;margin-left: 3%;margin-bottom:0%;color: red;text-align: left;">'.$_SESSION['errno'].'</h4>'; 
            unset($_SESSION['errno']);
        }
        ?>
         <?php 
            if( isset($_SESSION['errcode'])) {
           echo '<h4 style="font-size: 20px;color: red;margin-top: 2%;margin-left: 3%;margin-bottom: 0%;text-align: left;">'.$_SESSION['errcode'].'</h4>'; 
            unset($_SESSION['errcode']);
        }
        ?>
 <form id="login" name="login1" method="post" action="auth.php">
 <input type="text" name="userno" id="userno" placeholder="Enter your mail id" required/>
 <input type="password" name="code" id="code" placeholder="Enter your password" required/>
 <input type="submit" name="loginbtn" id="loginbtn" value="Log In">
 </form>
 </div>
</body>
</html>