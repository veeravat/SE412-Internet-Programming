<?php

require('connect.php');
extract($_POST);

$sql = "INSERT INTO w13Workshop (firstname, lastname, username, password)
        VALUES ('".$conn->real_escape_string($fname)."', 
                '".$conn->real_escape_string($lname)."', 
                '".$conn->real_escape_string($username)."', 
                '".$conn->real_escape_string($password)."')";

if ($conn->query($sql) === TRUE) {
    echo '<meta http-equiv="refresh" content="2; url=index.php" />';
    echo "New record created successfully redirect in 2 second";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
