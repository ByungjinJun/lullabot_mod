<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ReferencePoint message
 */
class ReferencePoint extends \ProtobufMessage
{
    /* Field index constants */
    const TAG_SPEC_NAME = 1;
    const MANDATORY = 2;
    const UNIQUE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TAG_SPEC_NAME => array(
            'name' => 'tag_spec_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY => array(
            'name' => 'mandatory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::UNIQUE => array(
            'name' => 'unique',
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
        $this->values[self::TAG_SPEC_NAME] = null;
        $this->values[self::MANDATORY] = null;
        $this->values[self::UNIQUE] = null;
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
     * Sets value of 'tag_spec_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagSpecName($value)
    {
        return $this->set(self::TAG_SPEC_NAME, $value);
    }

    /**
     * Returns value of 'tag_spec_name' property
     *
     * @return string
     */
    public function getTagSpecName()
    {
        $value = $this->get(self::TAG_SPEC_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tag_spec_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagSpecName()
    {
        return $this->get(self::TAG_SPEC_NAME) !== null;
    }

    /**
     * Sets value of 'mandatory' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMandatory($value)
    {
        return $this->set(self::MANDATORY, $value);
    }

    /**
     * Returns value of 'mandatory' property
     *
     * @return boolean
     */
    public function getMandatory()
    {
        $value = $this->get(self::MANDATORY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'mandatory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatory()
    {
        return $this->get(self::MANDATORY) !== null;
    }

    /**
     * Sets value of 'unique' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setUnique($value)
    {
        return $this->set(self::UNIQUE, $value);
    }

    /**
     * Returns value of 'unique' property
     *
     * @return boolean
     */
    public function getUnique()
    {
        $value = $this->get(self::UNIQUE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'unique' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnique()
    {
        return $this->get(self::UNIQUE) !== null;
    }
}
}