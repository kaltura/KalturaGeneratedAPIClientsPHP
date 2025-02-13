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
class KalturaGameObjectType extends KalturaEnumBase
{
	const LEADERBOARD = "1";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserScoreProperties extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $rank = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $score = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserScorePropertiesResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaUserScoreProperties
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaUserScorePropertiesBaseFilter extends KalturaRelatedFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserScorePropertiesFilter extends KalturaUserScorePropertiesBaseFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $gameObjectId = null;

	/**
	 * 
	 *
	 * @var KalturaGameObjectType
	 */
	public $gameObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $placesAboveUser = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $placesBelowUser = null;


}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserScoreService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param string $gameObjectId 
	 * @param string $gameObjectType 
	 * @param string $userId 
	 * @return KalturaUserScorePropertiesResponse
	 */
	function delete($gameObjectId, $gameObjectType, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "gameObjectId", $gameObjectId);
		$this->client->addParam($kparams, "gameObjectType", $gameObjectType);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("game_userscore", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserScorePropertiesResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param KalturaUserScorePropertiesFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaUserScorePropertiesResponse
	 */
	function listAction(KalturaUserScorePropertiesFilter $filter, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("game_userscore", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserScorePropertiesResponse");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $gameObjectId 
	 * @param string $gameObjectType 
	 * @param string $userId 
	 * @param int $score 
	 * @return KalturaUserScorePropertiesResponse
	 */
	function update($gameObjectId, $gameObjectType, $userId, $score)
	{
		$kparams = array();
		$this->client->addParam($kparams, "gameObjectId", $gameObjectId);
		$this->client->addParam($kparams, "gameObjectType", $gameObjectType);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "score", $score);
		$this->client->queueServiceActionCall("game_userscore", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserScorePropertiesResponse");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaGameClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaUserScoreService
	 */
	public $userScore = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->userScore = new KalturaUserScoreService($client);
	}

	/**
	 * @return KalturaGameClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaGameClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'userScore' => $this->userScore,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'game';
	}
}

