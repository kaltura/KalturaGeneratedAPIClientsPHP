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

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomType extends KalturaEnumBase
{
	const ROOM = 1;
	const BREAKOUT = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomEntryOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const END_DATE_ASC = "+endDate";
	const MODERATION_COUNT_ASC = "+moderationCount";
	const NAME_ASC = "+name";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const RANK_ASC = "+rank";
	const RECENT_ASC = "+recent";
	const START_DATE_ASC = "+startDate";
	const TOTAL_RANK_ASC = "+totalRank";
	const UPDATED_AT_ASC = "+updatedAt";
	const WEIGHT_ASC = "+weight";
	const CREATED_AT_DESC = "-createdAt";
	const END_DATE_DESC = "-endDate";
	const MODERATION_COUNT_DESC = "-moderationCount";
	const NAME_DESC = "-name";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
	const RANK_DESC = "-rank";
	const RECENT_DESC = "-recent";
	const START_DATE_DESC = "-startDate";
	const TOTAL_RANK_DESC = "-totalRank";
	const UPDATED_AT_DESC = "-updatedAt";
	const WEIGHT_DESC = "-weight";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomEntry extends KalturaBaseEntry
{
	/**
	 * 
	 *
	 * @var KalturaRoomType
	 */
	public $roomType = null;

	/**
	 * The entryId of the broadcast that the room streaming to
	 *
	 * @var string
	 */
	public $broadcastEntryId = null;

	/**
	 * The entryId of the room where settings will be taken from
	 *
	 * @var string
	 */
	public $templateRoomEntryId = null;

	/**
	 * The entryId of the recording
	 *
	 * @var string
	 */
	public $recordedEntryId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomEntryListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaRoomEntry
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaRoomEntryBaseFilter extends KalturaBaseEntryFilter
{
	/**
	 * 
	 *
	 * @var KalturaRoomType
	 */
	public $roomTypeEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomEntryFilter extends KalturaRoomEntryBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param KalturaRoomEntry $entry 
	 * @return KalturaRoomEntry
	 */
	function add(KalturaRoomEntry $entry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("room_room", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRoomEntry");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $roomEntryId 
	 * @param string $mediaEntryId 
	 * @return KalturaMediaEntry
	 */
	function attachRecordedEntry($roomEntryId, $mediaEntryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomEntryId", $roomEntryId);
		$this->client->addParam($kparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("room_room", "attachRecordedEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaMediaEntry");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $roomId 
	 */
	function delete($roomId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomId", $roomId);
		$this->client->queueServiceActionCall("room_room", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * 
	 * 
	 * @param string $roomId 
	 * @return KalturaRoomEntry
	 */
	function get($roomId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomId", $roomId);
		$this->client->queueServiceActionCall("room_room", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRoomEntry");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaRoomEntryFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaRoomEntryListResponse
	 */
	function listAction(KalturaRoomEntryFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("room_room", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRoomEntryListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $roomId 
	 * @param KalturaRoomEntry $room Id
	 * @return KalturaRoomEntry
	 */
	function update($roomId, KalturaRoomEntry $room)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roomId", $roomId);
		$this->client->addParam($kparams, "room", $room->toParams());
		$this->client->queueServiceActionCall("room_room", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRoomEntry");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRoomClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaRoomService
	 */
	public $room = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->room = new KalturaRoomService($client);
	}

	/**
	 * @return KalturaRoomClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaRoomClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'room' => $this->room,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'room';
	}
}

