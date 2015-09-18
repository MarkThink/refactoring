<?php

namespace AdminBundle;

final class StoreEvents
{
    /*
     * store.order 事件会在每次订单被创建时抛出
     *
     * 监听该事件的监听者会接收到一个
     * AdminBundle\Event\FilterOrderEvent实例
     */
    const  STORE_ORDER = 'store_order';
}