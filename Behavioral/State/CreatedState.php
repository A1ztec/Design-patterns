<?php

namespace Behavioral\State;


class CreatedState extends State
{
    protected StateEnum $state = StateEnum::CREATED;

    public function proceed() : void 
    {

        $this->transitionTo(new CollectedState());
    }
    


}