<?

namespace Behavioral\State;


class PaidState extends State
{
    private StateEnum $state = StateEnum::PAID;

    public function proceed(): void
    {

        $paymentStatus = $this->getContext()->getUser()->isPaymentExists();

        if(!$paymentStatus){
            $this->transitionTo(new CancelledState());
        }else{
            $this->transitionTo(new DeliveredState());
        }
    }
}