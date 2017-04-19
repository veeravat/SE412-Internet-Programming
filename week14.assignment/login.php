<?php
   //start session
   session_start();
   //declare 4 variables to keep server name, user, pwd and dbname
   $servername = 'mysql.senseproj.com' ;
   $username =  'cs319';
   $password =  'student';
   $dbname =    'cs319';

   // Create connection using mysqli_connect();
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
  }
   //get datas both of user name and user password from index.html
   $userin = $_POST['username'];
   $pwdin = $_POST['password'];

   //use mysqli_set_charset() to set character of utf8
   mysqli_set_charset('uft8');

   //set query strint (SQL) 
   $sql = "select * from user where username='".$userin."' and password='".$pwdin."'";

   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);
   if($num <= 0){
       echo "Your account are not found/You are not register.Please register before login.!!!";
       echo "<meta http-equiv='refresh' content='4;URL=W13_regisFRM.php'/>";
   }
   else
   {
      //set session variable to keep session id and username
      $_SESSION['ses_userid'] = session_id();
      $_SESSION['ses_username'] = $userin;
      
      echo "<meta charset='utf8'>";      
      while($data = mysqli_fetch_assoc($result)){
        echo "User name: " .$data['username'] ."<br>";
        echo "Your name: " .$data['fname']. " ".$data['lname'];
      }
      echo "<meta http-equiv='refresh' content='4;URL=login2.php'/>";
   }
?>