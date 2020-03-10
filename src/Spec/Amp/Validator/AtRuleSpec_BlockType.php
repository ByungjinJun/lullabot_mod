<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * BlockType enum embedded in AtRuleSpec message
 */
final class AtRuleSpec_BlockType
{
    const PARSE_AS_ERROR = 0;
    const PARSE_AS_IGNORE = 1;
    const PARSE_AS_RULES = 2;
    const PARSE_AS_DECLARATIONS = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PARSE_AS_ERROR' => self::PARSE_AS_ERROR,
            'PARSE_AS_IGNORE' => self::PARSE_AS_IGNORE,
            'PARSE_AS_RULES' => self::PARSE_AS_RULES,
            'PARSE_AS_DECLARATIONS' => self::PARSE_AS_DECLARATIONS,
        );
    }
}
}