<?php

require_once 'FilterChain.php';
/**
 * Class GroupLeaderFilter
 */
class GroupLeaderFilter implements Filter
{

    /**
     * @param $message
     * @return mixed
     */
    public function doFilter (array $request,FilterChain $chain)
    {
        // 如果请假天数小于等于1，则组领导可直接审批
        if ($request['days'] <= 1) {
            echo 'GroupLeader同意审批' . PHP_EOL;

        } else {
            echo 'GroupLeader无权利,转交给下一级' . PHP_EOL;

        }
        $chain->doFilter($request,$chain);

        echo 'GroupLeader返回'.PHP_EOL;
    }
}