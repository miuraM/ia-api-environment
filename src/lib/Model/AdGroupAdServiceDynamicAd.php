<?php
/**
 * AdGroupAdServiceDynamicAd
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
 * AdGroupAdServiceDynamicAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupAdServiceDynamicAdオブジェクトは、動的ディスプレイ広告の情報を表します。&lt;br&gt; このフィールドは、省略可能となります。&lt;br&gt; ※ADD時、adTypeがDYNAMIC_ADの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupAdServiceDynamicAd object describes information regarding dynamic ads for display.&lt;br&gt; This field is optional.&lt;br&gt; *If adType is DYNAMIC_AD, this field is required in ADD operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceDynamicAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceDynamicAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand_color' => 'string',
        'button_text' => '\OpenAPI\Client\Model\AdGroupAdServiceButtonText',
        'campaign_banner_media_id' => 'int',
        'campaign_banner_media_id2' => 'int',
        'campaign_banner_media_id3' => 'int',
        'campaign_banner_media_id4' => 'int',
        'campaign_banner_url' => 'string',
        'display_url' => 'string',
        'is_remove_campaign_banner_media_id' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_campaign_banner_media_id2' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_campaign_banner_media_id3' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_campaign_banner_media_id4' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_campaign_banner_url' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'logo_media_id' => 'int',
        'logo_media_id2' => 'int',
        'logo_media_id3' => 'int',
        'prefix' => 'string',
        'principal' => 'string',
        'suffix' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'brand_color' => null,
        'button_text' => null,
        'campaign_banner_media_id' => 'int64',
        'campaign_banner_media_id2' => 'int64',
        'campaign_banner_media_id3' => 'int64',
        'campaign_banner_media_id4' => 'int64',
        'campaign_banner_url' => null,
        'display_url' => null,
        'is_remove_campaign_banner_media_id' => null,
        'is_remove_campaign_banner_media_id2' => null,
        'is_remove_campaign_banner_media_id3' => null,
        'is_remove_campaign_banner_media_id4' => null,
        'is_remove_campaign_banner_url' => null,
        'logo_media_id' => 'int64',
        'logo_media_id2' => 'int64',
        'logo_media_id3' => 'int64',
        'prefix' => null,
        'principal' => null,
        'suffix' => null,
        'url' => null
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
        'brand_color' => 'brandColor',
        'button_text' => 'buttonText',
        'campaign_banner_media_id' => 'campaignBannerMediaId',
        'campaign_banner_media_id2' => 'campaignBannerMediaId2',
        'campaign_banner_media_id3' => 'campaignBannerMediaId3',
        'campaign_banner_media_id4' => 'campaignBannerMediaId4',
        'campaign_banner_url' => 'campaignBannerUrl',
        'display_url' => 'displayUrl',
        'is_remove_campaign_banner_media_id' => 'isRemoveCampaignBannerMediaId',
        'is_remove_campaign_banner_media_id2' => 'isRemoveCampaignBannerMediaId2',
        'is_remove_campaign_banner_media_id3' => 'isRemoveCampaignBannerMediaId3',
        'is_remove_campaign_banner_media_id4' => 'isRemoveCampaignBannerMediaId4',
        'is_remove_campaign_banner_url' => 'isRemoveCampaignBannerUrl',
        'logo_media_id' => 'logoMediaId',
        'logo_media_id2' => 'logoMediaId2',
        'logo_media_id3' => 'logoMediaId3',
        'prefix' => 'prefix',
        'principal' => 'principal',
        'suffix' => 'suffix',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand_color' => 'setBrandColor',
        'button_text' => 'setButtonText',
        'campaign_banner_media_id' => 'setCampaignBannerMediaId',
        'campaign_banner_media_id2' => 'setCampaignBannerMediaId2',
        'campaign_banner_media_id3' => 'setCampaignBannerMediaId3',
        'campaign_banner_media_id4' => 'setCampaignBannerMediaId4',
        'campaign_banner_url' => 'setCampaignBannerUrl',
        'display_url' => 'setDisplayUrl',
        'is_remove_campaign_banner_media_id' => 'setIsRemoveCampaignBannerMediaId',
        'is_remove_campaign_banner_media_id2' => 'setIsRemoveCampaignBannerMediaId2',
        'is_remove_campaign_banner_media_id3' => 'setIsRemoveCampaignBannerMediaId3',
        'is_remove_campaign_banner_media_id4' => 'setIsRemoveCampaignBannerMediaId4',
        'is_remove_campaign_banner_url' => 'setIsRemoveCampaignBannerUrl',
        'logo_media_id' => 'setLogoMediaId',
        'logo_media_id2' => 'setLogoMediaId2',
        'logo_media_id3' => 'setLogoMediaId3',
        'prefix' => 'setPrefix',
        'principal' => 'setPrincipal',
        'suffix' => 'setSuffix',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand_color' => 'getBrandColor',
        'button_text' => 'getButtonText',
        'campaign_banner_media_id' => 'getCampaignBannerMediaId',
        'campaign_banner_media_id2' => 'getCampaignBannerMediaId2',
        'campaign_banner_media_id3' => 'getCampaignBannerMediaId3',
        'campaign_banner_media_id4' => 'getCampaignBannerMediaId4',
        'campaign_banner_url' => 'getCampaignBannerUrl',
        'display_url' => 'getDisplayUrl',
        'is_remove_campaign_banner_media_id' => 'getIsRemoveCampaignBannerMediaId',
        'is_remove_campaign_banner_media_id2' => 'getIsRemoveCampaignBannerMediaId2',
        'is_remove_campaign_banner_media_id3' => 'getIsRemoveCampaignBannerMediaId3',
        'is_remove_campaign_banner_media_id4' => 'getIsRemoveCampaignBannerMediaId4',
        'is_remove_campaign_banner_url' => 'getIsRemoveCampaignBannerUrl',
        'logo_media_id' => 'getLogoMediaId',
        'logo_media_id2' => 'getLogoMediaId2',
        'logo_media_id3' => 'getLogoMediaId3',
        'prefix' => 'getPrefix',
        'principal' => 'getPrincipal',
        'suffix' => 'getSuffix',
        'url' => 'getUrl'
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
        $this->container['brand_color'] = isset($data['brand_color']) ? $data['brand_color'] : null;
        $this->container['button_text'] = isset($data['button_text']) ? $data['button_text'] : null;
        $this->container['campaign_banner_media_id'] = isset($data['campaign_banner_media_id']) ? $data['campaign_banner_media_id'] : null;
        $this->container['campaign_banner_media_id2'] = isset($data['campaign_banner_media_id2']) ? $data['campaign_banner_media_id2'] : null;
        $this->container['campaign_banner_media_id3'] = isset($data['campaign_banner_media_id3']) ? $data['campaign_banner_media_id3'] : null;
        $this->container['campaign_banner_media_id4'] = isset($data['campaign_banner_media_id4']) ? $data['campaign_banner_media_id4'] : null;
        $this->container['campaign_banner_url'] = isset($data['campaign_banner_url']) ? $data['campaign_banner_url'] : null;
        $this->container['display_url'] = isset($data['display_url']) ? $data['display_url'] : null;
        $this->container['is_remove_campaign_banner_media_id'] = isset($data['is_remove_campaign_banner_media_id']) ? $data['is_remove_campaign_banner_media_id'] : null;
        $this->container['is_remove_campaign_banner_media_id2'] = isset($data['is_remove_campaign_banner_media_id2']) ? $data['is_remove_campaign_banner_media_id2'] : null;
        $this->container['is_remove_campaign_banner_media_id3'] = isset($data['is_remove_campaign_banner_media_id3']) ? $data['is_remove_campaign_banner_media_id3'] : null;
        $this->container['is_remove_campaign_banner_media_id4'] = isset($data['is_remove_campaign_banner_media_id4']) ? $data['is_remove_campaign_banner_media_id4'] : null;
        $this->container['is_remove_campaign_banner_url'] = isset($data['is_remove_campaign_banner_url']) ? $data['is_remove_campaign_banner_url'] : null;
        $this->container['logo_media_id'] = isset($data['logo_media_id']) ? $data['logo_media_id'] : null;
        $this->container['logo_media_id2'] = isset($data['logo_media_id2']) ? $data['logo_media_id2'] : null;
        $this->container['logo_media_id3'] = isset($data['logo_media_id3']) ? $data['logo_media_id3'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets brand_color
     *
     * @return string|null
     */
    public function getBrandColor()
    {
        return $this->container['brand_color'];
    }

    /**
     * Sets brand_color
     *
     * @param string|null $brand_color <div lang=\"ja\"> ブランドカラーです。<br> ※RGB、HEX指定です。<br> 設定例：#FFFFFF<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Brand color.<br> Format :RGB or HEX<br> e.g.：#FFFFFF<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setBrandColor($brand_color)
    {
        $this->container['brand_color'] = $brand_color;

        return $this;
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
     * Gets campaign_banner_media_id
     *
     * @return int|null
     */
    public function getCampaignBannerMediaId()
    {
        return $this->container['campaign_banner_media_id'];
    }

    /**
     * Sets campaign_banner_media_id
     *
     * @param int|null $campaign_banner_media_id <div lang=\"ja\"> キャンペーンバナー画像のメディアIDです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Campaign banner media ID.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setCampaignBannerMediaId($campaign_banner_media_id)
    {
        $this->container['campaign_banner_media_id'] = $campaign_banner_media_id;

        return $this;
    }

    /**
     * Gets campaign_banner_media_id2
     *
     * @return int|null
     */
    public function getCampaignBannerMediaId2()
    {
        return $this->container['campaign_banner_media_id2'];
    }

    /**
     * Sets campaign_banner_media_id2
     *
     * @param int|null $campaign_banner_media_id2 <div lang=\"ja\"> キャンペーンバナー画像のメディアID 2です。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Campaign banner media ID 2.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setCampaignBannerMediaId2($campaign_banner_media_id2)
    {
        $this->container['campaign_banner_media_id2'] = $campaign_banner_media_id2;

        return $this;
    }

    /**
     * Gets campaign_banner_media_id3
     *
     * @return int|null
     */
    public function getCampaignBannerMediaId3()
    {
        return $this->container['campaign_banner_media_id3'];
    }

    /**
     * Sets campaign_banner_media_id3
     *
     * @param int|null $campaign_banner_media_id3 <div lang=\"ja\"> キャンペーンバナー画像のメディアID 3です。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Campaign banner media ID 3.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setCampaignBannerMediaId3($campaign_banner_media_id3)
    {
        $this->container['campaign_banner_media_id3'] = $campaign_banner_media_id3;

        return $this;
    }

    /**
     * Gets campaign_banner_media_id4
     *
     * @return int|null
     */
    public function getCampaignBannerMediaId4()
    {
        return $this->container['campaign_banner_media_id4'];
    }

    /**
     * Sets campaign_banner_media_id4
     *
     * @param int|null $campaign_banner_media_id4 <div lang=\"ja\"> キャンペーンバナー画像のメディアID 4です。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Campaign banner media ID 4.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setCampaignBannerMediaId4($campaign_banner_media_id4)
    {
        $this->container['campaign_banner_media_id4'] = $campaign_banner_media_id4;

        return $this;
    }

    /**
     * Gets campaign_banner_url
     *
     * @return string|null
     */
    public function getCampaignBannerUrl()
    {
        return $this->container['campaign_banner_url'];
    }

    /**
     * Sets campaign_banner_url
     *
     * @param string|null $campaign_banner_url <div lang=\"ja\"> キャンペーンバナーURLです。<br> このフィールドは省略可能となります。<br> ADD時、設定する場合は以下のいずれかの指定が必要となります。<br> - campaignBannerMediaId<br> - campaignBannerMediaId2<br> - campaignBannerMediaId3<br> - campaignBannerMediaId4 </div> <div lang=\"en\"> Campaign banner URL.<br> This field is optional.<br> For setting in ADD operation, one of the following is required:<br> - campaignBannerMediaId<br> - campaignBannerMediaId2<br> - campaignBannerMediaId3<br> - campaignBannerMediaId4 </div>
     *
     * @return $this
     */
    public function setCampaignBannerUrl($campaign_banner_url)
    {
        $this->container['campaign_banner_url'] = $campaign_banner_url;

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
     * @param string|null $display_url <div lang=\"ja\"> 表示URLです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Display URL.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets is_remove_campaign_banner_media_id
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveCampaignBannerMediaId()
    {
        return $this->container['is_remove_campaign_banner_media_id'];
    }

    /**
     * Sets is_remove_campaign_banner_media_id
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_campaign_banner_media_id is_remove_campaign_banner_media_id
     *
     * @return $this
     */
    public function setIsRemoveCampaignBannerMediaId($is_remove_campaign_banner_media_id)
    {
        $this->container['is_remove_campaign_banner_media_id'] = $is_remove_campaign_banner_media_id;

        return $this;
    }

    /**
     * Gets is_remove_campaign_banner_media_id2
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveCampaignBannerMediaId2()
    {
        return $this->container['is_remove_campaign_banner_media_id2'];
    }

    /**
     * Sets is_remove_campaign_banner_media_id2
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_campaign_banner_media_id2 is_remove_campaign_banner_media_id2
     *
     * @return $this
     */
    public function setIsRemoveCampaignBannerMediaId2($is_remove_campaign_banner_media_id2)
    {
        $this->container['is_remove_campaign_banner_media_id2'] = $is_remove_campaign_banner_media_id2;

        return $this;
    }

    /**
     * Gets is_remove_campaign_banner_media_id3
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveCampaignBannerMediaId3()
    {
        return $this->container['is_remove_campaign_banner_media_id3'];
    }

    /**
     * Sets is_remove_campaign_banner_media_id3
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_campaign_banner_media_id3 is_remove_campaign_banner_media_id3
     *
     * @return $this
     */
    public function setIsRemoveCampaignBannerMediaId3($is_remove_campaign_banner_media_id3)
    {
        $this->container['is_remove_campaign_banner_media_id3'] = $is_remove_campaign_banner_media_id3;

        return $this;
    }

    /**
     * Gets is_remove_campaign_banner_media_id4
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveCampaignBannerMediaId4()
    {
        return $this->container['is_remove_campaign_banner_media_id4'];
    }

    /**
     * Sets is_remove_campaign_banner_media_id4
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_campaign_banner_media_id4 is_remove_campaign_banner_media_id4
     *
     * @return $this
     */
    public function setIsRemoveCampaignBannerMediaId4($is_remove_campaign_banner_media_id4)
    {
        $this->container['is_remove_campaign_banner_media_id4'] = $is_remove_campaign_banner_media_id4;

        return $this;
    }

    /**
     * Gets is_remove_campaign_banner_url
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveCampaignBannerUrl()
    {
        return $this->container['is_remove_campaign_banner_url'];
    }

    /**
     * Sets is_remove_campaign_banner_url
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_campaign_banner_url is_remove_campaign_banner_url
     *
     * @return $this
     */
    public function setIsRemoveCampaignBannerUrl($is_remove_campaign_banner_url)
    {
        $this->container['is_remove_campaign_banner_url'] = $is_remove_campaign_banner_url;

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
     * @param int|null $logo_media_id <div lang=\"ja\"> ロゴ画像のメディアIDです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Media ID of logo image.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setLogoMediaId($logo_media_id)
    {
        $this->container['logo_media_id'] = $logo_media_id;

        return $this;
    }

    /**
     * Gets logo_media_id2
     *
     * @return int|null
     */
    public function getLogoMediaId2()
    {
        return $this->container['logo_media_id2'];
    }

    /**
     * Sets logo_media_id2
     *
     * @param int|null $logo_media_id2 <div lang=\"ja\"> ロゴ画像のメディアID 2です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Media ID of logo image 2.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setLogoMediaId2($logo_media_id2)
    {
        $this->container['logo_media_id2'] = $logo_media_id2;

        return $this;
    }

    /**
     * Gets logo_media_id3
     *
     * @return int|null
     */
    public function getLogoMediaId3()
    {
        return $this->container['logo_media_id3'];
    }

    /**
     * Sets logo_media_id3
     *
     * @param int|null $logo_media_id3 <div lang=\"ja\"> ロゴ画像のメディアID 3です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Media ID of logo image 3.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setLogoMediaId3($logo_media_id3)
    {
        $this->container['logo_media_id3'] = $logo_media_id3;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix <div lang=\"ja\"> プレフィックスです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Prefix.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

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
     * @param string|null $principal <div lang=\"ja\"> 広告の主体者表記です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Advertiser Indication.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string|null $suffix <div lang=\"ja\"> サフィックスです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Suffix.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

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


