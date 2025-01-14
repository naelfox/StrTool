<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite583354719b64cb4551a268d032ccf79
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FileOrchestrator\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FileOrchestrator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FileOrchestrator',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite583354719b64cb4551a268d032ccf79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite583354719b64cb4551a268d032ccf79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite583354719b64cb4551a268d032ccf79::$classMap;

        }, null, ClassLoader::class);
    }
}
