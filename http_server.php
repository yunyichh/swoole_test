<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/7/25
 * Time: 17:36
 */
$http = new Swoole\Http\Server("127.0.0.1", 80);
$http->on('request', function ($request, $response) {
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$http->start();