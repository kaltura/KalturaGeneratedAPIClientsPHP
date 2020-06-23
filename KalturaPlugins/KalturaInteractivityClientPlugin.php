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
require_once(dirname(__FILE__) . "/KalturaFileSyncClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBaseInteractivity extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $entryId = null;

	/**
	 * Interactivity update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaInteractivityDataFieldsFilter extends KalturaObjectBase
{
	/**
	 * A string containing CSV list of fields to include
	 *
	 * @var string
	 */
	public $fields = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivityRootFilter extends KalturaInteractivityDataFieldsFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivityNodeFilter extends KalturaInteractivityDataFieldsFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivityInteractionFilter extends KalturaInteractivityDataFieldsFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivityDataFilter extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var KalturaInteractivityRootFilter
	 */
	public $rootFilter;

	/**
	 * 
	 *
	 * @var KalturaInteractivityNodeFilter
	 */
	public $nodeFilter;

	/**
	 * 
	 *
	 * @var KalturaInteractivityInteractionFilter
	 */
	public $interactionFilter;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivity extends KalturaBaseInteractivity
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVolatileInteractivity extends KalturaBaseInteractivity
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivityService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a interactivity object
	 * 
	 * @param string $entryId 
	 * @param KalturaInteractivity $kalturaInteractivity 
	 * @return KalturaInteractivity
	 */
	function add($entryId, KalturaInteractivity $kalturaInteractivity)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "kalturaInteractivity", $kalturaInteractivity->toParams());
		$this->client->queueServiceActionCall("interactivity_interactivity", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaInteractivity");
		return $resultObject;
	}

	/**
	 * Delete a interactivity object by entry id
	 * 
	 * @param string $entryId 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("interactivity_interactivity", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve a interactivity object by entry id
	 * 
	 * @param string $entryId 
	 * @param KalturaInteractivityDataFilter $dataFilter 
	 * @return KalturaInteractivity
	 */
	function get($entryId, KalturaInteractivityDataFilter $dataFilter = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		if ($dataFilter !== null)
			$this->client->addParam($kparams, "dataFilter", $dataFilter->toParams());
		$this->client->queueServiceActionCall("interactivity_interactivity", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaInteractivity");
		return $resultObject;
	}

	/**
	 * Update an existing interactivity object
	 * 
	 * @param string $entryId 
	 * @param int $version 
	 * @param KalturaInteractivity $kalturaInteractivity 
	 * @return KalturaInteractivity
	 */
	function update($entryId, $version, KalturaInteractivity $kalturaInteractivity)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->addParam($kparams, "kalturaInteractivity", $kalturaInteractivity->toParams());
		$this->client->queueServiceActionCall("interactivity_interactivity", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaInteractivity");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVolatileInteractivityService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a volatile interactivity object
	 * 
	 * @param string $entryId 
	 * @param KalturaVolatileInteractivity $kalturaVolatileInteractivity 
	 * @return KalturaVolatileInteractivity
	 */
	function add($entryId, KalturaVolatileInteractivity $kalturaVolatileInteractivity)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "kalturaVolatileInteractivity", $kalturaVolatileInteractivity->toParams());
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVolatileInteractivity");
		return $resultObject;
	}

	/**
	 * Delete a volatile interactivity object by entry id
	 * 
	 * @param string $entryId 
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Retrieve a volatile interactivity object by entry id
	 * 
	 * @param string $entryId 
	 * @return KalturaVolatileInteractivity
	 */
	function get($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVolatileInteractivity");
		return $resultObject;
	}

	/**
	 * Update a volatile interactivity object
	 * 
	 * @param string $entryId 
	 * @param int $version 
	 * @param KalturaVolatileInteractivity $kalturaVolatileInteractivity 
	 * @return KalturaVolatileInteractivity
	 */
	function update($entryId, $version, KalturaVolatileInteractivity $kalturaVolatileInteractivity)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->addParam($kparams, "kalturaVolatileInteractivity", $kalturaVolatileInteractivity->toParams());
		$this->client->queueServiceActionCall("interactivity_volatileinteractivity", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaVolatileInteractivity");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInteractivityClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaInteractivityService
	 */
	public $interactivity = null;

	/**
	 * @var KalturaVolatileInteractivityService
	 */
	public $volatileInteractivity = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->interactivity = new KalturaInteractivityService($client);
		$this->volatileInteractivity = new KalturaVolatileInteractivityService($client);
	}

	/**
	 * @return KalturaInteractivityClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaInteractivityClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'interactivity' => $this->interactivity,
			'volatileInteractivity' => $this->volatileInteractivity,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'interactivity';
	}
}

