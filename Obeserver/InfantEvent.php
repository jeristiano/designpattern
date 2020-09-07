<?php


/**
 * Class InfantEvent
 */
class InfantEvent
{
    public $user;

    /**
     * InfantEvent constructor.
     * @param $data
     */
    public function __construct ($data)
    {
        $this->user = $data;

    }
}