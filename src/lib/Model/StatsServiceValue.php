<?php
/**
 * StatsServiceValue
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
 * StatsServiceValue Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;StatsServiceValueオブジェクトは、統計情報1件あたりの実行結果（1 Entity）を保持します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;StatsServiceValue object is container for the execution result (1 entity) per single stats information by method.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatsServiceValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatsServiceValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'ad_group_stats_value' => '\OpenAPI\Client\Model\StatsServiceAdGroupStatsValue',
        'ad_stats_value' => '\OpenAPI\Client\Model\StatsServiceAdStatsValue',
        'campaign_stats_value' => '\OpenAPI\Client\Model\StatsServiceCampaignStatsValue',
        'errors' => '\OpenAPI\Client\Model\Error[]',
        'image_stats_value' => '\OpenAPI\Client\Model\StatsServiceImageStatsValue',
        'operation_succeeded' => 'bool',
        'period_custom_date' => '\OpenAPI\Client\Model\StatsServicePeriodCustomDate',
        'stats_period' => '\OpenAPI\Client\Model\StatsServiceStatsPeriod',
        'target_stats_value' => '\OpenAPI\Client\Model\StatsServiceTargetStatsValue',
        'type' => '\OpenAPI\Client\Model\StatsServiceType',
        'video_stats_value' => '\OpenAPI\Client\Model\StatsServiceVideoStatsValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'ad_group_stats_value' => null,
        'ad_stats_value' => null,
        'campaign_stats_value' => null,
        'errors' => null,
        'image_stats_value' => null,
        'operation_succeeded' => null,
        'period_custom_date' => null,
        'stats_period' => null,
        'target_stats_value' => null,
        'type' => null,
        'video_stats_value' => null
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
        'account_id' => 'accountId',
        'ad_group_stats_value' => 'adGroupStatsValue',
        'ad_stats_value' => 'adStatsValue',
        'campaign_stats_value' => 'campaignStatsValue',
        'errors' => 'errors',
        'image_stats_value' => 'imageStatsValue',
        'operation_succeeded' => 'operationSucceeded',
        'period_custom_date' => 'periodCustomDate',
        'stats_period' => 'statsPeriod',
        'target_stats_value' => 'targetStatsValue',
        'type' => 'type',
        'video_stats_value' => 'videoStatsValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'ad_group_stats_value' => 'setAdGroupStatsValue',
        'ad_stats_value' => 'setAdStatsValue',
        'campaign_stats_value' => 'setCampaignStatsValue',
        'errors' => 'setErrors',
        'image_stats_value' => 'setImageStatsValue',
        'operation_succeeded' => 'setOperationSucceeded',
        'period_custom_date' => 'setPeriodCustomDate',
        'stats_period' => 'setStatsPeriod',
        'target_stats_value' => 'setTargetStatsValue',
        'type' => 'setType',
        'video_stats_value' => 'setVideoStatsValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'ad_group_stats_value' => 'getAdGroupStatsValue',
        'ad_stats_value' => 'getAdStatsValue',
        'campaign_stats_value' => 'getCampaignStatsValue',
        'errors' => 'getErrors',
        'image_stats_value' => 'getImageStatsValue',
        'operation_succeeded' => 'getOperationSucceeded',
        'period_custom_date' => 'getPeriodCustomDate',
        'stats_period' => 'getStatsPeriod',
        'target_stats_value' => 'getTargetStatsValue',
        'type' => 'getType',
        'video_stats_value' => 'getVideoStatsValue'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['ad_group_stats_value'] = isset($data['ad_group_stats_value']) ? $data['ad_group_stats_value'] : null;
        $this->container['ad_stats_value'] = isset($data['ad_stats_value']) ? $data['ad_stats_value'] : null;
        $this->container['campaign_stats_value'] = isset($data['campaign_stats_value']) ? $data['campaign_stats_value'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['image_stats_value'] = isset($data['image_stats_value']) ? $data['image_stats_value'] : null;
        $this->container['operation_succeeded'] = isset($data['operation_succeeded']) ? $data['operation_succeeded'] : null;
        $this->container['period_custom_date'] = isset($data['period_custom_date']) ? $data['period_custom_date'] : null;
        $this->container['stats_period'] = isset($data['stats_period']) ? $data['stats_period'] : null;
        $this->container['target_stats_value'] = isset($data['target_stats_value']) ? $data['target_stats_value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['video_stats_value'] = isset($data['video_stats_value']) ? $data['video_stats_value'] : null;
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
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets ad_group_stats_value
     *
     * @return \OpenAPI\Client\Model\StatsServiceAdGroupStatsValue|null
     */
    public function getAdGroupStatsValue()
    {
        return $this->container['ad_group_stats_value'];
    }

    /**
     * Sets ad_group_stats_value
     *
     * @param \OpenAPI\Client\Model\StatsServiceAdGroupStatsValue|null $ad_group_stats_value ad_group_stats_value
     *
     * @return $this
     */
    public function setAdGroupStatsValue($ad_group_stats_value)
    {
        $this->container['ad_group_stats_value'] = $ad_group_stats_value;

        return $this;
    }

    /**
     * Gets ad_stats_value
     *
     * @return \OpenAPI\Client\Model\StatsServiceAdStatsValue|null
     */
    public function getAdStatsValue()
    {
        return $this->container['ad_stats_value'];
    }

    /**
     * Sets ad_stats_value
     *
     * @param \OpenAPI\Client\Model\StatsServiceAdStatsValue|null $ad_stats_value ad_stats_value
     *
     * @return $this
     */
    public function setAdStatsValue($ad_stats_value)
    {
        $this->container['ad_stats_value'] = $ad_stats_value;

        return $this;
    }

    /**
     * Gets campaign_stats_value
     *
     * @return \OpenAPI\Client\Model\StatsServiceCampaignStatsValue|null
     */
    public function getCampaignStatsValue()
    {
        return $this->container['campaign_stats_value'];
    }

    /**
     * Sets campaign_stats_value
     *
     * @param \OpenAPI\Client\Model\StatsServiceCampaignStatsValue|null $campaign_stats_value campaign_stats_value
     *
     * @return $this
     */
    public function setCampaignStatsValue($campaign_stats_value)
    {
        $this->container['campaign_stats_value'] = $campaign_stats_value;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \OpenAPI\Client\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \OpenAPI\Client\Model\Error[]|null $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets image_stats_value
     *
     * @return \OpenAPI\Client\Model\StatsServiceImageStatsValue|null
     */
    public function getImageStatsValue()
    {
        return $this->container['image_stats_value'];
    }

    /**
     * Sets image_stats_value
     *
     * @param \OpenAPI\Client\Model\StatsServiceImageStatsValue|null $image_stats_value image_stats_value
     *
     * @return $this
     */
    public function setImageStatsValue($image_stats_value)
    {
        $this->container['image_stats_value'] = $image_stats_value;

        return $this;
    }

    /**
     * Gets operation_succeeded
     *
     * @return bool|null
     */
    public function getOperationSucceeded()
    {
        return $this->container['operation_succeeded'];
    }

    /**
     * Sets operation_succeeded
     *
     * @param bool|null $operation_succeeded <div lang=\"ja\">処理結果です。trueの場合は、処理は成功しました。falseの場合は処理が失敗しています。</div> <div lang=\"en\">The process results. If true, the process succeeded. If false, the process failed.</div>
     *
     * @return $this
     */
    public function setOperationSucceeded($operation_succeeded)
    {
        $this->container['operation_succeeded'] = $operation_succeeded;

        return $this;
    }

    /**
     * Gets period_custom_date
     *
     * @return \OpenAPI\Client\Model\StatsServicePeriodCustomDate|null
     */
    public function getPeriodCustomDate()
    {
        return $this->container['period_custom_date'];
    }

    /**
     * Sets period_custom_date
     *
     * @param \OpenAPI\Client\Model\StatsServicePeriodCustomDate|null $period_custom_date period_custom_date
     *
     * @return $this
     */
    public function setPeriodCustomDate($period_custom_date)
    {
        $this->container['period_custom_date'] = $period_custom_date;

        return $this;
    }

    /**
     * Gets stats_period
     *
     * @return \OpenAPI\Client\Model\StatsServiceStatsPeriod|null
     */
    public function getStatsPeriod()
    {
        return $this->container['stats_period'];
    }

    /**
     * Sets stats_period
     *
     * @param \OpenAPI\Client\Model\StatsServiceStatsPeriod|null $stats_period stats_period
     *
     * @return $this
     */
    public function setStatsPeriod($stats_period)
    {
        $this->container['stats_period'] = $stats_period;

        return $this;
    }

    /**
     * Gets target_stats_value
     *
     * @return \OpenAPI\Client\Model\StatsServiceTargetStatsValue|null
     */
    public function getTargetStatsValue()
    {
        return $this->container['target_stats_value'];
    }

    /**
     * Sets target_stats_value
     *
     * @param \OpenAPI\Client\Model\StatsServiceTargetStatsValue|null $target_stats_value target_stats_value
     *
     * @return $this
     */
    public function setTargetStatsValue($target_stats_value)
    {
        $this->container['target_stats_value'] = $target_stats_value;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\StatsServiceType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\StatsServiceType|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets video_stats_value
     *
     * @return \OpenAPI\Client\Model\StatsServiceVideoStatsValue|null
     */
    public function getVideoStatsValue()
    {
        return $this->container['video_stats_value'];
    }

    /**
     * Sets video_stats_value
     *
     * @param \OpenAPI\Client\Model\StatsServiceVideoStatsValue|null $video_stats_value video_stats_value
     *
     * @return $this
     */
    public function setVideoStatsValue($video_stats_value)
    {
        $this->container['video_stats_value'] = $video_stats_value;

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


