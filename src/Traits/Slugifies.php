<?php

    namespace Coco\phpinfoParser\Traits;

trait Slugifies
{
    protected function slugify($text): string
    {
        return strtolower(trim(preg_replace("/(\W+)/i", "_", $text), '_'));
    }
}
