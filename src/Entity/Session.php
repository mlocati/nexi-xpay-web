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
 * @see https://developer.nexi.it/en/api/get-build-state
 * @see https://developer.nexi.it/en/api/post-build-cancel
 * @see https://developer.nexi.it/en/api/post-build-finalize-payment
 */
class Session extends Entity implements \MLocati\Nexi\XPayWeb\Service\QueryEntityInterface
{
    use \MLocati\Nexi\XPayWeb\Service\QueryEntityTrait;

    /**
     * Session identifier.
     *
     * @required in the getXPayBuildOrderStatus method
     * @optional in other cases
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 052211e8/+54cc/4e0a
     */
    public function getSessionId(): ?string
    {
        return $this->_getString('sessionId');
    }

    /**
     * Session identifier.
     *
     * @required in the getXPayBuildOrderStatus method
     * @optional in other cases
     *
     * @return $this
     *
     * @example 052211e8/+54cc/4e0a
     */
    public function setSessionId(?string $value): self
    {
        return $value === null ? $this->_unset('sessionId') : $this->_set('sessionId', $value);
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\XPayWeb\Entity::getRequiredFields()
     */
    protected function getRequiredFields(): array
    {
        return [
            'sessionId' => [
                'getXPayBuildOrderStatus' => true,
            ],
        ];
    }
}
