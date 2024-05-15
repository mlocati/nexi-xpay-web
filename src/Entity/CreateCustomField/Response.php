<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Entity\CreateCustomField;

use MLocati\Nexi\XPayWeb\Entity;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * @see https://developer.nexi.it/en/api/post-custom_fields
 */
class Response extends Entity
{
    /**
     * The unique identifier for custom field.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 0d0f3240-efd3-4c6b-b305-b8ec3bb7a99a
     */
    public function getCustomFieldId(): ?string
    {
        return $this->_getString('customFieldId');
    }

    /**
     * The unique identifier for custom field.
     *
     * @optional
     *
     * @return $this
     *
     * @example 0d0f3240-efd3-4c6b-b305-b8ec3bb7a99a
     */
    public function setCustomFieldId(?string $value): self
    {
        return $value === null ? $this->_unset('customFieldId') : $this->_set('customFieldId', $value);
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
