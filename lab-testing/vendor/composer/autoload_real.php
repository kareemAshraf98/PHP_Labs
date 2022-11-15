<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit86eaffe68a3de0c3758fb5f5f7ca3af3
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

        spl_autoload_register(array('ComposerAutoloaderInit86eaffe68a3de0c3758fb5f5f7ca3af3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit86eaffe68a3de0c3758fb5f5f7ca3af3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit86eaffe68a3de0c3758fb5f5f7ca3af3::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit86eaffe68a3de0c3758fb5f5f7ca3af3::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire86eaffe68a3de0c3758fb5f5f7ca3af3($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire86eaffe68a3de0c3758fb5f5f7ca3af3($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
