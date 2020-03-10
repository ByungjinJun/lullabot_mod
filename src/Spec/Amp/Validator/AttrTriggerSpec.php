<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * AttrTriggerSpec message
 */
class AttrTriggerSpec extends \ProtobufMessage
{
    /* Field index constants */
    const IF_VALUE_REGEX = 1;
    const ALSO_REQUIRES_ATTR = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IF_VALUE_REGEX => array(
            'name' => 'if_value_regex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALSO_REQUIRES_ATTR => array(
            'name' => 'also_requires_attr',
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
        $this->values[self::IF_VALUE_REGEX] = null;
        $this->values[self::ALSO_REQUIRES_ATTR] = array();
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
     * Sets value of 'if_value_regex' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIfValueRegex($value)
    {
        return $this->set(self::IF_VALUE_REGEX, $value);
    }

    /**
     * Returns value of 'if_value_regex' property
     *
     * @return string
     */
    public function getIfValueRegex()
    {
        $value = $this->get(self::IF_VALUE_REGEX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'if_value_regex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIfValueRegex()
    {
        return $this->get(self::IF_VALUE_REGEX) !== null;
    }

    /**
     * Appends value to 'also_requires_attr' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendAlsoRequiresAttr($value)
    {
        return $this->append(self::ALSO_REQUIRES_ATTR, $value);
    }

    /**
     * Clears 'also_requires_attr' list
     *
     * @return null
     */
    public function clearAlsoRequiresAttr()
    {
        return $this->clear(self::ALSO_REQUIRES_ATTR);
    }

    /**
     * Returns 'also_requires_attr' list
     *
     * @return string[]
     */
    public function getAlsoRequiresAttr()
    {
        return $this->get(self::ALSO_REQUIRES_ATTR);
    }

    /**
     * Returns true if 'also_requires_attr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlsoRequiresAttr()
    {
        return count($this->get(self::ALSO_REQUIRES_ATTR)) !== 0;
    }

    /**
     * Returns 'also_requires_attr' iterator
     *
     * @return \ArrayIterator
     */
    public function getAlsoRequiresAttrIterator()
    {
        return new \ArrayIterator($this->get(self::ALSO_REQUIRES_ATTR));
    }

    /**
     * Returns element from 'also_requires_attr' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getAlsoRequiresAttrAt($offset)
    {
        return $this->get(self::ALSO_REQUIRES_ATTR, $offset);
    }

    /**
     * Returns count of 'also_requires_attr' list
     *
     * @return int
     */
    public function getAlsoRequiresAttrCount()
    {
        return $this->count(self::ALSO_REQUIRES_ATTR);
    }
}
}