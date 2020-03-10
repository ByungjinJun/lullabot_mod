<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * PropertySpec message
 */
class PropertySpec extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const MANDATORY = 2;
    const VALUE = 3;
    const VALUE_DOUBLE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY => array(
            'name' => 'mandatory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VALUE => array(
            'name' => 'value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_DOUBLE => array(
            'name' => 'value_double',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
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
        $this->values[self::NAME] = null;
        $this->values[self::MANDATORY] = null;
        $this->values[self::VALUE] = null;
        $this->values[self::VALUE_DOUBLE] = null;
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
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }

    /**
     * Sets value of 'value_double' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setValueDouble($value)
    {
        return $this->set(self::VALUE_DOUBLE, $value);
    }

    /**
     * Returns value of 'value_double' property
     *
     * @return double
     */
    public function getValueDouble()
    {
        $value = $this->get(self::VALUE_DOUBLE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'value_double' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueDouble()
    {
        return $this->get(self::VALUE_DOUBLE) !== null;
    }
}
}