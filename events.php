
<?php
$page = $_SERVER['PHP_SELF'];
$sec  = "25";
?>
<!doctype html>
<html>
<head>
<meta http-equiv="refresh" content="<?php echo $sec;?>;URL='twitter.html'">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Clients</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/weather-icons.css">
    <link rel="stylesheet" href="./css/weather-icons-wind.css">
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
<body id="events">

    <div class="blue">
    <div class="row">
    <div class="col-md-6">
    <div class="sundancesun"> 
        <img class="logo" src="images/sundancelogo.png">
   </div>
    </div>
    <div class="col-md-6">
        <div class="text-center" id="title">
        <img class="img-responsive" src="images/welcome.png">
    </div>

    <div class="text-center" id="event-list"><?php

$url = 'https://www.googleapis.com/calendar/v3/calendars/i7r3fglq4muof8mqkpf6a4ig3c%40group.calendar.google.com/events?key=AIzaSyAAocH6YyopWpEfVD8XfGxqmCbaSUUmm3g';
$ch  = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 

$output = curl_exec($ch);

curl_close($ch);
//echo "<pre>";
$data = json_decode($output, true);


$jason = json_decode($output, true);

echo "<div id='list'>";



$today = date('Y-m-d');


$cnt = 0;



foreach ($jason['items'] as $item) {
    
    if (preg_match("/$today/", $item['start']['date'])) {
        
        if (preg_match('/welcome/', $item['summary'])) {
            echo str_replace("welcome", "", $item['summary']);
            $cnt++;
        }
    }
}

if ($cnt == 0) {
    echo "<script language='Javascript'>document.location.replace('twitter.html');</script>";
}


?>
   </div>
    </div>
    

    </div>

    
    </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="demo.js"></script>
    <script src="js/timeanddate.js"></script>
     <script type="text/javascript" src="js/twitterFetcher.js"></script>
    <script type="text/javascript" src="js/exampleUsage.js"></script>
</body>
</html>
