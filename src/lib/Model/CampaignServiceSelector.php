<?php
/**
 * CampaignServiceSelector
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
 * CampaignServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceSelectorオブジェクトは、getメソッドの検索条件（実行パラメータ）を保持します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;The CampaignServiceSelector object is a container for storing a set of criteria (parameters) for get method.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'campaign_goal_filter_type' => '\OpenAPI\Client\Model\CampaignServiceGoalFilterType',
        'campaign_ids' => 'int[]',
        'campaign_type' => '\OpenAPI\Client\Model\CampaignServiceType',
        'contains_label_id_flg' => 'bool',
        'feed_ids' => 'int[]',
        'label_ids' => 'int[]',
        'number_results' => 'int',
        'start_index' => 'int',
        'user_statuses' => '\OpenAPI\Client\Model\CampaignServiceUserStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'campaign_goal_filter_type' => null,
        'campaign_ids' => 'int64',
        'campaign_type' => null,
        'contains_label_id_flg' => null,
        'feed_ids' => 'int64',
        'label_ids' => 'int64',
        'number_results' => 'int32',
        'start_index' => 'int32',
        'user_statuses' => null
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
        'campaign_goal_filter_type' => 'campaignGoalFilterType',
        'campaign_ids' => 'campaignIds',
        'campaign_type' => 'campaignType',
        'contains_label_id_flg' => 'containsLabelIdFlg',
        'feed_ids' => 'feedIds',
        'label_ids' => 'labelIds',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex',
        'user_statuses' => 'userStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'campaign_goal_filter_type' => 'setCampaignGoalFilterType',
        'campaign_ids' => 'setCampaignIds',
        'campaign_type' => 'setCampaignType',
        'contains_label_id_flg' => 'setContainsLabelIdFlg',
        'feed_ids' => 'setFeedIds',
        'label_ids' => 'setLabelIds',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex',
        'user_statuses' => 'setUserStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'campaign_goal_filter_type' => 'getCampaignGoalFilterType',
        'campaign_ids' => 'getCampaignIds',
        'campaign_type' => 'getCampaignType',
        'contains_label_id_flg' => 'getContainsLabelIdFlg',
        'feed_ids' => 'getFeedIds',
        'label_ids' => 'getLabelIds',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex',
        'user_statuses' => 'getUserStatuses'
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
        $this->container['campaign_goal_filter_type'] = isset($data['campaign_goal_filter_type']) ? $data['campaign_goal_filter_type'] : null;
        $this->container['campaign_ids'] = isset($data['campaign_ids']) ? $data['campaign_ids'] : null;
        $this->container['campaign_type'] = isset($data['campaign_type']) ? $data['campaign_type'] : null;
        $this->container['contains_label_id_flg'] = isset($data['contains_label_id_flg']) ? $data['contains_label_id_flg'] : null;
        $this->container['feed_ids'] = isset($data['feed_ids']) ? $data['feed_ids'] : null;
        $this->container['label_ids'] = isset($data['label_ids']) ? $data['label_ids'] : null;
        $this->container['number_results'] = isset($data['number_results']) ? $data['number_results'] : 500;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : 1;
        $this->container['user_statuses'] = isset($data['user_statuses']) ? $data['user_statuses'] : null;
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
        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 500)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 500.";
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
     * @param int $account_id <div lang=\"ja\">検索条件 : アカウントID</div> <div lang=\"en\">Search Condition: Account ID</div>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets campaign_goal_filter_type
     *
     * @return \OpenAPI\Client\Model\CampaignServiceGoalFilterType|null
     */
    public function getCampaignGoalFilterType()
    {
        return $this->container['campaign_goal_filter_type'];
    }

    /**
     * Sets campaign_goal_filter_type
     *
     * @param \OpenAPI\Client\Model\CampaignServiceGoalFilterType|null $campaign_goal_filter_type campaign_goal_filter_type
     *
     * @return $this
     */
    public function setCampaignGoalFilterType($campaign_goal_filter_type)
    {
        $this->container['campaign_goal_filter_type'] = $campaign_goal_filter_type;

        return $this;
    }

    /**
     * Gets campaign_ids
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaign_ids'];
    }

    /**
     * Sets campaign_ids
     *
     * @param int[]|null $campaign_ids <div lang=\"ja\">検索条件 : キャンペーンID</div> <div lang=\"en\">Search Condition: Campaign ID</div>
     *
     * @return $this
     */
    public function setCampaignIds($campaign_ids)
    {
        $this->container['campaign_ids'] = $campaign_ids;

        return $this;
    }

    /**
     * Gets campaign_type
     *
     * @return \OpenAPI\Client\Model\CampaignServiceType|null
     */
    public function getCampaignType()
    {
        return $this->container['campaign_type'];
    }

    /**
     * Sets campaign_type
     *
     * @param \OpenAPI\Client\Model\CampaignServiceType|null $campaign_type campaign_type
     *
     * @return $this
     */
    public function setCampaignType($campaign_type)
    {
        $this->container['campaign_type'] = $campaign_type;

        return $this;
    }

    /**
     * Gets contains_label_id_flg
     *
     * @return bool|null
     */
    public function getContainsLabelIdFlg()
    {
        return $this->container['contains_label_id_flg'];
    }

    /**
     * Sets contains_label_id_flg
     *
     * @param bool|null $contains_label_id_flg <div lang=\"ja\">ラベルID取得フラグ</div> <div lang=\"en\">Flag of contains label ID</div>
     *
     * @return $this
     */
    public function setContainsLabelIdFlg($contains_label_id_flg)
    {
        $this->container['contains_label_id_flg'] = $contains_label_id_flg;

        return $this;
    }

    /**
     * Gets feed_ids
     *
     * @return int[]|null
     */
    public function getFeedIds()
    {
        return $this->container['feed_ids'];
    }

    /**
     * Sets feed_ids
     *
     * @param int[]|null $feed_ids <div lang=\"ja\">検索条件 : フィードID</div> <div lang=\"en\">Search Condition: Feed ID</div>
     *
     * @return $this
     */
    public function setFeedIds($feed_ids)
    {
        $this->container['feed_ids'] = $feed_ids;

        return $this;
    }

    /**
     * Gets label_ids
     *
     * @return int[]|null
     */
    public function getLabelIds()
    {
        return $this->container['label_ids'];
    }

    /**
     * Sets label_ids
     *
     * @param int[]|null $label_ids <div lang=\"ja\">検索条件 : ラベルID</div> <div lang=\"en\">Search Condition: Label ID</div>
     *
     * @return $this
     */
    public function setLabelIds($label_ids)
    {
        $this->container['label_ids'] = $label_ids;

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

        if (!is_null($number_results) && ($number_results > 500)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling CampaignServiceSelector., must be smaller than or equal to 500.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling CampaignServiceSelector., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $start_index when calling CampaignServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets user_statuses
     *
     * @return \OpenAPI\Client\Model\CampaignServiceUserStatus[]|null
     */
    public function getUserStatuses()
    {
        return $this->container['user_statuses'];
    }

    /**
     * Sets user_statuses
     *
     * @param \OpenAPI\Client\Model\CampaignServiceUserStatus[]|null $user_statuses <div lang=\"ja\">検索条件 : 取得範囲</div> <div lang=\"en\">Search Condition: Delivery status of user settings</div>
     *
     * @return $this
     */
    public function setUserStatuses($user_statuses)
    {
        $this->container['user_statuses'] = $user_statuses;

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


