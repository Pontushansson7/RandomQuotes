<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6880660ea6a23944e3994f574e1c657b
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RandomQuotes\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RandomQuotes\\' => 
        array (
            0 => __DIR__ . '/..' . '/edwinfadilah/random-quotes/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6880660ea6a23944e3994f574e1c657b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6880660ea6a23944e3994f574e1c657b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6880660ea6a23944e3994f574e1c657b::$classMap;

        }, null, ClassLoader::class);
    }
}
