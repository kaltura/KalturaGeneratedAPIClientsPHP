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
// Copyright (C) 2006-2016  Kaltura Inc.
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

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolderFileOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const FILE_NAME_ASC = "+fileName";
	const FILE_SIZE_ASC = "+fileSize";
	const FILE_SIZE_LAST_SET_AT_ASC = "+fileSizeLastSetAt";
	const ID_ASC = "+id";
	const PARSED_FLAVOR_ASC = "+parsedFlavor";
	const PARSED_SLUG_ASC = "+parsedSlug";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const FILE_NAME_DESC = "-fileName";
	const FILE_SIZE_DESC = "-fileSize";
	const FILE_SIZE_LAST_SET_AT_DESC = "-fileSizeLastSetAt";
	const ID_DESC = "-id";
	const PARSED_FLAVOR_DESC = "-parsedFlavor";
	const PARSED_SLUG_DESC = "-parsedSlug";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolderOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const ID_ASC = "+id";
	const NAME_ASC = "+name";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const ID_DESC = "-id";
	const NAME_DESC = "-name";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedItemInfo extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $itemXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemPublishDateXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemUniqueIdentifierXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentFileSizeXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentUrlXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentBitrateXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemHashXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentXpath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentBitrateAttributeName = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolder extends KalturaDropFolder
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $itemHandlingLimit = null;

	/**
	 * 
	 *
	 * @var KalturaFeedItemInfo
	 */
	public $feedItemInfo;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolderFile extends KalturaDropFolderFile
{
	/**
	 * MD5 or Sha1 encrypted string
	 *
	 * @var string
	 */
	public $hash = null;

	/**
	 * Path of the original Feed content XML
	 *
	 * @var string
	 */
	public $feedXmlPath = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFeedDropFolderBaseFilter extends KalturaDropFolderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaFeedDropFolderFileBaseFilter extends KalturaDropFolderFileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolderFileFilter extends KalturaFeedDropFolderFileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolderFilter extends KalturaFeedDropFolderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFeedDropFolderClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaFeedDropFolderClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaFeedDropFolderClientPlugin($client);
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
		return 'FeedDropFolder';
	}
}

