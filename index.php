<?php
$request_uri = $_SERVER['REQUEST_URI'];
$route = strtok($request_uri, '?');
$route = trim($route, '/');

$view_directory = __DIR__ . "/views/";
$blog_directory = __DIR__ . "/blog/";

if($route == '')
    include($view_directory . 'home.php');
else if($route == 'get-post') {
    if(isset($_GET['file'])) {
        $filename = basename($_GET['file']);
        $filepath = $blog_directory . $filename;

        if(file_exists($filepath)) {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if($ext != 'md')
            {
                http_response_code(403);
                echo 'Invalid file type.';
                kill();
            }

            header('Content-Type: text/plain');
            echo file_get_contents($filepath);
        }
        else {
            http_response_code(404);
            echo 'File "' . $filepath . '" not found!';
        }
    }
    else {
        http_response_code(400);
        echo 'No file specified.';
    }
}
else if(file_exists($file = $view_directory . $route . '.php'))
    include($file);
else
    include($view_directory . '404.php');
?>