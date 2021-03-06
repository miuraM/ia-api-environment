<?php
/**
 * ReportDefinitionServiceJobStatus
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
 * ReportDefinitionServiceJobStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ReportDefinitionServiceJobStatusは、定義されたレポートの処理状況です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; ReportDefinitionServiceJobStatus serves the process status for the defined report.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;ACCEPTED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ジョブリストに登録完了しました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Registration to job list complete.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;IN_PROGRESS&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;レポートは作成中です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Report request is being processed.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;COMPLETED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;正常に終了しました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Report request completed successfully.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;CANCELED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理が中止されました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The process was halted.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FAILED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理が失敗しました。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Report request failed.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceJobStatus
{
    /**
     * Possible values of this enum
     */
    const ACCEPTED = 'ACCEPTED';
    const IN_PROGRESS = 'IN_PROGRESS';
    const COMPLETED = 'COMPLETED';
    const CANCELED = 'CANCELED';
    const FAILED = 'FAILED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCEPTED,
            self::IN_PROGRESS,
            self::COMPLETED,
            self::CANCELED,
            self::FAILED,
            self::UNKNOWN,
        ];
    }
}


