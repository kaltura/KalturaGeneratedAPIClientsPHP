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
class KalturaUserEntryPermissionLevel extends KalturaEnumBase
{
	const SPEAKER = 1;
	const ROOM_MODERATOR = 2;
	const ATTENDEE = 3;
	const ADMIN = 4;
	const PREVIEW_ONLY = 5;
	const CHAT_MODERATOR = 6;
	const PANELIST = 7;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPermissionLevel extends KalturaObjectBase
{
	/**
	 * Permission Level
	 *
	 * @var KalturaUserEntryPermissionLevel
	 */
	public $permissionLevel = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPermissionLevelUserEntry extends KalturaUserEntry
{
	/**
	 * Playback context
	 *
	 * @var array of KalturaPermissionLevel
	 */
	public $permissionLevels;

	/**
	 * 
	 *
	 * @var int
	 */
	public $permissionOrder = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPermissionLevelUserEntryFilter extends KalturaUserEntryFilter
{
	/**
	 * 
	 *
	 * @var array of KalturaPermissionLevel
	 */
	public $permissionLevels;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryPermissionLevelClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaEntryPermissionLevelClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaEntryPermissionLevelClientPlugin($client);
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
		return 'entryPermissionLevel';
	}
}

