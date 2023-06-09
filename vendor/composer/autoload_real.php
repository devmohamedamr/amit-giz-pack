<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb1a4e8dc21358dc18664340789d5d95b
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

        spl_autoload_register(array('ComposerAutoloaderInitb1a4e8dc21358dc18664340789d5d95b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb1a4e8dc21358dc18664340789d5d95b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb1a4e8dc21358dc18664340789d5d95b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
