<?php

require('STU_conDB.php');
extract($_POST);
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('".$conn->real_escape_string($fname)."', 
                '".$conn->real_escape_string($lname)."', 
                '".$conn->real_escape_string($email)."')";


if ($conn->query($sql) === true) {
    echo '<meta http-equiv="refresh" content="5; url=index.php" />';
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
