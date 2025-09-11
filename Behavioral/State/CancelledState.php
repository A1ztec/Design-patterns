<?php

namespace Behavioral\State;

class CancelledState extends State
{
    private StateEnum $state = StateEnum::CANCELLED;

    public function proceed(): void
    {
        $this->transitionTo(new ArchivedState());
    }
}
