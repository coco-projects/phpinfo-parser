<?php

    use Coco\phpinfoParser\Info;

    require '../vendor/autoload.php';
    $info = Info::capture();

    //    var_export($info);
    //    var_export($info->configs());
//        var_export($info->jsonSerialize());

    var_export($info->version());                                     // 8.2.0
    echo PHP_EOL;

// Check for the presence of a specific module. Name is case-insensitive.
//    var_export($info->module('redis'));
//    echo PHP_EOL;

// Check for the presence of a specific module. Name is case-insensitive.
    var_export($info->hasModule('calendar'));                         // true
    echo PHP_EOL;

// Check to see if a specific configuration key is present. Name is case-insensitive.
    var_export($info->hasConfig('max_file_uploads'));                 // true
    echo PHP_EOL;

// Retrieve the value for a specific configuration key. Name is case-insensitive. If there is both a local and master value, the local is returned as default.
    var_export($info->config('max_file_uploads'));                    // 5
    echo PHP_EOL;

// Pass in 'master' as a second parameter to retrieve the master value instead. Note that this will return null if there is no master value;
    var_export($info->config('max_file_uploads', 'master'));          // 20
    echo PHP_EOL;

    var_export($info->config('BCMath support', 'master')); // null