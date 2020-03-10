<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValidationResult message
 */
class ValidationResult extends \ProtobufMessage
{
    /* Field index constants */
    const STATUS = 2;
    const ERRORS = 1;
    const VALIDATOR_REVISION = 3;
    const SPEC_FILE_REVISION = 4;
    const TRANSFORMER_VERSION = 6;
    const TYPE_IDENTIFIER = 5;
    const VALUE_SET_PROVISIONS = 7;
    const VALUE_SET_REQUIREMENTS = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERRORS => array(
            'name' => 'errors',
            'repeated' => true,
            'type' => '\Amp\Validator\ValidationError'
        ),
        self::VALIDATOR_REVISION => array(
            'default' => -1,
            'name' => 'validator_revision',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPEC_FILE_REVISION => array(
            'default' => -1,
            'name' => 'spec_file_revision',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TRANSFORMER_VERSION => array(
            'default' => 0,
            'name' => 'transformer_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE_IDENTIFIER => array(
            'name' => 'type_identifier',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE_SET_PROVISIONS => array(
            'name' => 'value_set_provisions',
            'repeated' => true,
            'type' => '\Amp\Validator\ValueSetProvision'
        ),
        self::VALUE_SET_REQUIREMENTS => array(
            'name' => 'value_set_requirements',
            'repeated' => true,
            'type' => '\Amp\Validator\ValueSetRequirement'
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
        $this->values[self::STATUS] = null;
        $this->values[self::ERRORS] = array();
        $this->values[self::VALIDATOR_REVISION] = self::$fields[self::VALIDATOR_REVISION]['default'];
        $this->values[self::SPEC_FILE_REVISION] = self::$fields[self::SPEC_FILE_REVISION]['default'];
        $this->values[self::TRANSFORMER_VERSION] = self::$fields[self::TRANSFORMER_VERSION]['default'];
        $this->values[self::TYPE_IDENTIFIER] = array();
        $this->values[self::VALUE_SET_PROVISIONS] = array();
        $this->values[self::VALUE_SET_REQUIREMENTS] = array();
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
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Appends value to 'errors' list
     *
     * @param \Amp\Validator\ValidationError $value Value to append
     *
     * @return null
     */
    public function appendErrors(\Amp\Validator\ValidationError $value)
    {
        return $this->append(self::ERRORS, $value);
    }

    /**
     * Clears 'errors' list
     *
     * @return null
     */
    public function clearErrors()
    {
        return $this->clear(self::ERRORS);
    }

    /**
     * Returns 'errors' list
     *
     * @return \Amp\Validator\ValidationError[]
     */
    public function getErrors()
    {
        return $this->get(self::ERRORS);
    }

    /**
     * Returns true if 'errors' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrors()
    {
        return count($this->get(self::ERRORS)) !== 0;
    }

    /**
     * Returns 'errors' iterator
     *
     * @return \ArrayIterator
     */
    public function getErrorsIterator()
    {
        return new \ArrayIterator($this->get(self::ERRORS));
    }

    /**
     * Returns element from 'errors' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\ValidationError
     */
    public function getErrorsAt($offset)
    {
        return $this->get(self::ERRORS, $offset);
    }

    /**
     * Returns count of 'errors' list
     *
     * @return int
     */
    public function getErrorsCount()
    {
        return $this->count(self::ERRORS);
    }

    /**
     * Sets value of 'validator_revision' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValidatorRevision($value)
    {
        return $this->set(self::VALIDATOR_REVISION, $value);
    }

    /**
     * Returns value of 'validator_revision' property
     *
     * @return integer
     */
    public function getValidatorRevision()
    {
        $value = $this->get(self::VALIDATOR_REVISION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'validator_revision' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValidatorRevision()
    {
        return $this->get(self::VALIDATOR_REVISION) !== null;
    }

    /**
     * Sets value of 'spec_file_revision' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpecFileRevision($value)
    {
        return $this->set(self::SPEC_FILE_REVISION, $value);
    }

    /**
     * Returns value of 'spec_file_revision' property
     *
     * @return integer
     */
    public function getSpecFileRevision()
    {
        $value = $this->get(self::SPEC_FILE_REVISION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'spec_file_revision' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpecFileRevision()
    {
        return $this->get(self::SPEC_FILE_REVISION) !== null;
    }

    /**
     * Sets value of 'transformer_version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTransformerVersion($value)
    {
        return $this->set(self::TRANSFORMER_VERSION, $value);
    }

    /**
     * Returns value of 'transformer_version' property
     *
     * @return integer
     */
    public function getTransformerVersion()
    {
        $value = $this->get(self::TRANSFORMER_VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'transformer_version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTransformerVersion()
    {
        return $this->get(self::TRANSFORMER_VERSION) !== null;
    }

    /**
     * Appends value to 'type_identifier' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTypeIdentifier($value)
    {
        return $this->append(self::TYPE_IDENTIFIER, $value);
    }

    /**
     * Clears 'type_identifier' list
     *
     * @return null
     */
    public function clearTypeIdentifier()
    {
        return $this->clear(self::TYPE_IDENTIFIER);
    }

    /**
     * Returns 'type_identifier' list
     *
     * @return string[]
     */
    public function getTypeIdentifier()
    {
        return $this->get(self::TYPE_IDENTIFIER);
    }

    /**
     * Returns true if 'type_identifier' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTypeIdentifier()
    {
        return count($this->get(self::TYPE_IDENTIFIER)) !== 0;
    }

    /**
     * Returns 'type_identifier' iterator
     *
     * @return \ArrayIterator
     */
    public function getTypeIdentifierIterator()
    {
        return new \ArrayIterator($this->get(self::TYPE_IDENTIFIER));
    }

    /**
     * Returns element from 'type_identifier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTypeIdentifierAt($offset)
    {
        return $this->get(self::TYPE_IDENTIFIER, $offset);
    }

    /**
     * Returns count of 'type_identifier' list
     *
     * @return int
     */
    public function getTypeIdentifierCount()
    {
        return $this->count(self::TYPE_IDENTIFIER);
    }

    /**
     * Appends value to 'value_set_provisions' list
     *
     * @param \Amp\Validator\ValueSetProvision $value Value to append
     *
     * @return null
     */
    public function appendValueSetProvisions(\Amp\Validator\ValueSetProvision $value)
    {
        return $this->append(self::VALUE_SET_PROVISIONS, $value);
    }

    /**
     * Clears 'value_set_provisions' list
     *
     * @return null
     */
    public function clearValueSetProvisions()
    {
        return $this->clear(self::VALUE_SET_PROVISIONS);
    }

    /**
     * Returns 'value_set_provisions' list
     *
     * @return \Amp\Validator\ValueSetProvision[]
     */
    public function getValueSetProvisions()
    {
        return $this->get(self::VALUE_SET_PROVISIONS);
    }

    /**
     * Returns true if 'value_set_provisions' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueSetProvisions()
    {
        return count($this->get(self::VALUE_SET_PROVISIONS)) !== 0;
    }

    /**
     * Returns 'value_set_provisions' iterator
     *
     * @return \ArrayIterator
     */
    public function getValueSetProvisionsIterator()
    {
        return new \ArrayIterator($this->get(self::VALUE_SET_PROVISIONS));
    }

    /**
     * Returns element from 'value_set_provisions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\ValueSetProvision
     */
    public function getValueSetProvisionsAt($offset)
    {
        return $this->get(self::VALUE_SET_PROVISIONS, $offset);
    }

    /**
     * Returns count of 'value_set_provisions' list
     *
     * @return int
     */
    public function getValueSetProvisionsCount()
    {
        return $this->count(self::VALUE_SET_PROVISIONS);
    }

    /**
     * Appends value to 'value_set_requirements' list
     *
     * @param \Amp\Validator\ValueSetRequirement $value Value to append
     *
     * @return null
     */
    public function appendValueSetRequirements(\Amp\Validator\ValueSetRequirement $value)
    {
        return $this->append(self::VALUE_SET_REQUIREMENTS, $value);
    }

    /**
     * Clears 'value_set_requirements' list
     *
     * @return null
     */
    public function clearValueSetRequirements()
    {
        return $this->clear(self::VALUE_SET_REQUIREMENTS);
    }

    /**
     * Returns 'value_set_requirements' list
     *
     * @return \Amp\Validator\ValueSetRequirement[]
     */
    public function getValueSetRequirements()
    {
        return $this->get(self::VALUE_SET_REQUIREMENTS);
    }

    /**
     * Returns true if 'value_set_requirements' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValueSetRequirements()
    {
        return count($this->get(self::VALUE_SET_REQUIREMENTS)) !== 0;
    }

    /**
     * Returns 'value_set_requirements' iterator
     *
     * @return \ArrayIterator
     */
    public function getValueSetRequirementsIterator()
    {
        return new \ArrayIterator($this->get(self::VALUE_SET_REQUIREMENTS));
    }

    /**
     * Returns element from 'value_set_requirements' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\ValueSetRequirement
     */
    public function getValueSetRequirementsAt($offset)
    {
        return $this->get(self::VALUE_SET_REQUIREMENTS, $offset);
    }

    /**
     * Returns count of 'value_set_requirements' list
     *
     * @return int
     */
    public function getValueSetRequirementsCount()
    {
        return $this->count(self::VALUE_SET_REQUIREMENTS);
    }
}
}