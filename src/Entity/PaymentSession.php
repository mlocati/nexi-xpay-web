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
 * @see https://developer.nexi.it/en/api/post-orders-build#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-hpp#tab_body
 * @see https://developer.nexi.it/en/api/post-orders-paybylink#tab_body
 */
class PaymentSession extends Entity
{
    /**
     * Indicates the type of operation:
     * * PAY - performs a payment transaction
     * * VERIFY - performs a verify operation, without any charge, with the sole purpose of confirming the validity of the card data entered by the customer
     * * PREAUTH - performs a preauthorization operation
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example PAY
     */
    public function getActionType(): ?string
    {
        return $this->_getString('actionType');
    }

    /**
     * Indicates the type of operation:
     * * PAY - performs a payment transaction
     * * VERIFY - performs a verify operation, without any charge, with the sole purpose of confirming the validity of the card data entered by the customer
     * * PREAUTH - performs a preauthorization operation
     *
     * @optional
     *
     * @return $this
     *
     * @example PAY
     */
    public function setActionType(?string $value): self
    {
        return $value === null ? $this->_unset('actionType') : $this->_set('actionType', $value);
    }

    /**
     * Amount of the first payment which may be less or equals to the order amount. 50 EUR is represented as 5000 (2 decimals) 50 JPY is represented as 50 (0 decimals).
     *
     * @required
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example 3545
     */
    public function getAmount(): ?string
    {
        return $this->_getString('amount');
    }

    /**
     * Amount of the first payment which may be less or equals to the order amount. 50 EUR is represented as 5000 (2 decimals) 50 JPY is represented as 50 (0 decimals).
     *
     * @required
     *
     * @return $this
     *
     * @example 3545
     */
    public function setAmount(string $value): self
    {
        return $this->_set('amount', $value);
    }

    /**
     * Object containing the detail of the occurrence.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getRecurrence(): ?Recurrence
    {
        return $this->_getEntity('recurrence', Recurrence::class);
    }

    /**
     * @see \MLocati\Nexi\XPayWeb\Entity\PaymentSession::getRecurrence()
     */
    public function getOrCreateRecurrence(): Recurrence
    {
        $result = $this->getRecurrence();
        if ($result === null) {
            $this->setRecurrence($result = new Recurrence());
        }

        return $result;
    }

    /**
     * Object containing the detail of the occurrence.
     *
     * @optional
     *
     * @return $this
     */
    public function setRecurrence(?Recurrence $value): self
    {
        return $value === null ? $this->_unset('recurrence') : $this->_set('recurrence', $value);
    }

    /**
     * Overwrites the default confirmation method of the terminal, for card payments only:
     * * IMPLICIT - automatic confirmation
     * * EXPLICIT - authorization only
     * Default value depends on the terminal configuration.
     * 1. Terminal set to EXPLICIT:
     * a. if the captureType is EXPLICIT the capture will be EXPLICIT
     * b. if the captureType is null the capture will be EXPLICIT
     * c. if the captureType is IMPLICIT the capture will be IMPLICIT
     * 2. Terminal set to IMPLICIT:
     * a. if the captureType is EXPLICIT the capture will be an error
     * b. if the captureType is null the capture will be IMPLICIT
     * c. if the captureType is IMPLICIT the capture will be IMPLICIT
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example EXPLICIT
     */
    public function getCaptureType(): ?string
    {
        return $this->_getString('captureType');
    }

    /**
     * Overwrites the default confirmation method of the terminal, for card payments only:
     * * IMPLICIT - automatic confirmation
     * * EXPLICIT - authorization only
     * Default value depends on the terminal configuration.
     * 1. Terminal set to EXPLICIT:
     * a. if the captureType is EXPLICIT the capture will be EXPLICIT
     * b. if the captureType is null the capture will be EXPLICIT
     * c. if the captureType is IMPLICIT the capture will be IMPLICIT
     * 2. Terminal set to IMPLICIT:
     * a. if the captureType is EXPLICIT the capture will be an error
     * b. if the captureType is null the capture will be IMPLICIT
     * c. if the captureType is IMPLICIT the capture will be IMPLICIT
     *
     * @optional
     *
     * @return $this
     *
     * @example EXPLICIT
     */
    public function setCaptureType(?string $value): self
    {
        return $value === null ? $this->_unset('captureType') : $this->_set('captureType', $value);
    }

    /**
     * NO_PREFERENCE, CHALLENGE_REQUESTED
     *
     * @default NO_PREFERENCE
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example NO_PREFERENCE
     */
    public function getExemptions(): ?string
    {
        return $this->_getString('exemptions');
    }

    /**
     * NO_PREFERENCE, CHALLENGE_REQUESTED
     *
     * @default NO_PREFERENCE
     *
     * @optional
     *
     * @return $this
     *
     * @example NO_PREFERENCE
     */
    public function setExemptions(?string $value): self
    {
        return $value === null ? $this->_unset('exemptions') : $this->_set('exemptions', $value);
    }

