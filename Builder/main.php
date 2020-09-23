<?php


require_once 'AlipayBuilder.php';
require_once 'WechatBuilder.php';
require_once 'PayDirector.php';
$builder = new AlipayBuilder();
$payee = new PayDirector($builder);
$payee->build('alipay-kanban','12344');



$payee = new PayDirector(new WechatBuilder);
$payee->build('wechant-kanban','12344');