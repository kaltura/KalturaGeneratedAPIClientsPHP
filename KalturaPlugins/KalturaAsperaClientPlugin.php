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
class KalturaAsperaService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param string $flavorAssetId 
	 * @return string
	 */
	function getFaspUrl($flavorAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "flavorAssetId", $flavorAssetId);
		$this->client->queueServiceActionCall("aspera_aspera", "getFaspUrl", $kparams);
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
class KalturaAsperaClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaAsperaService
	 */
	public $aspera = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->aspera = new KalturaAsperaService($client);
	}

	/**
	 * @return KalturaAsperaClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaAsperaClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'aspera' => $this->aspera,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'aspera';
	}
}

