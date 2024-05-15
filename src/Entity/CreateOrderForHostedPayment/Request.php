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
class Request extends Entity
{
    /**
     * Object containing the detail of the order.
     *
     * @required
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getOrder(): ?\MLocati\Nexi\XPayWeb\Entity\Order
    {
        return $this->_getEntity('order', \MLocati\Nexi\XPayWeb\Entity\Order::class);
    }

    /**
     * @see \MLocati\Nexi\XPayWeb\Entity\CreateOrderForHostedPayment\Request::getOrder()
     */
    public function getOrCreateOrder(): \MLocati\Nexi\XPayWeb\Entity\Order
    {
        $result = $this->getOrder();
        if ($result === null) {
            $this->setOrder($result = new \MLocati\Nexi\XPayWeb\Entity\Order());
        }

        return $result;
    }

    /**
     * Object containing the detail of the order.
     *
     * @required
     *
     * @return $this
     */
    public function setOrder(\MLocati\Nexi\XPayWeb\Entity\Order $value): self
    {
        return $this->_set('order', $value);
    }

    /**
     * Object containing the payment details.
     *
     * @required
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getPaymentSession(): ?\MLocati\Nexi\XPayWeb\Entity\PaymentSession
    {
        return $this->_getEntity('paymentSession', \MLocati\Nexi\XPayWeb\Entity\PaymentSession::class);
    }

    /**
     * @see \MLocati\Nexi\XPayWeb\Entity\CreateOrderForHostedPayment\Request::getPaymentSession()
     */
    public function getOrCreatePaymentSession(): \MLocati\Nexi\XPayWeb\Entity\PaymentSession
    {
        $result = $this->getPaymentSession();
        if ($result === null) {
            $this->setPaymentSession($result = new \MLocati\Nexi\XPayWeb\Entity\PaymentSession());
        }

        return $result;
    }

    /**
     * Object containing the payment details.
     *
     * @required
     *
     * @return $this
     */
    public function setPaymentSession(\MLocati\Nexi\XPayWeb\Entity\PaymentSession $value): self
    {
        return $this->_set('paymentSession', $value);
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\XPayWeb\Entity::getRequiredFields()
     */
    protected function getRequiredFields(): array
    {
        return [
            'order' => true,
            'paymentSession' => true,
        ];
    }
}
