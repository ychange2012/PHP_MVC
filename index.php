<?php 
//header('Access-Control-Allow-Origin:*');
 // get runtime controller prefix

 //console.log($temp);
 $c_str = $_GET['c'];
 // the full name of controller
 $c_name = $c_str.'controller';
 // the path of controller
 $c_path = 'controller/'.$c_name.'.php';
 // get runtime action
 $method = $_GET['a'];
 // get runtime parameter
 $param = $_GET['param'];
 
 
 // load controller file
 require($c_path);
 // instantiate controller
 $controller = new $c_name;
 // run the controller  method
 $controller->$method($param);
?>
