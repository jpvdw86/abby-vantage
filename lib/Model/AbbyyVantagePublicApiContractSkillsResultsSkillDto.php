<?php
/**
 * AbbyyVantagePublicApiContractSkillsResultsSkillDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  jpvdw86\AbbyVantage
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Vantage processing REST API
 *
 * Environment: Production<br>Product Version: 1.0.0-0.37.11-20220624.1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace jpvdw86\AbbyVantage\Model;

use \ArrayAccess;
use \jpvdw86\AbbyVantage\ObjectSerializer;

/**
 * AbbyyVantagePublicApiContractSkillsResultsSkillDto Class Doc Comment
 *
 * @category Class
 * @package  jpvdw86\AbbyVantage
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbbyyVantagePublicApiContractSkillsResultsSkillDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abbyy.Vantage.PublicApi.Contract.Skills.Results.SkillDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'type' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsSkillType',
'fields' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsFieldDto[]',
'classes' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillClassDto[]',
'skills' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsInnerSkillDto[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'type' => null,
'fields' => null,
'classes' => null,
'skills' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'type' => 'type',
'fields' => 'fields',
'classes' => 'classes',
'skills' => 'skills'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'type' => 'setType',
'fields' => 'setFields',
'classes' => 'setClasses',
'skills' => 'setSkills'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'type' => 'getType',
'fields' => 'getFields',
'classes' => 'getClasses',
'skills' => 'getSkills'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['classes'] = isset($data['classes']) ? $data['classes'] : null;
        $this->container['skills'] = isset($data['skills']) ? $data['skills'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id of the skill
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the skill
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsSkillType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsSkillType $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsFieldDto[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsFieldDto[] $fields For document skills.
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets classes
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillClassDto[]
     */
    public function getClasses()
    {
        return $this->container['classes'];
    }

    /**
     * Sets classes
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsSkillClassDto[] $classes For classification skills.
     *
     * @return $this
     */
    public function setClasses($classes)
    {
        $this->container['classes'] = $classes;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsInnerSkillDto[]
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractSkillsResultsInnerSkillDto[] $skills skills
     *
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
