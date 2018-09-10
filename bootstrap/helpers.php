<?php
/**
 * Created by PhpStorm.
 * User: luke_
 * Date: 2018/9/10
 * Time: 21:54
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}