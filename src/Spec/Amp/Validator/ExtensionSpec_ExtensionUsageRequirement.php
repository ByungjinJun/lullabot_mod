<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ExtensionUsageRequirement enum embedded in ExtensionSpec message
 */
final class ExtensionSpec_ExtensionUsageRequirement
{
    const ERROR = 1;
    const EXEMPTED = 2;
    const NONE = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ERROR' => self::ERROR,
            'EXEMPTED' => self::EXEMPTED,
            'NONE' => self::NONE,
        );
    }
}
}