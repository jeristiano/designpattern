<?php
require_once 'Filter.php';

/**
 * Class FilterChain
 */
class FilterChain implements Filter
{

    protected $index = 0;
    protected $filters = [];

    /**
     * @param array        $request
     * @param \FilterChain $chain
     * @return mixed
     */
    public function doFilter (array $request, FilterChain $chain)
    {
        if ($this->index == count($this->filters)) {
            return;
        }
        $doFilter = $this->filters[$this->index];
        $this->next();
        $doFilter->doFilter($request, $chain);
    }

    public function next ()
    {
        $this->index++;
    }

    /**
     * @param \Filter $filter
     */
    public function addFilter (Filter $filter)
    {
        $this->filters[] = $filter;
    }
}