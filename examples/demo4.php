<?php

    use Coco\phpinfoParser\Info;

    require '../vendor/autoload.php';
    $info = Info::capture();

    // This lookup is case-insensitive. Will return null if no matching module is found.
    $module = $info->module('redis');

// Retrieve the name of the module as displayed in phpinfo(), which might have a different case.
    echo $module->name();                                           // Zend OPcache

// Flatten all configs into one collection. You can then use any Laravel collection method.
    $module->configs()->count();                               // 59

// Retrieve a specific configuration from this module. This works exactly the same as the main `config()` method shown in the previous section.
    $module->config('Redis Version');                               // 16229
    $module->config('Redis Support', 'master'); // Off

// Retrieve just the first group of configs, which is often the list of single-value configs
    $group = $info->module('session')->groups()->first(); // Collection of Configs