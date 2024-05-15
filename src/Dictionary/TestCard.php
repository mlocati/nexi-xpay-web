<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Dictionary;

use MLocati\Nexi\XPayWeb\Dictionary\TestCard\Card;

/*
 * WARNING: DO NOT EDIT THIS FILE
 * It has been generated automaticlly from a template.
 * Edit the template instead.
 */

/**
 * List of cards that can be used for tests.
 *
 * @see https://developer.nexi.it/en/area-test/carte-di-pagamento
 */
class TestCard
{
    /**
     * @var \MLocati\Nexi\XPayWeb\Dictionary\TestCard\Card[]
     */
    private $cards;

    public function __construct()
    {
        $this->cards = [
            new Card(true, 'VISA', '4349 9401 9900 4549', 5, 26, '396'),
            new Card(true, 'MASTERCARD', '5186 1516 5000 5008', 12, 26, '123'),
            new Card(false, 'VISA', '4349 9401 9999 7007', 12, 28, '829'),
            new Card(false, 'MASTERCARD', '5533 8938 7430 4465', 12, 28, '123'),
        ];
    }

    /**
     * Get the available circuits.
     *
     * @param bool|null $positiveOutcome set to true to list circuits for which we have cards with positive outcomes, false for negative outcomes, NULL for any outcome
     * @return string[]
     */
    public function getCircuits(?bool $positiveOutcome = null): array
    {
        $circuits = [];
        foreach ($this->cards as $card) {
            if ($positiveOutcome === null || $card->isPositiveOutcome() === $positiveOutcome) {
                $circuits[] = $card->getCircuit();
            }
        }

        $circuits = array_unique($circuits);
        sort($circuits, SORT_STRING);

        return array_values($circuits);
    }

    /**
     * Get sample cards.
     *
     * @param bool|null $positiveOutcome set to true for cards with positive outcomes, false for negative outcomes, NULL for any outcome
     * @param string $circuit set to a non empty string to retrieve cards with a specific circuit
     *
     * @return \MLocati\Nexi\XPayWeb\Dictionary\TestCard\Card[]
     */
    public function getCards(?bool $positiveOutcome = null, string $circuit = ''): array
    {
        return array_values(array_filter(
            $this->cards,
            static function (Card $card) use ($positiveOutcome, $circuit): bool {
                return ($positiveOutcome === null || $positiveOutcome === $card->isPositiveOutcome()) && ($circuit === '' || $card->getCircuit() === $circuit);
            }
        ));
    }

    /**
     * Get a sample card.
     *
     * @param bool|null $positiveOutcome set to true for cards with positive outcomes, false for negative outcomes, NULL for any outcome
     * @param string $circuit set to a non empty string to retrieve cards with a specific circuit
     */
    public function getSampleCard(?bool $positiveOutcome = null, string $circuit = ''): ?Card
    {
        $cards = $this->getCards($positiveOutcome, $circuit);

        return array_shift($cards);
    }
}
