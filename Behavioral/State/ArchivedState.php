<?

namespace Behavioral\State;

class ArchivedState extends State
{
    private StateEnum $state = StateEnum::ARCHIVED;

    public function proceed(): void
    {
        echo "Order is already archived. No further transitions possible.";
    }
}