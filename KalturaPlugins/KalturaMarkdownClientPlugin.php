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
require_once(dirname(__FILE__) . "/KalturaAttachmentClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMarkdownAssetOrderBy extends KalturaEnumBase
{
	const CREATED_AT_ASC = "+createdAt";
	const DELETED_AT_ASC = "+deletedAt";
	const SIZE_ASC = "+size";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const DELETED_AT_DESC = "-deletedAt";
	const SIZE_DESC = "-size";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMarkdownProviderType extends KalturaEnumBase
{
	const KAI = "0";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMarkdownAsset extends KalturaAttachmentAsset
{
	/**
	 * The percentage accuracy of the markdown - values between 0 and 100
	 *
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * The provider of the markdown
	 *
	 * @var KalturaMarkdownProviderType
	 */
	public $providerType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMarkdownAssetListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaMarkdownAsset
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaMarkdownAssetBaseFilter extends KalturaTextualAttachmentAssetFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMarkdownAssetFilter extends KalturaMarkdownAssetBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMarkdownClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaMarkdownClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaMarkdownClientPlugin($client);
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
		return 'markdown';
	}
}

