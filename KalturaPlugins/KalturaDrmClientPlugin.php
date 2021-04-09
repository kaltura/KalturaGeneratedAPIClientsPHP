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

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmLicenseExpirationPolicy extends KalturaEnumBase
{
	const FIXED_DURATION = 1;
	const ENTRY_SCHEDULING_END = 2;
	const UNLIMITED = 3;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmPolicyStatus extends KalturaEnumBase
{
	const ACTIVE = 1;
	const DELETED = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmProfileStatus extends KalturaEnumBase
{
	const ACTIVE = 1;
	const DELETED = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmLicenseScenario extends KalturaEnumBase
{
	const PROTECTION = "playReady.PROTECTION";
	const PURCHASE = "playReady.PURCHASE";
	const RENTAL = "playReady.RENTAL";
	const SUBSCRIPTION = "playReady.SUBSCRIPTION";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmLicenseType extends KalturaEnumBase
{
	const NON_PERSISTENT = "playReady.NON_PERSISTENT";
	const PERSISTENT = "playReady.PERSISTENT";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmPolicyOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmProfileOrderBy extends KalturaEnumBase
{
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmProviderType extends KalturaEnumBase
{
	const FAIRPLAY = "fairplay.FAIRPLAY";
	const PLAY_READY = "playReady.PLAY_READY";
	const WIDEVINE = "widevine.WIDEVINE";
	const CENC = "1";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmPolicy extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var KalturaDrmProviderType
	 */
	public $provider = null;

	/**
	 * 
	 *
	 * @var KalturaDrmPolicyStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var KalturaDrmLicenseScenario
	 */
	public $scenario = null;

	/**
	 * 
	 *
	 * @var KalturaDrmLicenseType
	 */
	public $licenseType = null;

	/**
	 * 
	 *
	 * @var KalturaDrmLicenseExpirationPolicy
	 */
	public $licenseExpirationPolicy = null;

	/**
	 * Duration in days the license is effective
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $licenseParams;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmProfile extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var KalturaDrmProviderType
	 */
	public $provider = null;

	/**
	 * 
	 *
	 * @var KalturaDrmProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $licenseServerUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $signingKey = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAccessControlDrmPolicyAction extends KalturaRuleAction
{
	/**
	 * Drm policy id
	 *
	 * @var int
	 */
	public $policyId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaDrmPolicyBaseFilter extends KalturaFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameLike = null;

	/**
	 * 
	 *
	 * @var KalturaDrmProviderType
	 */
	public $providerEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerIn = null;

	/**
	 * 
	 *
	 * @var KalturaDrmPolicyStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var KalturaDrmLicenseScenario
	 */
	public $scenarioEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $scenarioIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmPolicyListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaDrmPolicy
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaDrmProfileBaseFilter extends KalturaFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var KalturaDrmProviderType
	 */
	public $providerEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerIn = null;

	/**
	 * 
	 *
	 * @var KalturaDrmProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmProfileListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaDrmProfile
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmPolicyFilter extends KalturaDrmPolicyBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmProfileFilter extends KalturaDrmProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaDrmClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaDrmClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaDrmClientPlugin($client);
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
		return 'drm';
	}
}

