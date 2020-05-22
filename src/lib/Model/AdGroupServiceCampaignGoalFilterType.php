<?php
/**
 * AdGroupServiceCampaignGoalFilterType
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
 * AdGroupServiceCampaignGoalFilterType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupServiceCampaignGoalFilterTypeは、キャンペーン目的の有無でキャンペーンをフィルタリングするための設定です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupServiceCampaignGoalFilterType is a setting for filtering campaigns \&quot;with campaignGoal\&quot; or \&quot;with no campaignGoal\&quot;.&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;ALL&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;全てのキャンペーンを取得（DEFAULT）&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;ALL campaigns（Default）&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;NON_GOAL&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;目的なしキャンペーンのみ取得&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Only campaigns with no campaignGoal&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;GOAL&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;目的ありキャンペーンのみ取得&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Only campaigns with campaignGoal&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupServiceCampaignGoalFilterType
{
    /**
     * Possible values of this enum
     */
    const ALL = 'ALL';
    const NON_GOAL = 'NON_GOAL';
    const GOAL = 'GOAL';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::NON_GOAL,
            self::GOAL,
            self::UNKNOWN,
        ];
    }
}


