<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * Code enum embedded in ValidationError message
 */
final class ValidationError_Code
{
    const UNKNOWN_CODE = 0;
    const INVALID_DOCTYPE_HTML = 111;
    const MANDATORY_TAG_MISSING = 1;
    const TAG_REQUIRED_BY_MISSING = 24;
    const WARNING_TAG_REQUIRED_BY_MISSING = 76;
    const TAG_EXCLUDED_BY_TAG = 101;
    const WARNING_EXTENSION_UNUSED = 79;
    const EXTENSION_UNUSED = 84;
    const WARNING_EXTENSION_DEPRECATED_VERSION = 80;
    const NON_LTS_SCRIPT_AFTER_LTS = 112;
    const LTS_SCRIPT_AFTER_NON_LTS = 113;
    const ATTR_REQUIRED_BUT_MISSING = 61;
    const DISALLOWED_TAG = 2;
    const GENERAL_DISALLOWED_TAG = 51;
    const DISALLOWED_SCRIPT_TAG = 88;
    const DISALLOWED_ATTR = 3;
    const DISALLOWED_STYLE_ATTR = 81;
    const INVALID_ATTR_VALUE = 4;
    const DUPLICATE_ATTRIBUTE = 94;
    const ATTR_VALUE_REQUIRED_BY_LAYOUT = 27;
    const MISSING_LAYOUT_ATTRIBUTES = 105;
    const IMPLIED_LAYOUT_INVALID = 22;
    const SPECIFIED_LAYOUT_INVALID = 26;
    const MANDATORY_ATTR_MISSING = 5;
    const MANDATORY_ONEOF_ATTR_MISSING = 28;
    const MANDATORY_ANYOF_ATTR_MISSING = 104;
    const DUPLICATE_DIMENSION = 60;
    const DUPLICATE_UNIQUE_TAG = 6;
    const DUPLICATE_UNIQUE_TAG_WARNING = 77;
    const WRONG_PARENT_TAG = 7;
    const STYLESHEET_TOO_LONG = 50;
    const STYLESHEET_AND_INLINE_STYLE_TOO_LONG = 102;
    const INLINE_STYLE_TOO_LONG = 103;
    const MANDATORY_CDATA_MISSING_OR_INCORRECT = 9;
    const CDATA_VIOLATES_BLACKLIST = 30;
    const NON_WHITESPACE_CDATA_ENCOUNTERED = 82;
    const INVALID_JSON_CDATA = 106;
    const DEPRECATED_ATTR = 11;
    const DEPRECATED_TAG = 12;
    const MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE = 14;
    const INVALID_PROPERTY_VALUE_IN_ATTR_VALUE = 15;
    const MISSING_URL = 35;
    const INVALID_URL = 36;
    const INVALID_URL_PROTOCOL = 37;
    const DISALLOWED_DOMAIN = 62;
    const DISALLOWED_RELATIVE_URL = 49;
    const DISALLOWED_PROPERTY_IN_ATTR_VALUE = 16;
    const MUTUALLY_EXCLUSIVE_ATTRS = 17;
    const UNESCAPED_TEMPLATE_IN_ATTR_VALUE = 18;
    const TEMPLATE_PARTIAL_IN_ATTR_VALUE = 19;
    const TEMPLATE_IN_ATTR_NAME = 20;
    const INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT = 21;
    const DISALLOWED_TAG_ANCESTOR = 23;
    const MANDATORY_LAST_CHILD_TAG = 89;
    const MANDATORY_TAG_ANCESTOR = 31;
    const MANDATORY_TAG_ANCESTOR_WITH_HINT = 32;
    const ATTR_DISALLOWED_BY_IMPLIED_LAYOUT = 33;
    const ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT = 34;
    const INCORRECT_NUM_CHILD_TAGS = 56;
    const INCORRECT_MIN_NUM_CHILD_TAGS = 85;
    const DISALLOWED_CHILD_TAG_NAME = 57;
    const DISALLOWED_FIRST_CHILD_TAG_NAME = 58;
    const DISALLOWED_MANUFACTURED_BODY = 64;
    const CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT = 66;
    const MANDATORY_REFERENCE_POINT_MISSING = 67;
    const DUPLICATE_REFERENCE_POINT = 68;
    const TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS = 87;
    const TAG_REFERENCE_POINT_CONFLICT = 69;
    const CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR = 70;
    const BASE_TAG_MUST_PRECEED_ALL_URLS = 78;
    const MISSING_REQUIRED_EXTENSION = 83;
    const ATTR_MISSING_REQUIRED_EXTENSION = 97;
    const DOCUMENT_TOO_COMPLEX = 86;
    const INVALID_UTF8 = 96;
    const DOCUMENT_SIZE_LIMIT_EXCEEDED = 108;
    const DEV_MODE_ONLY = 109;
    const VALUE_SET_MISMATCH = 110;
    const CSS_SYNTAX_INVALID_AT_RULE = 29;
    const CSS_SYNTAX_STRAY_TRAILING_BACKSLASH = 38;
    const CSS_SYNTAX_UNTERMINATED_COMMENT = 39;
    const CSS_SYNTAX_UNTERMINATED_STRING = 40;
    const CSS_SYNTAX_BAD_URL = 41;
    const CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE = 42;
    const CSS_SYNTAX_INVALID_DECLARATION = 43;
    const CSS_SYNTAX_INCOMPLETE_DECLARATION = 44;
    const CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR = 45;
    const CSS_SYNTAX_MISSING_SELECTOR = 46;
    const CSS_SYNTAX_NOT_A_SELECTOR_START = 47;
    const CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR = 48;
    const CSS_SYNTAX_MISSING_URL = 52;
    const CSS_SYNTAX_INVALID_URL = 53;
    const CSS_SYNTAX_INVALID_URL_PROTOCOL = 54;
    const CSS_SYNTAX_DISALLOWED_DOMAIN = 63;
    const CSS_SYNTAX_DISALLOWED_RELATIVE_URL = 55;
    const CSS_SYNTAX_INVALID_ATTR_SELECTOR = 59;
    const CSS_SYNTAX_INVALID_PROPERTY = 90;
    const CSS_SYNTAX_INVALID_PROPERTY_NOLIST = 95;
    const CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS = 91;
    const CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME = 92;
    const CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME = 93;
    const CSS_SYNTAX_MALFORMED_MEDIA_QUERY = 98;
    const CSS_SYNTAX_DISALLOWED_MEDIA_TYPE = 99;
    const CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE = 100;
    const CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE = 71;
    const CSS_EXCESSIVELY_NESTED = 107;
    const CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT = 72;
    const CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE = 73;
    const CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH = 74;
    const CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION = 75;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UNKNOWN_CODE' => self::UNKNOWN_CODE,
            'INVALID_DOCTYPE_HTML' => self::INVALID_DOCTYPE_HTML,
            'MANDATORY_TAG_MISSING' => self::MANDATORY_TAG_MISSING,
            'TAG_REQUIRED_BY_MISSING' => self::TAG_REQUIRED_BY_MISSING,
            'WARNING_TAG_REQUIRED_BY_MISSING' => self::WARNING_TAG_REQUIRED_BY_MISSING,
            'TAG_EXCLUDED_BY_TAG' => self::TAG_EXCLUDED_BY_TAG,
            'WARNING_EXTENSION_UNUSED' => self::WARNING_EXTENSION_UNUSED,
            'EXTENSION_UNUSED' => self::EXTENSION_UNUSED,
            'WARNING_EXTENSION_DEPRECATED_VERSION' => self::WARNING_EXTENSION_DEPRECATED_VERSION,
            'NON_LTS_SCRIPT_AFTER_LTS' => self::NON_LTS_SCRIPT_AFTER_LTS,
            'LTS_SCRIPT_AFTER_NON_LTS' => self::LTS_SCRIPT_AFTER_NON_LTS,
            'ATTR_REQUIRED_BUT_MISSING' => self::ATTR_REQUIRED_BUT_MISSING,
            'DISALLOWED_TAG' => self::DISALLOWED_TAG,
            'GENERAL_DISALLOWED_TAG' => self::GENERAL_DISALLOWED_TAG,
            'DISALLOWED_SCRIPT_TAG' => self::DISALLOWED_SCRIPT_TAG,
            'DISALLOWED_ATTR' => self::DISALLOWED_ATTR,
            'DISALLOWED_STYLE_ATTR' => self::DISALLOWED_STYLE_ATTR,
            'INVALID_ATTR_VALUE' => self::INVALID_ATTR_VALUE,
            'DUPLICATE_ATTRIBUTE' => self::DUPLICATE_ATTRIBUTE,
            'ATTR_VALUE_REQUIRED_BY_LAYOUT' => self::ATTR_VALUE_REQUIRED_BY_LAYOUT,
            'MISSING_LAYOUT_ATTRIBUTES' => self::MISSING_LAYOUT_ATTRIBUTES,
            'IMPLIED_LAYOUT_INVALID' => self::IMPLIED_LAYOUT_INVALID,
            'SPECIFIED_LAYOUT_INVALID' => self::SPECIFIED_LAYOUT_INVALID,
            'MANDATORY_ATTR_MISSING' => self::MANDATORY_ATTR_MISSING,
            'MANDATORY_ONEOF_ATTR_MISSING' => self::MANDATORY_ONEOF_ATTR_MISSING,
            'MANDATORY_ANYOF_ATTR_MISSING' => self::MANDATORY_ANYOF_ATTR_MISSING,
            'DUPLICATE_DIMENSION' => self::DUPLICATE_DIMENSION,
            'DUPLICATE_UNIQUE_TAG' => self::DUPLICATE_UNIQUE_TAG,
            'DUPLICATE_UNIQUE_TAG_WARNING' => self::DUPLICATE_UNIQUE_TAG_WARNING,
            'WRONG_PARENT_TAG' => self::WRONG_PARENT_TAG,
            'STYLESHEET_TOO_LONG' => self::STYLESHEET_TOO_LONG,
            'STYLESHEET_AND_INLINE_STYLE_TOO_LONG' => self::STYLESHEET_AND_INLINE_STYLE_TOO_LONG,
            'INLINE_STYLE_TOO_LONG' => self::INLINE_STYLE_TOO_LONG,
            'MANDATORY_CDATA_MISSING_OR_INCORRECT' => self::MANDATORY_CDATA_MISSING_OR_INCORRECT,
            'CDATA_VIOLATES_BLACKLIST' => self::CDATA_VIOLATES_BLACKLIST,
            'NON_WHITESPACE_CDATA_ENCOUNTERED' => self::NON_WHITESPACE_CDATA_ENCOUNTERED,
            'INVALID_JSON_CDATA' => self::INVALID_JSON_CDATA,
            'DEPRECATED_ATTR' => self::DEPRECATED_ATTR,
            'DEPRECATED_TAG' => self::DEPRECATED_TAG,
            'MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE' => self::MANDATORY_PROPERTY_MISSING_FROM_ATTR_VALUE,
            'INVALID_PROPERTY_VALUE_IN_ATTR_VALUE' => self::INVALID_PROPERTY_VALUE_IN_ATTR_VALUE,
            'MISSING_URL' => self::MISSING_URL,
            'INVALID_URL' => self::INVALID_URL,
            'INVALID_URL_PROTOCOL' => self::INVALID_URL_PROTOCOL,
            'DISALLOWED_DOMAIN' => self::DISALLOWED_DOMAIN,
            'DISALLOWED_RELATIVE_URL' => self::DISALLOWED_RELATIVE_URL,
            'DISALLOWED_PROPERTY_IN_ATTR_VALUE' => self::DISALLOWED_PROPERTY_IN_ATTR_VALUE,
            'MUTUALLY_EXCLUSIVE_ATTRS' => self::MUTUALLY_EXCLUSIVE_ATTRS,
            'UNESCAPED_TEMPLATE_IN_ATTR_VALUE' => self::UNESCAPED_TEMPLATE_IN_ATTR_VALUE,
            'TEMPLATE_PARTIAL_IN_ATTR_VALUE' => self::TEMPLATE_PARTIAL_IN_ATTR_VALUE,
            'TEMPLATE_IN_ATTR_NAME' => self::TEMPLATE_IN_ATTR_NAME,
            'INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT' => self::INCONSISTENT_UNITS_FOR_WIDTH_AND_HEIGHT,
            'DISALLOWED_TAG_ANCESTOR' => self::DISALLOWED_TAG_ANCESTOR,
            'MANDATORY_LAST_CHILD_TAG' => self::MANDATORY_LAST_CHILD_TAG,
            'MANDATORY_TAG_ANCESTOR' => self::MANDATORY_TAG_ANCESTOR,
            'MANDATORY_TAG_ANCESTOR_WITH_HINT' => self::MANDATORY_TAG_ANCESTOR_WITH_HINT,
            'ATTR_DISALLOWED_BY_IMPLIED_LAYOUT' => self::ATTR_DISALLOWED_BY_IMPLIED_LAYOUT,
            'ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT' => self::ATTR_DISALLOWED_BY_SPECIFIED_LAYOUT,
            'INCORRECT_NUM_CHILD_TAGS' => self::INCORRECT_NUM_CHILD_TAGS,
            'INCORRECT_MIN_NUM_CHILD_TAGS' => self::INCORRECT_MIN_NUM_CHILD_TAGS,
            'DISALLOWED_CHILD_TAG_NAME' => self::DISALLOWED_CHILD_TAG_NAME,
            'DISALLOWED_FIRST_CHILD_TAG_NAME' => self::DISALLOWED_FIRST_CHILD_TAG_NAME,
            'DISALLOWED_MANUFACTURED_BODY' => self::DISALLOWED_MANUFACTURED_BODY,
            'CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT' => self::CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT,
            'MANDATORY_REFERENCE_POINT_MISSING' => self::MANDATORY_REFERENCE_POINT_MISSING,
            'DUPLICATE_REFERENCE_POINT' => self::DUPLICATE_REFERENCE_POINT,
            'TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS' => self::TAG_NOT_ALLOWED_TO_HAVE_SIBLINGS,
            'TAG_REFERENCE_POINT_CONFLICT' => self::TAG_REFERENCE_POINT_CONFLICT,
            'CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR' => self::CHILD_TAG_DOES_NOT_SATISFY_REFERENCE_POINT_SINGULAR,
            'BASE_TAG_MUST_PRECEED_ALL_URLS' => self::BASE_TAG_MUST_PRECEED_ALL_URLS,
            'MISSING_REQUIRED_EXTENSION' => self::MISSING_REQUIRED_EXTENSION,
            'ATTR_MISSING_REQUIRED_EXTENSION' => self::ATTR_MISSING_REQUIRED_EXTENSION,
            'DOCUMENT_TOO_COMPLEX' => self::DOCUMENT_TOO_COMPLEX,
            'INVALID_UTF8' => self::INVALID_UTF8,
            'DOCUMENT_SIZE_LIMIT_EXCEEDED' => self::DOCUMENT_SIZE_LIMIT_EXCEEDED,
            'DEV_MODE_ONLY' => self::DEV_MODE_ONLY,
            'VALUE_SET_MISMATCH' => self::VALUE_SET_MISMATCH,
            'CSS_SYNTAX_INVALID_AT_RULE' => self::CSS_SYNTAX_INVALID_AT_RULE,
            'CSS_SYNTAX_STRAY_TRAILING_BACKSLASH' => self::CSS_SYNTAX_STRAY_TRAILING_BACKSLASH,
            'CSS_SYNTAX_UNTERMINATED_COMMENT' => self::CSS_SYNTAX_UNTERMINATED_COMMENT,
            'CSS_SYNTAX_UNTERMINATED_STRING' => self::CSS_SYNTAX_UNTERMINATED_STRING,
            'CSS_SYNTAX_BAD_URL' => self::CSS_SYNTAX_BAD_URL,
            'CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE' => self::CSS_SYNTAX_EOF_IN_PRELUDE_OF_QUALIFIED_RULE,
            'CSS_SYNTAX_INVALID_DECLARATION' => self::CSS_SYNTAX_INVALID_DECLARATION,
            'CSS_SYNTAX_INCOMPLETE_DECLARATION' => self::CSS_SYNTAX_INCOMPLETE_DECLARATION,
            'CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR' => self::CSS_SYNTAX_ERROR_IN_PSEUDO_SELECTOR,
            'CSS_SYNTAX_MISSING_SELECTOR' => self::CSS_SYNTAX_MISSING_SELECTOR,
            'CSS_SYNTAX_NOT_A_SELECTOR_START' => self::CSS_SYNTAX_NOT_A_SELECTOR_START,
            'CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR' => self::CSS_SYNTAX_UNPARSED_INPUT_REMAINS_IN_SELECTOR,
            'CSS_SYNTAX_MISSING_URL' => self::CSS_SYNTAX_MISSING_URL,
            'CSS_SYNTAX_INVALID_URL' => self::CSS_SYNTAX_INVALID_URL,
            'CSS_SYNTAX_INVALID_URL_PROTOCOL' => self::CSS_SYNTAX_INVALID_URL_PROTOCOL,
            'CSS_SYNTAX_DISALLOWED_DOMAIN' => self::CSS_SYNTAX_DISALLOWED_DOMAIN,
            'CSS_SYNTAX_DISALLOWED_RELATIVE_URL' => self::CSS_SYNTAX_DISALLOWED_RELATIVE_URL,
            'CSS_SYNTAX_INVALID_ATTR_SELECTOR' => self::CSS_SYNTAX_INVALID_ATTR_SELECTOR,
            'CSS_SYNTAX_INVALID_PROPERTY' => self::CSS_SYNTAX_INVALID_PROPERTY,
            'CSS_SYNTAX_INVALID_PROPERTY_NOLIST' => self::CSS_SYNTAX_INVALID_PROPERTY_NOLIST,
            'CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS' => self::CSS_SYNTAX_QUALIFIED_RULE_HAS_NO_DECLARATIONS,
            'CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME' => self::CSS_SYNTAX_DISALLOWED_QUALIFIED_RULE_MUST_BE_INSIDE_KEYFRAME,
            'CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME' => self::CSS_SYNTAX_DISALLOWED_KEYFRAME_INSIDE_KEYFRAME,
            'CSS_SYNTAX_MALFORMED_MEDIA_QUERY' => self::CSS_SYNTAX_MALFORMED_MEDIA_QUERY,
            'CSS_SYNTAX_DISALLOWED_MEDIA_TYPE' => self::CSS_SYNTAX_DISALLOWED_MEDIA_TYPE,
            'CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE' => self::CSS_SYNTAX_DISALLOWED_MEDIA_FEATURE,
            'CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE' => self::CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE,
            'CSS_EXCESSIVELY_NESTED' => self::CSS_EXCESSIVELY_NESTED,
            'CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT' => self::CSS_SYNTAX_DISALLOWED_PROPERTY_VALUE_WITH_HINT,
            'CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE' => self::CSS_SYNTAX_PROPERTY_DISALLOWED_WITHIN_AT_RULE,
            'CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH' => self::CSS_SYNTAX_PROPERTY_DISALLOWED_TOGETHER_WITH,
            'CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION' => self::CSS_SYNTAX_PROPERTY_REQUIRES_QUALIFICATION,
        );
    }
}
}