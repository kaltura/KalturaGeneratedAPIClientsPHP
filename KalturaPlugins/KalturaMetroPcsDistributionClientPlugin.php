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
class KalturaMetroPcsDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaMetroPcsDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMetroPcsDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMetroPcsDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $assetLocalPaths = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbUrls = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMetroPcsDistributionProfile extends KalturaConfigurableDistributionProfile
{
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
	public $ftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPass = null;

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
	public $providerName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $copyright = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitlements = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rating = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaMetroPcsDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMetroPcsDistributionProviderFilter extends KalturaMetroPcsDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaMetroPcsDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMetroPcsDistributionProfileFilter extends KalturaMetroPcsDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMetroPcsDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaMetroPcsDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaMetroPcsDistributionClientPlugin($client);
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
		return 'metroPcsDistribution';
	}
}

