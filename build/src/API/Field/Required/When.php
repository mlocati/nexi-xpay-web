<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Build\API\Field\Required;

enum When: string
{
    case Sending = 'send';
    case Receiving = 'receive';
}
