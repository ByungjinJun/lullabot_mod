<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * AncestorMarker message
 */
class AncestorMarker extends \ProtobufMessage
{
    /* Field index constants */
    const MARKER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MARKER => array(
            'name' => 'marker',
            'repeated' => true,
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
        $this->values[self::MARKER] = array();
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
     * Appends value to 'marker' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendMarker($value)
    {
        return $this->append(self::MARKER, $value);
    }

    /**
     * Clears 'marker' list
     *
     * @return null
     */
    public function clearMarker()
    {
        return $this->clear(self::MARKER);
    }

    /**
     * Returns 'marker' list
     *
     * @return integer[]
     */
    public function getMarker()
    {
        return $this->get(self::MARKER);
    }

    /**
     * Returns true if 'marker' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarker()
    {
        return count($this->get(self::MARKER)) !== 0;
    }

    /**
     * Returns 'marker' iterator
     *
     * @return \ArrayIterator
     */
    public function getMarkerIterator()
    {
        return new \ArrayIterator($this->get(self::MARKER));
    }

    /**
     * Returns element from 'marker' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getMarkerAt($offset)
    {
        return $this->get(self::MARKER, $offset);
    }

    /**
     * Returns count of 'marker' list
     *
     * @return int
     */
    public function getMarkerCount()
    {
        return $this->count(self::MARKER);
    }
}
}