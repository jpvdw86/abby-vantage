<?php
/**
 * AbbyyVantagePublicApiContractCatalogsReindexState
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
use \jpvdw86\AbbyVantage\ObjectSerializer;

/**
 * AbbyyVantagePublicApiContractCatalogsReindexState Class Doc Comment
 *
 * @category Class
 * @package  jpvdw86\AbbyVantage
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbbyyVantagePublicApiContractCatalogsReindexState
{
    /**
     * Possible values of this enum
     */
    const IN_PROGRESS = 'InProgress';
const FAILED = 'Failed';
const COMPLETED = 'Completed';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_PROGRESS,
self::FAILED,
self::COMPLETED,        ];
    }
}
