<?php
   include('dbconnect.php');
   session_start();
   
   //checking user for sessions
   $user_check = $_SESSION['login_user'];
   //echo "$user_check"; to check the google_id of user
   
   //checking in database username
   $ses_sql = mysqli_query($link,"SELECT google_id from users where google_id = '$user_check' ");
   
   while($row = mysqli_fetch_assoc($ses_sql))
   {
      $session_usr=$row['google_id'];
      //echo $session; to check the username
   }


   if(!isset($_SESSION['login_user'])|| $login_session=='')
   {
      header("Location:index.php");
   }



   if(!isset($_SESSION['login_user'])||$_SESSION['login_user']=='')
   {
      //update later
   }
?>