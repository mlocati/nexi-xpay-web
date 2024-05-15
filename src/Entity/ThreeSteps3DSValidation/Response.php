<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Entity\ThreeSteps3DSValidation;

use MLocati\Nexi\XPayWeb\Entity;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * @see https://developer.nexi.it/en/api/post-orders-3steps-validation
 */
class Response extends Entity
{
    /**
     * Object containing operation detail.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getOperation(): ?\MLocati\Nexi\XPayWeb\Entity\Operation
    {
        return $this->_getEntity('operation', \MLocati\Nexi\XPayWeb\Entity\Operation::class);
    }

    /**
     * Object containing operation detail.
     *
     * @optional
     *
     * @return $this
     */
    public function setOperation(?\MLocati\Nexi\XPayWeb\Entity\Operation $value): self
    {
        return $value === null ? $this->_unset('operation') : $this->_set('operation', $value);
    }

    /**
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getThreeDSAuthResult(): ?\MLocati\Nexi\XPayWeb\Entity\ThreeDSAuthResult
    {
        return $this->_getEntity('threeDSAuthResult', \MLocati\Nexi\XPayWeb\Entity\ThreeDSAuthResult::class);
    }

    /**
     * @optional
     *
     * @return $this
     */
    public function setThreeDSAuthResult(?\MLocati\Nexi\XPayWeb\Entity\ThreeDSAuthResult $value): self
    {
        return $value === null ? $this->_unset('threeDSAuthResult') : $this->_set('threeDSAuthResult', $value);
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
