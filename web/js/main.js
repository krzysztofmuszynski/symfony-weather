var APIKEY = "f82dadc574f85cab41e3e12f10295cdc";

var API = "http://api.openweathermap.org/data/2.5/weather?q=Warszawa,pl&units=metric&appid=" + APIKEY;

    // fetching data from openweather api
    $.getJSON(API ,function(weatherData){
    console.log(weatherData);
    var outputTemp = weatherData.main.temp,
    outputPressure = weatherData.main.pressure,
    outputHumidity = weatherData.main.humidity,
    outputTempMin = weatherData.main.temp_min,
    outputTempMax = weatherData.main.temp_max;

    //setting up actual date to display on the page
    var date = new Date();
    var month = (date.getMonth() + 1) < 10 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1;
    var day = date.getDate() < 10 ? "0" + date.getDate() : date.getDate();
    var year = date.getYear() + 1900;

    var dateOutput = "";
    dateOutput += "na dzień " + day + "/" + month + "/" + year;

    var dateContainer = document.getElementById('date_container');
    dateContainer.innerHTML = dateOutput;

    //Injecting data from api into html code
    var output = '';

    output += '<div class="col-xs-12 col-sm-2 col-sm-offset-1"> Temperatura ' + outputTemp + '&deg;C </div>';
    output += '<div class="col-xs-12 col-sm-2"> Ciśnienie ' + outputPressure  + 'hPa </div>';
    output += '<div class="col-xs-12 col-sm-2"> Wilgotność ' + outputHumidity  + '&#37 </div>';
    output += '<div class="col-xs-12 col-sm-2"> Temperatura min: ' + outputTempMin  + '&deg;C </div>';
    output += '<div class="col-xs-12 col-sm-2"> Temperatura max: ' + outputTempMax  + '&deg;C </div>';

    var dataContainer = document.getElementById('data_container');
    dataContainer.innerHTML = output;

});