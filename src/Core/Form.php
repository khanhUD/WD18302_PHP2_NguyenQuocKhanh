<?php

namespace app\core;

use App\Core\Field;

class Form
{
    public static function begin($action, $method)
    {
        return sprintf('<form action="%s" method="%s">', $action, $method);
    }

    public static function end()
    {
        return '</form>';
    }

    public static function field($attribute)
    {
        return new Field($attribute);
    }
}
