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
	const CAPTION_CONTENT = "caption_assets.lines.content";
	const CAPTION_END_TIME = "caption_assets.lines.end_time";
	const CAPTION_START_TIME = "caption_assets.lines.start_time";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryFieldName extends KalturaEnumBase
{
	const CATEGORY_CONTRIBUTION_POLICY = "contribution_policy";
	const CATEGORY_CREATED_AT = "created_at";
	const CATEGORY_DEPTH = "depth";
	const CATEGORY_DESCRIPTION = "description";
	const CATEGORY_DIRECT_ENTRIES_COUNT = "direct_entries_count";
	const CATEGORY_DIRECT_SUB_CATEGORIES_COUNT = "direct_sub_categories_count";
	const CATEGORY_DISPLAY_IN_SEARCH = "display_in_search";
	const CATEGORY_ENTRIES_COUNT = "entries_count";
	const CATEGORY_FULL_IDS = "full_ids";
	const CATEGORY_FULL_NAME = "full_name";
	const CATEGORY_INHERITANCE_TYPE = "inheritance_type";
	const CATEGORY_INHERITED_PARENT_ID = "inherited_parent_id";
	const CATEGORY_KUSER_ID = "kuser_id";
	const CATEGORY_KUSER_IDS = "kuser_ids";
	const CATEGORY_MEMBERS_COUNT = "members_count";
	const CATEGORY_MODERATION = "moderation";
	const CATEGORY_NAME = "name";
	const CATEGORY_PARENT_ID = "parent_id";
	const CATEGORY_PENDING_ENTRIES_COUNT = "pending_entries_count";
	const CATEGORY_PENDING_MEMBERS_COUNT = "pending_members_count";
	const CATEGORY_PRIVACY = "privacy";
	const CATEGORY_PRIVACY_CONTEXT = "privacy_context";
	const CATEGORY_PRIVACY_CONTEXTS = "privacy_contexts";
	const CATEGORY_REFERENCE_ID = "reference_id";
	const CATEGORY_TAGS = "tags";
	const CATEGORY_UPDATED_AT = "updated_at";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCategoryOrderByFieldName extends KalturaEnumBase
{
	const CATEGORY_CREATED_AT = "created_at";
	const CATEGORY_UPDATED_AT = "updated_at";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCuePointFieldName extends KalturaEnumBase
{
	const CUE_POINT_ANSWERS = "cue_points.cue_point_answers";
	const CUE_POINT_END_TIME = "cue_points.cue_point_end_time";
	const CUE_POINT_EXPLANATION = "cue_points.cue_point_explanation";
	const CUE_POINT_HINT = "cue_points.cue_point_hint";
	const CUE_POINT_ID = "cue_points.cue_point_id";
	const CUE_POINT_NAME = "cue_points.cue_point_name";
	const CUE_POINT_QUESTION = "cue_points.cue_point_question";
	const CUE_POINT_START_TIME = "cue_points.cue_point_start_time";
	const CUE_POINT_SUB_TYPE = "cue_points.cue_point_sub_type";
	const CUE_POINT_TAGS = "cue_points.cue_point_tags";
	const CUE_POINT_TEXT = "cue_points.cue_point_text";
	const CUE_POINT_TYPE = "cue_points.cue_point_type";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryFieldName extends KalturaEnumBase
{
	const ENTRY_ID = "_id";
	const ENTRY_ACCESS_CONTROL_ID = "access_control_id";
	const ENTRY_ADMIN_TAGS = "admin_tags";
	const ENTRY_CATEGORIES = "categories";
	const ENTRY_CATEGORY_NAME = "categories.name";
	const ENTRY_CATEGORY_IDS = "category_ids";
	const ENTRY_CONVERSION_PROFILE_ID = "conversion_profile_id";
	const ENTRY_CREATED_AT = "created_at";
	const ENTRY_CREATOR_ID = "creator_kuser_id";
	const ENTRY_CREDIT = "credit";
	const ENTRY_DESCRIPTION = "description";
	const ENTRY_END_DATE = "end_date";
	const ENTRY_ENTITLED_USER_EDIT = "entitled_kusers_edit";
	const ENTRY_ENTITLED_USER_PUBLISH = "entitled_kusers_publish";
	const ENTRY_TYPE = "entry_type";
	const ENTRY_EXTERNAL_SOURCE_TYPE = "external_source_type";
	const ENTRY_USER_ID = "kuser_id";
	const ENTRY_LENGTH_IN_MSECS = "length_in_msecs";
	const ENTRY_MEDIA_TYPE = "media_type";
	const ENTRY_MODERATION_STATUS = "moderation_status";
	const ENTRY_NAME = "name";
	const ENTRY_PARENT_ENTRY_ID = "parent_id";
	const ENTRY_PUSH_PUBLISH = "push_publish";
	const ENTRY_RECORDED_ENTRY_ID = "recorded_entry_id";
	const ENTRY_REDIRECT_ENTRY_ID = "redirect_entry_id";
	const ENTRY_REFERENCE_ID = "reference_id";
	const ENTRY_SITE_URL = "site_url";
	const ENTRY_SOURCE_TYPE = "source_type";
	const ENTRY_START_DATE = "start_date";
	const ENTRY_TAGS = "tags";
	const ENTRY_TEMPLATE_ENTRY_ID = "template_entry_id";
	const ENTRY_UPDATED_AT = "updated_at";
	const ENTRY_VIEWS = "views";
	const ENTRY_VOTES = "votes";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchEntryOrderByFieldName extends KalturaEnumBase
{
	const ENTRY_CREATED_AT = "created_at";
	const ENTRY_END_DATE = "end_date";
	const ENTRY_NAME = "name.keyword";
	const ENTRY_START_DATE = "start_date";
	const ENTRY_UPDATED_AT = "updated_at";
	const ENTRY_VIEWS = "views";
	const ENTRY_VOTES = "votes";
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
	const USER_CREATED_AT = "created_at";
	const USER_EMAIL = "email";
	const USER_FIRST_NAME = "first_name";
	const USER_GROUP_IDS = "group_ids";
	const USER_TYPE = "kuser_type";
	const USER_LAST_NAME = "last_name";
	const USER_PERMISSION_NAMES = "permission_names";
	const USER_ROLE_IDS = "role_ids";
	const USER_SCREEN_NAME = "screen_name";
	const USER_TAGS = "tags";
	const USER_UPDATED_AT = "updated_at";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserOrderByFieldName extends KalturaEnumBase
{
	const USER_CREATED_AT = "created_at";
	const USER_UPDATED_AT = "updated_at";
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
abstract class KalturaESearchItemData extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $highlight = null;


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
class KalturaESearchOperator extends KalturaESearchBaseItem
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
	 * @var array of KalturaESearchBaseItem
	 */
	public $searchItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchParams extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaESearchOperator
	 */
	public $searchOperator;

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

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useHighlight = null;


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
abstract class KalturaESearchResult extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaObjectBase
	 */
	public $object;

	/**
	 * 
	 *
	 * @var string
	 */
	public $highlight = null;

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
class KalturaESearchResponse extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchResult
	 * @readonly
	 */
	public $objects;


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
class KalturaESearchCategoryResult extends KalturaESearchResult
{

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
	 * @var string
	 */
	public $tags = null;

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
	 * @var string
	 */
	public $answers = null;

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
class KalturaESearchEntryResult extends KalturaESearchResult
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchItem extends KalturaESearchBaseItem
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
class KalturaESearchQuery extends KalturaESearchBaseItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $eSearchQuery = null;


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
class KalturaESearchUserResult extends KalturaESearchResult
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchCaptionItem extends KalturaESearchItem
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
class KalturaESearchCategoryItem extends KalturaESearchItem
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
class KalturaESearchCuePointItem extends KalturaESearchItem
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
class KalturaESearchEntryItem extends KalturaESearchItem
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
class KalturaESearchMetadataItem extends KalturaESearchItem
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
class KalturaESearchUnifiedItem extends KalturaESearchItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchUserItem extends KalturaESearchItem
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
class KalturaESearchService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchItem $searchItem 
	 * @return array
	 */
	function getAllowedSearchTypes(KalturaESearchItem $searchItem)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchItem", $searchItem->toParams());
		$this->client->queueServiceActionCall("elasticsearch_esearch", "getAllowedSearchTypes", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchResponse
	 */
	function searchCategory(KalturaESearchParams $searchParams, KalturaPager $pager = null)
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
		$this->client->validateObjectType($resultObject, "KalturaESearchResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchResponse
	 */
	function searchEntry(KalturaESearchParams $searchParams, KalturaPager $pager = null)
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
		$this->client->validateObjectType($resultObject, "KalturaESearchResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchParams $searchParams 
	 * @param KalturaPager $pager 
	 * @return KalturaESearchResponse
	 */
	function searchUser(KalturaESearchParams $searchParams, KalturaPager $pager = null)
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
		$this->client->validateObjectType($resultObject, "KalturaESearchResponse");
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

