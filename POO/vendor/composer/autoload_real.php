<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitee08b7a16e2fc029907d5941a6dac026
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

        spl_autoload_register(array('ComposerAutoloaderInitee08b7a16e2fc029907d5941a6dac026', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitee08b7a16e2fc029907d5941a6dac026', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitee08b7a16e2fc029907d5941a6dac026::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
