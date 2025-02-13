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
require_once(dirname(__FILE__) . "/KalturaDropFolderClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaVendorClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomMeetingMetadata extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $uuid = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $meetingId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accountId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $topic = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $meetingStartTime = null;

	/**
	 * 
	 *
	 * @var KalturaRecordingType
	 */
	public $type = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomRecordingFile extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recordingStart = null;

	/**
	 * 
	 *
	 * @var KalturaRecordingFileType
	 */
	public $fileType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $downloadUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileExtension = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $downloadToken = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomDropFolder extends KalturaDropFolder
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $zoomVendorIntegrationId = null;

	/**
	 * 
	 *
	 * @var KalturaZoomIntegrationSetting
	 * @readonly
	 */
	public $zoomVendorIntegration;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastHandledMeetingTime = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomDropFolderFile extends KalturaDropFolderFile
{
	/**
	 * 
	 *
	 * @var KalturaZoomMeetingMetadata
	 */
	public $meetingMetadata;

	/**
	 * 
	 *
	 * @var KalturaZoomRecordingFile
	 */
	public $recordingFile;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentEntryId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isParentEntry = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaZoomDropFolderBaseFilter extends KalturaDropFolderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomDropFolderFilter extends KalturaZoomDropFolderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaZoomDropFolderClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaZoomDropFolderClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaZoomDropFolderClientPlugin($client);
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
		return 'ZoomDropFolder';
	}
}

