<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Dictionary;

use ReflectionClass;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * List of error codes.
 *
 * @see https://developer.nexi.it/en/altro-/codifiche/codici-errore
 */
class ErrorCode
{
    /**
     * Generic API error
     *
     * @var string
     */
    const ID_PS0000 = 'PS0000';

    /**
     * Cancel Operation not allowed for PAYPAL APM
     *
     * @var string
     */
    const ID_PS0001 = 'PS0001';

    /**
     * Can cancel the operation only in the same day it's performed
     *
     * @var string
     */
    const ID_PS0002 = 'PS0002';

    /**
     * Error during card-verification
     *
     * @var string
     */
    const ID_PS0004 = 'PS0004';

    /**
     * Invalid installment amount. The sum must be lower or equals to order amount
     *
     * @var string
     */
    const ID_PS0005 = 'PS0005';

    /**
     * Invalid installment date. The date must be in ISO8601 format and should not be on the past
     *
     * @var string
     */
    const ID_PS0006 = 'PS0006';

    /**
     * PaymentSession amount must be lower or equal to order amount
     *
     * @var string
     */
    const ID_PS0007 = 'PS0007';

    /**
     * Invalid requested %s date. The date must be in ISO8601 format
     *
     * @var string
     */
    const ID_PS0008 = 'PS0008';

    /**
     * Invalid requested currency
     *
     * @var string
     */
    const ID_PS0009 = 'PS0009';

    /**
     * Invalid requested %s date. The date must be in ISO8601 format
     *
     * @var string
     */
    const ID_PS0010 = 'PS0010';

    /**
     * Invalid provided time. Its format must be 'HH:mm'. EXAMPLE: 10:22
     *
     * @var string
     */
    const ID_PS0011 = 'PS0011';

    /**
     * Invalid provided time. Dates from/to are incorrect.
     *
     * @var string
     */
    const ID_PS0012 = 'PS0012';

    /**
     * Invalid provided date %s. Dates from/to are incorrect.
     *
     * @var string
     */
    const ID_PS0013 = 'PS0013';

    /**
     * Invalid contractid
     *
     * @var string
     */
    const ID_PS0017 = 'PS0017';

    /**
     * Error occured during retrieve contract by customer
     *
     * @var string
     */
    const ID_PS0018 = 'PS0018';

    /**
     * An already voided operation can't be captured
     *
     * @var string
     */
    const ID_PS0022 = 'PS0022';

    /**
     * An already executed operation can't be captured
     *
     * @var string
     */
    const ID_PS0023 = 'PS0023';

    /**
     * An already refunded operation can't be captured
     *
     * @var string
     */
    const ID_PS0024 = 'PS0024';

    /**
     * The idempotency key is wrong or missing in the request.
     *
     * @var string
     */
    const ID_PS0025 = 'PS0025';

    /**
     * Invalid %s parameter
     *
     * @var string
     */
    const ID_PS0026 = 'PS0026';

    /**
     * Operation already refunded
     *
     * @var string
     */
    const ID_PS0027 = 'PS0027';

    /**
     * Operation already voided
     *
     * @var string
     */
    const ID_PS0028 = 'PS0028';

    /**
     * The refundable amount must be equal or lower than the captured amount
     *
     * @var string
     */
    const ID_PS0029 = 'PS0029';

    /**
     * Generic Paypal Void Error
     *
     * @var string
     */
    const ID_PS0032 = 'PS0032';

    /**
     * Generic Paypal Refund Error
     *
     * @var string
     */
    const ID_PS0033 = 'PS0033';

    /**
     * Generic Paypal Capture Error
     *
     * @var string
     */
    const ID_PS0034 = 'PS0034';

    /**
     * Generic Json Processing Error
     *
     * @var string
     */
    const ID_PS0035 = 'PS0035';

    /**
     * Invalid provided order amount. It must be numeric
     *
     * @var string
     */
    const ID_PS0036 = 'PS0036';

    /**
     * TenantId, MerchantId and TerminalId not found in JWT or Header Parameter
     *
     * @var string
     */
    const ID_PS0040 = 'PS0040';

    /**
     * Embedded javascript is forbidden!
     *
     * @var string
     */
    const ID_PS0041 = 'PS0041';

    /**
     * Error during paybylink validation
     *
     * @var string
     */
    const ID_PS0042 = 'PS0042';

    /**
     * Error occurred during MIT invocation
     *
     * @var string
     */
    const ID_PS0043 = 'PS0043';

    /**
     * Error while the link is being deleted
     *
     * @var string
     */
    const ID_PS0044 = 'PS0044';

    /**
     * PaymentLink cannot be deleted because it has already been used
     *
     * @var string
     */
    const ID_PS0045 = 'PS0045';

    /**
     * Error during payment_method invocation. Terminal not found
     *
     * @var string
     */
    const ID_PS0051 = 'PS0051';

    /**
     * Invalid terminal id. Terminal not found
     *
     * @var string
     */
    const ID_PS0052 = 'PS0052';

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
