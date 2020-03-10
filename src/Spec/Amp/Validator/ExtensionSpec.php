<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ExtensionSpec message
 */
class ExtensionSpec extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const VERSION = 2;
    const DEPRECATED_VERSION = 3;
    const EXTENSION_TYPE = 8;
    const DEPRECATED_ALLOW_DUPLICATES = 6;
    const REQUIRES_USAGE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERSION => array(
            'name' => 'version',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPRECATED_VERSION => array(
            'name' => 'deprecated_version',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTENSION_TYPE => array(
            'default' => \Amp\Validator\ExtensionSpec_ExtensionType::CUSTOM_ELEMENT,
            'name' => 'extension_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEPRECATED_ALLOW_DUPLICATES => array(
            'default' => false,
            'name' => 'deprecated_allow_duplicates',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::REQUIRES_USAGE => array(
            'default' => \Amp\Validator\ExtensionSpec_ExtensionUsageRequirement::ERROR,
            'name' => 'requires_usage',
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
        $this->values[self::NAME] = null;
        $this->values[self::VERSION] = array();
        $this->values[self::DEPRECATED_VERSION] = array();
        $this->values[self::EXTENSION_TYPE] = self::$fields[self::EXTENSION_TYPE]['default'];
        $this->values[self::DEPRECATED_ALLOW_DUPLICATES] = self::$fields[self::DEPRECATED_ALLOW_DUPLICATES]['default'];
        $this->values[self::REQUIRES_USAGE] = self::$fields[self::REQUIRES_USAGE]['default'];
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
     * Appends value to 'version' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendVersion($value)
    {
        return $this->append(self::VERSION, $value);
    }

    /**
     * Clears 'version' list
     *
     * @return null
     */
    public function clearVersion()
    {
        return $this->clear(self::VERSION);
    }

    /**
     * Returns 'version' list
     *
     * @return string[]
     */
    public function getVersion()
    {
        return $this->get(self::VERSION);
    }

    /**
     * Returns true if 'version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVersion()
    {
        return count($this->get(self::VERSION)) !== 0;
    }

    /**
     * Returns 'version' iterator
     *
     * @return \ArrayIterator
     */
    public function getVersionIterator()
    {
        return new \ArrayIterator($this->get(self::VERSION));
    }

    /**
     * Returns element from 'version' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getVersionAt($offset)
    {
        return $this->get(self::VERSION, $offset);
    }

    /**
     * Returns count of 'version' list
     *
     * @return int
     */
    public function getVersionCount()
    {
        return $this->count(self::VERSION);
    }

    /**
     * Appends value to 'deprecated_version' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDeprecatedVersion($value)
    {
        return $this->append(self::DEPRECATED_VERSION, $value);
    }

    /**
     * Clears 'deprecated_version' list
     *
     * @return null
     */
    public function clearDeprecatedVersion()
    {
        return $this->clear(self::DEPRECATED_VERSION);
    }

    /**
     * Returns 'deprecated_version' list
     *
     * @return string[]
     */
    public function getDeprecatedVersion()
    {
        return $this->get(self::DEPRECATED_VERSION);
    }

    /**
     * Returns true if 'deprecated_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecatedVersion()
    {
        return count($this->get(self::DEPRECATED_VERSION)) !== 0;
    }

    /**
     * Returns 'deprecated_version' iterator
     *
     * @return \ArrayIterator
     */
    public function getDeprecatedVersionIterator()
    {
        return new \ArrayIterator($this->get(self::DEPRECATED_VERSION));
    }

    /**
     * Returns element from 'deprecated_version' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDeprecatedVersionAt($offset)
    {
        return $this->get(self::DEPRECATED_VERSION, $offset);
    }

    /**
     * Returns count of 'deprecated_version' list
     *
     * @return int
     */
    public function getDeprecatedVersionCount()
    {
        return $this->count(self::DEPRECATED_VERSION);
    }

    /**
     * Sets value of 'extension_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtensionType($value)
    {
        return $this->set(self::EXTENSION_TYPE, $value);
    }

    /**
     * Returns value of 'extension_type' property
     *
     * @return integer
     */
    public function getExtensionType()
    {
        $value = $this->get(self::EXTENSION_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'extension_type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtensionType()
    {
        return $this->get(self::EXTENSION_TYPE) !== null;
    }

    /**
     * Sets value of 'deprecated_allow_duplicates' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDeprecatedAllowDuplicates($value)
    {
        return $this->set(self::DEPRECATED_ALLOW_DUPLICATES, $value);
    }

    /**
     * Returns value of 'deprecated_allow_duplicates' property
     *
     * @return boolean
     */
    public function getDeprecatedAllowDuplicates()
    {
        $value = $this->get(self::DEPRECATED_ALLOW_DUPLICATES);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'deprecated_allow_duplicates' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecatedAllowDuplicates()
    {
        return $this->get(self::DEPRECATED_ALLOW_DUPLICATES) !== null;
    }

    /**
     * Sets value of 'requires_usage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequiresUsage($value)
    {
        return $this->set(self::REQUIRES_USAGE, $value);
    }

    /**
     * Returns value of 'requires_usage' property
     *
     * @return integer
     */
    public function getRequiresUsage()
    {
        $value = $this->get(self::REQUIRES_USAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'requires_usage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequiresUsage()
    {
        return $this->get(self::REQUIRES_USAGE) !== null;
    }
}
}