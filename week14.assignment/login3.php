<?php
    session_start();
    $ses_userid =$_SESSION['ses_userid'];
    $ses_username = $_SESSION['ses_username'];
    if($ses_userid <> session_id() or  $ses_username ==""){
         echo "<meta charset='utf8'>";
         echo "คุณยังไม่ได้ทำการ Log in";
         echo "<meta http-equiv='refresh' content='2;URL=index.html' />";
     }    
     else 
    {
   $servername = 'mysql.senseproj.com' ;
   $username =  'cs319';
   $password =  'student';
   $dbname =    'cs319';

       // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_set_charset($conn,"utf8");
        $sql = "select * from user where username='$_SESSION[ses_username]'";
        $result = mysqli_query($conn,$sql);
        echo "<meta charset='utf8'>";
        echo "<h1>Page of Login3 : for test#3 of session work</h1>";
        while ($data = mysqli_fetch_assoc($result) ) 
        {
            echo "Username = " . $data[username]."<br />";
            echo "Firstname = ". $data[fname].", Lastname = ".
                                 $data[lname]."<br />";
        }
    }
?>
<html>
<body>

<a href="logout.php">Log out</a>
</body>
</html>
