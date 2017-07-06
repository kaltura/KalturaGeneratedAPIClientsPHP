<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2017  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
require_once(dirname(__FILE__) . "/KalturaClientBase.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnnouncement extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enabled = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $timezone = null;

	/**
	 * 
	 *
	 * @var KalturaAnnouncementStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var KalturaAnnouncementRecipientsType
	 */
	public $recipients = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFilter extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $orderBy = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnnouncementFilter extends KalturaFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFilterPager extends KalturaObjectBase
{
	/**
	 * The number of objects to retrieve. Possible range 1 ≤ value ≤ 50. If omitted or value &lt; 1 - will be set to 25. If a value &gt; 50 provided – will be set to 50
	 *
	 * @var int
	 */
	public $pageSize = null;

	/**
	 * The page number for which {pageSize} of objects should be retrieved
	 *
	 * @var int
	 */
	public $pageIndex = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaListResponse extends KalturaObjectBase
{
	/**
	 * Total items
	 *
	 * @var int
	 */
	public $totalCount = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegionalChannel extends KalturaObjectBase
{
	/**
	 * The identifier of the linear media representing the channel
	 *
	 * @var int
	 */
	public $linearChannelId = null;

	/**
	 * The number of the channel
	 *
	 * @var int
	 */
	public $channelNumber = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegion extends KalturaObjectBase
{
	/**
	 * Region identifier
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * Region name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Region external identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Indicates whether this is the default region for the partner
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * List of associated linear channels
	 *
	 * @var array of KalturaRegionalChannel
	 */
	public $linearChannels;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegionListResponse extends KalturaListResponse
{
	/**
	 * A list of regions
	 *
	 * @var array of KalturaRegion
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserAssetRule extends KalturaObjectBase
{
	/**
	 * Unique rule identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Rule type - possible values: Rule type – Parental, Geo, UserType, Device
	 *
	 * @var KalturaRuleType
	 */
	public $ruleType = null;

	/**
	 * Rule display name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Additional description for the specific rule
	 *
	 * @var string
	 */
	public $description = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserAssetRuleListResponse extends KalturaListResponse
{
	/**
	 * A list of generic rules
	 *
	 * @var array of KalturaUserAssetRule
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaValue extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLongValue extends KalturaValue
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDoubleValue extends KalturaValue
{
	/**
	 * 
	 *
	 * @var float
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBooleanValue extends KalturaValue
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIntegerValue extends KalturaValue
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaStringValue extends KalturaValue
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCDNAdapterProfile extends KalturaObjectBase
{
	/**
	 * CDN adapter identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * CDNR adapter name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * CDN adapter active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * CDN adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * CDN adapter base URL
	 *
	 * @var string
	 */
	public $baseUrl = null;

	/**
	 * CDN adapter settings
	 *
	 * @var map
	 */
	public $settings;

	/**
	 * CDN adapter alias
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * CDN shared secret
	 *
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCDNAdapterProfileListResponse extends KalturaListResponse
{
	/**
	 * Adapters
	 *
	 * @var array of KalturaCDNAdapterProfile
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSlimAsset extends KalturaObjectBase
{
	/**
	 * Internal identifier of the asset
	 *
	 * @var string
	 * @insertonly
	 */
	public $id = null;

	/**
	 * The type of the asset. Possible values: media, recording, epg
	 *
	 * @var KalturaAssetType
	 * @insertonly
	 */
	public $type = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBaseOTTUser extends KalturaObjectBase
{
	/**
	 * User identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Username
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * First name
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * Last name
	 *
	 * @var string
	 */
	public $lastName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCountry extends KalturaObjectBase
{
	/**
	 * Country identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Country name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Country code
	 *
	 * @var string
	 */
	public $code = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOTTUserType extends KalturaObjectBase
{
	/**
	 * User type identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * User type description
	 *
	 * @var string
	 */
	public $description = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOTTUser extends KalturaBaseOTTUser
{
	/**
	 * Household identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $householdId = null;

	/**
	 * Email
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * Address
	 *
	 * @var string
	 */
	public $address = null;

	/**
	 * City
	 *
	 * @var string
	 */
	public $city = null;

	/**
	 * Country
	 *
	 * @var KalturaCountry
	 */
	public $country;

	/**
	 * Zip code
	 *
	 * @var string
	 */
	public $zip = null;

	/**
	 * Phone
	 *
	 * @var string
	 */
	public $phone = null;

	/**
	 * Affiliate code
	 *
	 * @var string
	 */
	public $affiliateCode = null;

	/**
	 * External user identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * User type
	 *
	 * @var KalturaOTTUserType
	 */
	public $userType;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;

	/**
	 * Is the user the household master
	 *
	 * @var bool
	 * @readonly
	 */
	public $isHouseholdMaster = null;

	/**
	 * Suspention state
	 *
	 * @var KalturaHouseholdSuspentionState
	 * @readonly
	 */
	public $suspentionState = null;

	/**
	 * User state
	 *
	 * @var KalturaUserState
	 * @readonly
	 */
	public $userState = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBookmarkPlayerData extends KalturaObjectBase
{
	/**
	 * Action
	 *
	 * @var KalturaBookmarkActionType
	 */
	public $action = null;

	/**
	 * Average Bitrate
	 *
	 * @var int
	 */
	public $averageBitrate = null;

	/**
	 * Total Bitrate
	 *
	 * @var int
	 */
	public $totalBitrate = null;

	/**
	 * Current Bitrate
	 *
	 * @var int
	 */
	public $currentBitrate = null;

	/**
	 * Identifier of the file
	 *
	 * @var int
	 */
	public $fileId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBookmark extends KalturaSlimAsset
{
	/**
	 * User identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The position of the user in the specific asset (in seconds)
	 *
	 * @var int
	 * @insertonly
	 */
	public $position = null;

	/**
	 * Indicates who is the owner of this position
	 *
	 * @var KalturaPositionOwner
	 */
	public $positionOwner = null;

	/**
	 * Specifies whether the user&#39;s current position exceeded 95% of the duration
	 *
	 * @var bool
	 */
	public $finishedWatching = null;

	/**
	 * Insert only player data
	 *
	 * @var KalturaBookmarkPlayerData
	 */
	public $playerData;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBookmarkListResponse extends KalturaListResponse
{
	/**
	 * Assets
	 *
	 * @var array of KalturaBookmark
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaStringValueArray extends KalturaObjectBase
{
	/**
	 * List of string values
	 *
	 * @var array of KalturaStringValue
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMediaImage extends KalturaObjectBase
{
	/**
	 * Image aspect ratio
	 *
	 * @var string
	 */
	public $ratio = null;

	/**
	 * Image width
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * Image height
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * Image URL
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Image Version
	 *
	 * @var int
	 */
	public $version = null;

	/**
	 * Image ID
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Determined whether image was taken from default configuration or not
	 *
	 * @var bool
	 */
	public $isDefault = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMediaFile extends KalturaObjectBase
{
	/**
	 * Unique identifier for the asset
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * File unique identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Device types as defined in the system
	 *
	 * @var string
	 */
	public $type = null;

	/**
	 * URL of the media file to be played
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Duration of the media file
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * External identifier for the media file
	 *
	 * @var string
	 */
	public $externalId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBuzzScore extends KalturaObjectBase
{
	/**
	 * Normalized average score
	 *
	 * @var float
	 */
	public $normalizedAvgScore = null;

	/**
	 * Update date
	 *
	 * @var int
	 */
	public $updateDate = null;

	/**
	 * Average score
	 *
	 * @var float
	 */
	public $avgScore = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetStatistics extends KalturaObjectBase
{
	/**
	 * Unique identifier for the asset
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Total number of likes for this asset
	 *
	 * @var int
	 */
	public $likes = null;

	/**
	 * Total number of views for this asset
	 *
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of people that rated the asset
	 *
	 * @var int
	 */
	public $ratingCount = null;

	/**
	 * Average rating for the asset
	 *
	 * @var float
	 */
	public $rating = null;

	/**
	 * Buzz score
	 *
	 * @var KalturaBuzzScore
	 */
	public $buzzScore;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBaseAssetInfo extends KalturaObjectBase
{
	/**
	 * Unique identifier for the asset
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Identifies the asset type (EPG, Movie, TV Series, etc). 
	 *             Possible values: 0 – EPG linear programs, or any asset type ID according to the asset types IDs defined in the system.
	 *
	 * @var int
	 */
	public $type = null;

	/**
	 * Asset name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Asset description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Collection of images details that can be used to represent this asset
	 *
	 * @var array of KalturaMediaImage
	 */
	public $images;

	/**
	 * Files
	 *
	 * @var array of KalturaMediaFile
	 */
	public $mediaFiles;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaAsset extends KalturaBaseAssetInfo
{
	/**
	 * Dynamic collection of key-value pairs according to the String Meta defined in the system
	 *
	 * @var map
	 */
	public $metas;

	/**
	 * Dynamic collection of key-value pairs according to the Tag Types defined in the system
	 *
	 * @var map
	 */
	public $tags;

	/**
	 * Date and time represented as epoch. For VOD – since when the asset is available in the catalog. For EPG/Linear – when the program is aired (can be in the future).
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * Date and time represented as epoch. For VOD – till when the asset be available in the catalog. For EPG/Linear – program end time and date
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Enable cDVR
	 *
	 * @var bool
	 */
	public $enableCdvr = null;

	/**
	 * Enable catch-up
	 *
	 * @var bool
	 */
	public $enableCatchUp = null;

	/**
	 * Enable start over
	 *
	 * @var bool
	 */
	public $enableStartOver = null;

	/**
	 * Enable trick-play
	 *
	 * @var bool
	 */
	public $enableTrickPlay = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetListResponse extends KalturaListResponse
{
	/**
	 * Assets
	 *
	 * @var array of KalturaAsset
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaProgramAsset extends KalturaAsset
{
	/**
	 * EPG channel identifier
	 *
	 * @var int
	 */
	public $epgChannelId = null;

	/**
	 * EPG identifier
	 *
	 * @var string
	 */
	public $epgId = null;

	/**
	 * Ralated media identifier
	 *
	 * @var int
	 */
	public $relatedMediaId = null;

	/**
	 * Unique identifier for the program
	 *
	 * @var string
	 */
	public $crid = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMediaAsset extends KalturaAsset
{
	/**
	 * Date and time represented as epoch.
	 *
	 * @var int
	 */
	public $systemStartDate = null;

	/**
	 * Date and time represented as epoch.
	 *
	 * @var int
	 */
	public $systemFinalDate = null;

	/**
	 * External identifiers
	 *
	 * @var string
	 */
	public $externalIds = null;

	/**
	 * Catch-up buffer
	 *
	 * @var int
	 */
	public $catchUpBuffer = null;

	/**
	 * Trick-play buffer
	 *
	 * @var int
	 */
	public $trickPlayBuffer = null;

	/**
	 * Enable Recording playback for non entitled channel
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableRecordingPlaybackNonEntitledChannel = null;

	/**
	 * Enable Recording playback for non existing channel
	 *
	 * @var bool
	 * @readonly
	 */
	public $enableRecordingPlaybackNonExistingChannel = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetComment extends KalturaObjectBase
{
	/**
	 * Comment ID
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * Asset identifier
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * Asset Type
	 *
	 * @var KalturaAssetType
	 */
	public $assetType = null;

	/**
	 * Header
	 *
	 * @var string
	 */
	public $header = null;

	/**
	 * Sub Header
	 *
	 * @var string
	 */
	public $subHeader = null;

	/**
	 * Text
	 *
	 * @var string
	 */
	public $text = null;

	/**
	 * CreateDate
	 *
	 * @var int
	 */
	public $createDate = null;

	/**
	 * Writer
	 *
	 * @var string
	 */
	public $writer = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetCommentListResponse extends KalturaListResponse
{
	/**
	 * Assets
	 *
	 * @var array of KalturaAssetComment
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSeriesRecording extends KalturaObjectBase
{
	/**
	 * Kaltura unique ID representing the series recording identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Kaltura EpgId
	 *
	 * @var int
	 */
	public $epgId = null;

	/**
	 * Kaltura ChannelId
	 *
	 * @var int
	 */
	public $channelId = null;

	/**
	 * Kaltura SeriesId
	 *
	 * @var string
	 */
	public $seriesId = null;

	/**
	 * Kaltura SeasonNumber
	 *
	 * @var int
	 */
	public $seasonNumber = null;

	/**
	 * Recording Type: single/series/season
	 *
	 * @var KalturaRecordingType
	 */
	public $type = null;

	/**
	 * Specifies when was the series recording created. Date and time represented as epoch.
	 *
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the series recording last updated. Date and time represented as epoch.
	 *
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * List of the season numbers to exclude.
	 *
	 * @var array of KalturaIntegerValue
	 * @readonly
	 */
	public $excludedSeasons;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSeriesRecordingListResponse extends KalturaListResponse
{
	/**
	 * Series Recordings
	 *
	 * @var array of KalturaSeriesRecording
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPremiumService extends KalturaObjectBase
{
	/**
	 * Service identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Service name / description
	 *
	 * @var string
	 */
	public $name = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPremiumService extends KalturaPremiumService
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPremiumServiceListResponse extends KalturaListResponse
{
	/**
	 * A list of premium services
	 *
	 * @var array of KalturaHouseholdPremiumService
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCDVRAdapterProfile extends KalturaObjectBase
{
	/**
	 * C-DVR adapter identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * C-DVR adapter name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * C-DVR adapter active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * C-DVR adapter adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * C-DVR adapter extra parameters
	 *
	 * @var map
	 */
	public $settings;

	/**
	 * C-DVR adapter external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * C-DVR shared secret
	 *
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;

	/**
	 * Indicates whether the C-DVR adapter supports dynamic URLs
	 *
	 * @var bool
	 */
	public $dynamicLinksSupport = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCDVRAdapterProfileListResponse extends KalturaListResponse
{
	/**
	 * C-DVR adapter profiles
	 *
	 * @var array of KalturaCDVRAdapterProfile
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExportTask extends KalturaObjectBase
{
	/**
	 * Task identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Alias for the task used to solicit an export using API
	 *
	 * @var string
	 */
	public $alias = null;

	/**
	 * Task display name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The data type exported in this task
	 *
	 * @var KalturaExportDataType
	 */
	public $dataType = null;

	/**
	 * Filter to apply on the export, utilize KSQL.
	 *             Note: KSQL currently applies to media assets only. It cannot be used for USERS filtering
	 *
	 * @var string
	 */
	public $filter = null;

	/**
	 * Type of export batch – full or incremental
	 *
	 * @var KalturaExportType
	 */
	public $exportType = null;

	/**
	 * How often the export should occur, reasonable minimum threshold should apply, configurable in minutes
	 *
	 * @var int
	 */
	public $frequency = null;

	/**
	 * The URL for sending a notification when the task&#39;s export process is done
	 *
	 * @var string
	 */
	public $notificationUrl = null;

	/**
	 * List of media type identifiers (as configured in TVM) to export. used only in case data_type = vod
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $vodTypes;

	/**
	 * Indicates if the task is active or not
	 *
	 * @var bool
	 */
	public $isActive = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExportTaskListResponse extends KalturaListResponse
{
	/**
	 * Export task items
	 *
	 * @var array of KalturaExportTask
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaChannelEnrichmentHolder extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaChannelEnrichment
	 */
	public $type = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExternalChannelProfile extends KalturaObjectBase
{
	/**
	 * External channel id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * External channel name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * External channel active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * External channel external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Filter expression
	 *
	 * @var string
	 */
	public $filterExpression = null;

	/**
	 * Recommendation engine id
	 *
	 * @var int
	 */
	public $recommendationEngineId = null;

	/**
	 * Enrichments
	 *
	 * @var array of KalturaChannelEnrichmentHolder
	 */
	public $enrichments;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExternalChannelProfileListResponse extends KalturaListResponse
{
	/**
	 * External channel profiles
	 *
	 * @var array of KalturaExternalChannelProfile
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecommendationProfile extends KalturaObjectBase
{
	/**
	 * recommendation engine id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * recommendation engine name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * recommendation engine is active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * recommendation engine adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * recommendation engine extra parameters
	 *
	 * @var map
	 */
	public $recommendationEngineSettings;

	/**
	 * recommendation engine external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Shared Secret
	 *
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecommendationProfileListResponse extends KalturaListResponse
{
	/**
	 * Recommendation profiles list
	 *
	 * @var array of KalturaRecommendationProfile
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegistrySettings extends KalturaObjectBase
{
	/**
	 * Permission item identifier
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * Permission item name
	 *
	 * @var string
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegistrySettingsListResponse extends KalturaListResponse
{
	/**
	 * Registry settings list
	 *
	 * @var array of KalturaRegistrySettings
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPaymentMethod extends KalturaObjectBase
{
	/**
	 * Household payment method identifier (internal)
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Payment-gateway identifier
	 *
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Payment method name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Indicates whether the payment method allow multiple instances
	 *
	 * @var bool
	 */
	public $allowMultiInstance = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPaymentMethodListResponse extends KalturaListResponse
{
	/**
	 * Follow data list
	 *
	 * @var array of KalturaHouseholdPaymentMethod
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentMethodProfile extends KalturaObjectBase
{
	/**
	 * Payment method identifier (internal)
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Payment gateway identifier (internal)
	 *
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Payment method name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Indicates whether the payment method allow multiple instances
	 *
	 * @var bool
	 */
	public $allowMultiInstance = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentMethodProfileListResponse extends KalturaListResponse
{
	/**
	 * Payment method profiles list
	 *
	 * @var array of KalturaPaymentMethodProfile
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPrice extends KalturaObjectBase
{
	/**
	 * Price
	 *
	 * @var float
	 */
	public $amount = null;

	/**
	 * Currency
	 *
	 * @var string
	 */
	public $currency = null;

	/**
	 * Currency Sign
	 *
	 * @var string
	 */
	public $currencySign = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaProductPrice extends KalturaObjectBase
{
	/**
	 * Product identifier
	 *
	 * @var string
	 */
	public $productId = null;

	/**
	 * Product Type
	 *
	 * @var KalturaTransactionType
	 */
	public $productType = null;

	/**
	 * Product price
	 *
	 * @var KalturaPrice
	 */
	public $price;

	/**
	 * Product purchase status
	 *
	 * @var KalturaPurchaseStatus
	 */
	public $purchaseStatus = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranslationToken extends KalturaObjectBase
{
	/**
	 * Language code
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * Translated value
	 *
	 * @var string
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPpvPrice extends KalturaProductPrice
{
	/**
	 * Media file identifier
	 *
	 * @var int
	 */
	public $fileId = null;

	/**
	 * The associated PPV module identifier
	 *
	 * @var string
	 */
	public $ppvModuleId = null;

	/**
	 * Denotes whether this object is available only as part of a subscription or can be sold separately
	 *
	 * @var bool
	 */
	public $isSubscriptionOnly = null;

	/**
	 * The full price of the item (with no discounts)
	 *
	 * @var KalturaPrice
	 */
	public $fullPrice;

	/**
	 * The identifier of the relevant subscription
	 *
	 * @var string
	 */
	public $subscriptionId = null;

	/**
	 * The identifier of the relevant collection
	 *
	 * @var string
	 */
	public $collectionId = null;

	/**
	 * The identifier of the relevant pre paid
	 *
	 * @var string
	 */
	public $prePaidId = null;

	/**
	 * A list of the descriptions of the PPV module on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $ppvDescriptions;

	/**
	 * If the item already purchased - the identifier of the user (in the household) who purchased this item
	 *
	 * @var string
	 */
	public $purchaseUserId = null;

	/**
	 * If the item already purchased - the identifier of the purchased file
	 *
	 * @var int
	 */
	public $purchasedMediaFileId = null;

	/**
	 * Related media files identifiers (different types)
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $relatedMediaFileIds;

	/**
	 * If the item already purchased - since when the user can start watching the item
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * If the item already purchased - until when the user can watch the item
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Discount end date
	 *
	 * @var int
	 */
	public $discountEndDate = null;

	/**
	 * If the item already purchased and played - the name of the device on which it was first played
	 *
	 * @var string
	 */
	public $firstDeviceName = null;

	/**
	 * If waiver period is enabled - donates whether the user is still in the cancelation window
	 *
	 * @var bool
	 */
	public $isInCancelationPeriod = null;

	/**
	 * The PPV product code
	 *
	 * @var string
	 */
	public $ppvProductCode = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPPVItemPriceDetails extends KalturaObjectBase
{
	/**
	 * The associated PPV module identifier
	 *
	 * @var string
	 */
	public $ppvModuleId = null;

	/**
	 * Denotes whether this object is available only as part of a subscription or can be sold separately
	 *
	 * @var bool
	 */
	public $isSubscriptionOnly = null;

	/**
	 * The calculated price of the item after discounts (as part of a purchased subscription by the user or by using a coupon)
	 *
	 * @var KalturaPrice
	 */
	public $price;

	/**
	 * The full price of the item (with no discounts)
	 *
	 * @var KalturaPrice
	 */
	public $fullPrice;

	/**
	 * Subscription purchase status
	 *
	 * @var KalturaPurchaseStatus
	 */
	public $purchaseStatus = null;

	/**
	 * The identifier of the relevant subscription
	 *
	 * @var string
	 */
	public $subscriptionId = null;

	/**
	 * The identifier of the relevant collection
	 *
	 * @var string
	 */
	public $collectionId = null;

	/**
	 * The identifier of the relevant pre paid
	 *
	 * @var string
	 */
	public $prePaidId = null;

	/**
	 * A list of the descriptions of the PPV module on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $ppvDescriptions;

	/**
	 * If the item already purchased - the identifier of the user (in the household) who purchased this item
	 *
	 * @var string
	 */
	public $purchaseUserId = null;

	/**
	 * If the item already purchased - the identifier of the purchased file
	 *
	 * @var int
	 */
	public $purchasedMediaFileId = null;

	/**
	 * Related media files identifiers (different types)
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $relatedMediaFileIds;

	/**
	 * If the item already purchased - since when the user can start watching the item
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * If the item already purchased - until when the user can watch the item
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Discount end date
	 *
	 * @var int
	 */
	public $discountEndDate = null;

	/**
	 * If the item already purchased and played - the name of the device on which it was first played
	 *
	 * @var string
	 */
	public $firstDeviceName = null;

	/**
	 * If waiver period is enabled - donates whether the user is still in the cancelation window
	 *
	 * @var bool
	 */
	public $isInCancelationPeriod = null;

	/**
	 * The PPV product code
	 *
	 * @var string
	 */
	public $ppvProductCode = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaItemPrice extends KalturaProductPrice
{
	/**
	 * Media file identifier
	 *
	 * @var int
	 */
	public $fileId = null;

	/**
	 * PPV price details
	 *
	 * @var array of KalturaPPVItemPriceDetails
	 */
	public $ppvPriceDetails;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSubscriptionPrice extends KalturaProductPrice
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPaymentGateway extends KalturaObjectBase
{
	/**
	 * payment gateway id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * payment gateway name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Payment gateway default (true/false)
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * distinction payment gateway selected by account or household
	 *
	 * @var KalturaHouseholdPaymentGatewaySelectedBy
	 */
	public $selectedBy = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPaymentGatewayListResponse extends KalturaListResponse
{
	/**
	 * Follow data list
	 *
	 * @var array of KalturaHouseholdPaymentGateway
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentGatewayBaseProfile extends KalturaObjectBase
{
	/**
	 * payment gateway id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * payment gateway name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Payment gateway default (true/false)
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * distinction payment gateway selected by account or household
	 *
	 * @var KalturaHouseholdPaymentGatewaySelectedBy
	 */
	public $selectedBy = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentGatewayProfile extends KalturaPaymentGatewayBaseProfile
{
	/**
	 * Payment gateway is active status
	 *
	 * @var int
	 */
	public $isActive = null;

	/**
	 * Payment gateway adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * Payment gateway transact URL
	 *
	 * @var string
	 */
	public $transactUrl = null;

	/**
	 * Payment gateway status URL
	 *
	 * @var string
	 */
	public $statusUrl = null;

	/**
	 * Payment gateway renew URL
	 *
	 * @var string
	 */
	public $renewUrl = null;

	/**
	 * Payment gateway extra parameters
	 *
	 * @var map
	 */
	public $paymentGatewayeSettings;

	/**
	 * Payment gateway external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Pending Interval in minutes
	 *
	 * @var int
	 */
	public $pendingInterval = null;

	/**
	 * Pending Retries
	 *
	 * @var int
	 */
	public $pendingRetries = null;

	/**
	 * Shared Secret
	 *
	 * @var string
	 */
	public $sharedSecret = null;

	/**
	 * Renew Interval Minutes
	 *
	 * @var int
	 */
	public $renewIntervalMinutes = null;

	/**
	 * Renew Start Minutes
	 *
	 * @var int
	 */
	public $renewStartMinutes = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentGatewayProfileListResponse extends KalturaListResponse
{
	/**
	 * A list of payment-gateway profiles
	 *
	 * @var array of KalturaPaymentGatewayProfile
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaParentalRule extends KalturaObjectBase
{
	/**
	 * Unique parental rule identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Rule display name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Explanatory description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Rule order within the full list of rules
	 *
	 * @var int
	 */
	public $order = null;

	/**
	 * Media asset tag ID to in which to look for corresponding trigger values
	 *
	 * @var int
	 */
	public $mediaTag = null;

	/**
	 * EPG asset tag ID to in which to look for corresponding trigger values
	 *
	 * @var int
	 */
	public $epgTag = null;

	/**
	 * Content that correspond to this rule is not available for guests
	 *
	 * @var bool
	 */
	public $blockAnonymousAccess = null;

	/**
	 * Rule type – Movies, TV series or both
	 *
	 * @var KalturaParentalRuleType
	 */
	public $ruleType = null;

	/**
	 * Media tag values that trigger rule
	 *
	 * @var array of KalturaStringValue
	 */
	public $mediaTagValues;

	/**
	 * EPG tag values that trigger rule
	 *
	 * @var array of KalturaStringValue
	 */
	public $epgTagValues;

	/**
	 * Is the rule the default rule of the account
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * Where was this rule defined account, household or user
	 *
	 * @var KalturaRuleLevel
	 */
	public $origin = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaParentalRuleListResponse extends KalturaListResponse
{
	/**
	 * A list of parental rules
	 *
	 * @var array of KalturaParentalRule
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecording extends KalturaObjectBase
{
	/**
	 * Kaltura unique ID representing the recording identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Recording state: scheduled/recording/recorded/canceled/failed/does_not_exists/deleted
	 *
	 * @var KalturaRecordingStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Kaltura unique ID representing the program identifier
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Recording Type: single/season/series
	 *
	 * @var KalturaRecordingType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Specifies until when the recording is available for viewing. Date and time represented as epoch.
	 *
	 * @var int
	 * @readonly
	 */
	public $viewableUntilDate = null;

	/**
	 * Specifies whether or not the recording is protected
	 *
	 * @var bool
	 * @readonly
	 */
	public $isProtected = null;

	/**
	 * Specifies when was the recording created. Date and time represented as epoch.
	 *
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the recording last updated. Date and time represented as epoch.
	 *
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecordingListResponse extends KalturaListResponse
{
	/**
	 * Recordings
	 *
	 * @var array of KalturaRecording
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBillingTransaction extends KalturaObjectBase
{
	/**
	 * Reciept Code
	 *
	 * @var string
	 * @readonly
	 */
	public $recieptCode = null;

	/**
	 * Purchased Item Name
	 *
	 * @var string
	 * @readonly
	 */
	public $purchasedItemName = null;

	/**
	 * Purchased Item Code
	 *
	 * @var string
	 * @readonly
	 */
	public $purchasedItemCode = null;

	/**
	 * Item Type
	 *
	 * @var KalturaBillingItemsType
	 * @readonly
	 */
	public $itemType = null;

	/**
	 * Billing Action
	 *
	 * @var KalturaBillingAction
	 * @readonly
	 */
	public $billingAction = null;

	/**
	 * price
	 *
	 * @var KalturaPrice
	 * @readonly
	 */
	public $price;

	/**
	 * Action Date
	 *
	 * @var int
	 * @readonly
	 */
	public $actionDate = null;

	/**
	 * Start Date
	 *
	 * @var int
	 * @readonly
	 */
	public $startDate = null;

	/**
	 * End Date
	 *
	 * @var int
	 * @readonly
	 */
	public $endDate = null;

	/**
	 * Payment Method
	 *
	 * @var KalturaPaymentMethodType
	 * @readonly
	 */
	public $paymentMethod = null;

	/**
	 * Payment Method Extra Details
	 *
	 * @var string
	 * @readonly
	 */
	public $paymentMethodExtraDetails = null;

	/**
	 * Is Recurring
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRecurring = null;

	/**
	 * Billing Provider Ref
	 *
	 * @var int
	 * @readonly
	 */
	public $billingProviderRef = null;

	/**
	 * Purchase ID
	 *
	 * @var int
	 * @readonly
	 */
	public $purchaseId = null;

	/**
	 * Remarks
	 *
	 * @var string
	 * @readonly
	 */
	public $remarks = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBillingTransactionListResponse extends KalturaListResponse
{
	/**
	 * Transactions
	 *
	 * @var array of KalturaBillingTransaction
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPermissionItem extends KalturaObjectBase
{
	/**
	 * Permission item identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Permission item name
	 *
	 * @var string
	 */
	public $name = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPermission extends KalturaObjectBase
{
	/**
	 * Permission identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Permission name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * List of permission items associated with the permission
	 *
	 * @var array of KalturaPermissionItem
	 */
	public $permissionItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserRole extends KalturaObjectBase
{
	/**
	 * User role identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * User role name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * List of permissions associated with the user role
	 *
	 * @var array of KalturaPermission
	 */
	public $permissions;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserRoleListResponse extends KalturaListResponse
{
	/**
	 * A list of generic rules
	 *
	 * @var array of KalturaUserRole
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGroupPermission extends KalturaPermission
{
	/**
	 * Permission identifier
	 *
	 * @var string
	 */
	public $group = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaApiArgumentPermissionItem extends KalturaPermissionItem
{
	/**
	 * API service name
	 *
	 * @var string
	 */
	public $service = null;

	/**
	 * API action name
	 *
	 * @var string
	 */
	public $action = null;

	/**
	 * API parameter name
	 *
	 * @var string
	 */
	public $parameter = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaApiParameterPermissionItem extends KalturaPermissionItem
{
	/**
	 * API object name
	 *
	 * @var string
	 */
	public $object = null;

	/**
	 * API parameter name
	 *
	 * @var string
	 */
	public $parameter = null;

	/**
	 * API action type
	 *
	 * @var KalturaApiParameterPermissionItemAction
	 */
	public $action = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaApiActionPermissionItem extends KalturaPermissionItem
{
	/**
	 * API service name
	 *
	 * @var string
	 */
	public $service = null;

	/**
	 * API action name
	 *
	 * @var string
	 */
	public $action = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInboxMessage extends KalturaObjectBase
{
	/**
	 * message id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Status
	 *
	 * @var KalturaInboxMessageStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Type
	 *
	 * @var KalturaInboxMessageType
	 */
	public $type = null;

	/**
	 * Created at
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * url
	 *
	 * @var string
	 */
	public $url = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInboxMessageListResponse extends KalturaListResponse
{
	/**
	 * Follow data list
	 *
	 * @var array of KalturaInboxMessage
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFollowDataBase extends KalturaObjectBase
{
	/**
	 * Announcement Id
	 *
	 * @var int
	 * @readonly
	 */
	public $announcementId = null;

	/**
	 * Status
	 *
	 * @var int
	 * @readonly
	 */
	public $status = null;

	/**
	 * Title
	 *
	 * @var string
	 * @readonly
	 */
	public $title = null;

	/**
	 * Timestamp
	 *
	 * @var int
	 * @readonly
	 */
	public $timestamp = null;

	/**
	 * Follow Phrase
	 *
	 * @var string
	 * @readonly
	 */
	public $followPhrase = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFollowTvSeries extends KalturaFollowDataBase
{
	/**
	 * Asset Id
	 *
	 * @var int
	 * @readonly
	 */
	public $assetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFollowTvSeriesListResponse extends KalturaListResponse
{
	/**
	 * Follow data list
	 *
	 * @var array of KalturaFollowTvSeries
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnnouncementListResponse extends KalturaListResponse
{
	/**
	 * Announcements
	 *
	 * @var array of KalturaAnnouncement
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeed extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $assetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPersonalFeed extends KalturaFeed
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPersonalFeedListResponse extends KalturaListResponse
{
	/**
	 * Follow data list
	 *
	 * @var array of KalturaPersonalFeed
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTopic extends KalturaObjectBase
{
	/**
	 * message id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $subscribersAmount = null;

	/**
	 * automaticIssueNotification
	 *
	 * @var KalturaTopicAutomaticIssueNotification
	 */
	public $automaticIssueNotification = null;

	/**
	 * lastMessageSentDateSec
	 *
	 * @var int
	 */
	public $lastMessageSentDateSec = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTopicListResponse extends KalturaListResponse
{
	/**
	 * Follow data list
	 *
	 * @var array of KalturaTopic
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaProductPriceListResponse extends KalturaListResponse
{
	/**
	 * A list of prices
	 *
	 * @var array of KalturaProductPrice
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaItemPriceListResponse extends KalturaListResponse
{
	/**
	 * A list of item prices
	 *
	 * @var array of KalturaItemPrice
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBaseChannel extends KalturaObjectBase
{
	/**
	 * Unique identifier for the channel
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Channel name
	 *
	 * @var string
	 */
	public $name = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaChannel extends KalturaBaseChannel
{
	/**
	 * Cannel description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Channel images
	 *
	 * @var array of KalturaMediaImage
	 */
	public $images;

	/**
	 * Asset types in the channel.
	 *             -26 is EPG
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $assetTypes;

	/**
	 * Filter expression
	 *
	 * @var string
	 */
	public $filterExpression = null;

	/**
	 * active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Channel order
	 *
	 * @var KalturaAssetOrderBy
	 */
	public $order = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPriceDetails extends KalturaObjectBase
{
	/**
	 * The price code identifier
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * The price code name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The price
	 *
	 * @var KalturaPrice
	 */
	public $price;

	/**
	 * A list of the descriptions for this price on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDiscountModule extends KalturaObjectBase
{
	/**
	 * The discount percentage
	 *
	 * @var float
	 */
	public $percent = null;

	/**
	 * The first date the discount is available
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the discount is available
	 *
	 * @var int
	 */
	public $endDate = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCouponsGroup extends KalturaObjectBase
{
	/**
	 * Coupon group identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Coupon group name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * A list of the descriptions of the coupon group on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;

	/**
	 * The first date the coupons in this coupons group are valid
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the coupons in this coupons group are valid
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Maximum number of uses for each coupon in the group
	 *
	 * @var int
	 */
	public $maxUsesNumber = null;

	/**
	 * Maximum number of uses for each coupon in the group on a renewable subscription
	 *
	 * @var int
	 */
	public $maxUsesNumberOnRenewableSub = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUsageModule extends KalturaObjectBase
{
	/**
	 * Usage module identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Usage module name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 *
	 * @var int
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 *
	 * @var int
	 */
	public $viewLifeCycle = null;

	/**
	 * The amount time an item is available for viewing
	 *
	 * @var int
	 */
	public $fullLifeCycle = null;

	/**
	 * Identifies a specific coupon linked to this object
	 *
	 * @var int
	 */
	public $couponId = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 *
	 * @var int
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 *
	 * @var bool
	 */
	public $isWaiverEnabled = null;

	/**
	 * Indicates that usage is targeted for offline playback
	 *
	 * @var bool
	 */
	public $isOfflinePlayback = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPricePlan extends KalturaUsageModule
{
	/**
	 * Denotes whether or not this object can be renewed
	 *
	 * @var bool
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times the module will be renewed (for the life_cycle period)
	 *
	 * @var int
	 */
	public $renewalsNumber = null;

	/**
	 * Unique identifier associated with this object&#39;s price
	 *
	 * @var int
	 */
	public $priceId = null;

	/**
	 * The discount module identifier of the price plan
	 *
	 * @var int
	 */
	public $discountId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPreviewModule extends KalturaObjectBase
{
	/**
	 * Preview module identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Preview module name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Preview module life cycle - for how long the preview module is active
	 *
	 * @var int
	 */
	public $lifeCycle = null;

	/**
	 * The time you can&#39;t buy the item to which the preview module is assigned to again
	 *
	 * @var int
	 */
	public $nonRenewablePeriod = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSubscription extends KalturaObjectBase
{
	/**
	 * Subscription identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * A list of channels associated with this subscription
	 *
	 * @var array of KalturaBaseChannel
	 */
	public $channels;

	/**
	 * The first date the subscription is available for purchasing
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the subscription is available for purchasing
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * A list of file types identifiers that are supported in this subscription
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $fileTypes;

	/**
	 * Denotes whether or not this subscription can be renewed
	 *
	 * @var bool
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times this subscription will be renewed
	 *
	 * @var int
	 */
	public $renewalsNumber = null;

	/**
	 * Indicates whether the subscription will renew forever
	 *
	 * @var bool
	 */
	public $isInfiniteRenewal = null;

	/**
	 * The price of the subscription
	 *
	 * @var KalturaPriceDetails
	 */
	public $price;

	/**
	 * The internal discount module for the subscription
	 *
	 * @var KalturaDiscountModule
	 */
	public $discountModule;

	/**
	 * Coupons group for the subscription
	 *
	 * @var KalturaCouponsGroup
	 */
	public $couponsGroup;

	/**
	 * A list of the name of the subscription on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $names;

	/**
	 * A list of the descriptions of the subscriptions on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;

	/**
	 * Identifier of the media associated with the subscription
	 *
	 * @var int
	 */
	public $mediaId = null;

	/**
	 * Subscription order (when returned in methods that retrieve subscriptions)
	 *
	 * @var int
	 */
	public $prorityInOrder = null;

	/**
	 * Product code for the subscription
	 *
	 * @var string
	 */
	public $productCode = null;

	/**
	 * Subscription price plans
	 *
	 * @var array of KalturaPricePlan
	 */
	public $pricePlans;

	/**
	 * Subscription preview module
	 *
	 * @var KalturaPreviewModule
	 */
	public $previewModule;

	/**
	 * The household limitation module identifier associated with this subscription
	 *
	 * @var int
	 */
	public $householdLimitationsId = null;

	/**
	 * The subscription grace period in minutes
	 *
	 * @var int
	 */
	public $gracePeriodMinutes = null;

	/**
	 * List of premium services included in the subscription
	 *
	 * @var array of KalturaPremiumService
	 */
	public $premiumServices;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 *
	 * @var int
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 *
	 * @var int
	 */
	public $viewLifeCycle = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 *
	 * @var int
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 *
	 * @var bool
	 */
	public $isWaiverEnabled = null;

	/**
	 * List of permitted user types for the subscription
	 *
	 * @var array of KalturaOTTUserType
	 */
	public $userTypes;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSubscriptionListResponse extends KalturaListResponse
{
	/**
	 * A list of subscriptions
	 *
	 * @var array of KalturaSubscription
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaProductsPriceListResponse extends KalturaListResponse
{
	/**
	 * A list of prices
	 *
	 * @var array of KalturaProductPrice
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntitlement extends KalturaObjectBase
{
	/**
	 * Entitlement type
	 *
	 * @var KalturaTransactionType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Entitlement identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $entitlementId = null;

	/**
	 * The current number of uses
	 *
	 * @var int
	 * @readonly
	 */
	public $currentUses = null;

	/**
	 * The end date of the entitlement
	 *
	 * @var int
	 * @readonly
	 */
	public $endDate = null;

	/**
	 * Current date
	 *
	 * @var int
	 * @readonly
	 */
	public $currentDate = null;

	/**
	 * The last date the item was viewed
	 *
	 * @var int
	 * @readonly
	 */
	public $lastViewDate = null;

	/**
	 * Purchase date
	 *
	 * @var int
	 * @readonly
	 */
	public $purchaseDate = null;

	/**
	 * Purchase identifier (for subscriptions and collections only)
	 *
	 * @var int
	 * @readonly
	 */
	public $purchaseId = null;

	/**
	 * Payment Method
	 *
	 * @var KalturaPaymentMethodType
	 * @readonly
	 */
	public $paymentMethod = null;

	/**
	 * The UDID of the device from which the purchase was made
	 *
	 * @var string
	 * @readonly
	 */
	public $deviceUdid = null;

	/**
	 * The name of the device from which the purchase was made
	 *
	 * @var string
	 * @readonly
	 */
	public $deviceName = null;

	/**
	 * Indicates whether a cancelation window period is enabled
	 *
	 * @var bool
	 * @readonly
	 */
	public $isCancelationWindowEnabled = null;

	/**
	 * The maximum number of uses available for this item (only for subscription and PPV)
	 *
	 * @var int
	 * @readonly
	 */
	public $maxUses = null;

	/**
	 * The date of the next renewal (only for subscription)
	 *
	 * @var int
	 * @readonly
	 */
	public $nextRenewalDate = null;

	/**
	 * Indicates whether the subscription is renewable in this purchase (only for subscription)
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRenewableForPurchase = null;

	/**
	 * Indicates whether a subscription is renewable (only for subscription)
	 *
	 * @var bool
	 * @readonly
	 */
	public $isRenewable = null;

	/**
	 * Media file identifier (only for PPV)
	 *
	 * @var int
	 * @readonly
	 */
	public $mediaFileId = null;

	/**
	 * Media identifier (only for PPV)
	 *
	 * @var int
	 * @readonly
	 */
	public $mediaId = null;

	/**
	 * Indicates whether the user is currently in his grace period entitlement
	 *
	 * @var bool
	 * @readonly
	 */
	public $isInGracePeriod = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntitlementListResponse extends KalturaListResponse
{
	/**
	 * A list of entitlements
	 *
	 * @var array of KalturaEntitlement
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHomeNetwork extends KalturaObjectBase
{
	/**
	 * Home network identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Home network name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Home network description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Is home network is active
	 *
	 * @var bool
	 */
	public $isActive = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHomeNetworkListResponse extends KalturaListResponse
{
	/**
	 * Home networks
	 *
	 * @var array of KalturaHomeNetwork
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFavorite extends KalturaObjectBase
{
	/**
	 * AssetInfo Model
	 *
	 * @var int
	 */
	public $assetId = null;

	/**
	 * Extra Value
	 *
	 * @var string
	 */
	public $extraData = null;

	/**
	 * Specifies when was the favorite created. Date and time represented as epoch.
	 *
	 * @var int
	 * @readonly
	 */
	public $createDate = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFavoriteListResponse extends KalturaListResponse
{
	/**
	 * A list of favorites
	 *
	 * @var array of KalturaFavorite
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOTTUserListResponse extends KalturaListResponse
{
	/**
	 * A list of users
	 *
	 * @var array of KalturaOTTUser
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetStatisticsListResponse extends KalturaListResponse
{
	/**
	 * Assets
	 *
	 * @var array of KalturaAssetStatistics
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSlimAssetInfoWrapper extends KalturaListResponse
{
	/**
	 * Assets
	 *
	 * @var array of KalturaBaseAssetInfo
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetHistory extends KalturaObjectBase
{
	/**
	 * Asset identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $assetId = null;

	/**
	 * Position in seconds of the relevant asset
	 *
	 * @var int
	 * @readonly
	 */
	public $position = null;

	/**
	 * Duration in seconds of the relevant asset
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * The date when the media was last watched
	 *
	 * @var int
	 * @readonly
	 */
	public $watchedDate = null;

	/**
	 * Boolean which specifies whether the user finished watching the movie or not
	 *
	 * @var bool
	 * @readonly
	 */
	public $finishedWatching = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetHistoryListResponse extends KalturaListResponse
{
	/**
	 * WatchHistoryAssets Models
	 *
	 * @var array of KalturaAssetHistory
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAppToken extends KalturaObjectBase
{
	/**
	 * The id of the application token
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Expiry time of current token (unix timestamp in seconds)
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Partner identifier
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Expiry duration of KS (Kaltura Session) that created using the current token (in seconds)
	 *
	 * @var int
	 */
	public $sessionDuration = null;

	/**
	 * The hash type of the token
	 *
	 * @var KalturaAppTokenHashType
	 */
	public $hashType = null;

	/**
	 * Comma separated privileges to be applied on KS (Kaltura Session) that created using the current token
	 *
	 * @var string
	 */
	public $sessionPrivileges = null;

	/**
	 * Type of KS (Kaltura Session) that created using the current token
	 *
	 * @var KalturaSessionType
	 */
	public $sessionType = null;

	/**
	 * Application token status
	 *
	 * @var KalturaAppTokenStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The application token
	 *
	 * @var string
	 */
	public $token = null;

	/**
	 * User id of KS (Kaltura Session) that created using the current token
	 *
	 * @var string
	 */
	public $sessionUserId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSession extends KalturaObjectBase
{
	/**
	 * KS
	 *
	 * @var string
	 */
	public $ks = null;

	/**
	 * Session type
	 *
	 * @var KalturaSessionType
	 */
	public $sessionType = null;

	/**
	 * Partner identifier
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * User identifier
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * Expiry
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Privileges
	 *
	 * @var string
	 */
	public $privileges = null;

	/**
	 * udid
	 *
	 * @var string
	 */
	public $udid = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSessionInfo extends KalturaSession
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetFilter extends KalturaFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBundleFilter extends KalturaAssetFilter
{
	/**
	 * Bundle Id.
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * bundleType - possible values: Subscription or Collection
	 *
	 * @var KalturaBundleType
	 */
	public $bundleTypeEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaChannelExternalFilter extends KalturaAssetFilter
{
	/**
	 * External Channel Id.
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * UtcOffsetEqual
	 *
	 * @var string
	 */
	public $utcOffsetEqual = null;

	/**
	 * FreeTextEqual
	 *
	 * @var string
	 */
	public $freeText = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaChannelFilter extends KalturaAssetFilter
{
	/**
	 * Channel Id
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $kSql = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRelatedFilter extends KalturaAssetFilter
{
	/**
	 * Search assets using dynamic criteria. Provided collection of nested expressions with key, comparison operators, value, and logical conjunction.
	 *             Possible keys: any Tag or Meta defined in the system and the following reserved keys: start_date, end_date. 
	 *             epg_id, media_id - for specific asset IDs.
	 *             geo_block - only valid value is &quot;true&quot;: When enabled, only assets that are not restriced to the user by geo-block rules will return.
	 *             parental_rules - only valid value is &quot;true&quot;: When enabled, only assets that the user doesn&#39;t need to provide PIN code will return.
	 *             epg_channel_id – the channel identifier of the EPG program.
	 *             entitled_assets - valid values: &quot;free&quot;, &quot;entitled&quot;, &quot;both&quot;. free - gets only free to watch assets. entitled - only those that the user is implicitly entitled to watch.
	 *             Comparison operators: for numerical fields =, &gt;, &gt;=, &lt;, &lt;=, : (in). For alpha-numerical fields =, != (not), ~ (like), !~, ^ (starts with). Logical conjunction: and, or. 
	 *             Search values are limited to 20 characters each.
	 *             (maximum length of entire filter is 1024 characters)
	 *
	 * @var string
	 */
	public $kSql = null;

	/**
	 * the ID of the asset for which to return related assets
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRelatedExternalFilter extends KalturaAssetFilter
{
	/**
	 * the External ID of the asset for which to return related assets
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * UtcOffsetEqual
	 *
	 * @var int
	 */
	public $utcOffsetEqual = null;

	/**
	 * FreeText
	 *
	 * @var string
	 */
	public $freeText = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSearchAssetFilter extends KalturaAssetFilter
{
	/**
	 * Search assets using dynamic criteria. Provided collection of nested expressions with key, comparison operators, value, and logical conjunction.
	 *             Possible keys: any Tag or Meta defined in the system and the following reserved keys: start_date, end_date. 
	 *             epg_id, media_id - for specific asset IDs.
	 *             geo_block - only valid value is &quot;true&quot;: When enabled, only assets that are not restriced to the user by geo-block rules will return.
	 *             parental_rules - only valid value is &quot;true&quot;: When enabled, only assets that the user doesn&#39;t need to provide PIN code will return.
	 *             epg_channel_id – the channel identifier of the EPG program.
	 *             entitled_assets - valid values: &quot;free&quot;, &quot;entitled&quot;, &quot;both&quot;. free - gets only free to watch assets. entitled - only those that the user is implicitly entitled to watch.
	 *             Comparison operators: for numerical fields =, &gt;, &gt;=, &lt;, &lt;=, : (in). For alpha-numerical fields =, != (not), ~ (like), !~, ^ (starts with). Logical conjunction: and, or. 
	 *             Search values are limited to 20 characters each.
	 *             (maximum length of entire filter is 1024 characters)
	 *
	 * @var string
	 */
	public $kSql = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * Comma separated list of EPG channel ids to search within.
	 *
	 * @var string
	 */
	public $idIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSearchExternalFilter extends KalturaAssetFilter
{
	/**
	 * Query
	 *
	 * @var string
	 */
	public $query = null;

	/**
	 * UtcOffsetEqual
	 *
	 * @var int
	 */
	public $utcOffsetEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetFileContext extends KalturaObjectBase
{
	/**
	 * viewLifeCycle
	 *
	 * @var string
	 * @readonly
	 */
	public $viewLifeCycle = null;

	/**
	 * fullLifeCycle
	 *
	 * @var string
	 * @readonly
	 */
	public $fullLifeCycle = null;

	/**
	 * isOfflinePlayBack
	 *
	 * @var bool
	 * @readonly
	 */
	public $isOfflinePlayBack = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetStatisticsQuery extends KalturaObjectBase
{
	/**
	 * Comma separated list of asset identifiers.
	 *
	 * @var string
	 */
	public $assetIdIn = null;

	/**
	 * Asset type
	 *
	 * @var KalturaAssetType
	 */
	public $assetTypeEqual = null;

	/**
	 * The beginning of the time window to get the statistics for (in epoch).
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * /// The end of the time window to get the statistics for (in epoch).
	 *
	 * @var int
	 */
	public $endDateGreaterThanOrEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCDNPartnerSettings extends KalturaObjectBase
{
	/**
	 * Default CDN adapter identifier
	 *
	 * @var int
	 */
	public $defaultAdapterId = null;

	/**
	 * Default recording CDN adapter identifier
	 *
	 * @var int
	 */
	public $defaultRecordingAdapterId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegionFilter extends KalturaFilter
{
	/**
	 * List of comma separated regions external identifiers
	 *
	 * @var string
	 */
	public $externalIdIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetCommentFilter extends KalturaFilter
{
	/**
	 * Asset Id
	 *
	 * @var int
	 */
	public $assetIdEqual = null;

	/**
	 * Asset Type
	 *
	 * @var KalturaAssetType
	 */
	public $assetTypeEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaKeyValue extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentGatewayConfiguration extends KalturaObjectBase
{
	/**
	 * Payment gateway configuration
	 *
	 * @var array of KalturaKeyValue
	 */
	public $paymentGatewayeConfiguration;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaProductPriceFilter extends KalturaFilter
{
	/**
	 * Comma separated subscriptions identifiers
	 *
	 * @var string
	 */
	public $subscriptionIdIn = null;

	/**
	 * Comma separated media files identifiers
	 *
	 * @var string
	 */
	public $fileIdIn = null;

	/**
	 * A flag that indicates if only the lowest price of an item should return
	 *
	 * @var bool
	 */
	public $isLowest = null;

	/**
	 * Discount coupon code
	 *
	 * @var string
	 */
	public $couponCodeEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSeriesRecordingFilter extends KalturaFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdQuota extends KalturaObjectBase
{
	/**
	 * Household identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $householdId = null;

	/**
	 * Total quota that is allocated to the household
	 *
	 * @var int
	 * @readonly
	 */
	public $totalQuota = null;

	/**
	 * Available quota that household has remaining
	 *
	 * @var int
	 * @readonly
	 */
	public $availableQuota = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInboxMessageFilter extends KalturaFilter
{
	/**
	 * List of inbox message types to search within.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * createdAtGreaterThanOrEqual
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * createdAtLessThanOrEqual
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMessageTemplate extends KalturaObjectBase
{
	/**
	 * The message template with placeholders
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Default date format for the date &amp; time entries used in the template
	 *
	 * @var string
	 */
	public $dateFormat = null;

	/**
	 * Template type. Possible values: Series
	 *
	 * @var KalturaOTTAssetType
	 */
	public $assetType = null;

	/**
	 * Sound file name to play upon message arrival to the device (if supported by target device)
	 *
	 * @var string
	 */
	public $sound = null;

	/**
	 * an optional action
	 *
	 * @var string
	 */
	public $action = null;

	/**
	 * URL template for deep linking. Example - /app/location/{mediaId}
	 *
	 * @var string
	 */
	public $url = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFollowTvSeriesFilter extends KalturaFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPersonalFeedFilter extends KalturaFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPpv extends KalturaObjectBase
{
	/**
	 * PPV identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * the name for the ppv
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The price of the ppv
	 *
	 * @var KalturaPriceDetails
	 */
	public $price;

	/**
	 * A list of file types identifiers that are supported in this ppv
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $fileTypes;

	/**
	 * The internal discount module for the ppv
	 *
	 * @var KalturaDiscountModule
	 */
	public $discountModules;

	/**
	 * Coupons group for the ppv
	 *
	 * @var KalturaCouponsGroup
	 */
	public $couponsGroup;

	/**
	 * A list of the descriptions of the ppv on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;

	/**
	 * Product code for the ppv
	 *
	 * @var string
	 */
	public $productCode = null;

	/**
	 * Indicates whether or not this ppv can be purchased standalone or only as part of a subscription
	 *
	 * @var bool
	 */
	public $isSubscriptionOnly = null;

	/**
	 * Indicates whether or not this ppv can be consumed only on the first device
	 *
	 * @var bool
	 */
	public $firstDeviceLimitation = null;

	/**
	 * PPV usage module
	 *
	 * @var KalturaUsageModule
	 */
	public $usageModule;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecordingFilter extends KalturaFilter
{
	/**
	 * Recording Statuses
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * KSQL expression
	 *
	 * @var string
	 */
	public $filterExpression = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLicensedUrl extends KalturaObjectBase
{
	/**
	 * Main licensed URL
	 *
	 * @var string
	 */
	public $mainUrl = null;

	/**
	 * An alternate URL to use in case the main fails
	 *
	 * @var string
	 */
	public $altUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLicensedUrlBaseRequest extends KalturaObjectBase
{
	/**
	 * Asset identifier
	 *
	 * @var string
	 */
	public $assetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLicensedUrlMediaRequest extends KalturaLicensedUrlBaseRequest
{
	/**
	 * Identifier of the content to get the link for (file identifier)
	 *
	 * @var int
	 */
	public $contentId = null;

	/**
	 * Base URL for the licensed URLs
	 *
	 * @var string
	 */
	public $baseUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLicensedUrlEpgRequest extends KalturaLicensedUrlMediaRequest
{
	/**
	 * The stream type to get the URL for
	 *
	 * @var KalturaStreamType
	 */
	public $streamType = null;

	/**
	 * The start date of the stream (epoch)
	 *
	 * @var int
	 */
	public $startDate = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLicensedUrlRecordingRequest extends KalturaLicensedUrlBaseRequest
{
	/**
	 * The file type for the URL
	 *
	 * @var string
	 */
	public $fileType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegistryResponse extends KalturaObjectBase
{
	/**
	 * Announcement Id
	 *
	 * @var int
	 */
	public $announcementId = null;

	/**
	 * Key
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * URL
	 *
	 * @var string
	 */
	public $url = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaNotificationsPartnerSettings extends KalturaObjectBase
{
	/**
	 * Push notification capability is enabled for the account
	 *
	 * @var bool
	 */
	public $pushNotificationEnabled = null;

	/**
	 * System announcement capability is enabled for the account
	 *
	 * @var bool
	 */
	public $pushSystemAnnouncementsEnabled = null;

	/**
	 * Window start time (UTC) for send automated push messages
	 *
	 * @var int
	 */
	public $pushStartHour = null;

	/**
	 * Window end time (UTC) for send automated push messages
	 *
	 * @var int
	 */
	public $pushEndHour = null;

	/**
	 * Inbox enabled
	 *
	 * @var bool
	 */
	public $inboxEnabled = null;

	/**
	 * Message TTL in days
	 *
	 * @var int
	 */
	public $messageTTLDays = null;

	/**
	 * Automatic issue follow notification
	 *
	 * @var bool
	 */
	public $automaticIssueFollowNotification = null;

	/**
	 * Topic expiration duration in days
	 *
	 * @var int
	 */
	public $topicExpirationDurationDays = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaNotificationsSettings extends KalturaObjectBase
{
	/**
	 * Specify if the user want to receive push notifications or not
	 *
	 * @var bool
	 */
	public $pushNotificationEnabled = null;

	/**
	 * Specify if the user will be notified for followed content via push. (requires push_notification_enabled to be enabled)
	 *
	 * @var bool
	 */
	public $pushFollowEnabled = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentMethodProfileFilter extends KalturaFilter
{
	/**
	 * Payment gateway identifier to list the payment methods for
	 *
	 * @var int
	 */
	public $paymentGatewayIdEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTimeShiftedTvPartnerSettings extends KalturaObjectBase
{
	/**
	 * Is catch-up enabled
	 *
	 * @var bool
	 */
	public $catchUpEnabled = null;

	/**
	 * Is c-dvr enabled
	 *
	 * @var bool
	 */
	public $cdvrEnabled = null;

	/**
	 * Is start-over enabled
	 *
	 * @var bool
	 */
	public $startOverEnabled = null;

	/**
	 * Is trick-play enabled
	 *
	 * @var bool
	 */
	public $trickPlayEnabled = null;

	/**
	 * Is recording schedule window enabled
	 *
	 * @var bool
	 */
	public $recordingScheduleWindowEnabled = null;

	/**
	 * Is recording protection enabled
	 *
	 * @var bool
	 */
	public $protectionEnabled = null;

	/**
	 * Catch-up buffer length
	 *
	 * @var int
	 */
	public $catchUpBufferLength = null;

	/**
	 * Trick play buffer length
	 *
	 * @var int
	 */
	public $trickPlayBufferLength = null;

	/**
	 * Recording schedule window. Indicates how long (in minutes) after the program starts it is allowed to schedule the recording
	 *
	 * @var int
	 */
	public $recordingScheduleWindow = null;

	/**
	 * Indicates how long (in seconds) before the program starts the recording will begin
	 *
	 * @var int
	 */
	public $paddingBeforeProgramStarts = null;

	/**
	 * Indicates how long (in seconds) after the program ends the recording will end
	 *
	 * @var int
	 */
	public $paddingAfterProgramEnds = null;

	/**
	 * Specify the time in days that a recording should be protected. Start time begins at protection request.
	 *
	 * @var int
	 */
	public $protectionPeriod = null;

	/**
	 * Indicates how many percent of the quota can be used for protection
	 *
	 * @var int
	 */
	public $protectionQuotaPercentage = null;

	/**
	 * Specify the time in days that a recording should be kept for user. Start time begins with the program end date.
	 *
	 * @var int
	 */
	public $recordingLifetimePeriod = null;

	/**
	 * The time in days before the recording lifetime is due from which the client should be able to warn user about deletion.
	 *
	 * @var int
	 */
	public $cleanupNoticePeroid = null;

	/**
	 * Is recording of series enabled
	 *
	 * @var bool
	 */
	public $seriesRecordingEnabled = null;

	/**
	 * Is recording playback for non-entitled channel enables
	 *
	 * @var bool
	 */
	public $nonEntitledChannelPlaybackEnabled = null;

	/**
	 * Is recording playback for non-existing channel enables
	 *
	 * @var bool
	 */
	public $nonExistingChannelPlaybackEnabled = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTopicFilter extends KalturaFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserAssetsListItem extends KalturaObjectBase
{
	/**
	 * Asset identifier
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * The order index of the asset in the list
	 *
	 * @var int
	 */
	public $orderIndex = null;

	/**
	 * The type of the asset
	 *
	 * @var KalturaUserAssetsListItemType
	 */
	public $type = null;

	/**
	 * The identifier of the user who added the item to the list
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The type of the list
	 *
	 * @var KalturaUserAssetsListType
	 */
	public $listType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDeviceFamilyBase extends KalturaObjectBase
{
	/**
	 * Device family identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Device family name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Max number of devices allowed for this family
	 *
	 * @var int
	 */
	public $deviceLimit = null;

	/**
	 * Max number of streams allowed for this family
	 *
	 * @var int
	 */
	public $concurrentLimit = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdDevice extends KalturaObjectBase
{
	/**
	 * Household identifier
	 *
	 * @var int
	 */
	public $householdId = null;

	/**
	 * Device UDID
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * Device name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Device brand name
	 *
	 * @var string
	 */
	public $brand = null;

	/**
	 * Device brand identifier
	 *
	 * @var int
	 */
	public $brandId = null;

	/**
	 * Device activation date (epoch)
	 *
	 * @var int
	 */
	public $activatedOn = null;

	/**
	 * Device state
	 *
	 * @var KalturaDeviceStatus
	 * @readonly
	 */
	public $status = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdDeviceFamilyLimitations extends KalturaDeviceFamilyBase
{
	/**
	 * Allowed device change frequency code
	 *
	 * @var int
	 */
	public $frequency = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdLimitations extends KalturaObjectBase
{
	/**
	 * Household limitation module identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Household limitation module name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Max number of streams allowed for the household
	 *
	 * @var int
	 */
	public $concurrentLimit = null;

	/**
	 * Max number of devices allowed for the household
	 *
	 * @var int
	 */
	public $deviceLimit = null;

	/**
	 * Allowed device change frequency code
	 *
	 * @var int
	 */
	public $deviceFrequency = null;

	/**
	 * Allowed device change frequency description
	 *
	 * @var string
	 */
	public $deviceFrequencyDescription = null;

	/**
	 * Allowed user change frequency code
	 *
	 * @var int
	 */
	public $userFrequency = null;

	/**
	 * Allowed user change frequency description
	 *
	 * @var string
	 */
	public $userFrequencyDescription = null;

	/**
	 * Allowed NPVR Quota in Seconds
	 *
	 * @var int
	 */
	public $npvrQuotaInSeconds = null;

	/**
	 * Max number of users allowed for the household
	 *
	 * @var int
	 */
	public $usersLimit = null;

	/**
	 * Device families limitations
	 *
	 * @var array of KalturaHouseholdDeviceFamilyLimitations
	 */
	public $deviceFamiliesLimitations;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExportTaskFilter extends KalturaFilter
{
	/**
	 * Comma separated tasks identifiers
	 *
	 * @var string
	 */
	public $idIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaPartnerConfiguration extends KalturaObjectBase
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBillingPartnerConfig extends KalturaPartnerConfiguration
{
	/**
	 * configuration value
	 *
	 * @var string
	 */
	public $value = null;

	/**
	 * partner configuration type
	 *
	 * @var KalturaPartnerConfigurationType
	 */
	public $type = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOSSAdapterBaseProfile extends KalturaObjectBase
{
	/**
	 * OSS adapter id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * OSS adapter name
	 *
	 * @var string
	 */
	public $name = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOSSAdapterProfile extends KalturaOSSAdapterBaseProfile
{
	/**
	 * OSS adapter active status
	 *
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * OSS adapter adapter URL
	 *
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * OSS adapter extra parameters
	 *
	 * @var map
	 */
	public $ossAdapterSettings;

	/**
	 * OSS adapter external identifier
	 *
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Shared Secret
	 *
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLoginSession extends KalturaObjectBase
{
	/**
	 * Access token in a KS format
	 *
	 * @var string
	 */
	public $ks = null;

	/**
	 * Refresh Token
	 *
	 * @var string
	 */
	public $refreshToken = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserAssetRuleFilter extends KalturaFilter
{
	/**
	 * Asset identifier to filter by
	 *
	 * @var int
	 */
	public $assetIdEqual = null;

	/**
	 * Asset type to filter by - 0 = EPG, 1 = media
	 *
	 * @var int
	 */
	public $assetTypeEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetHistoryFilter extends KalturaFilter
{
	/**
	 * Comma separated list of asset types to search within.
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * Comma separated list of asset identifiers.
	 *
	 * @var string
	 */
	public $assetIdIn = null;

	/**
	 * Which type of recently watched media to include in the result – those that finished watching, those that are in progress or both.
	 *             If omitted or specified filter = all – return all types.
	 *             Allowed values: progress – return medias that are in-progress, done – return medias that finished watching.
	 *
	 * @var KalturaWatchStatus
	 */
	public $statusEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHousehold extends KalturaObjectBase
{
	/**
	 * Household identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Household name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Household description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Household external identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Household limitation module identifier
	 *
	 * @var int
	 */
	public $householdLimitationsId = null;

	/**
	 * The max number of the devices that can be added to the household
	 *
	 * @var int
	 */
	public $devicesLimit = null;

	/**
	 * The max number of the users that can be added to the household
	 *
	 * @var int
	 */
	public $usersLimit = null;

	/**
	 * The max number of concurrent streams in the household
	 *
	 * @var int
	 */
	public $concurrentLimit = null;

	/**
	 * The households region identifier
	 *
	 * @var int
	 */
	public $regionId = null;

	/**
	 * Household state
	 *
	 * @var KalturaHouseholdState
	 * @readonly
	 */
	public $state = null;

	/**
	 * Is household frequency enabled
	 *
	 * @var bool
	 */
	public $isFrequencyEnabled = null;

	/**
	 * The next time a device is allowed to be removed from the household (epoch)
	 *
	 * @var int
	 */
	public $frequencyNextDeviceAction = null;

	/**
	 * The next time a user is allowed to be removed from the household (epoch)
	 *
	 * @var int
	 */
	public $frequencyNextUserAction = null;

	/**
	 * Household restriction
	 *
	 * @var KalturaHouseholdRestriction
	 */
	public $restriction = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDevicePin extends KalturaObjectBase
{
	/**
	 * Device pin
	 *
	 * @var string
	 */
	public $pin = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBookmarkFilter extends KalturaFilter
{
	/**
	 * Comma separated list of assets identifiers
	 *
	 * @var string
	 */
	public $assetIdIn = null;

	/**
	 * Asset type
	 *
	 * @var KalturaAssetType
	 */
	public $assetTypeEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPin extends KalturaObjectBase
{
	/**
	 * PIN code
	 *
	 * @var string
	 */
	public $pin = null;

	/**
	 * Where the PIN was defined at – account, household or user
	 *
	 * @var KalturaRuleLevel
	 */
	public $origin = null;

	/**
	 * PIN type
	 *
	 * @var KalturaPinType
	 */
	public $type = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPurchaseSettings extends KalturaPin
{
	/**
	 * Purchase permission - block, ask or allow
	 *
	 * @var KalturaPurchaseSettingsType
	 */
	public $permission = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdUser extends KalturaObjectBase
{
	/**
	 * The identifier of the household
	 *
	 * @var int
	 */
	public $householdId = null;

	/**
	 * The identifier of the user
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * True if the user added as master use
	 *
	 * @var bool
	 */
	public $isMaster = null;

	/**
	 * The username of the household master for adding a user in status pending for the household master to approve
	 *
	 * @var string
	 * @insertonly
	 */
	public $householdMasterUsername = null;

	/**
	 * The status of the user in the household
	 *
	 * @var KalturaHouseholdUserStatus
	 * @readonly
	 */
	public $status = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSubscriptionFilter extends KalturaFilter
{
	/**
	 * Comma separated subscription identifiers or file identifier (only 1) to get the subscriptions by
	 *
	 * @var string
	 */
	public $subscriptionIdIn = null;

	/**
	 * Media-file identifier to get the subscriptions by
	 *
	 * @var int
	 */
	public $mediaFileIdEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOTTCategory extends KalturaObjectBase
{
	/**
	 * Unique identifier for the category
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Category name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Category parent identifier
	 *
	 * @var int
	 */
	public $parentCategoryId = null;

	/**
	 * Child categories
	 *
	 * @var array of KalturaOTTCategory
	 */
	public $childCategories;

	/**
	 * Category channels
	 *
	 * @var array of KalturaChannel
	 */
	public $channels;

	/**
	 * Category images
	 *
	 * @var array of KalturaMediaImage
	 */
	public $images;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCoupon extends KalturaObjectBase
{
	/**
	 * Coupons group details
	 *
	 * @var KalturaCouponsGroup
	 * @readonly
	 */
	public $couponsGroup;

	/**
	 * Coupon status
	 *
	 * @var KalturaCouponStatus
	 * @readonly
	 */
	public $status = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntitlementFilter extends KalturaFilter
{
	/**
	 * The type of the entitlements to return
	 *
	 * @var KalturaTransactionType
	 */
	public $entitlementTypeEqual = null;

	/**
	 * Reference type to filter by
	 *
	 * @var KalturaEntityReferenceBy
	 */
	public $entityReferenceEqual = null;

	/**
	 * Is expired
	 *
	 * @var bool
	 */
	public $isExpiredEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFavoriteFilter extends KalturaFilter
{
	/**
	 * Media type to filter by the favorite assets
	 *
	 * @var int
	 */
	public $mediaTypeIn = null;

	/**
	 * Media identifiers from which to filter the favorite assets
	 *
	 * @var string
	 */
	public $mediaIdIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaSocial extends KalturaObjectBase
{
	/**
	 * Facebook identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Full name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * First name
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * Last name
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * User email
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * Gender
	 *
	 * @var string
	 */
	public $gender = null;

	/**
	 * User identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * User birthday
	 *
	 * @var string
	 */
	public $birthday = null;

	/**
	 * User model status
	 *             Possible values: UNKNOWN, OK, ERROR, NOACTION, NOTEXIST, CONFLICT, MERGE, MERGEOK, NEWUSER, MINFRIENDS, INVITEOK, INVITEERROR, ACCESSDENIED, WRONGPASSWORDORUSERNAME, UNMERGEOK
	 *
	 * @var string
	 * @readonly
	 */
	public $status = null;

	/**
	 * Profile picture URL
	 *
	 * @var string
	 */
	public $pictureUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookSocial extends KalturaSocial
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLoginResponse extends KalturaObjectBase
{
	/**
	 * User
	 *
	 * @var KalturaOTTUser
	 */
	public $user;

	/**
	 * Kaltura login session details
	 *
	 * @var KalturaLoginSession
	 */
	public $loginSession;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSocialConfig extends KalturaObjectBase
{
	/**
	 * The application identifier
	 *
	 * @var string
	 */
	public $appId = null;

	/**
	 * List of application permissions
	 *
	 * @var string
	 */
	public $permissions = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPurchaseBase extends KalturaObjectBase
{
	/**
	 * Identifier for the package from which this content is offered
	 *
	 * @var int
	 */
	public $productId = null;

	/**
	 * Identifier for the content to purchase. Relevant only if Product type = PPV
	 *
	 * @var int
	 */
	public $contentId = null;

	/**
	 * Package type. Possible values: PPV, Subscription, Collection
	 *
	 * @var KalturaTransactionType
	 */
	public $productType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPurchase extends KalturaPurchaseBase
{
	/**
	 * Identifier for paying currency, according to ISO 4217
	 *
	 * @var string
	 */
	public $currency = null;

	/**
	 * Net sum to charge – as a one-time transaction. Price must match the previously provided price for the specified content.
	 *
	 * @var float
	 */
	public $price = null;

	/**
	 * Identifier for a pre-entered payment method. If not provided – the household’s default payment method is used
	 *
	 * @var int
	 */
	public $paymentMethodId = null;

	/**
	 * Identifier for a pre-associated payment gateway. If not provided – the account’s default payment gateway is used
	 *
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Coupon code
	 *
	 * @var string
	 */
	public $coupon = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPurchaseSession extends KalturaPurchase
{
	/**
	 * Preview module identifier (relevant only for subscription)
	 *
	 * @var int
	 */
	public $previewModuleId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExternalReceipt extends KalturaPurchaseBase
{
	/**
	 * A unique identifier that was provided by the In-App billing service to validate the purchase
	 *
	 * @var string
	 */
	public $receiptId = null;

	/**
	 * The payment gateway name for the In-App billing service to be used. Possible values: Google/Apple
	 *
	 * @var string
	 */
	public $paymentGatewayName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTransaction extends KalturaObjectBase
{
	/**
	 * Kaltura unique ID representing the transaction
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * Transaction reference ID received from the payment gateway. 
	 *             Value is available only if the payment gateway provides this information.
	 *
	 * @var string
	 */
	public $paymentGatewayReferenceId = null;

	/**
	 * Response ID received from by the payment gateway. 
	 *             Value is available only if the payment gateway provides this information.
	 *
	 * @var string
	 */
	public $paymentGatewayResponseId = null;

	/**
	 * Transaction state: OK/Pending/Failed
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * Adapter failure reason code
	 *             Insufficient funds = 20, Invalid account = 21, User unknown = 22, Reason unknown = 23, Unknown payment gateway response = 24,
	 *             No response from payment gateway = 25, Exceeded retry limit = 26, Illegal client request = 27, Expired = 28
	 *
	 * @var int
	 */
	public $failReasonCode = null;

	/**
	 * Entitlement creation date
	 *
	 * @var int
	 */
	public $createdAt = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTransactionStatus extends KalturaObjectBase
{
	/**
	 * Payment gateway adapter application state for the transaction to update
	 *
	 * @var KalturaTransactionAdapterStatus
	 */
	public $adapterTransactionStatus = null;

	/**
	 * External transaction identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Payment gateway transaction status
	 *
	 * @var string
	 */
	public $externalStatus = null;

	/**
	 * Payment gateway message
	 *
	 * @var string
	 */
	public $externalMessage = null;

	/**
	 * The reason the transaction failed
	 *
	 * @var int
	 */
	public $failReason = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserLoginPin extends KalturaObjectBase
{
	/**
	 * Generated login pin code
	 *
	 * @var string
	 */
	public $pinCode = null;

	/**
	 * Login pin expiration time (epoch)
	 *
	 * @var int
	 */
	public $expirationTime = null;

	/**
	 * User Identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaParentalRuleFilter extends KalturaFilter
{
	/**
	 * Reference type to filter by
	 *
	 * @var KalturaEntityReferenceBy
	 */
	public $entityReferenceEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTransactionHistoryFilter extends KalturaFilter
{
	/**
	 * Reference type to filter by
	 *
	 * @var KalturaEntityReferenceBy
	 */
	public $entityReferenceEqual = null;

	/**
	 * Filter transactions later than specific date
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * Filter transactions earlier than specific date
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserRoleFilter extends KalturaFilter
{
	/**
	 * Comma separated roles identifiers
	 *
	 * @var string
	 */
	public $idIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOTTUserFilter extends KalturaFilter
{
	/**
	 * User Filter By
	 *
	 * @var KalturaOTTUserBy
	 */
	public $userByEqual = null;

	/**
	 * The User identifiers
	 *
	 * @var string
	 */
	public $valueEqual = null;


}

