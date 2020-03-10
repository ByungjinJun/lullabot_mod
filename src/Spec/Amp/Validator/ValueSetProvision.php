<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValueSetProvision message
 */
class ValueSetProvision extends \ProtobufMessage
{
    /* Field index constants */
    const SET = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SET => array(
            'name' => 'set',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE => array(
            'name' => 'value',
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
        $this->values[self::SET] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'set' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSet($value)
    {
        return $this->set(self::SET, $value);
    }

    /**
     * Returns value of 'set' property
     *
     * @return integer
     */
    public function getSet()
    {
        $value = $this->get(self::SET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'set' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSet()
    {
        return $this->get(self::SET) !== null;
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
}
}