<?php

namespace Domain\Driven\Design\Application\Service\Locator;

/**
 * Class ServiceLocator
 * @package Domain\Driven\Design\tests\Application\Service
 */
class ServiceLocator
{
    private static $config=null;

    public static $modules=[];

    private static function getConfig()
    {

        $config = array();

        foreach (self::$modules as $module){
            $config = array_merge($config, self::loadModuleConfig($module));
        }

        self::$config = $config;
    }

    /**
     * @param $path
     * @return mixed
     */
    private static function loadModuleConfig($path)
    {
        return include $path;
    }

    /**
     * @param $serviceName
     * @return mixed
     */
    public static function getService($serviceName)
    {
        if(self::$config==null){
            self::getConfig();
        }
        return call_user_func(self::$config[$serviceName]);
    }

}