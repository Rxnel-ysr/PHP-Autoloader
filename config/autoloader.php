<?php

$root = dirname(__DIR__, 1);

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloader Debug Mode
    |--------------------------------------------------------------------------
    |
    | When enabled, the autoloader will output detailed logs or errors during
    | class resolution. It's helpful for development but should be disabled
    | in production to avoid unnecessary overhead.
    |
    */

    'debug' => false,

    /*
    |--------------------------------------------------------------------------
    | Auto-Resolve Classes
    |--------------------------------------------------------------------------
    |
    | If set to true, the autoloader will attempt to automatically resolve
    | unknown classes using recursive scans on defined project root. Disabling it
    | forces the loader to rely strictly on the classmap file.
    |
    */

    'auto-resolve' => false,

    /*
    |--------------------------------------------------------------------------
    | Autoloader Auto Mode
    |--------------------------------------------------------------------------
    |
    | When enabled, the autoloader will handle cold start and map every
    | class automatically.
    */
    'auto' => true,

    /*
    |--------------------------------------------------------------------------
    | Classmap File Path
    |--------------------------------------------------------------------------
    |
    | This static map allows for blazing-fast class loading.
    | This mapping will be automatically mapped
    |
    */

    'classmap' => $root . '/storage/classmap.php',

    /*
    |--------------------------------------------------------------------------
    | Class Cache Path
    |--------------------------------------------------------------------------
    |
    | This file stores the resolved class paths.
    | It acts as a cache to reduce file system scans and boost performance.
    |
    */

    'cache' => $root . '/storage/cache/classmap.php',

    /*
    |--------------------------------------------------------------------------
    | Class look dir
    |--------------------------------------------------------------------------
    |
    | Define a path to autoloader to search class on,
    | E.g. defined 'App/Foundation' and class that looked is aClass
    | will be searched in 'App/Foundation/aClass.php'
    */
    'where_to_look_class' => 'src/',

    /*
    |--------------------------------------------------------------------------
    | Files
    |--------------------------------------------------------------------------
    |
    | List of files that will always be loaded
    */
    'files' => []
];
