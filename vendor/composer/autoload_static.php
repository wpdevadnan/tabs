<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd14154a1cde9a14693107e2467535840
{
    public static $files = array (
        'f9ac3f480c89fb7dcff54b4cc46ba77a' => __DIR__ . '/../..' . '/app/common/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\frontend\\' => 13,
            'app\\common\\' => 11,
            'app\\backend\\' => 12,
            'app\\abstracts\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/frontend',
        ),
        'app\\common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/common',
        ),
        'app\\backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/backend',
        ),
        'app\\abstracts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/abstracts',
        ),
    );

    public static $classMap = array (
        'app\\abstracts\\support_trans_Exception_Handler' => __DIR__ . '/../..' . '/app/abstracts/support_trans_Exception_Handler.php',
        'app\\backend\\add_Menu_btn' => __DIR__ . '/../..' . '/app/backend/add_menu.php',
        'app\\common\\support_trans_Exception' => __DIR__ . '/../..' . '/app/common/support_trans_Exception.php',
        'app\\common\\support_trans_Support_Init' => __DIR__ . '/../..' . '/app/common/support_trans_Support_Init.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd14154a1cde9a14693107e2467535840::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd14154a1cde9a14693107e2467535840::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd14154a1cde9a14693107e2467535840::$classMap;

        }, null, ClassLoader::class);
    }
}
