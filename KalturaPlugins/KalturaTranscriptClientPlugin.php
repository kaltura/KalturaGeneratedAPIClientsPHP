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
require_once(dirname(__FILE__) . "/KalturaAttachmentClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranscriptAssetOrderBy extends KalturaEnumBase
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
class KalturaTranscriptProviderType extends KalturaEnumBase
{
	const CIELO24 = "cielo24.Cielo24";
	const VOICEBASE = "voicebase.Voicebase";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranscriptAsset extends KalturaAttachmentAsset
{
	/**
	 * The accuracy of the transcript - values between 0 and 1
	 *
	 * @var float
	 */
	public $accuracy = null;

	/**
	 * Was verified by human or machine
	 *
	 * @var KalturaNullableBoolean
	 */
	public $humanVerified = null;

	/**
	 * The language of the transcript
	 *
	 * @var KalturaLanguage
	 */
	public $language = null;

	/**
	 * The provider of the transcript
	 *
	 * @var KalturaTranscriptProviderType
	 */
	public $providerType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntryTranscriptAssetSearchItem extends KalturaSearchItem
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $contentLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentMultiLikeAnd = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranscriptAssetListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaTranscriptAsset
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaTranscriptAssetBaseFilter extends KalturaAttachmentAssetFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranscriptAssetFilter extends KalturaTranscriptAssetBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTranscriptClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaTranscriptClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaTranscriptClientPlugin($client);
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
		return 'transcript';
	}
}

