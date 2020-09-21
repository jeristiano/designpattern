<?php
declare(strict_types=1);
require_once 'TimeProxy.php';
require_once 'LogProxy.php';
require_once 'MotorMove.php';

//1. 代理同样实现被代理对象的接口
//2. 这样的好处是可以代理间嵌套,形成一个洋葱模型,一层一层的逐渐传递,最后执行被代理方法
//3. laravel的中间件实现核心及时基于这种洋葱模型
//4. 切入的顺序不同,执行顺序也不同.

//先执行日志后执行时间
$proxy = new TimeProxy(new LogProxy(new MotorMove()));
$proxy->move();

//先执行时间后执行日志
$proxy = new LogProxy(new TimeProxy(new MotorMove()));
$proxy->move();

//这就是一个标准的静态代理模式的应用