<?php


/**
 * Class Filter
 */
abstract class Filter
{
    /**
     * @param $message
     * @return mixed
     */
    public abstract function doFilter (array $request);

    protected $nextFilter;

    /**
     * @param \Filter $nextFilter
     * @return mixed
     */
    public function setNextFilter (Filter $nextFilter)
    {
        $this->nextFilter = $nextFilter;
    }
}