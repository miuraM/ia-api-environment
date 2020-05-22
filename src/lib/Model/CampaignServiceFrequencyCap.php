<?php
/**
 * CampaignServiceFrequencyCap
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
 * CampaignServiceFrequencyCap Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; CampaignServiceFrequencyCapは、フリクエンシー制御を表します。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時に無視されます。&lt;br&gt; ※ADDおよびSET時、目的ありの場合は設定不可となります。&lt;br&gt; ※ADD時は全ての項目の指定が必須です。&lt;br&gt; ※SET時は更新する項目のみのリクエストが可能です。&lt;br&gt; ※フリークエンシーキャップの解除方法は、以下の通りです： &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; CampaignServiceFrequencyCap object describes frequency restriction.&lt;br&gt; This field is optional in ADD and SET operation, and will be ignored in REMOVE operation. &lt;br&gt; *In ADD and SET operation, this field cannot be set for campaigns with campaign goal. &lt;br&gt; *All items must be specified in ADD operation.&lt;br&gt; *Only update items can be requested in SET operation.&lt;br&gt; *Method to remove the frequency cap: &lt;/div&gt; &lt;code&gt; {   \&quot;frequencyCap\&quot;: {     \&quot;impression\&quot;: 0   } } &lt;/code&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceFrequencyCap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceFrequencyCap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'frequency_level' => '\OpenAPI\Client\Model\CampaignServiceFrequencyLevel',
        'frequency_time_unit' => '\OpenAPI\Client\Model\CampaignServiceFrequencyTimeUnit',
        'impression' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'frequency_level' => null,
        'frequency_time_unit' => null,
        'impression' => 'int64'
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
        'frequency_level' => 'frequencyLevel',
        'frequency_time_unit' => 'frequencyTimeUnit',
        'impression' => 'impression'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'frequency_level' => 'setFrequencyLevel',
        'frequency_time_unit' => 'setFrequencyTimeUnit',
        'impression' => 'setImpression'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'frequency_level' => 'getFrequencyLevel',
        'frequency_time_unit' => 'getFrequencyTimeUnit',
        'impression' => 'getImpression'
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
        $this->container['frequency_level'] = isset($data['frequency_level']) ? $data['frequency_level'] : null;
        $this->container['frequency_time_unit'] = isset($data['frequency_time_unit']) ? $data['frequency_time_unit'] : null;
        $this->container['impression'] = isset($data['impression']) ? $data['impression'] : null;
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
     * Gets frequency_level
     *
     * @return \OpenAPI\Client\Model\CampaignServiceFrequencyLevel|null
     */
    public function getFrequencyLevel()
    {
        return $this->container['frequency_level'];
    }

    /**
     * Sets frequency_level
     *
     * @param \OpenAPI\Client\Model\CampaignServiceFrequencyLevel|null $frequency_level frequency_level
     *
     * @return $this
     */
    public function setFrequencyLevel($frequency_level)
    {
        $this->container['frequency_level'] = $frequency_level;

        return $this;
    }

    /**
     * Gets frequency_time_unit
     *
     * @return \OpenAPI\Client\Model\CampaignServiceFrequencyTimeUnit|null
     */
    public function getFrequencyTimeUnit()
    {
        return $this->container['frequency_time_unit'];
    }

    /**
     * Sets frequency_time_unit
     *
     * @param \OpenAPI\Client\Model\CampaignServiceFrequencyTimeUnit|null $frequency_time_unit frequency_time_unit
     *
     * @return $this
     */
    public function setFrequencyTimeUnit($frequency_time_unit)
    {
        $this->container['frequency_time_unit'] = $frequency_time_unit;

        return $this;
    }

    /**
     * Gets impression
     *
     * @return int|null
     */
    public function getImpression()
    {
        return $this->container['impression'];
    }

    /**
     * Sets impression
     *
     * @param int|null $impression <div lang=\"ja\"> 同一ユーザに対する広告の最大インプレッション数です。<br> このフィールドは、ADDおよびSET時に省略可能となります。 </div> <div lang=\"en\"> Maximum Number of Ad Impressions to Unique User.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setImpression($impression)
    {
        $this->container['impression'] = $impression;

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


