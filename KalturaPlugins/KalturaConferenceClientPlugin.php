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
class KalturaConferenceRoomStatus extends KalturaEnumBase
{
	const CREATED = 1;
	const READY = 2;
	const ENDED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConferenceServerNodeOrderBy extends KalturaEnumBase
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
class KalturaRoomDetails extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUrl = null;

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
	public $token = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConferenceEntryServerNode extends KalturaEntryServerNode
{
	/**
	 * 
	 *
	 * @var KalturaConferenceRoomStatus
	 * @readonly
	 */
	public $confRoomStatus = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $registered = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConferenceServerNode extends KalturaServerNode
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceBaseUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaConferenceEntryServerNodeBaseFilter extends KalturaEntryServerNodeFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaConferenceServerNodeBaseFilter extends KalturaServerNodeFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConferenceEntryServerNodeFilter extends KalturaConferenceEntryServerNodeBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConferenceServerNodeFilter extends KalturaConferenceServerNodeBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConferenceClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaConferenceClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaConferenceClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'conference';
	}
}

