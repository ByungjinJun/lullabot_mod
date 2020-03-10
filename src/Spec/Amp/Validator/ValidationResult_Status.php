<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * Status enum embedded in ValidationResult message
 */
final class ValidationResult_Status
{
    const UNKNOWN = 0;
    const PASS = 1;
    const FAIL = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN' => self::UNKNOWN,
            'PASS' => self::PASS,
            'FAIL' => self::FAIL,
        );
    }
}
}