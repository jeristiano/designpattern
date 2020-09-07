<?php
require_once('./ListenerContract.php');

/**
 * Class DaddyListener
 */
class DaddyListener implements ListenerContract
{

    /**
     *
     * @param object $event
     * @return mixed
     */
    public function process ($event)
    {
        // TODO: Implement process() method.
        echo '爸爸说孩子哭了' . PHP_EOL;
        echo var_export($event->user, true) . PHP_EOL;
    }

    //此处定义了测监听器监听的事件
    public function listen (): array
    {
        return [InfantEvent::class];
    }
}