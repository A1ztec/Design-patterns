<?php


namespace Tests;

use Behavioral\State\OrderContext;
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
        $this->assertEquals('archived', $order->getState()->getState());
    }
}
