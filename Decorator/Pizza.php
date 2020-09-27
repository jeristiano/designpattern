<?php

require_once 'PieInterface.php';

/**
 * Class Pizza
 */
class Pizza implements PieInterface
{
    public function addComponent ()
    {
        echo "Pizza".PHP_EOL;
    }

}