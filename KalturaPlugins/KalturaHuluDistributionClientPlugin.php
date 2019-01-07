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
require_once(dirname(__FILE__) . "/KalturaCuePointClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaHuluDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
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
	 * @var array of KalturaCuePoint
	 */
	public $cuePoints;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileBaseName = null;

	/**
	 * 
	 *
	 * @var array of KalturaString
	 */
	public $captionLocalPaths;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpHost = null;

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
	public $sftpPass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seriesChannel = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seriesPrimaryCategory = null;

	/**
	 * 
	 *
	 * @var array of KalturaString
	 */
	public $seriesAdditionalCategories;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seasonNumber = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seasonSynopsis = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seasonTuneInInformation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $videoMediaType = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $disableEpisodeNumberCustomValidation = null;

	/**
	 * 
	 *
	 * @var KalturaDistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaPass = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $passphrase = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaPrivateKey = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaHuluDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionProviderFilter extends KalturaHuluDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaHuluDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionProfileFilter extends KalturaHuluDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHuluDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaHuluDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaHuluDistributionClientPlugin($client);
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
		return 'huluDistribution';
	}
}

