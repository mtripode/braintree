<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb3be92b8883c8b657b03c38577f37c6
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb3be92b8883c8b657b03c38577f37c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb3be92b8883c8b657b03c38577f37c6::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitdb3be92b8883c8b657b03c38577f37c6::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdb3be92b8883c8b657b03c38577f37c6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
