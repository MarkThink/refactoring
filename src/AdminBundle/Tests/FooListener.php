<?php

use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

//$event = new GenericEvent($subject);
//$dispatcher->dispatch('foo',$event);

//通过ArrayAccess的API传入和处理事件参数：
//$event = new GenericEvent(
//    $subject,
//    array('type' => 'foo', 'counter' => 0)
//);
//$dispatcher->dispatch('foo', $event);
//echo $event['counter'];
////过滤数据
//$event = new GenericEvent($subject, array('data' => 'foo'));
//$dispatcher->dispatch('foo', $event);
//echo $event['data'];

class FooListener
{
    public function handler(GenericEvent $event)
    {
        if ($event->getSubject() instanceof Foo) {

        }

        if (isset($event['type']) && $event['type'] === 'foo') {
            // ... do something
        }
        $event['counter']++;
    }

    public function filter(GenericEvent $event)
    {
        strtolower($event['data']);
    }
}