<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ErrorFormat message
 */
class ErrorFormat extends \ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const FORMAT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FORMAT => array(
            'name' => 'format',
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
        $this->values[self::CODE] = null;
        $this->values[self::FORMAT] = null;
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
     * Sets value of 'format' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFormat($value)
    {
        return $this->set(self::FORMAT, $value);
    }

    /**
     * Returns value of 'format' property
     *
     * @return string
     */
    public function getFormat()
    {
        $value = $this->get(self::FORMAT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'format' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFormat()
    {
        return $this->get(self::FORMAT) !== null;
    }
}
}