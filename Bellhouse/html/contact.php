<?php


    $to="darthdollar@gmail.com";
    
    $subject="Contact message";
    
    $sender_name=$_POST["name"];
    
    $sender_email=$_POST["email"];
    
    $message=$_POST["message"];
    
    if($_POST["submit"]){

    $mailBody="Name: $sender_name\nEmail: $sender_email\n\n$message";

    mail($to, $subject, $mailBody, "From: $sender_name <$sender_email>");
    }

header('Location: thankyou.html');

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>