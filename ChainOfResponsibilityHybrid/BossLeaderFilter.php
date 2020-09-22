<?php

require_once 'FilterChain.php';
/**
 * Class BossLeaderFilter
 */
class BossLeaderFilter implements Filter
{

    /**
     * @param $message
     * @return mixed
     */
    public function doFilter (array $request,FilterChain $chain)
    {
        // 如果请假天数小于等于1，则组领导可直接审批
        if ($request['days'] <= 10) {
            echo '最终boss同意了' . PHP_EOL;
        }else{
            echo '不准你请这么长假=.=' . PHP_EOL;
        }
        $chain->doFilter($request,$chain);

    }
}