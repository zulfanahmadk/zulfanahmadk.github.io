<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbc7193be246cbb19e30c4bdd9b32ec2b
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbc7193be246cbb19e30c4bdd9b32ec2b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbc7193be246cbb19e30c4bdd9b32ec2b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbc7193be246cbb19e30c4bdd9b32ec2b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}