<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * BlackListedCDataRegex message
 */
class BlackListedCDataRegex extends \ProtobufMessage
{
    /* Field index constants */
    const REGEX = 1;
    const ERROR_MESSAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REGEX => array(
            'name' => 'regex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ERROR_MESSAGE => array(
            'name' => 'error_message',
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
        $this->values[self::REGEX] = null;
        $this->values[self::ERROR_MESSAGE] = null;
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
     * Sets value of 'regex' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegex($value)
    {
        return $this->set(self::REGEX, $value);
    }

    /**
     * Returns value of 'regex' property
     *
     * @return string
     */
    public function getRegex()
    {
        $value = $this->get(self::REGEX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'regex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRegex()
    {
        return $this->get(self::REGEX) !== null;
    }

    /**
     * Sets value of 'error_message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMessage($value)
    {
        return $this->set(self::ERROR_MESSAGE, $value);
    }

    /**
     * Returns value of 'error_message' property
     *
     * @return string
     */
    public function getErrorMessage()
    {
        $value = $this->get(self::ERROR_MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'error_message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorMessage()
    {
        return $this->get(self::ERROR_MESSAGE) !== null;
    }
}
}