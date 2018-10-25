<?php
require_once __DIR__.'\..\config\app.php';

if(!function_exists('view')){
    function view($view = null, $data = []) {
        global $app_config;
        extract($data);
        require_once __DIR__.'\..\views\\'.strtolower($view).'.php';
    }
}