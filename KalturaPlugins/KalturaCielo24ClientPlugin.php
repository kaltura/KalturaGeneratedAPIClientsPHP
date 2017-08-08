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
class KalturaCielo24Fidelity extends KalturaEnumBase
{
	const MECHANICAL = "MECHANICAL";
	const PREMIUM = "PREMIUM";
	const PROFESSIONAL = "PROFESSIONAL";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCielo24Priority extends KalturaEnumBase
{
	const PRIORITY = "PRIORITY";
	const STANDARD = "STANDARD";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCielo24JobProviderData extends KalturaIntegrationJobProviderData
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
	 * Caption formats
	 *
	 * @var string
	 */
	public $captionAssetFormats = null;

	/**
	 * 
	 *
	 * @var KalturaCielo24Priority
	 */
	public $priority = null;

	/**
	 * 
	 *
	 * @var KalturaCielo24Fidelity
	 */
	public $fidelity = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $username = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $password = null;

	/**
	 * Base url for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $baseUrl = null;

	/**
	 * Transcript content language
	 *
	 * @var KalturaLanguage
	 */
	public $spokenLanguage = null;

	/**
	 * should replace remote media content
	 *
	 * @var bool
	 */
	public $replaceMediaContent = null;

	/**
	 * additional parameters to send to Cielo24
	 *
	 * @var string
	 */
	public $additionalParameters = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCielo24ClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaCielo24ClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaCielo24ClientPlugin($client);
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
		return 'cielo24';
	}
}

