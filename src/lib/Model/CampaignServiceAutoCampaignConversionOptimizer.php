<?php
/**
 * CampaignServiceAutoCampaignConversionOptimizer
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
 * CampaignServiceAutoCampaignConversionOptimizer Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceAutoCampaignConversionOptimizerオブジェクトは、コンバージョン最適化設定情報を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceAutoCampaignConversionOptimizer retains conversion optimization settings.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceAutoCampaignConversionOptimizer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceAutoCampaignConversionOptimizer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conversion_optimizer_eligibility_flg' => '\OpenAPI\Client\Model\CampaignServiceConversionOptimizerEligibilityFlg',
        'target_cpa' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'conversion_optimizer_eligibility_flg' => null,
        'target_cpa' => 'int64'
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
        'conversion_optimizer_eligibility_flg' => 'conversionOptimizerEligibilityFlg',
        'target_cpa' => 'targetCpa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversion_optimizer_eligibility_flg' => 'setConversionOptimizerEligibilityFlg',
        'target_cpa' => 'setTargetCpa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversion_optimizer_eligibility_flg' => 'getConversionOptimizerEligibilityFlg',
        'target_cpa' => 'getTargetCpa'
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
        $this->container['conversion_optimizer_eligibility_flg'] = isset($data['conversion_optimizer_eligibility_flg']) ? $data['conversion_optimizer_eligibility_flg'] : null;
        $this->container['target_cpa'] = isset($data['target_cpa']) ? $data['target_cpa'] : null;
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
     * Gets conversion_optimizer_eligibility_flg
     *
     * @return \OpenAPI\Client\Model\CampaignServiceConversionOptimizerEligibilityFlg|null
     */
    public function getConversionOptimizerEligibilityFlg()
    {
        return $this->container['conversion_optimizer_eligibility_flg'];
    }

    /**
     * Sets conversion_optimizer_eligibility_flg
     *
     * @param \OpenAPI\Client\Model\CampaignServiceConversionOptimizerEligibilityFlg|null $conversion_optimizer_eligibility_flg conversion_optimizer_eligibility_flg
     *
     * @return $this
     */
    public function setConversionOptimizerEligibilityFlg($conversion_optimizer_eligibility_flg)
    {
        $this->container['conversion_optimizer_eligibility_flg'] = $conversion_optimizer_eligibility_flg;

        return $this;
    }

    /**
     * Gets target_cpa
     *
     * @return int|null
     */
    public function getTargetCpa()
    {
        return $this->container['target_cpa'];
    }

    /**
     * Sets target_cpa
     *
     * @param int|null $target_cpa <div lang=\"ja\"> コンバージョン単価の目標値です。<br> このフィールドは、SET時に省略可能となり、ADDおよびREMOVE時に無視されます。<br> ※設定範囲：1 - 9,999,999,999<br> ※コンバージョン最適化機能が動作している場合には、手動で設定されている入札設定は無効になります。<br> </div> <div lang=\"en\"> This field is desired conversion cost value.<br> This field is optional in SET operation, and will be ignored in ADD and REMOVE operation. <br> * Settable range：1 - 9,999,999,999<br> * If function of conversion optimization is running, manual bid settings is invalid.<br> </div>
     *
     * @return $this
     */
    public function setTargetCpa($target_cpa)
    {
        $this->container['target_cpa'] = $target_cpa;

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


