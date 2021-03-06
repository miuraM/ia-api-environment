<?php
/**
 * ConversionTrackerServiceCategory
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
 * ConversionTrackerServiceCategory Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ConversionTrackerServiceCategoryは、トラッキング対象のコンバージョントラッカー情報のカテゴリーです。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; ConversionTrackerServiceCategory is a category for ConversionTracker.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;NONE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未設定です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;None&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;DEFAULT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;その他です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Other&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;PAGE_VIEW&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;主要なページの閲覧です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Main page view&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;PURCHASE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;購入販売です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Purchase / Sales&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;SIGNUP&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;契約です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Sign up&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;LEAD&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;販売促進です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Sales promotion&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;DOWNLOAD&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ダウンロードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Download&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceCategory
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
    const _DEFAULT = 'DEFAULT';
    const PAGE_VIEW = 'PAGE_VIEW';
    const PURCHASE = 'PURCHASE';
    const SIGNUP = 'SIGNUP';
    const LEAD = 'LEAD';
    const DOWNLOAD = 'DOWNLOAD';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::_DEFAULT,
            self::PAGE_VIEW,
            self::PURCHASE,
            self::SIGNUP,
            self::LEAD,
            self::DOWNLOAD,
            self::UNKNOWN,
        ];
    }
}


