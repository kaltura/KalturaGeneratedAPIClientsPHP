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

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionAssetStatus extends KalturaEnumBase
{
	const ERROR = -1;
	const QUEUED = 0;
	const READY = 2;
	const DELETED = 3;
	const IMPORTING = 7;
	const EXPORTING = 9;
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionAssetOrderBy extends KalturaEnumBase
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
class KalturaCaptionAssetUsage extends KalturaEnumBase
{
	const CAPTION = "0";
	const EXTENDED_AUDIO_DESCRIPTION = "1";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionParamsOrderBy extends KalturaEnumBase
{
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionSource extends KalturaEnumBase
{
	const UNKNOWN = "0";
	const ZOOM = "1";
	const WEBEX = "2";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionType extends KalturaEnumBase
{
	const SRT = "1";
	const DFXP = "2";
	const WEBVTT = "3";
	const CAP = "4";
	const SCC = "5";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionAsset extends KalturaAsset
{
	/**
	 * The Caption Params used to create this Caption Asset
	 *
	 * @var int
	 * @insertonly
	 */
	public $captionParamsId = null;

	/**
	 * The language of the caption asset content
	 *
	 * @var KalturaLanguage
	 */
	public $language = null;

	/**
	 * The language of the caption asset content
	 *
	 * @var KalturaLanguageCode
	 * @readonly
	 */
	public $languageCode = null;

	/**
	 * Is default caption asset of the entry
	 *
	 * @var KalturaNullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Friendly label
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * The caption format
	 *
	 * @var KalturaCaptionType
	 * @insertonly
	 */
	public $format = null;

	/**
	 * The source of the asset
	 *
	 * @var KalturaCaptionSource
	 * @insertonly
	 */
	public $source = null;

	/**
	 * The status of the asset
	 *
	 * @var KalturaCaptionAssetStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The parent id of the asset
	 *
	 * @var string
	 * @insertonly
	 */
	public $parentId = null;

	/**
	 * The Accuracy of the caption content
	 *
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * The Accuracy of the caption content
	 *
	 * @var bool
	 */
	public $displayOnPlayer = null;

	/**
	 * List of associated transcript asset id's, comma separated
	 *
	 * @var string
	 */
	public $associatedTranscriptIds = null;

	/**
	 * The usage of the asset
	 *
	 * @var KalturaCaptionAssetUsage
	 */
	public $usage = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionParams extends KalturaAssetParams
{
	/**
	 * The language of the caption content
	 *
	 * @var KalturaLanguage
	 * @insertonly
	 */
	public $language = null;

	/**
	 * Is default caption asset of the entry
	 *
	 * @var KalturaNullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Friendly label
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * The caption format
	 *
	 * @var KalturaCaptionType
	 * @insertonly
	 */
	public $format = null;

	/**
	 * Id of the caption params or the flavor params to be used as source for the caption creation
	 *
	 * @var int
	 */
	public $sourceParamsId = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionPlaybackPluginData extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $label = null;

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
	public $language = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webVttUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $languageCode = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionAssetListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaCaptionAsset
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionParamsListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaCaptionParams
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaConvertCaptionAssetJobData extends KalturaJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileLocation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileEncryptionKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $toType = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCopyCaptionsJobData extends KalturaJobData
{
	/**
	 * entry Id
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * an array of source start time and duration
	 *
	 * @var array of KalturaClipDescription
	 */
	public $clipsDescriptionArray;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $fullCopy = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaParseMultiLanguageCaptionAssetJobData extends KalturaJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $multiLanaguageCaptionAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileLocation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileEncryptionKey = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaCaptionAssetBaseFilter extends KalturaAssetFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $captionParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionParamsIdIn = null;

	/**
	 * 
	 *
	 * @var KalturaCaptionType
	 */
	public $formatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $formatIn = null;

	/**
	 * 
	 *
	 * @var KalturaCaptionAssetStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusNotIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaCaptionParamsBaseFilter extends KalturaAssetParamsFilter
{
	/**
	 * 
	 *
	 * @var KalturaCaptionType
	 */
	public $formatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $formatIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionAssetFilter extends KalturaCaptionAssetBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionParamsFilter extends KalturaCaptionParamsBaseFilter
{

}


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionAssetService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add caption asset
	 * 
	 * @param string $entryId 
	 * @param KalturaCaptionAsset $captionAsset 
	 * @return KalturaCaptionAsset
	 */
	function add($entryId, KalturaCaptionAsset $captionAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "captionAsset", $captionAsset->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $captionAssetId 
	 */
	function delete($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Manually export an asset
	 * 
	 * @param string $assetId 
	 * @param int $storageProfileId 
	 * @return KalturaFlavorAsset
	 */
	function export($assetId, $storageProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "storageProfileId", $storageProfileId);
		$this->client->queueServiceActionCall("caption_captionasset", "export", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaFlavorAsset");
		return $resultObject;
	}

	/**
	 * 
	 * 
	 * @param string $captionAssetId 
	 * @return KalturaCaptionAsset
	 */
	function get($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionAsset");
		return $resultObject;
	}

	/**
	 * Get remote storage existing paths for the asset
	 * 
	 * @param string $id 
	 * @return KalturaRemotePathListResponse
	 */
	function getRemotePaths($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionasset", "getRemotePaths", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRemotePathListResponse");
		return $resultObject;
	}

	/**
	 * Get download URL for the asset
	 * 
	 * @param string $id 
	 * @param int $storageId 
	 * @return string
	 */
	function getUrl($id, $storageId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "storageId", $storageId);
		$this->client->queueServiceActionCall("caption_captionasset", "getUrl", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * List caption Assets by filter and pager
	 * 
	 * @param KalturaAssetFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaCaptionAssetListResponse
	 */
	function listAction(KalturaAssetFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionAssetListResponse");
		return $resultObject;
	}

	/**
	 * Serves caption by its id
	 * 
	 * @param string $captionAssetId 
	 * @return file
	 */
	function serve($captionAssetId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "serve", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves caption file as Json by its ID
	 * 
	 * @param string $captionAssetId 
	 * @return file
	 */
	function serveAsJson($captionAssetId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "serveAsJson", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves caption by entry id and thumnail params id
	 * 
	 * @param string $entryId 
	 * @param int $captionParamId If not set, default caption will be used.
	 * @return file
	 */
	function serveByEntryId($entryId, $captionParamId = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "captionParamId", $captionParamId);
		$this->client->queueServiceActionCall("caption_captionasset", "serveByEntryId", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Serves caption by its id converting it to segmented WebVTT
	 * 
	 * @param string $captionAssetId 
	 * @param int $segmentDuration 
	 * @param int $segmentIndex 
	 * @param int $localTimestamp 
	 * @return file
	 */
	function serveWebVTT($captionAssetId, $segmentDuration = 30, $segmentIndex = null, $localTimestamp = 10000)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->addParam($kparams, "segmentDuration", $segmentDuration);
		$this->client->addParam($kparams, "segmentIndex", $segmentIndex);
		$this->client->addParam($kparams, "localTimestamp", $localTimestamp);
		$this->client->queueServiceActionCall("caption_captionasset", "serveWebVTT", $kparams);
		if(!$this->client->getDestinationPath() && !$this->client->getReturnServedResult())
			return $this->client->getServeUrl();
		return $this->client->doQueue();
	}

	/**
	 * Markss the caption as default and removes that mark from all other caption assets of the entry.
	 * 
	 * @param string $captionAssetId 
	 */
	function setAsDefault($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "setAsDefault", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Update content of caption asset
	 * 
	 * @param string $id 
	 * @param KalturaContentResource $contentResource 
	 * @return KalturaCaptionAsset
	 */
	function setContent($id, KalturaContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "setContent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionAsset");
		return $resultObject;
	}

	/**
	 * Update caption asset
	 * 
	 * @param string $id 
	 * @param KalturaCaptionAsset $captionAsset 
	 * @return KalturaCaptionAsset
	 */
	function update($id, KalturaCaptionAsset $captionAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "captionAsset", $captionAsset->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionAsset");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionParamsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Caption Params
	 * 
	 * @param KalturaCaptionParams $captionParams 
	 * @return KalturaCaptionParams
	 */
	function add(KalturaCaptionParams $captionParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionParams", $captionParams->toParams());
		$this->client->queueServiceActionCall("caption_captionparams", "add", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionParams");
		return $resultObject;
	}

	/**
	 * Delete Caption Params by ID
	 * 
	 * @param int $id 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionparams", "delete", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Get Caption Params by ID
	 * 
	 * @param int $id 
	 * @return KalturaCaptionParams
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionparams", "get", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionParams");
		return $resultObject;
	}

	/**
	 * List Caption Params by filter with paging support (By default - all system default params will be listed too)
	 * 
	 * @param KalturaCaptionParamsFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaCaptionParamsListResponse
	 */
	function listAction(KalturaCaptionParamsFilter $filter = null, KalturaFilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("caption_captionparams", "list", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionParamsListResponse");
		return $resultObject;
	}

	/**
	 * Update Caption Params by ID
	 * 
	 * @param int $id 
	 * @param KalturaCaptionParams $captionParams 
	 * @return KalturaCaptionParams
	 */
	function update($id, KalturaCaptionParams $captionParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "captionParams", $captionParams->toParams());
		$this->client->queueServiceActionCall("caption_captionparams", "update", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCaptionParams");
		return $resultObject;
	}
}
/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCaptionClientPlugin extends KalturaClientPlugin
{
	/**
	 * @var KalturaCaptionAssetService
	 */
	public $captionAsset = null;

	/**
	 * @var KalturaCaptionParamsService
	 */
	public $captionParams = null;

	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
		$this->captionAsset = new KalturaCaptionAssetService($client);
		$this->captionParams = new KalturaCaptionParamsService($client);
	}

	/**
	 * @return KalturaCaptionClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaCaptionClientPlugin($client);
	}

	/**
	 * @return array<KalturaServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'captionAsset' => $this->captionAsset,
			'captionParams' => $this->captionParams,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'caption';
	}
}

