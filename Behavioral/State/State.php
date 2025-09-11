<?php

namespace Behavioral\State;

abstract class State
{
    protected StateEnum $state;
    protected OrderContext $orderContext;

    public function setOrderContext(OrderContext $orderContext): void
    {
        $this->orderContext = $orderContext;
        $this->addStateToLog();
    }

    public function getContext(): OrderContext
    {
        return $this->orderContext;
    }

    public function getState(): string
    {
        return $this->state->value;
    }

    abstract public function proceed(): void;


    public function transitionTo(State $state): void
    {
        $this->getContext()->setState($state);
    }

    public function addStateToLog(): void
    {
        $this->getContext()->addOrderLog('Order state changed to ' . $this->state->value);
    }
}
