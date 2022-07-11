<?php
/**
 * AbbyyVantagePublicApiContractTransactionsResultsTransactionDto
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
 * AbbyyVantagePublicApiContractTransactionsResultsTransactionDto Class Doc Comment
 *
 * @category Class
 * @package  jpvdw86\AbbyVantage
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbbyyVantagePublicApiContractTransactionsResultsTransactionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Abbyy.Vantage.PublicApi.Contract.Transactions.Results.TransactionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'status' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsTransactionStatus',
'manual_review_link' => 'string',
'documents' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsExtractedDocumentDto[]',
'error' => 'string',
'source_files' => '\jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsFileDto[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'status' => null,
'manual_review_link' => null,
'documents' => null,
'error' => null,
'source_files' => null    ];

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
'status' => 'status',
'manual_review_link' => 'manualReviewLink',
'documents' => 'documents',
'error' => 'error',
'source_files' => 'sourceFiles'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'status' => 'setStatus',
'manual_review_link' => 'setManualReviewLink',
'documents' => 'setDocuments',
'error' => 'setError',
'source_files' => 'setSourceFiles'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'status' => 'getStatus',
'manual_review_link' => 'getManualReviewLink',
'documents' => 'getDocuments',
'error' => 'getError',
'source_files' => 'getSourceFiles'    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['manual_review_link'] = isset($data['manual_review_link']) ? $data['manual_review_link'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['source_files'] = isset($data['source_files']) ? $data['source_files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsTransactionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsTransactionStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets manual_review_link
     *
     * @return string
     */
    public function getManualReviewLink()
    {
        return $this->container['manual_review_link'];
    }

    /**
     * Sets manual_review_link
     *
     * @param string $manual_review_link manual_review_link
     *
     * @return $this
     */
    public function setManualReviewLink($manual_review_link)
    {
        $this->container['manual_review_link'] = $manual_review_link;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsExtractedDocumentDto[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsExtractedDocumentDto[] $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets source_files
     *
     * @return \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsFileDto[]
     */
    public function getSourceFiles()
    {
        return $this->container['source_files'];
    }

    /**
     * Sets source_files
     *
     * @param \jpvdw86\AbbyVantage\Model\AbbyyVantagePublicApiContractTransactionsResultsFileDto[] $source_files source_files
     *
     * @return $this
     */
    public function setSourceFiles($source_files)
    {
        $this->container['source_files'] = $source_files;

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