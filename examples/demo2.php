<?php

    use Coco\phpinfoParser\Info;

    require '../vendor/autoload.php';
    $info = Info::capture();

    foreach ($info->modules() as $module)
    {
        $module->name(); // session

        // Configs are grouped the same way phpinfo() groups them by table
        // Different groups have different table headers, different number of values
        foreach ($module->groups() as $group)
        {
            $group->headings(); // [Directive, Local Value, Master Value]

            foreach ($group->configs() as $config)
            {
                $config->name();       // session.gc_maxlifetime
                $config->localValue(); // 1440

                $config->hasMasterValue(); // True (will be false if there is only one value)
                $config->masterValue();    // 28800
            }
        }
    }