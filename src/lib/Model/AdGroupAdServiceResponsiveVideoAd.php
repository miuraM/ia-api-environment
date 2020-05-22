<?php
/**
 * AdGroupAdServiceResponsiveVideoAd
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
 * AdGroupAdServiceResponsiveVideoAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupAdServiceResponsiveVideoAdオブジェクトは、動画広告の情報を表します。&lt;br&gt; このフィールドは、省略可能となります。&lt;br&gt; ※ADD時、adTypeがRESPONSIVE_VIDEO_ADの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupAdServiceResponsiveVideoAd object displays Video Ads information.&lt;br&gt; This field is optional.&lt;br&gt; *If adType is RESPONSIVE_VIDEO_AD, this field is required in ADD operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceResponsiveVideoAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceResponsiveVideoAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'button_text' => '\OpenAPI\Client\Model\AdGroupAdServiceButtonText',
        'description' => 'string',
        'display_url' => 'string',
        'headline' => 'string',
        'is_remove_video10_sec_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_video25_percent_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_video3_sec_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_video50_percent_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_video75_percent_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_video_complete_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_video_start_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'logo_media_id' => 'int',
        'principal' => 'string',
        'thumbnail_media_id' => 'int',
        'url' => 'string',
        'video10_sec_beacon_urls' => 'string[]',
        'video25_percent_beacon_urls' => 'string[]',
        'video3_sec_beacon_urls' => 'string[]',
        'video50_percent_beacon_urls' => 'string[]',
        'video75_percent_beacon_urls' => 'string[]',
        'video_complete_beacon_urls' => 'string[]',
        'video_start_beacon_urls' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'button_text' => null,
        'description' => null,
        'display_url' => null,
        'headline' => null,
        'is_remove_video10_sec_beacon_urls' => null,
        'is_remove_video25_percent_beacon_urls' => null,
        'is_remove_video3_sec_beacon_urls' => null,
        'is_remove_video50_percent_beacon_urls' => null,
        'is_remove_video75_percent_beacon_urls' => null,
        'is_remove_video_complete_beacon_urls' => null,
        'is_remove_video_start_beacon_urls' => null,
        'logo_media_id' => 'int64',
        'principal' => null,
        'thumbnail_media_id' => 'int64',
        'url' => null,
        'video10_sec_beacon_urls' => null,
        'video25_percent_beacon_urls' => null,
        'video3_sec_beacon_urls' => null,
        'video50_percent_beacon_urls' => null,
        'video75_percent_beacon_urls' => null,
        'video_complete_beacon_urls' => null,
        'video_start_beacon_urls' => null
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
        'button_text' => 'buttonText',
        'description' => 'description',
        'display_url' => 'displayUrl',
        'headline' => 'headline',
        'is_remove_video10_sec_beacon_urls' => 'isRemoveVideo10SecBeaconUrls',
        'is_remove_video25_percent_beacon_urls' => 'isRemoveVideo25PercentBeaconUrls',
        'is_remove_video3_sec_beacon_urls' => 'isRemoveVideo3SecBeaconUrls',
        'is_remove_video50_percent_beacon_urls' => 'isRemoveVideo50PercentBeaconUrls',
        'is_remove_video75_percent_beacon_urls' => 'isRemoveVideo75PercentBeaconUrls',
        'is_remove_video_complete_beacon_urls' => 'isRemoveVideoCompleteBeaconUrls',
        'is_remove_video_start_beacon_urls' => 'isRemoveVideoStartBeaconUrls',
        'logo_media_id' => 'logoMediaId',
        'principal' => 'principal',
        'thumbnail_media_id' => 'thumbnailMediaId',
        'url' => 'url',
        'video10_sec_beacon_urls' => 'video10SecBeaconUrls',
        'video25_percent_beacon_urls' => 'video25PercentBeaconUrls',
        'video3_sec_beacon_urls' => 'video3SecBeaconUrls',
        'video50_percent_beacon_urls' => 'video50PercentBeaconUrls',
        'video75_percent_beacon_urls' => 'video75PercentBeaconUrls',
        'video_complete_beacon_urls' => 'videoCompleteBeaconUrls',
        'video_start_beacon_urls' => 'videoStartBeaconUrls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'button_text' => 'setButtonText',
        'description' => 'setDescription',
        'display_url' => 'setDisplayUrl',
        'headline' => 'setHeadline',
        'is_remove_video10_sec_beacon_urls' => 'setIsRemoveVideo10SecBeaconUrls',
        'is_remove_video25_percent_beacon_urls' => 'setIsRemoveVideo25PercentBeaconUrls',
        'is_remove_video3_sec_beacon_urls' => 'setIsRemoveVideo3SecBeaconUrls',
        'is_remove_video50_percent_beacon_urls' => 'setIsRemoveVideo50PercentBeaconUrls',
        'is_remove_video75_percent_beacon_urls' => 'setIsRemoveVideo75PercentBeaconUrls',
        'is_remove_video_complete_beacon_urls' => 'setIsRemoveVideoCompleteBeaconUrls',
        'is_remove_video_start_beacon_urls' => 'setIsRemoveVideoStartBeaconUrls',
        'logo_media_id' => 'setLogoMediaId',
        'principal' => 'setPrincipal',
        'thumbnail_media_id' => 'setThumbnailMediaId',
        'url' => 'setUrl',
        'video10_sec_beacon_urls' => 'setVideo10SecBeaconUrls',
        'video25_percent_beacon_urls' => 'setVideo25PercentBeaconUrls',
        'video3_sec_beacon_urls' => 'setVideo3SecBeaconUrls',
        'video50_percent_beacon_urls' => 'setVideo50PercentBeaconUrls',
        'video75_percent_beacon_urls' => 'setVideo75PercentBeaconUrls',
        'video_complete_beacon_urls' => 'setVideoCompleteBeaconUrls',
        'video_start_beacon_urls' => 'setVideoStartBeaconUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'button_text' => 'getButtonText',
        'description' => 'getDescription',
        'display_url' => 'getDisplayUrl',
        'headline' => 'getHeadline',
        'is_remove_video10_sec_beacon_urls' => 'getIsRemoveVideo10SecBeaconUrls',
        'is_remove_video25_percent_beacon_urls' => 'getIsRemoveVideo25PercentBeaconUrls',
        'is_remove_video3_sec_beacon_urls' => 'getIsRemoveVideo3SecBeaconUrls',
        'is_remove_video50_percent_beacon_urls' => 'getIsRemoveVideo50PercentBeaconUrls',
        'is_remove_video75_percent_beacon_urls' => 'getIsRemoveVideo75PercentBeaconUrls',
        'is_remove_video_complete_beacon_urls' => 'getIsRemoveVideoCompleteBeaconUrls',
        'is_remove_video_start_beacon_urls' => 'getIsRemoveVideoStartBeaconUrls',
        'logo_media_id' => 'getLogoMediaId',
        'principal' => 'getPrincipal',
        'thumbnail_media_id' => 'getThumbnailMediaId',
        'url' => 'getUrl',
        'video10_sec_beacon_urls' => 'getVideo10SecBeaconUrls',
        'video25_percent_beacon_urls' => 'getVideo25PercentBeaconUrls',
        'video3_sec_beacon_urls' => 'getVideo3SecBeaconUrls',
        'video50_percent_beacon_urls' => 'getVideo50PercentBeaconUrls',
        'video75_percent_beacon_urls' => 'getVideo75PercentBeaconUrls',
        'video_complete_beacon_urls' => 'getVideoCompleteBeaconUrls',
        'video_start_beacon_urls' => 'getVideoStartBeaconUrls'
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
        $this->container['button_text'] = isset($data['button_text']) ? $data['button_text'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_url'] = isset($data['display_url']) ? $data['display_url'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['is_remove_video10_sec_beacon_urls'] = isset($data['is_remove_video10_sec_beacon_urls']) ? $data['is_remove_video10_sec_beacon_urls'] : null;
        $this->container['is_remove_video25_percent_beacon_urls'] = isset($data['is_remove_video25_percent_beacon_urls']) ? $data['is_remove_video25_percent_beacon_urls'] : null;
        $this->container['is_remove_video3_sec_beacon_urls'] = isset($data['is_remove_video3_sec_beacon_urls']) ? $data['is_remove_video3_sec_beacon_urls'] : null;
        $this->container['is_remove_video50_percent_beacon_urls'] = isset($data['is_remove_video50_percent_beacon_urls']) ? $data['is_remove_video50_percent_beacon_urls'] : null;
        $this->container['is_remove_video75_percent_beacon_urls'] = isset($data['is_remove_video75_percent_beacon_urls']) ? $data['is_remove_video75_percent_beacon_urls'] : null;
        $this->container['is_remove_video_complete_beacon_urls'] = isset($data['is_remove_video_complete_beacon_urls']) ? $data['is_remove_video_complete_beacon_urls'] : null;
        $this->container['is_remove_video_start_beacon_urls'] = isset($data['is_remove_video_start_beacon_urls']) ? $data['is_remove_video_start_beacon_urls'] : null;
        $this->container['logo_media_id'] = isset($data['logo_media_id']) ? $data['logo_media_id'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['thumbnail_media_id'] = isset($data['thumbnail_media_id']) ? $data['thumbnail_media_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['video10_sec_beacon_urls'] = isset($data['video10_sec_beacon_urls']) ? $data['video10_sec_beacon_urls'] : null;
        $this->container['video25_percent_beacon_urls'] = isset($data['video25_percent_beacon_urls']) ? $data['video25_percent_beacon_urls'] : null;
        $this->container['video3_sec_beacon_urls'] = isset($data['video3_sec_beacon_urls']) ? $data['video3_sec_beacon_urls'] : null;
        $this->container['video50_percent_beacon_urls'] = isset($data['video50_percent_beacon_urls']) ? $data['video50_percent_beacon_urls'] : null;
        $this->container['video75_percent_beacon_urls'] = isset($data['video75_percent_beacon_urls']) ? $data['video75_percent_beacon_urls'] : null;
        $this->container['video_complete_beacon_urls'] = isset($data['video_complete_beacon_urls']) ? $data['video_complete_beacon_urls'] : null;
        $this->container['video_start_beacon_urls'] = isset($data['video_start_beacon_urls']) ? $data['video_start_beacon_urls'] : null;
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
     * Gets button_text
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceButtonText|null
     */
    public function getButtonText()
    {
        return $this->container['button_text'];
    }

    /**
     * Sets button_text
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceButtonText|null $button_text button_text
     *
     * @return $this
     */
    public function setButtonText($button_text)
    {
        $this->container['button_text'] = $button_text;

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
     * @param string|null $description <div lang=\"ja\"> 広告の説明文です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Ad description.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_url
     *
     * @return string|null
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string|null $display_url <div lang=\"ja\"> 表示URLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ・標準キャンペーンの場合<br> &nbsp;&nbsp;ADDでは入力必須です。SETでの入力は任意です。<br> ・アプリキャンペーンの場合<br> &nbsp;&nbsp;ADD、SETのどちらも指定できません。<br> &nbsp;&nbsp;※アプリキャンペーンで指定したDeviceOsTypeに基づき、以下のいずれかのURLが自動で設定されます。<br> &nbsp;&nbsp;&nbsp;&nbsp;- iOSの場合：itunes.apple.com<br> &nbsp;&nbsp;&nbsp;&nbsp;- Androidの場合：play.google.com<br> </div> <div lang=\"en\"> Display URL.<br> This field is optional in ADD and SET operation.<br> - Standard campaign:<br> &nbsp;&nbsp;Required for ADD, optional for SET.<br> - Mobile app campaign:<br> &nbsp;&nbsp;Not allowed for ADD and SET.<br> &nbsp;&nbsp;*Based on DeviceOsType specified on Mobile app campaign, any of the following URLs will be automatically set.<br> &nbsp;&nbsp;&nbsp;&nbsp;- For iOS : itunes.apple.com<br> &nbsp;&nbsp;&nbsp;&nbsp;- For Android : play.google.com<br> </div>
     *
     * @return $this
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline <div lang=\"ja\"> 広告のタイトルです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Ad title.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets is_remove_video10_sec_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo10SecBeaconUrls()
    {
        return $this->container['is_remove_video10_sec_beacon_urls'];
    }

    /**
     * Sets is_remove_video10_sec_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video10_sec_beacon_urls is_remove_video10_sec_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideo10SecBeaconUrls($is_remove_video10_sec_beacon_urls)
    {
        $this->container['is_remove_video10_sec_beacon_urls'] = $is_remove_video10_sec_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video25_percent_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo25PercentBeaconUrls()
    {
        return $this->container['is_remove_video25_percent_beacon_urls'];
    }

    /**
     * Sets is_remove_video25_percent_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video25_percent_beacon_urls is_remove_video25_percent_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideo25PercentBeaconUrls($is_remove_video25_percent_beacon_urls)
    {
        $this->container['is_remove_video25_percent_beacon_urls'] = $is_remove_video25_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video3_sec_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo3SecBeaconUrls()
    {
        return $this->container['is_remove_video3_sec_beacon_urls'];
    }

    /**
     * Sets is_remove_video3_sec_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video3_sec_beacon_urls is_remove_video3_sec_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideo3SecBeaconUrls($is_remove_video3_sec_beacon_urls)
    {
        $this->container['is_remove_video3_sec_beacon_urls'] = $is_remove_video3_sec_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video50_percent_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo50PercentBeaconUrls()
    {
        return $this->container['is_remove_video50_percent_beacon_urls'];
    }

    /**
     * Sets is_remove_video50_percent_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video50_percent_beacon_urls is_remove_video50_percent_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideo50PercentBeaconUrls($is_remove_video50_percent_beacon_urls)
    {
        $this->container['is_remove_video50_percent_beacon_urls'] = $is_remove_video50_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video75_percent_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo75PercentBeaconUrls()
    {
        return $this->container['is_remove_video75_percent_beacon_urls'];
    }

    /**
     * Sets is_remove_video75_percent_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video75_percent_beacon_urls is_remove_video75_percent_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideo75PercentBeaconUrls($is_remove_video75_percent_beacon_urls)
    {
        $this->container['is_remove_video75_percent_beacon_urls'] = $is_remove_video75_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video_complete_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideoCompleteBeaconUrls()
    {
        return $this->container['is_remove_video_complete_beacon_urls'];
    }

    /**
     * Sets is_remove_video_complete_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video_complete_beacon_urls is_remove_video_complete_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideoCompleteBeaconUrls($is_remove_video_complete_beacon_urls)
    {
        $this->container['is_remove_video_complete_beacon_urls'] = $is_remove_video_complete_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video_start_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideoStartBeaconUrls()
    {
        return $this->container['is_remove_video_start_beacon_urls'];
    }

    /**
     * Sets is_remove_video_start_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_video_start_beacon_urls is_remove_video_start_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveVideoStartBeaconUrls($is_remove_video_start_beacon_urls)
    {
        $this->container['is_remove_video_start_beacon_urls'] = $is_remove_video_start_beacon_urls;

        return $this;
    }

    /**
     * Gets logo_media_id
     *
     * @return int|null
     */
    public function getLogoMediaId()
    {
        return $this->container['logo_media_id'];
    }

    /**
     * Sets logo_media_id
     *
     * @param int|null $logo_media_id <div lang=\"ja\"> ロゴの画像IDです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Logo image ID.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setLogoMediaId($logo_media_id)
    {
        $this->container['logo_media_id'] = $logo_media_id;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return string|null
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param string|null $principal <div lang=\"ja\"> 広告の主体者表記です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Advertiser Indication of the ad.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets thumbnail_media_id
     *
     * @return int|null
     */
    public function getThumbnailMediaId()
    {
        return $this->container['thumbnail_media_id'];
    }

    /**
     * Sets thumbnail_media_id
     *
     * @param int|null $thumbnail_media_id <div lang=\"ja\"> サムネイルIDです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Thumbnail ID.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setThumbnailMediaId($thumbnail_media_id)
    {
        $this->container['thumbnail_media_id'] = $thumbnail_media_id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url <div lang=\"ja\"> リンク先URLです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Destination URL.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets video10_sec_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo10SecBeaconUrls()
    {
        return $this->container['video10_sec_beacon_urls'];
    }

    /**
     * Sets video10_sec_beacon_urls
     *
     * @param string[]|null $video10_sec_beacon_urls <div lang=\"ja\"> 10秒視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Viewing beacon URL (10 seconds).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideo10SecBeaconUrls($video10_sec_beacon_urls)
    {
        $this->container['video10_sec_beacon_urls'] = $video10_sec_beacon_urls;

        return $this;
    }

    /**
     * Gets video25_percent_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo25PercentBeaconUrls()
    {
        return $this->container['video25_percent_beacon_urls'];
    }

    /**
     * Sets video25_percent_beacon_urls
     *
     * @param string[]|null $video25_percent_beacon_urls <div lang=\"ja\"> 25％再生視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Playback viewing beacon URL (25%).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideo25PercentBeaconUrls($video25_percent_beacon_urls)
    {
        $this->container['video25_percent_beacon_urls'] = $video25_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets video3_sec_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo3SecBeaconUrls()
    {
        return $this->container['video3_sec_beacon_urls'];
    }

    /**
     * Sets video3_sec_beacon_urls
     *
     * @param string[]|null $video3_sec_beacon_urls <div lang=\"ja\"> 3秒視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Viewing beacon URL (3 seconds).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideo3SecBeaconUrls($video3_sec_beacon_urls)
    {
        $this->container['video3_sec_beacon_urls'] = $video3_sec_beacon_urls;

        return $this;
    }

    /**
     * Gets video50_percent_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo50PercentBeaconUrls()
    {
        return $this->container['video50_percent_beacon_urls'];
    }

    /**
     * Sets video50_percent_beacon_urls
     *
     * @param string[]|null $video50_percent_beacon_urls <div lang=\"ja\"> 50％再生視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Playback viewing beacon URL (50%).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideo50PercentBeaconUrls($video50_percent_beacon_urls)
    {
        $this->container['video50_percent_beacon_urls'] = $video50_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets video75_percent_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo75PercentBeaconUrls()
    {
        return $this->container['video75_percent_beacon_urls'];
    }

    /**
     * Sets video75_percent_beacon_urls
     *
     * @param string[]|null $video75_percent_beacon_urls <div lang=\"ja\"> 75％再生視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Playback viewing beacon URL (75%).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideo75PercentBeaconUrls($video75_percent_beacon_urls)
    {
        $this->container['video75_percent_beacon_urls'] = $video75_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets video_complete_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideoCompleteBeaconUrls()
    {
        return $this->container['video_complete_beacon_urls'];
    }

    /**
     * Sets video_complete_beacon_urls
     *
     * @param string[]|null $video_complete_beacon_urls <div lang=\"ja\"> 再生完了ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Viewing beacon URL (complete).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideoCompleteBeaconUrls($video_complete_beacon_urls)
    {
        $this->container['video_complete_beacon_urls'] = $video_complete_beacon_urls;

        return $this;
    }

    /**
     * Gets video_start_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideoStartBeaconUrls()
    {
        return $this->container['video_start_beacon_urls'];
    }

    /**
     * Sets video_start_beacon_urls
     *
     * @param string[]|null $video_start_beacon_urls <div lang=\"ja\"> 再生開始ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Viewing beacon URL (start).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return $this
     */
    public function setVideoStartBeaconUrls($video_start_beacon_urls)
    {
        $this->container['video_start_beacon_urls'] = $video_start_beacon_urls;

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


