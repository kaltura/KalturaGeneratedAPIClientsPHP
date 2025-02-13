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
require_once(dirname(__FILE__) . "/KalturaElasticSearchClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBumper extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 *
	 * @var array of KalturaPlaybackSource
	 * @readonly
	 */
	public $sources;


}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBumperService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a bumper to an entry
	 * 
	 * @param string $entryId 
	 * @param KalturaBumper $bumper 
	 * @return KalturaBumper
	 */
	function add($entryId, KalturaBumper $bumper)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "bumper", $bumper->toParams());
		$this->client->queueServiceActionCall("bumper_bumper", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBumper");
		return $resultObject;
	}

	/**
	 * Delete bumper by EntryId
	 * 
	 * @param string $entryId 
	 * @return KalturaBumper
	 */
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("bumper_bumper", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBumper");
		return $resultObject;
	}

	/**
	 * Allows to get the bumper
	 * 
	 * @param string $entryId 
	 * @return KalturaBumper
	 */
	function get($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("bumper_bumper", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBumper");
		return $resultObject;
	}

	/**
	 * Allows to update a bumper
	 * 
	 * @param string $entryId 
	 * @param KalturaBumper $bumper 
	 * @return KalturaBumper
	 */
	function update($entryId, KalturaBumper $bumper)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "bumper", $bumper->toParams());
		$this->client->queueServiceActionCall("bumper_bumper", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBumper");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBumperClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaBumperService
	 */
	public $bumper = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->bumper = new KalturaBumperService($client);
	}

	/**
	 * @return KalturaBumperClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaBumperClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'bumper' => $this->bumper,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'bumper';
	}
}

