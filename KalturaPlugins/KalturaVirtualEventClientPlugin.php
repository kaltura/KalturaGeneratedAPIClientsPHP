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
require_once(dirname(__FILE__) . "/KalturaScheduleClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualEventStatus extends KalturaEnumBase
{
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualScheduleEventSubType extends KalturaEnumBase
{
	const AGENDA = 1;
	const REGISTRATION = 2;
	const MAIN_EVENT = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualEventOrderBy extends KalturaEnumBase
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
class KalturaVirtualEvent extends KalturaObjectBase
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
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var KalturaVirtualEventStatus
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
	 * 
	 *
	 * @var string
	 */
	public $attendeesGroupIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminsGroupIds = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $registrationScheduleEventId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $agendaScheduleEventId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mainEventScheduleEventId = null;

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
	 */
	public $deletionDueDate = null;

	/**
	 * JSON-Schema of the Registration Form
	 *
	 * @var string
	 */
	public $registrationFormSchema = null;

	/**
	 * The Virtual Event Url
	 *
	 * @var string
	 */
	public $eventUrl = null;

	/**
	 * The Virtual Event WebHook registration token
	 *
	 * @var string
	 */
	public $webhookRegistrationToken = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVirtualEventBaseFilter extends KalturaFilter
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
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var KalturaVirtualEventStatus
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
class KalturaVirtualEventListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaVirtualEvent
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualScheduleEvent extends KalturaScheduleEvent
{
	/**
	 * The ID of the virtual event connected to this Schedule Event
	 *
	 * @var int
	 */
	public $virtualEventId = null;

	/**
	 * The type of the Virtual Schedule Event
	 *
	 * @var KalturaVirtualScheduleEventSubType
	 * @insertonly
	 */
	public $virtualScheduleEventSubType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualEventFilter extends KalturaVirtualEventBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaVirtualScheduleEventBaseFilter extends KalturaScheduleEventFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualScheduleEventFilter extends KalturaVirtualScheduleEventBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualEventService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new virtual event
	 * 
	 * @param KalturaVirtualEvent $virtualEvent 
	 * @return KalturaVirtualEvent
	 */
	function add(KalturaVirtualEvent $virtualEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "virtualEvent", $virtualEvent->toParams());
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVirtualEvent");
		return $resultObject;
	}

	/**
	 * Delete a virtual event
	 * 
	 * @param int $id 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve a virtual event by id
	 * 
	 * @param int $id 
	 * @return KalturaVirtualEvent
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVirtualEvent");
		return $resultObject;
	}

	/**
	 * List virtual events
	 * 
	 * @param KalturaVirtualEventFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaVirtualEventListResponse
	 */
	function listAction(KalturaVirtualEventFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVirtualEventListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing virtual event
	 * 
	 * @param int $id 
	 * @param KalturaVirtualEvent $virtualEvent 
	 * @return KalturaVirtualEvent
	 */
	function update($id, KalturaVirtualEvent $virtualEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "virtualEvent", $virtualEvent->toParams());
		$this->client->queueServiceActionCall("virtualevent_virtualevent", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVirtualEvent");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVirtualEventClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaVirtualEventService
	 */
	public $virtualEvent = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->virtualEvent = new KalturaVirtualEventService($client);
	}

	/**
	 * @return KalturaVirtualEventClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaVirtualEventClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'virtualEvent' => $this->virtualEvent,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'virtualEvent';
	}
}

