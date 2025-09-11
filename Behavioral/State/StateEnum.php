<?php

namespace Behavioral\State;

enum StateEnum: string

{
    case CREATED = 'created';
    case COLLECTED = 'collected';
    case DELIVERED = 'delivered';
    case CANCELLED = 'cancelled';
    case ARCHIVED = 'archived';
    case DONE = 'done';

    case PAID = 'paid';


    public static function getStates(): array
    {
        return self::cases();
    }
}
