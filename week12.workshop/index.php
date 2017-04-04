<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 12 Workshop</title>

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
	
	<div class="jumbotron">
		<div class="container">
	<?php
		echo "<h1>PHP WORKSHOP #1</h1>";
		function showname($fname,$lname)
		{
			$name = $fname. " " . $lname;
			return $name;
		}
		function bmi($w,$h)
		{
			$h = $h/100;
			$bmi = $w/pow($h,2);
			return round($bmi*100)/100;
		}
		$fullname = showname("Veeravat","Jeensuksang");
		$bmi = bmi(120,178);
		echo "<br><p>My name is $fullname </p>";
		echo "<p>My BMI is $bmi </p><br>";

	?>
	</div>
	</div>
	
    


</body>

</html>
