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
class KalturaYahooDistributionProcessFeedActionStatus extends KalturaEnumBase
{
	const MANUAL = 0;
	const AUTOMATIC = 1;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaYahooDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $smallThumbPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $largeThumbPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $videoAssetFilePath = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contactTelephone = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contactEmail = null;

	/**
	 * 
	 *
	 * @var KalturaYahooDistributionProcessFeedActionStatus
	 */
	public $processFeed = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaYahooDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionProviderFilter extends KalturaYahooDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaYahooDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionProfileFilter extends KalturaYahooDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYahooDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaYahooDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaYahooDistributionClientPlugin($client);
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
		return 'yahooDistribution';
	}
}

