<?php
/**
 * FeedDataServiceFileUploadStatus
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
 * FeedDataServiceFileUploadStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ファイルアップロード状況&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedDataServiceFileUploadStatus object displays status of file upload.&lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;UPLOADED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロード済み 処理中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Uploaded (in progress).&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;COMPLETED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;完了&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Completed.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FILE_FORMAT_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロードファイルに不備あり&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;File format error occurred.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;SYSTEM_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;システムエラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;System error occurred.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;NETWORK_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ネットワークエラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Network error occurred.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FILE_NOT_FOUND_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;対象ファイルなし&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;File not found.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FILE_SIZE_OVER_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイルサイズ上限を超過&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;File size limit exceeded.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;AUTH_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;認証エラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Authentication error occurred.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UPLOAD_COUNT_OVER_ERROR&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;アップロード回数上限を超過&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload count limit exceeded.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;NOT_MODIFIED&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイル内容に差分なし（未取得）&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;No difference, not uploaded.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;UNKNOWN&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/p&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedDataServiceFileUploadStatus
{
    /**
     * Possible values of this enum
     */
    const UPLOADED = 'UPLOADED';
    const COMPLETED = 'COMPLETED';
    const FILE_FORMAT_ERROR = 'FILE_FORMAT_ERROR';
    const SYSTEM_ERROR = 'SYSTEM_ERROR';
    const NETWORK_ERROR = 'NETWORK_ERROR';
    const FILE_NOT_FOUND_ERROR = 'FILE_NOT_FOUND_ERROR';
    const FILE_SIZE_OVER_ERROR = 'FILE_SIZE_OVER_ERROR';
    const AUTH_ERROR = 'AUTH_ERROR';
    const UPLOAD_COUNT_OVER_ERROR = 'UPLOAD_COUNT_OVER_ERROR';
    const NOT_MODIFIED = 'NOT_MODIFIED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPLOADED,
            self::COMPLETED,
            self::FILE_FORMAT_ERROR,
            self::SYSTEM_ERROR,
            self::NETWORK_ERROR,
            self::FILE_NOT_FOUND_ERROR,
            self::FILE_SIZE_OVER_ERROR,
            self::AUTH_ERROR,
            self::UPLOAD_COUNT_OVER_ERROR,
            self::NOT_MODIFIED,
            self::UNKNOWN,
        ];
    }
}


