<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Entity\FindOrders;

use MLocati\Nexi\XPayWeb\Entity;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * @see https://developer.nexi.it/en/api/get-orders
 */
class Response extends Entity
{
    /**
     * Array containing the orders list.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @return \MLocati\Nexi\XPayWeb\Entity\OrderDetails[]|null
     */
    public function getOrders(): ?array
    {
        return $this->_getEntityArray('orders', \MLocati\Nexi\XPayWeb\Entity\OrderDetails::class);
    }

    /**
     * Array containing the orders list.
     *
     * @param \MLocati\Nexi\XPayWeb\Entity\OrderDetails[]|null $value
     *
     * @optional
     *
     * @return $this
     */
    public function setOrders(?array $value): self
    {
        return $value === null ? $this->_unset('orders') : $this->_setEntityArray('orders', \MLocati\Nexi\XPayWeb\Entity\OrderDetails::class, $value);
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
