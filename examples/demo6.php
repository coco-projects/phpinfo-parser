<?php

    use Coco\phpinfoParser\Info;

    require '../vendor/autoload.php';
    $info = Info::capture();

    $modules = [];
    foreach ($info->modules() as $k => $module)
    {
        $name = $module->name();

        if (!isset($modules[$name]))
        {
            $modules[$name] = [];
        }

        foreach ($module->configs() as $config)
        {
            $modules[$name][$config->name()]['local'] = $config->value();

            if ($config->hasMasterValue())
            {
                $modules[$name][$config->name()]['master'] = $config->masterValue();
            }
            else
            {
                $modules[$name][$config->name()]['master'] = null;
            }
        }
    }

    print_r($modules);
