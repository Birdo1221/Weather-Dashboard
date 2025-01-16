<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
  <link rel="icon" type="image/x-icon" href="Birdo.webp">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="door left"></div>
    <div class="door right"></div>
  </div>
  <div class="content">
  <nav>
 </nav>
     <div class="container">
        <h1>Current Weather</h1>
        <p> <strong>Weather Description:</strong> <?php echo $_GET['description'] ?></p>
        <p> <strong>Temperature:</strong> <?php echo $_GET['temperature'] ?> &deg;C (Feels like <?php echo $_GET['temperature_feels'] ?> &deg;C)</p>
        <p> <strong>Humidity:</strong> <?php echo $_GET['humidity'] ?> %</p>
        <p> <strong>Pressure:</strong> <?php echo $_GET['pressure'] ?> hPa</p>
        <p> <strong>Wind Speed:</strong> <?php echo $_GET['wind_speed'] ?> m/s</p>
        <p> <strong>Wind Direction:</strong> <?php echo $_GET['wind_direction']?>&deg;</p>
        <p> <strong>Max Temperature:</strong> <?php echo $_GET['temperature_max'] ?>&deg;C</p>
        <p><strong>Min Temperature:</strong> <?php echo $_GET['temperature_min'] ?>&deg;C</p>
        <p><strong>Wind Gust:</strong> <?php echo $_GET['wind_gust'] ?>&deg;</p>
        <a class="back-button" href="/">Back to Home</a>
    </div>

  <footer>
  <p class="banner-text">&copy;Birdo/2024:/-/Weather/Results</p>
  </footer>
  </div>
  <script src="script.js"></script>
</body>
<style>
.container {
    background:rgba(55, 55, 55, 0.878);
    font-family: 'Sometype Mono', monospace;  
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
    text-align: center;
    color: snow;
}

.banner-top {
    color: snow; 
    text-align: center;
    position: fixed;
    top: 0;
    background-color: #333;
    width: 100%;
    font-family: 'Sometype Mono', monospace;
}

.banner-bottom {
    color: snow;
    text-align: center;
    position: fixed;
    bottom: 0;
    background-color: #333;
    width: 100%;
    font-family: 'Sometype Mono', monospace;
    height: 5%;

}

h1 {
    text-align: center;
    color: rgba(255, 255, 255, 0.605);
    font-weight: bold;
    font-family: 'Sometype Mono', monospace;

}

#weatherData {
    text-transform: capitalize;
    text-align: center;
    padding: 20px;
    font-family: 'Sometype Mono', monospace;
    color: snow;
    padding: 8px;
    border-radius: 8px;
    /*background-color: rgba(55, 55, 55, 0.508);*/
}

h2 {
    font-size: 25px;
    font-family: 'Sometype Mono', monospace;
    color: aliceblue;
}

.back-button{
    font-family: 'JetBrains mono',monospace;
    position: relative;
    padding: 8px;
    border-radius: 8px;
    background: dodgerblue;
    color: aliceblue;
    text-transform: capitalize;
    border-color: white;
    box-shadow: 0px 0px 2px 0px black;
    top: 10px;


}

.back-button:hover{
    background-color: rgb(22, 108, 194);
    color: whitesmoke;
    box-shadow: 0px 2px 4px 0px black;
}

.back-button:active{
    background-color: #ff5f5f;
    color: white;
    box-shadow: 0px -2px 4px 0px black;

}

h3{
    text-align: center;
    text-transform: capitalize;

}

.weather-button{
    font-family: 'JetBrains mono',monospace;
    position: relative;
    padding: 8px;
    border-radius: 8px;
    background: dodgerblue;
    color: snow;
    text-transform: capitalize;
    border-color: white;
    box-shadow: 0px 0px 2px 0px black;
}

.weather-button:hover{
    background-color: rgb(22, 108, 194);
    color: whitesmoke;
    box-shadow: 0px 2px 4px 0px black;
}

.weather-button:active{
    background-color: #1e7c33;
    color: white;
    box-shadow: 0px -2px 4px 0px black;

}
.weather-text{
    text-transform: capitalize;
    font-weight: bold;
    color: black;

}
.banner-uk{
    text-align: right;
    color: white;
    position: relative;
    bottom: 50px;
    right: 20px;
}

.weather-select {
    font-family: 'JetBrains mono', monospace;
    padding: 8px;
    border-radius: 8px;
    background: dodgerblue;
    color: snow;
    border: 1px solid white;
    box-shadow: 0px 0px 2px 0px black;
    margin-bottom: 10px;
}

.weather-select:hover {
    color: whitesmoke;
    box-shadow: 0px 2px 4px 0px black;
}

.weather-select:active {
    color: white;
    box-shadow: 0px -2px 4px 0px black;
}

.disabledOption {
    color: white;
    background-color:  rgb(20, 52, 84);
}
</style>
