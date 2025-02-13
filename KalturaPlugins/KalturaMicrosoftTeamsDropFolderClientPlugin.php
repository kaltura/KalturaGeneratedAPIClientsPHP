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
require_once(dirname(__FILE__) . "/KalturaDropFolderClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaVendorClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaMetadataClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMicrosoftTeamsDropFolderFile extends KalturaDropFolderFile
{
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
	public $ownerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $additionalUserIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetCategoryIds = null;

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
	public $contentUrl = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMicrosoftTeamsIntegrationSetting extends KalturaIntegrationSetting
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $clientSecret = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientId = null;

	/**
	 * User-level custom metadata profile ID which will contain encrypted user-level Graph access data.
	 *
	 * @var int
	 */
	public $userMetadataProfileId = null;

	/**
	 * MS Graph permission scopes for delegate auth
	 *
	 * @var string
	 */
	public $scopes = null;

	/**
	 * Encryption key used for encrypting/decrypting user auth data.
	 *
	 * @var string
	 * @readonly
	 */
	public $encryptionKey = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMicrosoftTeamsDropFolder extends KalturaRemoteDropFolder
{
	/**
	 * ID of the integration being fulfilled by the drop folder
	 *
	 * @var int
	 */
	public $integrationId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $tenantId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $clientSecret = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $clientId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMicrosoftTeamsDropFolderClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaMicrosoftTeamsDropFolderClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaMicrosoftTeamsDropFolderClientPlugin($client);
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
		return 'MicrosoftTeamsDropFolder';
	}
}

