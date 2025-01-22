<?php
require 'dbcredentials.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 session_start();
    
    unset($_SESSION['no']);
        unset($_SESSION['accno']);
 
  $errflag = false;

 
  //Sanitize the POST values
  //$username = clean($_POST['userno']);
  //$password = clean($_POST['code']);
  $username = $_POST['userno'];
  $password = $_POST['code'];
 
  //Input Validations
  if($username == '') {
    $errno = 'Number missing';
    $errflag = true;
  }
  if($password == '') {
    $errcode = 'Password missing';
    $errflag = true;
  }
 
  //If there are input validations, redirect back to the login form
  if($errflag) {
    $_SESSION['errno'] = $errno;
    $_SESSION['errcode'] = $errcode;
    $_SESSION['no']=$username;
    $_SESSION['code']=$password;
    session_write_close();
    header("location: index.php");
    exit();
  }
 
  $qry="SELECT * FROM `users` WHERE `username`='".$username."'";
    $result=mysqli_query($conn,$qry);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
              if($password==$row["password"]) 
              {
               $a=session_id();
      $_SESSION['accno'] = $row["id"];
       $_SESSION['username'] = $row["username"];
           $_SESSION['id'] = $a;
             $_SESSION['role'] = $row['role'];
      session_write_close();
        if ($row['role'] == 'hr') 
                header("Location: hr");
            else  
              if ($row['role'] == 'admin') 
                header("Location: admin");
               else  
              if ($row['role'] == 'support') 
                header("Location: support");
                else  
              if ($row['role'] == 'sales') 
                header("Location: sales");
                 else  
              if ($row['role'] == 'finance') 
                header("Location: finance");
               else  
              if ($row['role'] == 'social') 
                header("Location: social");
               else  
              if ($row['role'] == 'seo') 
                header("Location: seo");
               else  
              if ($row['role'] == 'ppc') 
                header("Location: ppc");
               else  
              if ($row['role'] == 'dev') 
                header("Location: dev");
              
      exit();
                 } 
                 else 
                 {
                   //Login failed
      $errno = 'number is right';
      $errcode =  'password wrong';
      $errflag = true;
      if($errflag) {
        $_SESSION['errno'] = $errno;
        $_SESSION['errcode'] = $errcode;
        $_SESSION['no']=$username;
            $_SESSION['code']=$password;
        session_write_close();
        header("location: index.php");
        exit();
            }
}
}else
{
        //Login failed
      $errno = 'number wrong';
      $errcode =  '';
      $errflag = true;
      if($errflag) {
        $_SESSION['errno'] = $errno;
        $_SESSION['errcode'] = $errcode;
        $_SESSION['no']=$username;
            $_SESSION['code']=$password;
        session_write_close();
        header("location: index.php");
        exit(); 
}
}
  
?>