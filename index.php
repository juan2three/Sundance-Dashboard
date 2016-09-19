
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>; URL='birthdays.php'">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Weather</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/weather-icons.css">
    <link rel="stylesheet" href="./css/weather-icons-wind.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
        <script src="//use.typekit.net/hse2lqc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://use.typekit.net/gyo8gkt.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body id="main">

    <div class="blue">
    <div class="row">
    <div class="col-md-6">
    <div class="sundancesun"> 
        <img class="logo" src="images/sundancelogo.png">
   </div>
    </div>
    <div class="col-md-6">
        <div class="text-center" id="time">
        
    </div>
    <div class="text-center" id="date">
        </div>
    <div class="text-center" id="weather"><?php

$url = 'http://api.openweathermap.org/data/2.5/weather?q=Orlando&appid=e489a1082a7bba282ae688164b05ebe1&units=imperial';
 $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    //echo "<pre>";
    $data = json_decode($output,true);


$jason = json_decode($output,true);
echo "<div class='weather-number'>";
echo (round("".$jason['main']['temp']));
echo "°";
if (preg_match('/cloud/', $jason['weather'][0]['description'])) {
    echo "<i class='wi wi-day-cloudy'>&nbsp;</i></div>";}
elseif (preg_match('/rain/', $jason['weather'][0]['description'])) {
    echo "<i class='wi wi-day-rain'>&nbsp;</i></div>";}
elseif (preg_match('/thunderstorm/', $jason['weather'][0]['description'])) {
    echo "<i class='wi wi-day-thunderstorm'>&nbsp;</i></div>";}
elseif (preg_match('/drizzle/', $jason['weather'][0]['description'])) {
    echo "<i class='wi wi-sprinkle'>&nbsp;</i></div>";}
elseif (preg_match('/clear sky/', $jason['weather'][0]['description'])) {
    echo "<i class='wi wi-day-sunny'>&nbsp;</i></div>";}
else{echo "<i class='wi wi-alien'>&nbsp;</i></div>";}
echo "<span id='weather-description'>".$jason['weather'][0]['description'];   
echo "</span>";
?>
    </div>
    </div>
    

    </div>

    
    </div> <!--
        <div class="row bottom">
        <div class="col-md-12">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 col-md-offset-4">
        <div id="example1"></div>
        </div>
        </div>
       </div>
       <div class="event-listing">
             
            </div>
    </div>
</div>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/timeanddate.js"></script>
</body>
</html>

