<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guest list</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1>list of Guests</h1>
                    <hr>
                    <p>
                        <a href="STU_form.html" class="btn btn-success btn-lg pull-right">+ Add new guest</a>
                    </p>
                </div>
            </div>
            
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
<?php
require('STU_conDB.php');
$sql = "SELECT * FROM MyGuests";
$results = $conn->query($sql);

if ($results == true && $results->num_rows > 0) {
    // output data of each row
    $i=1;
    while($row = $results->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'. $i++ . '</td>';
        echo '<td>'. $row["firstname"]. '</td>';
        echo '<td>'. $row["lastname"]. '</td>';
        echo '<td>'. $row["email"]. '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
        echo '<td colspan="4"> No data</td>';
        echo '</tr>';
}

mysqli_close($conn);
?>

                    
                </tbody>
            </table>
        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
