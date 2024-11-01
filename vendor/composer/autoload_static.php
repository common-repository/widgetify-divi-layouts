<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit959e3c00189ea641dd8f1e3176e00a14
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vint3\\Divi\\WidgetifyLayouts\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vint3\\Divi\\WidgetifyLayouts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Vint3\\Divi\\WidgetifyLayouts\\Plugin' => __DIR__ . '/../..' . '/lib/Plugin.php',
        'Vint3\\Divi\\WidgetifyLayouts\\Widgets' => __DIR__ . '/../..' . '/lib/Widgets.php',
        'Vint3\\Divi\\WidgetifyLayouts\\Widgets\\Layout' => __DIR__ . '/../..' . '/lib/Widgets/Layout.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit959e3c00189ea641dd8f1e3176e00a14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit959e3c00189ea641dd8f1e3176e00a14::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit959e3c00189ea641dd8f1e3176e00a14::$classMap;

        }, null, ClassLoader::class);
    }
}
