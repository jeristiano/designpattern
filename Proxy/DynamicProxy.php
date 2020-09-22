<?php
/**
 * aop基本概念,动态代理
 */
class LogicProxy
{
    private $obj;

    /**
     * LogicProxy constructor.
     * @param string $class
     * @throws Exception
     */
    public function __construct(string $class)
    {
        if (!class_exists($class)) {
            throw new \Exception("{$class} 类不存在啦");
        }
        $this->obj = new $class();
    }

    /**
     * @param $name
     * @param $arguments
     * @throws ReflectionException
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        $reflect = new ReflectionClass($this->obj);
        $method = $reflect->getMethod($name);
        if (!$method) {
            throw new \Exception("{$name} 方法名不存在");
        }
        if (!$method->isPublic() || $method->isAbstract()) {
            throw new \Exception("{$name} 方法不能执行");
        }
        echo "before 执行了" . PHP_EOL;
        $method->invoke($this->obj, ...$arguments);
        echo "after 执行了" . PHP_EOL;
    }
}

class Login
{
    public function save($message)
    {
        echo "日志 : {$message}" . PHP_EOL;
    }
}

//测试方法
try {
    /** @var Login $logicProxy */
    $logicProxy = new LogicProxy(Login::class);
    $logicProxy->save("我只是想写个日志而已");
} catch (\Exception $e) {
    echo "ERROR : {$e->getMessage()}" . PHP_EOL;
}
