<?php
require_once('./EventDispatcherContract.php');

/**
 * Class EventDispatcher
 */
class EventDispatcher implements EventDispatcherContract
{

    protected $listeners = [];

    /**
     * @param \ListenerContract $contract
     * @return mixed
     */
    public function addListener (ListenerContract $contract)
    {

        foreach ($contract->listen() as $listen) {
            echo $listen . PHP_EOL;
            if (!$listen) continue;
            $this->listeners[$listen][] = $contract;
        }
    }


    /**
     * @param object $event
     */
    public function dispatch (object $event)
    {
        $eventDispatcher = get_class($event);
        foreach ($this->listeners[$eventDispatcher] as $listener) {
//            $listener($event);
            $listener->process($event);
        }
    }
}