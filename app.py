from flask import Flask, render_template, request, jsonify
import requests

app = Flask(__name__)

# Define the OpenWeatherMap API key e.g 'h76t4tb40hb9jytrh621j7bstj49jyj'
api_key = 'Your_WeatherMap_Api_Key'
#'Your_WeatherMap_Api_Key'

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/weather')
def get_weather():
    postcode = request.args.get('postcode')

    if not postcode:
        return render_template('index.html', error='Postcode parameter is required')

    url = f'https://api.openweathermap.org/data/2.5/weather?zip={postcode},GB&appid={api_key}&units=metric'

    try:
        response = requests.get(url)
        response.raise_for_status() 
        data = response.json()

        if data.get('code') == '404':
            return render_template('index.html', error='Invalid postcode')

        # Get the relevant weather data from the api request
        city = data['name']
        country = data['sys']['country']
        weather_description = data['weather'][0]['description']
        temperature = data['main']['temp']
        temperature_feels = data['main']['feels_like']
        humidity = data['main']['humidity']
        pressure = data['main']['pressure']
        wind_speed = data['wind']['speed']
        wind_direction = data['wind']['deg']
        temperature_max = data['main']['temp_max']
        temperature_min = data['main']['temp_min']
        wind_gust=data['wind']['gust']
        # Make sure to sent the data to the weather.html page as well as 
        # sending the weather template with the data me want
        return render_template('weather.html', city=city, country=country, description=weather_description,
                               temperature=temperature, humidity=humidity, pressure=pressure,
                               wind_speed=wind_speed, wind_direction=wind_direction, temperature_feels=temperature_feels,
                               temperature_min=temperature_min,temperature_max=temperature_max, wind_gust=wind_gust)

    except requests.RequestException as e:
        return render_template('index.html', error=f'Request to OpenWeatherMap API failed: {str(e)}')

if __name__ == '__main__':
    app.run(debug=True)
