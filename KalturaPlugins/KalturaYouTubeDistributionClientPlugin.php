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
class KalturaYouTubeDistributionFeedSpecVersion extends KalturaEnumBase
{
	const VERSION_1 = "1";
	const VERSION_2 = "2";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaYouTubeDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
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
	 * @var string
	 */
	public $captionAssetIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpDirectory = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpMetadataFilename = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $currentPlaylists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $newPlaylists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $submitXml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateXml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deleteXml = null;

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


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var KalturaYouTubeDistributionFeedSpecVersion
	 */
	public $feedSpecVersion = null;

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
	public $notificationEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpHost = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sftpPort = null;

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
	public $sftpPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPrivateKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpBaseDir = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerName = null;

	/**
	 * 
	 *
	 * @var string
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
	public $commercialPolicy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ugcPolicy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $target = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adServerPartnerId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enableAdServer = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowPreRollAds = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowPostRollAds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $strict = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $overrideManualEdits = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $urgentReference = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowSyndication = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hideViewCount = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowAdsenseForVideo = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowInvideo = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowMidRollAds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $instreamStandard = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $instreamTrueview = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $claimType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $blockOutsideOwnership = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAutosync = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $deleteReference = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $releaseClaims = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $apiAuthorizeUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaYouTubeDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionProviderFilter extends KalturaYouTubeDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaYouTubeDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionProfileFilter extends KalturaYouTubeDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaYouTubeDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaYouTubeDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaYouTubeDistributionClientPlugin($client);
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
		return 'youTubeDistribution';
	}
}

