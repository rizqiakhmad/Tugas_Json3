<?php
	$json_string2 = file_get_contents("http://api.wunderground.com/api/003d598e9401bd84/conditions/q/IA/mugas.json");
  $json_string1 = file_get_contents("http://api.wunderground.com/api/003d598e9401bd84/astronomy/q/IA/mugas.json");
  $json_string1 = file_get_contents("http://api.wunderground.com/api/003d598e9401bd84/forecast/q/IA/mugas.json");
  $parsed_json = json_decode($json_string1);
  $parsed_json = json_decode($json_string2);
  $parsed_json = json_decode($json_string3);
  
  $location = $parsed_json->{'location'}->{'city'};
  $astronomi = $parsed_json->{'current_time'}->{'sunrise'}->{'hour'};
  $astronomi2 = $parsed_json->{'current_time'}->{'sunrise'}->{'hour'}->{'minute'};
  $lokasi = $parsed_json->{'current_observation'}->{'display_location'}->{'city'};
  $city = $parsed_json->{'current_observation'}->{'display_location'};
  
  echo "Keadaan Astronomi Di Kota Semarang ${lokasi} : ${display_location}\n";
  echo "Matahari Tebit Pada Pukul ${astronomi}: ${hour}\n";
  echo "Matahari Terbenam Pada Pukul ${astronomi2}: ${minute}\n";
  echo ""
  
  
?>