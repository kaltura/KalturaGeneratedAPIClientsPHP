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
require_once(dirname(__FILE__) . "/KalturaEventNotificationClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaKafkaNotificationFormat extends KalturaEnumBase
{
	const JSON = 1;
	const AVRO = 2;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaKafkaNotificationTemplateOrderBy extends KalturaEnumBase
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
class KalturaKafkaNotificationTemplate extends KalturaEventNotificationTemplate
{
	/**
	 * Define the content dynamic parameters
	 *
	 * @var string
	 */
	public $topicName = null;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var string
	 */
	public $partitionKey = null;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var KalturaKafkaNotificationFormat
	 */
	public $messageFormat = null;

	/**
	 * Kaltura API object type
	 *
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Kaltura response-profile system name
	 *
	 * @var string
	 */
	public $responseProfileSystemName = null;

	/**
	 * Partner permissions needed to trigger the notification (comma seperated list of permissions)
	 *
	 * @var string
	 */
	public $requiresPermissions = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaKafkaNotificationTemplateBaseFilter extends KalturaEventNotificationTemplateFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaKafkaNotificationTemplateFilter extends KalturaKafkaNotificationTemplateBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaKafkaNotificationClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaKafkaNotificationClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaKafkaNotificationClientPlugin($client);
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
		return 'kafkaNotification';
	}
}

