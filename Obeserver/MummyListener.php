<?php
require_once('./ListenerContract.php');

/**
 * Class MummyListener
 */
class MummyListener implements ListenerContract
{

    /**
     * @param object $event
     * @return mixed
     */
    public function process ($event)
    {
        // TODO: Implement process() method.
        echo '妈妈说:儿子哭了' . PHP_EOL;
        echo var_export($event->user, true). PHP_EOL;
    }

    public function listen (): array
    {
        return [];
    }
}