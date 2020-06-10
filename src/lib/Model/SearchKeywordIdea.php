<?php
/**
 * SearchKeywordIdea
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
 * SearchKeywordIdea Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;SearchKeywordIdeaオブジェクトは、サーチターゲティング対象キーワードです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;SearchKeywordIdea object is keyword for search targeting.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchKeywordIdea implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchKeywordIdea';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'desktop_search_volume' => 'int',
        'release_date' => 'string',
        'search_keyword' => 'string',
        'search_keyword_id' => 'int',
        'smart_phone_search_volume' => 'int',
        'tablet_search_volume' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'desktop_search_volume' => 'int64',
        'release_date' => null,
        'search_keyword' => null,
        'search_keyword_id' => 'int64',
        'smart_phone_search_volume' => 'int64',
        'tablet_search_volume' => 'int64'
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
        'desktop_search_volume' => 'desktopSearchVolume',
        'release_date' => 'releaseDate',
        'search_keyword' => 'searchKeyword',
        'search_keyword_id' => 'searchKeywordId',
        'smart_phone_search_volume' => 'smartPhoneSearchVolume',
        'tablet_search_volume' => 'tabletSearchVolume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'desktop_search_volume' => 'setDesktopSearchVolume',
        'release_date' => 'setReleaseDate',
        'search_keyword' => 'setSearchKeyword',
        'search_keyword_id' => 'setSearchKeywordId',
        'smart_phone_search_volume' => 'setSmartPhoneSearchVolume',
        'tablet_search_volume' => 'setTabletSearchVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'desktop_search_volume' => 'getDesktopSearchVolume',
        'release_date' => 'getReleaseDate',
        'search_keyword' => 'getSearchKeyword',
        'search_keyword_id' => 'getSearchKeywordId',
        'smart_phone_search_volume' => 'getSmartPhoneSearchVolume',
        'tablet_search_volume' => 'getTabletSearchVolume'
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
        $this->container['desktop_search_volume'] = isset($data['desktop_search_volume']) ? $data['desktop_search_volume'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['search_keyword'] = isset($data['search_keyword']) ? $data['search_keyword'] : null;
        $this->container['search_keyword_id'] = isset($data['search_keyword_id']) ? $data['search_keyword_id'] : null;
        $this->container['smart_phone_search_volume'] = isset($data['smart_phone_search_volume']) ? $data['smart_phone_search_volume'] : null;
        $this->container['tablet_search_volume'] = isset($data['tablet_search_volume']) ? $data['tablet_search_volume'] : null;
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
     * Gets desktop_search_volume
     *
     * @return int|null
     */
    public function getDesktopSearchVolume()
    {
        return $this->container['desktop_search_volume'];
    }

    /**
     * Sets desktop_search_volume
     *
     * @param int|null $desktop_search_volume <div lang=\"ja\"> PCでのリーチ数です。<br> ※1000件未満の場合は<br> 0が取得されます。 </div> <div lang=\"en\"> Reach numbers on PC.<br> *If it is less than 1000 times, the value &#34;0&#34; will be responded. </div>
     *
     * @return $this
     */
    public function setDesktopSearchVolume($desktop_search_volume)
    {
        $this->container['desktop_search_volume'] = $desktop_search_volume;

        return $this;
    }

    /**
     * Gets release_date
     *
     * @return string|null
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param string|null $release_date <div lang=\"ja\">KW追加日(yyyy㎜dd)です。</div> <div lang=\"en\"> Additional date of keyword.<br> (yyyy㎜dd) </div>
     *
     * @return $this
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets search_keyword
     *
     * @return string|null
     */
    public function getSearchKeyword()
    {
        return $this->container['search_keyword'];
    }

    /**
     * Sets search_keyword
     *
     * @param string|null $search_keyword <div lang=\"ja\">サーチキーワードです。</div> <div lang=\"en\">Search keyword.</div>
     *
     * @return $this
     */
    public function setSearchKeyword($search_keyword)
    {
        $this->container['search_keyword'] = $search_keyword;

        return $this;
    }

    /**
     * Gets search_keyword_id
     *
     * @return int|null
     */
    public function getSearchKeywordId()
    {
        return $this->container['search_keyword_id'];
    }

    /**
     * Sets search_keyword_id
     *
     * @param int|null $search_keyword_id <div lang=\"ja\">サーチキーワードIDです。</div> <div lang=\"en\">Search keyword ID.</div>
     *
     * @return $this
     */
    public function setSearchKeywordId($search_keyword_id)
    {
        $this->container['search_keyword_id'] = $search_keyword_id;

        return $this;
    }

    /**
     * Gets smart_phone_search_volume
     *
     * @return int|null
     */
    public function getSmartPhoneSearchVolume()
    {
        return $this->container['smart_phone_search_volume'];
    }

    /**
     * Sets smart_phone_search_volume
     *
     * @param int|null $smart_phone_search_volume <div lang=\"ja\"> スマートフォンでのリーチ数です。<br> ※1000件未満の場合は<br> 0が取得されます。 </div> <div lang=\"en\"> Reach numbers on Smartphone.<br> *If it is less than 1000 times, the value &#34;0&#34; will be responded. </div>
     *
     * @return $this
     */
    public function setSmartPhoneSearchVolume($smart_phone_search_volume)
    {
        $this->container['smart_phone_search_volume'] = $smart_phone_search_volume;

        return $this;
    }

    /**
     * Gets tablet_search_volume
     *
     * @return int|null
     */
    public function getTabletSearchVolume()
    {
        return $this->container['tablet_search_volume'];
    }

    /**
     * Sets tablet_search_volume
     *
     * @param int|null $tablet_search_volume <div lang=\"ja\"> タブレットでのリーチ数です。<br> ※1000件未満の場合は<br> 0が取得されます。 </div> <div lang=\"en\"> Reach numbers on Tablet.<br> *If it is less than 1000 times, the value &#34;0&#34; will be responded. </div>
     *
     * @return $this
     */
    public function setTabletSearchVolume($tablet_search_volume)
    {
        $this->container['tablet_search_volume'] = $tablet_search_volume;

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

