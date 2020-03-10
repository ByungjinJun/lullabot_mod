<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValueSet enum embedded in AttrSpec message
 */
final class AttrSpec_ValueSet
{
    const UNKNOWN_VALUESET = 0;
    const TEMPLATE_IDS = 1;
    const AMP_SCRIPT_IDS = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN_VALUESET' => self::UNKNOWN_VALUESET,
            'TEMPLATE_IDS' => self::TEMPLATE_IDS,
            'AMP_SCRIPT_IDS' => self::AMP_SCRIPT_IDS,
        );
    }
}
}