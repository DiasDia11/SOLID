<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInited0d13132ed6bf33ec0098839e691363
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInited0d13132ed6bf33ec0098839e691363', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInited0d13132ed6bf33ec0098839e691363', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInited0d13132ed6bf33ec0098839e691363::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
