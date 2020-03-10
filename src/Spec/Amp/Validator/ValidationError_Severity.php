<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * Severity enum embedded in ValidationError message
 */
final class ValidationError_Severity
{
    const UNKNOWN_SEVERITY = 0;
    const ERROR = 1;
    const WARNING = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN_SEVERITY' => self::UNKNOWN_SEVERITY,
            'ERROR' => self::ERROR,
            'WARNING' => self::WARNING,
        );
    }
}
}