<?php
require_once 'GroupLeaderFilter.php';
require_once 'DepartLeaderFilter.php';
require_once 'BossLeaderFilter.php';

$chain = new FilterChain();

$chain->addFilter(new GroupLeaderFilter());
$chain->addFilter(new DepartLeaderFilter());
$chain->addFilter(new BossLeaderFilter());


$request['days'] = 11;
echo '开始请求审批' . PHP_EOL;
$chain->doFilter($request, $chain);
echo '请求审批结束' . PHP_EOL;