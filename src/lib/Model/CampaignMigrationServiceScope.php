<?php
/**
 * CampaignMigrationServiceScope
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
 * CampaignMigrationServiceScope Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignMigrationServiceScopeはマイグレーションの対象となるキャンペーンの範囲を示します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignMigrationServiceScope indicates the campaign scope to be migrated.&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;SINGLE_ACCOUNT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;単一アカウント&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Single account&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;ALL_ACCOUNT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;全アカウント&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;All accounts&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignMigrationServiceScope
{
    /**
     * Possible values of this enum
     */
    const SINGLE_ACCOUNT = 'SINGLE_ACCOUNT';
    const ALL_ACCOUNT = 'ALL_ACCOUNT';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE_ACCOUNT,
            self::ALL_ACCOUNT,
            self::UNKNOWN,
        ];
    }
}


