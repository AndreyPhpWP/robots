<?php

spl_autoload_register(static function ($class) {

    if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/app/classes/' . $class . '.php')) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/classes/' . $class . '.php';
    }
});