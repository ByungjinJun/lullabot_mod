<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * AmpLayout message
 */
class AmpLayout extends \ProtobufMessage
{
    /* Field index constants */
    const SUPPORTED_LAYOUTS = 1;
    const DEFINES_DEFAULT_WIDTH = 2;
    const DEFINES_DEFAULT_HEIGHT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SUPPORTED_LAYOUTS => array(
            'name' => 'supported_layouts',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEFINES_DEFAULT_WIDTH => array(
            'name' => 'defines_default_width',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DEFINES_DEFAULT_HEIGHT => array(
            'name' => 'defines_default_height',
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
        $this->values[self::SUPPORTED_LAYOUTS] = array();
        $this->values[self::DEFINES_DEFAULT_WIDTH] = null;
        $this->values[self::DEFINES_DEFAULT_HEIGHT] = null;
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
     * Appends value to 'supported_layouts' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendSupportedLayouts($value)
    {
        return $this->append(self::SUPPORTED_LAYOUTS, $value);
    }

    /**
     * Clears 'supported_layouts' list
     *
     * @return null
     */
    public function clearSupportedLayouts()
    {
        return $this->clear(self::SUPPORTED_LAYOUTS);
    }

    /**
     * Returns 'supported_layouts' list
     *
     * @return integer[]
     */
    public function getSupportedLayouts()
    {
        return $this->get(self::SUPPORTED_LAYOUTS);
    }

    /**
     * Returns true if 'supported_layouts' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSupportedLayouts()
    {
        return count($this->get(self::SUPPORTED_LAYOUTS)) !== 0;
    }

    /**
     * Returns 'supported_layouts' iterator
     *
     * @return \ArrayIterator
     */
    public function getSupportedLayoutsIterator()
    {
        return new \ArrayIterator($this->get(self::SUPPORTED_LAYOUTS));
    }

    /**
     * Returns element from 'supported_layouts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getSupportedLayoutsAt($offset)
    {
        return $this->get(self::SUPPORTED_LAYOUTS, $offset);
    }

    /**
     * Returns count of 'supported_layouts' list
     *
     * @return int
     */
    public function getSupportedLayoutsCount()
    {
        return $this->count(self::SUPPORTED_LAYOUTS);
    }

    /**
     * Sets value of 'defines_default_width' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDefinesDefaultWidth($value)
    {
        return $this->set(self::DEFINES_DEFAULT_WIDTH, $value);
    }

    /**
     * Returns value of 'defines_default_width' property
     *
     * @return boolean
     */
    public function getDefinesDefaultWidth()
    {
        $value = $this->get(self::DEFINES_DEFAULT_WIDTH);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'defines_default_width' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefinesDefaultWidth()
    {
        return $this->get(self::DEFINES_DEFAULT_WIDTH) !== null;
    }

    /**
     * Sets value of 'defines_default_height' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDefinesDefaultHeight($value)
    {
        return $this->set(self::DEFINES_DEFAULT_HEIGHT, $value);
    }

    /**
     * Returns value of 'defines_default_height' property
     *
     * @return boolean
     */
    public function getDefinesDefaultHeight()
    {
        $value = $this->get(self::DEFINES_DEFAULT_HEIGHT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'defines_default_height' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefinesDefaultHeight()
    {
        return $this->get(self::DEFINES_DEFAULT_HEIGHT) !== null;
    }
}
}