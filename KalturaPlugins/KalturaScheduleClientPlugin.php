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
require_once(dirname(__FILE__) . "/../KalturaClientBase.php");
require_once(dirname(__FILE__) . "/../KalturaEnums.php");
require_once(dirname(__FILE__) . "/../KalturaTypes.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventClassificationType extends KalturaEnumBase
{
	const PUBLIC_EVENT = 1;
	const PRIVATE_EVENT = 2;
	const CONFIDENTIAL_EVENT = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventRecurrenceType extends KalturaEnumBase
{
	const NONE = 0;
	const RECURRING = 1;
	const RECURRENCE = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventStatus extends KalturaEnumBase
{
	const CANCELLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventType extends KalturaEnumBase
{
	const RECORD = 1;
	const LIVE_STREAM = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleResourceStatus extends KalturaEnumBase
{
	const DISABLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCameraScheduleResourceOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryScheduleEventOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const END_DATE_ASC = "+endDate";
	const PRIORITY_ASC = "+priority";
	const START_DATE_ASC = "+startDate";
	const SUMMARY_ASC = "+summary";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const END_DATE_DESC = "-endDate";
	const PRIORITY_DESC = "-priority";
	const START_DATE_DESC = "-startDate";
	const SUMMARY_DESC = "-summary";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLiveEntryScheduleResourceOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLiveStreamScheduleEventOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const END_DATE_ASC = "+endDate";
	const PRIORITY_ASC = "+priority";
	const START_DATE_ASC = "+startDate";
	const SUMMARY_ASC = "+summary";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const END_DATE_DESC = "-endDate";
	const PRIORITY_DESC = "-priority";
	const START_DATE_DESC = "-startDate";
	const SUMMARY_DESC = "-summary";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLocationScheduleResourceOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecordScheduleEventOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const END_DATE_ASC = "+endDate";
	const PRIORITY_ASC = "+priority";
	const START_DATE_ASC = "+startDate";
	const SUMMARY_ASC = "+summary";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const END_DATE_DESC = "-endDate";
	const PRIORITY_DESC = "-priority";
	const START_DATE_DESC = "-startDate";
	const SUMMARY_DESC = "-summary";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const END_DATE_ASC = "+endDate";
	const PRIORITY_ASC = "+priority";
	const START_DATE_ASC = "+startDate";
	const SUMMARY_ASC = "+summary";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const END_DATE_DESC = "-endDate";
	const PRIORITY_DESC = "-priority";
	const START_DATE_DESC = "-startDate";
	const SUMMARY_DESC = "-summary";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventRecurrenceDay extends KalturaEnumBase
{
	const FRIDAY = "FR";
	const MONDAY = "MO";
	const SATURDAY = "SA";
	const SUNDAY = "SU";
	const THURSDAY = "TH";
	const TUESDAY = "TU";
	const WEDNESDAY = "WE";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventRecurrenceFrequency extends KalturaEnumBase
{
	const DAILY = "days";
	const HOURLY = "hours";
	const MINUTELY = "minutes";
	const MONTHLY = "months";
	const SECONDLY = "seconds";
	const WEEKLY = "weeks";
	const YEARLY = "years";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventResourceOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleResourceOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventRecurrence extends KalturaObjectBase
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
	 * @var KalturaScheduleEventRecurrenceFrequency
	 */
	public $frequency = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $until = null;

	/**
	 * TimeZone String
	 *
	 * @var string
	 */
	public $timeZone = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $count = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $interval = null;

	/**
	 * Comma separated numbers between 0 to 59
	 *
	 * @var string
	 */
	public $bySecond = null;

	/**
	 * Comma separated numbers between 0 to 59
	 *
	 * @var string
	 */
	public $byMinute = null;

	/**
	 * Comma separated numbers between 0 to 23
	 *
	 * @var string
	 */
	public $byHour = null;

	/**
	 * Comma separated of KalturaScheduleEventRecurrenceDay
	 * 	 Each byDay value can also be preceded by a positive (+n) or negative (-n) integer.
	 * 	 If present, this indicates the nth occurrence of the specific day within the MONTHLY or YEARLY RRULE.
	 * 	 For example, within a MONTHLY rule, +1MO (or simply 1MO) represents the first Monday within the month, whereas -1MO represents the last Monday of the month.
	 * 	 If an integer modifier is not present, it means all days of this type within the specified frequency.
	 * 	 For example, within a MONTHLY rule, MO represents all Mondays within the month.
	 *
	 * @var string
	 */
	public $byDay = null;

	/**
	 * Comma separated of numbers between -31 to 31, excluding 0.
	 * 	 For example, -10 represents the tenth to the last day of the month.
	 *
	 * @var string
	 */
	public $byMonthDay = null;

	/**
	 * Comma separated of numbers between -366 to 366, excluding 0.
	 * 	 For example, -1 represents the last day of the year (December 31st) and -306 represents the 306th to the last day of the year (March 1st).
	 *
	 * @var string
	 */
	public $byYearDay = null;

	/**
	 * Comma separated of numbers between -53 to 53, excluding 0.
	 * 	 This corresponds to weeks according to week numbering.
	 * 	 A week is defined as a seven day period, starting on the day of the week defined to be the week start.
	 * 	 Week number one of the calendar year is the first week which contains at least four (4) days in that calendar year.
	 * 	 This rule part is only valid for YEARLY frequency.
	 * 	 For example, 3 represents the third week of the year.
	 *
	 * @var string
	 */
	public $byWeekNumber = null;

	/**
	 * Comma separated numbers between 1 to 12
	 *
	 * @var string
	 */
	public $byMonth = null;

	/**
	 * Comma separated of numbers between -366 to 366, excluding 0.
	 * 	 Corresponds to the nth occurrence within the set of events specified by the rule.
	 * 	 It must only be used in conjunction with another byrule part.
	 * 	 For example "the last work day of the month" could be represented as: frequency=MONTHLY;byDay=MO,TU,WE,TH,FR;byOffset=-1
	 * 	 Each byOffset value can include a positive (+n) or negative (-n) integer.
	 * 	 If present, this indicates the nth occurrence of the specific occurrence within the set of events specified by the rule.
	 *
	 * @var string
	 */
	public $byOffset = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventRecurrenceDay
	 */
	public $weekStartDay = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaScheduleEvent extends KalturaObjectBase
{
	/**
	 * Auto-generated unique identifier
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
	public $parentId = null;

	/**
	 * Defines a short summary or subject for the event
	 *
	 * @var string
	 */
	public $summary = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventClassificationType
	 */
	public $classificationType = null;

	/**
	 * Specifies the global position for the activity
	 *
	 * @var float
	 */
	public $geoLatitude = null;

	/**
	 * Specifies the global position for the activity
	 *
	 * @var float
	 */
	public $geoLongitude = null;

	/**
	 * Defines the intended venue for the activity
	 *
	 * @var string
	 */
	public $location = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $organizer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerId = null;

	/**
	 * The value for the priority field.
	 *
	 * @var int
	 */
	public $priority = null;

	/**
	 * Defines the revision sequence number.
	 *
	 * @var int
	 */
	public $sequence = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventRecurrenceType
	 */
	public $recurrenceType = null;

	/**
	 * Duration in seconds
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * Used to represent contact information or alternately a reference to contact information.
	 *
	 * @var string
	 */
	public $contact = null;

	/**
	 * Specifies non-processing information intended to provide a comment to the calendar user.
	 *
	 * @var string
	 */
	public $comment = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventRecurrence
	 */
	public $recurrence;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventResource extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $eventId = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $resourceId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaScheduleResource extends KalturaObjectBase
{
	/**
	 * Auto-generated unique identifier
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
	public $parentId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Defines a short name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Defines a unique system-name
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleResourceStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCameraScheduleResource extends KalturaScheduleResource
{
	/**
	 * URL of the stream
	 *
	 * @var string
	 */
	public $streamUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaEntryScheduleEvent extends KalturaScheduleEvent
{
	/**
	 * Entry to be used as template during content ingestion
	 *
	 * @var string
	 */
	public $templateEntryId = null;

	/**
	 * Entries that associated with this event
	 *
	 * @var string
	 */
	public $entryIds = null;

	/**
	 * Categories that associated with this event
	 *
	 * @var string
	 */
	public $categoryIds = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLiveEntryScheduleResource extends KalturaScheduleResource
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLocationScheduleResource extends KalturaScheduleResource
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaScheduleEvent
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventResourceListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaScheduleEventResource
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleResourceListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaScheduleResource
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLiveStreamScheduleEvent extends KalturaEntryScheduleEvent
{
	/**
	 * Defines the expected audience.
	 *
	 * @var int
	 */
	public $projectedAudience = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecordScheduleEvent extends KalturaEntryScheduleEvent
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaScheduleEventBaseFilter extends KalturaRelatedFilter
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
	public $parentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdNotIn = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventStatus
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
	public $startDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priorityIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleEventRecurrenceType
	 */
	public $recurrenceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recurrenceTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

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


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaScheduleEventResourceBaseFilter extends KalturaRelatedFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $eventIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $eventIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $resourceIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdIn = null;

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


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaScheduleResourceBaseFilter extends KalturaRelatedFilter
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
	public $parentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var KalturaScheduleResourceStatus
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
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

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


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventFilter extends KalturaScheduleEventBaseFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentResourceIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentResourceIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentResourceIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryCategoriesIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryCategoriesIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceSystemNamesMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryCategoriesIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceSystemNamesMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceSystemNamesLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventResourceFilter extends KalturaScheduleEventResourceBaseFilter
{
	/**
	 * Find event-resource objects that associated with the event, if none found, find by its parent event
	 *
	 * @var int
	 */
	public $eventIdOrItsParentIdEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleResourceFilter extends KalturaScheduleResourceBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaCameraScheduleResourceBaseFilter extends KalturaScheduleResourceFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaEntryScheduleEventBaseFilter extends KalturaScheduleEventFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdsMultiLikeAnd = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaLiveEntryScheduleResourceBaseFilter extends KalturaScheduleResourceFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaLocationScheduleResourceBaseFilter extends KalturaScheduleResourceFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCameraScheduleResourceFilter extends KalturaCameraScheduleResourceBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryScheduleEventFilter extends KalturaEntryScheduleEventBaseFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $parentCategoryIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentCategoryIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentCategoryIdsMultiLikeAnd = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLiveEntryScheduleResourceFilter extends KalturaLiveEntryScheduleResourceBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLocationScheduleResourceFilter extends KalturaLocationScheduleResourceBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaLiveStreamScheduleEventBaseFilter extends KalturaEntryScheduleEventFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaRecordScheduleEventBaseFilter extends KalturaEntryScheduleEventFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLiveStreamScheduleEventFilter extends KalturaLiveStreamScheduleEventBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecordScheduleEventFilter extends KalturaRecordScheduleEventBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaScheduleEvent object
	 * 
	 * @param KalturaScheduleEvent $scheduleEvent 
	 * @return KalturaScheduleEvent
	 */
	function add(KalturaScheduleEvent $scheduleEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEvent");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job
	 * 
	 * @param file $fileData 
	 * @param KalturaBulkUploadICalJobData $bulkUploadData 
	 * @return KalturaBulkUpload
	 */
	function addFromBulkUpload($fileData, KalturaBulkUploadICalJobData $bulkUploadData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "addFromBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBulkUpload");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleEvent object as cancelled
	 * 
	 * @param int $scheduleEventId 
	 * @return KalturaScheduleEvent
	 */
	function cancel($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "cancel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEvent");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleEvent object as deleted
	 * 
	 * @param int $scheduleEventId 
	 * @return KalturaScheduleEvent
	 */
	function delete($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEvent");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaScheduleEvent object by ID
	 * 
	 * @param int $scheduleEventId 
	 * @return KalturaScheduleEvent
	 */
	function get($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEvent");
		return $resultObject;
	}

	/**
	 * List conflicting events for resourcesIds by event's dates
	 * 
	 * @param string $resourceIds Comma separated
	 * @param KalturaScheduleEvent $scheduleEvent 
	 * @param string $scheduleEventIdToIgnore 
	 * @return KalturaScheduleEventListResponse
	 */
	function getConflicts($resourceIds, KalturaScheduleEvent $scheduleEvent, $scheduleEventIdToIgnore = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "resourceIds", $resourceIds);
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->addParam($kparams, "scheduleEventIdToIgnore", $scheduleEventIdToIgnore);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "getConflicts", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEventListResponse");
		return $resultObject;
	}

	/**
	 * List KalturaScheduleEvent objects
	 * 
	 * @param KalturaScheduleEventFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaScheduleEventListResponse
	 */
	function listAction(KalturaScheduleEventFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEventListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaScheduleEvent object
	 * 
	 * @param int $scheduleEventId 
	 * @param KalturaScheduleEvent $scheduleEvent Id
	 * @return KalturaScheduleEvent
	 */
	function update($scheduleEventId, KalturaScheduleEvent $scheduleEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEvent");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleResourceService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaScheduleResource object
	 * 
	 * @param KalturaScheduleResource $scheduleResource 
	 * @return KalturaScheduleResource
	 */
	function add(KalturaScheduleResource $scheduleResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResource", $scheduleResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleResource");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job
	 * 
	 * @param file $fileData 
	 * @param KalturaBulkUploadCsvJobData $bulkUploadData 
	 * @return KalturaBulkUpload
	 */
	function addFromBulkUpload($fileData, KalturaBulkUploadCsvJobData $bulkUploadData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "addFromBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBulkUpload");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleResource object as deleted
	 * 
	 * @param int $scheduleResourceId 
	 * @return KalturaScheduleResource
	 */
	function delete($scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleresource", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleResource");
		return $resultObject;
	}

	/**
	 * Retrieve a KalturaScheduleResource object by ID
	 * 
	 * @param int $scheduleResourceId 
	 * @return KalturaScheduleResource
	 */
	function get($scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleresource", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleResource");
		return $resultObject;
	}

	/**
	 * List KalturaScheduleResource objects
	 * 
	 * @param KalturaScheduleResourceFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaScheduleResourceListResponse
	 */
	function listAction(KalturaScheduleResourceFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleResourceListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaScheduleResource object
	 * 
	 * @param int $scheduleResourceId 
	 * @param KalturaScheduleResource $scheduleResource Id
	 * @return KalturaScheduleResource
	 */
	function update($scheduleResourceId, KalturaScheduleResource $scheduleResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->addParam($kparams, "scheduleResource", $scheduleResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleResource");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleEventResourceService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Allows you to add a new KalturaScheduleEventResource object
	 * 
	 * @param KalturaScheduleEventResource $scheduleEventResource 
	 * @return KalturaScheduleEventResource
	 */
	function add(KalturaScheduleEventResource $scheduleEventResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventResource", $scheduleEventResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEventResource");
		return $resultObject;
	}

	/**
	 * Mark the KalturaScheduleEventResource object as deleted
	 * 
	 * @param int $scheduleEventId 
	 * @param int $scheduleResourceId 
	 */
	function delete($scheduleEventId, $scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve a KalturaScheduleEventResource object by ID
	 * 
	 * @param int $scheduleEventId 
	 * @param int $scheduleResourceId 
	 * @return KalturaScheduleEventResource
	 */
	function get($scheduleEventId, $scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEventResource");
		return $resultObject;
	}

	/**
	 * List KalturaScheduleEventResource objects
	 * 
	 * @param KalturaScheduleEventResourceFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaScheduleEventResourceListResponse
	 */
	function listAction(KalturaScheduleEventResourceFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEventResourceListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing KalturaScheduleEventResource object
	 * 
	 * @param int $scheduleEventId 
	 * @param int $scheduleResourceId 
	 * @param KalturaScheduleEventResource $scheduleEventResource 
	 * @return KalturaScheduleEventResource
	 */
	function update($scheduleEventId, $scheduleResourceId, KalturaScheduleEventResource $scheduleEventResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->addParam($kparams, "scheduleEventResource", $scheduleEventResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleeventresource", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduleEventResource");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaScheduleEventService
	 */
	public $scheduleEvent = null;

	/**
	 * @var KalturaScheduleResourceService
	 */
	public $scheduleResource = null;

	/**
	 * @var KalturaScheduleEventResourceService
	 */
	public $scheduleEventResource = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->scheduleEvent = new KalturaScheduleEventService($client);
		$this->scheduleResource = new KalturaScheduleResourceService($client);
		$this->scheduleEventResource = new KalturaScheduleEventResourceService($client);
	}

	/**
	 * @return KalturaScheduleClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaScheduleClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'scheduleEvent' => $this->scheduleEvent,
			'scheduleResource' => $this->scheduleResource,
			'scheduleEventResource' => $this->scheduleEventResource,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'schedule';
	}
}

