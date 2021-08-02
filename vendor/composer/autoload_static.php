<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dffdd6d730b5f50408243fa873b1f50
{
    public static $files = array (
        'ca1e5a7ead5672b0e6bb66de1474fddb' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dffdd6d730b5f50408243fa873b1f50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dffdd6d730b5f50408243fa873b1f50::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8dffdd6d730b5f50408243fa873b1f50::$classMap;

        }, null, ClassLoader::class);
    }
}
