<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1f693f080a00e757f289565dfe3b57c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
        'G' => 
        array (
            'Gantry\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
        'Gantry\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Gantry',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1f693f080a00e757f289565dfe3b57c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1f693f080a00e757f289565dfe3b57c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}