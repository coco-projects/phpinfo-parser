<?php

    use Coco\phpinfoParser\Info;

    require '../vendor/autoload.php';
    $info = Info::capture();

    foreach ($info->modules() as $module)
    {
        echo '<h2>' . $module->name() . '</h2>';

        echo '<ul>';
        foreach ($module->configs() as $config)
        {
            echo '<li>';
            echo $config->name() . ': ' . $config->value();

            if ($config->hasMasterValue())
            {
                echo ' (master: ' . $config->masterValue() . ')';
            }
            echo '</li>';
        }
        echo '</ul>';
    }
