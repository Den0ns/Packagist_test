<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97166fae123bd7fe47f4a178205eb7b8
{
    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xy\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97166fae123bd7fe47f4a178205eb7b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97166fae123bd7fe47f4a178205eb7b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
