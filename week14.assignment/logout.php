<?php
   session_start();
   $ses_userid =$_SESSION[ses_userid];
   $ses_username = $_SESSION[ses_username];
   echo "<meta charset='utf-8' />";
   echo "Bye bye: $ses_username";
   unset ( $_SESSION['ses_userid'] );
   unset ( $_SESSION['ses_username'] );
   session_destroy();   
?>