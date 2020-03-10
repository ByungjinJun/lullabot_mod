<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * PropertySpecList message
 */
class PropertySpecList extends \ProtobufMessage
{
    /* Field index constants */
    const PROPERTIES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROPERTIES => array(
            'name' => 'properties',
            'repeated' => true,
            'type' => '\Amp\Validator\PropertySpec'
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
        $this->values[self::PROPERTIES] = array();
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
     * Appends value to 'properties' list
     *
     * @param \Amp\Validator\PropertySpec $value Value to append
     *
     * @return null
     */
    public function appendProperties(\Amp\Validator\PropertySpec $value)
    {
        return $this->append(self::PROPERTIES, $value);
    }

    /**
     * Clears 'properties' list
     *
     * @return null
     */
    public function clearProperties()
    {
        return $this->clear(self::PROPERTIES);
    }

    /**
     * Returns 'properties' list
     *
     * @return \Amp\Validator\PropertySpec[]
     */
    public function getProperties()
    {
        return $this->get(self::PROPERTIES);
    }

    /**
     * Returns true if 'properties' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperties()
    {
        return count($this->get(self::PROPERTIES)) !== 0;
    }

    /**
     * Returns 'properties' iterator
     *
     * @return \ArrayIterator
     */
    public function getPropertiesIterator()
    {
        return new \ArrayIterator($this->get(self::PROPERTIES));
    }

    /**
     * Returns element from 'properties' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\PropertySpec
     */
    public function getPropertiesAt($offset)
    {
        return $this->get(self::PROPERTIES, $offset);
    }

    /**
     * Returns count of 'properties' list
     *
     * @return int
     */
    public function getPropertiesCount()
    {
        return $this->count(self::PROPERTIES);
    }
}
}