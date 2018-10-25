<?php
require_once __DIR__.'/helpers/helpers.php';

// Check if path is available or not empty
if(isset($_SERVER['PATH_INFO'])){
    $path= $_SERVER['PATH_INFO'];
    // Do a path split
    $path_split = explode('/', ltrim($path));
}else{
    // Set Path to '/'
    $path_split = '/';
}
if($path_split === '/'){
    $file_name = 'index';
    require_once __DIR__.'/models/'.$file_name.'Model.php';
    require_once __DIR__.'/controllers/'.$file_name.'Controller.php';
    $controller_name = ucfirst($file_name).'Controller';
    $model_name = ucfirst($file_name).'Model';
    $ctrl_obj = new $controller_name(new $model_name());
    $ctrl_obj->index();
}else{
    // Set controller
    $file_name = $path_split[1];

    $method_name = isset($path_split[2])? $path_split[2] :'';
    $parameters = array_slice($path_split, 3);

    if (file_exists(__DIR__.'/controllers/'.$file_name.'Controller.php')){
        require_once __DIR__.'/models/'.$file_name.'Model.php';
        require_once __DIR__.'/controllers/'.$file_name.'Controller.php';

        $controller_name = ucfirst($file_name).'Controller';
        $model_name = ucfirst($file_name).'Model';

        $ctrl_obj = new $controller_name(new $model_name());

        if(isset($parameters[0])){
            $params = $parameters[0];
        }else{
            $params = null;
        }

        if ($method_name != '') {
            $ctrl_obj->$method_name($params);
        }else{
            $ctrl_obj->index();
        }
        //echo json_encode($value);
    }else{
        header('HTTP/1.1 404 Not Found');
        die('404 - The file - '.$controller_name.' - not found');
    }
}