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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class KalturaDeleteFlavorsLogicType extends KalturaEnumBase
{
	const KEEP_LIST_DELETE_OTHERS = 1;
	const DELETE_LIST = 2;
	const DELETE_KEEP_SMALLEST = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDryRunFileType extends KalturaEnumBase
{
	const LIST_RESPONSE = 1;
	const CSV = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskAddOrRemoveType extends KalturaEnumBase
{
	const ADD = 1;
	const REMOVE = 2;
	const MOVE = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskProfileStatus extends KalturaEnumBase
{
	const DISABLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
	const SUSPENDED = 4;
	const DRY_RUN_ONLY = 5;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaObjectFilterEngineType extends KalturaEnumBase
{
	const ENTRY = "1";
	const ENTRY_VENDOR_TASK = "2";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaObjectTaskType extends KalturaEnumBase
{
	const DISTRIBUTE = "scheduledTaskContentDistribution.Distribute";
	const DISPATCH_EVENT_NOTIFICATION = "scheduledTaskEventNotification.DispatchEventNotification";
	const EXECUTE_METADATA_XSLT = "scheduledTaskMetadata.ExecuteMetadataXslt";
	const DELETE_ENTRY = "1";
	const MODIFY_CATEGORIES = "2";
	const DELETE_ENTRY_FLAVORS = "3";
	const CONVERT_ENTRY_FLAVORS = "4";
	const DELETE_LOCAL_CONTENT = "5";
	const STORAGE_EXPORT = "6";
	const MODIFY_ENTRY = "7";
	const MAIL_NOTIFICATION = "8";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskProfileOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const LAST_EXECUTION_STARTED_AT_ASC = "+lastExecutionStartedAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const LAST_EXECUTION_STARTED_AT_DESC = "-lastExecutionStartedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaObjectTask extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaObjectTaskType
	 * @readonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $stopProcessingOnError = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskProfile extends KalturaObjectBase
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
	 * @var KalturaScheduledTaskProfileStatus
	 */
	public $status = null;

	/**
	 * The type of engine to use to list objects using the given "objectFilter"
	 *
	 * @var KalturaObjectFilterEngineType
	 */
	public $objectFilterEngineType = null;

	/**
	 * A filter object (inherits KalturaFilter) that is used to list objects for scheduled tasks
	 *
	 * @var KalturaFilter
	 */
	public $objectFilter;

	/**
	 * A list of tasks to execute on the founded objects
	 *
	 * @var array of KalturaObjectTask
	 */
	public $objectTasks;

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
	public $lastExecutionStartedAt = null;

	/**
	 * The maximum number of result count allowed to be processed by this profile per execution
	 *
	 * @var int
	 */
	public $maxTotalCountAllowed = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConvertEntryFlavorsObjectTask extends KalturaObjectTask
{
	/**
	 * Comma separated list of flavor param ids to convert
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * Should reconvert when flavor already exists?
	 *
	 * @var bool
	 */
	public $reconvert = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDeleteEntryFlavorsObjectTask extends KalturaObjectTask
{
	/**
	 * The logic to use to choose the flavors for deletion
	 *
	 * @var KalturaDeleteFlavorsLogicType
	 */
	public $deleteType = null;

	/**
	 * Comma separated list of flavor param ids to delete or keep
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDeleteEntryObjectTask extends KalturaObjectTask
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDeleteLocalContentObjectTask extends KalturaObjectTask
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMailNotificationObjectTask extends KalturaObjectTask
{
	/**
	 * The mail to send the notification to
	 *
	 * @var string
	 */
	public $mailTo = null;

	/**
	 * The sender in the mail
	 *
	 * @var string
	 */
	public $sender = null;

	/**
	 * The subject of the entry
	 *
	 * @var string
	 */
	public $subject = null;

	/**
	 * The message to send in the notification mail
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * The footer of the message to send in the notification mail
	 *
	 * @var string
	 */
	public $footer = null;

	/**
	 * The basic link for the KMC site
	 *
	 * @var string
	 */
	public $link = null;

	/**
	 * Send the mail to each user
	 *
	 * @var bool
	 */
	public $sendToUsers = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaModifyCategoriesObjectTask extends KalturaObjectTask
{
	/**
	 * Should the object task add or remove categories?
	 *
	 * @var KalturaScheduledTaskAddOrRemoveType
	 */
	public $addRemoveType = null;

	/**
	 * The list of category ids to add or remove
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $categoryIds;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaModifyEntryObjectTask extends KalturaObjectTask
{
	/**
	 * The input metadata profile id
	 *
	 * @var int
	 */
	public $inputMetadataProfileId = null;

	/**
	 * array of {input metadata xpath location,entry field} objects
	 *
	 * @var array of KalturaKeyValue
	 */
	public $inputMetadata;

	/**
	 * The output metadata profile id
	 *
	 * @var int
	 */
	public $outputMetadataProfileId = null;

	/**
	 * array of {output metadata xpath location,entry field} objects
	 *
	 * @var array of KalturaKeyValue
	 */
	public $outputMetadata;

	/**
	 * The input user id to set on the entry
	 *
	 * @var string
	 */
	public $inputUserId = null;

	/**
	 * The input entitled users edit to set on the entry
	 *
	 * @var string
	 */
	public $inputEntitledUsersEdit = null;

	/**
	 * The input entitled users publish to set on the entry
	 *
	 * @var string
	 */
	public $inputEntitledUsersPublish = null;

	/**
	 * Should clear the media repurposing data and therefore reset the process
	 *
	 * @var bool
	 */
	public $resetMediaRepurposingProcess = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskJobData extends KalturaJobData
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $maxResults = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $totalCount = null;

	/**
	 * 
	 *
	 * @var KalturaDryRunFileType
	 */
	public $fileFormat = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resultsFilePath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $referenceTime = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaScheduledTaskProfileBaseFilter extends KalturaFilter
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
	 * @var KalturaScheduledTaskProfileStatus
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

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastExecutionStartedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastExecutionStartedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastExecutionStartedAtLessThanOrEqualOrNull = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskProfileListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaScheduledTaskProfile
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaStorageExportObjectTask extends KalturaObjectTask
{
	/**
	 * Storage profile id
	 *
	 * @var string
	 */
	public $storageId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskProfileFilter extends KalturaScheduledTaskProfileBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new scheduled task profile
	 * 
	 * @param KalturaScheduledTaskProfile $scheduledTaskProfile 
	 * @return KalturaScheduledTaskProfile
	 */
	function add(KalturaScheduledTaskProfile $scheduledTaskProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduledTaskProfile", $scheduledTaskProfile->toParams());
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduledTaskProfile");
		return $resultObject;
	}

	/**
	 * Delete a scheduled task profile
	 * 
	 * @param int $id 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve a scheduled task profile by id
	 * 
	 * @param int $id 
	 * @return KalturaScheduledTaskProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduledTaskProfile");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $requestId 
	 * @return KalturaObjectListResponse
	 */
	function getDryRunResults($requestId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "requestId", $requestId);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "getDryRunResults", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaObjectListResponse");
		return $resultObject;
	}

	/**
	 * List scheduled task profiles
	 * 
	 * @param KalturaScheduledTaskProfileFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaScheduledTaskProfileListResponse
	 */
	function listAction(KalturaScheduledTaskProfileFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduledTaskProfileListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param int $scheduledTaskProfileId 
	 * @param int $maxResults 
	 * @return int
	 */
	function requestDryRun($scheduledTaskProfileId, $maxResults = 500)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduledTaskProfileId", $scheduledTaskProfileId);
		$this->client->addParam($kparams, "maxResults", $maxResults);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "requestDryRun", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * Serves dry run results by its request id
	 * 
	 * @param int $requestId 
	 * @return file
	 */
	function serveDryRunResults($requestId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "requestId", $requestId);
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "serveDryRunResults", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Update an existing scheduled task profile
	 * 
	 * @param int $id 
	 * @param KalturaScheduledTaskProfile $scheduledTaskProfile 
	 * @return KalturaScheduledTaskProfile
	 */
	function update($id, KalturaScheduledTaskProfile $scheduledTaskProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "scheduledTaskProfile", $scheduledTaskProfile->toParams());
		$this->client->queueServiceActionCall("scheduledtask_scheduledtaskprofile", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaScheduledTaskProfile");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduledTaskClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaScheduledTaskProfileService
	 */
	public $scheduledTaskProfile = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->scheduledTaskProfile = new KalturaScheduledTaskProfileService($client);
	}

	/**
	 * @return KalturaScheduledTaskClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaScheduledTaskClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'scheduledTaskProfile' => $this->scheduledTaskProfile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'scheduledTask';
	}
}

