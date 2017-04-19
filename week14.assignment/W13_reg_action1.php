<?php
   $servername = 'mysql.senseproj.com' ;
   $username =  'cs319';
   $password =  'student';
   $dbname =    'cs319';

   $name = $_POST['username'];
   $pwd = $_POST['password'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   
   // Check connection
   if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
   }
   
   mysqli_set_charset($conn,"utf8");
   //query for check username is already exist
   $sql = "SELECT * from user where username='$name'";
   
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);
   if($num > 0){
       echo "The username is already exist.";
   }
   else
   {  
      $sql = "SELECT * from user where fname='$fname' ";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if ($num > 0)
      {
         echo "This name is registered!";
      }
      else
      {  //write query string to insert data into user table
         $sql="insert into user(username,password,fname,lname) values('$name','$pwd','$fname','$lname')";

         $result = mysqli_query($conn,$sql);
         if($result)
         {
            echo "Registration successfully inserted";            
	         echo "<meta http-equiv='refresh' content='2;url=index.html'/>";            
         }
         else
         {
            echo "Ooops...There is some problem in the registration system.";
         }
      }
   }
?>