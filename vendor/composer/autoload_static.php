<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit922a3570e843d2b4c2a5ca93c2731acd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit922a3570e843d2b4c2a5ca93c2731acd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit922a3570e843d2b4c2a5ca93c2731acd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit922a3570e843d2b4c2a5ca93c2731acd::$classMap;

        }, null, ClassLoader::class);
    }
}