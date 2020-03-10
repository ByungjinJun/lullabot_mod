<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ChildTagSpec message
 */
class ChildTagSpec extends \ProtobufMessage
{
    /* Field index constants */
    const MANDATORY_NUM_CHILD_TAGS = 1;
    const FIRST_CHILD_TAG_NAME_ONEOF = 2;
    const CHILD_TAG_NAME_ONEOF = 3;
    const MANDATORY_MIN_NUM_CHILD_TAGS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MANDATORY_NUM_CHILD_TAGS => array(
            'default' => -1,
            'name' => 'mandatory_num_child_tags',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRST_CHILD_TAG_NAME_ONEOF => array(
            'name' => 'first_child_tag_name_oneof',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHILD_TAG_NAME_ONEOF => array(
            'name' => 'child_tag_name_oneof',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY_MIN_NUM_CHILD_TAGS => array(
            'default' => -1,
            'name' => 'mandatory_min_num_child_tags',
            'required' => false,
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
        $this->values[self::MANDATORY_NUM_CHILD_TAGS] = self::$fields[self::MANDATORY_NUM_CHILD_TAGS]['default'];
        $this->values[self::FIRST_CHILD_TAG_NAME_ONEOF] = array();
        $this->values[self::CHILD_TAG_NAME_ONEOF] = array();
        $this->values[self::MANDATORY_MIN_NUM_CHILD_TAGS] = self::$fields[self::MANDATORY_MIN_NUM_CHILD_TAGS]['default'];
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
     * Sets value of 'mandatory_num_child_tags' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMandatoryNumChildTags($value)
    {
        return $this->set(self::MANDATORY_NUM_CHILD_TAGS, $value);
    }

    /**
     * Returns value of 'mandatory_num_child_tags' property
     *
     * @return integer
     */
    public function getMandatoryNumChildTags()
    {
        $value = $this->get(self::MANDATORY_NUM_CHILD_TAGS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mandatory_num_child_tags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryNumChildTags()
    {
        return $this->get(self::MANDATORY_NUM_CHILD_TAGS) !== null;
    }

    /**
     * Appends value to 'first_child_tag_name_oneof' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendFirstChildTagNameOneof($value)
    {
        return $this->append(self::FIRST_CHILD_TAG_NAME_ONEOF, $value);
    }

    /**
     * Clears 'first_child_tag_name_oneof' list
     *
     * @return null
     */
    public function clearFirstChildTagNameOneof()
    {
        return $this->clear(self::FIRST_CHILD_TAG_NAME_ONEOF);
    }

    /**
     * Returns 'first_child_tag_name_oneof' list
     *
     * @return string[]
     */
    public function getFirstChildTagNameOneof()
    {
        return $this->get(self::FIRST_CHILD_TAG_NAME_ONEOF);
    }

    /**
     * Returns true if 'first_child_tag_name_oneof' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFirstChildTagNameOneof()
    {
        return count($this->get(self::FIRST_CHILD_TAG_NAME_ONEOF)) !== 0;
    }

    /**
     * Returns 'first_child_tag_name_oneof' iterator
     *
     * @return \ArrayIterator
     */
    public function getFirstChildTagNameOneofIterator()
    {
        return new \ArrayIterator($this->get(self::FIRST_CHILD_TAG_NAME_ONEOF));
    }

    /**
     * Returns element from 'first_child_tag_name_oneof' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getFirstChildTagNameOneofAt($offset)
    {
        return $this->get(self::FIRST_CHILD_TAG_NAME_ONEOF, $offset);
    }

    /**
     * Returns count of 'first_child_tag_name_oneof' list
     *
     * @return int
     */
    public function getFirstChildTagNameOneofCount()
    {
        return $this->count(self::FIRST_CHILD_TAG_NAME_ONEOF);
    }

    /**
     * Appends value to 'child_tag_name_oneof' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendChildTagNameOneof($value)
    {
        return $this->append(self::CHILD_TAG_NAME_ONEOF, $value);
    }

    /**
     * Clears 'child_tag_name_oneof' list
     *
     * @return null
     */
    public function clearChildTagNameOneof()
    {
        return $this->clear(self::CHILD_TAG_NAME_ONEOF);
    }

    /**
     * Returns 'child_tag_name_oneof' list
     *
     * @return string[]
     */
    public function getChildTagNameOneof()
    {
        return $this->get(self::CHILD_TAG_NAME_ONEOF);
    }

    /**
     * Returns true if 'child_tag_name_oneof' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChildTagNameOneof()
    {
        return count($this->get(self::CHILD_TAG_NAME_ONEOF)) !== 0;
    }

    /**
     * Returns 'child_tag_name_oneof' iterator
     *
     * @return \ArrayIterator
     */
    public function getChildTagNameOneofIterator()
    {
        return new \ArrayIterator($this->get(self::CHILD_TAG_NAME_ONEOF));
    }

    /**
     * Returns element from 'child_tag_name_oneof' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getChildTagNameOneofAt($offset)
    {
        return $this->get(self::CHILD_TAG_NAME_ONEOF, $offset);
    }

    /**
     * Returns count of 'child_tag_name_oneof' list
     *
     * @return int
     */
    public function getChildTagNameOneofCount()
    {
        return $this->count(self::CHILD_TAG_NAME_ONEOF);
    }

    /**
     * Sets value of 'mandatory_min_num_child_tags' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMandatoryMinNumChildTags($value)
    {
        return $this->set(self::MANDATORY_MIN_NUM_CHILD_TAGS, $value);
    }

    /**
     * Returns value of 'mandatory_min_num_child_tags' property
     *
     * @return integer
     */
    public function getMandatoryMinNumChildTags()
    {
        $value = $this->get(self::MANDATORY_MIN_NUM_CHILD_TAGS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mandatory_min_num_child_tags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryMinNumChildTags()
    {
        return $this->get(self::MANDATORY_MIN_NUM_CHILD_TAGS) !== null;
    }
}
}