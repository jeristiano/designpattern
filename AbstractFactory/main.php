<?php

include_once './GuojingFactory.php';
include_once './LinghuchongFactory.php';

//形容词用接口,名字用抽象类
//在不指定具体类的情况下创建一系列相关或依赖对象。
// 通常创建的类都实现相同的接口。
// 抽象工厂的客户并不关心这些对象是如何创建的，它只是知道它们是如何一起运行的。

# 抽象工厂
# 抽象工厂是应对产品族概念的。比如说，每个汽车公司可能要同时生产轿车，货车，客车，那么每一个工厂都要有创建轿车，货车和客车的方法。
# 应对产品族概念而生，增加新的产品线很容易，但是无法增加新的产品。
$DaXia = new GuojingFactory();

echo $DaXia->createHandPower();
echo $DaXia->createWeaponPower();
echo $DaXia->createInternalPower();

$DaXia1 = new LinghuchongFactory();
echo $DaXia1->createHandPower();
echo $DaXia1->createWeaponPower();
echo $DaXia1->createInternalPower();