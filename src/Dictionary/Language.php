<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Dictionary;

use ReflectionClass;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * List of ISO 639-2 codes of the languages supported by Nexi.
 *
 * @see https://developer.nexi.it/en/altro-/codifiche/codifica-language
 */
class Language
{
    /**
     * Arabic
     *
     * @var string
     */
    const ID_ARA = 'ara';

    /**
     * German
     *
     * @var string
     */
    const ID_DEU = 'deu';

    /**
     * Greek
     *
     * @var string
     */
    const ID_ELL = 'ell';

    /**
     * English
     *
     * @var string
     */
    const ID_ENG = 'eng';

    /**
     * French
     *
     * @var string
     */
    const ID_FRA = 'fra';

    /**
     * Italian
     *
     * @var string
     */
    const ID_ITA = 'ita';

    /**
     * Japanese
     *
     * @var string
     */
    const ID_JPN = 'jpn';

    /**
     * Portoguese
     *
     * @var string
     */
    const ID_POR = 'por';

    /**
     * Russian
     *
     * @var string
     */
    const ID_RUS = 'rus';

    /**
     * Spanish
     *
     * @var string
     */
    const ID_SPA = 'spa';

    /**
     * Zhuang, Chuang
     *
     * @var string
     */
    const ID_ZHA = 'zha';

    /**
     * @private
     */
    const NEXI_TO_ALPHA2 = [
        self::ID_ARA => 'ar',
        self::ID_DEU => 'de',
        self::ID_ELL => 'el',
        self::ID_ENG => 'en',
        self::ID_FRA => 'fr',
        self::ID_ITA => 'it',
        self::ID_JPN => 'ja',
        self::ID_POR => 'pt',
        self::ID_RUS => 'ru',
        self::ID_SPA => 'es',
        self::ID_ZHA => 'za',
    ];

    /**
     * @private
     */
    const ALPHA2_TO_NEXI = [
        'ar' => self::ID_ARA,
        'de' => self::ID_DEU,
        'el' => self::ID_ELL,
        'en' => self::ID_ENG,
        'fr' => self::ID_FRA,
        'it' => self::ID_ITA,
        'ja' => self::ID_JPN,
        'pt' => self::ID_POR,
        'ru' => self::ID_RUS,
        'es' => self::ID_SPA,
        'za' => self::ID_ZHA,
    ];

    /**
     * @return string[]
     */
    public function getAvailableIDs(): array
    {
        $result = [];
        $class = new ReflectionClass($this);
        foreach ($class->getConstants() as $name => $value) {
            if (strpos($name, 'ID_') === 0 && is_string($value)) {
                $result[] = $value;
            }
        }

        return $result;
    }

    /**
     * Resolve a locale identifier (for example: 'it-IT@UTF-8') to a Nexi language identifier (for example 'ita')
     *
     * @return string empty string if no corresponding Nexi language identifier has been found
     */
    public function getNexiCodeFromLocale(string $localeID): string
    {
        [$language] = preg_split('/\\W/', str_replace('_', '-', $localeID), 2);

        return $this->getNexiCodeFromIso639Alpha2($language);
    }

    /**
     * Resolve an ISO-639 alpha2 language identifier (for example: 'it') to a Nexi language identifier (for example 'ita')
     *
     * @return string empty string if no corresponding Nexi language identifier has been found
     */
    public function getNexiCodeFromIso639Alpha2(string $alpha2LanguageID): string
    {
        $alpha2LanguageID = strtolower(trim($alpha2LanguageID));
        $map = array_change_key_case(static::ALPHA2_TO_NEXI, CASE_LOWER);
        if (isset($map[$alpha2LanguageID])) {
            return $map[$alpha2LanguageID];
        }
        $ids = $this->getAvailableIDs();
        $map = array_change_key_case(array_combine($ids, $ids), CASE_LOWER);
        if (isset($map[$alpha2LanguageID])) {
            return $map[$alpha2LanguageID];
        }

        return '';
    }
}
