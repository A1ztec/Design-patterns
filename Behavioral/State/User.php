<?php

namespace Behavioral\State;

class User
{
    public function __construct(private string $name, private string $address, private bool $paymentExists) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function isPaymentExists(): bool
    {
        return $this->paymentExists;
    }
}
