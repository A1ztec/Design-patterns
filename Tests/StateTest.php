<?php


namespace Tests;

use Behavioral\State\OrderContext;
use Behavioral\State\StateEnum;
use Behavioral\State\User;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase

{
    public function testCanCreateOrder()
    {
        $user = new User('Tarek', 'Cairo', true);

        $order = new OrderContext($user);
        $this->assertEquals('created', $order->getState()->getState());
    }
    public function testCanMoveOrderFromCreatedToArchived()
    {
        $user = new User('Tarek', 'Cairo', true);

        $order = new OrderContext($user);
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        var_dump($order->getOrderLogs());
        $this->assertEquals(StateEnum::ARCHIVED->value, $order->getState()->getState());
    }

    public function testCanMoveOrderFromCreatedToCancelled()
    {
        $user = new User('Tarek', 'Cairo', false);

        $order = new OrderContext($user);
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        var_dump($order->getOrderLogs());
        $this->assertEquals(StateEnum::CANCELLED->value, $order->getState()->getState());
    }
}
