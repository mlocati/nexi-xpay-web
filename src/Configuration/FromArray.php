<?php

declare(strict_types=1);

namespace MLocati\Nexi\Configuration;

use MLocati\Nexi\Configuration;

use RuntimeException;

class FromArray implements Configuration
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var bool
     */
    private $unsafeHttps;

    /**
     * @param array $data {
     *                    environment?: string, // 'test' for test environment, empty/missing for production
     *                    baseUrl?: string, // if missing or empty: we'll use the default base URL for test or production
     *                    apiKey?: string, // if missing or empty: for test we'll use the default API key, for production it's required
     *                    unsafeHttps?: bool, // allow using self-signed/expired/wrong HTTPS certificates: USE WITH CARE!
     *                    }
     *
     * @throws \RuntimeException in case of missing/wrong parameters
     */
    public function __construct(array $data)
    {
        $test = ($data['environment'] ?? '') === 'test';
        $this->baseUrl = (string) ($data['baseUrl'] ?? '');
        if ($this->baseUrl === '') {
            $this->baseUrl = $test ? static::DEFAULT_BASEURL_TEST : static::DEFAULT_BASEURL_PRODUCTION;
            if ($this->baseUrl === '') {
                throw new RuntimeException('Missing baseUrl in configuration');
            }
        }
        if (!filter_var($this->baseUrl, FILTER_VALIDATE_URL)) {
            throw new RuntimeException('Wrong baseUrl in configuration');
        }
        $this->apiKey = (string) ($data['apiKey'] ?? '');
        if ($this->apiKey === '') {
            $this->apiKey = $test ? static::DEFAULT_APIKEY_TEST : '';
            if ($this->apiKey === '') {
                throw new RuntimeException('Missing apiKey in configuration');
            }
        }
        $this->unsafeHttps = ($data['unsafeHttps'] ?? false) === true;
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\Configuration::getBaseUrl()
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\Configuration::getApiKey()
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * {@inheritdoc}
     *
     * @see \MLocati\Nexi\Configuration::allowUnsafeHttps()
     */
    public function allowUnsafeHttps(): bool
    {
        return $this->unsafeHttps;
    }
}
