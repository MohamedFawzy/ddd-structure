<?php

namespace Domain\Driven\Design\Application\Service\Locator;

/**
 * Class ServiceLocator
 * @package Domain\Driven\Design\tests\Application\Service
 */
class ServiceLocator
{
    protected static $config=null;

    protected static $modules=[];

    private static function getConfig()
    {

        $config = array();

        foreach (static::$modules as $module){
            $config = array_merge($config, self::loadModuleConfig($module));
        }

        self::$config = $config;
    }

    /**
     * @param $path
     * @return mixed
     */
    protected static function loadModuleConfig($path)
    {
        return include "/var/www/html/".$path;
    }

    /**
     * @param $serviceName
     * @return mixed
     */
    public static function getService($serviceName)
    {
        if(static::$config==null){
            self::getConfig();
        }
        return call_user_func(self::$config[$serviceName]);
    }

}