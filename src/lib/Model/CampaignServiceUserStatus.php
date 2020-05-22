<?php
/**
 * CampaignServiceUserStatus
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
 * CampaignServiceUserStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; CampaignServiceUserStatusは、ユーザーにより広告配信の有無を調整できる設定です。&lt;br&gt; このフィールドは、ADD時は必須、SET時は省略可能となり、REMOVE時は無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; CampaignServiceUserStatus serves ad delivery status that can be set by an user.&lt;br&gt; This field is required in ADD operation, is optional in SET operation, and will be ignored in REMOVE operation. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;ACTIVE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;現在、広告は配信されている状態です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Currently ad delivery is active.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;PAUSED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;現在、広告は一時停止の状態です。そのため、配信されていません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Currently ad is paused, which the delivery is not active.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceUserStatus
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'ACTIVE';
    const PAUSED = 'PAUSED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::PAUSED,
            self::UNKNOWN,
        ];
    }
}


