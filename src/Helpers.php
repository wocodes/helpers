<?php

namespace Wocodes\Helpers;

class Helpers
{
    public static function requireOnce(array $files) {
        foreach($files AS $file) {
            die(var_dump("working"));
        };
    }
}