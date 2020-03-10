<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * CssDeclaration message
 */
class CssDeclaration extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const VALUE_CASEI = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_CASEI => array(
            'name' => 'value_casei',
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
        $this->values[self::VALUE_CASEI] = array();
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
     * Appends value to 'value_casei' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendValueCasei($value)
    {
        return $this->append(self::VALUE_CASEI, $value);
    }

    /**
     * Clears 'value_casei' list
     *
     * @return null
     */
    public function clearValueCasei()
    {
        return $this->clear(self::VALUE_CASEI);
    }

    /**
     * Returns 'value_casei' list
     *
     * @return string[]
     */
    public function getValueCasei()
    {
        return $this->get(self::VALUE_CASEI);
    }

    /**
     * Returns true if 'value_casei' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueCasei()
    {
        return count($this->get(self::VALUE_CASEI)) !== 0;
    }

    /**
     * Returns 'value_casei' iterator
     *
     * @return \ArrayIterator
     */
    public function getValueCaseiIterator()
    {
        return new \ArrayIterator($this->get(self::VALUE_CASEI));
    }

    /**
     * Returns element from 'value_casei' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getValueCaseiAt($offset)
    {
        return $this->get(self::VALUE_CASEI, $offset);
    }

    /**
     * Returns count of 'value_casei' list
     *
     * @return int
     */
    public function getValueCaseiCount()
    {
        return $this->count(self::VALUE_CASEI);
    }
}
}