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
class KalturaCrossKalturaDistributionProfileOrderBy extends KalturaEnumBase
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
class KalturaCrossKalturaDistributionProviderOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCrossKalturaDistributionProvider extends KalturaDistributionProvider
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCrossKalturaDistributionJobProviderData extends KalturaConfigurableDistributionJobProviderData
{
	/**
	 * Key-value array where the keys are IDs of distributed flavor assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedFlavorAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed thumb assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedThumbAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed metadata objects in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedMetadata = null;

	/**
	 * Key-value array where the keys are IDs of distributed caption assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedCaptionAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed fileassets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedFileAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed caption assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedAttachmentAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed cue points in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedCuePoints = null;

	/**
	 * Key-value array where the keys are IDs of distributed thumb cue points in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedThumbCuePoints = null;

	/**
	 * Key-value array where the keys are IDs of distributed timed thumb assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedTimedThumbAssets = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCrossKalturaDistributionProfile extends KalturaConfigurableDistributionProfile
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $targetServiceUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $targetAccountId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetLoginId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetLoginPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataXslt = null;

	/**
	 * 
	 *
	 * @var array of KalturaStringValue
	 */
	public $metadataXpathsTriggerUpdate;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeCaptions = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $designatedCategories = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeCategories = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $collaboratorsCustomMetadataProfileId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $collaboratorsFromCustomMetadataProfile = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeCuePoints = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeRemoteFlavorAssetContent = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeRemoteThumbAssetContent = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeRemoteCaptionAssetContent = null;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapAccessControlProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapConversionProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapMetadataProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapStorageProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapFlavorParamsIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapThumbParamsIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapCaptionParamsIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapAttachmentParamsIds;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaCrossKalturaDistributionProviderBaseFilter extends KalturaDistributionProviderFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCrossKalturaDistributionProviderFilter extends KalturaCrossKalturaDistributionProviderBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaCrossKalturaDistributionProfileBaseFilter extends KalturaConfigurableDistributionProfileFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCrossKalturaDistributionProfileFilter extends KalturaCrossKalturaDistributionProfileBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCrossKalturaDistributionClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaCrossKalturaDistributionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaCrossKalturaDistributionClientPlugin($client);
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
		return 'crossKalturaDistribution';
	}
}

