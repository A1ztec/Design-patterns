<?php

namespace Behavioral\State;


class OrderContext

{
    public function __construct(private array $orderLogs, private State $state, private User $user) {}

    public function getState(): State
    {
        return $this->state;
    }


    public function orderProceed () 
    {
        $this->state->setOrderContext($this);
        $this->state->proceed();
        return $this->state;
    }
    public function setState(State $state): void
    {
        $this->state = $state;
    }
    public function getUser(): User
    {
        return $this->user;
    }

    public function getOrderLogs(): array
    {
        return $this->orderLogs;
    }

    public function addOrderLog(string $log): void
    {
        $this->orderLogs[] = $log;
    }
}
