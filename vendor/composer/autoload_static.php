<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
            'Matrix\\' => 7,
        ),
        'K' => 
        array (
            'Kiuws_Service_Flight_Management\\Services\\' => 41,
            'Kiuws_Service_Flight_Management\\Includes\\' => 41,
            'Kiuws_Service_Flight_Management\\DB\\' => 35,
            'Kiuws_Service_Flight_Management\\Api\\' => 36,
        ),
        'C' => 
        array (
            'Complex\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Matrix\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/matrix/classes/src',
        ),
        'Kiuws_Service_Flight_Management\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'Kiuws_Service_Flight_Management\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Kiuws_Service_Flight_Management\\DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/db',
        ),
        'Kiuws_Service_Flight_Management\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
        'Complex\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/complex/classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/myclabs/php-enum/stubs/Stringable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$prefixesPsr0;
            $loader->classMap = ComposerStaticIniteadadb76bf80a62b87809f94c454c0dc::$classMap;

        }, null, ClassLoader::class);
    }
}
