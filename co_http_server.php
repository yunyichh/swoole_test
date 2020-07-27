<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/7/27
 * Time: 14:57
 */
Co\run(function () {
    $server = new Co\Http\Server("127.0.0.1", 80, false);
    $server->handle('/', function ($request, $response) {
        $response->end("<h1>Index</h1>");
    });
    $server->handle('/test', function ($request, $response) {
        $response->end("<h1>Test</h1>");
    });
    $server->handle('/stop', function ($request, $response) use ($server) {
        $response->end("<h1>Stop</h1>");
        $server->shutdown();
    });
    $server->start();
});