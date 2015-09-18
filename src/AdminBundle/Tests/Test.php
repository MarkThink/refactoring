<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher;
/*
 *  ContainerAwareEventDispatcher是一个比较特殊的事件分配器实现。它耦合了服务容器，作为依赖注入组件的一部分实现。
 * 它允许把服务作为指定事件的监听者，从而让事件分配器具备了极强的性能。
 * 服务在容器中是延迟加载的，这就意味着作为监听者使用的服务只有在一个事件被派遣后需要这些监听者时才被创建。
 */
class Test
{
    public function test()
    {
        $container = new ContainerBuilder();
        $dispatcher = new ContainerAwareEventDispatcher($container);

        //添加监听者-容器知道事件分配器即可以通过直接加载特定服务，也可以通过实现EventSubscriberInterface接口实现
        //注意：服务必须在容器中标注为public
        //添加服务
        //array($serviceID,$methodName)
        $eventName='my_test';
        $dispatcher->addListenerService($eventName,array('foo','LogListener'));
        //添加订阅者-第一个参数是订阅者服务ID，第二个参数是服务类的名称-该类必须实现了EventSubscriberInter接口
        $dispatcher->addSubscriberService(
            'kernel.store_subscriber',
            'StoreSubscriber'
        );
    }
}