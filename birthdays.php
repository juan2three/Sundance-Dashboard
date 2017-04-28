
 	
PHP Beautifier
Beautify and format your PHP code
 
Here is your PHP code :
 	
 Source
 
See as Text 	

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<!doctype html>
<html>
<head>
<meta http-equiv="refresh" content="<?php
echo $sec ?>;URL='events.php'">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <title>Birthdays</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="./css/styles.css">
 <link rel="stylesheet" href="./css/bootstrap.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
 <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
 <script src="//use.typekit.net/hse2lqc.js"></script>
 <script>try{Typekit.load();}catch(e){}</script>
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
                    <img class="img-responsive" src="images/birthday.png">
                </div>

                <div class="text-center" id="event-list"><?php
$url = 'https://www.googleapis.com/calendar/v3/calendars/9hqtea8k8rlin07vfolg1oqs9g%40group.calendar.google.com/events?key=AIzaSyBChWJmNLkmntozxqjWvJVPplApVLEGzLc';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
$data = json_decode($output, true);
$jason = json_decode($output, true);
echo "<div id='list'>";
$today = date('Y-m-d');
$cnt = 0;

foreach($jason['items'] as $item)
	{
	if (preg_match("/$today/", $item['start']['date']))
		{
		if (preg_match('/Birthday:/', $item['summary']))
			{
			echo str_replace("Birthday:", "", $item['summary']);
			echo "<br />";
			$cnt++;
			}
		}
	}

if ($cnt == 0)
	{
	echo "<script language='Javascript'>document.location.replace('events.php');</script>";
	}

?>
               </div>
           </div>


       </div>


    </div>
</body>
</html>


 
 
Site Info  |  Disclaimer  |  Privacy 
Site Network  |  Add to favorites	
© 2009-2017 PHP Beautifier - All rights reserved 
 
Related terms: programming, coding, php, scripts, dev,
programmers, code, Zend, Pear, javascript
 
 
