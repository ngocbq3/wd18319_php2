<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit67dce98d4d9ae3b5959db63611284c69
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

        spl_autoload_register(array('ComposerAutoloaderInit67dce98d4d9ae3b5959db63611284c69', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit67dce98d4d9ae3b5959db63611284c69', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit67dce98d4d9ae3b5959db63611284c69::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
