<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * Code enum embedded in HtmlFormat message
 */
final class HtmlFormat_Code
{
    const UNKNOWN_CODE = 0;
    const AMP = 1;
    const AMP4ADS = 2;
    const AMP4EMAIL = 3;
    const ACTIONS = 5;
    const EXPERIMENTAL = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN_CODE' => self::UNKNOWN_CODE,
            'AMP' => self::AMP,
            'AMP4ADS' => self::AMP4ADS,
            'AMP4EMAIL' => self::AMP4EMAIL,
            'ACTIONS' => self::ACTIONS,
            'EXPERIMENTAL' => self::EXPERIMENTAL,
        );
    }
}
}