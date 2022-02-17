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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class KalturaESearchHistory extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $searchedObject = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $timestamp = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchHistoryFilter extends KalturaESearchBaseFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTermStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $searchedObjectIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaESearchHistoryListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaESearchHistory
	 * @readonly
	 */
	public $objects;


}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSearchHistoryService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param string $searchTerm 
	 */
	function delete($searchTerm)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchTerm", $searchTerm);
		$this->client->queueServiceActionCall("searchhistory_searchhistory", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * 
	 * 
	 * @param KalturaESearchHistoryFilter $filter 
	 * @return KalturaESearchHistoryListResponse
	 */
	function listAction(KalturaESearchHistoryFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("searchhistory_searchhistory", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaESearchHistoryListResponse");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSearchHistoryClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaSearchHistoryService
	 */
	public $searchHistory = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->searchHistory = new KalturaSearchHistoryService($client);
	}

	/**
	 * @return KalturaSearchHistoryClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaSearchHistoryClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'searchHistory' => $this->searchHistory,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'searchHistory';
	}
}

