<?php


    $to="darthdollar@gmail.com";
    
    $customer_name=$_POST["name"];
    
    $date=$_POST["date"];

    $time=$POST["time"];

    $phone_number=$POST["phone"];

    $customer_email=$POST["email"];
    
    $comments=$_POST["comments"];

    $subject="Reservation";
    
    if($_POST["submit"]){

    $mailBody="Name: $customer_name\n Phone: $sender_email\n Time & date: $date at $time\n\n Comments or requests: \n $comments";

    mail($to, $subject, $mailBody, "From: $customer_name <$customer_email>");
    }

header('Location: reservation.html');

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