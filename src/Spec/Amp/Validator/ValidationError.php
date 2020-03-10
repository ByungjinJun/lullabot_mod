<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValidationError message
 */
class ValidationError extends \ProtobufMessage
{
    /* Field index constants */
    const SEVERITY = 6;
    const CODE = 1;
    const LINE = 2;
    const COL = 3;
    const SPEC_URL = 5;
    const PARAMS = 7;
    const CATEGORY = 8;
    const DATA_AMP_REPORT_TEST_VALUE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SEVERITY => array(
            'default' => \Amp\Validator\ValidationError_Severity::ERROR,
            'name' => 'severity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LINE => array(
            'default' => 1,
            'name' => 'line',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COL => array(
            'name' => 'col',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPEC_URL => array(
            'name' => 'spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARAMS => array(
            'name' => 'params',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CATEGORY => array(
            'name' => 'category',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA_AMP_REPORT_TEST_VALUE => array(
            'name' => 'data_amp_report_test_value',
            'required' => false,
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
        $this->values[self::SEVERITY] = self::$fields[self::SEVERITY]['default'];
        $this->values[self::CODE] = null;
        $this->values[self::LINE] = self::$fields[self::LINE]['default'];
        $this->values[self::COL] = null;
        $this->values[self::SPEC_URL] = null;
        $this->values[self::PARAMS] = array();
        $this->values[self::CATEGORY] = null;
        $this->values[self::DATA_AMP_REPORT_TEST_VALUE] = null;
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
     * Sets value of 'severity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSeverity($value)
    {
        return $this->set(self::SEVERITY, $value);
    }

    /**
     * Returns value of 'severity' property
     *
     * @return integer
     */
    public function getSeverity()
    {
        $value = $this->get(self::SEVERITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'severity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeverity()
    {
        return $this->get(self::SEVERITY) !== null;
    }

    /**
     * Sets value of 'code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return integer
     */
    public function getCode()
    {
        $value = $this->get(self::CODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCode()
    {
        return $this->get(self::CODE) !== null;
    }

    /**
     * Sets value of 'line' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLine($value)
    {
        return $this->set(self::LINE, $value);
    }

    /**
     * Returns value of 'line' property
     *
     * @return integer
     */
    public function getLine()
    {
        $value = $this->get(self::LINE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'line' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLine()
    {
        return $this->get(self::LINE) !== null;
    }

    /**
     * Sets value of 'col' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCol($value)
    {
        return $this->set(self::COL, $value);
    }

    /**
     * Returns value of 'col' property
     *
     * @return integer
     */
    public function getCol()
    {
        $value = $this->get(self::COL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'col' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCol()
    {
        return $this->get(self::COL) !== null;
    }

    /**
     * Sets value of 'spec_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecUrl($value)
    {
        return $this->set(self::SPEC_URL, $value);
    }

    /**
     * Returns value of 'spec_url' property
     *
     * @return string
     */
    public function getSpecUrl()
    {
        $value = $this->get(self::SPEC_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'spec_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpecUrl()
    {
        return $this->get(self::SPEC_URL) !== null;
    }

    /**
     * Appends value to 'params' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendParams($value)
    {
        return $this->append(self::PARAMS, $value);
    }

    /**
     * Clears 'params' list
     *
     * @return null
     */
    public function clearParams()
    {
        return $this->clear(self::PARAMS);
    }

    /**
     * Returns 'params' list
     *
     * @return string[]
     */
    public function getParams()
    {
        return $this->get(self::PARAMS);
    }

    /**
     * Returns true if 'params' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasParams()
    {
        return count($this->get(self::PARAMS)) !== 0;
    }

    /**
     * Returns 'params' iterator
     *
     * @return \ArrayIterator
     */
    public function getParamsIterator()
    {
        return new \ArrayIterator($this->get(self::PARAMS));
    }

    /**
     * Returns element from 'params' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getParamsAt($offset)
    {
        return $this->get(self::PARAMS, $offset);
    }

    /**
     * Returns count of 'params' list
     *
     * @return int
     */
    public function getParamsCount()
    {
        return $this->count(self::PARAMS);
    }

    /**
     * Sets value of 'category' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCategory($value)
    {
        return $this->set(self::CATEGORY, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return integer
     */
    public function getCategory()
    {
        $value = $this->get(self::CATEGORY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'category' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCategory()
    {
        return $this->get(self::CATEGORY) !== null;
    }

    /**
     * Sets value of 'data_amp_report_test_value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDataAmpReportTestValue($value)
    {
        return $this->set(self::DATA_AMP_REPORT_TEST_VALUE, $value);
    }

    /**
     * Returns value of 'data_amp_report_test_value' property
     *
     * @return string
     */
    public function getDataAmpReportTestValue()
    {
        $value = $this->get(self::DATA_AMP_REPORT_TEST_VALUE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'data_amp_report_test_value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataAmpReportTestValue()
    {
        return $this->get(self::DATA_AMP_REPORT_TEST_VALUE) !== null;
    }
}
}