<?php
require_once './FlyweightFactory.php';
require_once './UnsharedConcreteFlyweight.php';
$factory = new FlyweightFactory();

$extrinsicState = 100;
$flA = $factory->getFlyweight('a');
$flA->operation(--$extrinsicState);


$unshaded=new UnsharedConcreteFlyweight();
 $unshaded->operation(--$extrinsicState);
