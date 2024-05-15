<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Entity\FindStructureTermsAndConditionsById;

use MLocati\Nexi\XPayWeb\Entity;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * @see https://developer.nexi.it/en/api/get-structure_conditions-structureConditionId
 */
class Response extends Entity
{
    /**
     * Unique identifier of terms and conditions for the structure.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example aeca2ac3-1d03-4f17-855b-19767f9c4586
     */
    public function getStructureConditionId(): ?string
    {
        return $this->_getString('structureConditionId');
    }

    /**
     * Unique identifier of terms and conditions for the structure.
     *
     * @optional
     *
     * @return $this
     *
     * @example aeca2ac3-1d03-4f17-855b-19767f9c4586
     */
    public function setStructureConditionId(?string $value): self
    {
        return $value === null ? $this->_unset('structureConditionId') : $this->_set('structureConditionId', $value);
    }

    /**
     * Possible values:
     * - PREPAID_REFUNDABLE: reservation is paid in advace for the service that will be provided and it can be refundable.
     * - PREPAID_NOT_REFUNDABLE: reservation is paid in advace for the service that will be provided and it can not be refundable.
     * - GUARANTEED_NOSHOW: reservation, through a card verification without charge to the customer. If the customer does not show up at the property, it is possible to charge the cost of the first night of stay.
     * - GUARANTEED_PENALTY: reservation, through a card verification without charge to the customer. An automatic charge of the predetermined penalty is made in case a guest does not show up at the property.
     * - BUNDLE: booking of a package containing several services provided by the same structure, for example stay + excursion + restaurant + tourist bus.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example GUARANTEED
     */
    public function getReservationType(): ?string
    {
        return $this->_getString('reservationType');
    }

    /**
     * Possible values:
     * - PREPAID_REFUNDABLE: reservation is paid in advace for the service that will be provided and it can be refundable.
     * - PREPAID_NOT_REFUNDABLE: reservation is paid in advace for the service that will be provided and it can not be refundable.
     * - GUARANTEED_NOSHOW: reservation, through a card verification without charge to the customer. If the customer does not show up at the property, it is possible to charge the cost of the first night of stay.
     * - GUARANTEED_PENALTY: reservation, through a card verification without charge to the customer. An automatic charge of the predetermined penalty is made in case a guest does not show up at the property.
     * - BUNDLE: booking of a package containing several services provided by the same structure, for example stay + excursion + restaurant + tourist bus.
     *
     * @optional
     *
     * @return $this
     *
     * @example GUARANTEED
     */
    public function setReservationType(?string $value): self
    {
        return $value === null ? $this->_unset('reservationType') : $this->_set('reservationType', $value);
    }

    /**
     * Free label to let the merchant identify the termsAndConditions version for audit purposes.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example Grand Hotel Mississipi selling conditions v01
     */
    public function getName(): ?string
    {
        return $this->_getString('name');
    }

    /**
     * Free label to let the merchant identify the termsAndConditions version for audit purposes.
     *
     * @optional
     *
     * @return $this
     *
     * @example Grand Hotel Mississipi selling conditions v01
     */
    public function setName(?string $value): self
    {
        return $value === null ? $this->_unset('name') : $this->_set('name', $value);
    }

    /**
     * Timestamp related to creation date for terms and conditions.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 2023-03-16T00:00:00.000Z
     */
    public function getTecCreationDate(): ?string
    {
        return $this->_getString('tecCreationDate');
    }

    /**
     * Timestamp related to creation date for terms and conditions.
     *
     * @optional
     *
     * @return $this
     *
     * @example 2023-03-16T00:00:00.000Z
     */
    public function setTecCreationDate(?string $value): self
    {
        return $value === null ? $this->_unset('tecCreationDate') : $this->_set('tecCreationDate', $value);
    }

    /**
     * Array of terms and conditions in multiple languages.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @return \MLocati\Nexi\XPayWeb\Entity\StructureTermsAndConditionsDetails[]|null
     */
    public function getTermsAndConditions(): ?array
    {
        return $this->_getEntityArray('termsAndConditions', \MLocati\Nexi\XPayWeb\Entity\StructureTermsAndConditionsDetails::class);
    }

    /**
     * Array of terms and conditions in multiple languages.
     *
     * @param \MLocati\Nexi\XPayWeb\Entity\StructureTermsAndConditionsDetails[]|null $value
     *
     * @optional
     *
     * @return $this
     */
    public function setTermsAndConditions(?array $value): self
    {
        return $value === null ? $this->_unset('termsAndConditions') : $this->_setEntityArray('termsAndConditions', \MLocati\Nexi\XPayWeb\Entity\StructureTermsAndConditionsDetails::class, $value);
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
