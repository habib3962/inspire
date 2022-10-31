<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitecc14170d9b4c5e3f9c564862b5b56ae
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fhsinchy\\Inspire\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fhsinchy\\Inspire\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitecc14170d9b4c5e3f9c564862b5b56ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitecc14170d9b4c5e3f9c564862b5b56ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitecc14170d9b4c5e3f9c564862b5b56ae::$classMap;

        }, null, ClassLoader::class);
    }
}
