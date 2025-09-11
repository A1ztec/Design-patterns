<?

namespace Behavioral\State;


class CreatedState extends State
{
    private StateEnum $state = StateEnum::CREATED;

    public function proceed() : void 
    {

        $this->transitionTo(new CollectedSate());
    }
    


}