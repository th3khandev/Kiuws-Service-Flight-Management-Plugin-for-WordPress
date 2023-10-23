<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kiuws_Service_Flight_Management\\Services\\' => 41,
            'Kiuws_Service_Flight_Management\\Includes\\' => 41,
            'Kiuws_Service_Flight_Management\\Api\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kiuws_Service_Flight_Management\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'Kiuws_Service_Flight_Management\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Kiuws_Service_Flight_Management\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$classMap;

        }, null, ClassLoader::class);
    }
}
