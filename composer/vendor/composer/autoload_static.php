<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite334b20a4fc59e40f94cc50a32a13d99
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite334b20a4fc59e40f94cc50a32a13d99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite334b20a4fc59e40f94cc50a32a13d99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite334b20a4fc59e40f94cc50a32a13d99::$classMap;

        }, null, ClassLoader::class);
    }
}
