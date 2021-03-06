<?php
/**
 * AdGroupAdServiceBid
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 ディスプレイ広告 API リファレンス / Yahoo! Ads Display Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 ディスプレイ広告 APIのWebサービスについて説明します。<br> 「Try it out」のご利用には、事前にアプリケーションの登録が必要です。また、アプリケーションのリダイレクトURIの1つに<br> https://yahoojp-marketing.github.io/ads-display-api-documents/oauth2-redirect.htmlを登録してください。 </div> <div lang=\"en\">Display Ads API Web Services supported in Yahoo! Ads API.<br> When you use \"Try it out\", you need to register your application in advance.<br> As one of redirect URI for application, you need to set \"https://yahoojp-marketing.github.io/ads-display-api-documents/oauth2-redirect.html\". </div>
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AdGroupAdServiceBid Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupAdServiceBidオブジェクトは、入札最適化方法を格納するコンテナです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupAdServiceBid object is a container for storing bid optimization method.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceBid implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceBid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bidding_strategy_type' => '\OpenAPI\Client\Model\AdGroupAdServiceBiddingStrategyType',
        'manual_cpc_ad_group_ad_bid' => '\OpenAPI\Client\Model\AdGroupAdServiceManualCPCAdGroupAdBid',
        'manual_cpv_ad_group_ad_bid' => '\OpenAPI\Client\Model\AdGroupAdServiceManualCPVAdGroupAdBid'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bidding_strategy_type' => null,
        'manual_cpc_ad_group_ad_bid' => null,
        'manual_cpv_ad_group_ad_bid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bidding_strategy_type' => 'biddingStrategyType',
        'manual_cpc_ad_group_ad_bid' => 'manualCPCAdGroupAdBid',
        'manual_cpv_ad_group_ad_bid' => 'manualCPVAdGroupAdBid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bidding_strategy_type' => 'setBiddingStrategyType',
        'manual_cpc_ad_group_ad_bid' => 'setManualCpcAdGroupAdBid',
        'manual_cpv_ad_group_ad_bid' => 'setManualCpvAdGroupAdBid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bidding_strategy_type' => 'getBiddingStrategyType',
        'manual_cpc_ad_group_ad_bid' => 'getManualCpcAdGroupAdBid',
        'manual_cpv_ad_group_ad_bid' => 'getManualCpvAdGroupAdBid'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['bidding_strategy_type'] = isset($data['bidding_strategy_type']) ? $data['bidding_strategy_type'] : null;
        $this->container['manual_cpc_ad_group_ad_bid'] = isset($data['manual_cpc_ad_group_ad_bid']) ? $data['manual_cpc_ad_group_ad_bid'] : null;
        $this->container['manual_cpv_ad_group_ad_bid'] = isset($data['manual_cpv_ad_group_ad_bid']) ? $data['manual_cpv_ad_group_ad_bid'] : null;
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
     * Gets bidding_strategy_type
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceBiddingStrategyType|null
     */
    public function getBiddingStrategyType()
    {
        return $this->container['bidding_strategy_type'];
    }

    /**
     * Sets bidding_strategy_type
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceBiddingStrategyType|null $bidding_strategy_type bidding_strategy_type
     *
     * @return $this
     */
    public function setBiddingStrategyType($bidding_strategy_type)
    {
        $this->container['bidding_strategy_type'] = $bidding_strategy_type;

        return $this;
    }

    /**
     * Gets manual_cpc_ad_group_ad_bid
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceManualCPCAdGroupAdBid|null
     */
    public function getManualCpcAdGroupAdBid()
    {
        return $this->container['manual_cpc_ad_group_ad_bid'];
    }

    /**
     * Sets manual_cpc_ad_group_ad_bid
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceManualCPCAdGroupAdBid|null $manual_cpc_ad_group_ad_bid manual_cpc_ad_group_ad_bid
     *
     * @return $this
     */
    public function setManualCpcAdGroupAdBid($manual_cpc_ad_group_ad_bid)
    {
        $this->container['manual_cpc_ad_group_ad_bid'] = $manual_cpc_ad_group_ad_bid;

        return $this;
    }

    /**
     * Gets manual_cpv_ad_group_ad_bid
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceManualCPVAdGroupAdBid|null
     */
    public function getManualCpvAdGroupAdBid()
    {
        return $this->container['manual_cpv_ad_group_ad_bid'];
    }

    /**
     * Sets manual_cpv_ad_group_ad_bid
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceManualCPVAdGroupAdBid|null $manual_cpv_ad_group_ad_bid manual_cpv_ad_group_ad_bid
     *
     * @return $this
     */
    public function setManualCpvAdGroupAdBid($manual_cpv_ad_group_ad_bid)
    {
        $this->container['manual_cpv_ad_group_ad_bid'] = $manual_cpv_ad_group_ad_bid;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


