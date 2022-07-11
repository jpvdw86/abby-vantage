<?php
/**
 * AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileMetadataDto
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
 * AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileMetadataDto Class Doc Comment
 *
 * @category Class
 * @description Additional file processing parameters
 * @package  jpvdw86\AbbyVantage
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileMetadataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abbyy.Vantage.PublicApi.Contract.Transactions.Requests.TransactionFileMetadataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'int',
'image_processing_options' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsImageProcessingOptions',
'registration_parameters' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileRegistrationParameter[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => 'int32',
'image_processing_options' => null,
'registration_parameters' => null    ];

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
        'index' => 'index',
'image_processing_options' => 'imageProcessingOptions',
'registration_parameters' => 'registrationParameters'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
'image_processing_options' => 'setImageProcessingOptions',
'registration_parameters' => 'setRegistrationParameters'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
'image_processing_options' => 'getImageProcessingOptions',
'registration_parameters' => 'getRegistrationParameters'    ];

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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['image_processing_options'] = isset($data['image_processing_options']) ? $data['image_processing_options'] : null;
        $this->container['registration_parameters'] = isset($data['registration_parameters']) ? $data['registration_parameters'] : null;
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
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Documents in transaction will be ordered by this parameter
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets image_processing_options
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsImageProcessingOptions
     */
    public function getImageProcessingOptions()
    {
        return $this->container['image_processing_options'];
    }

    /**
     * Sets image_processing_options
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsImageProcessingOptions $image_processing_options image_processing_options
     *
     * @return $this
     */
    public function setImageProcessingOptions($image_processing_options)
    {
        $this->container['image_processing_options'] = $image_processing_options;

        return $this;
    }

    /**
     * Gets registration_parameters
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileRegistrationParameter[]
     */
    public function getRegistrationParameters()
    {
        return $this->container['registration_parameters'];
    }

    /**
     * Sets registration_parameters
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsRequestsTransactionFileRegistrationParameter[] $registration_parameters Additional file registration parameters.
     *
     * @return $this
     */
    public function setRegistrationParameters($registration_parameters)
    {
        $this->container['registration_parameters'] = $registration_parameters;

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