<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29e7c80c557c84b9d8af601f1b95cc19
{
    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JomWeb' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit29e7c80c557c84b9d8af601f1b95cc19::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}