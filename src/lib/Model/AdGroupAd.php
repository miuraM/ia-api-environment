<?php
/**
 * AdGroupAd
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
 * AdGroupAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdオブジェクトは、広告の情報を格納するコンテナです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;The AdGroupAd object is a container for storing ad information.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'ad' => '\OpenAPI\Client\Model\AdGroupAdServiceAd',
        'ad_group_id' => 'int',
        'ad_group_name' => 'string',
        'ad_id' => 'int',
        'ad_name' => 'string',
        'ad_style' => '\OpenAPI\Client\Model\AdGroupAdServiceAdStyle',
        'approval_status' => '\OpenAPI\Client\Model\AdGroupAdServiceApprovalStatus',
        'bid' => '\OpenAPI\Client\Model\AdGroupAdServiceBid',
        'campaign_id' => 'int',
        'campaign_name' => 'string',
        'disapproval_reason_codes' => 'string[]',
        'impression_beacon_urls' => 'string[]',
        'is_remove_beacon_urls' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'is_remove_third_party_tracking_script_url' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'labels' => '\OpenAPI\Client\Model\AdGroupAdServiceLabel[]',
        'media_id' => 'int',
        'third_party_tracking_script_url' => 'string',
        'third_party_tracking_vendor' => 'string',
        'user_status' => '\OpenAPI\Client\Model\AdGroupAdServiceUserStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'ad' => null,
        'ad_group_id' => 'int64',
        'ad_group_name' => null,
        'ad_id' => 'int64',
        'ad_name' => null,
        'ad_style' => null,
        'approval_status' => null,
        'bid' => null,
        'campaign_id' => 'int64',
        'campaign_name' => null,
        'disapproval_reason_codes' => null,
        'impression_beacon_urls' => null,
        'is_remove_beacon_urls' => null,
        'is_remove_third_party_tracking_script_url' => null,
        'labels' => null,
        'media_id' => 'int64',
        'third_party_tracking_script_url' => null,
        'third_party_tracking_vendor' => null,
        'user_status' => null
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
        'ad' => 'ad',
        'ad_group_id' => 'adGroupId',
        'ad_group_name' => 'adGroupName',
        'ad_id' => 'adId',
        'ad_name' => 'adName',
        'ad_style' => 'adStyle',
        'approval_status' => 'approvalStatus',
        'bid' => 'bid',
        'campaign_id' => 'campaignId',
        'campaign_name' => 'campaignName',
        'disapproval_reason_codes' => 'disapprovalReasonCodes',
        'impression_beacon_urls' => 'impressionBeaconUrls',
        'is_remove_beacon_urls' => 'isRemoveBeaconUrls',
        'is_remove_third_party_tracking_script_url' => 'isRemoveThirdPartyTrackingScriptUrl',
        'labels' => 'labels',
        'media_id' => 'mediaId',
        'third_party_tracking_script_url' => 'thirdPartyTrackingScriptUrl',
        'third_party_tracking_vendor' => 'thirdPartyTrackingVendor',
        'user_status' => 'userStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'ad' => 'setAd',
        'ad_group_id' => 'setAdGroupId',
        'ad_group_name' => 'setAdGroupName',
        'ad_id' => 'setAdId',
        'ad_name' => 'setAdName',
        'ad_style' => 'setAdStyle',
        'approval_status' => 'setApprovalStatus',
        'bid' => 'setBid',
        'campaign_id' => 'setCampaignId',
        'campaign_name' => 'setCampaignName',
        'disapproval_reason_codes' => 'setDisapprovalReasonCodes',
        'impression_beacon_urls' => 'setImpressionBeaconUrls',
        'is_remove_beacon_urls' => 'setIsRemoveBeaconUrls',
        'is_remove_third_party_tracking_script_url' => 'setIsRemoveThirdPartyTrackingScriptUrl',
        'labels' => 'setLabels',
        'media_id' => 'setMediaId',
        'third_party_tracking_script_url' => 'setThirdPartyTrackingScriptUrl',
        'third_party_tracking_vendor' => 'setThirdPartyTrackingVendor',
        'user_status' => 'setUserStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'ad' => 'getAd',
        'ad_group_id' => 'getAdGroupId',
        'ad_group_name' => 'getAdGroupName',
        'ad_id' => 'getAdId',
        'ad_name' => 'getAdName',
        'ad_style' => 'getAdStyle',
        'approval_status' => 'getApprovalStatus',
        'bid' => 'getBid',
        'campaign_id' => 'getCampaignId',
        'campaign_name' => 'getCampaignName',
        'disapproval_reason_codes' => 'getDisapprovalReasonCodes',
        'impression_beacon_urls' => 'getImpressionBeaconUrls',
        'is_remove_beacon_urls' => 'getIsRemoveBeaconUrls',
        'is_remove_third_party_tracking_script_url' => 'getIsRemoveThirdPartyTrackingScriptUrl',
        'labels' => 'getLabels',
        'media_id' => 'getMediaId',
        'third_party_tracking_script_url' => 'getThirdPartyTrackingScriptUrl',
        'third_party_tracking_vendor' => 'getThirdPartyTrackingVendor',
        'user_status' => 'getUserStatus'
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
        $this->container['ad'] = isset($data['ad']) ? $data['ad'] : null;
        $this->container['ad_group_id'] = isset($data['ad_group_id']) ? $data['ad_group_id'] : null;
        $this->container['ad_group_name'] = isset($data['ad_group_name']) ? $data['ad_group_name'] : null;
        $this->container['ad_id'] = isset($data['ad_id']) ? $data['ad_id'] : null;
        $this->container['ad_name'] = isset($data['ad_name']) ? $data['ad_name'] : null;
        $this->container['ad_style'] = isset($data['ad_style']) ? $data['ad_style'] : null;
        $this->container['approval_status'] = isset($data['approval_status']) ? $data['approval_status'] : null;
        $this->container['bid'] = isset($data['bid']) ? $data['bid'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['campaign_name'] = isset($data['campaign_name']) ? $data['campaign_name'] : null;
        $this->container['disapproval_reason_codes'] = isset($data['disapproval_reason_codes']) ? $data['disapproval_reason_codes'] : null;
        $this->container['impression_beacon_urls'] = isset($data['impression_beacon_urls']) ? $data['impression_beacon_urls'] : null;
        $this->container['is_remove_beacon_urls'] = isset($data['is_remove_beacon_urls']) ? $data['is_remove_beacon_urls'] : null;
        $this->container['is_remove_third_party_tracking_script_url'] = isset($data['is_remove_third_party_tracking_script_url']) ? $data['is_remove_third_party_tracking_script_url'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['media_id'] = isset($data['media_id']) ? $data['media_id'] : null;
        $this->container['third_party_tracking_script_url'] = isset($data['third_party_tracking_script_url']) ? $data['third_party_tracking_script_url'] : null;
        $this->container['third_party_tracking_vendor'] = isset($data['third_party_tracking_vendor']) ? $data['third_party_tracking_vendor'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
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
     * @param int|null $account_id <div lang=\"ja\"> アカウントIDです。<br> このフィールドは、リクエストの場合は必須です。 </div> <div lang=\"en\"> Account ID.<br> This field is required in requests. </div>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets ad
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceAd|null
     */
    public function getAd()
    {
        return $this->container['ad'];
    }

    /**
     * Sets ad
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceAd|null $ad ad
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->container['ad'] = $ad;

        return $this;
    }

    /**
     * Gets ad_group_id
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->container['ad_group_id'];
    }

    /**
     * Sets ad_group_id
     *
     * @param int|null $ad_group_id <div lang=\"ja\"> 広告グループIDです。<br> このフィールドは、リクエストの場合は必須です。 </div> <div lang=\"en\"> Ad group ID.<br> This field is required in requests. </div>
     *
     * @return $this
     */
    public function setAdGroupId($ad_group_id)
    {
        $this->container['ad_group_id'] = $ad_group_id;

        return $this;
    }

    /**
     * Gets ad_group_name
     *
     * @return string|null
     */
    public function getAdGroupName()
    {
        return $this->container['ad_group_name'];
    }

    /**
     * Sets ad_group_name
     *
     * @param string|null $ad_group_name <div lang=\"ja\"> 広告グループ名です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Ad group name.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setAdGroupName($ad_group_name)
    {
        $this->container['ad_group_name'] = $ad_group_name;

        return $this;
    }

    /**
     * Gets ad_id
     *
     * @return int|null
     */
    public function getAdId()
    {
        return $this->container['ad_id'];
    }

    /**
     * Sets ad_id
     *
     * @param int|null $ad_id <div lang=\"ja\"> 広告IDです。<br> このフィールドは、ADD時は無視され、SETおよびREMOVE時に必須となります。 </div> <div lang=\"en\"> Ad ID.<br> This field will be ignored in ADD operation, and will be required in SET and REMOVE operation. </div>
     *
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->container['ad_id'] = $ad_id;

        return $this;
    }

    /**
     * Gets ad_name
     *
     * @return string|null
     */
    public function getAdName()
    {
        return $this->container['ad_name'];
    }

    /**
     * Sets ad_name
     *
     * @param string|null $ad_name <div lang=\"ja\"> 広告名です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Ad name.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return $this
     */
    public function setAdName($ad_name)
    {
        $this->container['ad_name'] = $ad_name;

        return $this;
    }

    /**
     * Gets ad_style
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceAdStyle|null
     */
    public function getAdStyle()
    {
        return $this->container['ad_style'];
    }

    /**
     * Sets ad_style
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceAdStyle|null $ad_style ad_style
     *
     * @return $this
     */
    public function setAdStyle($ad_style)
    {
        $this->container['ad_style'] = $ad_style;

        return $this;
    }

    /**
     * Gets approval_status
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceApprovalStatus|null $approval_status approval_status
     *
     * @return $this
     */
    public function setApprovalStatus($approval_status)
    {
        $this->container['approval_status'] = $approval_status;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceBid|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceBid|null $bid bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id <div lang=\"ja\"> キャンペーンIDです。<br> このフィールドは、リクエストの場合は必須です。 </div> <div lang=\"en\"> Campaign ID.<br> This field is required in requests. </div>
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string|null $campaign_name <div lang=\"ja\"> キャンペーン名です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Campaign name.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets disapproval_reason_codes
     *
     * @return string[]|null
     */
    public function getDisapprovalReasonCodes()
    {
        return $this->container['disapproval_reason_codes'];
    }

    /**
     * Sets disapproval_reason_codes
     *
     * @param string[]|null $disapproval_reason_codes <div lang=\"ja\"> 掲載拒否の理由です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Reject reason on editorial review.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setDisapprovalReasonCodes($disapproval_reason_codes)
    {
        $this->container['disapproval_reason_codes'] = $disapproval_reason_codes;

        return $this;
    }

    /**
     * Gets impression_beacon_urls
     *
     * @return string[]|null
     */
    public function getImpressionBeaconUrls()
    {
        return $this->container['impression_beacon_urls'];
    }

    /**
     * Sets impression_beacon_urls
     *
     * @param string[]|null $impression_beacon_urls <div lang=\"ja\"> インプレッションビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Impression beacon URL.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setImpressionBeaconUrls($impression_beacon_urls)
    {
        $this->container['impression_beacon_urls'] = $impression_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_beacon_urls
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveBeaconUrls()
    {
        return $this->container['is_remove_beacon_urls'];
    }

    /**
     * Sets is_remove_beacon_urls
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_beacon_urls is_remove_beacon_urls
     *
     * @return $this
     */
    public function setIsRemoveBeaconUrls($is_remove_beacon_urls)
    {
        $this->container['is_remove_beacon_urls'] = $is_remove_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_third_party_tracking_script_url
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveThirdPartyTrackingScriptUrl()
    {
        return $this->container['is_remove_third_party_tracking_script_url'];
    }

    /**
     * Sets is_remove_third_party_tracking_script_url
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_third_party_tracking_script_url is_remove_third_party_tracking_script_url
     *
     * @return $this
     */
    public function setIsRemoveThirdPartyTrackingScriptUrl($is_remove_third_party_tracking_script_url)
    {
        $this->container['is_remove_third_party_tracking_script_url'] = $is_remove_third_party_tracking_script_url;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceLabel[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceLabel[]|null $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return int|null
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param int|null $media_id <div lang=\"ja\"> メディアIDです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Media ID.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setMediaId($media_id)
    {
        $this->container['media_id'] = $media_id;

        return $this;
    }

    /**
     * Gets third_party_tracking_script_url
     *
     * @return string|null
     */
    public function getThirdPartyTrackingScriptUrl()
    {
        return $this->container['third_party_tracking_script_url'];
    }

    /**
     * Sets third_party_tracking_script_url
     *
     * @param string|null $third_party_tracking_script_url <div lang=\"ja\"> 第三者計測スクリプトURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Third party tracking script URL.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return $this
     */
    public function setThirdPartyTrackingScriptUrl($third_party_tracking_script_url)
    {
        $this->container['third_party_tracking_script_url'] = $third_party_tracking_script_url;

        return $this;
    }

    /**
     * Gets third_party_tracking_vendor
     *
     * @return string|null
     */
    public function getThirdPartyTrackingVendor()
    {
        return $this->container['third_party_tracking_vendor'];
    }

    /**
     * Sets third_party_tracking_vendor
     *
     * @param string|null $third_party_tracking_vendor <div lang=\"ja\"> 第三者計測ベンダー（ReadOnly）です。<br> thirdPartyTrackingScriptUrlのドメインに基づく第三者計測ベンダーが設定されます。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Third party tracking vendor (Read only).<br> Third party tracking vendor based on domain of thirdPartyTrackingScriptUrl is set.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return $this
     */
    public function setThirdPartyTrackingVendor($third_party_tracking_vendor)
    {
        $this->container['third_party_tracking_vendor'] = $third_party_tracking_vendor;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceUserStatus|null
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceUserStatus|null $user_status user_status
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

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

