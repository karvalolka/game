<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d070178755c320c69f93ee4800660ef
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d070178755c320c69f93ee4800660ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d070178755c320c69f93ee4800660ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d070178755c320c69f93ee4800660ef::$classMap;

        }, null, ClassLoader::class);
    }
}
