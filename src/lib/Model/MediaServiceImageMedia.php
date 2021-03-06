<?php
/**
 * MediaServiceImageMedia
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
 * MediaServiceImageMedia Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; MediaServiceImageMediaオブジェクトは、画像を格納するコンテナです。&lt;br&gt; このフィールドは、SET時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The MediaServiceImageMedia object is a container for storing image. &lt;br&gt; This field is required in SET operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MediaServiceImageMedia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MediaServiceImageMedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'media_type' => '\OpenAPI\Client\Model\MediaServiceType',
        'aspect_ratio' => 'string',
        'data' => 'string',
        'file_size' => 'int',
        'height' => 'int',
        'media_ad_format' => 'string',
        'media_file_type' => '\OpenAPI\Client\Model\MediaServiceFileType',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'media_type' => null,
        'aspect_ratio' => null,
        'data' => 'byte',
        'file_size' => 'int64',
        'height' => 'int64',
        'media_ad_format' => null,
        'media_file_type' => null,
        'width' => 'int64'
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
        'media_type' => 'mediaType',
        'aspect_ratio' => 'aspectRatio',
        'data' => 'data',
        'file_size' => 'fileSize',
        'height' => 'height',
        'media_ad_format' => 'mediaAdFormat',
        'media_file_type' => 'mediaFileType',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'media_type' => 'setMediaType',
        'aspect_ratio' => 'setAspectRatio',
        'data' => 'setData',
        'file_size' => 'setFileSize',
        'height' => 'setHeight',
        'media_ad_format' => 'setMediaAdFormat',
        'media_file_type' => 'setMediaFileType',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'media_type' => 'getMediaType',
        'aspect_ratio' => 'getAspectRatio',
        'data' => 'getData',
        'file_size' => 'getFileSize',
        'height' => 'getHeight',
        'media_ad_format' => 'getMediaAdFormat',
        'media_file_type' => 'getMediaFileType',
        'width' => 'getWidth'
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
        $this->container['media_type'] = isset($data['media_type']) ? $data['media_type'] : null;
        $this->container['aspect_ratio'] = isset($data['aspect_ratio']) ? $data['aspect_ratio'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['media_ad_format'] = isset($data['media_ad_format']) ? $data['media_ad_format'] : null;
        $this->container['media_file_type'] = isset($data['media_file_type']) ? $data['media_file_type'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * Gets media_type
     *
     * @return \OpenAPI\Client\Model\MediaServiceType|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param \OpenAPI\Client\Model\MediaServiceType|null $media_type media_type
     *
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets aspect_ratio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio
     *
     * @param string|null $aspect_ratio <div lang=\"ja\"> 画像アスペクト比の種類です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。<br> ※指定可能な値は、DictionaryServiceのgetMediaAdFormatで取得されるDictionaryServiceMediaAdFormatのaspectRatioフィールドをご確認ください。 </div> <div lang=\"en\"> The type of aspect ratio.<br> Although this field will be returned in the response, it will be ignored on input. <br> * Available values can be referred to aspectRatio field of DictionaryServiceMediaAdFormat object obtained by getMediaAdFormat operation of DictionaryService. </div>
     *
     * @return $this
     */
    public function setAspectRatio($aspect_ratio)
    {
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string|null $data <div lang=\"ja\">画像ファイルのbase64エンコードです。ADD時のみ指定可能で、GET時のレスポンスでは値は取得されません。</div> <div lang=\"en\">The image file in base64 encode. It can be specified on ADD, however no value returns on the response of GET.</div>
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int|null $file_size <div lang=\"ja\"> ファイルサイズです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> The file size of image. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height <div lang=\"ja\"> 縦の長さです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> The height of image. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets media_ad_format
     *
     * @return string|null
     */
    public function getMediaAdFormat()
    {
        return $this->container['media_ad_format'];
    }

    /**
     * Sets media_ad_format
     *
     * @param string|null $media_ad_format <div lang=\"ja\"> 画像フォーマットの種類です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。<br> ※指定可能な値は、DictionaryServiceのgetMediaAdFormatで取得されるDictionaryServiceMediaAdFormatのadFormatフィールドをご確認ください。 </div> <div lang=\"en\"> The type of image format.<br> Although this field will be returned in the response, it will be ignored on input. <br> * Available values can be referred to adFormat field of DictionaryServiceMediaAdFormat object obtained by getMediaAdFormat operation of DictionaryService. </div>
     *
     * @return $this
     */
    public function setMediaAdFormat($media_ad_format)
    {
        $this->container['media_ad_format'] = $media_ad_format;

        return $this;
    }

    /**
     * Gets media_file_type
     *
     * @return \OpenAPI\Client\Model\MediaServiceFileType|null
     */
    public function getMediaFileType()
    {
        return $this->container['media_file_type'];
    }

    /**
     * Sets media_file_type
     *
     * @param \OpenAPI\Client\Model\MediaServiceFileType|null $media_file_type media_file_type
     *
     * @return $this
     */
    public function setMediaFileType($media_file_type)
    {
        $this->container['media_file_type'] = $media_file_type;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width <div lang=\"ja\"> 横幅です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> The width of image.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


