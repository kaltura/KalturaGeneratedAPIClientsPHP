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
class KalturaYouTubeApiDistributionCaptionAction extends KalturaEnumBase
{
	const UPDATE_ACTION = 1;
	const SUBMIT_ACTION = 2;
	const DELETE_ACTION = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaYoutubeApiDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeApiCaptionDistributionInfo extends KalturaObjectBase
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
	public $encryptionKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 *
	 * @var KalturaYouTubeApiDistributionCaptionAction
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


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
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
	 * @var array of KalturaYouTubeApiCaptionDistributionInfo
	 */
	public $captionsInfo;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defaultCategory = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowComments = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowEmbedding = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowRatings = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowResponses = null;

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
	public $googleClientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $googleClientSecret = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $googleTokenData = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $assumeSuccess = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyStatus = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaYoutubeApiDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionProviderFilter extends KalturaYoutubeApiDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaYoutubeApiDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionProfileFilter extends KalturaYoutubeApiDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYoutubeApiDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaYoutubeApiDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaYoutubeApiDistributionClientPlugin($client);
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
		return 'youtubeApiDistribution';
	}
}

