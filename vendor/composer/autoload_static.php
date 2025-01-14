<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec9a060755a97bd95303c6c4a16eec4d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Turnstile\\Turnstile\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Turnstile\\Turnstile\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec9a060755a97bd95303c6c4a16eec4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec9a060755a97bd95303c6c4a16eec4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec9a060755a97bd95303c6c4a16eec4d::$classMap;

        }, null, ClassLoader::class);
    }
}
