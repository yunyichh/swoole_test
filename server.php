<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/7/25
 * Time: 16:10
 */
//����Server���󣬼��� 127.0.0.1:9501�˿�
$serv = new Swoole\Server("127.0.0.1", 9501);

//�������ӽ����¼�
$serv->on('Connect', function ($serv, $fd) {
    echo "Client: Connect.\n";
});

//�������ݽ����¼�
$serv->on('Receive', function ($serv, $fd, $from_id, $data) {
    $serv->send($fd, "Server: " . $data);
});

//�������ӹر��¼�
$serv->on('Close', function ($serv, $fd) {
    echo "Client: Close.\n";
});

//����������
$serv->start();

