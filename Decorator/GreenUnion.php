<?php
require_once 'PieDecorator.php';

/**
 * Class GreenUnion
 */
class GreenUnion extends PieDecorator
{

    public function __construct (PieInterface $shape)
    {
        parent::__construct($shape);
    }

    public function addComponent ()
    {
        $this->decoratorPie->addComponent();
        print_r('增加葱花').PHP_EOL;
    }



}