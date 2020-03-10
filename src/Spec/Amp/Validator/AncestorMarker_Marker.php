<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * Marker enum embedded in AncestorMarker message
 */
final class AncestorMarker_Marker
{
    const UNKNOWN = 0;
    const AUTOSCROLL = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN' => self::UNKNOWN,
            'AUTOSCROLL' => self::AUTOSCROLL,
        );
    }
}
}