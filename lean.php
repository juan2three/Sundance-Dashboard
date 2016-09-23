
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='twitter.php'">
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
        <img class="logo" src="images/sundancelogo.png">

   </div>
    </div>    
         <?php
$now = date('F');
echo "<div class='col-md-6 right names'>
        <div class='text-center' id='title'>
        <h3>$now's</h3>
        <h1 class='title'>Continuous<br>
        Improvement </h1>
        <h2>winners</h2>

         <div>";

$lines = file('winners.txt');
echo "<div class='text'>";
 foreach ($lines as $number) {
    $name = explode('|', $number);
    echo "<div class='name'> $name[0] </div>";
    echo "<br>";
    echo "<div class='idea'> $name[1] </div>";
     echo "<br>";
 }

echo "</div>
<div class='submit'>Submit your ideas to Dave</div>"
?>
    </div>

    <div class="text-center" id="event-list">
    </div>
    </div>
    

    </div>

    
    </div> 
</body>
</html>

