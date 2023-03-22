<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6b6f454cf5b347266d1f8fc3f355b579
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

        spl_autoload_register(array('ComposerAutoloaderInit6b6f454cf5b347266d1f8fc3f355b579', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6b6f454cf5b347266d1f8fc3f355b579', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6b6f454cf5b347266d1f8fc3f355b579::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}