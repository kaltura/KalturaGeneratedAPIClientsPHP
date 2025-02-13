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
class KalturaSharepointExtensionService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Is this Kaltura-Sharepoint-Server-Plugin supports minimum version of $major.$minor.$build (which is required by the extension)
	 * 
	 * @param int $serverMajor 
	 * @param int $serverMinor 
	 * @param int $serverBuild 
	 * @return bool
	 */
	function isVersionSupported($serverMajor, $serverMinor, $serverBuild)
	{
		$kparams = array();
		$this->client->addParam($kparams, "serverMajor", $serverMajor);
		$this->client->addParam($kparams, "serverMinor", $serverMinor);
		$this->client->addParam($kparams, "serverBuild", $serverBuild);
		$this->client->queueServiceActionCall("kalturasharepointextension_sharepointextension", "isVersionSupported", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * List uiconfs for sharepoint extension
	 * 
	 * @return KalturaUiConfListResponse
	 */
	function listUiconfs()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("kalturasharepointextension_sharepointextension", "listUiconfs", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUiConfListResponse");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaKalturaSharepointExtensionClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaSharepointExtensionService
	 */
	public $sharepointExtension = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->sharepointExtension = new KalturaSharepointExtensionService($client);
	}

	/**
	 * @return KalturaKalturaSharepointExtensionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaKalturaSharepointExtensionClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'sharepointExtension' => $this->sharepointExtension,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'KalturaSharepointExtension';
	}
}

