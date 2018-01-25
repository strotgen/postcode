<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Thailand.
 *
 * Postcodes consist of 5 digits, without separator.
 *
 * @see https://en.wikipedia.org/wiki/Postal_codes_in_Thailand
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 */
class THFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if (! ctype_digit($postcode)) {
            return null;
        }

        if (strlen($postcode) !== 5) {
            return null;
        }

        return $postcode;
    }
}