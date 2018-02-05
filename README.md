# Symfony Weather

This is small symfony project for testing purposes created in Symfony 3.4. 

### Synopsis

In this application I am using openweather api to fetch some data and save in the database to display information about actual weather in the browser.

### Prerequisities

You need to install PHP 5.6.31, Symfony 3.4 and Composer to run this application.
All the depandencies You will find in the composer.json file in the folder of the application.

### Installing

Create project folder and copy inside all the files from repository.
After that use command line tool and type "composer install".

## Starting server


After installing app just type in the application folder using command line tool "php bin/console server:run" to start application on the localhost:8000.
When server is running change in browser URL address to "http://localhost:8000/fetchWeatherData" to save first data in the database.
After that application will start running.

## API Reference

Documentation link for OpenWeather API: https://openweathermap.org/api

## Built With

* AppBundle
* Twig
* Doctrine ORM/DBAL
* Annotations

## Author

* **Krzysztof Muszyński** - [Krzysztof Muszyński](https://github.com/krzysztofmuszynski)

## License

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!
