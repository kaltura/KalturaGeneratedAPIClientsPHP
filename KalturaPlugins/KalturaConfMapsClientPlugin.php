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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class KalturaConfMapsStatus extends KalturaEnumBase
{
	const STATUS_DISABLED = 0;
	const STATUS_ENABLED = 1;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConfMaps extends KalturaObjectBase
{
	/**
	 * Name of the map
	 *
	 * @var string
	 * @insertonly
	 */
	public $name = null;

	/**
	 * Ini file content
	 *
	 * @var string
	 */
	public $content = null;

	/**
	 * IsEditable - true / false
	 *
	 * @var bool
	 * @readonly
	 */
	public $isEditable = null;

	/**
	 * Time of the last update
	 *
	 * @var int
	 * @readonly
	 */
	public $lastUpdate = null;

	/**
	 * Regex that represent the host/s that this map affect
	 *
	 * @var string
	 */
	public $relatedHost = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var KalturaConfMapsSourceLocation
	 * @insertonly
	 */
	public $sourceLocation = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $remarks = null;

	/**
	 * map status
	 *
	 * @var KalturaConfMapsStatus
	 */
	public $status = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConfMapsListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaConfMaps
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaConfMapsBaseFilter extends KalturaRelatedFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedHostEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConfMapsFilter extends KalturaConfMapsBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConfMapsClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaConfMapsClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaConfMapsClientPlugin($client);
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
		return 'confMaps';
	}
}

