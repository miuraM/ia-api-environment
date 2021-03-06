<?php
/**
 * FeedFtpServiceSchedule
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
 * FeedFtpServiceSchedule Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; FeedFtpServiceScheduleオブジェクトは、定期アップロードのスケジュールを表します。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; FeedFtpServiceSchedule object displays Periodic Upload schedule.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedFtpServiceSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedFtpServiceSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule_daily' => '\OpenAPI\Client\Model\FeedFtpServiceScheduleDaily',
        'schedule_hourly' => '\OpenAPI\Client\Model\FeedFtpServiceScheduleHourly',
        'schedule_type' => '\OpenAPI\Client\Model\FeedFtpServiceScheduleType',
        'schedule_weekly' => '\OpenAPI\Client\Model\FeedFtpServiceScheduleWeekly'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'schedule_daily' => null,
        'schedule_hourly' => null,
        'schedule_type' => null,
        'schedule_weekly' => null
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
        'schedule_daily' => 'scheduleDaily',
        'schedule_hourly' => 'scheduleHourly',
        'schedule_type' => 'scheduleType',
        'schedule_weekly' => 'scheduleWeekly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_daily' => 'setScheduleDaily',
        'schedule_hourly' => 'setScheduleHourly',
        'schedule_type' => 'setScheduleType',
        'schedule_weekly' => 'setScheduleWeekly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_daily' => 'getScheduleDaily',
        'schedule_hourly' => 'getScheduleHourly',
        'schedule_type' => 'getScheduleType',
        'schedule_weekly' => 'getScheduleWeekly'
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
        $this->container['schedule_daily'] = isset($data['schedule_daily']) ? $data['schedule_daily'] : null;
        $this->container['schedule_hourly'] = isset($data['schedule_hourly']) ? $data['schedule_hourly'] : null;
        $this->container['schedule_type'] = isset($data['schedule_type']) ? $data['schedule_type'] : null;
        $this->container['schedule_weekly'] = isset($data['schedule_weekly']) ? $data['schedule_weekly'] : null;
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
     * Gets schedule_daily
     *
     * @return \OpenAPI\Client\Model\FeedFtpServiceScheduleDaily|null
     */
    public function getScheduleDaily()
    {
        return $this->container['schedule_daily'];
    }

    /**
     * Sets schedule_daily
     *
     * @param \OpenAPI\Client\Model\FeedFtpServiceScheduleDaily|null $schedule_daily schedule_daily
     *
     * @return $this
     */
    public function setScheduleDaily($schedule_daily)
    {
        $this->container['schedule_daily'] = $schedule_daily;

        return $this;
    }

    /**
     * Gets schedule_hourly
     *
     * @return \OpenAPI\Client\Model\FeedFtpServiceScheduleHourly|null
     */
    public function getScheduleHourly()
    {
        return $this->container['schedule_hourly'];
    }

    /**
     * Sets schedule_hourly
     *
     * @param \OpenAPI\Client\Model\FeedFtpServiceScheduleHourly|null $schedule_hourly schedule_hourly
     *
     * @return $this
     */
    public function setScheduleHourly($schedule_hourly)
    {
        $this->container['schedule_hourly'] = $schedule_hourly;

        return $this;
    }

    /**
     * Gets schedule_type
     *
     * @return \OpenAPI\Client\Model\FeedFtpServiceScheduleType|null
     */
    public function getScheduleType()
    {
        return $this->container['schedule_type'];
    }

    /**
     * Sets schedule_type
     *
     * @param \OpenAPI\Client\Model\FeedFtpServiceScheduleType|null $schedule_type schedule_type
     *
     * @return $this
     */
    public function setScheduleType($schedule_type)
    {
        $this->container['schedule_type'] = $schedule_type;

        return $this;
    }

    /**
     * Gets schedule_weekly
     *
     * @return \OpenAPI\Client\Model\FeedFtpServiceScheduleWeekly|null
     */
    public function getScheduleWeekly()
    {
        return $this->container['schedule_weekly'];
    }

    /**
     * Sets schedule_weekly
     *
     * @param \OpenAPI\Client\Model\FeedFtpServiceScheduleWeekly|null $schedule_weekly schedule_weekly
     *
     * @return $this
     */
    public function setScheduleWeekly($schedule_weekly)
    {
        $this->container['schedule_weekly'] = $schedule_weekly;

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


