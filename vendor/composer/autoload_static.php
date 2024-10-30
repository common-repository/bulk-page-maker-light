<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit399471fa877346621c4fe8120f0b7096
{
    public static $files = array (
        '110928615e590f8fde9854ebdfd66fb7' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bulk\\Page\\Maker\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bulk\\Page\\Maker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit399471fa877346621c4fe8120f0b7096::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit399471fa877346621c4fe8120f0b7096::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
