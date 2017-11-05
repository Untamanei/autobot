<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dc74e3120f7ab872c5d94a53c583c8f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dc74e3120f7ab872c5d94a53c583c8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dc74e3120f7ab872c5d94a53c583c8f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}