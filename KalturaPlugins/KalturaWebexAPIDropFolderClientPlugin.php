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
require_once(dirname(__FILE__) . "/KalturaDropFolderClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaVendorClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexAPIGroupParticipationType extends KalturaEnumBase
{
	const NO_CLASSIFICATION = 0;
	const OPT_IN = 1;
	const OPT_OUT = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexAPIUsersMatching extends KalturaEnumBase
{
	const DO_NOT_MODIFY = 0;
	const ADD_POSTFIX = 1;
	const REMOVE_POSTFIX = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexAPIIntegrationSetting extends KalturaIntegrationSetting
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $webexCategory = null;

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
	public $enableTranscription = null;

	/**
	 * 
	 *
	 * @var KalturaWebexAPIUsersMatching
	 */
	public $userMatchingMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userPostfix = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexAccountDescription = null;

	/**
	 * 
	 *
	 * @var KalturaWebexAPIGroupParticipationType
	 */
	public $groupParticipationType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $optOutGroupNames = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $optInGroupNames = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $siteUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexAPIDropFolder extends KalturaDropFolder
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $webexAPIVendorIntegrationId = null;

	/**
	 * 
	 *
	 * @var KalturaWebexAPIIntegrationSetting
	 * @readonly
	 */
	public $webexAPIVendorIntegration;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexAPIDropFolderFile extends KalturaDropFolderFile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $recordingId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $urlExpiry = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileExtension = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $meetingId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $recordingStartTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostEmail = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexAPIIntegrationSettingResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaWebexAPIIntegrationSetting
	 * @readonly
	 */
	public $objects;


}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWebexVendorService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
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
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "fetchRegistrationPage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * List KalturaWebexAPIIntegrationSetting objects
	 * 
	 * @param KalturaFilterPager $pager Pager
	 * @return KalturaWebexAPIIntegrationSettingResponse
	 */
	function listAction(KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaWebexAPIIntegrationSettingResponse");
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
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "oauthValidation", $kparams);
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
	function preOauthValidation()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "preOauthValidation", $kparams);
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
	 * @param KalturaWebexAPIIntegrationSetting $integrationSetting 
	 * @return string
	 */
	function submitRegistration($accountId, KalturaWebexAPIIntegrationSetting $integrationSetting)
	{
		$kparams = array();
		$this->client->addParam($kparams, "accountId", $accountId);
		$this->client->addParam($kparams, "integrationSetting", $integrationSetting->toParams());
		$this->client->queueServiceActionCall("webexapidropfolder_webexvendor", "submitRegistration", $kparams);
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
class KalturaWebexAPIDropFolderClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaWebexVendorService
	 */
	public $webexVendor = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->webexVendor = new KalturaWebexVendorService($client);
	}

	/**
	 * @return KalturaWebexAPIDropFolderClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaWebexAPIDropFolderClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'webexVendor' => $this->webexVendor,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'WebexAPIDropFolder';
	}
}

