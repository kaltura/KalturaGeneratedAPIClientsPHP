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
class KalturaRatingCountOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRatingCount extends KalturaObjectBase
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
	 * @var int
	 */
	public $rank = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $count = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRatingCountListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaRatingCount
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaRatingCountBaseFilter extends KalturaRelatedFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rankIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRatingCountFilter extends KalturaRatingCountBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRatingService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @return int
	 */
	function checkRating($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("rating_rating", "checkRating", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaRatingCountFilter $filter 
	 * @return KalturaRatingCountListResponse
	 */
	function getRatingCounts(KalturaRatingCountFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("rating_rating", "getRatingCounts", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRatingCountListResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @param int $rank 
	 * @return int
	 */
	function rate($entryId, $rank)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "rank", $rank);
		$this->client->queueServiceActionCall("rating_rating", "rate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $entryId 
	 * @return bool
	 */
	function removeRating($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("rating_rating", "removeRating", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRatingClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaRatingService
	 */
	public $rating = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->rating = new KalturaRatingService($client);
	}

	/**
	 * @return KalturaRatingClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaRatingClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'rating' => $this->rating,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'rating';
	}
}

