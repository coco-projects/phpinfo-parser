<?php

    namespace Coco\phpinfoParser\Traits;

    use Coco\phpinfoParser\Result;

    /**
     * @mixin Result
     */
trait ConfigAliases
{
    protected array $aliases = [
        'os',
        'hostname',
    ];

    protected function getOs(): string
    {
        return explode(" ", $this->config('System'))[0];
    }

    protected function getHostname(): string
    {
        return explode(" ", $this->config('System'))[1];
    }
}
