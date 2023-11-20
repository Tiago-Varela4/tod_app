<?php

namespace App\ViewHelper;

class TodoHelper
{
    public static function displayTodoItems(array $items):string
    {
        $output = '';
        foreach($items as $item) {
            $output .= $item['to do'] . '<br>';
        }
        return $output;
    }

}