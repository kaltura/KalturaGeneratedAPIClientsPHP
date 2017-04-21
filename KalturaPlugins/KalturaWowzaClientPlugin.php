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
class KalturaWowzaMediaServerNodeOrderBy extends KalturaEnumBase
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
class KalturaWowzaMediaServerNode extends KalturaMediaServerNode
{
	/**
	 * Wowza Media server app prefix
	 *
	 * @var string
	 */
	public $appPrefix = null;

	/**
	 * Wowza Media server transcoder configuration overide
	 *
	 * @var string
	 */
	public $transcoder = null;

	/**
	 * Wowza Media server GPU index id
	 *
	 * @var int
	 */
	public $GPUID = null;

	/**
	 * Live service port
	 *
	 * @var int
	 */
	public $liveServicePort = null;

	/**
	 * Live service protocol
	 *
	 * @var string
	 */
	public $liveServiceProtocol = null;

	/**
	 * Wowza media server live service internal domain
	 *
	 * @var string
	 */
	public $liveServiceInternalDomain = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaWowzaMediaServerNodeBaseFilter extends KalturaMediaServerNodeFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWowzaMediaServerNodeFilter extends KalturaWowzaMediaServerNodeBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaWowzaClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaWowzaClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaWowzaClientPlugin($client);
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
		return 'wowza';
	}
}

