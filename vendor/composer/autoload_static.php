<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb177e79e63f2941c365607a0bf0c01a2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Source',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb177e79e63f2941c365607a0bf0c01a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb177e79e63f2941c365607a0bf0c01a2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb177e79e63f2941c365607a0bf0c01a2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb177e79e63f2941c365607a0bf0c01a2::$classMap;

        }, null, ClassLoader::class);
    }
}
