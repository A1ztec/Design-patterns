<?

namespace Behavioral\State;

class DoneState extends State
{
    private StateEnum $state = StateEnum::DONE;

    public function proceed(): void
    {
        $this->transitionTo(new ArchivedState());
    }
}