<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b1fd8a5dc874364a36b3aec9562671c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/kzykhys/steganography/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b1fd8a5dc874364a36b3aec9562671c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b1fd8a5dc874364a36b3aec9562671c::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInit5b1fd8a5dc874364a36b3aec9562671c::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit5b1fd8a5dc874364a36b3aec9562671c::$classMap;

        }, null, ClassLoader::class);
    }
}
