<?php

namespace Behavioral\State;

class DeliveredState extends State
{
    private StateEnum $state = StateEnum::DELIVERED;

    public function proceed(): void
    {
         $this->transitionTo(new DoneState());
    }
}
