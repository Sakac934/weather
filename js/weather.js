document.getElementById('city').addEventListener('click', function(){
document.getElementById('city').value="";
});
document.getElementById('button2').addEventListener('click', function(){
var cName = document.getElementById('city').value;
var name = cName.charAt(0).toUpperCase() + cName.slice(1);
document.getElementById('city-tag').innerHTML = name;
console.log(cName);
});
document.getElementById('button1').addEventListener('click', function(){
document.getElementById('label-cw').classList.remove('visable');
document.getElementById('label-temperture').classList.remove('visable');
document.getElementById('label-humidity').classList.remove('visable');
document.getElementById('label-description').classList.remove('visable');
document.getElementById('map').classList.remove('visable');
document.getElementById('icon').classList.remove('visable');
document.getElementById('label-wind').classList.remove('visable');
        var city = document.getElementById('city').value;
     fetch('http://api.openweathermap.org/data/2.5/weather?q='+city+'&APPID=d65d85d92a3b330454ffa21c6e04181a')
        .then(
            function(response){
                response.json().then(function(data){
        var  longitude = (data.coord.lon);
        var  latitude = (data.coord.lat);
        var mapUrl = "http://maps.google.com/maps?q=" + latitude + ", " + longitude + "&z=15&output=embed"
        var cityName = data.name;
        var temp = Math.round((data.main.temp - 273.15)) + String.fromCharCode(176) + "C";
        var description1 = ((data.weather)[0]).main + ":"
        var description2 = ((data.weather)[0]).description;
        var humidity = (data.main).humidity + "%";
        var iconcode = ((data.weather)[0]).icon;
        var wind = (data.wind).speed + " km/h";
        console.log(iconcode);
        var weatherIcon = "http://openweathermap.org/img/w/" + iconcode + ".png"

                console.log(data);
                document.getElementById('display-wind').innerHTML = wind;
                document.getElementById('display-temp').innerHTML = temp;
                document.getElementById('label-description').innerHTML = description1;
                document.getElementById('display-description').innerHTML = description2;
                document.getElementById('display-humidity').innerHTML = humidity;
                document.getElementById('coord').src= mapUrl;
                document.getElementById('icon').src= weatherIcon;
            });
        }
    );
})
