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
require_once(dirname(__FILE__) . "/KalturaEventNotificationClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessAbortNotificationTemplateOrderBy extends KalturaEnumBase
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
class KalturaBusinessProcessNotificationTemplateOrderBy extends KalturaEnumBase
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
class KalturaBusinessProcessProvider extends KalturaEnumBase
{
	const ACTIVITI = "activitiBusinessProcessNotification.Activiti";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessServerOrderBy extends KalturaEnumBase
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
class KalturaBusinessProcessServerStatus extends KalturaEnumBase
{
	const DISABLED = "1";
	const ENABLED = "2";
	const DELETED = "3";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessSignalNotificationTemplateOrderBy extends KalturaEnumBase
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
class KalturaBusinessProcessStartNotificationTemplateOrderBy extends KalturaEnumBase
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
class KalturaBusinessProcessCase extends KalturaObjectBase
{
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
	public $businessProcessId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $businessProcessStartNotificationTemplateId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $suspended = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $activityId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessServer extends KalturaObjectBase
{
	/**
	 * Auto generated identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Server creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Server update date as Unix timestamp (In seconds)
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
	 * @var KalturaBusinessProcessServerStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The type of the server, this is auto filled by the derived server object
	 *
	 * @var KalturaBusinessProcessProvider
	 * @readonly
	 */
	public $type = null;

	/**
	 * The dc of the server
	 *
	 * @var int
	 */
	public $dc = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessNotificationTemplate extends KalturaEventNotificationTemplate
{
	/**
	 * Define the integrated BPM server id
	 *
	 * @var int
	 */
	public $serverId = null;

	/**
	 * Define the integrated BPM process id
	 *
	 * @var string
	 */
	public $processId = null;

	/**
	 * Code to load the main triggering object
	 *
	 * @var string
	 */
	public $mainObjectCode = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessServerBaseFilter extends KalturaFilter
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
	 * @var KalturaBusinessProcessServerStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var KalturaBusinessProcessServerStatus
	 */
	public $statusNotEqual = null;

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
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var KalturaBusinessProcessProvider
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqOrNull = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessServerListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaBusinessProcessServer
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessAbortNotificationTemplate extends KalturaBusinessProcessNotificationTemplate
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessNotificationDispatchJobData extends KalturaEventNotificationDispatchJobData
{
	/**
	 * 
	 *
	 * @var KalturaBusinessProcessServer
	 */
	public $server;

	/**
	 * 
	 *
	 * @var string
	 */
	public $caseId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessServerFilter extends KalturaBusinessProcessServerBaseFilter
{
	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $currentDcOrExternal = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $currentDc = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessSignalNotificationTemplate extends KalturaBusinessProcessNotificationTemplate
{
	/**
	 * Define the message to be sent
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Define the event that waiting to the signal
	 *
	 * @var string
	 */
	public $eventId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessStartNotificationTemplate extends KalturaBusinessProcessNotificationTemplate
{
	/**
	 * Abort the process automatically if the triggering object deleted
	 *
	 * @var bool
	 */
	public $abortOnDeletion = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessNotificationTemplateBaseFilter extends KalturaEventNotificationTemplateFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessNotificationTemplateFilter extends KalturaBusinessProcessNotificationTemplateBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessAbortNotificationTemplateBaseFilter extends KalturaBusinessProcessNotificationTemplateFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessSignalNotificationTemplateBaseFilter extends KalturaBusinessProcessNotificationTemplateFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBusinessProcessStartNotificationTemplateBaseFilter extends KalturaBusinessProcessNotificationTemplateFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessAbortNotificationTemplateFilter extends KalturaBusinessProcessAbortNotificationTemplateBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessSignalNotificationTemplateFilter extends KalturaBusinessProcessSignalNotificationTemplateBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessStartNotificationTemplateFilter extends KalturaBusinessProcessStartNotificationTemplateBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessCaseService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Abort business-process case
	 * 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @param int $businessProcessStartNotificationTemplateId 
	 */
	function abort($objectType, $objectId, $businessProcessStartNotificationTemplateId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "businessProcessStartNotificationTemplateId", $businessProcessStartNotificationTemplateId);
		$this->client->queueServiceActionCall("businessprocessnotification_businessprocesscase", "abort", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * List business-process cases
	 * 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @return array
	 */
	function listAction($objectType, $objectId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->queueServiceActionCall("businessprocessnotification_businessprocesscase", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Server business-process case diagram
	 * 
	 * @param string $objectType 
	 * @param string $objectId 
	 * @param int $businessProcessStartNotificationTemplateId 
	 * @return file
	 */
	function serveDiagram($objectType, $objectId, $businessProcessStartNotificationTemplateId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "objectType", $objectType);
		$this->client->addParam($kparams, "objectId", $objectId);
		$this->client->addParam($kparams, "businessProcessStartNotificationTemplateId", $businessProcessStartNotificationTemplateId);
		$this->client->queueServiceActionCall("businessprocessnotification_businessprocesscase", "serveDiagram", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBusinessProcessNotificationClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaBusinessProcessCaseService
	 */
	public $businessProcessCase = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->businessProcessCase = new KalturaBusinessProcessCaseService($client);
	}

	/**
	 * @return KalturaBusinessProcessNotificationClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaBusinessProcessNotificationClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'businessProcessCase' => $this->businessProcessCase,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'businessProcessNotification';
	}
}

