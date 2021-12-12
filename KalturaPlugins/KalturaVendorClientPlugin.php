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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class KalturaHandleParticipantsMode extends KalturaEnumBase
{
	const ADD_AS_CO_PUBLISHERS = 0;
	const ADD_AS_CO_VIEWERS = 1;
	const IGNORE = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorIntegrationStatus extends KalturaEnumBase
{
	const DISABLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomUsersMatching extends KalturaEnumBase
{
	const DO_NOT_MODIFY = 0;
	const ADD_POSTFIX = 1;
	const REMOVE_POSTFIX = 2;
	const CMS_MATCHING = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaIntegrationSetting extends KalturaObjectBase
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
	 * @var KalturaVendorIntegrationStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultUserId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $accountId = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $createUserIfNotExist = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var KalturaHandleParticipantsMode
	 */
	public $handleParticipantsMode = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $deletionPolicy = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var string
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


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomIntegrationSetting extends KalturaIntegrationSetting
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomCategory = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableRecordingUpload = null;

	/**
	 * 
	 *
	 * @var KalturaZoomUsersMatching
	 */
	public $zoomUserMatchingMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomUserPostfix = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomWebinarCategory = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableWebinarUploads = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jwtToken = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableZoomTranscription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomAccountDescription = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $enableMeetingUpload = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomIntegrationSettingResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaZoomIntegrationSetting
	 * @readonly
	 */
	public $objects;


}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomVendorService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @return string
	 */
	function deAuthorization()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "deAuthorization", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $tokensData 
	 * @param string $iv 
	 */
	function fetchRegistrationPage($tokensData, $iv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tokensData", $tokensData);
		$this->client->addParam($kparams, "iv", $iv);
		$this->client->queueServiceActionCall("vendor_zoomvendor", "fetchRegistrationPage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve zoom integration setting object by partner id
	 * 
	 * @param int $partnerId 
	 * @return KalturaZoomIntegrationSetting
	 */
	function get($partnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("vendor_zoomvendor", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaZoomIntegrationSetting");
		return $resultObject;
	}

	/**
	 * List KalturaZoomIntegrationSetting objects
	 * 
	 * @param KalturaFilterPager $pager Pager
	 * @return KalturaZoomIntegrationSettingResponse
	 */
	function listAction(KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vendor_zoomvendor", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaZoomIntegrationSettingResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $jwt 
	 */
	function localRegistrationPage($jwt)
	{
		$kparams = array();
		$this->client->addParam($kparams, "jwt", $jwt);
		$this->client->queueServiceActionCall("vendor_zoomvendor", "localRegistrationPage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Load html page the that will ask the user for its KMC URL, derive the region of the user from it,
	 and redirect to the registration page in the correct region, while forwarding the necessary code for registration
	 * 
	 */
	function oauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "oauthValidation", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * 
	 * 
	 * @return string
	 */
	function preOauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "preOauthValidation", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 */
	function recordingComplete()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "recordingComplete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * 
	 * 
	 * @param string $accountId 
	 * @param KalturaZoomIntegrationSetting $integrationSetting 
	 * @return string
	 */
	function submitRegistration($accountId, KalturaZoomIntegrationSetting $integrationSetting)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accountId", $accountId);
		$this->client->addParam($kparams, "integrationSetting", $integrationSetting->toParams());
		$this->client->queueServiceActionCall("vendor_zoomvendor", "submitRegistration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorIntegrationService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new integration setting object
	 * 
	 * @param KalturaIntegrationSetting $integration 
	 * @param string $remoteId 
	 * @return KalturaIntegrationSetting
	 */
	function add(KalturaIntegrationSetting $integration, $remoteId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "integration", $integration->toParams());
		$this->client->addParam($kparams, "remoteId", $remoteId);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaIntegrationSetting");
		return $resultObject;
	}

	/**
	 * Delete integration object by ID
	 * 
	 * @param int $integrationId 
	 * @return KalturaIntegrationSetting
	 */
	function delete($integrationId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "integrationId", $integrationId);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaIntegrationSetting");
		return $resultObject;
	}

	/**
	 * Retrieve integration setting object by ID
	 * 
	 * @param int $integrationId 
	 * @return KalturaIntegrationSetting
	 */
	function get($integrationId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "integrationId", $integrationId);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaIntegrationSetting");
		return $resultObject;
	}

	/**
	 * Update an existing vedor catalog item object
	 * 
	 * @param int $id 
	 * @param KalturaIntegrationSetting $integrationSetting 
	 * @return KalturaIntegrationSetting
	 */
	function update($id, KalturaIntegrationSetting $integrationSetting)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "integrationSetting", $integrationSetting->toParams());
		$this->client->queueServiceActionCall("vendor_vendorintegration", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaIntegrationSetting");
		return $resultObject;
	}

	/**
	 * Update vendor catalog item status by id
	 * 
	 * @param int $id 
	 * @param int $status 
	 * @return KalturaIntegrationSetting
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("vendor_vendorintegration", "updateStatus", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaIntegrationSetting");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVendorClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaZoomVendorService
	 */
	public $zoomVendor = null;

	/**
	 * @var KalturaVendorIntegrationService
	 */
	public $vendorIntegration = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->zoomVendor = new KalturaZoomVendorService($client);
		$this->vendorIntegration = new KalturaVendorIntegrationService($client);
	}

	/**
	 * @return KalturaVendorClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaVendorClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'zoomVendor' => $this->zoomVendor,
			'vendorIntegration' => $this->vendorIntegration,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'vendor';
	}
}

