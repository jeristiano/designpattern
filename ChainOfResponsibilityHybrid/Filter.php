<?php

/**
 * Class Filter
 */
interface Filter
{
    /**
     * @param array        $request
     * @param \FilterChain $chain
     * @return mixed
     */
    public  function doFilter (array $request,FilterChain $chain);


}