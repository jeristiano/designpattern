<?php
require_once 'GroupLeaderFilter.php';
require_once 'DepartLeaderFilter.php';
require_once 'BossLeaderFilter.php';
$group = new GroupLeaderFilter();
$depart = new DepartLeaderFilter();
$boss = new BossLeaderFilter();
$group->setNextFilter($depart);
$depart->setNextFilter($boss);

$request['days'] = 1;
echo '开始请求审批' . PHP_EOL;
$group->doFilter($request);

echo '请求审批结束' . PHP_EOL;