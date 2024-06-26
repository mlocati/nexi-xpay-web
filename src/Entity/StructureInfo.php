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
 * @see https://developer.nexi.it/en/api/get-structures
 * @see https://developer.nexi.it/en/api/get-structures-structureId
 * @see https://developer.nexi.it/en/api/post-structures
 */
class StructureInfo extends Entity
{
    /**
     * Object containing the detail of the structure.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getStructure(): ?Structure
    {
        return $this->_getEntity('structure', Structure::class);
    }

    /**
     * @see \MLocati\Nexi\XPayWeb\Entity\StructureInfo::getStructure()
     */
    public function getOrCreateStructure(): Structure
    {
        $result = $this->getStructure();
        if ($result === null) {
            $this->setStructure($result = new Structure());
        }

        return $result;
    }

    /**
     * Object containing the detail of the structure.
     *
     * @optional
     *
     * @return $this
     */
    public function setStructure(?Structure $value): self
    {
        return $value === null ? $this->_unset('structure') : $this->_set('structure', $value);
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
