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
class KalturaSipSourceType extends KalturaEnumBase
{
	const PICTURE_IN_PICTURE = 1;
	const TALKING_HEADS = 2;
	const SCREEN_SHARE = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSipServerNodeOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const HEARTBEAT_TIME_ASC = "+heartbeatTime";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const HEARTBEAT_TIME_DESC = "-heartbeatTime";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSipEntryServerNode extends KalturaEntryServerNode
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $sipRoomId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $sipPrimaryAdpId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $sipSecondaryAdpId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSipServerNode extends KalturaServerNode
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaSipEntryServerNodeBaseFilter extends KalturaEntryServerNodeFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaSipServerNodeBaseFilter extends KalturaServerNodeFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSipEntryServerNodeFilter extends KalturaSipEntryServerNodeBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSipServerNodeFilter extends KalturaSipServerNodeBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPexipService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @param bool $regenerate 
	 * @param int $sourceType 
	 * @return string
	 */
	function generateSipUrl($entryId, $regenerate = false, $sourceType = 1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "regenerate", $regenerate);
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("sip_pexip", "generateSipUrl", $kparams);
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
	function handleIncomingCall()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("sip_pexip", "handleIncomingCall", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * 
	 * 
	 * @param int $offset 
	 * @param int $pageSize 
	 * @param bool $activeOnly 
	 * @return array
	 */
	function listRooms($offset = 0, $pageSize = 500, $activeOnly = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "offset", $offset);
		$this->client->addParam($kparams, "pageSize", $pageSize);
		$this->client->addParam($kparams, "activeOnly", $activeOnly);
		$this->client->queueServiceActionCall("sip_pexip", "listRooms", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSipClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaPexipService
	 */
	public $pexip = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->pexip = new KalturaPexipService($client);
	}

	/**
	 * @return KalturaSipClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaSipClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'pexip' => $this->pexip,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'sip';
	}
}

