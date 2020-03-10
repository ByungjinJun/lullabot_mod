<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ExtensionType enum embedded in ExtensionSpec message
 */
final class ExtensionSpec_ExtensionType
{
    const UNKNOWN = 0;
    const CUSTOM_ELEMENT = 1;
    const CUSTOM_TEMPLATE = 2;
    const HOST_SERVICE = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN' => self::UNKNOWN,
            'CUSTOM_ELEMENT' => self::CUSTOM_ELEMENT,
            'CUSTOM_TEMPLATE' => self::CUSTOM_TEMPLATE,
            'HOST_SERVICE' => self::HOST_SERVICE,
        );
    }
}
}