<?php

use Rxnelysr\ClassManager;

require 'src/ClassManager.min.php';

$cfg = require 'config/autoloader.php';

ClassManager::set(
    __DIR__,
    $cfg['debug'],
    $cfg['auto'],
    [
        'classmap'      => $cfg['classmap'],
        'cache_classmap' => $cfg['cache'],
        'where_to_look_class' => $cfg['where_to_look_class']
    ],
    $cfg['files']
);


ClassManager::initAutoloader($cfg['auto-resolve']);
