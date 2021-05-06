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
class KalturaFtpDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaFtpDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpScheduledDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionFile extends KalturaObjectBase
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
	public $filename = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contents = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $localFilePath = null;

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
	public $hash = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var array of KalturaFtpDistributionFile
	 */
	public $filesForDistribution;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var KalturaDistributionProtocol
	 * @insertonly
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $host = null;

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
	public $basePath = null;

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
	public $passphrase = null;

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
	 * @var bool
	 */
	public $disableMetadata = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataFilenameXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetFilenameXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailAssetFilenameXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetFilenameXslt = null;

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

	/**
	 * 
	 *
	 * @var bool
	 */
	public $sendMetadataAfterAssets = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpScheduledDistributionProvider extends KalturaFtpDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFtpDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionProviderFilter extends KalturaFtpDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFtpDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFtpScheduledDistributionProviderBaseFilter extends KalturaFtpDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionProfileFilter extends KalturaFtpDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpScheduledDistributionProviderFilter extends KalturaFtpScheduledDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFtpDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaFtpDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaFtpDistributionClientPlugin($client);
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
		return 'ftpDistribution';
	}
}

