<?php
require_once('./DaddyListener.php');
require_once('./MummyListener.php');
require_once('./EventDispatcher.php');
require_once('./InfantEvent.php');

$user = [
    'name' => 'baobao',
    'timestamp' => '2020-10-01 00:00:00',
    'event' => 'cry',
];

//观察者模式的核心之一是事件调度机制
//
$eventDispatcher = new EventDispatcher();
//程序启动时注册所有监听器
$eventDispatcher->addListener(new DaddyListener());
$eventDispatcher->addListener(new MummyListener());

//事件调度
$eventDispatcher->dispatch(new InfantEvent($user));

echo 'handle done';