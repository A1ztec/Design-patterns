<?php

namespace Behavioral\State;


class CollectedState extends State
{
    protected StateEnum $state = StateEnum::COLLECTED;

    public function proceed(): void
    {
        $this->transitionTo(new PaidState());
    }
}
