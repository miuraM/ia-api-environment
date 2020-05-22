<?php
/**
 * StatsServiceCarrierType
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
 * StatsServiceCarrierType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;StatsServiceCarrierTypeは、スマートフォン、タブレットのキャリアの種別を表します。 ※DESKTOP、WAP_MOBILEの場合は設定できません。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;StatsServiceCarrierType stands for carrier type of Smartphone and Tablet. ∗Not available for DESKTOP/WAP_MOBILE device.&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;DOCOMO&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;NTTドコモ&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;NTT docomo&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;KDDI&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;KDDI&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;KDDI&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;SOFTBANK&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ソフトバンク&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;SoftBank&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;YMOBILE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ワイモバイル&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Y!mobile&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;OTHERS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;その他のモバイルキャリア&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Other mobile carriers&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatsServiceCarrierType
{
    /**
     * Possible values of this enum
     */
    const DOCOMO = 'DOCOMO';
    const KDDI = 'KDDI';
    const SOFTBANK = 'SOFTBANK';
    const YMOBILE = 'YMOBILE';
    const OTHERS = 'OTHERS';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCOMO,
            self::KDDI,
            self::SOFTBANK,
            self::YMOBILE,
            self::OTHERS,
            self::UNKNOWN,
        ];
    }
}


