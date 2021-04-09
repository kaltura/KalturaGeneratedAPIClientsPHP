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
// Copyright (C) 2006-2021  Kaltura Inc.
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
require_once(dirname(__FILE__) . "/../KalturaClientBase.php");
require_once(dirname(__FILE__) . "/../KalturaEnums.php");
require_once(dirname(__FILE__) . "/../KalturaTypes.php");
require_once(dirname(__FILE__) . "/KalturaEventNotificationClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaBulkUploadClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskCreationMode extends KalturaEnumBase
{
	const MANUAL = 1;
	const AUTOMATIC = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskStatus extends KalturaEnumBase
{
	const PENDING = 1;
	const READY = 2;
	const PROCESSING = 3;
	const PENDING_MODERATION = 4;
	const REJECTED = 5;
	const ERROR = 6;
	const ABORTED = 7;
	const PENDING_ENTRY_READY = 8;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileContentDeletionPolicy extends KalturaEnumBase
{
	const DO_NOTHING = 1;
	const DELETE_ONCE_PROCESSED = 2;
	const DELETE_AFTER_WEEK = 3;
	const DELETE_AFTER_MONTH = 4;
	const DELETE_AFTER_THREE_MONTHS = 5;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileStatus extends KalturaEnumBase
{
	const DISABLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileType extends KalturaEnumBase
{
	const FREE_TRIAL = 1;
	const PAID = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemOutputFormat extends KalturaEnumBase
{
	const SRT = 1;
	const DFXP = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemStatus extends KalturaEnumBase
{
	const DEPRECATED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorServiceFeature extends KalturaEnumBase
{
	const CAPTIONS = 1;
	const TRANSLATION = 2;
	const ALIGNMENT = 3;
	const AUDIO_DESCRIPTION = 4;
	const CHAPTERING = 5;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorServiceTurnAroundTime extends KalturaEnumBase
{
	const BEST_EFFORT = -1;
	const IMMEDIATE = 0;
	const ONE_BUSINESS_DAY = 1;
	const TWO_BUSINESS_DAYS = 2;
	const THREE_BUSINESS_DAYS = 3;
	const FOUR_BUSINESS_DAYS = 4;
	const FIVE_BUSINESS_DAYS = 5;
	const SIX_BUSINESS_DAYS = 6;
	const SEVEN_BUSINESS_DAYS = 7;
	const THIRTY_MINUTES = 1800;
	const TWO_HOURS = 7200;
	const THREE_HOURS = 10800;
	const SIX_HOURS = 21600;
	const EIGHT_HOURS = 28800;
	const TWELVE_HOURS = 43200;
	const TWENTY_FOUR_HOURS = 86400;
	const FORTY_EIGHT_HOURS = 172800;
	const FOUR_DAYS = 345600;
	const FIVE_DAYS = 432000;
	const TEN_DAYS = 864000;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorServiceType extends KalturaEnumBase
{
	const HUMAN = 1;
	const MACHINE = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorTaskProcessingRegion extends KalturaEnumBase
{
	const US = 1;
	const EU = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCatalogItemLanguage extends KalturaEnumBase
{
	const AR = "Arabic";
	const YUE = "Cantonese";
	const ZH = "Chinese";
	const DA = "Danish";
	const NL = "Dutch";
	const EN = "English";
	const EN_US = "English (American)";
	const EN_GB = "English (British)";
	const FI = "Finnish";
	const FR = "French";
	const FR_CA = "French (Canada)";
	const GD = "Gaelic (Scottish)";
	const DE = "German";
	const EL = "Greek";
	const HE = "Hebrew";
	const HI = "Hindi";
	const HU = "Hungarian";
	const IS = "Icelandic";
	const IN = "Indonesian";
	const GA = "Irish";
	const IT = "Italian";
	const JA = "Japanese";
	const KO = "Korean";
	const ML = "Malayalam";
	const CMN = "Mandarin Chinese";
	const NO = "Norwegian";
	const PL = "Polish";
	const PT = "Portuguese";
	const PT_BR = "Portuguese (Brazil)";
	const RO = "Romanian";
	const RU = "Russian";
	const ES = "Spanish";
	const ES_XL = "Spanish (Latin America)";
	const SV = "Swedish";
	const ZH_TW = "Taiwanese Mandarin";
	const TA = "Tamil";
	const TH = "Thai";
	const TR = "Turkish";
	const UK = "Ukrainian";
	const UR = "Urdu";
	const VI = "Vietnamese";
	const CY = "Welsh";
	const ZU = "Zulu";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const FINISH_TIME_ASC = "+finishTime";
	const ID_ASC = "+id";
	const PRICE_ASC = "+price";
	const QUEUE_TIME_ASC = "+queueTime";
	const STATUS_ASC = "+status";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const FINISH_TIME_DESC = "-finishTime";
	const ID_DESC = "-id";
	const PRICE_DESC = "-price";
	const QUEUE_TIME_DESC = "-queueTime";
	const STATUS_DESC = "-status";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCaptionsCatalogItemOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemPriceFunction extends KalturaEnumBase
{
	const PRICE_PER_MINUTE = "kReachUtils::calcPricePerMinute";
	const PRICE_PER_SECOND = "kReachUtils::calcPricePerSecond";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCreditRecurrenceFrequency extends KalturaEnumBase
{
	const DAILY = "day";
	const MONTHLY = "month";
	const WEEKLY = "week";
	const YEARLY = "year";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorTranslationCatalogItemOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBaseVendorCredit extends KalturaObjectBase
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDictionary extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorTaskData extends KalturaObjectBase
{
	/**
	 * The duration of the entry for which the task was created for in milliseconds
	 *
	 * @var int
	 * @readonly
	 */
	public $entryDuration = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTask extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $vendorPartnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $queueTime = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $finishTime = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var KalturaEntryVendorTaskStatus
	 */
	public $status = null;

	/**
	 * The profile id from which this task base config is taken from
	 *
	 * @var int
	 * @insertonly
	 */
	public $reachProfileId = null;

	/**
	 * The catalog item Id containing the task description
	 *
	 * @var int
	 * @insertonly
	 */
	public $catalogItemId = null;

	/**
	 * The charged price to execute this task
	 *
	 * @var float
	 * @readonly
	 */
	public $price = null;

	/**
	 * The ID of the user who created this task
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The user ID that approved this task for execution (in case moderation is requested)
	 *
	 * @var string
	 * @readonly
	 */
	public $moderatingUser = null;

	/**
	 * Err description provided by provider in case job execution has failed
	 *
	 * @var string
	 */
	public $errDescription = null;

	/**
	 * Access key generated by Kaltura to allow vendors to ingest the end result to the destination
	 *
	 * @var string
	 * @readonly
	 */
	public $accessKey = null;

	/**
	 * Vendor generated by Kaltura representing the entry vendor task version correlated to the entry version
	 *
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * User generated notes that should be taken into account by the vendor while executing the task
	 *
	 * @var string
	 */
	public $notes = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $dictionary = null;

	/**
	 * Task context
	 *
	 * @var string
	 */
	public $context = null;

	/**
	 * Task result accuracy percentage
	 *
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * Task main object generated by executing the task
	 *
	 * @var string
	 */
	public $outputObjectId = null;

	/**
	 * Json object containing extra task data required by the requester
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Task creation mode
	 *
	 * @var KalturaEntryVendorTaskCreationMode
	 * @readonly
	 */
	public $creationMode = null;

	/**
	 * 
	 *
	 * @var KalturaVendorTaskData
	 */
	public $taskJobData;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $expectedFinishTime = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceType
	 * @readonly
	 */
	public $serviceType = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceFeature
	 * @readonly
	 */
	public $serviceFeature = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceTurnAroundTime
	 * @readonly
	 */
	public $turnAroundTime = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfile extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The name of the profile
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var KalturaReachProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var KalturaReachProfileType
	 */
	public $profileType = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemOutputFormat
	 */
	public $defaultOutputFormat = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableMachineModeration = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableHumanModeration = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $autoDisplayMachineCaptionsOnPlayer = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $autoDisplayHumanCaptionsOnPlayer = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableMetadataExtraction = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableSpeakerChangeIndication = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableAudioTags = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableProfanityRemoval = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxCharactersPerCaptionLine = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelAdditionForMachineServiceType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelAdditionForHumanServiceType = null;

	/**
	 * 
	 *
	 * @var KalturaReachProfileContentDeletionPolicy
	 */
	public $contentDeletionPolicy = null;

	/**
	 * 
	 *
	 * @var array of KalturaRule
	 */
	public $rules;

	/**
	 * 
	 *
	 * @var KalturaBaseVendorCredit
	 */
	public $credit;

	/**
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $usedCredit = null;

	/**
	 * 
	 *
	 * @var array of KalturaDictionary
	 */
	public $dictionaries;

	/**
	 * Comma separated flavorParamsIds that the vendor should look for it matching asset when trying to download the asset
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * Indicates in which region the task processing should task place
	 *
	 * @var KalturaVendorTaskProcessingRegion
	 */
	public $vendorTaskProcessingRegion = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemPricing extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var float
	 */
	public $pricePerUnit = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemPriceFunction
	 */
	public $priceFunction = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorCatalogItem extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $vendorPartnerId = null;

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
	public $systemName = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceType
	 */
	public $serviceType = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceFeature
	 * @readonly
	 */
	public $serviceFeature = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceTurnAroundTime
	 */
	public $turnAroundTime = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemPricing
	 */
	public $pricing;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowResubmission = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAddEntryVendorTaskAction extends KalturaRuleAction
{
	/**
	 * Catalog Item Id
	 *
	 * @var string
	 */
	public $catalogItemIds = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCatalogItemAdvancedFilter extends KalturaSearchItem
{
	/**
	 * 
	 *
	 * @var KalturaVendorServiceType
	 */
	public $serviceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceTypeIn = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceFeature
	 */
	public $serviceFeatureEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceFeatureIn = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceTurnAroundTime
	 */
	public $turnAroundTimeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $turnAroundTimeIn = null;

	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguageEqual = null;

	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $targetLanguageEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCategoryEntryCondition extends KalturaCondition
{
	/**
	 * Category id to check condition for
	 *
	 * @var int
	 */
	public $categoryId = null;

	/**
	 * Category id's to check condition for
	 *
	 * @var string
	 */
	public $categoryIds = null;

	/**
	 * Minimum category user level permission to validate
	 *
	 * @var KalturaCategoryUserPermissionLevel
	 */
	public $categoryUserPermission = null;

	/**
	 * Comparing operator
	 *
	 * @var KalturaSearchConditionComparison
	 */
	public $comparison = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaEntryVendorTask
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaReachProfile
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnlimitedVendorCredit extends KalturaBaseVendorCredit
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $credit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fromDate = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorAlignmentCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguage = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemOutputFormat
	 */
	public $outputFormat = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorAudioDescriptionCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguage = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $clearAudioFlavorParamsId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCaptionsCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguage = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemOutputFormat
	 */
	public $outputFormat = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableSpeakerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fixedPriceAddons = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaVendorCatalogItem
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorChapteringCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguage = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCredit extends KalturaBaseVendorCredit
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $credit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $overageCredit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $addOn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorTaskDataCaptionAsset extends KalturaVendorTaskData
{
	/**
	 * Optional - The id of the caption asset object
	 *
	 * @var string
	 * @insertonly
	 */
	public $captionAssetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAlignmentVendorTaskData extends KalturaVendorTaskDataCaptionAsset
{
	/**
	 * The id of the text transcript object the vendor should use while runing the alignment task
	 *
	 * @var string
	 */
	public $textTranscriptAssetId = null;

	/**
	 * Optional - The id of the json transcript object the vendor should update once alignment task processing is done
	 *
	 * @var string
	 * @insertonly
	 */
	public $jsonTranscriptAssetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaEntryVendorTaskBaseFilter extends KalturaRelatedFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $vendorPartnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vendorPartnerIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var KalturaEntryVendorTaskStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $reachProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $reachProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $catalogItemIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $catalogItemIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contextEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskFilter extends KalturaEntryVendorTaskBaseFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $freeText = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expectedFinishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expectedFinishTimeLessThanOrEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskCsvJobData extends KalturaExportCsvJobData
{
	/**
	 * The filter should return the list of users that need to be specified in the csv.
	 *
	 * @var KalturaEntryVendorTaskFilter
	 */
	public $filter;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaReachProfileBaseFilter extends KalturaRelatedFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var KalturaReachProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var KalturaReachProfileType
	 */
	public $profileTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $profileTypeIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachReportInputFilter extends KalturaReportInputFilter
{
	/**
	 * 
	 *
	 * @var KalturaVendorServiceType
	 */
	public $serviceType = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceFeature
	 */
	public $serviceFeature = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceTurnAroundTime
	 */
	public $turnAroundTime = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTimeRangeVendorCredit extends KalturaVendorCredit
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $toDate = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranslationVendorTaskData extends KalturaVendorTaskDataCaptionAsset
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorCatalogItemBaseFilter extends KalturaRelatedFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $vendorPartnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vendorPartnerIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceType
	 */
	public $serviceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceTypeIn = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceFeature
	 */
	public $serviceFeatureEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceFeatureIn = null;

	/**
	 * 
	 *
	 * @var KalturaVendorServiceTurnAroundTime
	 */
	public $turnAroundTimeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $turnAroundTimeIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorTranslationCatalogItem extends KalturaVendorCaptionsCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $targetLanguage = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileFilter extends KalturaReachProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReoccurringVendorCredit extends KalturaTimeRangeVendorCredit
{
	/**
	 * 
	 *
	 * @var KalturaVendorCreditRecurrenceFrequency
	 */
	public $frequency = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemFilter extends KalturaVendorCatalogItemBaseFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorCaptionsCatalogItemBaseFilter extends KalturaVendorCatalogItemFilter
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguageEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceLanguageIn = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemOutputFormat
	 */
	public $outputFormatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $outputFormatIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorAlignmentCatalogItemFilter extends KalturaVendorCaptionsCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorAudioDescriptionCatalogItemFilter extends KalturaVendorCaptionsCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCaptionsCatalogItemFilter extends KalturaVendorCaptionsCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorChapteringCatalogItemFilter extends KalturaVendorCaptionsCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorTranslationCatalogItemBaseFilter extends KalturaVendorCaptionsCatalogItemFilter
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $targetLanguageEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetLanguageIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorTranslationCatalogItemFilter extends KalturaVendorTranslationCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaReachClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaReachClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'reach';
	}
}

