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
class KalturaSystemPartnerUsageItem extends KalturaObjectBase
{
	/**
	 * Partner ID
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Partner name
	 *
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * Partner status
	 *
	 * @var KalturaPartnerStatus
	 */
	public $partnerStatus = null;

	/**
	 * Partner package
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * Partner creation date (Unix timestamp)
	 *
	 * @var int
	 */
	public $partnerCreatedAt = null;

	/**
	 * Number of player loads in the specific date range
	 *
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of plays in the specific date range
	 *
	 * @var int
	 */
	public $plays = null;

	/**
	 * Number of new entries created during specific date range
	 *
	 * @var int
	 */
	public $entriesCount = null;

	/**
	 * Total number of entries
	 *
	 * @var int
	 */
	public $totalEntriesCount = null;

	/**
	 * Number of new video entries created during specific date range
	 *
	 * @var int
	 */
	public $videoEntriesCount = null;

	/**
	 * Number of new image entries created during specific date range
	 *
	 * @var int
	 */
	public $imageEntriesCount = null;

	/**
	 * Number of new audio entries created during specific date range
	 *
	 * @var int
	 */
	public $audioEntriesCount = null;

	/**
	 * Number of new mix entries created during specific date range
	 *
	 * @var int
	 */
	public $mixEntriesCount = null;

	/**
	 * The total bandwidth usage during the given date range (in MB)
	 *
	 * @var float
	 */
	public $bandwidth = null;

	/**
	 * The total storage consumption (in MB)
	 *
	 * @var float
	 */
	public $totalStorage = null;

	/**
	 * The change in storage consumption (new uploads) during the given date range (in MB)
	 *
	 * @var float
	 */
	public $storage = null;

	/**
	 * The peak amount of storage consumption during the given date range for the specific publisher
	 *
	 * @var float
	 */
	public $peakStorage = null;

	/**
	 * The average amount of storage consumption during the given date range for the specific publisher
	 *
	 * @var float
	 */
	public $avgStorage = null;

	/**
	 * The combined amount of bandwidth and storage consumed during the given date range for the specific publisher
	 *
	 * @var float
	 */
	public $combinedBandwidthStorage = null;

	/**
	 * Amount of deleted storage in MB
	 *
	 * @var float
	 */
	public $deletedStorage = null;

	/**
	 * Amount of transcoding usage in MB
	 *
	 * @var float
	 */
	public $transcodingUsage = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSystemPartnerUsageFilter extends KalturaFilter
{
	/**
	 * Date range from
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * Date range to
	 *
	 * @var int
	 */
	public $toDate = null;

	/**
	 * Time zone offset
	 *
	 * @var int
	 */
	public $timezoneOffset = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSystemPartnerUsageListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaSystemPartnerUsageItem
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSystemPartnerFilter extends KalturaPartnerFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerParentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerParentIdIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSystemPartnerClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaSystemPartnerClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaSystemPartnerClientPlugin($client);
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
		return 'systemPartner';
	}
}

