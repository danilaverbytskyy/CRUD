<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit91c98dc005044c9b933308c4ba70974e
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

        spl_autoload_register(array('ComposerAutoloaderInit91c98dc005044c9b933308c4ba70974e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit91c98dc005044c9b933308c4ba70974e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit91c98dc005044c9b933308c4ba70974e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
