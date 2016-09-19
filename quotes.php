
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!doctype html>
<html>
<head>
   <!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">!-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CLNDR Demo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
        <script src="//use.typekit.net/hse2lqc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.typekit.net/gyo8gkt.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body id="quotes">

    <div class="blue">
    <div class="row">
    <div class="col-md-6">
    <div class="sundancesun"> 
        <img class="logo" src="images/sundancelogo.png"><img class='close-quotes' src='images/close-quotes.png'>
        <img class='open-quotes' src='images/open-quotes.png'>

   </div>
    </div>
    <div class="col-md-6 right">
        <div class="text-center" id="title">
        <h1>From the desk of</h1>
        <h2>John Ruggieri</h2>
         <div>
         <?php


$lines = file('quotes.JSON');
echo "<div id='quotebox'><div class='text'>
 <p class='lead'>";
echo $lines[array_rand($lines)];
echo "</p></div></div>"
?>
    </div>

    <div class="text-center" id="event-list">
    </div>
    </div>
    

    </div>

    
    </div> 
</body>
</html>

