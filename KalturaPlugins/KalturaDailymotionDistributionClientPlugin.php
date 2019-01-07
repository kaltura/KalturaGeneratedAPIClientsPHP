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
require_once(dirname(__FILE__) . "/KalturaContentDistributionClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionCaptionAction extends KalturaEnumBase
{
	const UPDATE_ACTION = 1;
	const SUBMIT_ACTION = 2;
	const DELETE_ACTION = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionCaptionFormat extends KalturaEnumBase
{
	const SRT = 1;
	const STL = 2;
	const TT = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionGeoBlockingMapping extends KalturaEnumBase
{
	const DISABLED = 0;
	const ACCESS_CONTROL = 1;
	const METADATA = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionProfileOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionCaptionInfo extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $filePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 *
	 * @var KalturaDailymotionDistributionCaptionAction
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 *
	 * @var KalturaDailymotionDistributionCaptionFormat
	 */
	public $format = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $videoAssetFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accessControlGeoBlockingOperation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accessControlGeoBlockingCountryList = null;

	/**
	 * 
	 *
	 * @var array of KalturaDailymotionDistributionCaptionInfo
	 */
	public $captionsInfo;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $user = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var KalturaDailymotionGeoBlockingMapping
	 */
	public $geoBlockingMapping = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaDailymotionDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionProviderFilter extends KalturaDailymotionDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaDailymotionDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionProfileFilter extends KalturaDailymotionDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDailymotionDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaDailymotionDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaDailymotionDistributionClientPlugin($client);
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
		return 'dailymotionDistribution';
	}
}

