<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ErrorSpecificity message
 */
class ErrorSpecificity extends \ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const SPECIFICITY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPECIFICITY => array(
            'name' => 'specificity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::CODE] = null;
        $this->values[self::SPECIFICITY] = null;
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
     * Sets value of 'code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return integer
     */
    public function getCode()
    {
        $value = $this->get(self::CODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCode()
    {
        return $this->get(self::CODE) !== null;
    }

    /**
     * Sets value of 'specificity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpecificity($value)
    {
        return $this->set(self::SPECIFICITY, $value);
    }

    /**
     * Returns value of 'specificity' property
     *
     * @return integer
     */
    public function getSpecificity()
    {
        $value = $this->get(self::SPECIFICITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'specificity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpecificity()
    {
        return $this->get(self::SPECIFICITY) !== null;
    }
}
}