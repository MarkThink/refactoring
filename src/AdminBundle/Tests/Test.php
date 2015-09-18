<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher;
/*
 *  ContainerAwareEventDispatcher��һ���Ƚ�������¼�������ʵ�֡�������˷�����������Ϊ����ע�������һ����ʵ�֡�
 * ������ѷ�����Ϊָ���¼��ļ����ߣ��Ӷ����¼��������߱��˼�ǿ�����ܡ�
 * ���������������ӳټ��صģ������ζ����Ϊ������ʹ�õķ���ֻ����һ���¼�����ǲ����Ҫ��Щ������ʱ�ű�������
 */
class Test
{
    public function test()
    {
        $container = new ContainerBuilder();
        $dispatcher = new ContainerAwareEventDispatcher($container);

        //��Ӽ�����-����֪���¼�������������ͨ��ֱ�Ӽ����ض�����Ҳ����ͨ��ʵ��EventSubscriberInterface�ӿ�ʵ��
        //ע�⣺��������������б�עΪpublic
        //��ӷ���
        //array($serviceID,$methodName)
        $eventName='my_test';
        $dispatcher->addListenerService($eventName,array('foo','LogListener'));
        //��Ӷ�����-��һ�������Ƕ����߷���ID���ڶ��������Ƿ����������-�������ʵ����EventSubscriberInter�ӿ�
        $dispatcher->addSubscriberService(
            'kernel.store_subscriber',
            'StoreSubscriber'
        );
    }
}