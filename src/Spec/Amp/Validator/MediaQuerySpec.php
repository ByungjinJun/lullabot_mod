<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * MediaQuerySpec message
 */
class MediaQuerySpec extends \ProtobufMessage
{
    /* Field index constants */
    const ISSUES_AS_ERROR = 1;
    const TYPE = 2;
    const FEATURE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISSUES_AS_ERROR => array(
            'default' => false,
            'name' => 'issues_as_error',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TYPE => array(
            'name' => 'type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FEATURE => array(
            'name' => 'feature',
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
        $this->values[self::ISSUES_AS_ERROR] = self::$fields[self::ISSUES_AS_ERROR]['default'];
        $this->values[self::TYPE] = array();
        $this->values[self::FEATURE] = array();
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
     * Sets value of 'issues_as_error' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIssuesAsError($value)
    {
        return $this->set(self::ISSUES_AS_ERROR, $value);
    }

    /**
     * Returns value of 'issues_as_error' property
     *
     * @return boolean
     */
    public function getIssuesAsError()
    {
        $value = $this->get(self::ISSUES_AS_ERROR);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'issues_as_error' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIssuesAsError()
    {
        return $this->get(self::ISSUES_AS_ERROR) !== null;
    }

    /**
     * Appends value to 'type' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendType($value)
    {
        return $this->append(self::TYPE, $value);
    }

    /**
     * Clears 'type' list
     *
     * @return null
     */
    public function clearType()
    {
        return $this->clear(self::TYPE);
    }

    /**
     * Returns 'type' list
     *
     * @return string[]
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return count($this->get(self::TYPE)) !== 0;
    }

    /**
     * Returns 'type' iterator
     *
     * @return \ArrayIterator
     */
    public function getTypeIterator()
    {
        return new \ArrayIterator($this->get(self::TYPE));
    }

    /**
     * Returns element from 'type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTypeAt($offset)
    {
        return $this->get(self::TYPE, $offset);
    }

    /**
     * Returns count of 'type' list
     *
     * @return int
     */
    public function getTypeCount()
    {
        return $this->count(self::TYPE);
    }

    /**
     * Appends value to 'feature' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendFeature($value)
    {
        return $this->append(self::FEATURE, $value);
    }

    /**
     * Clears 'feature' list
     *
     * @return null
     */
    public function clearFeature()
    {
        return $this->clear(self::FEATURE);
    }

    /**
     * Returns 'feature' list
     *
     * @return string[]
     */
    public function getFeature()
    {
        return $this->get(self::FEATURE);
    }

    /**
     * Returns true if 'feature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeature()
    {
        return count($this->get(self::FEATURE)) !== 0;
    }

    /**
     * Returns 'feature' iterator
     *
     * @return \ArrayIterator
     */
    public function getFeatureIterator()
    {
        return new \ArrayIterator($this->get(self::FEATURE));
    }

    /**
     * Returns element from 'feature' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getFeatureAt($offset)
    {
        return $this->get(self::FEATURE, $offset);
    }

    /**
     * Returns count of 'feature' list
     *
     * @return int
     */
    public function getFeatureCount()
    {
        return $this->count(self::FEATURE);
    }
}
}