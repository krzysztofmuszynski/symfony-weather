<?php

namespace AppBundle\Controller;


use AppBundle\Entity\WeatherQuery;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Service\Weather;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function showIndex(Weather $weather)
    {
        $current_weather_data = $this->getDoctrine()->getRepository(WeatherQuery::class)->getCurrentTemperature();

        $slogan = "Aktualna pogoda dla Warszawy";
        $second_slogan = "na dzień ";
        return $this->render("default/index.html.twig", [
            "main_slogan"=>$slogan,
            "second_slogan"=>$second_slogan,
            'weather_data' => $current_weather_data,
        ]);
    }

    /**
     * @Route("/fetchWeatherData", name="fetchweather")
     */
    public function fetchDataFromApi()
    {

        $this->getDoctrine()->getRepository(WeatherQuery::class)->updateWeatherData();

//        return new \Symfony\Component\HttpFoundation\Response('<h1 id="message">Data successfully fetched.</h1>');
        return $this->render("default/fetchWeatherData.html.twig", [
            "message"=> "Data successfully fetched."
        ]);
    }


}