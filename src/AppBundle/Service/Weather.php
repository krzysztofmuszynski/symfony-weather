<?php

namespace AppBundle\Service;


class Weather
{
    public $api_url = 'http://api.openweathermap.org/data/2.5/weather?q=Warszawa,pl&units=metric&appid=f82dadc574f85cab41e3e12f10295cdc';

    public function fetchData( $return = 'temperatur') {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->api_url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch);

        return json_decode($output, true);
    }
}