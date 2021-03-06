<?php
/**
 * StatsServiceAge
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
 * StatsServiceAge Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;StatsServiceAgeは、年代を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;StatsServiceAge stands for the age.&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE13_14&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;13歳から14歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 13 to 14.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE15_17&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;15歳から17歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 15 to 17.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE18_19&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;18歳から19歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 18 to 19.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE20_21&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;20歳から21歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 20 to 21.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE22_29&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;22歳から29歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 22 to 29.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE30_39&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;30歳から39歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 30 to 39.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE40_49&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;40歳から49歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 40 to 49.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE50_59&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;50歳から59歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 50 to 59.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE60_69&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;60歳から69歳です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;From 60 to 69.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_RANGE70_UL&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;70歳以上です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;70 and up.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GT_UNKNOWN&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;年齢不明です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;StatsServiceAge unknown.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; -&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatsServiceAge
{
    /**
     * Possible values of this enum
     */
    const GT_RANGE13_14 = 'GT_RANGE13_14';
    const GT_RANGE15_17 = 'GT_RANGE15_17';
    const GT_RANGE18_19 = 'GT_RANGE18_19';
    const GT_RANGE20_21 = 'GT_RANGE20_21';
    const GT_RANGE22_29 = 'GT_RANGE22_29';
    const GT_RANGE30_39 = 'GT_RANGE30_39';
    const GT_RANGE40_49 = 'GT_RANGE40_49';
    const GT_RANGE50_59 = 'GT_RANGE50_59';
    const GT_RANGE60_69 = 'GT_RANGE60_69';
    const GT_RANGE70_UL = 'GT_RANGE70_UL';
    const GT_UNKNOWN = 'GT_UNKNOWN';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GT_RANGE13_14,
            self::GT_RANGE15_17,
            self::GT_RANGE18_19,
            self::GT_RANGE20_21,
            self::GT_RANGE22_29,
            self::GT_RANGE30_39,
            self::GT_RANGE40_49,
            self::GT_RANGE50_59,
            self::GT_RANGE60_69,
            self::GT_RANGE70_UL,
            self::GT_UNKNOWN,
            self::UNKNOWN,
        ];
    }
}


