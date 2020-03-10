<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * DispatchKeyType enum embedded in AttrSpec message
 */
final class AttrSpec_DispatchKeyType
{
    const NONE_DISPATCH = 0;
    const NAME_DISPATCH = 1;
    const NAME_VALUE_DISPATCH = 2;
    const NAME_VALUE_PARENT_DISPATCH = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NONE_DISPATCH' => self::NONE_DISPATCH,
            'NAME_DISPATCH' => self::NAME_DISPATCH,
            'NAME_VALUE_DISPATCH' => self::NAME_VALUE_DISPATCH,
            'NAME_VALUE_PARENT_DISPATCH' => self::NAME_VALUE_PARENT_DISPATCH,
        );
    }
}
}