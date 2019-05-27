<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Weather Forecast</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    </head>
    <body>
        <div>
            <img class="weather-logo" src="./images/weatherword.png" alt="weatherword"/>
        </div>
        <div class="weather-top-button">
             <input type="text"  id="city" name="city" value="city">
             <button id="button2" type="submit" class="btn btn-primary">click</button>
        </div>
        <h1 id="city-tag"></h1>
        <div class="get-weather">
            <button id="button1" type="submit" class="btn btn-primary">Get weather</button>
        </div>
        <div class="table-weather">
            <table cellpadding="20">
                <tr>
                    <td colspan= 3 id="label-cw" class="visable">Currant weather</td>
                    <td id="map" class="visable" rowspan="4" colspan="3">
                        <iframe id="coord" src=""
                             width="360" height="270" frameborder="0" style="border:0">
                        </iframe>
                    </td>
                </tr>
                <tr>
                    <td id="label-temperture" class="visable">Temperature:</td>
                    <td><div id="display-temp"></div></td>
                </tr>
                <tr>
                    <td id="label-humidity" class="visable">Humidity:</td>
                <td><div id="display-humidity"></div></td>
                </tr>
                <tr>
                    <td id="label-wind" class="visable">Wind speed:</td>
                <td><div id="display-wind"></div></td>
                </tr>
                <tr>
                    <td id="label-description" class="visable"></td>
                    <td><div id="display-description"></div></td>
                    <td><div><img class="visable" id="icon" src=""></div></td>
                </tr>
            </table>
        </div>
        <p class="design-weather">● ● ● Pressure ● ● ● Temperature ● ● ● Wind ● ● ● Cloud ● ● ● Precipitation ● ● ● Rain ● ● ● Snow</p>
        <footer>
               &copy Todays Weather 2019
        </footer>
         <script src="js/weather.js"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
