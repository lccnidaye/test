<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1dd6297511eb143ea648ebf093f5dce4
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UnZip\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UnZip\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1dd6297511eb143ea648ebf093f5dce4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1dd6297511eb143ea648ebf093f5dce4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
