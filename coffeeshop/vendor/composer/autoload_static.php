<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16c6ba76537f4393e312c525078523fa
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit16c6ba76537f4393e312c525078523fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16c6ba76537f4393e312c525078523fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16c6ba76537f4393e312c525078523fa::$classMap;

        }, null, ClassLoader::class);
    }
}
