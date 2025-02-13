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
// Copyright (C) 2006-2023  Kaltura Inc.
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
class KalturaTvinciAssetsType extends KalturaEnumBase
{
	const REGULAR = 1;
	const VIRTUAL = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaTvinciDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionTag extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $tagname = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $extension = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $format = null;

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
	public $ppvmodule = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $xml = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $ingestUrl = null;

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
	 * Tags array for Tvinci distribution
	 *
	 * @var array of KalturaTvinciDistributionTag
	 */
	public $tags;

	/**
	 * 
	 *
	 * @var string
	 */
	public $xsltFile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $innerType = null;

	/**
	 * 
	 *
	 * @var KalturaTvinciAssetsType
	 */
	public $assetsType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaTvinciDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionProviderFilter extends KalturaTvinciDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaTvinciDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionProfileFilter extends KalturaTvinciDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTvinciDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaTvinciDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaTvinciDistributionClientPlugin($client);
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
		return 'tvinciDistribution';
	}
}

