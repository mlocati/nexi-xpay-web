<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Dictionary;

use ReflectionClass;

/* <<TOPCOMMENT>> */

/* <<CLASS_PHPDOC>> */
class ResponseCode
{
    /* <<IDS>> */

    /**
     * @return string[]
     */
    public function getAvailableIDs(): array
    {
        $result = [];
        $class = new ReflectionClass($this);
        foreach ($class->getConstants() as $name => $value) {
            if (strpos($name, 'ID_') === 0 && is_string($value)) {
                $result[] = $value;
            }
        }

        return $result;
    }
}
