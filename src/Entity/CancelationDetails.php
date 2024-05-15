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
 * @see https://developer.nexi.it/en/api/get-reservations#tab_response
 * @see https://developer.nexi.it/en/api/get-reservations-reservationId#tab_response
 * @see https://developer.nexi.it/en/api/post-reservations#tab_body
 */
class CancelationDetails extends Entity
{
    /**
     * Type of date within which it is possible to cancel the reservation. Possible values:
     * - DATE
     * - HOUR_FROM_CHECKIN
     * - DAY_FROM_CHECKIN
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example HOUR_FROM_CHECKIN
     */
    public function getDataType(): ?string
    {
        return $this->_getString('dataType');
    }

    /**
     * Type of date within which it is possible to cancel the reservation. Possible values:
     * - DATE
     * - HOUR_FROM_CHECKIN
     * - DAY_FROM_CHECKIN
     *
     * @optional
     *
     * @return $this
     *
     * @example HOUR_FROM_CHECKIN
     */
    public function setDataType(?string $value): self
    {
        return $value === null ? $this->_unset('dataType') : $this->_set('dataType', $value);
    }

    /**
     * Array containing details on cancellation fees.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @return \MLocati\Nexi\XPayWeb\Entity\CancellationCondition[]|null
     */
    public function getCancellationCondition(): ?array
    {
        return $this->_getEntityArray('cancellationCondition', CancellationCondition::class);
    }

    /**
     * Array containing details on cancellation fees.
     *
     * @param \MLocati\Nexi\XPayWeb\Entity\CancellationCondition[]|null $value
     *
     * @optional
     *
     * @return $this
     */
    public function setCancellationCondition(?array $value): self
    {
        return $value === null ? $this->_unset('cancellationCondition') : $this->_setEntityArray('cancellationCondition', CancellationCondition::class, $value);
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
