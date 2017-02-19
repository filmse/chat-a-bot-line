<?php
/**
 * Created by IntelliJ IDEA.
 * User: Film
 * Date: 19/2/2560
 * Time: 8:38
 */
$access_token = 'jaLNN0ezUDVGh0tKjK/frPMiPigNYp2Utb+780f898TO/uFwL69cGWVfLhgFoJMf3s9BJ5+g83kJQWAPbXJf1cyIs1dTPIYPdsS25mhsSt/H8axWK4wIVhYjJneMLT38CEp+UWWjSOI173efbX7dtwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;