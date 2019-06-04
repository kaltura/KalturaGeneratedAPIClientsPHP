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
require_once(dirname(__FILE__) . "/KalturaElasticSearchClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGroupProcessStatus extends KalturaEnumBase
{
	const NONE = 0;
	const PROCESSING = 1;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupFieldName extends KalturaEnumBase
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
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupOrderByFieldName extends KalturaEnumBase
{
	const CREATED_AT = "created_at";
	const MEMBERS_COUNT = "members_count";
	const USER_ID = "puser_id";
	const SCREEN_NAME = "screen_name";
	const UPDATED_AT = "updated_at";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchGroupBaseItem extends KalturaESearchBaseItem
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGroup extends KalturaBaseUser
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $membersCount = null;

	/**
	 * 
	 *
	 * @var KalturaGroupProcessStatus
	 */
	public $processStatus = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupOperator extends KalturaESearchGroupBaseItem
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
	 * @var array of KalturaESearchGroupBaseItem
	 */
	public $searchItems;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGroupListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaGroup
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaESearchAbstractGroupItem extends KalturaESearchGroupBaseItem
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
class KalturaESearchGroupItem extends KalturaESearchAbstractGroupItem
{
	/**
	 * 
	 *
	 * @var KalturaESearchGroupFieldName
	 */
	public $fieldName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchGroupMetadataItem extends KalturaESearchAbstractGroupItem
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
class KalturaGroupFilter extends KalturaUserFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGroupService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new group (user of type group).
	 * 
	 * @param KalturaGroup $group A new group
	 * @return KalturaGroup
	 */
	function add(KalturaGroup $group)
	{
		$kparams = array();
		$this->client->addParam($kparams, "group", $group->toParams());
		$this->client->queueServiceActionCall("group_group", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaGroup");
		return $resultObject;
	}

	/**
	 * Clone the group (groupId), and set group id with the neeGroupName.
	 * 
	 * @param string $originalGroupId The unique identifier in the partner's system
	 * @param string $newGroupId The unique identifier in the partner's system
	 * @param string $newGroupName The name of the new cloned group
	 * @return KalturaGroup
	 */
	function cloneAction($originalGroupId, $newGroupId, $newGroupName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "originalGroupId", $originalGroupId);
		$this->client->addParam($kparams, "newGroupId", $newGroupId);
		$this->client->addParam($kparams, "newGroupName", $newGroupName);
		$this->client->queueServiceActionCall("group_group", "clone", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaGroup");
		return $resultObject;
	}

	/**
	 * Delete group by ID
	 * 
	 * @param string $groupId The unique identifier in the partner's system
	 * @return KalturaGroup
	 */
	function delete($groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("group_group", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaGroup");
		return $resultObject;
	}

	/**
	 * Retrieves a group object for a specified group ID.
	 * 
	 * @param string $groupId The unique identifier in the partner's system
	 * @return KalturaGroup
	 */
	function get($groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("group_group", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaGroup");
		return $resultObject;
	}

	/**
	 * Lists group  objects that are associated with an account.
	 Blocked users are listed unless you use a filter to exclude them.
	 Deleted users are not listed unless you use a filter to include them.
	 * 
	 * @param KalturaGroupFilter $filter 
	 * @param KalturaFilterPager $pager A limit for the number of records to display on a page
	 * @return KalturaGroupListResponse
	 */
	function listAction(KalturaGroupFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("group_group", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaGroupListResponse");
		return $resultObject;
	}

	/**
	 * Update group by ID
	 * 
	 * @param string $groupId The unique identifier in the partner's system
	 * @param KalturaGroup $group Id The unique identifier in the partner's system
	 * @return KalturaGroup
	 */
	function update($groupId, KalturaGroup $group)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->addParam($kparams, "group", $group->toParams());
		$this->client->queueServiceActionCall("group_group", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaGroup");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGroupClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaGroupService
	 */
	public $group = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->group = new KalturaGroupService($client);
	}

	/**
	 * @return KalturaGroupClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaGroupClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'group' => $this->group,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'group';
	}
}

