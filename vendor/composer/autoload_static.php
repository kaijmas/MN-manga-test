<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17c0ce81615042818f549084845c0e3e
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17c0ce81615042818f549084845c0e3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17c0ce81615042818f549084845c0e3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17c0ce81615042818f549084845c0e3e::$classMap;

        }, null, ClassLoader::class);
    }
}