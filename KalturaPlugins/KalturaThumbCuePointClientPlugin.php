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
// Copyright (C) 2006-2015  Kaltura Inc.
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
require_once(dirname(__FILE__) . "/KalturaCuePointClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaThumbCuePointOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const START_TIME_ASC = "+startTime";
	const TRIGGERED_AT_ASC = "+triggeredAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
	const START_TIME_DESC = "-startTime";
	const TRIGGERED_AT_DESC = "-triggeredAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTimedThumbAssetOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const DELETED_AT_ASC = "+deletedAt";
	const SIZE_ASC = "+size";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const DELETED_AT_DESC = "-deletedAt";
	const SIZE_DESC = "-size";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaThumbCuePoint extends KalturaCuePoint
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

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
	public $title = null;

	/**
	 * The sub type of the ThumbCuePoint
	 * 	 
	 *
	 * @var KalturaThumbCuePointSubType
	 */
	public $subType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTimedThumbAsset extends KalturaThumbAsset
{
	/**
	 * Associated thumb cue point ID
	 * 	 
	 *
	 * @var string
	 * @insertonly
	 */
	public $cuePointId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaThumbCuePointBaseFilter extends KalturaCuePointFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $titleLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $titleMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $titleMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var KalturaThumbCuePointSubType
	 */
	public $subTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subTypeIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaThumbCuePointFilter extends KalturaThumbCuePointBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaTimedThumbAssetBaseFilter extends KalturaThumbAssetFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTimedThumbAssetFilter extends KalturaTimedThumbAssetBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaThumbCuePointClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaThumbCuePointClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaThumbCuePointClientPlugin($client);
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
		return 'thumbCuePoint';
	}
}

