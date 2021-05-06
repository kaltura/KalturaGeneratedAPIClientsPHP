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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class KalturaFreewheelDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaFreewheelDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionAssetPath extends KalturaDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $path = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionJobProviderData extends KalturaDistributionJobProviderData
{
	/**
	 * Demonstrate passing array of paths to the job
	 *
	 * @var array of KalturaFreewheelDistributionAssetPath
	 */
	public $videoAssetFilePaths;

	/**
	 * Demonstrate passing single path to the job
	 *
	 * @var string
	 */
	public $thumbAssetFilePath = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionProfile extends KalturaDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $apikey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accountId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFreewheelDistributionProfileBaseFilter extends KalturaDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFreewheelDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionProfileFilter extends KalturaFreewheelDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionProviderFilter extends KalturaFreewheelDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFreewheelDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaFreewheelDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaFreewheelDistributionClientPlugin($client);
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
		return 'freewheelDistribution';
	}
}

