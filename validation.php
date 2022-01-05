<?php
  session_start();
  if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
  {
    $status = "<p style='color:#FFFFFF; font-size:20px'>
    <span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>"; 
  }else{
    $status = "<p style='color:black; font-size:20px'>
    <span>Le code captcha entré ne correspond pas! Veuillez réessayer.</span></p>
    <a href='index.php'>Retour </a>";
  }
  echo $status;
?>