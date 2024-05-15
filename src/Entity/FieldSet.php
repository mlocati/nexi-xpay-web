<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Entity;

use MLocati\Nexi\XPayWeb\Entity;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * @see https://developer.nexi.it/en/api/get-build-state#tab_response
 * @see https://developer.nexi.it/en/api/post-orders-build
 */
class FieldSet extends Entity
{
    /**
     * Session identifier.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example sessionId
     */
    public function getSessionId(): ?string
    {
        return $this->_getString('sessionId');
    }

    /**
     * Session identifier.
     *
     * @optional
     *
     * @return $this
     *
     * @example sessionId
     */
    public function setSessionId(?string $value): self
    {
        return $value === null ? $this->_unset('sessionId') : $this->_set('sessionId', $value);
    }

    /**
     * Security token for the transaction.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example security token
     */
    public function getSecurityToken(): ?string
    {
        return $this->_getString('securityToken');
    }

    /**
     * Security token for the transaction.
     *
     * @optional
     *
     * @return $this
     *
     * @example security token
     */
    public function setSecurityToken(?string $value): self
    {
        return $value === null ? $this->_unset('securityToken') : $this->_set('securityToken', $value);
    }

    /**
     * Array of objects containing the iframes corresponding to the payment methods active on the merchant's terminal.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @return \MLocati\Nexi\XPayWeb\Entity\Field[]|null
     */
    public function getFields(): ?array
    {
        return $this->_getEntityArray('fields', Field::class);
    }

    /**
     * Array of objects containing the iframes corresponding to the payment methods active on the merchant's terminal.
     *
     * @param \MLocati\Nexi\XPayWeb\Entity\Field[]|null $value
     *
     * @optional
     *
     * @return $this
     */
    public function setFields(?array $value): self
    {
        return $value === null ? $this->_unset('fields') : $this->_setEntityArray('fields', Field::class, $value);
    }

    /**
     * Transaction status. Possible values:
     * - CARD_DATA_COLLECTION: the customer has chosen payment by card. The "fieldSet" object containing the iframes for collecting the card data is returned.
     * - PAYMENT_METHOD_SELECTION: the customer must proceed with the choice of payment method. The "fieldSet" object containing the payment method iframes is returned.
     * - READY_FOR_PAYMENT: payment ready to be executed, it is necessary to call the API POST /build/finalize_payment.
     * - REDIRECTED_TO_EXTERNAL_DOMAIN - The url to perform 3D Secure authentication has been provided. The "url" parameter is returned.
     * - PAYMENT_COMPLETE: Payment has been completed. The "operation" object is returned.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getState(): ?string
    {
        return $this->_getString('state');
    }

    /**
     * Transaction status. Possible values:
     * - CARD_DATA_COLLECTION: the customer has chosen payment by card. The "fieldSet" object containing the iframes for collecting the card data is returned.
     * - PAYMENT_METHOD_SELECTION: the customer must proceed with the choice of payment method. The "fieldSet" object containing the payment method iframes is returned.
     * - READY_FOR_PAYMENT: payment ready to be executed, it is necessary to call the API POST /build/finalize_payment.
     * - REDIRECTED_TO_EXTERNAL_DOMAIN - The url to perform 3D Secure authentication has been provided. The "url" parameter is returned.
     * - PAYMENT_COMPLETE: Payment has been completed. The "operation" object is returned.
     *
     * @optional
     *
     * @return $this
     */
    public function setState(?string $value): self
    {
        return $value === null ? $this->_unset('state') : $this->_set('state', $value);
    }

    /**
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example https:apm_url.it
     */
    public function getUrl(): ?string
    {
        return $this->_getString('url');
    }

    /**
     * @optional
     *
     * @return $this
     *
     * @example https:apm_url.it
     */
    public function setUrl(?string $value): self
    {
        return $value === null ? $this->_unset('url') : $this->_set('url', $value);
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\XPayWeb\Entity::getRequiredFields()
     */
    protected function getRequiredFields(): array
    {
        return [
        ];
    }
}
