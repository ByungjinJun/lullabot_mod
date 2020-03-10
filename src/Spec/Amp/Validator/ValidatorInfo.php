<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValidatorInfo message
 */
class ValidatorInfo extends \ProtobufMessage
{
    /* Field index constants */
    const RULES_PATH = 1;
    const VALIDATOR_REVISION = 2;
    const SPEC_FILE_REVISION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RULES_PATH => array(
            'name' => 'rules_path',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::RULES_PATH] = null;
        $this->values[self::VALIDATOR_REVISION] = self::$fields[self::VALIDATOR_REVISION]['default'];
        $this->values[self::SPEC_FILE_REVISION] = self::$fields[self::SPEC_FILE_REVISION]['default'];
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
     * Sets value of 'rules_path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRulesPath($value)
    {
        return $this->set(self::RULES_PATH, $value);
    }

    /**
     * Returns value of 'rules_path' property
     *
     * @return string
     */
    public function getRulesPath()
    {
        $value = $this->get(self::RULES_PATH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'rules_path' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRulesPath()
    {
        return $this->get(self::RULES_PATH) !== null;
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
}
}