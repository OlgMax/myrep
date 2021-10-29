<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit775f1b447c49ff144d0bdd9487390b55
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Controller\\Admin\\Index' => __DIR__ . '/../..' . '/app/controller/Admin/Index.php',
        'Controller\\Admin\\Main' => __DIR__ . '/../..' . '/app/controller/Admin/Main.php',
        'Controller\\Controller' => __DIR__ . '/../..' . '/app/controller/Controller.php',
        'Controller\\Errors\\Error404' => __DIR__ . '/../..' . '/app/controller/Errors/Error404.php',
        'Controller\\Home\\Index' => __DIR__ . '/../..' . '/app/controller/Home/Index.php',
        'Controller\\Home\\Main' => __DIR__ . '/../..' . '/app/controller/Home/Main.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit775f1b447c49ff144d0bdd9487390b55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit775f1b447c49ff144d0bdd9487390b55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit775f1b447c49ff144d0bdd9487390b55::$classMap;

        }, null, ClassLoader::class);
    }
}
