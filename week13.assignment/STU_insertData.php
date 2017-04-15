<?php

require('STU_conDB.php');
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('สิรินธร', 'จียาศักดิ์', 'sirinthorn@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
