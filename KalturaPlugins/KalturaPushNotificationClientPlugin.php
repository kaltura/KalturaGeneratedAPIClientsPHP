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
require_once(dirname(__FILE__) . "/KalturaEventNotificationClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationCommandType extends KalturaEnumBase
{
	const CLEAR_QUEUE = "CLEAR_QUEUE";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationTemplateOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushEventNotificationParameter extends KalturaEventNotificationParameter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $queueKeyToken = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationData extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $queueName = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $queueKey = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $url = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationParams extends KalturaObjectBase
{
	/**
	 * User params
	 *
	 * @var array of KalturaPushEventNotificationParameter
	 */
	public $userParams;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationTemplate extends KalturaEventNotificationTemplate
{
	/**
	 * Define the content dynamic parameters
	 *
	 * @var array of KalturaPushEventNotificationParameter
	 */
	public $queueNameParameters;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var array of KalturaPushEventNotificationParameter
	 */
	public $queueKeyParameters;

	/**
	 * Kaltura API object type
	 *
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Kaltura Object format
	 *
	 * @var KalturaResponseType
	 */
	public $objectFormat = null;

	/**
	 * Kaltura response-profile id
	 *
	 * @var int
	 */
	public $responseProfileId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaPushNotificationTemplateBaseFilter extends KalturaEventNotificationTemplateFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationTemplateFilter extends KalturaPushNotificationTemplateBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPushNotificationClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaPushNotificationClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaPushNotificationClientPlugin($client);
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
		return 'pushNotification';
	}
}

