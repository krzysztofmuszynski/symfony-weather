<?php


namespace AppBundle\Repository;

use AppBundle\Entity\WeatherQuery;
use AppBundle\Service\Weather;
use Doctrine\ORM\EntityRepository;


class WeatherRepository extends EntityRepository
{
    public function getCurrentTemperature()
    {
        $get_last_row = $this->getEntityManager()->getRepository(WeatherQuery::class)->findOneBy([], ['id' => 'DESC']);
        return $get_last_row;
    }

    public function updateWeatherData()
    {

        $weather = new Weather();
        $weatherData = $weather->fetchData();

        $em = $this->getEntityManager();

        $updateWeather = new WeatherQuery();
        $updateWeather->setTemperature($weatherData["main"]["temp"]);
        $updateWeather->setMaxTemp($weatherData["main"]["temp_max"]);
        $updateWeather->setMinTemp($weatherData["main"]["temp_min"]);
        $updateWeather->setPressure($weatherData["main"]["pressure"]);
        $updateWeather->setDateTime(new \DateTime('now'));

        $em->persist($updateWeather);

        $em->flush();

        return 'Saved new product with id '.$updateWeather->getId();
    }
}

