<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * AttrList message
 */
class AttrList extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const ATTRS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ATTRS => array(
            'name' => 'attrs',
            'repeated' => true,
            'type' => '\Amp\Validator\AttrSpec'
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
        $this->values[self::ATTRS] = array();
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
     * Appends value to 'attrs' list
     *
     * @param \Amp\Validator\AttrSpec $value Value to append
     *
     * @return null
     */
    public function appendAttrs(\Amp\Validator\AttrSpec $value)
    {
        return $this->append(self::ATTRS, $value);
    }

    /**
     * Clears 'attrs' list
     *
     * @return null
     */
    public function clearAttrs()
    {
        return $this->clear(self::ATTRS);
    }

    /**
     * Returns 'attrs' list
     *
     * @return \Amp\Validator\AttrSpec[]
     */
    public function getAttrs()
    {
        return $this->get(self::ATTRS);
    }

    /**
     * Returns true if 'attrs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttrs()
    {
        return count($this->get(self::ATTRS)) !== 0;
    }

    /**
     * Returns 'attrs' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttrsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRS));
    }

    /**
     * Returns element from 'attrs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\AttrSpec
     */
    public function getAttrsAt($offset)
    {
        return $this->get(self::ATTRS, $offset);
    }

    /**
     * Returns count of 'attrs' list
     *
     * @return int
     */
    public function getAttrsCount()
    {
        return $this->count(self::ATTRS);
    }
}
}