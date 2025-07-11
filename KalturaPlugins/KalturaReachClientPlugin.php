<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
require_once(dirname(__FILE__) . "/KalturaCaptionClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaScheduleClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaTranscriptClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryObjectType extends KalturaEnumBase
{
	const ENTRY = 1;
}

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
	const SCHEDULED = 9;
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
	const VTT = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemSignLanguageOutputFormat extends KalturaEnumBase
{
	const ASPECT_RATIO_16_9 = 1;
	const ASPECT_RATIO_4_3 = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorCatalogItemStage extends KalturaEnumBase
{
	const PRODUCTION = 1;
	const QA = 2;
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
class KalturaVendorDocumentEnrichmentType extends KalturaEnumBase
{
	const MD_CONVERSION = 1;
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
	const INTELLIGENT_TAGGING = 6;
	const DUBBING = 7;
	const LIVE_CAPTION = 8;
	const EXTENDED_AUDIO_DESCRIPTION = 9;
	const CLIPS = 10;
	const LIVE_TRANSLATION = 11;
	const QUIZ = 12;
	const SUMMARY = 13;
	const VIDEO_ANALYSIS = 14;
	const MODERATION = 15;
	const METADATA_ENRICHMENT = 16;
	const SENTIMENT_ANALYSIS = 17;
	const DOCUMENT_ENRICHMENT = 18;
	const SIGN_LANGUAGE = 19;
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
	const CA = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorVideoAnalysisType extends KalturaEnumBase
{
	const OCR = 1;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCatalogItemLanguage extends KalturaEnumBase
{
	const AF = "Afrikaans";
	const AR = "Arabic";
	const AUTO_DETECT = "Auto Detect";
	const AZ = "Azerbaijani";
	const BA = "Bashkir";
	const EU = "Basque";
	const BN = "Bengali (Bangla)";
	const BS = "Bosnian";
	const BG = "Bulgarian";
	const MY = "Burmese";
	const BE = "Byelorussian (Belarusian)";
	const KM = "Cambodian";
	const YUE = "Cantonese";
	const CA = "Catalan";
	const ZH = "Chinese";
	const HR = "Croatian";
	const CS = "Czech";
	const DA = "Danish";
	const NL = "Dutch";
	const EN = "English";
	const EN_US = "English (American)";
	const EN_AU = "English (Australian)";
	const EN_GB = "English (British)";
	const EO = "Esperanto";
	const ET = "Estonian";
	const FA = "Farsi";
	const FI = "Finnish";
	const FR = "French";
	const FR_CA = "French (Canada)";
	const GD = "Gaelic (Scottish)";
	const GL = "Galician";
	const KA = "Georgian";
	const DE = "German";
	const EL = "Greek";
	const GU = "Gujarati";
	const HE = "Hebrew";
	const HI = "Hindi";
	const HU = "Hungarian";
	const IS = "Icelandic";
	const IN = "Indonesian";
	const IA = "Interlingua";
	const GA = "Irish";
	const IT = "Italian";
	const JA = "Japanese";
	const JV = "Javanese";
	const KN = "Kannada";
	const KK = "Kazakh";
	const KO = "Korean";
	const LO = "Laothian";
	const LV = "Latvian (Lettish)";
	const LT = "Lithuanian";
	const MK = "Macedonian";
	const MS = "Malay";
	const ML = "Malayalam";
	const CMN = "Mandarin Chinese";
	const MR = "Marathi";
	const MN = "Mongolian";
	const NE = "Nepali";
	const NO = "Norwegian";
	const FA_IR = "Persian (Iran)";
	const PL = "Polish";
	const PT = "Portuguese";
	const PT_BR = "Portuguese (Brazil)";
	const PA = "Punjabi";
	const RO = "Romanian";
	const RU = "Russian";
	const SR = "Serbian";
	const ZH_CN = "Simplified Chinese";
	const SI = "Sinhalese";
	const SK = "Slovak";
	const SK_SK = "Slovakian";
	const SL = "Slovenian";
	const ES = "Spanish";
	const ES_XL = "Spanish (Latin America)";
	const SU = "Sundanese";
	const SW = "Swahili (Kiswahili)";
	const SV = "Swedish";
	const TL = "Tagalog";
	const ZH_TW = "Taiwanese Mandarin";
	const TA = "Tamil";
	const TE = "Telugu";
	const TH = "Thai";
	const ZH_HK = "Traditional Chinese";
	const TR = "Turkish";
	const UG = "Uighur";
	const UK = "Ukrainian";
	const UR = "Urdu";
	const UZ = "Uzbek";
	const VI = "Vietnamese";
	const CY = "Welsh";
	const XH = "Xhosa";
	const ZU = "Zulu";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCatalogItemSignLanguage extends KalturaEnumBase
{
	const ENGLISH_ASL = "English (ASL)";
	const ENGLISH_BSL = "English (BSL)";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const EXPECTED_FINISH_TIME_ASC = "+expectedFinishTime";
	const FINISH_TIME_ASC = "+finishTime";
	const ID_ASC = "+id";
	const PRICE_ASC = "+price";
	const QUEUE_TIME_ASC = "+queueTime";
	const STATUS_ASC = "+status";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const EXPECTED_FINISH_TIME_DESC = "-expectedFinishTime";
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
class KalturaMetadataEnrichmentApplyMode extends KalturaEnumBase
{
	const FILL_EMPTY = "FILL_EMPTY";
	const FILL_EMPTY_AND_OVERRIDE_LIST = "FILL_EMPTY_AND_OVERRIDE_LIST";
	const OVERRIDE_ALL = "OVERRIDE_ALL";
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
class KalturaReachVendorEngineType extends KalturaEnumBase
{
	const OPEN_CALAIS = "OpenCalaisReachVendor.OPEN_CALAIS";
	const HELLO_WORLD = "ReachInternal.HELLO_WORLD";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSummaryWritingStyleTaskData extends KalturaEnumBase
{
	const CASUAL = "casual";
	const FORMAL = "formal";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTypeOfSummaryTaskData extends KalturaEnumBase
{
	const CONCISE = "concise";
	const DETAILED = "detailed";
	const EXTENSIVE = "extensive";
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
	const PRICE_PER_HOUR = "kReachUtils::calcPricePerHour";
	const PRICE_PER_MINUTE = "kReachUtils::calcPricePerMinute";
	const PRICE_PER_SECOND = "kReachUtils::calcPricePerSecond";
	const PRICE_PER_TOKEN = "kReachUtils::calcPricePerToken";
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
	 * 
	 *
	 * @var KalturaEntryObjectType
	 * @insertonly
	 */
	public $entryObjectType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $unitsUsed = null;

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

	/**
	 * The vendor's task internal Id
	 *
	 * @var string
	 */
	public $externalTaskId = null;


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
	 * Property showing the catalog item's engine type, in case a vendor can offer the same service via different engines.
	 *
	 * @var KalturaReachVendorEngineType
	 */
	public $engineType = null;

	/**
	 * 
	 *
	 * @var KalturaCatalogItemLanguage
	 */
	public $sourceLanguage = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowResubmission = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $payPerUse = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vendorData = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemStage
	 */
	public $stage = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastBulkUpdateId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contract = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defaultReachProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminTagsToExclude = null;


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
class KalturaIntelligentTaggingVendorTaskData extends KalturaVendorTaskData
{
	/**
	 * Optional - The id of the caption asset object
	 *
	 * @var string
	 * @insertonly
	 */
	public $assetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLocalizedVendorTaskData extends KalturaVendorTaskData
{
	/**
	 * Language code
	 *
	 * @var KalturaLanguage
	 */
	public $outputLanguage = null;

	/**
	 * result as JSON string.
	 *
	 * @var string
	 */
	public $outputJson = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaModerationVendorTaskData extends KalturaVendorTaskData
{
	/**
	 * A comma seperated string of rule IDs.
	 *
	 * @var string
	 */
	public $ruleIds = null;

	/**
	 * A comma seperated string of policy IDs.
	 *
	 * @var string
	 */
	public $policyIds = null;

	/**
	 * A comma seperated string of category IDs.
	 *
	 * @var string
	 */
	public $categoryIds = null;

	/**
	 * JSON string containing the moderation output.
	 *
	 * @var string
	 */
	public $moderationOutputJson = null;


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
class KalturaScheduledVendorTaskData extends KalturaVendorTaskData
{
	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $startDate = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $endDate = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $scheduledEventId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSentimentAnalysisVendorTaskData extends KalturaVendorTaskData
{
	/**
	 * Language code
	 *
	 * @var KalturaLanguageCode
	 */
	public $language = null;


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

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorClipsCatalogItem extends KalturaVendorCatalogItem
{

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
class KalturaVendorDocumentEnrichmentCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaVendorDocumentEnrichmentType
	 */
	public $documentEnrichmentType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorDubbingCatalogItem extends KalturaVendorCatalogItem
{
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
class KalturaVendorExtendedAudioDescriptionCatalogItem extends KalturaVendorCatalogItem
{
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
class KalturaVendorIntelligentTaggingCatalogItem extends KalturaVendorCatalogItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorMetadataEnrichmentCatalogItem extends KalturaVendorCatalogItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorModerationCatalogItem extends KalturaVendorCatalogItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorQuizCatalogItem extends KalturaVendorCatalogItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorSentimentAnalysisCatalogItem extends KalturaVendorCatalogItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorSignLanguageCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaCatalogItemSignLanguage
	 */
	public $targetLanguage = null;

	/**
	 * 
	 *
	 * @var KalturaVendorCatalogItemSignLanguageOutputFormat
	 */
	public $outputFormat = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorSummaryCatalogItem extends KalturaVendorCatalogItem
{

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
class KalturaVendorVideoAnalysisCatalogItem extends KalturaVendorCatalogItem
{
	/**
	 * 
	 *
	 * @var KalturaVendorVideoAnalysisType
	 */
	public $videoAnalysisType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxVideoDuration = null;


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
class KalturaClipsVendorTaskData extends KalturaLocalizedVendorTaskData
{
	/**
	 * Estimated duration of the clips, in seconds.
	 *
	 * @var int
	 * @insertonly
	 */
	public $clipsDuration = null;

	/**
	 * Event session context ID used to enhance clip results.
	 *
	 * @var string
	 * @insertonly
	 */
	public $eventSessionContextId = null;

	/**
	 * Instruction describing the moments to capture or the objectives to achieve with the clips.
	 *
	 * @var string
	 * @insertonly
	 */
	public $instruction = null;

	/**
	 * List of clips as JSON string.
	 * 	 For example: [{"title": "Title of the first clip", "description": "Description of the first clip", "tags": "Tagged-Example", "start": 127, "duration": 30}]
	 *
	 * @var string
	 */
	public $clipsOutputJson = null;


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

	/**
	 * 
	 *
	 * @var KalturaEntryObjectType
	 */
	public $entryObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryObjectTypeNotIn = null;


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
class KalturaMetadataEnrichmentVendorTaskData extends KalturaLocalizedVendorTaskData
{
	/**
	 * The level of detail for the metadata enrichment process.
	 *
	 * @var string
	 * @insertonly
	 */
	public $detailLevel = null;

	/**
	 * Instructions describing what should be taken into account during the metadata enrichment process.
	 *
	 * @var string
	 * @insertonly
	 */
	public $instruction = null;

	/**
	 * Indicates whether the metadata enrichment results should be automatically applied on the task entry.
	 * 	 Default is false.
	 *
	 * @var bool
	 */
	public $shouldApply = null;

	/**
	 * Specifies how metadata fields should be applied during enrichment.
	 * 	 If 'FILL_EMPTY_AND_OVERRIDE_LIST', use overrideFields to specify which fields to override.
	 *
	 * @var KalturaMetadataEnrichmentApplyMode
	 */
	public $applyMode = null;

	/**
	 * List of entry fields to override when applyMode is set to 'FILL_EMPTY_AND_OVERRIDE_LIST'.
	 *
	 * @var array of KalturaString
	 */
	public $overrideFields;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuizVendorTaskData extends KalturaLocalizedVendorTaskData
{
	/**
	 * Number Of Questions.
	 *
	 * @var int
	 */
	public $numberOfQuestions = null;

	/**
	 * Questions Type.
	 *
	 * @var string
	 */
	public $questionsType = null;

	/**
	 * Quiz Context.
	 *
	 * @var string
	 */
	public $context = null;

	/**
	 * Formal Style.
	 *
	 * @var string
	 */
	public $formalStyle = null;

	/**
	 * Create quiz flag.
	 *
	 * @var bool
	 */
	public $createQuiz = null;

	/**
	 * Quiz entry Id
	 *
	 * @var string
	 */
	public $quizOutput = null;


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
class KalturaSummaryVendorTaskData extends KalturaLocalizedVendorTaskData
{
	/**
	 * Type of summary.
	 *
	 * @var KalturaTypeOfSummaryTaskData
	 */
	public $typeOfSummary = null;

	/**
	 * Writing style of the summary.
	 *
	 * @var KalturaSummaryWritingStyleTaskData
	 */
	public $writingStyle = null;

	/**
	 * JSON string containing the summary output.
	 *
	 * @var string
	 */
	public $summaryOutputJson = null;


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
class KalturaVendorLiveCatalogItem extends KalturaVendorCaptionsCatalogItem
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $minimalRefundTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minimalOrderTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationLimit = null;


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

	/**
	 * 
	 *
	 * @var bool
	 */
	public $requireSource = null;


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

	/**
	 * 
	 *
	 * @var int
	 */
	public $catalogItemIdEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorLiveCaptionCatalogItem extends KalturaVendorLiveCatalogItem
{
	/**
	 * How long before the live stream start should service activate? (in secs)
	 *
	 * @var int
	 * @insertonly
	 */
	public $startTimeBuffer = null;

	/**
	 * How long after the live stream end should service de-activate? (in secs)
	 *
	 * @var int
	 * @insertonly
	 */
	public $endTimeBuffer = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorLiveTranslationCatalogItem extends KalturaVendorLiveCatalogItem
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
class KalturaVendorClipsCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorDocumentEnrichmentCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVendorDubbingCatalogItemBaseFilter extends KalturaVendorCatalogItemFilter
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
class KalturaVendorIntelligentTaggingCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorMetadataEnrichmentCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorModerationCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorQuizCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorSentimentAnalysisCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorSummaryCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorVideoAnalysisCatalogItemFilter extends KalturaVendorCatalogItemFilter
{

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
class KalturaVendorDubbingCatalogItemFilter extends KalturaVendorDubbingCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorExtendedAudioDescriptionCatalogItemFilter extends KalturaVendorCaptionsCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorLiveCaptionCatalogItemFilter extends KalturaVendorCaptionsCatalogItemBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorSignLanguageCatalogItemFilter extends KalturaVendorDubbingCatalogItemBaseFilter
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
class KalturaVendorLiveTranslationCatalogItemFilter extends KalturaVendorTranslationCatalogItemBaseFilter
{

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
class KalturaVendorCatalogItemService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add an service catalog item
	 * 
	 * @param KalturaVendorCatalogItem $vendorCatalogItem 
	 * @return KalturaVendorCatalogItem
	 */
	function add(KalturaVendorCatalogItem $vendorCatalogItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "vendorCatalogItem", $vendorCatalogItem->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVendorCatalogItem");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param file $fileData 
	 * @param KalturaBulkUploadJobData $bulkUploadData 
	 * @param KalturaBulkUploadVendorCatalogItemData $bulkUploadVendorCatalogItemData 
	 * @return KalturaBulkUpload
	 */
	function addFromBulkUpload($fileData, KalturaBulkUploadJobData $bulkUploadData = null, KalturaBulkUploadVendorCatalogItemData $bulkUploadVendorCatalogItemData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadVendorCatalogItemData !== null)
			$this->client->addParam($kparams, "bulkUploadVendorCatalogItemData", $bulkUploadVendorCatalogItemData->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "addFromBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBulkUpload");
		return $resultObject;
	}

	/**
	 * Delete vedor catalog item object
	 * 
	 * @param int $id 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve specific catalog item by id
	 * 
	 * @param int $id 
	 * @return KalturaVendorCatalogItem
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVendorCatalogItem");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $vendorPartnerId 
	 * @return string
	 */
	function getServeUrl($vendorPartnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "vendorPartnerId", $vendorPartnerId);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "getServeUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * List KalturaVendorCatalogItem objects
	 * 
	 * @param KalturaVendorCatalogItemFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaVendorCatalogItemListResponse
	 */
	function listAction(KalturaVendorCatalogItemFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVendorCatalogItemListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $vendorPartnerId 
	 * @return file
	 */
	function serve($vendorPartnerId = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "vendorPartnerId", $vendorPartnerId);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Update an existing vedor catalog item object
	 * 
	 * @param int $id 
	 * @param KalturaVendorCatalogItem $vendorCatalogItem 
	 * @return KalturaVendorCatalogItem
	 */
	function update($id, KalturaVendorCatalogItem $vendorCatalogItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "vendorCatalogItem", $vendorCatalogItem->toParams());
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVendorCatalogItem");
		return $resultObject;
	}

	/**
	 * Update vendor catalog item status by id
	 * 
	 * @param int $id 
	 * @param int $status 
	 * @return KalturaVendorCatalogItem
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("reach_vendorcatalogitem", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVendorCatalogItem");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a partner specific reach profile
	 * 
	 * @param KalturaReachProfile $reachProfile 
	 * @return KalturaReachProfile
	 */
	function add(KalturaReachProfile $reachProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reachProfile", $reachProfile->toParams());
		$this->client->queueServiceActionCall("reach_reachprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaReachProfile");
		return $resultObject;
	}

	/**
	 * Delete vednor profile by id
	 * 
	 * @param int $id 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_reachprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve specific reach profile by id
	 * 
	 * @param int $id 
	 * @return KalturaReachProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_reachprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaReachProfile");
		return $resultObject;
	}

	/**
	 * List KalturaReachProfile objects
	 * 
	 * @param KalturaReachProfileFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaReachProfileListResponse
	 */
	function listAction(KalturaReachProfileFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_reachprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaReachProfileListResponse");
		return $resultObject;
	}

	/**
	 * Sync vendor profile credit
	 * 
	 * @param int $reachProfileId 
	 * @return KalturaReachProfile
	 */
	function syncCredit($reachProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reachProfileId", $reachProfileId);
		$this->client->queueServiceActionCall("reach_reachprofile", "syncCredit", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaReachProfile");
		return $resultObject;
	}

	/**
	 * Update an existing reach profile object
	 * 
	 * @param int $id 
	 * @param KalturaReachProfile $reachProfile 
	 * @return KalturaReachProfile
	 */
	function update($id, KalturaReachProfile $reachProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "reachProfile", $reachProfile->toParams());
		$this->client->queueServiceActionCall("reach_reachprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaReachProfile");
		return $resultObject;
	}

	/**
	 * Update reach profile status by id
	 * 
	 * @param int $id 
	 * @param int $status 
	 * @return KalturaReachProfile
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("reach_reachprofile", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaReachProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryVendorTaskService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Cancel entry task. will only occur for task in PENDING or PENDING_MODERATION status
	 * 
	 * @param int $id Vendor task id
	 * @param string $abortReason 
	 * @return KalturaEntryVendorTask
	 */
	function abort($id, $abortReason = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "abortReason", $abortReason);
		$this->client->queueServiceActionCall("reach_entryvendortask", "abort", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * Allows you to add a entry vendor task
	 * 
	 * @param KalturaEntryVendorTask $entryVendorTask 
	 * @return KalturaEntryVendorTask
	 */
	function add(KalturaEntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * Approve entry vendor task for execution.
	 * 
	 * @param int $id Vendor task id to approve
	 * @return KalturaEntryVendorTask
	 */
	function approve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "approve", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * Add batch job that sends an email with a link to download an updated CSV that contains list of users
	 * 
	 * @param KalturaEntryVendorTaskFilter $filter A filter used to exclude specific tasks
	 * @return string
	 */
	function exportToCsv(KalturaEntryVendorTaskFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "exportToCsv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Extend access key in case the existing one has expired.
	 * 
	 * @param int $id Vendor task id
	 * @return KalturaEntryVendorTask
	 */
	function extendAccessKey($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "extendAccessKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * Retrieve specific entry vendor task by id
	 * 
	 * @param int $id 
	 * @return KalturaEntryVendorTask
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * Get KalturaEntryVendorTask objects for specific vendor partner
	 * 
	 * @param KalturaEntryVendorTaskFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaEntryVendorTaskListResponse
	 */
	function getJobs(KalturaEntryVendorTaskFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "getJobs", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTaskListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $filterType 
	 * @param int $filterInput 
	 * @param int $status 
	 * @param string $dueDate 
	 * @return string
	 */
	function getServeUrl($filterType = null, $filterInput = null, $status = null, $dueDate = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filterType", $filterType);
		$this->client->addParam($kparams, "filterInput", $filterInput);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "dueDate", $dueDate);
		$this->client->queueServiceActionCall("reach_entryvendortask", "getServeUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * List KalturaEntryVendorTask objects
	 * 
	 * @param KalturaEntryVendorTaskFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaEntryVendorTaskListResponse
	 */
	function listAction(KalturaEntryVendorTaskFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTaskListResponse");
		return $resultObject;
	}

	/**
	 * Reject entry vendor task for execution.
	 * 
	 * @param int $id Vendor task id to reject
	 * @param string $rejectReason 
	 * @return KalturaEntryVendorTask
	 */
	function reject($id, $rejectReason = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "rejectReason", $rejectReason);
		$this->client->queueServiceActionCall("reach_entryvendortask", "reject", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $id Vendor task id
	 * @param string $newOutput 
	 * @return KalturaEntryVendorTask
	 */
	function replaceOutput($id, $newOutput)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "newOutput", $newOutput);
		$this->client->queueServiceActionCall("reach_entryvendortask", "replaceOutput", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $vendorPartnerId 
	 * @param int $partnerId 
	 * @param int $status 
	 * @param string $dueDate 
	 * @return file
	 */
	function serve($vendorPartnerId = null, $partnerId = null, $status = null, $dueDate = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "vendorPartnerId", $vendorPartnerId);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "dueDate", $dueDate);
		$this->client->queueServiceActionCall("reach_entryvendortask", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Will serve a requested csv
	 * 
	 * @param string $id - the requested file id
	 * @return string
	 */
	function serveCsv($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "serveCsv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Update entry vendor task. Only the properties that were set will be updated.
	 * 
	 * @param int $id Vendor task id to update
	 * @param KalturaEntryVendorTask $entryVendorTask Evntry vendor task to update
	 * @return KalturaEntryVendorTask
	 */
	function update($id, KalturaEntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}

	/**
	 * Update entry vendor task. Only the properties that were set will be updated.
	 * 
	 * @param int $id Vendor task id to update
	 * @param KalturaEntryVendorTask $entryVendorTask Evntry vendor task to update
	 * @return KalturaEntryVendorTask
	 */
	function updateJob($id, KalturaEntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "updateJob", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntryVendorTask");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPartnerCatalogItemService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Assign existing catalogItem to specific account
	 * 
	 * @param int $id Source catalog item to assign to partner
	 * @param int $defaultReachProfileId 
	 * @return KalturaVendorCatalogItem
	 */
	function add($id, $defaultReachProfileId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "defaultReachProfileId", $defaultReachProfileId);
		$this->client->queueServiceActionCall("reach_partnercatalogitem", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVendorCatalogItem");
		return $resultObject;
	}

	/**
	 * Remove existing catalogItem from specific account
	 * 
	 * @param int $id Source catalog item to remove
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_partnercatalogitem", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaReachClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaVendorCatalogItemService
	 */
	public $vendorCatalogItem = null;

	/**
	 * @var KalturaReachProfileService
	 */
	public $reachProfile = null;

	/**
	 * @var KalturaEntryVendorTaskService
	 */
	public $entryVendorTask = null;

	/**
	 * @var KalturaPartnerCatalogItemService
	 */
	public $PartnerCatalogItem = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->vendorCatalogItem = new KalturaVendorCatalogItemService($client);
		$this->reachProfile = new KalturaReachProfileService($client);
		$this->entryVendorTask = new KalturaEntryVendorTaskService($client);
		$this->PartnerCatalogItem = new KalturaPartnerCatalogItemService($client);
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
			'vendorCatalogItem' => $this->vendorCatalogItem,
			'reachProfile' => $this->reachProfile,
			'entryVendorTask' => $this->entryVendorTask,
			'PartnerCatalogItem' => $this->PartnerCatalogItem,
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

