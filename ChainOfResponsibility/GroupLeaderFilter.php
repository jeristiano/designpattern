<?php

require_once 'Filter.php';
/**
 * Class GroupLeaderFilter
 */
class GroupLeaderFilter extends Filter
{

    /**
     * @param $message
     * @return mixed
     */
    public function doFilter (array $request)
    {
        // 如果请假天数小于等于1，则组领导可直接审批
        if ($request['days'] <= 1) {
            echo 'GroupLeader同意审批';
            return;
        } else {
            echo 'GroupLeader无权利,转交给下一级' . PHP_EOL;
            $this->nextFilter->doFilter($request);
        }
    }
}