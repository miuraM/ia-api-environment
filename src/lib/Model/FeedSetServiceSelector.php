<?php
/**
 * FeedSetServiceSelector
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
 * FeedSetServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;get操作の検索条件を保持するオブジェクト&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedSetServiceSelector object contains search condition of get operation.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedSetServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedSetServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'feed_id' => 'int',
        'feed_set_ids' => 'int[]',
        'include_item_count' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'feed_id' => 'int64',
        'feed_set_ids' => 'int64',
        'include_item_count' => null
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
        'feed_id' => 'feedId',
        'feed_set_ids' => 'feedSetIds',
        'include_item_count' => 'includeItemCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'feed_id' => 'setFeedId',
        'feed_set_ids' => 'setFeedSetIds',
        'include_item_count' => 'setIncludeItemCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'feed_id' => 'getFeedId',
        'feed_set_ids' => 'getFeedSetIds',
        'include_item_count' => 'getIncludeItemCount'
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
        $this->container['feed_id'] = isset($data['feed_id']) ? $data['feed_id'] : null;
        $this->container['feed_set_ids'] = isset($data['feed_set_ids']) ? $data['feed_set_ids'] : null;
        $this->container['include_item_count'] = isset($data['include_item_count']) ? $data['include_item_count'] : null;
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
        if ($this->container['feed_id'] === null) {
            $invalidProperties[] = "'feed_id' can't be null";
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
     * @param int $account_id <div lang=\"ja\">アカウントID</div> <div lang=\"en\">Account ID.</div>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets feed_id
     *
     * @return int
     */
    public function getFeedId()
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id
     *
     * @param int $feed_id <div lang=\"ja\">フィードID</div> <div lang=\"en\">Feed ID.</div>
     *
     * @return $this
     */
    public function setFeedId($feed_id)
    {
        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets feed_set_ids
     *
     * @return int[]|null
     */
    public function getFeedSetIds()
    {
        return $this->container['feed_set_ids'];
    }

    /**
     * Sets feed_set_ids
     *
     * @param int[]|null $feed_set_ids <div lang=\"ja\">商品セットID</div> <div lang=\"en\">Item Set ID.</div>
     *
     * @return $this
     */
    public function setFeedSetIds($feed_set_ids)
    {
        $this->container['feed_set_ids'] = $feed_set_ids;

        return $this;
    }

    /**
     * Gets include_item_count
     *
     * @return bool|null
     */
    public function getIncludeItemCount()
    {
        return $this->container['include_item_count'];
    }

    /**
     * Sets include_item_count
     *
     * @param bool|null $include_item_count <div lang=\"ja\"> 商品セットのアイテム件数を表示<br> trueの場合は、アイテム件数を表示<br> ※デフォルト値はfalse:表示しない。 </div> <div lang=\"en\"> Describes number of items of Item Set.<br> If true, the number of items is described.<br> ∗ Default is false: Not described. </div>
     *
     * @return $this
     */
    public function setIncludeItemCount($include_item_count)
    {
        $this->container['include_item_count'] = $include_item_count;

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


