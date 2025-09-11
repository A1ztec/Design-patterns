<?php

namespace Behavioral\State;


class CollectedSate extends State
{
    private StateEnum $state = StateEnum::COLLECTED;

    public function proceed(): void
    {
        $this->transitionTo(new PaidState());
    }
}
