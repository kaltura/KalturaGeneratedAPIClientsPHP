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
class KalturaFacebookDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaFacebookDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookCaptionDistributionInfo extends KalturaObjectBase
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
	public $label = null;

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
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
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
	public $thumbAssetFilePath = null;

	/**
	 * 
	 *
	 * @var array of KalturaFacebookCaptionDistributionInfo
	 */
	public $captionsInfo;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $apiAuthorizeUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pageId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pageAccessToken = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userAccessToken = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissions = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $reRequestPermissions = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFacebookDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookDistributionProviderFilter extends KalturaFacebookDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFacebookDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookDistributionProfileFilter extends KalturaFacebookDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFacebookDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaFacebookDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaFacebookDistributionClientPlugin($client);
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
		return 'facebookDistribution';
	}
}

