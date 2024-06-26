<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Entity\CreateOrderForHostedPayment;

use MLocati\Nexi\XPayWeb\Entity;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * @see https://developer.nexi.it/en/api/post-orders-hpp
 */
class Response extends Entity
{
    /**
     * URL of the hosted payment page. Redirect the payment flow to this URL.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example https://{gateway_hosted_page}
     */
    public function getHostedPage(): ?string
    {
        return $this->_getString('hostedPage');
    }

    /**
     * URL of the hosted payment page. Redirect the payment flow to this URL.
     *
     * @optional
     *
     * @return $this
     *
     * @example https://{gateway_hosted_page}
     */
    public function setHostedPage(?string $value): self
    {
        return $value === null ? $this->_unset('hostedPage') : $this->_set('hostedPage', $value);
    }

    /**
     * Token which may be used for validating the notifications related to this payment.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 2f0ea5059b41414ca3744fe672327d85
     */
    public function getSecurityToken(): ?string
    {
        return $this->_getString('securityToken');
    }

    /**
     * Token which may be used for validating the notifications related to this payment.
     *
     * @optional
     *
     * @return $this
     *
     * @example 2f0ea5059b41414ca3744fe672327d85
     */
    public function setSecurityToken(?string $value): self
    {
        return $value === null ? $this->_unset('securityToken') : $this->_set('securityToken', $value);
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