    /**
     * Language to be used on the hosted payment page. ISO 639-2.
     *
     * @default ita
     *
     * @required
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example ita
     */
    public function getLanguage(): ?string
    {
        return $this->_getString('language');
    }

    /**
     * Language to be used on the hosted payment page. ISO 639-2.
     *
     * @default ita
     *
     * @required
     *
     * @return $this
     *
     * @example ita
     */
    public function setLanguage(string $value): self
    {
        return $this->_set('language', $value);
    }

    /**
     * If present, the payment page is displayed allowing the user to make the payment only with the circuits or payment methods indicated. The possible values are indicated in the table PaymentService encoding.
     *
     * @optional
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     */
    public function getPaymentService(): ?string
    {
        return $this->_getString('paymentService');
    }

    /**
     * If present, the payment page is displayed allowing the user to make the payment only with the circuits or payment methods indicated. The possible values are indicated in the table PaymentService encoding.
     *
     * @optional
     *
     * @return $this
     */
    public function setPaymentService(?string $value): self
    {
        return $value === null ? $this->_unset('paymentService') : $this->_set('paymentService', $value);
    }

    /**
     * Merchant URL where the cardholder is redirected once the hosted payment completes.
     * The field value must start with “http://” or “https://” and the standard ports 80 or 443 must be used.
     *
     * @required in the createOrderForHostedPayment method
     * @required in the createXPayBuildOrder method
     * @optional in other cases
     * Maximum length: 2048
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example https://{merchant_result_url}
     */
    public function getResultUrl(): ?string
    {
        return $this->_getString('resultUrl');
    }

    /**
     * Merchant URL where the cardholder is redirected once the hosted payment completes.
     * The field value must start with “http://” or “https://” and the standard ports 80 or 443 must be used.
     *
     * @required in the createOrderForHostedPayment method
     * @required in the createXPayBuildOrder method
     * @optional in other cases
     * Maximum length: 2048
     *
     * @return $this
     *
     * @example https://{merchant_result_url}
     */
    public function setResultUrl(?string $value): self
    {
        return $value === null ? $this->_unset('resultUrl') : $this->_set('resultUrl', $value);
    }

    /**
     * Merchant URL where the cardholder is redirected once the hosted payment is abandoned.
     * The field value must start with “http://” or “https://” and the standard ports 80 or 443 must be used.
     *
     * @required in the createOrderForHostedPayment method
     * @required in the createXPayBuildOrder method
     * @optional in other cases
     * Maximum length: 2048
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example https://{merchant_cancel_url}
     */
    public function getCancelUrl(): ?string
    {
        return $this->_getString('cancelUrl');
    }

    /**
     * Merchant URL where the cardholder is redirected once the hosted payment is abandoned.
     * The field value must start with “http://” or “https://” and the standard ports 80 or 443 must be used.
     *
     * @required in the createOrderForHostedPayment method
     * @required in the createXPayBuildOrder method
     * @optional in other cases
     * Maximum length: 2048
     *
     * @return $this
     *
     * @example https://{merchant_cancel_url}
     */
    public function setCancelUrl(?string $value): self
    {
        return $value === null ? $this->_unset('cancelUrl') : $this->_set('cancelUrl', $value);
    }

    /**
     * Address to which the outcome of the transaction with relative parameters is sent, in server to server mode with the POST method:
     * - The field value must start with “http://” or “https://”.
     * - Standard ports 80 or 443 must be used.
     * - A public certificate must be used.
     * - Must not be authenticated.
     * The content of the notification is detailed in the section Notification.
     *
     * @optional
     * Maximum length: 2048
     *
     * @throws \MLocati\Nexi\XPayWeb\Exception\WrongFieldType
     *
     * @example https://{merchant_notification_url}
     */
    public function getNotificationUrl(): ?string
    {
        return $this->_getString('notificationUrl');
    }

    /**
     * Address to which the outcome of the transaction with relative parameters is sent, in server to server mode with the POST method:
     * - The field value must start with “http://” or “https://”.
     * - Standard ports 80 or 443 must be used.
     * - A public certificate must be used.
     * - Must not be authenticated.
     * The content of the notification is detailed in the section Notification.
     *
     * @optional
     * Maximum length: 2048
     *
     * @return $this
     *
     * @example https://{merchant_notification_url}
     */
    public function setNotificationUrl(?string $value): self
    {
        return $value === null ? $this->_unset('notificationUrl') : $this->_set('notificationUrl', $value);
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\XPayWeb\Entity::getRequiredFields()
     */
    protected function getRequiredFields(): array
    {
        return [
            'amount' => true,
            'language' => true,
            'resultUrl' => [
                'createOrderForHostedPayment' => true,
                'createXPayBuildOrder' => true,
            ],
            'cancelUrl' => [
                'createOrderForHostedPayment' => true,
                'createXPayBuildOrder' => true,
            ],
        ];
    }
}
