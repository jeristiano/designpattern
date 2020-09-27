<?php


/**
 * Class PieDecorator
 */
abstract class PieDecorator implements PieInterface
{
    protected $decoratorPie;

    public function __construct (PieInterface $shape)
    {
        $this->decoratorPie = $shape;
    }

    public function addComponent ()
    {
        $this->decoratorPie->addComponent();
    }

}