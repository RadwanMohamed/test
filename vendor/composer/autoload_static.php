<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc86dc1c80aa6bba9bbf9282864ace977
{
    public static $files = array (
        'b40d5dea6a08c80f1af08c54a22442f0' => __DIR__ . '/../..' . '/gsmencoder.class.php',
        '47ba1f2b1ec0aed7dae0cba523779a90' => __DIR__ . '/../..' . '/sockettransport.class.php',
        'ae077a5d814ebdff35b7d1ce2b950fd9' => __DIR__ . '/../..' . '/smppclient.class.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc86dc1c80aa6bba9bbf9282864ace977::$classMap;

        }, null, ClassLoader::class);
    }
}
