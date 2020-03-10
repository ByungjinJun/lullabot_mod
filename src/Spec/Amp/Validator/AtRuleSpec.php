<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * AtRuleSpec message
 */
class AtRuleSpec extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const TYPE = 2;
    const MEDIA_QUERY_SPEC = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'default' => \Amp\Validator\AtRuleSpec_BlockType::PARSE_AS_ERROR,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDIA_QUERY_SPEC => array(
            'name' => 'media_query_spec',
            'required' => false,
            'type' => '\Amp\Validator\MediaQuerySpec'
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
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::MEDIA_QUERY_SPEC] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'media_query_spec' property
     *
     * @param \Amp\Validator\MediaQuerySpec $value Property value
     *
     * @return null
     */
    public function setMediaQuerySpec(\Amp\Validator\MediaQuerySpec $value=null)
    {
        return $this->set(self::MEDIA_QUERY_SPEC, $value);
    }

    /**
     * Returns value of 'media_query_spec' property
     *
     * @return \Amp\Validator\MediaQuerySpec
     */
    public function getMediaQuerySpec()
    {
        return $this->get(self::MEDIA_QUERY_SPEC);
    }

    /**
     * Returns true if 'media_query_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaQuerySpec()
    {
        return $this->get(self::MEDIA_QUERY_SPEC) !== null;
    }
}
}