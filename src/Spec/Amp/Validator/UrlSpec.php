<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * UrlSpec message
 */
class UrlSpec extends \ProtobufMessage
{
    /* Field index constants */
    const PROTOCOL = 1;
    const ALLOW_RELATIVE = 2;
    const ALLOW_EMPTY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROTOCOL => array(
            'name' => 'protocol',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALLOW_RELATIVE => array(
            'default' => true,
            'name' => 'allow_relative',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ALLOW_EMPTY => array(
            'default' => false,
            'name' => 'allow_empty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::PROTOCOL] = array();
        $this->values[self::ALLOW_RELATIVE] = self::$fields[self::ALLOW_RELATIVE]['default'];
        $this->values[self::ALLOW_EMPTY] = self::$fields[self::ALLOW_EMPTY]['default'];
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
     * Appends value to 'protocol' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendProtocol($value)
    {
        return $this->append(self::PROTOCOL, $value);
    }

    /**
     * Clears 'protocol' list
     *
     * @return null
     */
    public function clearProtocol()
    {
        return $this->clear(self::PROTOCOL);
    }

    /**
     * Returns 'protocol' list
     *
     * @return string[]
     */
    public function getProtocol()
    {
        return $this->get(self::PROTOCOL);
    }

    /**
     * Returns true if 'protocol' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProtocol()
    {
        return count($this->get(self::PROTOCOL)) !== 0;
    }

    /**
     * Returns 'protocol' iterator
     *
     * @return \ArrayIterator
     */
    public function getProtocolIterator()
    {
        return new \ArrayIterator($this->get(self::PROTOCOL));
    }

    /**
     * Returns element from 'protocol' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getProtocolAt($offset)
    {
        return $this->get(self::PROTOCOL, $offset);
    }

    /**
     * Returns count of 'protocol' list
     *
     * @return int
     */
    public function getProtocolCount()
    {
        return $this->count(self::PROTOCOL);
    }

    /**
     * Sets value of 'allow_relative' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAllowRelative($value)
    {
        return $this->set(self::ALLOW_RELATIVE, $value);
    }

    /**
     * Returns value of 'allow_relative' property
     *
     * @return boolean
     */
    public function getAllowRelative()
    {
        $value = $this->get(self::ALLOW_RELATIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'allow_relative' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllowRelative()
    {
        return $this->get(self::ALLOW_RELATIVE) !== null;
    }

    /**
     * Sets value of 'allow_empty' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAllowEmpty($value)
    {
        return $this->set(self::ALLOW_EMPTY, $value);
    }

    /**
     * Returns value of 'allow_empty' property
     *
     * @return boolean
     */
    public function getAllowEmpty()
    {
        $value = $this->get(self::ALLOW_EMPTY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'allow_empty' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllowEmpty()
    {
        return $this->get(self::ALLOW_EMPTY) !== null;
    }
}
}