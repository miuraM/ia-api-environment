<?php
/**
 * SearchKeywordListServiceKeywordRecency
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
 * SearchKeywordListServiceKeywordRecency Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; SearchKeywordListServiceKeywordRecencyは、サーチキーワードの有効期間を表します。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt; ※ADD時のデフォルト設定値はWITHIN_30DAYSとなります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; SearchKeywordListServiceKeywordRecency is an object for storing the effective period information of Search Keyword.&lt;br&gt; This field is optional in ADD and SET operation. &lt;br&gt; *The default value in ADD operation will be WITHIN_30DAYS. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;WITHIN_1DAY&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;1日以内。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;within one day&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;WITHIN_3DAYS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;3日以内。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;for three days&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;WITHIN_7DAYS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;7日以内。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;for seven days&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;WITHIN_14DAYS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;14日以内。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;for fourteen days&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;WITHIN_30DAYS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;30日以内。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;for thirty days&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchKeywordListServiceKeywordRecency
{
    /**
     * Possible values of this enum
     */
    const WITHIN_1_DAY = 'WITHIN_1DAY';
    const WITHIN_3_DAYS = 'WITHIN_3DAYS';
    const WITHIN_7_DAYS = 'WITHIN_7DAYS';
    const WITHIN_14_DAYS = 'WITHIN_14DAYS';
    const WITHIN_30_DAYS = 'WITHIN_30DAYS';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WITHIN_1_DAY,
            self::WITHIN_3_DAYS,
            self::WITHIN_7_DAYS,
            self::WITHIN_14_DAYS,
            self::WITHIN_30_DAYS,
            self::UNKNOWN,
        ];
    }
}


