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
require_once(dirname(__FILE__) . "/KalturaBulkUploadCsvClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaScheduleClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadResultScheduleEvent extends KalturaBulkUploadResult
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $eventType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIds = null;

	/**
	 * ID of the resource specified for the new event.
	 *
	 * @var string
	 */
	public $resourceId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recurrence = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $coEditors = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $coPublishers = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $eventOrganizerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentOwnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadResultScheduleResource extends KalturaBulkUploadResult
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentSystemName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaBulkUploadScheduleEventJobData extends KalturaBulkUploadJobData
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadICalJobData extends KalturaBulkUploadScheduleEventJobData
{
	/**
	 * The type of the events that ill be created by this upload
	 *
	 * @var KalturaScheduleEventType
	 */
	public $eventsType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBulkUploadScheduleEventCsvJobData extends KalturaBulkUploadScheduleEventJobData
{
	/**
	 * The version of the csv file
	 *
	 * @var KalturaBulkUploadCsvVersion
	 * @readonly
	 */
	public $csvVersion = null;

	/**
	 * Array containing CSV headers
	 *
	 * @var array of KalturaString
	 */
	public $columns;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaScheduleBulkUploadClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaScheduleBulkUploadClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaScheduleBulkUploadClientPlugin($client);
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
		return 'scheduleBulkUpload';
	}
}

