<?php

namespace Behavioral\State;


class OrderContext

{
    private array $orderLogs = [];

    public function __construct(private User $user, private State $state = new CreatedState()) {}

    public function getState(): State
    {
        return $this->state;
    }


    public function orderProceed()
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
