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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class KalturaESearchItemType extends KalturaEnumBase
{
	const EXACT_MATCH = 1;
	const PARTIAL = 2;
	const STARTS_WITH = 3;
	const EXISTS = 4;
	const RANGE = 5;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchOperatorType extends KalturaEnumBase
{
	const AND_OP = 1;
	const OR_OP = 2;
	const NOT_OP = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCaptionFieldName extends KalturaEnumBase
{
	const CAPTION_ASSET_ID = "caption_asset_id";
	const CONTENT = "content";
	const END_TIME = "end_time";
	const LABEL = "label";
	const LANGUAGE = "language";
	const START_TIME = "start_time";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryAggregateByFieldName extends KalturaEnumBase
{
	const CATEGORY_NAME = "category_name";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryEntryFieldName extends KalturaEnumBase
{
	const ANCESTOR_ID = "ancestor_id";
	const ANCESTOR_NAME = "ancestor_name";
	const FULL_IDS = "full_ids";
	const ID = "id";
	const NAME = "name";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryFieldName extends KalturaEnumBase
{
	const CONTRIBUTION_POLICY = "contribution_policy";
	const CREATED_AT = "created_at";
	const DEPTH = "depth";
	const DESCRIPTION = "description";
	const DIRECT_ENTRIES_COUNT = "direct_entries_count";
	const DIRECT_SUB_CATEGORIES_COUNT = "direct_sub_categories_count";
	const DISPLAY_IN_SEARCH = "display_in_search";
	const ENTRIES_COUNT = "entries_count";
	const FULL_IDS = "full_ids";
	const FULL_NAME = "full_name";
	const ID = "id";
	const INHERITANCE_TYPE = "inheritance_type";
	const INHERITED_PARENT_ID = "inherited_parent_id";
	const MEMBERS_COUNT = "members_count";
	const MODERATION = "moderation";
	const NAME = "name";
	const PARENT_ID = "parent_id";
	const PENDING_ENTRIES_COUNT = "pending_entries_count";
	const PENDING_MEMBERS_COUNT = "pending_members_count";
	const PRIVACY = "privacy";
	const PRIVACY_CONTEXT = "privacy_context";
	const PRIVACY_CONTEXTS = "privacy_contexts";
	const REFERENCE_ID = "reference_id";
	const TAGS = "tags";
	const UPDATED_AT = "updated_at";
	const USER_ID = "user_id";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryOrderByFieldName extends KalturaEnumBase
{
	const CREATED_AT = "created_at";
	const ENTRIES_COUNT = "entries_count";
	const MEMBERS_COUNT = "members_count";
	const NAME = "name";
	const UPDATED_AT = "updated_at";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryUserFieldName extends KalturaEnumBase
{
	const USER_ID = "user_id";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCuePointAggregateByFieldName extends KalturaEnumBase
{
	const TAGS = "tags";
	const TYPE = "type";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCuePointFieldName extends KalturaEnumBase
{
	const ANSWERS = "answers";
	const END_TIME = "end_time";
	const EXPLANATION = "explanation";
	const HINT = "hint";
	const ID = "id";
	const NAME = "name";
	const QUESTION = "question";
	const START_TIME = "start_time";
	const SUB_TYPE = "sub_type";
	const TAGS = "tags";
	const TEXT = "text";
	const TYPE = "type";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryAggregateByFieldName extends KalturaEnumBase
{
	const ACCESS_CONTROL_PROFILE = "access_control_profile_id";
	const ENTRY_TYPE = "entry_type";
	const MEDIA_TYPE = "media_type";
	const TAGS = "tags";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryFieldName extends KalturaEnumBase
{
	const ACCESS_CONTROL_ID = "access_control_id";
	const ADMIN_TAGS = "admin_tags";
	const CAPTIONS_CONTENT = "captions_content";
	const CONVERSION_PROFILE_ID = "conversion_profile_id";
	const CREATED_AT = "created_at";
	const CREATOR_ID = "creator_kuser_id";
	const CREDIT = "credit";
	const DESCRIPTION = "description";
	const END_DATE = "end_date";
	const ENTITLED_USER_EDIT = "entitled_kusers_edit";
	const ENTITLED_USER_PUBLISH = "entitled_kusers_publish";
	const ENTITLED_USER_VIEW = "entitled_kusers_view";
	const ENTRY_TYPE = "entry_type";
	const EXTERNAL_SOURCE_TYPE = "external_source_type";
	const ID = "id";
	const IS_LIVE = "is_live";
	const IS_QUIZ = "is_quiz";
	const USER_ID = "kuser_id";
	const LAST_PLAYED_AT = "last_played_at";
	const LENGTH_IN_MSECS = "length_in_msecs";
	const MEDIA_TYPE = "media_type";
	const MODERATION_STATUS = "moderation_status";
	const NAME = "name";
	const PARENT_ENTRY_ID = "parent_id";
	const PARTNER_SORT_VALUE = "partner_sort_value";
	const PLAYS = "plays";
	const PUSH_PUBLISH = "push_publish";
	const RECORDED_ENTRY_ID = "recorded_entry_id";
	const REDIRECT_ENTRY_ID = "redirect_entry_id";
	const REFERENCE_ID = "reference_id";
	const ROOT_ID = "root_id";
	const SITE_URL = "site_url";
	const SOURCE_TYPE = "source_type";
	const START_DATE = "start_date";
	const TAGS = "tags";
	const TEMPLATE_ENTRY_ID = "template_entry_id";
	const UPDATED_AT = "updated_at";
	const USER_NAMES = "user_names";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryOrderByFieldName extends KalturaEnumBase
{
	const CREATED_AT = "created_at";
	const END_DATE = "end_date";
	const LAST_PLAYED_AT = "last_played_at";
	const NAME = "name";
	const PLAYS = "plays";
	const PLAYS_LAST_1_DAY = "plays_last_1_day";
	const PLAYS_LAST_30_DAYS = "plays_last_30_days";
	const PLAYS_LAST_7_DAYS = "plays_last_7_days";
	const START_DATE = "start_date";
	const UPDATED_AT = "updated_at";
	const VIEWS = "views";
	const VIEWS_LAST_1_DAY = "views_last_1_day";
	const VIEWS_LAST_30_DAYS = "views_last_30_days";
	const VIEWS_LAST_7_DAYS = "views_last_7_days";
	const VOTES = "votes";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchMetadataAggregateByFieldName extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchSortOrder extends KalturaEnumBase
{
	const ORDER_BY_ASC = "asc";
	const ORDER_BY_DESC = "desc";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserFieldName extends KalturaEnumBase
{
	const CREATED_AT = "created_at";
	const EMAIL = "email";
	const FIRST_NAME = "first_name";
	const GROUP_IDS = "group_ids";
	const LAST_NAME = "last_name";
	const PERMISSION_NAMES = "permission_names";
	const ROLE_IDS = "role_ids";
	const SCREEN_NAME = "screen_name";
	const TAGS = "tags";
	const UPDATED_AT = "updated_at";
	const USER_ID = "user_id";
	const TYPE = "user_type";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserOrderByFieldName extends KalturaEnumBase
{
	const CREATED_AT = "created_at";
	const USER_ID = "puser_id";
	const SCREEN_NAME = "screen_name";
	const UPDATED_AT = "updated_at";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEsearchGroupUserFieldName extends KalturaEnumBase
{
	const GROUP_IDS = "group_ids";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchBaseItem extends KalturaObjectBase
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBeaconScheduledResourceBaseItem extends KalturaESearchBaseItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchOrderByItem extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaESearchSortOrder
	 */
	public $sortOrder = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchAggregationItem extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $size = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchAggregation extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchAggregationItem
	 */
	public $aggregations;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchAggregationBucket extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $value = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $count = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchAggregationResponseItem extends KalturaObjectBase
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
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchAggregationBucket
	 */
	public $buckets;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchBaseFilter extends KalturaObjectBase
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchCategoryBaseItem extends KalturaESearchBaseItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchHighlight extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var array of KalturaString
	 */
	public $hits;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchItemData extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchHighlight
	 */
	public $highlight;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchItemDataResult extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $totalCount = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchItemData
	 */
	public $items;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemsType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchResult extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchHighlight
	 */
	public $highlight;

	/**
	 * 
	 *
	 * @var array of KalturaESearchItemDataResult
	 */
	public $itemsData;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryResult extends KalturaESearchResult
{
	/**
	 * 
	 *
	 * @var KalturaCategory
	 */
	public $object;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchEntryBaseItem extends KalturaESearchBaseItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchEntryBaseNestedObject extends KalturaESearchEntryBaseItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchEntryNestedBaseItem extends KalturaESearchEntryBaseNestedObject
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryResult extends KalturaESearchResult
{
	/**
	 * 
	 *
	 * @var KalturaBaseEntry
	 */
	public $object;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupResult extends KalturaESearchResult
{
	/**
	 * 
	 *
	 * @var KalturaGroup
	 */
	public $object;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchOrderBy extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchOrderByItem
	 */
	public $orderItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchParams extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $objectStatuses = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var KalturaESearchOrderBy
	 */
	public $orderBy;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchRange extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $greaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $greaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lessThan = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchResponse extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchUserBaseItem extends KalturaESearchBaseItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserResult extends KalturaESearchResult
{
	/**
	 * 
	 *
	 * @var KalturaUser
	 */
	public $object;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryOperator extends KalturaESearchEntryBaseItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchOperatorType
	 */
	public $operator = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchEntryBaseItem
	 */
	public $searchItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCaptionItemData extends KalturaESearchItemData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $line = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startsAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endsAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $label = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryAggregationItem extends KalturaESearchAggregationItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCategoryAggregateByFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryOrderByItem extends KalturaESearchOrderByItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCategoryOrderByFieldName
	 */
	public $sortField = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryOperator extends KalturaESearchCategoryBaseItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchOperatorType
	 */
	public $operator = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchCategoryBaseItem
	 */
	public $searchItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryParams extends KalturaESearchParams
{
	/**
	 * 
	 *
	 * @var KalturaESearchCategoryOperator
	 */
	public $searchOperator;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryResponse extends KalturaESearchResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchCategoryResult
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCuePointItemData extends KalturaESearchItemData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $cuePointType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

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
	public $text = null;

	/**
	 * 
	 *
	 * @var array of KalturaString
	 */
	public $tags;

	/**
	 * 
	 *
	 * @var string
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $question = null;

	/**
	 * 
	 *
	 * @var array of KalturaString
	 */
	public $answers;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hint = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $explanation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCuepointsAggregationItem extends KalturaESearchAggregationItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCuePointAggregateByFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryAggregationItem extends KalturaESearchAggregationItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchEntryAggregateByFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryOrderByItem extends KalturaESearchOrderByItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchEntryOrderByFieldName
	 */
	public $sortField = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryParams extends KalturaESearchParams
{
	/**
	 * 
	 *
	 * @var KalturaESearchEntryOperator
	 */
	public $searchOperator;

	/**
	 * 
	 *
	 * @var KalturaESearchAggregation
	 */
	public $aggregations;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryResponse extends KalturaESearchResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchEntryResult
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var array of KalturaESearchAggregationResponseItem
	 * @readonly
	 */
	public $aggregations;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupOrderByItem extends KalturaESearchOrderByItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchGroupOrderByFieldName
	 */
	public $sortField = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupParams extends KalturaESearchParams
{
	/**
	 * 
	 *
	 * @var KalturaESearchGroupOperator
	 */
	public $searchOperator;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupResponse extends KalturaESearchResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchGroupResult
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchMetadataAggregationItem extends KalturaESearchAggregationItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchMetadataAggregateByFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchMetadataItemData extends KalturaESearchItemData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xpath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataFieldId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $valueText = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $valueInt = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchMetadataOrderByItem extends KalturaESearchOrderByItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xpath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserOrderByItem extends KalturaESearchOrderByItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchUserOrderByFieldName
	 */
	public $sortField = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserOperator extends KalturaESearchUserBaseItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchOperatorType
	 */
	public $operator = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchUserBaseItem
	 */
	public $searchItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserParams extends KalturaESearchParams
{
	/**
	 * 
	 *
	 * @var KalturaESearchUserOperator
	 */
	public $searchOperator;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserResponse extends KalturaESearchResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchUserResult
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBeaconAbstractScheduledResourceItem extends KalturaBeaconScheduledResourceBaseItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var KalturaESearchItemType
	 */
	public $itemType = null;

	/**
	 * 
	 *
	 * @var KalturaESearchRange
	 */
	public $range;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchAbstractCategoryItem extends KalturaESearchCategoryBaseItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var KalturaESearchItemType
	 */
	public $itemType = null;

	/**
	 * 
	 *
	 * @var KalturaESearchRange
	 */
	public $range;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addHighlight = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchAbstractEntryItem extends KalturaESearchEntryBaseItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var KalturaESearchItemType
	 */
	public $itemType = null;

	/**
	 * 
	 *
	 * @var KalturaESearchRange
	 */
	public $range;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addHighlight = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchAbstractUserItem extends KalturaESearchUserBaseItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var KalturaESearchItemType
	 */
	public $itemType = null;

	/**
	 * 
	 *
	 * @var KalturaESearchRange
	 */
	public $range;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addHighlight = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMediaEsearchExportToCsvJobData extends KalturaExportCsvJobData
{
	/**
	 * Esearch parameters for the entry search
	 *
	 * @var KalturaESearchEntryParams
	 */
	public $searchParams;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryEntryItem extends KalturaESearchAbstractEntryItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCategoryEntryFieldName
	 */
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var KalturaCategoryEntryStatus
	 */
	public $categoryEntryStatus = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryItem extends KalturaESearchAbstractCategoryItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCategoryFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryMetadataItem extends KalturaESearchAbstractCategoryItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xpath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataFieldId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryUserItem extends KalturaESearchAbstractCategoryItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCategoryUserFieldName
	 */
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var KalturaCategoryUserPermissionLevel
	 */
	public $permissionLevel = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryItem extends KalturaESearchAbstractEntryItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchEntryFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupUserItem extends KalturaESearchAbstractUserItem
{
	/**
	 * 
	 *
	 * @var KalturaEsearchGroupUserFieldName
	 */
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var KalturaGroupUserCreationMode
	 */
	public $creationMode = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUnifiedItem extends KalturaESearchAbstractEntryItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserItem extends KalturaESearchAbstractUserItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchUserFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserMetadataItem extends KalturaESearchAbstractUserItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xpath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataFieldId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchEntryAbstractNestedItem extends KalturaESearchEntryNestedBaseItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var KalturaESearchItemType
	 */
	public $itemType = null;

	/**
	 * 
	 *
	 * @var KalturaESearchRange
	 */
	public $range;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addHighlight = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchNestedOperator extends KalturaESearchEntryNestedBaseItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchOperatorType
	 */
	public $operator = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchEntryNestedBaseItem
	 */
	public $searchItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCaptionItem extends KalturaESearchEntryAbstractNestedItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCaptionFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCuePointItem extends KalturaESearchEntryAbstractNestedItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchCuePointFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryMetadataItem extends KalturaESearchEntryAbstractNestedItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xpath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataFieldId = null;


}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchCategoryParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchCategoryResponse
	 */
	function searchCategory(KalturaESearchCategoryParams $searchParams, KalturaPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchCategory", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaESearchCategoryResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchEntryParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchEntryResponse
	 */
	function searchEntry(KalturaESearchEntryParams $searchParams, KalturaPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaESearchEntryResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchGroupParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchGroupResponse
	 */
	function searchGroup(KalturaESearchGroupParams $searchParams, KalturaPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaESearchGroupResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchUserParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchUserResponse
	 */
	function searchUser(KalturaESearchUserParams $searchParams, KalturaPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchParams", $searchParams->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "searchUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaESearchUserResponse");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaElasticSearchClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaESearchService
	 */
	public $eSearch = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->eSearch = new KalturaESearchService($client);
	}

	/**
	 * @return KalturaElasticSearchClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaElasticSearchClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'eSearch' => $this->eSearch,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'elasticSearch';
	}
}

