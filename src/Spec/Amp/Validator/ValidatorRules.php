<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * ValidatorRules message
 */
class ValidatorRules extends \ProtobufMessage
{
    /* Field index constants */
    const TAGS = 1;
    const ATTR_LISTS = 7;
    const MIN_VALIDATOR_REVISION_REQUIRED = 4;
    const SPEC_FILE_REVISION = 6;
    const TEMPLATE_SPEC_URL = 8;
    const STYLES_SPEC_URL = 15;
    const SCRIPT_SPEC_URL = 17;
    const ERROR_FORMATS = 9;
    const ERROR_SPECIFICITY = 13;
    const DESCENDANT_TAG_LIST = 16;
    const CSS_LENGTH_SPEC = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TAGS => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => '\Amp\Validator\TagSpec'
        ),
        self::ATTR_LISTS => array(
            'name' => 'attr_lists',
            'repeated' => true,
            'type' => '\Amp\Validator\AttrList'
        ),
        self::MIN_VALIDATOR_REVISION_REQUIRED => array(
            'name' => 'min_validator_revision_required',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPEC_FILE_REVISION => array(
            'default' => -1,
            'name' => 'spec_file_revision',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEMPLATE_SPEC_URL => array(
            'name' => 'template_spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STYLES_SPEC_URL => array(
            'name' => 'styles_spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCRIPT_SPEC_URL => array(
            'name' => 'script_spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ERROR_FORMATS => array(
            'name' => 'error_formats',
            'repeated' => true,
            'type' => '\Amp\Validator\ErrorFormat'
        ),
        self::ERROR_SPECIFICITY => array(
            'name' => 'error_specificity',
            'repeated' => true,
            'type' => '\Amp\Validator\ErrorSpecificity'
        ),
        self::DESCENDANT_TAG_LIST => array(
            'name' => 'descendant_tag_list',
            'repeated' => true,
            'type' => '\Amp\Validator\DescendantTagList'
        ),
        self::CSS_LENGTH_SPEC => array(
            'name' => 'css_length_spec',
            'repeated' => true,
            'type' => '\Amp\Validator\CssLengthSpec'
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
        $this->values[self::TAGS] = array();
        $this->values[self::ATTR_LISTS] = array();
        $this->values[self::MIN_VALIDATOR_REVISION_REQUIRED] = null;
        $this->values[self::SPEC_FILE_REVISION] = self::$fields[self::SPEC_FILE_REVISION]['default'];
        $this->values[self::TEMPLATE_SPEC_URL] = null;
        $this->values[self::STYLES_SPEC_URL] = null;
        $this->values[self::SCRIPT_SPEC_URL] = null;
        $this->values[self::ERROR_FORMATS] = array();
        $this->values[self::ERROR_SPECIFICITY] = array();
        $this->values[self::DESCENDANT_TAG_LIST] = array();
        $this->values[self::CSS_LENGTH_SPEC] = array();
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
     * Appends value to 'tags' list
     *
     * @param \Amp\Validator\TagSpec $value Value to append
     *
     * @return null
     */
    public function appendTags(\Amp\Validator\TagSpec $value)
    {
        return $this->append(self::TAGS, $value);
    }

    /**
     * Clears 'tags' list
     *
     * @return null
     */
    public function clearTags()
    {
        return $this->clear(self::TAGS);
    }

    /**
     * Returns 'tags' list
     *
     * @return \Amp\Validator\TagSpec[]
     */
    public function getTags()
    {
        return $this->get(self::TAGS);
    }

    /**
     * Returns true if 'tags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTags()
    {
        return count($this->get(self::TAGS)) !== 0;
    }

    /**
     * Returns 'tags' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagsIterator()
    {
        return new \ArrayIterator($this->get(self::TAGS));
    }

    /**
     * Returns element from 'tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\TagSpec
     */
    public function getTagsAt($offset)
    {
        return $this->get(self::TAGS, $offset);
    }

    /**
     * Returns count of 'tags' list
     *
     * @return int
     */
    public function getTagsCount()
    {
        return $this->count(self::TAGS);
    }

    /**
     * Appends value to 'attr_lists' list
     *
     * @param \Amp\Validator\AttrList $value Value to append
     *
     * @return null
     */
    public function appendAttrLists(\Amp\Validator\AttrList $value)
    {
        return $this->append(self::ATTR_LISTS, $value);
    }

    /**
     * Clears 'attr_lists' list
     *
     * @return null
     */
    public function clearAttrLists()
    {
        return $this->clear(self::ATTR_LISTS);
    }

    /**
     * Returns 'attr_lists' list
     *
     * @return \Amp\Validator\AttrList[]
     */
    public function getAttrLists()
    {
        return $this->get(self::ATTR_LISTS);
    }

    /**
     * Returns true if 'attr_lists' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttrLists()
    {
        return count($this->get(self::ATTR_LISTS)) !== 0;
    }

    /**
     * Returns 'attr_lists' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttrListsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTR_LISTS));
    }

    /**
     * Returns element from 'attr_lists' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\AttrList
     */
    public function getAttrListsAt($offset)
    {
        return $this->get(self::ATTR_LISTS, $offset);
    }

    /**
     * Returns count of 'attr_lists' list
     *
     * @return int
     */
    public function getAttrListsCount()
    {
        return $this->count(self::ATTR_LISTS);
    }

    /**
     * Sets value of 'min_validator_revision_required' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinValidatorRevisionRequired($value)
    {
        return $this->set(self::MIN_VALIDATOR_REVISION_REQUIRED, $value);
    }

    /**
     * Returns value of 'min_validator_revision_required' property
     *
     * @return integer
     */
    public function getMinValidatorRevisionRequired()
    {
        $value = $this->get(self::MIN_VALIDATOR_REVISION_REQUIRED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'min_validator_revision_required' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinValidatorRevisionRequired()
    {
        return $this->get(self::MIN_VALIDATOR_REVISION_REQUIRED) !== null;
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
     * Sets value of 'template_spec_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTemplateSpecUrl($value)
    {
        return $this->set(self::TEMPLATE_SPEC_URL, $value);
    }

    /**
     * Returns value of 'template_spec_url' property
     *
     * @return string
     */
    public function getTemplateSpecUrl()
    {
        $value = $this->get(self::TEMPLATE_SPEC_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'template_spec_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTemplateSpecUrl()
    {
        return $this->get(self::TEMPLATE_SPEC_URL) !== null;
    }

    /**
     * Sets value of 'styles_spec_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStylesSpecUrl($value)
    {
        return $this->set(self::STYLES_SPEC_URL, $value);
    }

    /**
     * Returns value of 'styles_spec_url' property
     *
     * @return string
     */
    public function getStylesSpecUrl()
    {
        $value = $this->get(self::STYLES_SPEC_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'styles_spec_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStylesSpecUrl()
    {
        return $this->get(self::STYLES_SPEC_URL) !== null;
    }

    /**
     * Sets value of 'script_spec_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScriptSpecUrl($value)
    {
        return $this->set(self::SCRIPT_SPEC_URL, $value);
    }

    /**
     * Returns value of 'script_spec_url' property
     *
     * @return string
     */
    public function getScriptSpecUrl()
    {
        $value = $this->get(self::SCRIPT_SPEC_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'script_spec_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScriptSpecUrl()
    {
        return $this->get(self::SCRIPT_SPEC_URL) !== null;
    }

    /**
     * Appends value to 'error_formats' list
     *
     * @param \Amp\Validator\ErrorFormat $value Value to append
     *
     * @return null
     */
    public function appendErrorFormats(\Amp\Validator\ErrorFormat $value)
    {
        return $this->append(self::ERROR_FORMATS, $value);
    }

    /**
     * Clears 'error_formats' list
     *
     * @return null
     */
    public function clearErrorFormats()
    {
        return $this->clear(self::ERROR_FORMATS);
    }

    /**
     * Returns 'error_formats' list
     *
     * @return \Amp\Validator\ErrorFormat[]
     */
    public function getErrorFormats()
    {
        return $this->get(self::ERROR_FORMATS);
    }

    /**
     * Returns true if 'error_formats' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorFormats()
    {
        return count($this->get(self::ERROR_FORMATS)) !== 0;
    }

    /**
     * Returns 'error_formats' iterator
     *
     * @return \ArrayIterator
     */
    public function getErrorFormatsIterator()
    {
        return new \ArrayIterator($this->get(self::ERROR_FORMATS));
    }

    /**
     * Returns element from 'error_formats' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\ErrorFormat
     */
    public function getErrorFormatsAt($offset)
    {
        return $this->get(self::ERROR_FORMATS, $offset);
    }

    /**
     * Returns count of 'error_formats' list
     *
     * @return int
     */
    public function getErrorFormatsCount()
    {
        return $this->count(self::ERROR_FORMATS);
    }

    /**
     * Appends value to 'error_specificity' list
     *
     * @param \Amp\Validator\ErrorSpecificity $value Value to append
     *
     * @return null
     */
    public function appendErrorSpecificity(\Amp\Validator\ErrorSpecificity $value)
    {
        return $this->append(self::ERROR_SPECIFICITY, $value);
    }

    /**
     * Clears 'error_specificity' list
     *
     * @return null
     */
    public function clearErrorSpecificity()
    {
        return $this->clear(self::ERROR_SPECIFICITY);
    }

    /**
     * Returns 'error_specificity' list
     *
     * @return \Amp\Validator\ErrorSpecificity[]
     */
    public function getErrorSpecificity()
    {
        return $this->get(self::ERROR_SPECIFICITY);
    }

    /**
     * Returns true if 'error_specificity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorSpecificity()
    {
        return count($this->get(self::ERROR_SPECIFICITY)) !== 0;
    }

    /**
     * Returns 'error_specificity' iterator
     *
     * @return \ArrayIterator
     */
    public function getErrorSpecificityIterator()
    {
        return new \ArrayIterator($this->get(self::ERROR_SPECIFICITY));
    }

    /**
     * Returns element from 'error_specificity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\ErrorSpecificity
     */
    public function getErrorSpecificityAt($offset)
    {
        return $this->get(self::ERROR_SPECIFICITY, $offset);
    }

    /**
     * Returns count of 'error_specificity' list
     *
     * @return int
     */
    public function getErrorSpecificityCount()
    {
        return $this->count(self::ERROR_SPECIFICITY);
    }

    /**
     * Appends value to 'descendant_tag_list' list
     *
     * @param \Amp\Validator\DescendantTagList $value Value to append
     *
     * @return null
     */
    public function appendDescendantTagList(\Amp\Validator\DescendantTagList $value)
    {
        return $this->append(self::DESCENDANT_TAG_LIST, $value);
    }

    /**
     * Clears 'descendant_tag_list' list
     *
     * @return null
     */
    public function clearDescendantTagList()
    {
        return $this->clear(self::DESCENDANT_TAG_LIST);
    }

    /**
     * Returns 'descendant_tag_list' list
     *
     * @return \Amp\Validator\DescendantTagList[]
     */
    public function getDescendantTagList()
    {
        return $this->get(self::DESCENDANT_TAG_LIST);
    }

    /**
     * Returns true if 'descendant_tag_list' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDescendantTagList()
    {
        return count($this->get(self::DESCENDANT_TAG_LIST)) !== 0;
    }

    /**
     * Returns 'descendant_tag_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getDescendantTagListIterator()
    {
        return new \ArrayIterator($this->get(self::DESCENDANT_TAG_LIST));
    }

    /**
     * Returns element from 'descendant_tag_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\DescendantTagList
     */
    public function getDescendantTagListAt($offset)
    {
        return $this->get(self::DESCENDANT_TAG_LIST, $offset);
    }

    /**
     * Returns count of 'descendant_tag_list' list
     *
     * @return int
     */
    public function getDescendantTagListCount()
    {
        return $this->count(self::DESCENDANT_TAG_LIST);
    }

    /**
     * Appends value to 'css_length_spec' list
     *
     * @param \Amp\Validator\CssLengthSpec $value Value to append
     *
     * @return null
     */
    public function appendCssLengthSpec(\Amp\Validator\CssLengthSpec $value)
    {
        return $this->append(self::CSS_LENGTH_SPEC, $value);
    }

    /**
     * Clears 'css_length_spec' list
     *
     * @return null
     */
    public function clearCssLengthSpec()
    {
        return $this->clear(self::CSS_LENGTH_SPEC);
    }

    /**
     * Returns 'css_length_spec' list
     *
     * @return \Amp\Validator\CssLengthSpec[]
     */
    public function getCssLengthSpec()
    {
        return $this->get(self::CSS_LENGTH_SPEC);
    }

    /**
     * Returns true if 'css_length_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCssLengthSpec()
    {
        return count($this->get(self::CSS_LENGTH_SPEC)) !== 0;
    }

    /**
     * Returns 'css_length_spec' iterator
     *
     * @return \ArrayIterator
     */
    public function getCssLengthSpecIterator()
    {
        return new \ArrayIterator($this->get(self::CSS_LENGTH_SPEC));
    }

    /**
     * Returns element from 'css_length_spec' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\CssLengthSpec
     */
    public function getCssLengthSpecAt($offset)
    {
        return $this->get(self::CSS_LENGTH_SPEC, $offset);
    }

    /**
     * Returns count of 'css_length_spec' list
     *
     * @return int
     */
    public function getCssLengthSpecCount()
    {
        return $this->count(self::CSS_LENGTH_SPEC);
    }
}
}