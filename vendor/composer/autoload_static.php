<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f1a3f49989c3e9410e09da30a272ce7
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f1a3f49989c3e9410e09da30a272ce7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f1a3f49989c3e9410e09da30a272ce7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
