<?php
/**
 * AdGroupServiceDeviceOsType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * AdGroupServiceDeviceOsType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupServiceDeviceOsTypeは、配信先デバイスのOSの種類を表します。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupServiceDeviceOsType serves OS types for devices to be posted on.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;IOS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;iOS向けに配信されます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Deliver to iOS.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;ANDROID&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;Android向けに配信されます。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Deliver to Android.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;NONE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;すべてのOSに配信されます。&lt;br&gt;※AdGroupServiceのみ設定可能&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Deliver to all OS.&lt;br&gt;*Setting NONE is only available for AdGroupService.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupServiceDeviceOsType
{
    /**
     * Possible values of this enum
     */
    const IOS = 'IOS';
    const ANDROID = 'ANDROID';
    const NONE = 'NONE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IOS,
            self::ANDROID,
            self::NONE,
            self::UNKNOWN,
        ];
    }
}

