<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 15/10/17
 * Time: 下午3:20
 */
$server = new swoole_server('127.0.0.1',9501);
$server->set(
    array(
        'reactor_num' => 8,
        'worker_num' => 8,
        'max_conn' => 10000
    )
);
$server->on('connect', function(swoole_server $serv, $fd, $from_id){
    echo $fd.'    ';
});

$server->on('receive', function(swoole_server $serv, $fd, $from_id, $data){
    $filename = 'zhengbowen.jpg';

    echo $from_id;
});

$server->on('close', function($serv, $fd, $from_id){
    echo 'close';
});

$server->start();

