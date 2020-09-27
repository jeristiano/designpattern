<?php
require_once 'Pizza.php';
require_once 'GreenUnion.php';
require_once 'Cheese.php';

$pie=new GreenUnion(new Pizza());
$pie->addComponent();
$cheese=new Cheese(new Pizza());
$cheese->addComponent();