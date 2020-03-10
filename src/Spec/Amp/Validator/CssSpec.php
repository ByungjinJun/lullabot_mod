<?php
/**
 * Auto generated from validator.proto at 2020-03-10 18:37:28
 *
 * amp.validator package
 */

namespace Amp\Validator {
/**
 * CssSpec message
 */
class CssSpec extends \ProtobufMessage
{
    /* Field index constants */
    const AT_RULE_SPEC = 1;
    const IMAGE_URL_SPEC = 3;
    const FONT_URL_SPEC = 4;
    const VALIDATE_AMP4ADS = 5;
    const VALIDATE_KEYFRAMES = 6;
    const DECLARATION = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AT_RULE_SPEC => array(
            'name' => 'at_rule_spec',
            'repeated' => true,
            'type' => '\Amp\Validator\AtRuleSpec'
        ),
        self::IMAGE_URL_SPEC => array(
            'name' => 'image_url_spec',
            'required' => false,
            'type' => '\Amp\Validator\UrlSpec'
        ),
        self::FONT_URL_SPEC => array(
            'name' => 'font_url_spec',
            'required' => false,
            'type' => '\Amp\Validator\UrlSpec'
        ),
        self::VALIDATE_AMP4ADS => array(
            'name' => 'validate_amp4ads',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::VALIDATE_KEYFRAMES => array(
            'name' => 'validate_keyframes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DECLARATION => array(
            'name' => 'declaration',
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
        $this->values[self::AT_RULE_SPEC] = array();
        $this->values[self::IMAGE_URL_SPEC] = null;
        $this->values[self::FONT_URL_SPEC] = null;
        $this->values[self::VALIDATE_AMP4ADS] = null;
        $this->values[self::VALIDATE_KEYFRAMES] = null;
        $this->values[self::DECLARATION] = array();
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
     * Appends value to 'at_rule_spec' list
     *
     * @param \Amp\Validator\AtRuleSpec $value Value to append
     *
     * @return null
     */
    public function appendAtRuleSpec(\Amp\Validator\AtRuleSpec $value)
    {
        return $this->append(self::AT_RULE_SPEC, $value);
    }

    /**
     * Clears 'at_rule_spec' list
     *
     * @return null
     */
    public function clearAtRuleSpec()
    {
        return $this->clear(self::AT_RULE_SPEC);
    }

    /**
     * Returns 'at_rule_spec' list
     *
     * @return \Amp\Validator\AtRuleSpec[]
     */
    public function getAtRuleSpec()
    {
        return $this->get(self::AT_RULE_SPEC);
    }

    /**
     * Returns true if 'at_rule_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAtRuleSpec()
    {
        return count($this->get(self::AT_RULE_SPEC)) !== 0;
    }

    /**
     * Returns 'at_rule_spec' iterator
     *
     * @return \ArrayIterator
     */
    public function getAtRuleSpecIterator()
    {
        return new \ArrayIterator($this->get(self::AT_RULE_SPEC));
    }

    /**
     * Returns element from 'at_rule_spec' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Amp\Validator\AtRuleSpec
     */
    public function getAtRuleSpecAt($offset)
    {
        return $this->get(self::AT_RULE_SPEC, $offset);
    }

    /**
     * Returns count of 'at_rule_spec' list
     *
     * @return int
     */
    public function getAtRuleSpecCount()
    {
        return $this->count(self::AT_RULE_SPEC);
    }

    /**
     * Sets value of 'image_url_spec' property
     *
     * @param \Amp\Validator\UrlSpec $value Property value
     *
     * @return null
     */
    public function setImageUrlSpec(\Amp\Validator\UrlSpec $value=null)
    {
        return $this->set(self::IMAGE_URL_SPEC, $value);
    }

    /**
     * Returns value of 'image_url_spec' property
     *
     * @return \Amp\Validator\UrlSpec
     */
    public function getImageUrlSpec()
    {
        return $this->get(self::IMAGE_URL_SPEC);
    }

    /**
     * Returns true if 'image_url_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImageUrlSpec()
    {
        return $this->get(self::IMAGE_URL_SPEC) !== null;
    }

    /**
     * Sets value of 'font_url_spec' property
     *
     * @param \Amp\Validator\UrlSpec $value Property value
     *
     * @return null
     */
    public function setFontUrlSpec(\Amp\Validator\UrlSpec $value=null)
    {
        return $this->set(self::FONT_URL_SPEC, $value);
    }

    /**
     * Returns value of 'font_url_spec' property
     *
     * @return \Amp\Validator\UrlSpec
     */
    public function getFontUrlSpec()
    {
        return $this->get(self::FONT_URL_SPEC);
    }

    /**
     * Returns true if 'font_url_spec' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFontUrlSpec()
    {
        return $this->get(self::FONT_URL_SPEC) !== null;
    }

    /**
     * Sets value of 'validate_amp4ads' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setValidateAmp4ads($value)
    {
        return $this->set(self::VALIDATE_AMP4ADS, $value);
    }

    /**
     * Returns value of 'validate_amp4ads' property
     *
     * @return boolean
     */
    public function getValidateAmp4ads()
    {
        $value = $this->get(self::VALIDATE_AMP4ADS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'validate_amp4ads' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValidateAmp4ads()
    {
        return $this->get(self::VALIDATE_AMP4ADS) !== null;
    }

    /**
     * Sets value of 'validate_keyframes' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setValidateKeyframes($value)
    {
        return $this->set(self::VALIDATE_KEYFRAMES, $value);
    }

    /**
     * Returns value of 'validate_keyframes' property
     *
     * @return boolean
     */
    public function getValidateKeyframes()
    {
        $value = $this->get(self::VALIDATE_KEYFRAMES);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'validate_keyframes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValidateKeyframes()
    {
        return $this->get(self::VALIDATE_KEYFRAMES) !== null;
    }

    /**
     * Appends value to 'declaration' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDeclaration($value)
    {
        return $this->append(self::DECLARATION, $value);
    }

    /**
     * Clears 'declaration' list
     *
     * @return null
     */
    public function clearDeclaration()
    {
        return $this->clear(self::DECLARATION);
    }

    /**
     * Returns 'declaration' list
     *
     * @return string[]
     */
    public function getDeclaration()
    {
        return $this->get(self::DECLARATION);
    }

    /**
     * Returns true if 'declaration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeclaration()
    {
        return count($this->get(self::DECLARATION)) !== 0;
    }

    /**
     * Returns 'declaration' iterator
     *
     * @return \ArrayIterator
     */
    public function getDeclarationIterator()
    {
        return new \ArrayIterator($this->get(self::DECLARATION));
    }

    /**
     * Returns element from 'declaration' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDeclarationAt($offset)
    {
        return $this->get(self::DECLARATION, $offset);
    }

    /**
     * Returns count of 'declaration' list
     *
     * @return int
     */
    public function getDeclarationCount()
    {
        return $this->count(self::DECLARATION);
    }
}
}