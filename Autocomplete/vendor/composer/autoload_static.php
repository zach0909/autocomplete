<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c09652ee45f58e789eded894c40e656
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Config' => __DIR__ . '/../..' . '/app/Config.php',
        'App\\SQLiteConnection' => __DIR__ . '/../..' . '/app/SQLiteConnection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c09652ee45f58e789eded894c40e656::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c09652ee45f58e789eded894c40e656::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c09652ee45f58e789eded894c40e656::$classMap;

        }, null, ClassLoader::class);
    }
}