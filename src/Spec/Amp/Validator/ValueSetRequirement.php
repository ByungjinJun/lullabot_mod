<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValueSetRequirement message
 */
class ValueSetRequirement extends \ProtobufMessage
{
    /* Field index constants */
    const PROVISION = 1;
    const ERROR_IF_UNSATISFIED = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROVISION => array(
            'name' => 'provision',
            'required' => false,
            'type' => '\Amp\Validator\ValueSetProvision'
        ),
        self::ERROR_IF_UNSATISFIED => array(
            'name' => 'error_if_unsatisfied',
            'required' => false,
            'type' => '\Amp\Validator\ValidationError'
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
        $this->values[self::PROVISION] = null;
        $this->values[self::ERROR_IF_UNSATISFIED] = null;
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
     * Sets value of 'provision' property
     *
     * @param \Amp\Validator\ValueSetProvision $value Property value
     *
     * @return null
     */
    public function setProvision(\Amp\Validator\ValueSetProvision $value=null)
    {
        return $this->set(self::PROVISION, $value);
    }

    /**
     * Returns value of 'provision' property
     *
     * @return \Amp\Validator\ValueSetProvision
     */
    public function getProvision()
    {
        return $this->get(self::PROVISION);
    }

    /**
     * Returns true if 'provision' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProvision()
    {
        return $this->get(self::PROVISION) !== null;
    }

    /**
     * Sets value of 'error_if_unsatisfied' property
     *
     * @param \Amp\Validator\ValidationError $value Property value
     *
     * @return null
     */
    public function setErrorIfUnsatisfied(\Amp\Validator\ValidationError $value=null)
    {
        return $this->set(self::ERROR_IF_UNSATISFIED, $value);
    }

    /**
     * Returns value of 'error_if_unsatisfied' property
     *
     * @return \Amp\Validator\ValidationError
     */
    public function getErrorIfUnsatisfied()
    {
        return $this->get(self::ERROR_IF_UNSATISFIED);
    }

    /**
     * Returns true if 'error_if_unsatisfied' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorIfUnsatisfied()
    {
        return $this->get(self::ERROR_IF_UNSATISFIED) !== null;
    }
}
}