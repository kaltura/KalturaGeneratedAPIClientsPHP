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
class KalturaSsoStatus extends KalturaEnumBase
{
	const DISABLED = 1;
	const ACTIVE = 2;
	const DELETED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSso extends KalturaObjectBase
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
	 * @var string
	 */
	public $applicationType = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $domain = null;

	/**
	 * 
	 *
	 * @var KalturaSsoStatus
	 */
	public $status = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Redirect URL for a specific application type and (partner id or domain)
	 *
	 * @var string
	 */
	public $redirectUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSsoListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaSso
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaSsoBaseFilter extends KalturaRelatedFilter
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
	public $applicationTypeEqual = null;

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
	public $domainEqual = null;

	/**
	 * 
	 *
	 * @var KalturaSsoStatus
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
	 * @var string
	 */
	public $redirectUrlEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSsoFilter extends KalturaSsoBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSsoService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new sso configuration.
	 * 
	 * @param KalturaSso $sso A new sso configuration
	 * @return KalturaSso
	 */
	function add(KalturaSso $sso)
	{
		$kparams = array();
		$this->client->addParam($kparams, "sso", $sso->toParams());
		$this->client->queueServiceActionCall("sso_sso", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSso");
		return $resultObject;
	}

	/**
	 * Delete sso by ID
	 * 
	 * @param int $ssoId The unique identifier in the sso's object
	 * @return KalturaSso
	 */
	function delete($ssoId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoId", $ssoId);
		$this->client->queueServiceActionCall("sso_sso", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSso");
		return $resultObject;
	}

	/**
	 * Retrieves sso object
	 * 
	 * @param int $ssoId The unique identifier in the sso's object
	 * @return KalturaSso
	 */
	function get($ssoId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoId", $ssoId);
		$this->client->queueServiceActionCall("sso_sso", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSso");
		return $resultObject;
	}

	/**
	 * Lists sso objects that are associated with an account.
	 * 
	 * @param KalturaSsoFilter $filter 
	 * @param KalturaFilterPager $pager A limit for the number of records to display on a page
	 * @return KalturaSsoListResponse
	 */
	function listAction(KalturaSsoFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("sso_sso", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSsoListResponse");
		return $resultObject;
	}

	/**
	 * Login with SSO, getting redirect url according to application type and partner Id
	 or according to application type and domain
	 * 
	 * @param string $userId 
	 * @param string $applicationType 
	 * @param int $partnerId 
	 * @return string
	 */
	function login($userId, $applicationType, $partnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "applicationType", $applicationType);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("sso_sso", "login", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Update sso by ID
	 * 
	 * @param int $ssoId The unique identifier in the sso's object
	 * @param KalturaSso $sso Id The unique identifier in the sso's object
	 * @return KalturaSso
	 */
	function update($ssoId, KalturaSso $sso)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoId", $ssoId);
		$this->client->addParam($kparams, "sso", $sso->toParams());
		$this->client->queueServiceActionCall("sso_sso", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSso");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSsoClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaSsoService
	 */
	public $sso = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->sso = new KalturaSsoService($client);
	}

	/**
	 * @return KalturaSsoClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaSsoClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'sso' => $this->sso,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'sso';
	}
}

