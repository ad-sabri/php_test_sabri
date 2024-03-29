<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ed9332ca92a2402190726885bd0d9ec
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sabri\\PhpTestSabri\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sabri\\PhpTestSabri\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ed9332ca92a2402190726885bd0d9ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ed9332ca92a2402190726885bd0d9ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ed9332ca92a2402190726885bd0d9ec::$classMap;

        }, null, ClassLoader::class);
    }
}
