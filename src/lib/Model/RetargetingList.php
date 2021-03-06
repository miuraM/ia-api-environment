<?php
/**
 * RetargetingList
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
 * RetargetingList Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RetargetingListオブジェクトは、サイトリターゲティング のターゲットリストの情報を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;RetargetingList object diplays the target list for site retargeting.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'delivery_status' => '\OpenAPI\Client\Model\RetargetingListServiceDeliveryStatus',
        'description' => 'string',
        'reach' => 'int',
        'target_list' => '\OpenAPI\Client\Model\RetargetingListServiceTargetList',
        'target_list_id' => 'int',
        'target_list_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'delivery_status' => null,
        'description' => null,
        'reach' => 'int64',
        'target_list' => null,
        'target_list_id' => 'int64',
        'target_list_name' => null
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
        'delivery_status' => 'deliveryStatus',
        'description' => 'description',
        'reach' => 'reach',
        'target_list' => 'targetList',
        'target_list_id' => 'targetListId',
        'target_list_name' => 'targetListName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'delivery_status' => 'setDeliveryStatus',
        'description' => 'setDescription',
        'reach' => 'setReach',
        'target_list' => 'setTargetList',
        'target_list_id' => 'setTargetListId',
        'target_list_name' => 'setTargetListName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'delivery_status' => 'getDeliveryStatus',
        'description' => 'getDescription',
        'reach' => 'getReach',
        'target_list' => 'getTargetList',
        'target_list_id' => 'getTargetListId',
        'target_list_name' => 'getTargetListName'
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
        $this->container['delivery_status'] = isset($data['delivery_status']) ? $data['delivery_status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reach'] = isset($data['reach']) ? $data['reach'] : null;
        $this->container['target_list'] = isset($data['target_list']) ? $data['target_list'] : null;
        $this->container['target_list_id'] = isset($data['target_list_id']) ? $data['target_list_id'] : null;
        $this->container['target_list_name'] = isset($data['target_list_name']) ? $data['target_list_name'] : null;
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
     * @param int|null $account_id <div lang=\"ja\"> アカウントIDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Account ID.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets delivery_status
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceDeliveryStatus|null
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceDeliveryStatus|null $delivery_status delivery_status
     *
     * @return $this
     */
    public function setDeliveryStatus($delivery_status)
    {
        $this->container['delivery_status'] = $delivery_status;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description <div lang=\"ja\"> ターゲットリストの説明です。<br> このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時に無視されます。 </div> <div lang=\"en\"> Description of Target List.<br> This field is optional in ADD and SET operation, and will be ignored in REMOVE operation. </div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets reach
     *
     * @return int|null
     */
    public function getReach()
    {
        return $this->container['reach'];
    }

    /**
     * Sets reach
     *
     * @param int|null $reach <div lang=\"ja\"> リーチ数です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Number of reaches.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setReach($reach)
    {
        $this->container['reach'] = $reach;

        return $this;
    }

    /**
     * Gets target_list
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceTargetList|null
     */
    public function getTargetList()
    {
        return $this->container['target_list'];
    }

    /**
     * Sets target_list
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceTargetList|null $target_list target_list
     *
     * @return $this
     */
    public function setTargetList($target_list)
    {
        $this->container['target_list'] = $target_list;

        return $this;
    }

    /**
     * Gets target_list_id
     *
     * @return int|null
     */
    public function getTargetListId()
    {
        return $this->container['target_list_id'];
    }

    /**
     * Sets target_list_id
     *
     * @param int|null $target_list_id <div lang=\"ja\"> ターゲットリストIDです。<br> このフィールドは、SETおよびREMOVE時に必須となり、ADD時には無視されます。 </div> <div lang=\"en\"> Target List ID.<br> This field is required in SET and REMOVE operation, and will be ignored in ADD operation. </div>
     *
     * @return $this
     */
    public function setTargetListId($target_list_id)
    {
        $this->container['target_list_id'] = $target_list_id;

        return $this;
    }

    /**
     * Gets target_list_name
     *
     * @return string|null
     */
    public function getTargetListName()
    {
        return $this->container['target_list_name'];
    }

    /**
     * Sets target_list_name
     *
     * @param string|null $target_list_name <div lang=\"ja\"> ターゲットリスト名です。<br> このフィールドは、ADD時は必須、SET時は省略可能となり、REMOVE時は無視されます。 </div> <div lang=\"en\"> Target List name.<br> This field is required in ADD operation, optional in SET operation, and will be ignored in REMOVE operation. </div>
     *
     * @return $this
     */
    public function setTargetListName($target_list_name)
    {
        $this->container['target_list_name'] = $target_list_name;

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


