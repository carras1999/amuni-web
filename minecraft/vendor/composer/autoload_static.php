<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97e470b5f2b99ee27836375102b57cd5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MinecraftServerStatus\\Packets\\' => 30,
            'MinecraftServerStatus\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MinecraftServerStatus\\Packets\\' => 
        array (
            0 => __DIR__ . '/..' . '/funnyitselmo/minecraftserverstatus/src/Packets',
        ),
        'MinecraftServerStatus\\' => 
        array (
            0 => __DIR__ . '/..' . '/funnyitselmo/minecraftserverstatus/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97e470b5f2b99ee27836375102b57cd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97e470b5f2b99ee27836375102b57cd5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
