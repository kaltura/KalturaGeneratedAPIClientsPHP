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
require_once(dirname(__FILE__) . "/KalturaContentDistributionClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaIdeticDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionProfile extends KalturaConfigurableDistributionProfile
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
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $domain = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaIdeticDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionProviderFilter extends KalturaIdeticDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaIdeticDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionProfileFilter extends KalturaIdeticDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaIdeticDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaIdeticDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaIdeticDistributionClientPlugin($client);
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
		return 'ideticDistribution';
	}
}

