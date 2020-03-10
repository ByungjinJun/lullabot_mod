<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * NamedId enum embedded in TagSpec message
 */
final class TagSpec_NamedId
{
    const NOT_SET = 0;
    const LINK_FONT_STYLESHEET = 1;
    const STYLE_AMP_CUSTOM = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NOT_SET' => self::NOT_SET,
            'LINK_FONT_STYLESHEET' => self::LINK_FONT_STYLESHEET,
            'STYLE_AMP_CUSTOM' => self::STYLE_AMP_CUSTOM,
        );
    }
}
}