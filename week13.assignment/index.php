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
                    <h1>List of registerd user</h1>
                    <hr>
                    <p>
                        <a href="W13_REGISFRM.html" class="btn btn-success btn-lg pull-right">+ Add new user</a>
                    </p>
                </div>
            </div>
            
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
<?php
require('connect.php');

$sql = "SELECT * FROM w13Workshop ";

$results = $conn->query($sql);

if ($results == true && $results->num_rows > 0) {
    // output data of each row
    $i=1;
    while($row = $results->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'. $i++ . '</td>';
        echo '<td>'. $row["firstname"]. '</td>';
        echo '<td>'. $row["lastname"]. '</td>';
        echo '<td>'. $row["username"]. '</td>';
        echo '<td>'. $row["password"]. '</td>';
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
