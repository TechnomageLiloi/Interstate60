<?php

namespace Liloi\Rune\Domain\Wiki;

class Manager
{
    public static function URLToKey(string $URL): string
    {
        $lower = trim($URL, '/');

        if(in_array($lower, ['', 'rune']))
        {
            return 'rune';
        }

        return 'rune:' . str_replace('/', ':', $lower);
    }

    public static function KeyToURL(string $key): string
    {
        if($key === 'rune')
        {
            return '/';
        }

        $lower = str_replace('rune:', '', $key);
        return '/' . str_replace(':', '/', $lower);
    }
}