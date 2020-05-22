<?php
/**
 * AdGroupServiceBiddingStrategy
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
 * AdGroupServiceBiddingStrategy Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupServiceBiddingStrategyは、広告グループ入札戦略を表します。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。&lt;br&gt; ※目的ありのキャンペーンの場合のみ設定可能です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupServiceBiddingStrategy object describes bidding strategy of ad group.&lt;br&gt; This field is optional in ADD and SET operation.&lt;br&gt; *This can only be specified for campaigns with campaignGoal. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupServiceBiddingStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupServiceBiddingStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaign_bidding_strategy_type' => '\OpenAPI\Client\Model\AdGroupServiceCampaignBiddingStrategyType',
        'max_cpc_bid_value' => 'int',
        'max_cpv_bid_value' => 'int',
        'max_vcpm_bid_value' => 'int',
        'target_cpa_bid_value' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'campaign_bidding_strategy_type' => null,
        'max_cpc_bid_value' => 'int64',
        'max_cpv_bid_value' => 'int64',
        'max_vcpm_bid_value' => 'int64',
        'target_cpa_bid_value' => 'int64'
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
        'campaign_bidding_strategy_type' => 'campaignBiddingStrategyType',
        'max_cpc_bid_value' => 'maxCpcBidValue',
        'max_cpv_bid_value' => 'maxCpvBidValue',
        'max_vcpm_bid_value' => 'maxVcpmBidValue',
        'target_cpa_bid_value' => 'targetCpaBidValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_bidding_strategy_type' => 'setCampaignBiddingStrategyType',
        'max_cpc_bid_value' => 'setMaxCpcBidValue',
        'max_cpv_bid_value' => 'setMaxCpvBidValue',
        'max_vcpm_bid_value' => 'setMaxVcpmBidValue',
        'target_cpa_bid_value' => 'setTargetCpaBidValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_bidding_strategy_type' => 'getCampaignBiddingStrategyType',
        'max_cpc_bid_value' => 'getMaxCpcBidValue',
        'max_cpv_bid_value' => 'getMaxCpvBidValue',
        'max_vcpm_bid_value' => 'getMaxVcpmBidValue',
        'target_cpa_bid_value' => 'getTargetCpaBidValue'
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
        $this->container['campaign_bidding_strategy_type'] = isset($data['campaign_bidding_strategy_type']) ? $data['campaign_bidding_strategy_type'] : null;
        $this->container['max_cpc_bid_value'] = isset($data['max_cpc_bid_value']) ? $data['max_cpc_bid_value'] : null;
        $this->container['max_cpv_bid_value'] = isset($data['max_cpv_bid_value']) ? $data['max_cpv_bid_value'] : null;
        $this->container['max_vcpm_bid_value'] = isset($data['max_vcpm_bid_value']) ? $data['max_vcpm_bid_value'] : null;
        $this->container['target_cpa_bid_value'] = isset($data['target_cpa_bid_value']) ? $data['target_cpa_bid_value'] : null;
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
     * Gets campaign_bidding_strategy_type
     *
     * @return \OpenAPI\Client\Model\AdGroupServiceCampaignBiddingStrategyType|null
     */
    public function getCampaignBiddingStrategyType()
    {
        return $this->container['campaign_bidding_strategy_type'];
    }

    /**
     * Sets campaign_bidding_strategy_type
     *
     * @param \OpenAPI\Client\Model\AdGroupServiceCampaignBiddingStrategyType|null $campaign_bidding_strategy_type campaign_bidding_strategy_type
     *
     * @return $this
     */
    public function setCampaignBiddingStrategyType($campaign_bidding_strategy_type)
    {
        $this->container['campaign_bidding_strategy_type'] = $campaign_bidding_strategy_type;

        return $this;
    }

    /**
     * Gets max_cpc_bid_value
     *
     * @return int|null
     */
    public function getMaxCpcBidValue()
    {
        return $this->container['max_cpc_bid_value'];
    }

    /**
     * Sets max_cpc_bid_value
     *
     * @param int|null $max_cpc_bid_value <div lang=\"ja\"> 広告グループ最大入札価格（CPC）です。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※campaignBiddingStrategyTypeがMAX_CPCの場合のみ指定可能です。 </div> <div lang=\"en\"> Ad group MAX_CPC bid value.<br> This field is optional in ADD and SET operation.<br> *This can only be specified when campaignBiddingStrategyType is MAX_CPC. </div>
     *
     * @return $this
     */
    public function setMaxCpcBidValue($max_cpc_bid_value)
    {
        $this->container['max_cpc_bid_value'] = $max_cpc_bid_value;

        return $this;
    }

    /**
     * Gets max_cpv_bid_value
     *
     * @return int|null
     */
    public function getMaxCpvBidValue()
    {
        return $this->container['max_cpv_bid_value'];
    }

    /**
     * Sets max_cpv_bid_value
     *
     * @param int|null $max_cpv_bid_value <div lang=\"ja\"> 広告グループ最大入札価格（CPV）です。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※campaignBiddingStrategyTypeがMAX_CPVの場合のみ指定可能です。 </div> <div lang=\"en\">Ad group MAX_CPV bid value.<br> This field is optional in ADD and SET operation.<br> *This can only be specified when campaignBiddingStrategyType is MAX_CPV. </div>
     *
     * @return $this
     */
    public function setMaxCpvBidValue($max_cpv_bid_value)
    {
        $this->container['max_cpv_bid_value'] = $max_cpv_bid_value;

        return $this;
    }

    /**
     * Gets max_vcpm_bid_value
     *
     * @return int|null
     */
    public function getMaxVcpmBidValue()
    {
        return $this->container['max_vcpm_bid_value'];
    }

    /**
     * Sets max_vcpm_bid_value
     *
     * @param int|null $max_vcpm_bid_value <div lang=\"ja\"> 広告グループ最大入札価格（vCPM）です。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※campaignBiddingStrategyTypeがMAX_VCPMの場合のみ指定可能です。 </div> <div lang=\"en\">Ad group MAX_VCPM bid value.<br> This field is optional in ADD and SET operation.<br> *This can only be specified when campaignBiddingStrategyType is MAX_VCPM. </div>
     *
     * @return $this
     */
    public function setMaxVcpmBidValue($max_vcpm_bid_value)
    {
        $this->container['max_vcpm_bid_value'] = $max_vcpm_bid_value;

        return $this;
    }

    /**
     * Gets target_cpa_bid_value
     *
     * @return int|null
     */
    public function getTargetCpaBidValue()
    {
        return $this->container['target_cpa_bid_value'];
    }

    /**
     * Sets target_cpa_bid_value
     *
     * @param int|null $target_cpa_bid_value <div lang=\"ja\"> 広告グループ目標単価（tCPA）です。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※campaignBiddingStrategyTypeがTARGET_CPAの場合のみ指定可能です。 </div> <div lang=\"en\"> Ad group TARGET_CPA bid value.<br> This field is optional in ADD and SET operation.<br> *This can only be specified when campaignBiddingStrategyType is TARGET_CPA. </div>
     *
     * @return $this
     */
    public function setTargetCpaBidValue($target_cpa_bid_value)
    {
        $this->container['target_cpa_bid_value'] = $target_cpa_bid_value;

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


