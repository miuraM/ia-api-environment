<?php
/**
 * FeedFtpServiceScheduleWeek
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
 * FeedFtpServiceScheduleWeek Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; FeedFtpServiceScheduleWeekは、曜日を表します。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; FeedFtpServiceScheduleWeek serves the days of the week.&lt;br&gt; This field is required in requests. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;SUN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;日曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Sunday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;MON&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;月曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Monday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;TUE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;火曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Tuesday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;WED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;水曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Wednesday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;THU&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;木曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Thursday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FRI&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;金曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Friday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;SAT&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;土曜日です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Saturday&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedFtpServiceScheduleWeek
{
    /**
     * Possible values of this enum
     */
    const SUN = 'SUN';
    const MON = 'MON';
    const TUE = 'TUE';
    const WED = 'WED';
    const THU = 'THU';
    const FRI = 'FRI';
    const SAT = 'SAT';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUN,
            self::MON,
            self::TUE,
            self::WED,
            self::THU,
            self::FRI,
            self::SAT,
            self::UNKNOWN,
        ];
    }
}


