<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 11</title>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .spacing {
            margin-bottom: 20px;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <br><br>
    <div class="container">
                    <?php 
                function bmi($w,$h)
                {
                    $h = $h/100;
                    $bmi = $w/pow($h,2);
                    return round($bmi*100)/100;
                }
            if(isset( $_POST['name'])){
            ?>
            <div class="showdata">
                <div class="jumbotron">
                    <div class="container">
                        <?php
                            extract($_POST);
                            echo "<h1>PHP Homework </h1>";
                            $bmi = bmi($weight,$height);
                            echo "<br><p>Name : ".$name." </p>";
                            echo "<p>Email : ".$email." </p>";
                            echo "<p>Gender : ".$gender." </p>";
                            echo "<p>Weight : ".$weight." ";
                            echo "Height : ".$height." </p>";
                            echo "<p>BMI =  $bmi </p><br>";
                        ?>
                    </div>
                    
                    <a onclick="back()" type="button" class="btn btn-large btn-block btn-info">< < Back</a>
                    
                </div>
            </div>
            <?php } ?>
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 inputdata">
                <form name="myform" id="myform" action="" method="POST" role="form" >
                    <legend>Personal Information</legend>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <p>Name :</p>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="name" class="form-control" id="" placeholder="input your name here" required>
                        </div>
                    </div>
                    <div class="spacing"> </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <p>Email :</p>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="email" name="email" class="form-control" id="" placeholder="xxxxx@xxx.com" required>
                        </div>
                    </div>
                    <div class="spacing"> </div>
                    
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <p>Height :</p>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="height" class="form-control" id="" placeholder="xx" required>
                        </div>
                    </div>
                    <div class="spacing"> </div>                    
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <p>Weight :</p>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="weight" class="form-control" id="" placeholder="xx" required>
                        </div>
                    </div>
                    <div class="spacing"> </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <p>Gender :</p>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="input1/(\w+)/\u\1/g" value="male" required>
                                    Male
                                </label> <label>
                                    <input type="radio" name="gender" id="input1/(\w+)/\u\1/g" value="female" >
                                    Female
                                </label> <label>
                                    <input type="radio" name="gender" id="input1/(\w+)/\u\1/g" value="other" >
                                    Other
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="spacing"> </div>
<button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            </div>
        </div>
        <div class="spacing"> </div>
        <div class="spacing"> </div>
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="result" style="display: none">
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Display personal's data</h3>
                        </div>
                        <div class="panel-body result-data">
                            <!--//result//-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        var data = document.getElementsByClassName('showdata');
        if (data.length > 0) {
            $(".showdata").show();
            $(".inputdata").hide();
        }

        function back(){
            $(".showdata").hide();
            $(".inputdata").show();
        }
    </script>
</body>

</html>