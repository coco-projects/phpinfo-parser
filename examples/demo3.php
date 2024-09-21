<?php

    use Coco\phpinfoParser\Info;

    require '../vendor/autoload.php';
    $info = Info::capture();

    // This flattens the grouped 'session' configs down to a single collection
    $info->module('session')->configs();

// This flattens ALL configs across all modules down to a single collection
    $info->configs();
