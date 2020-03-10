<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * AttrSpec message
 */
class AttrSpec extends \ProtobufMessage
{
    /* Field index constants */
    const ENABLED_BY = 23;
    const DISABLED_BY = 24;
    const NAME = 1;
    const ALTERNATIVE_NAMES = 2;
    const MANDATORY = 3;
    const MANDATORY_ONEOF = 12;
    const MANDATORY_ANYOF = 21;
    const VALUE = 4;
    const VALUE_CASEI = 18;
    const VALUE_REGEX = 15;
    const VALUE_REGEX_CASEI = 5;
    const VALUE_URL = 14;
    const VALUE_PROPERTIES = 11;
    const ADD_VALUE_TO_SET = 25;
    const VALUE_ONEOF_SET = 26;
    const TRIGGER = 16;
    const BLACKLISTED_VALUE_REGEX = 6;
    const DEPRECATION = 7;
    const DEPRECATION_URL = 8;
    const CSS_DECLARATION = 20;
    const DISPATCH_KEY = 13;
    const IMPLICIT = 17;
    const REQUIRES_EXTENSION = 19;
    const REQUIRES_ANCESTOR = 22;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENABLED_BY => array(
            'name' => 'enabled_by',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISABLED_BY => array(
            'name' => 'disabled_by',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALTERNATIVE_NAMES => array(
            'name' => 'alternative_names',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY => array(
            'name' => 'mandatory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANDATORY_ONEOF => array(
            'name' => 'mandatory_oneof',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY_ANYOF => array(
            'name' => 'mandatory_anyof',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE => array(
            'name' => 'value',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_CASEI => array(
            'name' => 'value_casei',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_REGEX => array(
            'name' => 'value_regex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_REGEX_CASEI => array(
            'name' => 'value_regex_casei',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_URL => array(
            'name' => 'value_url',
            'required' => false,
            'type' => '\Amp\Validator\UrlSpec'
        ),
        self::VALUE_PROPERTIES => array(
            'name' => 'value_properties',
            'required' => false,
            'type' => '\Amp\Validator\PropertySpecList'
        ),
        self::ADD_VALUE_TO_SET => array(
            'name' => 'add_value_to_set',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE_ONEOF_SET => array(
            'name' => 'value_oneof_set',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TRIGGER => array(
            'name' => 'trigger',
            'required' => false,
            'type' => '\Amp\Validator\AttrTriggerSpec'
        ),
        self::BLACKLISTED_VALUE_REGEX => array(
            'name' => 'blacklisted_value_regex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPRECATION => array(
            'name' => 'deprecation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPRECATION_URL => array(
            'name' => 'deprecation_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CSS_DECLARATION => array(
            'name' => 'css_declaration',
            'repeated' => true,
            'type' => '\Amp\Validator\CssDeclaration'
        ),
        self::DISPATCH_KEY => array(
            'default' => \Amp\Validator\AttrSpec_DispatchKeyType::NONE_DISPATCH,
            'name' => 'dispatch_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMPLICIT => array(
            'default' => false,
            'name' => 'implicit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::REQUIRES_EXTENSION => array(
            'name' => 'requires_extension',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REQUIRES_ANCESTOR => array(
            'name' => 'requires_ancestor',
            'required' => false,
            'type' => '\Amp\Validator\AncestorMarker'
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
        $this->values[self::ENABLED_BY] = array();
        $this->values[self::DISABLED_BY] = array();
        $this->values[self::NAME] = null;
        $this->values[self::ALTERNATIVE_NAMES] = array();
        $this->values[self::MANDATORY] = null;
        $this->values[self::MANDATORY_ONEOF] = null;
        $this->values[self::MANDATORY_ANYOF] = null;
        $this->values[self::VALUE] = array();
        $this->values[self::VALUE_CASEI] = array();
        $this->values[self::VALUE_REGEX] = null;
        $this->values[self::VALUE_REGEX_CASEI] = null;
        $this->values[self::VALUE_URL] = null;
        $this->values[self::VALUE_PROPERTIES] = null;
        $this->values[self::ADD_VALUE_TO_SET] = null;
        $this->values[self::VALUE_ONEOF_SET] = null;
        $this->values[self::TRIGGER] = null;
        $this->values[self::BLACKLISTED_VALUE_REGEX] = null;
        $this->values[self::DEPRECATION] = null;
        $this->values[self::DEPRECATION_URL] = null;
        $this->values[self::CSS_DECLARATION] = array();
        $this->values[self::DISPATCH_KEY] = self::$fields[self::DISPATCH_KEY]['default'];
        $this->values[self::IMPLICIT] = self::$fields[self::IMPLICIT]['default'];
        $this->values[self::REQUIRES_EXTENSION] = array();
        $this->values[self::REQUIRES_ANCESTOR] = null;
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
     * Appends value to 'enabled_by' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEnabledBy($value)
    {
        return $this->append(self::ENABLED_BY, $value);
    }

    /**
     * Clears 'enabled_by' list
     *
     * @return null
     */
    public function clearEnabledBy()
    {
        return $this->clear(self::ENABLED_BY);
    }

    /**
     * Returns 'enabled_by' list
     *
     * @return string[]
     */
    public function getEnabledBy()
    {
        return $this->get(self::ENABLED_BY);
    }

    /**
     * Returns true if 'enabled_by' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnabledBy()
    {
        return count($this->get(self::ENABLED_BY)) !== 0;
    }

    /**
     * Returns 'enabled_by' iterator
     *
     * @return \ArrayIterator
     */
    public function getEnabledByIterator()
    {
        return new \ArrayIterator($this->get(self::ENABLED_BY));
    }

    /**
     * Returns element from 'enabled_by' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEnabledByAt($offset)
    {
        return $this->get(self::ENABLED_BY, $offset);
    }

    /**
     * Returns count of 'enabled_by' list
     *
     * @return int
     */
    public function getEnabledByCount()
    {
        return $this->count(self::ENABLED_BY);
    }

    /**
     * Appends value to 'disabled_by' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDisabledBy($value)
    {
        return $this->append(self::DISABLED_BY, $value);
    }

    /**
     * Clears 'disabled_by' list
     *
     * @return null
     */
    public function clearDisabledBy()
    {
        return $this->clear(self::DISABLED_BY);
    }

    /**
     * Returns 'disabled_by' list
     *
     * @return string[]
     */
    public function getDisabledBy()
    {
        return $this->get(self::DISABLED_BY);
    }

    /**
     * Returns true if 'disabled_by' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisabledBy()
    {
        return count($this->get(self::DISABLED_BY)) !== 0;
    }

    /**
     * Returns 'disabled_by' iterator
     *
     * @return \ArrayIterator
     */
    public function getDisabledByIterator()
    {
        return new \ArrayIterator($this->get(self::DISABLED_BY));
    }

    /**
     * Returns element from 'disabled_by' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDisabledByAt($offset)
    {
        return $this->get(self::DISABLED_BY, $offset);
    }

    /**
     * Returns count of 'disabled_by' list
     *
     * @return int
     */
    public function getDisabledByCount()
    {
        return $this->count(self::DISABLED_BY);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Appends value to 'alternative_names' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendAlternativeNames($value)
    {
        return $this->append(self::ALTERNATIVE_NAMES, $value);
    }

    /**
     * Clears 'alternative_names' list
     *
     * @return null
     */
    public function clearAlternativeNames()
    {
        return $this->clear(self::ALTERNATIVE_NAMES);
    }

    /**
     * Returns 'alternative_names' list
     *
     * @return string[]
     */
    public function getAlternativeNames()
    {
        return $this->get(self::ALTERNATIVE_NAMES);
    }

    /**
     * Returns true if 'alternative_names' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlternativeNames()
    {
        return count($this->get(self::ALTERNATIVE_NAMES)) !== 0;
    }

    /**
     * Returns 'alternative_names' iterator
     *
     * @return \ArrayIterator
     */
    public function getAlternativeNamesIterator()
    {
        return new \ArrayIterator($this->get(self::ALTERNATIVE_NAMES));
    }

    /**
     * Returns element from 'alternative_names' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getAlternativeNamesAt($offset)
    {
        return $this->get(self::ALTERNATIVE_NAMES, $offset);
    }

    /**
     * Returns count of 'alternative_names' list
     *
     * @return int
     */
    public function getAlternativeNamesCount()
    {
        return $this->count(self::ALTERNATIVE_NAMES);
    }

    /**
     * Sets value of 'mandatory' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMandatory($value)
    {
        return $this->set(self::MANDATORY, $value);
    }

    /**
     * Returns value of 'mandatory' property
     *
     * @return boolean
     */
    public function getMandatory()
    {
        $value = $this->get(self::MANDATORY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'mandatory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatory()
    {
        return $this->get(self::MANDATORY) !== null;
    }

    /**
     * Sets value of 'mandatory_oneof' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryOneof($value)
    {
        return $this->set(self::MANDATORY_ONEOF, $value);
    }

    /**
     * Returns value of 'mandatory_oneof' property
     *
     * @return string
     */
    public function getMandatoryOneof()
    {
        $value = $this->get(self::MANDATORY_ONEOF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_oneof' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryOneof()
    {
        return $this->get(self::MANDATORY_ONEOF) !== null;
    }

    /**
     * Sets value of 'mandatory_anyof' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryAnyof($value)
    {
        return $this->set(self::MANDATORY_ANYOF, $value);
    }

    /**
     * Returns value of 'mandatory_anyof' property
     *
     * @return string
     */
    public function getMandatoryAnyof()
    {
        $value = $this->get(self::MANDATORY_ANYOF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_anyof' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryAnyof()
    {
        return $this->get(self::MANDATORY_ANYOF) !== null;
    }

    /**
     * Appends value to 'value' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendValue($value)
    {
        return $this->append(self::VALUE, $value);
    }

    /**
     * Clears 'value' list
     *
     * @return null
     */
    public function clearValue()
    {
        return $this->clear(self::VALUE);
    }

    /**
     * Returns 'value' list
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }

    /**
     * Returns true if 'value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return count($this->get(self::VALUE)) !== 0;
    }

    /**
     * Returns 'value' iterator
     *
     * @return \ArrayIterator
     */
    public function getValueIterator()
    {
        return new \ArrayIterator($this->get(self::VALUE));
    }

    /**
     * Returns element from 'value' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getValueAt($offset)
    {
        return $this->get(self::VALUE, $offset);
    }

    /**
     * Returns count of 'value' list
     *
     * @return int
     */
    public function getValueCount()
    {
        return $this->count(self::VALUE);
    }

    /**
     * Appends value to 'value_casei' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendValueCasei($value)
    {
        return $this->append(self::VALUE_CASEI, $value);
    }

    /**
     * Clears 'value_casei' list
     *
     * @return null
     */
    public function clearValueCasei()
    {
        return $this->clear(self::VALUE_CASEI);
    }

    /**
     * Returns 'value_casei' list
     *
     * @return string[]
     */
    public function getValueCasei()
    {
        return $this->get(self::VALUE_CASEI);
    }

    /**
     * Returns true if 'value_casei' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueCasei()
    {
        return count($this->get(self::VALUE_CASEI)) !== 0;
    }

    /**
     * Returns 'value_casei' iterator
     *
     * @return \ArrayIterator
     */
    public function getValueCaseiIterator()
    {
        return new \ArrayIterator($this->get(self::VALUE_CASEI));
    }

    /**
     * Returns element from 'value_casei' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getValueCaseiAt($offset)
    {
        return $this->get(self::VALUE_CASEI, $offset);
    }

    /**
     * Returns count of 'value_casei' list
     *
     * @return int
     */
    public function getValueCaseiCount()
    {
        return $this->count(self::VALUE_CASEI);
    }

    /**
     * Sets value of 'value_regex' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValueRegex($value)
    {
        return $this->set(self::VALUE_REGEX, $value);
    }

    /**
     * Returns value of 'value_regex' property
     *
     * @return string
     */
    public function getValueRegex()
    {
        $value = $this->get(self::VALUE_REGEX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'value_regex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueRegex()
    {
        return $this->get(self::VALUE_REGEX) !== null;
    }

    /**
     * Sets value of 'value_regex_casei' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValueRegexCasei($value)
    {
        return $this->set(self::VALUE_REGEX_CASEI, $value);
    }

    /**
     * Returns value of 'value_regex_casei' property
     *
     * @return string
     */
    public function getValueRegexCasei()
    {
        $value = $this->get(self::VALUE_REGEX_CASEI);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'value_regex_casei' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueRegexCasei()
    {
        return $this->get(self::VALUE_REGEX_CASEI) !== null;
    }

    /**
     * Sets value of 'value_url' property
     *
     * @param \Amp\Validator\UrlSpec $value Property value
     *
     * @return null
     */
    public function setValueUrl(\Amp\Validator\UrlSpec $value=null)
    {
        return $this->set(self::VALUE_URL, $value);
    }

    /**
     * Returns value of 'value_url' property
     *
     * @return \Amp\Validator\UrlSpec
     */
    public function getValueUrl()
    {
        return $this->get(self::VALUE_URL);
    }

    /**
     * Returns true if 'value_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueUrl()
    {
        return $this->get(self::VALUE_URL) !== null;
    }

    /**
     * Sets value of 'value_properties' property
     *
     * @param \Amp\Validator\PropertySpecList $value Property value
     *
     * @return null
     */
    public function setValueProperties(\Amp\Validator\PropertySpecList $value=null)
    {
        return $this->set(self::VALUE_PROPERTIES, $value);
    }

    /**
     * Returns value of 'value_properties' property
     *
     * @return \Amp\Validator\PropertySpecList
     */
    public function getValueProperties()
    {
        return $this->get(self::VALUE_PROPERTIES);
    }

    /**
     * Returns true if 'value_properties' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueProperties()
    {
        return $this->get(self::VALUE_PROPERTIES) !== null;
    }

    /**
     * Sets value of 'add_value_to_set' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddValueToSet($value)
    {
        return $this->set(self::ADD_VALUE_TO_SET, $value);
    }

    /**
     * Returns value of 'add_value_to_set' property
     *
     * @return integer
     */
    public function getAddValueToSet()
    {
        $value = $this->get(self::ADD_VALUE_TO_SET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'add_value_to_set' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddValueToSet()
    {
        return $this->get(self::ADD_VALUE_TO_SET) !== null;
    }

    /**
     * Sets value of 'value_oneof_set' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValueOneofSet($value)
    {
        return $this->set(self::VALUE_ONEOF_SET, $value);
    }

    /**
     * Returns value of 'value_oneof_set' property
     *
     * @return integer
     */
    public function getValueOneofSet()
    {
        $value = $this->get(self::VALUE_ONEOF_SET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'value_oneof_set' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueOneofSet()
    {
        return $this->get(self::VALUE_ONEOF_SET) !== null;
    }

    /**
     * Sets value of 'trigger' property
     *
     * @param \Amp\Validator\AttrTriggerSpec $value Property value
     *
     * @return null
     */
    public function setTrigger(\Amp\Validator\AttrTriggerSpec $value=null)
    {
        return $this->set(self::TRIGGER, $value);
    }

    /**
     * Returns value of 'trigger' property
     *
     * @return \Amp\Validator\AttrTriggerSpec
     */
    public function getTrigger()
    {
        return $this->get(self::TRIGGER);
    }

    /**
     * Returns true if 'trigger' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTrigger()
    {
        return $this->get(self::TRIGGER) !== null;
    }

    /**
     * Sets value of 'blacklisted_value_regex' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBlacklistedValueRegex($value)
    {
        return $this->set(self::BLACKLISTED_VALUE_REGEX, $value);
    }

    /**
     * Returns value of 'blacklisted_value_regex' property
     *
     * @return string
     */
    public function getBlacklistedValueRegex()
    {
        $value = $this->get(self::BLACKLISTED_VALUE_REGEX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'blacklisted_value_regex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlacklistedValueRegex()
    {
        return $this->get(self::BLACKLISTED_VALUE_REGEX) !== null;
    }

    /**
     * Sets value of 'deprecation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeprecation($value)
    {
        return $this->set(self::DEPRECATION, $value);
    }

    /**
     * Returns value of 'deprecation' property
     *
     * @return string
     */
    public function getDeprecation()
    {
        $value = $this->get(self::DEPRECATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deprecation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecation()
    {
        return $this->get(self::DEPRECATION) !== null;
    }

    /**
     * Sets value of 'deprecation_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeprecationUrl($value)
    {
        return $this->set(self::DEPRECATION_URL, $value);
    }

    /**
     * Returns value of 'deprecation_url' property
     *
     * @return string
     */
    public function getDeprecationUrl()
    {
        $value = $this->get(self::DEPRECATION_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deprecation_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecationUrl()
    {
        return $this->get(self::DEPRECATION_URL) !== null;
    }

    /**
     * Appends value to 'css_declaration' list
     *
     * @param \Amp\Validator\CssDeclaration $value Value to append
     *
     * @return null
     */
    public function appendCssDeclaration(\Amp\Validator\CssDeclaration $value)
    {
        return $this->append(self::CSS_DECLARATION, $value);
    }

    /**
     * Clears 'css_declaration' list
     *
     * @return null
     */
    public function clearCssDeclaration()
    {
        return $this->clear(self::CSS_DECLARATION);
    }

    /**
     * Returns 'css_declaration' list
     *
     * @return \Amp\Validator\CssDeclaration[]
     */
    public function getCssDeclaration()
    {
        return $this->get(self::CSS_DECLARATION);
    }

    /**
     * Returns true if 'css_declaration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCssDeclaration()
    {
        return count($this->get(self::CSS_DECLARATION)) !== 0;
    }

    /**
     * Returns 'css_declaration' iterator
     *
     * @return \ArrayIterator
     */
    public function getCssDeclarationIterator()
    {
        return new \ArrayIterator($this->get(self::CSS_DECLARATION));
    }

    /**
     * Returns element from 'css_declaration' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\CssDeclaration
     */
    public function getCssDeclarationAt($offset)
    {
        return $this->get(self::CSS_DECLARATION, $offset);
    }

    /**
     * Returns count of 'css_declaration' list
     *
     * @return int
     */
    public function getCssDeclarationCount()
    {
        return $this->count(self::CSS_DECLARATION);
    }

    /**
     * Sets value of 'dispatch_key' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDispatchKey($value)
    {
        return $this->set(self::DISPATCH_KEY, $value);
    }

    /**
     * Returns value of 'dispatch_key' property
     *
     * @return integer
     */
    public function getDispatchKey()
    {
        $value = $this->get(self::DISPATCH_KEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dispatch_key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDispatchKey()
    {
        return $this->get(self::DISPATCH_KEY) !== null;
    }

    /**
     * Sets value of 'implicit' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setImplicit($value)
    {
        return $this->set(self::IMPLICIT, $value);
    }

    /**
     * Returns value of 'implicit' property
     *
     * @return boolean
     */
    public function getImplicit()
    {
        $value = $this->get(self::IMPLICIT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'implicit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImplicit()
    {
        return $this->get(self::IMPLICIT) !== null;
    }

    /**
     * Appends value to 'requires_extension' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendRequiresExtension($value)
    {
        return $this->append(self::REQUIRES_EXTENSION, $value);
    }

    /**
     * Clears 'requires_extension' list
     *
     * @return null
     */
    public function clearRequiresExtension()
    {
        return $this->clear(self::REQUIRES_EXTENSION);
    }

    /**
     * Returns 'requires_extension' list
     *
     * @return string[]
     */
    public function getRequiresExtension()
    {
        return $this->get(self::REQUIRES_EXTENSION);
    }

    /**
     * Returns true if 'requires_extension' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequiresExtension()
    {
        return count($this->get(self::REQUIRES_EXTENSION)) !== 0;
    }

    /**
     * Returns 'requires_extension' iterator
     *
     * @return \ArrayIterator
     */
    public function getRequiresExtensionIterator()
    {
        return new \ArrayIterator($this->get(self::REQUIRES_EXTENSION));
    }

    /**
     * Returns element from 'requires_extension' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getRequiresExtensionAt($offset)
    {
        return $this->get(self::REQUIRES_EXTENSION, $offset);
    }

    /**
     * Returns count of 'requires_extension' list
     *
     * @return int
     */
    public function getRequiresExtensionCount()
    {
        return $this->count(self::REQUIRES_EXTENSION);
    }

    /**
     * Sets value of 'requires_ancestor' property
     *
     * @param \Amp\Validator\AncestorMarker $value Property value
     *
     * @return null
     */
    public function setRequiresAncestor(\Amp\Validator\AncestorMarker $value=null)
    {
        return $this->set(self::REQUIRES_ANCESTOR, $value);
    }

    /**
     * Returns value of 'requires_ancestor' property
     *
     * @return \Amp\Validator\AncestorMarker
     */
    public function getRequiresAncestor()
    {
        return $this->get(self::REQUIRES_ANCESTOR);
    }

    /**
     * Returns true if 'requires_ancestor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequiresAncestor()
    {
        return $this->get(self::REQUIRES_ANCESTOR) !== null;
    }
}
}