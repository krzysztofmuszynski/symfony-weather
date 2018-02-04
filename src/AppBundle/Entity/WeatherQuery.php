<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="weatherquery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeatherRepository")
 */

class WeatherQuery
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $temperature;

    /**
     * @ORM\Column(type="integer")
     */
    private $pressure;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_temp;

    /**
     * @ORM\Column(type="integer")
     */
    private $min_temp;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_time;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param mixed $pressure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    /**
     * @return mixed
     */
    public function getMaxTemp()
    {
        return $this->max_temp;
    }

    /**
     * @param mixed $max_temp
     */
    public function setMaxTemp($max_temp)
    {
        $this->max_temp = $max_temp;
    }

    /**
     * @return mixed
     */
    public function getMinTemp()
    {
        return $this->min_temp;
    }

    /**
     * @param mixed $min_temp
     */
    public function setMinTemp($min_temp)
    {
        $this->min_temp = $min_temp;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->date_time;
    }

    /**
     * @param mixed $date_time
     */
    public function setDateTime($date_time)
    {
        $this->date_time = $date_time;
    }

}