<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * TagSpec message
 */
class TagSpec extends \ProtobufMessage
{
    /* Field index constants */
    const HTML_FORMAT = 21;
    const ENABLED_BY = 35;
    const DISABLED_BY = 36;
    const TAG_NAME = 1;
    const SPEC_NAME = 2;
    const NAMED_ID = 33;
    const EXTENSION_SPEC = 27;
    const REQUIRES_EXTENSION = 28;
    const MANDATORY = 3;
    const MANDATORY_ALTERNATIVES = 4;
    const UNIQUE = 5;
    const UNIQUE_WARNING = 25;
    const MANDATORY_PARENT = 6;
    const MANDATORY_ANCESTOR = 15;
    const MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE = 16;
    const DISALLOWED_ANCESTOR = 13;
    const DESCENDANT_TAG_LIST = 29;
    const ALSO_REQUIRES_TAG_WARNING = 22;
    const SATISFIES = 23;
    const REQUIRES = 24;
    const EXCLUDES = 32;
    const DEPRECATION = 17;
    const DEPRECATION_URL = 18;
    const EXPLICIT_ATTRS_ONLY = 34;
    const ATTRS = 7;
    const ATTR_LISTS = 8;
    const CDATA = 12;
    const CHILD_TAGS = 19;
    const SIBLINGS_DISALLOWED = 30;
    const MANDATORY_LAST_CHILD = 31;
    const REFERENCE_POINTS = 20;
    const SPEC_URL = 10;
    const AMP_LAYOUT = 11;
    const MARK_DESCENDANTS = 38;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HTML_FORMAT => array(
            'name' => 'html_format',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENABLED_BY => array(
            'name' => 'enabled_by',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISABLED_BY => array(
            'name' => 'disabled_by',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TAG_NAME => array(
            'name' => 'tag_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SPEC_NAME => array(
            'name' => 'spec_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAMED_ID => array(
            'default' => \Amp\Validator\TagSpec_NamedId::NOT_SET,
            'name' => 'named_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXTENSION_SPEC => array(
            'name' => 'extension_spec',
            'required' => false,
            'type' => '\Amp\Validator\ExtensionSpec'
        ),
        self::REQUIRES_EXTENSION => array(
            'name' => 'requires_extension',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY => array(
            'name' => 'mandatory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANDATORY_ALTERNATIVES => array(
            'name' => 'mandatory_alternatives',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNIQUE => array(
            'name' => 'unique',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::UNIQUE_WARNING => array(
            'name' => 'unique_warning',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANDATORY_PARENT => array(
            'name' => 'mandatory_parent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY_ANCESTOR => array(
            'name' => 'mandatory_ancestor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE => array(
            'name' => 'mandatory_ancestor_suggested_alternative',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISALLOWED_ANCESTOR => array(
            'name' => 'disallowed_ancestor',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DESCENDANT_TAG_LIST => array(
            'name' => 'descendant_tag_list',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALSO_REQUIRES_TAG_WARNING => array(
            'name' => 'also_requires_tag_warning',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SATISFIES => array(
            'name' => 'satisfies',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REQUIRES => array(
            'name' => 'requires',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXCLUDES => array(
            'name' => 'excludes',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPRECATION => array(
            'name' => 'deprecation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPRECATION_URL => array(
            'name' => 'deprecation_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXPLICIT_ATTRS_ONLY => array(
            'default' => false,
            'name' => 'explicit_attrs_only',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ATTRS => array(
            'name' => 'attrs',
            'repeated' => true,
            'type' => '\Amp\Validator\AttrSpec'
        ),
        self::ATTR_LISTS => array(
            'name' => 'attr_lists',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CDATA => array(
            'name' => 'cdata',
            'required' => false,
            'type' => '\Amp\Validator\CdataSpec'
        ),
        self::CHILD_TAGS => array(
            'name' => 'child_tags',
            'required' => false,
            'type' => '\Amp\Validator\ChildTagSpec'
        ),
        self::SIBLINGS_DISALLOWED => array(
            'default' => false,
            'name' => 'siblings_disallowed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MANDATORY_LAST_CHILD => array(
            'default' => false,
            'name' => 'mandatory_last_child',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::REFERENCE_POINTS => array(
            'name' => 'reference_points',
            'repeated' => true,
            'type' => '\Amp\Validator\ReferencePoint'
        ),
        self::SPEC_URL => array(
            'name' => 'spec_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AMP_LAYOUT => array(
            'name' => 'amp_layout',
            'required' => false,
            'type' => '\Amp\Validator\AmpLayout'
        ),
        self::MARK_DESCENDANTS => array(
            'name' => 'mark_descendants',
            'required' => false,
            'type' => '\Amp\Validator\AncestorMarker'
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
        $this->values[self::HTML_FORMAT] = array();
        $this->values[self::ENABLED_BY] = array();
        $this->values[self::DISABLED_BY] = array();
        $this->values[self::TAG_NAME] = null;
        $this->values[self::SPEC_NAME] = null;
        $this->values[self::NAMED_ID] = self::$fields[self::NAMED_ID]['default'];
        $this->values[self::EXTENSION_SPEC] = null;
        $this->values[self::REQUIRES_EXTENSION] = array();
        $this->values[self::MANDATORY] = null;
        $this->values[self::MANDATORY_ALTERNATIVES] = null;
        $this->values[self::UNIQUE] = null;
        $this->values[self::UNIQUE_WARNING] = null;
        $this->values[self::MANDATORY_PARENT] = null;
        $this->values[self::MANDATORY_ANCESTOR] = null;
        $this->values[self::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE] = null;
        $this->values[self::DISALLOWED_ANCESTOR] = array();
        $this->values[self::DESCENDANT_TAG_LIST] = null;
        $this->values[self::ALSO_REQUIRES_TAG_WARNING] = array();
        $this->values[self::SATISFIES] = array();
        $this->values[self::REQUIRES] = array();
        $this->values[self::EXCLUDES] = array();
        $this->values[self::DEPRECATION] = null;
        $this->values[self::DEPRECATION_URL] = null;
        $this->values[self::EXPLICIT_ATTRS_ONLY] = self::$fields[self::EXPLICIT_ATTRS_ONLY]['default'];
        $this->values[self::ATTRS] = array();
        $this->values[self::ATTR_LISTS] = array();
        $this->values[self::CDATA] = null;
        $this->values[self::CHILD_TAGS] = null;
        $this->values[self::SIBLINGS_DISALLOWED] = self::$fields[self::SIBLINGS_DISALLOWED]['default'];
        $this->values[self::MANDATORY_LAST_CHILD] = self::$fields[self::MANDATORY_LAST_CHILD]['default'];
        $this->values[self::REFERENCE_POINTS] = array();
        $this->values[self::SPEC_URL] = null;
        $this->values[self::AMP_LAYOUT] = null;
        $this->values[self::MARK_DESCENDANTS] = null;
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
     * Appends value to 'html_format' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendHtmlFormat($value)
    {
        return $this->append(self::HTML_FORMAT, $value);
    }

    /**
     * Clears 'html_format' list
     *
     * @return null
     */
    public function clearHtmlFormat()
    {
        return $this->clear(self::HTML_FORMAT);
    }

    /**
     * Returns 'html_format' list
     *
     * @return integer[]
     */
    public function getHtmlFormat()
    {
        return $this->get(self::HTML_FORMAT);
    }

    /**
     * Returns true if 'html_format' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHtmlFormat()
    {
        return count($this->get(self::HTML_FORMAT)) !== 0;
    }

    /**
     * Returns 'html_format' iterator
     *
     * @return \ArrayIterator
     */
    public function getHtmlFormatIterator()
    {
        return new \ArrayIterator($this->get(self::HTML_FORMAT));
    }

    /**
     * Returns element from 'html_format' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getHtmlFormatAt($offset)
    {
        return $this->get(self::HTML_FORMAT, $offset);
    }

    /**
     * Returns count of 'html_format' list
     *
     * @return int
     */
    public function getHtmlFormatCount()
    {
        return $this->count(self::HTML_FORMAT);
    }

    /**
     * Appends value to 'enabled_by' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEnabledBy($value)
    {
        return $this->append(self::ENABLED_BY, $value);
    }

    /**
     * Clears 'enabled_by' list
     *
     * @return null
     */
    public function clearEnabledBy()
    {
        return $this->clear(self::ENABLED_BY);
    }

    /**
     * Returns 'enabled_by' list
     *
     * @return string[]
     */
    public function getEnabledBy()
    {
        return $this->get(self::ENABLED_BY);
    }

    /**
     * Returns true if 'enabled_by' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnabledBy()
    {
        return count($this->get(self::ENABLED_BY)) !== 0;
    }

    /**
     * Returns 'enabled_by' iterator
     *
     * @return \ArrayIterator
     */
    public function getEnabledByIterator()
    {
        return new \ArrayIterator($this->get(self::ENABLED_BY));
    }

    /**
     * Returns element from 'enabled_by' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEnabledByAt($offset)
    {
        return $this->get(self::ENABLED_BY, $offset);
    }

    /**
     * Returns count of 'enabled_by' list
     *
     * @return int
     */
    public function getEnabledByCount()
    {
        return $this->count(self::ENABLED_BY);
    }

    /**
     * Appends value to 'disabled_by' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDisabledBy($value)
    {
        return $this->append(self::DISABLED_BY, $value);
    }

    /**
     * Clears 'disabled_by' list
     *
     * @return null
     */
    public function clearDisabledBy()
    {
        return $this->clear(self::DISABLED_BY);
    }

    /**
     * Returns 'disabled_by' list
     *
     * @return string[]
     */
    public function getDisabledBy()
    {
        return $this->get(self::DISABLED_BY);
    }

    /**
     * Returns true if 'disabled_by' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisabledBy()
    {
        return count($this->get(self::DISABLED_BY)) !== 0;
    }

    /**
     * Returns 'disabled_by' iterator
     *
     * @return \ArrayIterator
     */
    public function getDisabledByIterator()
    {
        return new \ArrayIterator($this->get(self::DISABLED_BY));
    }

    /**
     * Returns element from 'disabled_by' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDisabledByAt($offset)
    {
        return $this->get(self::DISABLED_BY, $offset);
    }

    /**
     * Returns count of 'disabled_by' list
     *
     * @return int
     */
    public function getDisabledByCount()
    {
        return $this->count(self::DISABLED_BY);
    }

    /**
     * Sets value of 'tag_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagName($value)
    {
        return $this->set(self::TAG_NAME, $value);
    }

    /**
     * Returns value of 'tag_name' property
     *
     * @return string
     */
    public function getTagName()
    {
        $value = $this->get(self::TAG_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tag_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagName()
    {
        return $this->get(self::TAG_NAME) !== null;
    }

    /**
     * Sets value of 'spec_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecName($value)
    {
        return $this->set(self::SPEC_NAME, $value);
    }

    /**
     * Returns value of 'spec_name' property
     *
     * @return string
     */
    public function getSpecName()
    {
        $value = $this->get(self::SPEC_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'spec_name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpecName()
    {
        return $this->get(self::SPEC_NAME) !== null;
    }

    /**
     * Sets value of 'named_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNamedId($value)
    {
        return $this->set(self::NAMED_ID, $value);
    }

    /**
     * Returns value of 'named_id' property
     *
     * @return integer
     */
    public function getNamedId()
    {
        $value = $this->get(self::NAMED_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'named_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNamedId()
    {
        return $this->get(self::NAMED_ID) !== null;
    }

    /**
     * Sets value of 'extension_spec' property
     *
     * @param \Amp\Validator\ExtensionSpec $value Property value
     *
     * @return null
     */
    public function setExtensionSpec(\Amp\Validator\ExtensionSpec $value=null)
    {
        return $this->set(self::EXTENSION_SPEC, $value);
    }

    /**
     * Returns value of 'extension_spec' property
     *
     * @return \Amp\Validator\ExtensionSpec
     */
    public function getExtensionSpec()
    {
        return $this->get(self::EXTENSION_SPEC);
    }

    /**
     * Returns true if 'extension_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtensionSpec()
    {
        return $this->get(self::EXTENSION_SPEC) !== null;
    }

    /**
     * Appends value to 'requires_extension' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendRequiresExtension($value)
    {
        return $this->append(self::REQUIRES_EXTENSION, $value);
    }

    /**
     * Clears 'requires_extension' list
     *
     * @return null
     */
    public function clearRequiresExtension()
    {
        return $this->clear(self::REQUIRES_EXTENSION);
    }

    /**
     * Returns 'requires_extension' list
     *
     * @return string[]
     */
    public function getRequiresExtension()
    {
        return $this->get(self::REQUIRES_EXTENSION);
    }

    /**
     * Returns true if 'requires_extension' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequiresExtension()
    {
        return count($this->get(self::REQUIRES_EXTENSION)) !== 0;
    }

    /**
     * Returns 'requires_extension' iterator
     *
     * @return \ArrayIterator
     */
    public function getRequiresExtensionIterator()
    {
        return new \ArrayIterator($this->get(self::REQUIRES_EXTENSION));
    }

    /**
     * Returns element from 'requires_extension' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getRequiresExtensionAt($offset)
    {
        return $this->get(self::REQUIRES_EXTENSION, $offset);
    }

    /**
     * Returns count of 'requires_extension' list
     *
     * @return int
     */
    public function getRequiresExtensionCount()
    {
        return $this->count(self::REQUIRES_EXTENSION);
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
     * Sets value of 'mandatory_alternatives' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryAlternatives($value)
    {
        return $this->set(self::MANDATORY_ALTERNATIVES, $value);
    }

    /**
     * Returns value of 'mandatory_alternatives' property
     *
     * @return string
     */
    public function getMandatoryAlternatives()
    {
        $value = $this->get(self::MANDATORY_ALTERNATIVES);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_alternatives' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryAlternatives()
    {
        return $this->get(self::MANDATORY_ALTERNATIVES) !== null;
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

    /**
     * Sets value of 'unique_warning' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setUniqueWarning($value)
    {
        return $this->set(self::UNIQUE_WARNING, $value);
    }

    /**
     * Returns value of 'unique_warning' property
     *
     * @return boolean
     */
    public function getUniqueWarning()
    {
        $value = $this->get(self::UNIQUE_WARNING);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'unique_warning' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUniqueWarning()
    {
        return $this->get(self::UNIQUE_WARNING) !== null;
    }

    /**
     * Sets value of 'mandatory_parent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryParent($value)
    {
        return $this->set(self::MANDATORY_PARENT, $value);
    }

    /**
     * Returns value of 'mandatory_parent' property
     *
     * @return string
     */
    public function getMandatoryParent()
    {
        $value = $this->get(self::MANDATORY_PARENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_parent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryParent()
    {
        return $this->get(self::MANDATORY_PARENT) !== null;
    }

    /**
     * Sets value of 'mandatory_ancestor' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryAncestor($value)
    {
        return $this->set(self::MANDATORY_ANCESTOR, $value);
    }

    /**
     * Returns value of 'mandatory_ancestor' property
     *
     * @return string
     */
    public function getMandatoryAncestor()
    {
        $value = $this->get(self::MANDATORY_ANCESTOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_ancestor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryAncestor()
    {
        return $this->get(self::MANDATORY_ANCESTOR) !== null;
    }

    /**
     * Sets value of 'mandatory_ancestor_suggested_alternative' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMandatoryAncestorSuggestedAlternative($value)
    {
        return $this->set(self::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE, $value);
    }

    /**
     * Returns value of 'mandatory_ancestor_suggested_alternative' property
     *
     * @return string
     */
    public function getMandatoryAncestorSuggestedAlternative()
    {
        $value = $this->get(self::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mandatory_ancestor_suggested_alternative' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryAncestorSuggestedAlternative()
    {
        return $this->get(self::MANDATORY_ANCESTOR_SUGGESTED_ALTERNATIVE) !== null;
    }

    /**
     * Appends value to 'disallowed_ancestor' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDisallowedAncestor($value)
    {
        return $this->append(self::DISALLOWED_ANCESTOR, $value);
    }

    /**
     * Clears 'disallowed_ancestor' list
     *
     * @return null
     */
    public function clearDisallowedAncestor()
    {
        return $this->clear(self::DISALLOWED_ANCESTOR);
    }

    /**
     * Returns 'disallowed_ancestor' list
     *
     * @return string[]
     */
    public function getDisallowedAncestor()
    {
        return $this->get(self::DISALLOWED_ANCESTOR);
    }

    /**
     * Returns true if 'disallowed_ancestor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisallowedAncestor()
    {
        return count($this->get(self::DISALLOWED_ANCESTOR)) !== 0;
    }

    /**
     * Returns 'disallowed_ancestor' iterator
     *
     * @return \ArrayIterator
     */
    public function getDisallowedAncestorIterator()
    {
        return new \ArrayIterator($this->get(self::DISALLOWED_ANCESTOR));
    }

    /**
     * Returns element from 'disallowed_ancestor' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDisallowedAncestorAt($offset)
    {
        return $this->get(self::DISALLOWED_ANCESTOR, $offset);
    }

    /**
     * Returns count of 'disallowed_ancestor' list
     *
     * @return int
     */
    public function getDisallowedAncestorCount()
    {
        return $this->count(self::DISALLOWED_ANCESTOR);
    }

    /**
     * Sets value of 'descendant_tag_list' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescendantTagList($value)
    {
        return $this->set(self::DESCENDANT_TAG_LIST, $value);
    }

    /**
     * Returns value of 'descendant_tag_list' property
     *
     * @return string
     */
    public function getDescendantTagList()
    {
        $value = $this->get(self::DESCENDANT_TAG_LIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'descendant_tag_list' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDescendantTagList()
    {
        return $this->get(self::DESCENDANT_TAG_LIST) !== null;
    }

    /**
     * Appends value to 'also_requires_tag_warning' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendAlsoRequiresTagWarning($value)
    {
        return $this->append(self::ALSO_REQUIRES_TAG_WARNING, $value);
    }

    /**
     * Clears 'also_requires_tag_warning' list
     *
     * @return null
     */
    public function clearAlsoRequiresTagWarning()
    {
        return $this->clear(self::ALSO_REQUIRES_TAG_WARNING);
    }

    /**
     * Returns 'also_requires_tag_warning' list
     *
     * @return string[]
     */
    public function getAlsoRequiresTagWarning()
    {
        return $this->get(self::ALSO_REQUIRES_TAG_WARNING);
    }

    /**
     * Returns true if 'also_requires_tag_warning' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlsoRequiresTagWarning()
    {
        return count($this->get(self::ALSO_REQUIRES_TAG_WARNING)) !== 0;
    }

    /**
     * Returns 'also_requires_tag_warning' iterator
     *
     * @return \ArrayIterator
     */
    public function getAlsoRequiresTagWarningIterator()
    {
        return new \ArrayIterator($this->get(self::ALSO_REQUIRES_TAG_WARNING));
    }

    /**
     * Returns element from 'also_requires_tag_warning' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getAlsoRequiresTagWarningAt($offset)
    {
        return $this->get(self::ALSO_REQUIRES_TAG_WARNING, $offset);
    }

    /**
     * Returns count of 'also_requires_tag_warning' list
     *
     * @return int
     */
    public function getAlsoRequiresTagWarningCount()
    {
        return $this->count(self::ALSO_REQUIRES_TAG_WARNING);
    }

    /**
     * Appends value to 'satisfies' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSatisfies($value)
    {
        return $this->append(self::SATISFIES, $value);
    }

    /**
     * Clears 'satisfies' list
     *
     * @return null
     */
    public function clearSatisfies()
    {
        return $this->clear(self::SATISFIES);
    }

    /**
     * Returns 'satisfies' list
     *
     * @return string[]
     */
    public function getSatisfies()
    {
        return $this->get(self::SATISFIES);
    }

    /**
     * Returns true if 'satisfies' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSatisfies()
    {
        return count($this->get(self::SATISFIES)) !== 0;
    }

    /**
     * Returns 'satisfies' iterator
     *
     * @return \ArrayIterator
     */
    public function getSatisfiesIterator()
    {
        return new \ArrayIterator($this->get(self::SATISFIES));
    }

    /**
     * Returns element from 'satisfies' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSatisfiesAt($offset)
    {
        return $this->get(self::SATISFIES, $offset);
    }

    /**
     * Returns count of 'satisfies' list
     *
     * @return int
     */
    public function getSatisfiesCount()
    {
        return $this->count(self::SATISFIES);
    }

    /**
     * Appends value to 'requires' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendRequires($value)
    {
        return $this->append(self::REQUIRES, $value);
    }

    /**
     * Clears 'requires' list
     *
     * @return null
     */
    public function clearRequires()
    {
        return $this->clear(self::REQUIRES);
    }

    /**
     * Returns 'requires' list
     *
     * @return string[]
     */
    public function getRequires()
    {
        return $this->get(self::REQUIRES);
    }

    /**
     * Returns true if 'requires' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequires()
    {
        return count($this->get(self::REQUIRES)) !== 0;
    }

    /**
     * Returns 'requires' iterator
     *
     * @return \ArrayIterator
     */
    public function getRequiresIterator()
    {
        return new \ArrayIterator($this->get(self::REQUIRES));
    }

    /**
     * Returns element from 'requires' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getRequiresAt($offset)
    {
        return $this->get(self::REQUIRES, $offset);
    }

    /**
     * Returns count of 'requires' list
     *
     * @return int
     */
    public function getRequiresCount()
    {
        return $this->count(self::REQUIRES);
    }

    /**
     * Appends value to 'excludes' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendExcludes($value)
    {
        return $this->append(self::EXCLUDES, $value);
    }

    /**
     * Clears 'excludes' list
     *
     * @return null
     */
    public function clearExcludes()
    {
        return $this->clear(self::EXCLUDES);
    }

    /**
     * Returns 'excludes' list
     *
     * @return string[]
     */
    public function getExcludes()
    {
        return $this->get(self::EXCLUDES);
    }

    /**
     * Returns true if 'excludes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExcludes()
    {
        return count($this->get(self::EXCLUDES)) !== 0;
    }

    /**
     * Returns 'excludes' iterator
     *
     * @return \ArrayIterator
     */
    public function getExcludesIterator()
    {
        return new \ArrayIterator($this->get(self::EXCLUDES));
    }

    /**
     * Returns element from 'excludes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getExcludesAt($offset)
    {
        return $this->get(self::EXCLUDES, $offset);
    }

    /**
     * Returns count of 'excludes' list
     *
     * @return int
     */
    public function getExcludesCount()
    {
        return $this->count(self::EXCLUDES);
    }

    /**
     * Sets value of 'deprecation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeprecation($value)
    {
        return $this->set(self::DEPRECATION, $value);
    }

    /**
     * Returns value of 'deprecation' property
     *
     * @return string
     */
    public function getDeprecation()
    {
        $value = $this->get(self::DEPRECATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deprecation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecation()
    {
        return $this->get(self::DEPRECATION) !== null;
    }

    /**
     * Sets value of 'deprecation_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeprecationUrl($value)
    {
        return $this->set(self::DEPRECATION_URL, $value);
    }

    /**
     * Returns value of 'deprecation_url' property
     *
     * @return string
     */
    public function getDeprecationUrl()
    {
        $value = $this->get(self::DEPRECATION_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deprecation_url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecationUrl()
    {
        return $this->get(self::DEPRECATION_URL) !== null;
    }

    /**
     * Sets value of 'explicit_attrs_only' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setExplicitAttrsOnly($value)
    {
        return $this->set(self::EXPLICIT_ATTRS_ONLY, $value);
    }

    /**
     * Returns value of 'explicit_attrs_only' property
     *
     * @return boolean
     */
    public function getExplicitAttrsOnly()
    {
        $value = $this->get(self::EXPLICIT_ATTRS_ONLY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'explicit_attrs_only' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExplicitAttrsOnly()
    {
        return $this->get(self::EXPLICIT_ATTRS_ONLY) !== null;
    }

    /**
     * Appends value to 'attrs' list
     *
     * @param \Amp\Validator\AttrSpec $value Value to append
     *
     * @return null
     */
    public function appendAttrs(\Amp\Validator\AttrSpec $value)
    {
        return $this->append(self::ATTRS, $value);
    }

    /**
     * Clears 'attrs' list
     *
     * @return null
     */
    public function clearAttrs()
    {
        return $this->clear(self::ATTRS);
    }

    /**
     * Returns 'attrs' list
     *
     * @return \Amp\Validator\AttrSpec[]
     */
    public function getAttrs()
    {
        return $this->get(self::ATTRS);
    }

    /**
     * Returns true if 'attrs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttrs()
    {
        return count($this->get(self::ATTRS)) !== 0;
    }

    /**
     * Returns 'attrs' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttrsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRS));
    }

    /**
     * Returns element from 'attrs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\AttrSpec
     */
    public function getAttrsAt($offset)
    {
        return $this->get(self::ATTRS, $offset);
    }

    /**
     * Returns count of 'attrs' list
     *
     * @return int
     */
    public function getAttrsCount()
    {
        return $this->count(self::ATTRS);
    }

    /**
     * Appends value to 'attr_lists' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendAttrLists($value)
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
     * @return string[]
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
     * @return string
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
     * Sets value of 'cdata' property
     *
     * @param \Amp\Validator\CdataSpec $value Property value
     *
     * @return null
     */
    public function setCdata(\Amp\Validator\CdataSpec $value=null)
    {
        return $this->set(self::CDATA, $value);
    }

    /**
     * Returns value of 'cdata' property
     *
     * @return \Amp\Validator\CdataSpec
     */
    public function getCdata()
    {
        return $this->get(self::CDATA);
    }

    /**
     * Returns true if 'cdata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCdata()
    {
        return $this->get(self::CDATA) !== null;
    }

    /**
     * Sets value of 'child_tags' property
     *
     * @param \Amp\Validator\ChildTagSpec $value Property value
     *
     * @return null
     */
    public function setChildTags(\Amp\Validator\ChildTagSpec $value=null)
    {
        return $this->set(self::CHILD_TAGS, $value);
    }

    /**
     * Returns value of 'child_tags' property
     *
     * @return \Amp\Validator\ChildTagSpec
     */
    public function getChildTags()
    {
        return $this->get(self::CHILD_TAGS);
    }

    /**
     * Returns true if 'child_tags' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChildTags()
    {
        return $this->get(self::CHILD_TAGS) !== null;
    }

    /**
     * Sets value of 'siblings_disallowed' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSiblingsDisallowed($value)
    {
        return $this->set(self::SIBLINGS_DISALLOWED, $value);
    }

    /**
     * Returns value of 'siblings_disallowed' property
     *
     * @return boolean
     */
    public function getSiblingsDisallowed()
    {
        $value = $this->get(self::SIBLINGS_DISALLOWED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'siblings_disallowed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSiblingsDisallowed()
    {
        return $this->get(self::SIBLINGS_DISALLOWED) !== null;
    }

    /**
     * Sets value of 'mandatory_last_child' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setMandatoryLastChild($value)
    {
        return $this->set(self::MANDATORY_LAST_CHILD, $value);
    }

    /**
     * Returns value of 'mandatory_last_child' property
     *
     * @return boolean
     */
    public function getMandatoryLastChild()
    {
        $value = $this->get(self::MANDATORY_LAST_CHILD);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'mandatory_last_child' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMandatoryLastChild()
    {
        return $this->get(self::MANDATORY_LAST_CHILD) !== null;
    }

    /**
     * Appends value to 'reference_points' list
     *
     * @param \Amp\Validator\ReferencePoint $value Value to append
     *
     * @return null
     */
    public function appendReferencePoints(\Amp\Validator\ReferencePoint $value)
    {
        return $this->append(self::REFERENCE_POINTS, $value);
    }

    /**
     * Clears 'reference_points' list
     *
     * @return null
     */
    public function clearReferencePoints()
    {
        return $this->clear(self::REFERENCE_POINTS);
    }

    /**
     * Returns 'reference_points' list
     *
     * @return \Amp\Validator\ReferencePoint[]
     */
    public function getReferencePoints()
    {
        return $this->get(self::REFERENCE_POINTS);
    }

    /**
     * Returns true if 'reference_points' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReferencePoints()
    {
        return count($this->get(self::REFERENCE_POINTS)) !== 0;
    }

    /**
     * Returns 'reference_points' iterator
     *
     * @return \ArrayIterator
     */
    public function getReferencePointsIterator()
    {
        return new \ArrayIterator($this->get(self::REFERENCE_POINTS));
    }

    /**
     * Returns element from 'reference_points' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\ReferencePoint
     */
    public function getReferencePointsAt($offset)
    {
        return $this->get(self::REFERENCE_POINTS, $offset);
    }

    /**
     * Returns count of 'reference_points' list
     *
     * @return int
     */
    public function getReferencePointsCount()
    {
        return $this->count(self::REFERENCE_POINTS);
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
     * Sets value of 'amp_layout' property
     *
     * @param \Amp\Validator\AmpLayout $value Property value
     *
     * @return null
     */
    public function setAmpLayout(\Amp\Validator\AmpLayout $value=null)
    {
        return $this->set(self::AMP_LAYOUT, $value);
    }

    /**
     * Returns value of 'amp_layout' property
     *
     * @return \Amp\Validator\AmpLayout
     */
    public function getAmpLayout()
    {
        return $this->get(self::AMP_LAYOUT);
    }

    /**
     * Returns true if 'amp_layout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAmpLayout()
    {
        return $this->get(self::AMP_LAYOUT) !== null;
    }

    /**
     * Sets value of 'mark_descendants' property
     *
     * @param \Amp\Validator\AncestorMarker $value Property value
     *
     * @return null
     */
    public function setMarkDescendants(\Amp\Validator\AncestorMarker $value=null)
    {
        return $this->set(self::MARK_DESCENDANTS, $value);
    }

    /**
     * Returns value of 'mark_descendants' property
     *
     * @return \Amp\Validator\AncestorMarker
     */
    public function getMarkDescendants()
    {
        return $this->get(self::MARK_DESCENDANTS);
    }

    /**
     * Returns true if 'mark_descendants' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarkDescendants()
    {
        return $this->get(self::MARK_DESCENDANTS) !== null;
    }
}
}