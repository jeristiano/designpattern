<?php
include './skills/Dugujiujian.php';
include './skills/PuTongSword.php';
include './skills/HuaGongDaFa.php';
include_once './AbstractFactory.php';

/**
 * Class LinghuchongFactory
 */
class LinghuchongFactory extends AbstractFactory
{

    /**
     * @return string
     */
    public function createHandPower ()
    {
        return (new Dugujiujian())->make();
    }

    /**
     * @return string
     */
    public function createWeaponPower ()
    {
        return (new PuTongSword())->pick();
    }

    /**
     * @return string
     */
    public function createInternalPower ()
    {
        return (new HuaGongDaFa())->run();
    }
}