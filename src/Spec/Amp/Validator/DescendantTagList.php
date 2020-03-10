<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * DescendantTagList message
 */
class DescendantTagList extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const TAG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TAG => array(
            'name' => 'tag',
            'repeated' => true,
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
        $this->values[self::NAME] = null;
        $this->values[self::TAG] = array();
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
     * Appends value to 'tag' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTag($value)
    {
        return $this->append(self::TAG, $value);
    }

    /**
     * Clears 'tag' list
     *
     * @return null
     */
    public function clearTag()
    {
        return $this->clear(self::TAG);
    }

    /**
     * Returns 'tag' list
     *
     * @return string[]
     */
    public function getTag()
    {
        return $this->get(self::TAG);
    }

    /**
     * Returns true if 'tag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTag()
    {
        return count($this->get(self::TAG)) !== 0;
    }

    /**
     * Returns 'tag' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagIterator()
    {
        return new \ArrayIterator($this->get(self::TAG));
    }

    /**
     * Returns element from 'tag' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTagAt($offset)
    {
        return $this->get(self::TAG, $offset);
    }

    /**
     * Returns count of 'tag' list
     *
     * @return int
     */
    public function getTagCount()
    {
        return $this->count(self::TAG);
    }
}
}