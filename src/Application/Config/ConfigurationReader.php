<?php

namespace Domain\Driven\Design\Application\Config;
use Domain\Driven\Design\Application\Exception\InvalidArgumentException;
use Domain\Driven\Design\Application\Exception\LengthException;
use Domain\Driven\Design\Application\Exception\NotFoundException;

/**
 * Class ConfigurationReader
 * @package Domain\Driven\Design\Application\Config
 * Read configuration for system
 */
class ConfigurationReader
{


    private static $config=[];

    /**
     * @var string
     */
    private static $language;


    public static function setConfig(array $config)
    {
        if(empty($config)){
            throw new InvalidArgumentException("parameter config cannot be empty");
        }

        if(!is_array($config)){
            throw new InvalidArgumentException("parameter config must be an array");
        }elseif (count($config)==0){
            throw new LengthException("configuration array is empty");
        }

        self::$config = $config;
    }


    public static function getConfig(string $configKey)
    {
        if(empty($configKey)){
            throw new InvalidArgumentException("config key cannot be empty");
        }

        if(!is_string($configKey)){
            throw new InvalidArgumentException("parameter config key must be string");
        }

        if(array_key_exists($configKey, self::$config)){
           return self::$config[$configKey];
        }else{
            throw new NotFoundException("parameter config key ". $configKey. " cannot be found in configuration");
        }

    }


    /**
     * set language in configuration application
     * @param string $language
     */
    public static function setCurrentLanguage(string $language)
    {
        self::$language = $language;
    }


    /**
     * get current language for application configuration
     * @return string
     */
    public static function getCurrentLanguage(): string
    {
        return self::$language;
    }




}