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
class KalturaZoomUsersMatching extends KalturaEnumBase
{
	const DO_NOT_MODIFY = 0;
	const ADD_POSTFIX = 1;
	const REMOVE_POSTFIX = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomIntegrationSetting extends KalturaObjectBase
{
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
	 */
	public $zoomCategory = null;

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
	public $enableRecordingUpload = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $createUserIfNotExist = null;

	/**
	 * 
	 *
	 * @var KalturaHandleParticipantsMode
	 */
	public $handleParticipantsMode = null;

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
	 * @var int
	 */
	public $conversionProfileId = null;


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
	 * 
	 * 
	 * @return string
	 */
	function oauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("vendor_zoomvendor", "oauthValidation", $kparams);
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
class KalturaVendorClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaZoomVendorService
	 */
	public $zoomVendor = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->zoomVendor = new KalturaZoomVendorService($client);
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

