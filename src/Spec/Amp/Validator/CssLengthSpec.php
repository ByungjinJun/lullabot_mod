<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * CssLengthSpec message
 */
class CssLengthSpec extends \ProtobufMessage
{
    /* Field index constants */
    const HTML_FORMAT = 1;
    const MAX_BYTES = 2;
    const MAX_BYTES_PER_INLINE_STYLE = 4;
    const SPEC_URL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HTML_FORMAT => array(
            'name' => 'html_format',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_BYTES => array(
            'default' => -1,
            'name' => 'max_bytes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_BYTES_PER_INLINE_STYLE => array(
            'default' => -1,
            'name' => 'max_bytes_per_inline_style',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPEC_URL => array(
            'name' => 'spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::HTML_FORMAT] = null;
        $this->values[self::MAX_BYTES] = self::$fields[self::MAX_BYTES]['default'];
        $this->values[self::MAX_BYTES_PER_INLINE_STYLE] = self::$fields[self::MAX_BYTES_PER_INLINE_STYLE]['default'];
        $this->values[self::SPEC_URL] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'html_format' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHtmlFormat($value)
    {
        return $this->set(self::HTML_FORMAT, $value);
    }

    /**
     * Returns value of 'html_format' property
     *
     * @return integer
     */
    public function getHtmlFormat()
    {
        $value = $this->get(self::HTML_FORMAT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'html_format' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHtmlFormat()
    {
        return $this->get(self::HTML_FORMAT) !== null;
    }

    /**
     * Sets value of 'max_bytes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxBytes($value)
    {
        return $this->set(self::MAX_BYTES, $value);
    }

    /**
     * Returns value of 'max_bytes' property
     *
     * @return integer
     */
    public function getMaxBytes()
    {
        $value = $this->get(self::MAX_BYTES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'max_bytes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxBytes()
    {
        return $this->get(self::MAX_BYTES) !== null;
    }

    /**
     * Sets value of 'max_bytes_per_inline_style' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxBytesPerInlineStyle($value)
    {
        return $this->set(self::MAX_BYTES_PER_INLINE_STYLE, $value);
    }

    /**
     * Returns value of 'max_bytes_per_inline_style' property
     *
     * @return integer
     */
    public function getMaxBytesPerInlineStyle()
    {
        $value = $this->get(self::MAX_BYTES_PER_INLINE_STYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'max_bytes_per_inline_style' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxBytesPerInlineStyle()
    {
        return $this->get(self::MAX_BYTES_PER_INLINE_STYLE) !== null;
    }

    /**
     * Sets value of 'spec_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecUrl($value)
    {
        return $this->set(self::SPEC_URL, $value);
    }

    /**
     * Returns value of 'spec_url' property
     *
     * @return string
     */
    public function getSpecUrl()
    {
        $value = $this->get(self::SPEC_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'spec_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpecUrl()
    {
        return $this->get(self::SPEC_URL) !== null;
    }
}
}