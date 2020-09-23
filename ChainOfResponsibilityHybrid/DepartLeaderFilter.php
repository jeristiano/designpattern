<?php

require_once 'FilterChain.php';
/**
 * 部门领导审批
 * Class DepartLeaderFilter
 */
class DepartLeaderFilter implements Filter
{

    /**
     * @param $message
     * @return mixed
     */
    public function doFilter (array $request,FilterChain $chain)
    {
        // 如果请假天数小于等于3，则部门领导可直接审批
        if ($request['days'] <= 3) {
            echo 'DepartLeader同意审批' . PHP_EOL;
        } else {
            echo 'DepartLeader无权利,转交给下一级' . PHP_EOL;
        }

        $chain->doFilter($request,$chain);
        echo 'DepartLeader返回'.PHP_EOL;
    }
}