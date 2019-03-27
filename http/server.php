<?php

use Swoole\Http\Server;

//ReflectionClass::export('Swoole\\Http\\Server');exit();
error_reporting(E_ALL);
ini_set('display_errors', '1');
//
//try {
//    $http = new Server("127.0.0.1", 9501);
//    var_dump($http);
//    $http->on('request', function ($request, $response) {
//        $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
//    });
//    $http->start();
//    //var_dump($http);
//}catch (\Exception $e) {
//    echo $e->getMessage();exit();
//}

$http = new swoole_http_server("127.0.0.1", 39001);

$http->on("start", function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:39001\n";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$http->start();