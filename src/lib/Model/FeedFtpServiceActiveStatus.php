<?php
/**
 * FeedFtpServiceActiveStatus
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
 * FeedFtpServiceActiveStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; FTPスケジュールの有効/無効を表します。&lt;br&gt; このフィールドは、リクエストの場合は省略可能です。&lt;br&gt; ADD時のデフォルト設定値はACTIVEとなります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; FeedFtpServiceActiveStatus object displays status of FTP schedule.&lt;br&gt; This field is optional in requests.&lt;br&gt; The default value in ADD operation will be ACTIVE. &lt;/div&gt; &lt;ht&gt; &lt;p&gt;* &lt;code&gt;INACTIVE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;無効&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Inactive&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;ACTIVE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;有効&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Active&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedFtpServiceActiveStatus
{
    /**
     * Possible values of this enum
     */
    const INACTIVE = 'INACTIVE';
    const ACTIVE = 'ACTIVE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INACTIVE,
            self::ACTIVE,
            self::UNKNOWN,
        ];
    }
}

