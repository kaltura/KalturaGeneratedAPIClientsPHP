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
require_once(dirname(__FILE__) . "/KalturaIntegrationClientPlugin.php");
require_once(dirname(__FILE__) . "/KalturaTranscriptClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVoicebaseJobProviderData extends KalturaIntegrationJobProviderData
{
	/**
	 * Entry ID
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Flavor ID
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * input Transcript-asset ID
	 *
	 * @var string
	 */
	public $transcriptId = null;

	/**
	 * Caption formats
	 *
	 * @var string
	 */
	public $captionAssetFormats = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $apiKey = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $apiPassword = null;

	/**
	 * Transcript content language
	 *
	 * @var KalturaLanguage
	 */
	public $spokenLanguage = null;

	/**
	 * Transcript Content location
	 *
	 * @var string
	 * @readonly
	 */
	public $fileLocation = null;

	/**
	 * should replace remote media content
	 *
	 * @var bool
	 */
	public $replaceMediaContent = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaVoicebaseClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaVoicebaseClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaVoicebaseClientPlugin($client);
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
		return 'voicebase';
	}
}

