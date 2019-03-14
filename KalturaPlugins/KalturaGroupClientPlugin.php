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
class KalturaGroup extends KalturaBaseUser
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $membersCount = null;


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

