
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!doctype html>
<html>
<head>
 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='video.html'">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CLNDR Demo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/styles.css?rndstr=<%= getRandomStr() %>">
    <link rel="stylesheet" href="./css/bootstrap.css?rndstr=<%= getRandomStr() %>">
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
</head>
<body id="twitter">

    <div class="blue">
    <div class="row">
    <div class="col-md-6">
    <div class="sundancesun-white"> 
        <img class="logo" src="images/Sundance-Logo-Final_horz_CMYK.png">

   </div>
    </div>
    <div class="col-md-6 right">
    <h1>LATEST NEWS...</h1>
    <div id="example1"></div>
    

    </div>

    
    </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript" src="js/twitterFetcher.js?rndstr=<%= getRandomStr() %>"></script>
    <script type="text/javascript" src="js/exampleUsage.js?rndstr=<%= getRandomStr() %>"></script>
</body>
</html>

