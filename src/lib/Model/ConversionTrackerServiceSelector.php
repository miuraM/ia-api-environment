<?php
/**
 * ConversionTrackerServiceSelector
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
 * ConversionTrackerServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServiceSelectorオブジェクトは、getメソッドの検索条件（実行パラメータ）を保持します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServiceSelector object contains a set of criteria (parameters) for get method.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTrackerServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'app_conversion_platform' => '\OpenAPI\Client\Model\ConversionTrackerServiceAppConversionPlatform',
        'app_ids' => 'string[]',
        'categories' => '\OpenAPI\Client\Model\ConversionTrackerServiceCategory[]',
        'conversion_tracker_ids' => 'int[]',
        'conversion_tracker_types' => '\OpenAPI\Client\Model\ConversionTrackerServiceType[]',
        'counting_type' => '\OpenAPI\Client\Model\ConversionTrackerServiceCountingType',
        'exclude_from_bidding' => '\OpenAPI\Client\Model\ConversionTrackerServiceExcludeFromBidding',
        'number_results' => 'int',
        'start_index' => 'int',
        'stats_period' => '\OpenAPI\Client\Model\ConversionTrackerServiceStatsPeriod',
        'stats_period_custom_date' => '\OpenAPI\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate',
        'statuses' => '\OpenAPI\Client\Model\ConversionTrackerServiceStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'app_conversion_platform' => null,
        'app_ids' => null,
        'categories' => null,
        'conversion_tracker_ids' => 'int64',
        'conversion_tracker_types' => null,
        'counting_type' => null,
        'exclude_from_bidding' => null,
        'number_results' => 'int32',
        'start_index' => 'int32',
        'stats_period' => null,
        'stats_period_custom_date' => null,
        'statuses' => null
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
        'app_conversion_platform' => 'appConversionPlatform',
        'app_ids' => 'appIds',
        'categories' => 'categories',
        'conversion_tracker_ids' => 'conversionTrackerIds',
        'conversion_tracker_types' => 'conversionTrackerTypes',
        'counting_type' => 'countingType',
        'exclude_from_bidding' => 'excludeFromBidding',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex',
        'stats_period' => 'statsPeriod',
        'stats_period_custom_date' => 'statsPeriodCustomDate',
        'statuses' => 'statuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'app_conversion_platform' => 'setAppConversionPlatform',
        'app_ids' => 'setAppIds',
        'categories' => 'setCategories',
        'conversion_tracker_ids' => 'setConversionTrackerIds',
        'conversion_tracker_types' => 'setConversionTrackerTypes',
        'counting_type' => 'setCountingType',
        'exclude_from_bidding' => 'setExcludeFromBidding',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex',
        'stats_period' => 'setStatsPeriod',
        'stats_period_custom_date' => 'setStatsPeriodCustomDate',
        'statuses' => 'setStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'app_conversion_platform' => 'getAppConversionPlatform',
        'app_ids' => 'getAppIds',
        'categories' => 'getCategories',
        'conversion_tracker_ids' => 'getConversionTrackerIds',
        'conversion_tracker_types' => 'getConversionTrackerTypes',
        'counting_type' => 'getCountingType',
        'exclude_from_bidding' => 'getExcludeFromBidding',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex',
        'stats_period' => 'getStatsPeriod',
        'stats_period_custom_date' => 'getStatsPeriodCustomDate',
        'statuses' => 'getStatuses'
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
        $this->container['app_conversion_platform'] = isset($data['app_conversion_platform']) ? $data['app_conversion_platform'] : null;
        $this->container['app_ids'] = isset($data['app_ids']) ? $data['app_ids'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['conversion_tracker_ids'] = isset($data['conversion_tracker_ids']) ? $data['conversion_tracker_ids'] : null;
        $this->container['conversion_tracker_types'] = isset($data['conversion_tracker_types']) ? $data['conversion_tracker_types'] : null;
        $this->container['counting_type'] = isset($data['counting_type']) ? $data['counting_type'] : null;
        $this->container['exclude_from_bidding'] = isset($data['exclude_from_bidding']) ? $data['exclude_from_bidding'] : null;
        $this->container['number_results'] = isset($data['number_results']) ? $data['number_results'] : 500;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : 1;
        $this->container['stats_period'] = isset($data['stats_period']) ? $data['stats_period'] : null;
        $this->container['stats_period_custom_date'] = isset($data['stats_period_custom_date']) ? $data['stats_period_custom_date'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 1000)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
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
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id <div lang=\"ja\">アカウントID。</div> <div lang=\"en\">Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets app_conversion_platform
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceAppConversionPlatform|null
     */
    public function getAppConversionPlatform()
    {
        return $this->container['app_conversion_platform'];
    }

    /**
     * Sets app_conversion_platform
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceAppConversionPlatform|null $app_conversion_platform app_conversion_platform
     *
     * @return $this
     */
    public function setAppConversionPlatform($app_conversion_platform)
    {
        $this->container['app_conversion_platform'] = $app_conversion_platform;

        return $this;
    }

    /**
     * Gets app_ids
     *
     * @return string[]|null
     */
    public function getAppIds()
    {
        return $this->container['app_ids'];
    }

    /**
     * Sets app_ids
     *
     * @param string[]|null $app_ids <div lang=\"ja\">アプリID。</div> <div lang=\"en\">App ID.</div>
     *
     * @return $this
     */
    public function setAppIds($app_ids)
    {
        $this->container['app_ids'] = $app_ids;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceCategory[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceCategory[]|null $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets conversion_tracker_ids
     *
     * @return int[]|null
     */
    public function getConversionTrackerIds()
    {
        return $this->container['conversion_tracker_ids'];
    }

    /**
     * Sets conversion_tracker_ids
     *
     * @param int[]|null $conversion_tracker_ids <div lang=\"ja\">コンバージョントラッカーのID。</div> <div lang=\"en\">Conversion Tracker ID.</div>
     *
     * @return $this
     */
    public function setConversionTrackerIds($conversion_tracker_ids)
    {
        $this->container['conversion_tracker_ids'] = $conversion_tracker_ids;

        return $this;
    }

    /**
     * Gets conversion_tracker_types
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceType[]|null
     */
    public function getConversionTrackerTypes()
    {
        return $this->container['conversion_tracker_types'];
    }

    /**
     * Sets conversion_tracker_types
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceType[]|null $conversion_tracker_types conversion_tracker_types
     *
     * @return $this
     */
    public function setConversionTrackerTypes($conversion_tracker_types)
    {
        $this->container['conversion_tracker_types'] = $conversion_tracker_types;

        return $this;
    }

    /**
     * Gets counting_type
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceCountingType|null
     */
    public function getCountingType()
    {
        return $this->container['counting_type'];
    }

    /**
     * Sets counting_type
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceCountingType|null $counting_type counting_type
     *
     * @return $this
     */
    public function setCountingType($counting_type)
    {
        $this->container['counting_type'] = $counting_type;

        return $this;
    }

    /**
     * Gets exclude_from_bidding
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceExcludeFromBidding|null
     */
    public function getExcludeFromBidding()
    {
        return $this->container['exclude_from_bidding'];
    }

    /**
     * Sets exclude_from_bidding
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceExcludeFromBidding|null $exclude_from_bidding exclude_from_bidding
     *
     * @return $this
     */
    public function setExcludeFromBidding($exclude_from_bidding)
    {
        $this->container['exclude_from_bidding'] = $exclude_from_bidding;

        return $this;
    }

    /**
     * Gets number_results
     *
     * @return int|null
     */
    public function getNumberResults()
    {
        return $this->container['number_results'];
    }

    /**
     * Sets number_results
     *
     * @param int|null $number_results <div lang=\"ja\">ページの最大件数です。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.</div>
     *
     * @return $this
     */
    public function setNumberResults($number_results)
    {

        if (!is_null($number_results) && ($number_results > 1000)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling ConversionTrackerServiceSelector., must be smaller than or equal to 1000.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling ConversionTrackerServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['number_results'] = $number_results;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int|null $start_index <div lang=\"ja\">ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Index of the first result to return in this page. This field must be greater than or equal to 1.</div>
     *
     * @return $this
     */
    public function setStartIndex($start_index)
    {

        if (!is_null($start_index) && ($start_index < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_index when calling ConversionTrackerServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets stats_period
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceStatsPeriod|null
     */
    public function getStatsPeriod()
    {
        return $this->container['stats_period'];
    }

    /**
     * Sets stats_period
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceStatsPeriod|null $stats_period stats_period
     *
     * @return $this
     */
    public function setStatsPeriod($stats_period)
    {
        $this->container['stats_period'] = $stats_period;

        return $this;
    }

    /**
     * Gets stats_period_custom_date
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate|null
     */
    public function getStatsPeriodCustomDate()
    {
        return $this->container['stats_period_custom_date'];
    }

    /**
     * Sets stats_period_custom_date
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate|null $stats_period_custom_date stats_period_custom_date
     *
     * @return $this
     */
    public function setStatsPeriodCustomDate($stats_period_custom_date)
    {
        $this->container['stats_period_custom_date'] = $stats_period_custom_date;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceStatus[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceStatus[]|null $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

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

