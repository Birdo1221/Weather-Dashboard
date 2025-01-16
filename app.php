<?php
$api_key = 'give Open weather map API here';
$url = 'https://api.openweathermap.org/data/2.5/weather';

$postcode = $_GET['postcode'];
$country = $_GET['country'];

$params = [
    'zip' => $postcode . ',' . $country,
    'appid' => $api_key,
    'units' => 'metric'
];

$url .= '?' . http_build_query($params);
$response = file_get_contents($url);
$data = json_decode($response, true);

if ($data['cod'] == '404') {
    header('Location: index.php?error=Invalid postcode');
    exit();
}

header('Location: weather.php?' . http_build_query([
    'city' => $data['name'],
    'country' => $data['sys']['country'],
    'description' => $data['weather'][0]['description'],
    'temperature' => $data['main']['temp'],
    'temperature_feels' => $data['main']['feels_like'],
    'humidity' => $data['main']['humidity'],
    'pressure' => $data['main']['pressure'],
    'wind_speed' => $data['wind']['speed'],
    'wind_direction' => $data['wind']['deg'],
    'temperature_max' => $data['main']['temp_max'],
    'temperature_min' => $data['main']['temp_min'],
    'wind_gust' => $data['wind']['gust']
]));
?>
