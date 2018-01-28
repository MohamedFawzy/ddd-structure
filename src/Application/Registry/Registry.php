<?php

namespace Domain\Driven\Design\Application\Registry;
/**
 * Class Registry
 * @package Domain\Driven\Design\Application\Registry
 * @see https://martinfowler.com/eaaCatalog/registry.html
 * @author mohamed fawzy
 */

class Registry
{

    /**
     * Registry array with key and value for each object we should keep it in application life cycle
     * @var array
     */
    private static $registry=[];


    final private function __construct(){}
    final private function __clone(){}

    /**
     * register key in application cycle.
     * @param string $key
     * @param $value
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function set(string $key, $value)
    {
        if(isset(self::$registry[$key])){
            throw new \InvalidArgumentException("There is already an entry key for key :". $key);
        }

        self::$registry[$key] = $value;
    }

    /**
     * @param string $key
     * @return mixed
     * @throws \Exception
     * @return  void
     */
    public static function get(string $key)
    {
        if(!array_key_exists($key, self::$registry)){
            throw new \Exception("There is not entry for key : ". $key);
        }

        return self::$registry[$key];
    }

}