<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3cc54b3edb8cb462da679c286afc0ddd
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Famdirksen\\LaravelUTMUrls\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Famdirksen\\LaravelUTMUrls\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3cc54b3edb8cb462da679c286afc0ddd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3cc54b3edb8cb462da679c286afc0ddd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
