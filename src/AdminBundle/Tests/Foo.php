<?php

/*
 * 延迟加载监听者
 */
use Symfony\Component\EventDispatcher\Event;
use AdminBundle\Event\StoreSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Foo
{
    private $started = false;

    protected $dispatcher = null;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function setEventDispatcher(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function myEventListener(Event $event)
    {
        return $event->getName();
    }

    public function myLazyListener(Event $event)
    {
        if(false === $this->started){
            $subscriber = new StoreSubscriber();
            $event->getDispatcher()->addSubscriber($subscriber);
        }
        $this->started = true;
        //...
    }

    //从监听者内部派遣另外的事件
    public function myFooListener(Event $event)
    {
        $event->getDispatcher()->dispatch('log',$event);
        //...
    }
}