<?php
 date_default_timezone_set("Australia/Brisbane"); 
     require_once('geoplugin.class.php');
     $geoplugin = new geoPlugin();
     $geoplugin->locate();

//https://home.openweathermap.org/api_keys
$apiKey = "34a3780ac7a2726fee5e1ae1311646d2";
$cityId = $geoplugin->city;

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;


$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response); /* output of weather is stores in $data variable which is  we used in index.php file in green column of weather*/

$currentTime = time();
?>
 
<!doctype html>
<html>
<head>
<title>Life Of Plants</title>
    <link rel="shortcut icon" href="https://www.gardeningknowhow.com/gkh-16.png">

<style>


.weather-icon {
    vertical-align: middle;
    margin-right: 0;
    position: absolute;
    top: -20px;
    right: -20px;
    height: 65px;
    width: auto;
}

</style>

</head>
<body>


<!-- 
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
 -->

</body>
</html>
