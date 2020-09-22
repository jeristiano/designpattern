# DesignPattern 设计模式


## 工厂方法

> 工厂方法是针对每一种产品提供一个工厂类。通过不同的工厂实例来创建不同的产品实例。
在同一等级结构中，支持增加任意产品。

## 抽象工厂模式

> 抽象工厂是应对产品族概念的。比如说，每个汽车公司可能要同时生产轿车，货车，客车，那么每一个工厂都要有创建轿车，货车和客车的方法。
> 应对产品族概念而生，`增加新的产品线很容易，但是无法增加新的产品`。


## 观察者模式

### 目的
当对象的状态发生变化时，所有依赖于它的对象都得到通知并被自动更新。它使用的是低耦合的方式
### 应用
`消息队列` `laravel事件机制` `hook钩子机制`

### 享元模式

享元模式适用于系统中存在大量的相似对象以及需要缓冲池的场景，能够降低内存占用，提高效率，但会增加复杂度，需要分享内外部状态
最主要的特点是有一个唯一标识，当内存中已经有这个对象了，直接返回对象，不用再去创建了
> 根据享元模式可以开发出连接池,由于PHP-fpm是短生命周期程序,因此使用范围不多,然而在长生命周期的cli模式下有更广泛的应用,比如:大量swoole框架都提供了数据库连接池,redis连接池等````

### 代理模式

> 设计模式中第一难的模式

代理模式分为: `静态代理和动态代理`
静态代理相当于想买一辆特斯拉,最后通过代理商买到了一辆崭新的特斯拉还可以分期付款,另外赠送了许多礼品,重点是买到的仍然是特斯拉,并且得到了一些其他的赠品。

动态代理:是更高级的代理模式,所谓动态就是并不生成实际的代理类,而是在代码执行中为类实现代理类,最典型的应用是Spring的AOP,这是这个概念使得Spring闻名遐迩.


> 代理模式应用在: 中间件模型(middleware),Springmvc的AOP功能,动态代理实现极其复杂,PHP中目前没有更好的实现。
>
### 责任链模式(Chain of Responsibility)

> 设计模式中第二难的模式

责任链模式就像是铁锁横江,一环扣着一环,缺一不可。 生活中有很多这样的例子，比如安全生产部门，从上到下几十个负责人，一环扣着一环，每人都有不同的职责和权限。

关键词： `责任处理`,`下一环`
 
 #### 纯责任链模式
 
 纯责任链模式:
 
 某个公司员工请假需要提交一个申请，这个申请需要一系列负责人审批，小组长可以审批请假小于等于1天的、部门领导可以审批请假小于等于3天的、大于10天的就只能给大boss审批。
 
 这个场景里，每个领导只能处理自己权限之内的，超出权限之外的就只能交给上级审批，很适合使用纯责任链模式
 
 > 这种模式里需要定义,抽象方法`doFilter`用来处理请求。所有处理者都继承Filter，实现自己的doFilter方法, `setNextFilter
>` 指向下一个处理者,初始化时来制定执行的顺序,形成一条链


#### 不纯的责任链模式

不纯责任链模式需要每个处理器都可以处理任务然后自动传递到下一个处理器,每个处理器都不知道自己的位置，直到全部处理完成退出。
这个模式更加常用,就如同从村级单位一直到省级单位层层审批获得进京证,每层领导都要写出批示意见,并层转至上一级。

> 类`FilterChain`集成抽象`Filter`类实现`doFilter`,并将自己传递给下一层,这里是一个递归的调用,像是一个洋葱,一层剥开下一层。

关键词： `处理器链`,`递归`


