<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * CdataSpec message
 */
class CdataSpec extends \ProtobufMessage
{
    /* Field index constants */
    const MAX_BYTES = 1;
    const URL_BYTES_INCLUDED = 9;
    const MAX_BYTES_SPEC_URL = 2;
    const MANDATORY_CDATA = 3;
    const CDATA_REGEX = 6;
    const CSS_SPEC = 7;
    const WHITESPACE_ONLY = 8;
    const BLACKLISTED_CDATA_REGEX = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAX_BYTES => array(
            'default' => -2,
            'name' => 'max_bytes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::URL_BYTES_INCLUDED => array(
            'default' => true,
            'name' => 'url_bytes_included',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MAX_BYTES_SPEC_URL => array(
            'name' => 'max_bytes_spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY_CDATA => array(
            'name' => 'mandatory_cdata',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CDATA_REGEX => array(
            'name' => 'cdata_regex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CSS_SPEC => array(
            'name' => 'css_spec',
            'required' => false,
            'type' => '\Amp\Validator\CssSpec'
        ),
        self::WHITESPACE_ONLY => array(
            'name' => 'whitespace_only',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BLACKLISTED_CDATA_REGEX => array(
            'name' => 'blacklisted_cdata_regex',
            'repeated' => true,
            'type' => '\Amp\Validator\BlackListedCDataRegex'
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
        $this->values[self::MAX_BYTES] = self::$fields[self::MAX_BYTES]['default'];
        $this->values[self::URL_BYTES_INCLUDED] = self::$fields[self::URL_BYTES_INCLUDED]['default'];
        $this->values[self::MAX_BYTES_SPEC_URL] = null;
        $this->values[self::MANDATORY_CDATA] = null;
        $this->values[self::CDATA_REGEX] = null;
        $this->values[self::CSS_SPEC] = null;
        $this->values[self::WHITESPACE_ONLY] = null;
        $this->values[self::BLACKLISTED_CDATA_REGEX] = array();
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
     * Sets value of 'url_bytes_included' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setUrlBytesIncluded($value)
    {
        return $this->set(self::URL_BYTES_INCLUDED, $value);
    }

    /**
     * Returns value of 'url_bytes_included' property
     *
     * @return boolean
     */
    public function getUrlBytesIncluded()
    {
        $value = $this->get(self::URL_BYTES_INCLUDED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'url_bytes_included' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUrlBytesIncluded()
    {
        return $this->get(self::URL_BYTES_INCLUDED) !== null;
    }

    /**
     * Sets value of 'max_bytes_spec_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMaxBytesSpecUrl($value)
    {
        return $this->set(self::MAX_BYTES_SPEC_URL, $value);
    }

    /**
     * Returns value of 'max_bytes_spec_url' property
     *
     * @return string
     */
    public function getMaxBytesSpecUrl()
    {
        $value = $this->get(self::MAX_BYTES_SPEC_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'max_bytes_spec_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxBytesSpecUrl()
    {
        return $this->get(self::MAX_BYTES_SPEC_URL) !== null;
    }

    /**
     * Sets value of 'mandatory_cdata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryCdata($value)
    {
        return $this->set(self::MANDATORY_CDATA, $value);
    }

    /**
     * Returns value of 'mandatory_cdata' property
     *
     * @return string
     */
    public function getMandatoryCdata()
    {
        $value = $this->get(self::MANDATORY_CDATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_cdata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryCdata()
    {
        return $this->get(self::MANDATORY_CDATA) !== null;
    }

    /**
     * Sets value of 'cdata_regex' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCdataRegex($value)
    {
        return $this->set(self::CDATA_REGEX, $value);
    }

    /**
     * Returns value of 'cdata_regex' property
     *
     * @return string
     */
    public function getCdataRegex()
    {
        $value = $this->get(self::CDATA_REGEX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cdata_regex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCdataRegex()
    {
        return $this->get(self::CDATA_REGEX) !== null;
    }

    /**
     * Sets value of 'css_spec' property
     *
     * @param \Amp\Validator\CssSpec $value Property value
     *
     * @return null
     */
    public function setCssSpec(\Amp\Validator\CssSpec $value=null)
    {
        return $this->set(self::CSS_SPEC, $value);
    }

    /**
     * Returns value of 'css_spec' property
     *
     * @return \Amp\Validator\CssSpec
     */
    public function getCssSpec()
    {
        return $this->get(self::CSS_SPEC);
    }

    /**
     * Returns true if 'css_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCssSpec()
    {
        return $this->get(self::CSS_SPEC) !== null;
    }

    /**
     * Sets value of 'whitespace_only' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setWhitespaceOnly($value)
    {
        return $this->set(self::WHITESPACE_ONLY, $value);
    }

    /**
     * Returns value of 'whitespace_only' property
     *
     * @return boolean
     */
    public function getWhitespaceOnly()
    {
        $value = $this->get(self::WHITESPACE_ONLY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'whitespace_only' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWhitespaceOnly()
    {
        return $this->get(self::WHITESPACE_ONLY) !== null;
    }

    /**
     * Appends value to 'blacklisted_cdata_regex' list
     *
     * @param \Amp\Validator\BlackListedCDataRegex $value Value to append
     *
     * @return null
     */
    public function appendBlacklistedCdataRegex(\Amp\Validator\BlackListedCDataRegex $value)
    {
        return $this->append(self::BLACKLISTED_CDATA_REGEX, $value);
    }

    /**
     * Clears 'blacklisted_cdata_regex' list
     *
     * @return null
     */
    public function clearBlacklistedCdataRegex()
    {
        return $this->clear(self::BLACKLISTED_CDATA_REGEX);
    }

    /**
     * Returns 'blacklisted_cdata_regex' list
     *
     * @return \Amp\Validator\BlackListedCDataRegex[]
     */
    public function getBlacklistedCdataRegex()
    {
        return $this->get(self::BLACKLISTED_CDATA_REGEX);
    }

    /**
     * Returns true if 'blacklisted_cdata_regex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlacklistedCdataRegex()
    {
        return count($this->get(self::BLACKLISTED_CDATA_REGEX)) !== 0;
    }

    /**
     * Returns 'blacklisted_cdata_regex' iterator
     *
     * @return \ArrayIterator
     */
    public function getBlacklistedCdataRegexIterator()
    {
        return new \ArrayIterator($this->get(self::BLACKLISTED_CDATA_REGEX));
    }

    /**
     * Returns element from 'blacklisted_cdata_regex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\BlackListedCDataRegex
     */
    public function getBlacklistedCdataRegexAt($offset)
    {
        return $this->get(self::BLACKLISTED_CDATA_REGEX, $offset);
    }

    /**
     * Returns count of 'blacklisted_cdata_regex' list
     *
     * @return int
     */
    public function getBlacklistedCdataRegexCount()
    {
        return $this->count(self::BLACKLISTED_CDATA_REGEX);
    }
}
}