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
class KalturaUnicornDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaUnicornDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * The Catalog GUID the video is in or will be ingested into.
	 *
	 * @var string
	 */
	public $catalogGuid = null;

	/**
	 * The Title assigned to the video. The Foreign Key will be used if no title is provided.
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * Indicates that the media content changed and therefore the job should wait for HTTP callback notification to be closed.
	 *
	 * @var bool
	 */
	public $mediaChanged = null;

	/**
	 * Flavor asset version.
	 *
	 * @var string
	 */
	public $flavorAssetVersion = null;

	/**
	 * The schema and host name to the Kaltura server, e.g. http://www.kaltura.com
	 *
	 * @var string
	 */
	public $notificationBaseUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * The email address associated with the Upload User, used to authorize the incoming request.
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * The password used in association with the email to determine if the Upload User is authorized the incoming request.
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * The name of the Domain that the Upload User should have access to, Used for authentication.
	 *
	 * @var string
	 */
	public $domainName = null;

	/**
	 * The Channel GUID assigned to this Publication Rule. Must be a valid Channel in the Domain that was used in authentication.
	 *
	 * @var string
	 */
	public $channelGuid = null;

	/**
	 * The API host URL that the Upload User should have access to, Used for HTTP content submission.
	 *
	 * @var string
	 */
	public $apiHostUrl = null;

	/**
	 * The GUID of the Customer Domain in the Unicorn system obtained by contacting your Unicorn representative.
	 *
	 * @var string
	 */
	public $domainGuid = null;

	/**
	 * The GUID for the application in which to record metrics and enforce business rules obtained through your Unicorn representative.
	 *
	 * @var string
	 */
	public $adFreeApplicationGuid = null;

	/**
	 * The flavor-params that will be used for the remote asset.
	 *
	 * @var int
	 */
	public $remoteAssetParamsId = null;

	/**
	 * The remote storage that should be used for the remote asset.
	 *
	 * @var string
	 */
	public $storageProfileId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaUnicornDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornDistributionProviderFilter extends KalturaUnicornDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaUnicornDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornDistributionProfileFilter extends KalturaUnicornDistributionProfileBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * 
	 * 
	 * @param int $id Distribution job id
	 */
	function notify($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("unicorndistribution_unicorn", "notify", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUnicornDistributionClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaUnicornService
	 */
	public $unicorn = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->unicorn = new KalturaUnicornService($client);
	}

	/**
	 * @return KalturaUnicornDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaUnicornDistributionClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'unicorn' => $this->unicorn,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'unicornDistribution';
	}
}

