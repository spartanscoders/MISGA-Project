<html>
<head>
    <title>Course Selection</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .box {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container box">
    <br/>
    <br/>
    <h3 align="center">Lessions Objectives</h3>
    <?= $lesson_desc ?>
    <br/>
    <?= $vid_url ?>
    <br/>
    <video width="400" controls>
        <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
        Your browser does not support HTML5 video.
    </video>
    <div class="form-group">

    </div>
    <br/>
    <div class="form-group">

    </div>
    <br/>
    <div class="form-group">

    </div>
</div>
</body>
</html>

