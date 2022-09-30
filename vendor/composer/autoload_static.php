<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b76dcfebf6f9f655d51d65c9ec19c00
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minhduc\\Test\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minhduc\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b76dcfebf6f9f655d51d65c9ec19c00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b76dcfebf6f9f655d51d65c9ec19c00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b76dcfebf6f9f655d51d65c9ec19c00::$classMap;

        }, null, ClassLoader::class);
    }
}
