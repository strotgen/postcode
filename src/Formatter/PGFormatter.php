<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Papua New Guinea.
 *
 * Postcodes consist of 3 digits, without separator.
 *
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 */
class PGFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if (preg_match('/^[0-9]{3}$/', $postcode) !== 1) {
            return null;
        }

        return $postcode;
    }
}
