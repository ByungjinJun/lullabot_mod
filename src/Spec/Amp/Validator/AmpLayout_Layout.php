<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * Layout enum embedded in AmpLayout message
 */
final class AmpLayout_Layout
{
    const UNKNOWN = 0;
    const NODISPLAY = 1;
    const FIXED = 2;
    const FIXED_HEIGHT = 3;
    const RESPONSIVE = 4;
    const CONTAINER = 5;
    const FILL = 6;
    const FLEX_ITEM = 7;
    const FLUID = 8;
    const INTRINSIC = 9;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN' => self::UNKNOWN,
            'NODISPLAY' => self::NODISPLAY,
            'FIXED' => self::FIXED,
            'FIXED_HEIGHT' => self::FIXED_HEIGHT,
            'RESPONSIVE' => self::RESPONSIVE,
            'CONTAINER' => self::CONTAINER,
            'FILL' => self::FILL,
            'FLEX_ITEM' => self::FLEX_ITEM,
            'FLUID' => self::FLUID,
            'INTRINSIC' => self::INTRINSIC,
        );
    }
}
}