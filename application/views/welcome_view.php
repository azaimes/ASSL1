<br>
<br>

<div class="container">
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/872a1eab6cc42425/forecast/geolookup/conditions/q/autoip.json");
  $parsed_json = json_decode($json_string);
  
  
  $location_full = $parsed_json->{'current_observation'}->{'display_location'}->{'full'};
  echo "<h2> ${location_full} </h2> <br>";
  $weather_icon = $parsed_json->{'current_observation'}->{'icon'};
  $weather_icon_url = $parsed_json->{'current_observation'}->{'icon_url'};
  echo "<img src='${weather_icon_url}' /> ${weather_icon}<br><br>";

  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  $weather_feelslike_f = $parsed_json->{'current_observation'}->{'feelslike_f'};
  echo "Current temperature is: ${temp_f} &deg;F\n <br>";
  echo "Feels like: ${weather_feelslike_f}&deg;F <br>";

  $weather = $parsed_json->{'current_observation'}->{'weather'};
  echo " Skies: ${weather} <br>";

  $weather_relative_humidity = $parsed_json->{'current_observation'}->{'relative_humidity'};
  echo "Relative humidity: ${weather_relative_humidity} <br>";
  
  $weather_wind_dir = $parsed_json->{'current_observation'}->{'wind_dir'};
  $weather_wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
  echo "Wind: ${weather_wind_mph} MPH out of the ${weather_wind_dir} <br>";


?>

</div>
<div class="container">
<hr>
<h4><?php echo anchor('user/logout', 'Logout'); ?></h4>


</div>

