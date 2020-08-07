<?php
require_once './GuojingFactory.php';
require_once './YangKangFactory.php';
require_once './ZhangWuJiFactory.php';
// 这种模式是「真正」的设计模式， 因为他实现了 S.O.L.I.D 原则中「D」的 「依赖倒置」。
//这意味着工厂方法模式取决于抽象类，而不是具体的类。 这是与简单工厂模式和静态工厂模式相比的优势。

#工厂方法
#工厂方法是针对每一种产品提供一个工厂类。通过不同的工厂实例来创建不同的产品实例。
#在同一等级结构中，支持增加任意产品。
$daXia = new GuojingFactory();


echo $daXia->makePower().PHP_EOL;

$daXia1 = new YangKangFactory();
echo $daXia1->makePower().PHP_EOL;;


$daXia2 = new ZhangWuJiFactory();
echo $daXia2->makePower().PHP_EOL;;

