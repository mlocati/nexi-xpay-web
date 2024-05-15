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
 * @see https://developer.nexi.it/en/api/post-orders-2steps-init#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-2steps-payment#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-3steps-init#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-3steps-payment#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-card_verification#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-moto#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-virtual_card#tab_body
 */
class Card extends Entity
{
    /**
     * Card PAN.
     *
     * @required
     * Minimum length: 13
     * Maximum length: 19
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 23498093745973
     */
    public function getPan(): ?string
    {
        return $this->_getString('pan');
    }

    /**
     * Card PAN.
     *
     * @required
     * Minimum length: 13
     * Maximum length: 19
     *
     * @return $this
     *
     * @example 23498093745973
     */
    public function setPan(string $value): self
    {
        return $this->_set('pan', $value);
    }

    /**
     * Card expiry date in format mmyy.
     *
     * @required
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 0824
     */
    public function getExpiryDate(): ?string
    {
        return $this->_getString('expiryDate');
    }

    /**
     * Card expiry date in format mmyy.
     *
     * @required
     *
     * @return $this
     *
     * @example 0824
     */
    public function setExpiryDate(string $value): self
    {
        return $this->_set('expiryDate', $value);
    }

    /**
     * Card Validation Value, when available.
     *
     * @optional
     * Minimum length: 3
     * Maximum length: 4
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 234
     */
    public function getCvv(): ?string
    {
        return $this->_getString('cvv');
    }

    /**
     * Card Validation Value, when available.
     *
     * @optional
     * Minimum length: 3
     * Maximum length: 4
     *
     * @return $this
     *
     * @example 234
     */
    public function setCvv(?string $value): self
    {
        return $value === null ? $this->_unset('cvv') : $this->_set('cvv', $value);
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\XPayWeb\Entity::getRequiredFields()
     */
    protected function getRequiredFields(): array
    {
        return [
            'pan' => true,
            'expiryDate' => true,
        ];
    }
}
