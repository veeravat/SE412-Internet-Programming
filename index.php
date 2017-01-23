<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="jumbotron">
        <div class="container">
            <h1>SE412 Internet Programming</h1>
            <p>All content on this site use for education only</p><br>
            <a class="btn btn-xl btn-primary" href="https://github.com/veeravat/SE412-Internet-Programming">Project Page</a>
        </div>
    </div>

    <div class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">

                <?PHP
                require_once('fn.php');
                $dirs = array_filter(glob('*'), 'is_dir');
                $dirs = array_values($dirs);
                array_walk($dirs,"walkWithContent");
                ?>
            </div>
        </div>
    </div>
</body>

</html>