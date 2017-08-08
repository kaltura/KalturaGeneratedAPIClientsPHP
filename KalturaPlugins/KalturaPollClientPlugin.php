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
// Copyright (C) 2006-2017  Kaltura Inc.
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
class KalturaPollService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add Action
	 * 
	 * @param string $pollType 
	 * @return string
	 */
	function add($pollType = "SINGLE_ANONYMOUS")
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollType", $pollType);
		$this->client->queueServiceActionCall("poll_poll", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Vote Action
	 * 
	 * @param string $pollId 
	 * @param string $userId 
	 * @return string
	 */
	function getVote($pollId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("poll_poll", "getVote", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Get Votes Action
	 * 
	 * @param string $pollId 
	 * @param string $answerIds 
	 * @return string
	 */
	function getVotes($pollId, $answerIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->addParam($kparams, "answerIds", $answerIds);
		$this->client->queueServiceActionCall("poll_poll", "getVotes", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Get resetVotes Action
	 * 
	 * @param string $pollId 
	 */
	function resetVotes($pollId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->queueServiceActionCall("poll_poll", "resetVotes", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Vote Action
	 * 
	 * @param string $pollId 
	 * @param string $userId 
	 * @param string $answerIds 
	 * @return string
	 */
	function vote($pollId, $userId, $answerIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pollId", $pollId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "answerIds", $answerIds);
		$this->client->queueServiceActionCall("poll_poll", "vote", $kparams);
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
class KalturaPollClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaPollService
	 */
	public $poll = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->poll = new KalturaPollService($client);
	}

	/**
	 * @return KalturaPollClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaPollClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'poll' => $this->poll,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'poll';
	}
}

