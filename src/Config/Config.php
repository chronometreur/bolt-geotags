<?php

namespace Bolt\Extension\ChronoLabs\Geotags\Config;

/**
 * Class Config
 * @package Bolt\Extension\ChronoLabs\Geotags\Config
 * Config class that holds the configuration of the extension
 */
class Config
{
  
    private $countrycode;

    private $latitude;
 
    private $longitude;

    private $ort;

    private $regionalcode;

    /**
     * Config constructor.
     * @param $config
     * Setup the configuration from the config array
     */
    public function __construct($config)
    {
        $this->setCountrycode($config['countrycode']);
        $this->setLatitude($config['latitude']);
        $this->setLongitude($config['longitude']);
        $this->setOrt($config['ort']);
        $this->setRegionalcode($config['regionalcode']);
    }

    /**
     * @return string
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * @param string $countrycode
     * @return Config
     */
    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return Config
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param   string  $longitude
     * @return  Config
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return  string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param   string  $ort
     * @return  Config
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
        return $this;
    }

    /**
     * @return  string
     */
    public function getRegionalcode()
    {
        return $this->regionalcode;
    }

    /**
     * @param mixed $regionalcode
     * @return  Config
     */
    public function setRegionalcode($regionalcode)
    {
        $this->regionalcode = $regionalcode;
        return $this;
    }
}


