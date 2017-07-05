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
require_once(dirname(__FILE__) . "/KalturaClientBase.php");
require_once(dirname(__FILE__) . "/KalturaEnums.php");
require_once(dirname(__FILE__) . "/KalturaTypes.php");


/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnnouncementService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new future scheduled system announcement push notification
	 * 
	 * @param KalturaAnnouncement $announcement The announcement to be added.
            timezone parameter should be taken from the 'name of timezone' from: https://msdn.microsoft.com/en-us/library/ms912391(v=winembedded.11).aspx
            Recipients values: All, LoggedIn, Guests
	 * @return KalturaAnnouncement
	 */
	function add(KalturaAnnouncement $announcement)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "announcement", $announcement->toParams());
		$this->client->queueServiceActionCall("announcement", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAnnouncement");
		return $resultObject;
	}

	/**
	 * Delete an existing announcing. Announcement cannot be delete while being sent.
	 * 
	 * @param bigint $id Id of the announcement.
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("announcement", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Enable system announcements
	 * 
	 * @return bool
	 */
	function enableSystemAnnouncements()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("announcement", "enableSystemAnnouncements", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Lists all announcements in the system.
	 * 
	 * @param KalturaAnnouncementFilter $filter Filter object
	 * @param KalturaFilterPager $pager Paging the request
	 * @return KalturaAnnouncementListResponse
	 */
	function listAction(KalturaAnnouncementFilter $filter, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("announcement", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAnnouncementListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing future system announcement push notification. Announcement can only be updated only before sending
	 * 
	 * @param int $announcementId The announcement identifier
	 * @param KalturaAnnouncement $announcement The announcement to update.
            timezone parameter should be taken from the 'name of timezone' from: https://msdn.microsoft.com/en-us/library/ms912391(v=winembedded.11).aspx
            Recipients values: All, LoggedIn, Guests
	 * @return KalturaAnnouncement
	 */
	function update($announcementId, KalturaAnnouncement $announcement)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "announcementId", $announcementId);
		$this->client->addParam($kparams, "announcement", $announcement->toParams());
		$this->client->queueServiceActionCall("announcement", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAnnouncement");
		return $resultObject;
	}

	/**
	 * Update a system announcement status
	 * 
	 * @param bigint $id Id of the announcement.
	 * @param bool $status Status to update to.
	 * @return bool
	 */
	function updateStatus($id, $status)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("announcement", "updateStatus", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAppTokenService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new application authentication token
	 * 
	 * @param KalturaAppToken $appToken Application token
	 * @return KalturaAppToken
	 */
	function add(KalturaAppToken $appToken)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "appToken", $appToken->toParams());
		$this->client->queueServiceActionCall("apptoken", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAppToken");
		return $resultObject;
	}

	/**
	 * Delete application authentication token by id
	 * 
	 * @param string $id Application token identifier
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("apptoken", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Get application authentication token by id
	 * 
	 * @param string $id Application token identifier
	 * @return KalturaAppToken
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("apptoken", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAppToken");
		return $resultObject;
	}

	/**
	 * Starts a new KS (Kaltura Session) based on application authentication token id
	 * 
	 * @param string $id Application token id
	 * @param string $tokenHash Hashed token - current KS concatenated with the application token hashed using the application token ‘hashType’
	 * @param string $userId Session user id, will be ignored if a different user id already defined on the application token
	 * @param int $type Session type, will be ignored if a different session type already defined on the application token
	 * @param int $expiry Session expiry (in seconds), could be overwritten by shorter expiry of the application token and the session-expiry that defined on the application token
	 * @param string $udid 
	 * @return KalturaSessionInfo
	 */
	function startSession($id, $tokenHash, $userId = null, $type = null, $expiry = null, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "tokenHash", $tokenHash);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("apptoken", "startSession", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSessionInfo");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetCommentService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add asset comments by asset id
	 * 
	 * @param KalturaAssetComment $comment Comment
	 * @return KalturaAssetComment
	 */
	function add(KalturaAssetComment $comment)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "comment", $comment->toParams());
		$this->client->queueServiceActionCall("assetcomment", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAssetComment");
		return $resultObject;
	}

	/**
	 * Returns asset comments by asset id
	 * 
	 * @param KalturaAssetCommentFilter $filter Filtering the assets comments request
	 * @param KalturaFilterPager $pager Page size and index
	 * @return KalturaAssetCommentListResponse
	 */
	function listAction(KalturaAssetCommentFilter $filter, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("assetcomment", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAssetCommentListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns media or EPG asset by media / EPG internal or external identifier
	 * 
	 * @param string $id Asset identifier
	 * @param string $assetReferenceType Asset type
	 * @return KalturaAsset
	 */
	function get($id, $assetReferenceType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->queueServiceActionCall("asset", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAsset");
		return $resultObject;
	}

	/**
	 * Returns media or EPG assets. Filters by media identifiers or by EPG internal or external identifier.
	 * 
	 * @param KalturaAssetFilter $filter Filtering the assets request
	 * @param KalturaFilterPager $pager Paging the request
	 * @return KalturaAssetListResponse
	 */
	function listAction(KalturaAssetFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("asset", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAssetListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetFileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get KalturaAssetFileContext
	 * 
	 * @param string $id Asset file identifier
	 * @return KalturaAssetFileContext
	 */
	function getContext($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("assetfile", "getContext", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAssetFileContext");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetHistoryService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get recently watched media for user, ordered by recently watched first.
	 * 
	 * @param KalturaAssetHistoryFilter $filter Filter parameters for filtering out the result
	 * @param KalturaFilterPager $pager Page size and index. Number of assets to return per page. Possible range 5 ≤ size ≥ 50. If omitted - will be set to 25. If a value > 50 provided – will set to 50
	 * @return KalturaAssetHistoryListResponse
	 */
	function listAction(KalturaAssetHistoryFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("assethistory", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAssetHistoryListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAssetStatisticsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns statistics for given list of assets by type and / or time period
	 * 
	 * @param KalturaAssetStatisticsQuery $query Query for assets statistics
	 * @return KalturaAssetStatisticsListResponse
	 */
	function query(KalturaAssetStatisticsQuery $query)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "query", $query->toParams());
		$this->client->queueServiceActionCall("assetstatistics", "query", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaAssetStatisticsListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaBookmarkService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Report player position and action for the user on the watched asset. Player position is used to later allow resume watching.
	 * 
	 * @param KalturaBookmark $bookmark Bookmark details
	 * @return bool
	 */
	function add(KalturaBookmark $bookmark)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "bookmark", $bookmark->toParams());
		$this->client->queueServiceActionCall("bookmark", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Returns player position record/s for the requested asset and the requesting user. 
            If default user makes the request – player position records are provided for all of the users in the household.
            If non-default user makes the request - player position records are provided for the requesting user and the default user of the household.
	 * 
	 * @param KalturaBookmarkFilter $filter Filter option for the last position
	 * @return KalturaBookmarkListResponse
	 */
	function listAction(KalturaBookmarkFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("bookmark", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBookmarkListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCdnAdapterProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new CDN adapter for partner
	 * 
	 * @param KalturaCDNAdapterProfile $adapter CDN adapter object
	 * @return KalturaCDNAdapterProfile
	 */
	function add(KalturaCDNAdapterProfile $adapter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdnadapterprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDNAdapterProfile");
		return $resultObject;
	}

	/**
	 * Delete CDN adapter by CDN adapter id
	 * 
	 * @param int $adapterId CDN adapter identifier
	 * @return bool
	 */
	function delete($adapterId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdnadapterprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Generate CDN adapter shared secret
	 * 
	 * @param int $adapterId CDN adapter identifier
	 * @return KalturaCDNAdapterProfile
	 */
	function generateSharedSecret($adapterId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdnadapterprofile", "generateSharedSecret", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDNAdapterProfile");
		return $resultObject;
	}

	/**
	 * Returns all CDN adapters for partner
	 * 
	 * @return KalturaCDNAdapterProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("cdnadapterprofile", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDNAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update CDN adapter details
	 * 
	 * @param int $adapterId CDN adapter id to update
	 * @param KalturaCDNAdapterProfile $adapter CDN adapter Object
	 * @return KalturaCDNAdapterProfile
	 */
	function update($adapterId, KalturaCDNAdapterProfile $adapter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdnadapterprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDNAdapterProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCdnPartnerSettingsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the partner’s CDN settings (default adapters)
	 * 
	 * @return KalturaCDNPartnerSettings
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("cdnpartnersettings", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDNPartnerSettings");
		return $resultObject;
	}

	/**
	 * Configure the partner’s CDN settings (default adapters)
	 * 
	 * @param KalturaCDNPartnerSettings $settings 
	 * @return KalturaCDNPartnerSettings
	 */
	function update(KalturaCDNPartnerSettings $settings)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "settings", $settings->toParams());
		$this->client->queueServiceActionCall("cdnpartnersettings", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDNPartnerSettings");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCDVRAdapterProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new C-DVR adapter for partner
	 * 
	 * @param KalturaCDVRAdapterProfile $adapter C-DVR adapter object
	 * @return KalturaCDVRAdapterProfile
	 */
	function add(KalturaCDVRAdapterProfile $adapter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdvradapterprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDVRAdapterProfile");
		return $resultObject;
	}

	/**
	 * Delete C-DVR adapter by C-DVR adapter id
	 * 
	 * @param int $adapterId C-DVR adapter identifier
	 * @return bool
	 */
	function delete($adapterId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdvradapterprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Generate C-DVR adapter shared secret
	 * 
	 * @param int $adapterId C-DVR adapter identifier
	 * @return KalturaCDVRAdapterProfile
	 */
	function generateSharedSecret($adapterId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->queueServiceActionCall("cdvradapterprofile", "generateSharedSecret", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDVRAdapterProfile");
		return $resultObject;
	}

	/**
	 * Returns all C-DVR adapters for partner
	 * 
	 * @return KalturaCDVRAdapterProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("cdvradapterprofile", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDVRAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update C-DVR adapter details
	 * 
	 * @param int $adapterId C-DVR adapter identifier
	 * @param KalturaCDVRAdapterProfile $adapter C-DVR adapter Object
	 * @return KalturaCDVRAdapterProfile
	 */
	function update($adapterId, KalturaCDVRAdapterProfile $adapter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "adapterId", $adapterId);
		$this->client->addParam($kparams, "adapter", $adapter->toParams());
		$this->client->queueServiceActionCall("cdvradapterprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCDVRAdapterProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaChannelService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new channel for partner. Currently supports only KSQL channel
	 * 
	 * @param KalturaChannel $channel KSQL channel Object
	 * @return KalturaChannel
	 */
	function add(KalturaChannel $channel)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "channel", $channel->toParams());
		$this->client->queueServiceActionCall("channel", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaChannel");
		return $resultObject;
	}

	/**
	 * Delete channel by its channel id
	 * 
	 * @param int $channelId Channel identifier
	 * @return bool
	 */
	function delete($channelId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "channelId", $channelId);
		$this->client->queueServiceActionCall("channel", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Returns channel info
	 * 
	 * @param int $id Channel Identifier
	 * @return KalturaChannel
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("channel", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaChannel");
		return $resultObject;
	}

	/**
	 * Update channel details. Currently supports only KSQL channel
	 * 
	 * @param int $channelId Channel identifier
	 * @param KalturaChannel $channel KSQL channel Object
	 * @return KalturaChannel
	 */
	function update($channelId, KalturaChannel $channel)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "channelId", $channelId);
		$this->client->addParam($kparams, "channel", $channel->toParams());
		$this->client->queueServiceActionCall("channel", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaChannel");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaCouponService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns information about a coupon
	 * 
	 * @param string $code Coupon code
	 * @return KalturaCoupon
	 */
	function get($code)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "code", $code);
		$this->client->queueServiceActionCall("coupon", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCoupon");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaEntitlementService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Immediately cancel a subscription, PPV or collection. Cancel is possible only if within cancellation window and content not already consumed
	 * 
	 * @param int $assetId The mediaFileID to cancel
	 * @param string $transactionType The transaction type for the cancelation
	 * @return bool
	 */
	function cancel($assetId, $transactionType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("entitlement", "cancel", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Cancel a household service subscription at the next renewal. The subscription stays valid till the next renewal.
	 * 
	 * @param string $subscriptionId Subscription Code
	 */
	function cancelRenewal($subscriptionId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "subscriptionId", $subscriptionId);
		$this->client->queueServiceActionCall("entitlement", "cancelRenewal", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Reconcile the user household&#39;s entitlements with an external entitlements source. This request is frequency protected to avoid too frequent calls per household.
	 * 
	 * @return bool
	 */
	function externalReconcile()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("entitlement", "externalReconcile", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Immediately cancel a subscription, PPV or collection. Cancel applies regardless of cancellation window and content consumption status
	 * 
	 * @param int $assetId The mediaFileID to cancel
	 * @param string $transactionType The transaction type for the cancelation
	 * @return bool
	 */
	function forceCancel($assetId, $transactionType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("entitlement", "forceCancel", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Grant household for an entitlement for a PPV or Subscription.
	 * 
	 * @param int $productId Identifier for the product package from which this content is offered
	 * @param string $productType Product package type. Possible values: PPV, Subscription, Collection
	 * @param bool $history Controls if the new entitlements grant will appear in the user’s history. True – will add a history entry. False (or if ommited) – no history entry will be added
	 * @param int $contentId Identifier for the content. Relevant only if Product type = PPV
	 * @return bool
	 */
	function grant($productId, $productType, $history, $contentId = 0)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "productId", $productId);
		$this->client->addParam($kparams, "productType", $productType);
		$this->client->addParam($kparams, "history", $history);
		$this->client->addParam($kparams, "contentId", $contentId);
		$this->client->queueServiceActionCall("entitlement", "grant", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Gets all the entitled media items for a household
	 * 
	 * @param KalturaEntitlementFilter $filter Request filter
	 * @param KalturaFilterPager $pager Request pager
	 * @return KalturaEntitlementListResponse
	 */
	function listAction(KalturaEntitlementFilter $filter, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("entitlement", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaEntitlementListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExportTaskService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new bulk export task
	 * 
	 * @param KalturaExportTask $task The task model to add
	 * @return KalturaExportTask
	 */
	function add(KalturaExportTask $task)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "task", $task->toParams());
		$this->client->queueServiceActionCall("exporttask", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExportTask");
		return $resultObject;
	}

	/**
	 * Deletes an existing bulk export task by task identifier
	 * 
	 * @param bigint $id The identifier of the task to delete
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("exporttask", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Gets an existing bulk export task by task identifier
	 * 
	 * @param bigint $id The identifier of the task to get
	 * @return KalturaExportTask
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("exporttask", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExportTask");
		return $resultObject;
	}

	/**
	 * Returns bulk export tasks by tasks identifiers
	 * 
	 * @param KalturaExportTaskFilter $filter Bulk export tasks filter
	 * @return KalturaExportTaskListResponse
	 */
	function listAction(KalturaExportTaskFilter $filter = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("exporttask", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExportTaskListResponse");
		return $resultObject;
	}

	/**
	 * Updates an existing bulk export task by task identifier
	 * 
	 * @param bigint $id The task id to update
	 * @param KalturaExportTask $task The task model to update
	 * @return KalturaExportTask
	 */
	function update($id, KalturaExportTask $task)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "task", $task->toParams());
		$this->client->queueServiceActionCall("exporttask", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExportTask");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaExternalChannelProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new External channel for partner
	 * 
	 * @param KalturaExternalChannelProfile $externalChannel External channel Object
	 * @return KalturaExternalChannelProfile
	 */
	function add(KalturaExternalChannelProfile $externalChannel)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "externalChannel", $externalChannel->toParams());
		$this->client->queueServiceActionCall("externalchannelprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExternalChannelProfile");
		return $resultObject;
	}

	/**
	 * Delete External channel by External channel id
	 * 
	 * @param int $externalChannelId External channel identifier
	 * @return bool
	 */
	function delete($externalChannelId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "externalChannelId", $externalChannelId);
		$this->client->queueServiceActionCall("externalchannelprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Returns all External channels for partner
	 * 
	 * @return KalturaExternalChannelProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("externalchannelprofile", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExternalChannelProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update External channel details
	 * 
	 * @param int $externalChannelId External channel identifier
	 * @param KalturaExternalChannelProfile $externalChannel External channel Object
	 * @return KalturaExternalChannelProfile
	 */
	function update($externalChannelId, KalturaExternalChannelProfile $externalChannel)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "externalChannelId", $externalChannelId);
		$this->client->addParam($kparams, "externalChannel", $externalChannel->toParams());
		$this->client->queueServiceActionCall("externalchannelprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaExternalChannelProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFavoriteService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add media to user&#39;s favorite list
	 * 
	 * @param KalturaFavorite $favorite Favorite details.
	 * @return KalturaFavorite
	 */
	function add(KalturaFavorite $favorite)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "favorite", $favorite->toParams());
		$this->client->queueServiceActionCall("favorite", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaFavorite");
		return $resultObject;
	}

	/**
	 * Remove media from user&#39;s favorite list
	 * 
	 * @param int $id Media identifier
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("favorite", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Retrieving users&#39; favorites
	 * 
	 * @param KalturaFavoriteFilter $filter Request filter
	 * @return KalturaFavoriteListResponse
	 */
	function listAction(KalturaFavoriteFilter $filter = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("favorite", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaFavoriteListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaFollowTvSeriesService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a user&#39;s tv series follow.
            Possible status codes: UserAlreadyFollowing = 8013, NotFound = 500007, InvalidAssetId = 4024
	 * 
	 * @param KalturaFollowTvSeries $followTvSeries 
	 * @return KalturaFollowTvSeries
	 */
	function add(KalturaFollowTvSeries $followTvSeries)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "followTvSeries", $followTvSeries->toParams());
		$this->client->queueServiceActionCall("followtvseries", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaFollowTvSeries");
		return $resultObject;
	}

	/**
	 * Delete a user&#39;s tv series follow.
            Possible status codes: UserNotFollowing = 8012, NotFound = 500007, InvalidAssetId = 4024, AnnouncementNotFound = 8006
	 * 
	 * @param int $assetId 
	 * @return bool
	 */
	function delete($assetId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->queueServiceActionCall("followtvseries", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * List user&#39;s tv series follows.
            Possible status codes:
	 * 
	 * @param KalturaFollowTvSeriesFilter $filter 
	 * @param KalturaFilterPager $pager 
	 * @return KalturaFollowTvSeriesListResponse
	 */
	function listAction(KalturaFollowTvSeriesFilter $filter, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("followtvseries", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaFollowTvSeriesListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHomeNetworkService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new home network to a household
	 * 
	 * @param KalturaHomeNetwork $homeNetwork Home network to add
	 * @return KalturaHomeNetwork
	 */
	function add(KalturaHomeNetwork $homeNetwork)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "homeNetwork", $homeNetwork->toParams());
		$this->client->queueServiceActionCall("homenetwork", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHomeNetwork");
		return $resultObject;
	}

	/**
	 * Delete household’s existing home network
	 * 
	 * @param string $externalId The network to update
	 * @return bool
	 */
	function delete($externalId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "externalId", $externalId);
		$this->client->queueServiceActionCall("homenetwork", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Retrieve the household’s home networks
	 * 
	 * @return KalturaHomeNetworkListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("homenetwork", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHomeNetworkListResponse");
		return $resultObject;
	}

	/**
	 * Update and existing home network for a household
	 * 
	 * @param string $externalId Home network identifier
	 * @param KalturaHomeNetwork $homeNetwork Home network to update
	 * @return KalturaHomeNetwork
	 */
	function update($externalId, KalturaHomeNetwork $homeNetwork)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "externalId", $externalId);
		$this->client->addParam($kparams, "homeNetwork", $homeNetwork->toParams());
		$this->client->queueServiceActionCall("homenetwork", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHomeNetwork");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Creates a household for the user
	 * 
	 * @param KalturaHousehold $household Household object
	 * @return KalturaHousehold
	 */
	function add(KalturaHousehold $household)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "household", $household->toParams());
		$this->client->queueServiceActionCall("household", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHousehold");
		return $resultObject;
	}

	/**
	 * Fully delete a household. Delete all of the household information, including users, devices, transactions and assets.
	 * 
	 * @param int $id Household identifier
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("household", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Returns the household model
	 * 
	 * @param int $id Household identifier
	 * @return KalturaHousehold
	 */
	function get($id = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("household", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHousehold");
		return $resultObject;
	}

	/**
	 * Reset a household’s time limitation for removing user or device
	 * 
	 * @param string $frequencyType Possible values: devices – reset the device change frequency. 
            users – reset the user add/remove frequency
	 * @return KalturaHousehold
	 */
	function resetFrequency($frequencyType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "frequencyType", $frequencyType);
		$this->client->queueServiceActionCall("household", "resetFrequency", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHousehold");
		return $resultObject;
	}

	/**
	 * Resumed a given household service to its previous service settings
	 * 
	 * @return bool
	 */
	function resume()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("household", "resume", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Suspend a given household service. Sets the household status to “suspended&quot;.The household service settings are maintained for later resume
	 * 
	 * @return bool
	 */
	function suspend()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("household", "suspend", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Update the household name and description
	 * 
	 * @param KalturaHousehold $household Household object
	 * @return KalturaHousehold
	 */
	function update(KalturaHousehold $household)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "household", $household->toParams());
		$this->client->queueServiceActionCall("household", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHousehold");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdDeviceService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Registers a device to a household using pin code
	 * 
	 * @param KalturaHouseholdDevice $device Device
	 * @return KalturaHouseholdDevice
	 */
	function add(KalturaHouseholdDevice $device)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "device", $device->toParams());
		$this->client->queueServiceActionCall("householddevice", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdDevice");
		return $resultObject;
	}

	/**
	 * Registers a device to a household using pin code
	 * 
	 * @param string $deviceName Device name
	 * @param string $pin Pin code
	 * @return KalturaHouseholdDevice
	 */
	function addByPin($deviceName, $pin)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "deviceName", $deviceName);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->queueServiceActionCall("householddevice", "addByPin", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdDevice");
		return $resultObject;
	}

	/**
	 * Removes a device from household
	 * 
	 * @param string $udid Device UDID
	 * @return bool
	 */
	function delete($udid)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("householddevice", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Generates device pin to use when adding a device to household by pin
	 * 
	 * @param string $udid Device UDID
	 * @param int $brandId Device brand identifier
	 * @return KalturaDevicePin
	 */
	function generatePin($udid, $brandId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "brandId", $brandId);
		$this->client->queueServiceActionCall("householddevice", "generatePin", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaDevicePin");
		return $resultObject;
	}

	/**
	 * Returns device registration status to the supplied household
	 * 
	 * @return KalturaHouseholdDevice
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("householddevice", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdDevice");
		return $resultObject;
	}

	/**
	 * Update the name of the device by UDID
	 * 
	 * @param string $udid Device UDID
	 * @param KalturaHouseholdDevice $device Device object
	 * @return KalturaHouseholdDevice
	 */
	function update($udid, KalturaHouseholdDevice $device)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "device", $device->toParams());
		$this->client->queueServiceActionCall("householddevice", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdDevice");
		return $resultObject;
	}

	/**
	 * Update the name of the device by UDID
	 * 
	 * @param string $udid Device UDID
	 * @param string $status Device status
	 * @return bool
	 */
	function updateStatus($udid, $status)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("householddevice", "updateStatus", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdLimitationsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get the limitation module by id
	 * 
	 * @param int $id 
	 * @return KalturaHouseholdLimitations
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("householdlimitations", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdLimitations");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPaymentGatewayService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Disable payment-gateway on the household
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @return bool
	 */
	function delete($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Enable a payment-gateway provider for the household.
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @return bool
	 */
	function set($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "set", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Get a household’s billing account identifier (charge ID) for a given payment gateway
	 * 
	 * @param string $paymentGatewayExternalId External identifier for the payment gateway
	 * @return string
	 */
	function getChargeID($paymentGatewayExternalId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayExternalId", $paymentGatewayExternalId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "getChargeID", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Gets the Payment Gateway Configuration for the payment gateway identifier given
	 * 
	 * @param int $paymentGatewayId The payemnt gateway for which to return the registration URL/s for the household. If omitted – return the regisration URL for the household for the default payment gateway
	 * @param string $intent Represent the client’s intent for working with the payment gateway. Intent options to be coordinated with the applicable payment gateway adapter.
	 * @param array $extraParameters Additional parameters to send to the payment gateway adapter.
	 * @return KalturaPaymentGatewayConfiguration
	 */
	function invoke($paymentGatewayId, $intent, array $extraParameters)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "intent", $intent);
		foreach($extraParameters as $index => $obj)
		{
			$this->client->addParam($kparams, "extraParameters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("householdpaymentgateway", "invoke", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentGatewayConfiguration");
		return $resultObject;
	}

	/**
	 * Get a list of all configured Payment Gateways providers available for the account. For each payment is provided with the household associated payment methods.
	 * 
	 * @return KalturaHouseholdPaymentGatewayListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("householdpaymentgateway", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdPaymentGatewayListResponse");
		return $resultObject;
	}

	/**
	 * Set user billing account identifier (charge ID), for a specific household and a specific payment gateway
	 * 
	 * @param string $paymentGatewayExternalId External identifier for the payment gateway
	 * @param string $chargeId The billing user account identifier for this household at the given payment gateway
	 * @return bool
	 */
	function setChargeID($paymentGatewayExternalId, $chargeId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayExternalId", $paymentGatewayExternalId);
		$this->client->addParam($kparams, "chargeId", $chargeId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "setChargeID", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPaymentMethodService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Force remove of a payment method of the household.
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @param int $paymentMethodId Payment method Identifier
	 * @return bool
	 */
	function forceRemove($paymentGatewayId, $paymentMethodId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->queueServiceActionCall("householdpaymentmethod", "forceRemove", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Get a list of all configured Payment Gateways providers available for the account. For each payment is provided with the household associated payment methods.
	 * 
	 * @return KalturaHouseholdPaymentMethodListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("householdpaymentmethod", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdPaymentMethodListResponse");
		return $resultObject;
	}

	/**
	 * Removes a payment method of the household.
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @param int $paymentMethodId Payment method Identifier
	 * @return bool
	 */
	function remove($paymentGatewayId, $paymentMethodId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->queueServiceActionCall("householdpaymentmethod", "remove", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Set a payment method as default for the household.
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @param int $paymentMethodId Payment method Identifier
	 * @return bool
	 */
	function setAsDefault($paymentGatewayId, $paymentMethodId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->queueServiceActionCall("householdpaymentmethod", "setAsDefault", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdPremiumServiceService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns all the premium services allowed for the household
	 * 
	 * @return KalturaHouseholdPremiumServiceListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("householdpremiumservice", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdPremiumServiceListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdQuotaService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns the household&#39;s quota data
	 * 
	 * @return KalturaHouseholdQuota
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("householdquota", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdQuota");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaHouseholdUserService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a user to household
	 * 
	 * @param KalturaHouseholdUser $householdUser User details to add
	 * @return KalturaHouseholdUser
	 */
	function add(KalturaHouseholdUser $householdUser)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "householdUser", $householdUser->toParams());
		$this->client->queueServiceActionCall("householduser", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaHouseholdUser");
		return $resultObject;
	}

	/**
	 * Removes a user from household
	 * 
	 * @param string $userId The identifier of the user to delete
	 * @return bool
	 */
	function delete($userId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("householduser", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaInboxMessageService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * TBD
	 * 
	 * @param string $id Message id
	 * @return KalturaInboxMessage
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("inboxmessage", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaInboxMessage");
		return $resultObject;
	}

	/**
	 * List inbox messages
	 * 
	 * @param KalturaInboxMessageFilter $filter Filter
	 * @param KalturaFilterPager $pager Page size and index
	 * @return KalturaInboxMessageListResponse
	 */
	function listAction(KalturaInboxMessageFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("inboxmessage", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaInboxMessageListResponse");
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @param string $id 
	 * @param string $status 
	 * @return bool
	 */
	function updateStatus($id, $status)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("inboxmessage", "updateStatus", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaLicensedUrlService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Get the URL for playing an asset - EPG or media (not available for recording for now).
	 * 
	 * @param KalturaLicensedUrlBaseRequest $request 
	 * @return KalturaLicensedUrl
	 */
	function get(KalturaLicensedUrlBaseRequest $request)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "request", $request->toParams());
		$this->client->queueServiceActionCall("licensedurl", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLicensedUrl");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaMessageTemplateService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve a message template used in push notifications and inbox
	 * 
	 * @param int $assetType Possible values: Asset type – Series
	 * @return KalturaMessageTemplate
	 */
	function get($assetType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->queueServiceActionCall("messagetemplate", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaMessageTemplate");
		return $resultObject;
	}

	/**
	 * Set the account’s push notifications and inbox messages templates
	 * 
	 * @param int $assetType The asset type to update its template
	 * @param KalturaMessageTemplate $template The actual message with placeholders to be presented to the user
	 * @return KalturaMessageTemplate
	 */
	function update($assetType, KalturaMessageTemplate $template)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "template", $template->toParams());
		$this->client->queueServiceActionCall("messagetemplate", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaMessageTemplate");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaNotificationService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * TBD
	 * 
	 * @return bool
	 */
	function initiateCleanup()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("notification", "initiateCleanup", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @param string $identifier In case type is "announcement", identifier should be the announcement ID. In case type is "system", identifier should be "login" (the login topic)
	 * @param string $type "announcement" - TV-Series topic, "system" - login topic
	 * @return KalturaRegistryResponse
	 */
	function register($identifier, $type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "identifier", $identifier);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("notification", "register", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRegistryResponse");
		return $resultObject;
	}

	/**
	 * Registers the device push token to the push service
	 * 
	 * @param string $pushToken The device-application pair authentication for push delivery
	 * @return bool
	 */
	function setDevicePushToken($pushToken)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "pushToken", $pushToken);
		$this->client->queueServiceActionCall("notification", "setDevicePushToken", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaNotificationsPartnerSettingsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the partner notification settings.
	 * 
	 * @return KalturaNotificationsPartnerSettings
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("notificationspartnersettings", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaNotificationsPartnerSettings");
		return $resultObject;
	}

	/**
	 * Update the account notification settings
	 * 
	 * @param KalturaNotificationsPartnerSettings $settings Account notification settings model
	 * @return bool
	 */
	function update(KalturaNotificationsPartnerSettings $settings)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "settings", $settings->toParams());
		$this->client->queueServiceActionCall("notificationspartnersettings", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaNotificationsSettingsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the user’s notification settings.
	 * 
	 * @return KalturaNotificationsSettings
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("notificationssettings", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaNotificationsSettings");
		return $resultObject;
	}

	/**
	 * Update the user’s notification settings.
	 * 
	 * @param KalturaNotificationsSettings $settings 
	 * @return bool
	 */
	function update(KalturaNotificationsSettings $settings)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "settings", $settings->toParams());
		$this->client->queueServiceActionCall("notificationssettings", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOssAdapterProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new OSS adapter for partner
	 * 
	 * @param KalturaOSSAdapterProfile $ossAdapter OSS adapter Object
	 * @return KalturaOSSAdapterProfile
	 */
	function add(KalturaOSSAdapterProfile $ossAdapter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapter", $ossAdapter->toParams());
		$this->client->queueServiceActionCall("ossadapterprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOSSAdapterProfile");
		return $resultObject;
	}

	/**
	 * Delete OSS adapter by OSS adapter id
	 * 
	 * @param int $ossAdapterId OSS adapter identifier
	 * @return bool
	 */
	function delete($ossAdapterId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapterId", $ossAdapterId);
		$this->client->queueServiceActionCall("ossadapterprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Generate oss adapter shared secret
	 * 
	 * @param int $ossAdapterId OSS adapter identifier
	 * @return KalturaOSSAdapterProfile
	 */
	function generateSharedSecret($ossAdapterId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapterId", $ossAdapterId);
		$this->client->queueServiceActionCall("ossadapterprofile", "generateSharedSecret", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOSSAdapterProfile");
		return $resultObject;
	}

	/**
	 * Update OSS adapter details
	 * 
	 * @param int $ossAdapterId OSS adapter identifier
	 * @param KalturaOSSAdapterProfile $ossAdapter OSS adapter Object
	 * @return KalturaOSSAdapterProfile
	 */
	function update($ossAdapterId, KalturaOSSAdapterProfile $ossAdapter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapterId", $ossAdapterId);
		$this->client->addParam($kparams, "ossAdapter", $ossAdapter->toParams());
		$this->client->queueServiceActionCall("ossadapterprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOSSAdapterProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOttCategoryService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the list of categories (hierarchical) and their associated channels
	 * 
	 * @param int $id Category Identifier
	 * @return KalturaOTTCategory
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("ottcategory", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTCategory");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOttUserService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Activate the account by activation token
	 * 
	 * @param int $partnerId The partner ID
	 * @param string $username Username of the user to activate
	 * @param string $activationToken Activation token of the user
	 * @return KalturaOTTUser
	 */
	function activate($partnerId, $username, $activationToken)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "activationToken", $activationToken);
		$this->client->queueServiceActionCall("ottuser", "activate", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTUser");
		return $resultObject;
	}

	/**
	 * Edit user details.
	 * 
	 * @param bigint $roleId The role identifier to add
	 * @return bool
	 */
	function addRole($roleId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "roleId", $roleId);
		$this->client->queueServiceActionCall("ottuser", "addRole", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Returns tokens (KS and refresh token) for anonymous access
	 * 
	 * @param int $partnerId The partner ID
	 * @param string $udid The caller device's UDID
	 * @return KalturaLoginSession
	 */
	function anonymousLogin($partnerId, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "anonymousLogin", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLoginSession");
		return $resultObject;
	}

	/**
	 * Permanently delete a user. User to delete cannot be an exclusive household master, and cannot be default user.
	 * 
	 * @return bool
	 */
	function delete()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Retrieving users&#39; data
	 * 
	 * @return KalturaOTTUser
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTUser");
		return $resultObject;
	}

	/**
	 * Resend the activation token to a user
	 * 
	 * @return KalturaStringValue
	 */
	function getEncryptedUserId()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "getEncryptedUserId", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaStringValue");
		return $resultObject;
	}

	/**
	 * Retrieve user by external identifier or username
	 * 
	 * @param KalturaOTTUserFilter $filter Filter request
	 * @return KalturaOTTUserListResponse
	 */
	function listAction(KalturaOTTUserFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("ottuser", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTUserListResponse");
		return $resultObject;
	}

	/**
	 * User sign-in via a time-expired sign-in PIN.
	 * 
	 * @param int $partnerId Partner Identifier
	 * @param string $username User name
	 * @param string $password Password
	 * @param map $extraParams Extra params
	 * @param string $udid Device UDID
	 * @return KalturaLoginResponse
	 */
	function login($partnerId, $username = null, $password = null, array $extraParams = null, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "password", $password);
		if ($extraParams !== null)
			$this->client->addParam($kparams, "extraParams", $extraParams->toParams());
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "login", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLoginResponse");
		return $resultObject;
	}

	/**
	 * User sign-in via a time-expired sign-in PIN.
	 * 
	 * @param int $partnerId Partner Identifier
	 * @param string $pin Pin code
	 * @param string $udid Device UDID
	 * @param string $secret Additional security parameter to validate the login
	 * @return KalturaLoginResponse
	 */
	function loginWithPin($partnerId, $pin, $udid = null, $secret = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->queueServiceActionCall("ottuser", "loginWithPin", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLoginResponse");
		return $resultObject;
	}

	/**
	 * Logout the calling user.
	 * 
	 * @return bool
	 */
	function logout()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "logout", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Returns new Kaltura session (ks) for the user, using the supplied refresh_token (only if it&#39;s valid and not expired)
	 * 
	 * @param string $refreshToken Refresh token
	 * @param string $udid Device UDID
	 * @return KalturaLoginSession
	 */
	function refreshSession($refreshToken, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "refreshToken", $refreshToken);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "refreshSession", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLoginSession");
		return $resultObject;
	}

	/**
	 * Sign up a new user.
	 * 
	 * @param int $partnerId Partner identifier
	 * @param KalturaOTTUser $user The user model to add
	 * @param string $password Password
	 * @return KalturaOTTUser
	 */
	function register($partnerId, KalturaOTTUser $user, $password)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "register", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTUser");
		return $resultObject;
	}

	/**
	 * Resend the activation token to a user
	 * 
	 * @param int $partnerId The partner ID
	 * @param string $username Username of the user to activate
	 * @return bool
	 */
	function resendActivationToken($partnerId, $username)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->queueServiceActionCall("ottuser", "resendActivationToken", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Send an e-mail with URL to enable the user to set new password.
	 * 
	 * @param int $partnerId Partner Identifier
	 * @param string $username User name
	 * @return bool
	 */
	function resetPassword($partnerId, $username)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->queueServiceActionCall("ottuser", "resetPassword", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Renew the user&#39;s password after validating the token that sent as part of URL in e-mail.
	 * 
	 * @param int $partnerId Partner Identifier
	 * @param string $token Token that sent by e-mail
	 * @param string $password New password
	 * @return KalturaOTTUser
	 */
	function setInitialPassword($partnerId, $token, $password)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "setInitialPassword", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTUser");
		return $resultObject;
	}

	/**
	 * Given a user name and existing password, change to a new password.
	 * 
	 * @param KalturaOTTUser $user UserData Object (include basic and dynamic data)
	 * @return KalturaOTTUser
	 */
	function update(KalturaOTTUser $user)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("ottuser", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaOTTUser");
		return $resultObject;
	}

	/**
	 * Given a user name and existing password, change to a new password.
	 * 
	 * @param string $username User name
	 * @param string $oldPassword Old password
	 * @param string $newPassword New password
	 * @return bool
	 */
	function updateLoginData($username, $oldPassword, $newPassword)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "oldPassword", $oldPassword);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("ottuser", "updateLoginData", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaParentalRuleService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Disables a parental rule that was previously defined by the household master. Disable can be at specific user or household level.
	 * 
	 * @param bigint $ruleId Rule Identifier
	 * @param string $entityReference Reference type to filter by
	 * @return bool
	 */
	function disable($ruleId, $entityReference)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->queueServiceActionCall("parentalrule", "disable", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Disables a parental rule that was defined at account level. Disable can be at specific user or household level.
	 * 
	 * @param string $entityReference Reference type to filter by
	 * @return bool
	 */
	function disableDefault($entityReference)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->queueServiceActionCall("parentalrule", "disableDefault", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Enable a parental rules for a user
	 * 
	 * @param bigint $ruleId Rule Identifier
	 * @param string $entityReference Reference type to filter by
	 * @return bool
	 */
	function enable($ruleId, $entityReference)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->queueServiceActionCall("parentalrule", "enable", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Return the parental rules that applies for the user or household. Can include rules that have been associated in account, household, or user level.
            Association level is also specified in the response.
	 * 
	 * @param KalturaParentalRuleFilter $filter Filter
	 * @return KalturaParentalRuleListResponse
	 */
	function listAction(KalturaParentalRuleFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("parentalrule", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaParentalRuleListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPartnerConfigurationService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Update Partner Configuration
	 * 
	 * @param KalturaPartnerConfiguration $configuration Partner Configuration
            possible configuration type: 
            "configuration": { "value": 0, "partner_configuration_type": { "type": "OSSAdapter", "objectType": "KalturaPartnerConfigurationHolder" },
            "objectType": "KalturaBillingPartnerConfig"}
	 * @return bool
	 */
	function update(KalturaPartnerConfiguration $configuration)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("partnerconfiguration", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentGatewayProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new payment gateway for partner
	 * 
	 * @param KalturaPaymentGatewayProfile $paymentGateway Payment Gateway Object
	 * @return KalturaPaymentGatewayProfile
	 */
	function add(KalturaPaymentGatewayProfile $paymentGateway)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGateway", $paymentGateway->toParams());
		$this->client->queueServiceActionCall("paymentgatewayprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentGatewayProfile");
		return $resultObject;
	}

	/**
	 * Delete payment gateway by payment gateway id
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @return bool
	 */
	function delete($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("paymentgatewayprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Generate payment gateway shared secret
	 * 
	 * @param int $paymentGatewayId Payment gateway identifier
	 * @return KalturaPaymentGatewayProfile
	 */
	function generateSharedSecret($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("paymentgatewayprofile", "generateSharedSecret", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentGatewayProfile");
		return $resultObject;
	}

	/**
	 * Gets the Payment Gateway Configuration for the payment gateway identifier given
	 * 
	 * @param string $alias The payemnt gateway for which to return the registration URL/s for the household. If omitted – return the regisration URL for the household for the default payment gateway
	 * @param string $intent Represent the client’s intent for working with the payment gateway. Intent options to be coordinated with the applicable payment gateway adapter.
	 * @param array $extraParameters Additional parameters to send to the payment gateway adapter.
	 * @return KalturaPaymentGatewayConfiguration
	 */
	function getConfiguration($alias, $intent, array $extraParameters)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "alias", $alias);
		$this->client->addParam($kparams, "intent", $intent);
		foreach($extraParameters as $index => $obj)
		{
			$this->client->addParam($kparams, "extraParameters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("paymentgatewayprofile", "getConfiguration", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentGatewayConfiguration");
		return $resultObject;
	}

	/**
	 * Returns all payment gateways for partner : id + name
	 * 
	 * @return KalturaPaymentGatewayProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("paymentgatewayprofile", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentGatewayProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update payment gateway details
	 * 
	 * @param int $paymentGatewayId Payment Gateway Identifier
	 * @param KalturaPaymentGatewayProfile $paymentGateway Payment Gateway Object
	 * @return KalturaPaymentGatewayProfile
	 */
	function update($paymentGatewayId, KalturaPaymentGatewayProfile $paymentGateway)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "paymentGateway", $paymentGateway->toParams());
		$this->client->queueServiceActionCall("paymentgatewayprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentGatewayProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPaymentMethodProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * TBD
	 * 
	 * @param KalturaPaymentMethodProfile $paymentMethod Payment method to add
	 * @return KalturaPaymentMethodProfile
	 */
	function add(KalturaPaymentMethodProfile $paymentMethod)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentMethod", $paymentMethod->toParams());
		$this->client->queueServiceActionCall("paymentmethodprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentMethodProfile");
		return $resultObject;
	}

	/**
	 * Delete payment method profile
	 * 
	 * @param int $paymentMethodId Payment method identifier to delete
	 * @return bool
	 */
	function delete($paymentMethodId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->queueServiceActionCall("paymentmethodprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @param KalturaPaymentMethodProfileFilter $filter Payment gateway method profile filter
	 * @return KalturaPaymentMethodProfileListResponse
	 */
	function listAction(KalturaPaymentMethodProfileFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("paymentmethodprofile", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentMethodProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update payment method
	 * 
	 * @param int $paymentMethodId Payment method identifier to update
	 * @param KalturaPaymentMethodProfile $paymentMethod Payment method to update
	 * @return KalturaPaymentMethodProfile
	 */
	function update($paymentMethodId, KalturaPaymentMethodProfile $paymentMethod)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->addParam($kparams, "paymentMethod", $paymentMethod->toParams());
		$this->client->queueServiceActionCall("paymentmethodprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPaymentMethodProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPersonalFeedService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * List user&#39;s feeds.
            Possible status codes:
	 * 
	 * @param KalturaPersonalFeedFilter $filter Required sort option to apply for the identified assets. If omitted – will use relevancy.
            Possible values: relevancy, a_to_z, z_to_a, views, ratings, votes, newest.
	 * @param KalturaFilterPager $pager Page size and index
	 * @return KalturaPersonalFeedListResponse
	 */
	function listAction(KalturaPersonalFeedFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("personalfeed", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPersonalFeedListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPinService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the parental or purchase PIN that applies for the household or user. Includes specification of where the PIN was defined at – account, household or user  level
	 * 
	 * @param string $by Reference type to filter by
	 * @param string $type The PIN type to retrieve
	 * @param int $ruleId Rule ID - for PIN per rule (MediaCorp): BEO-1923
	 * @return KalturaPin
	 */
	function get($by, $type, $ruleId = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "by", $by);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("pin", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPin");
		return $resultObject;
	}

	/**
	 * Set the parental or purchase PIN that applies for the user or the household.
	 * 
	 * @param string $by Reference type to filter by
	 * @param string $type The PIN type to retrieve
	 * @param KalturaPin $pin PIN to set
	 * @param int $ruleId Rule ID - for PIN per rule (MediaCorp): BEO-1923
	 * @return KalturaPin
	 */
	function update($by, $type, KalturaPin $pin, $ruleId = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "by", $by);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "pin", $pin->toParams());
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("pin", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPin");
		return $resultObject;
	}

	/**
	 * Validate a purchase or parental PIN for a user.
	 * 
	 * @param string $pin PIN to validate
	 * @param string $type The PIN type to retrieve
	 * @param int $ruleId Rule ID - for PIN per rule (MediaCorp): BEO-1923
	 * @return bool
	 */
	function validate($pin, $type, $ruleId = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("pin", "validate", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPpvService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns ppv object by internal identifier
	 * 
	 * @param bigint $id Ppv identifier
	 * @return KalturaPpv
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("ppv", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPpv");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaProductPriceService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns a price and a purchase status for each subscription or/and media file, for a given user (if passed) and with the consideration of a coupon code (if passed).
	 * 
	 * @param KalturaProductPriceFilter $filter Request filter
	 * @return KalturaProductPriceListResponse
	 */
	function listAction(KalturaProductPriceFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("productprice", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaProductPriceListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaPurchaseSettingsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the purchase settings.
            Includes specification of where these settings were defined – account, household or user
	 * 
	 * @param string $by Reference type to filter by
	 * @return KalturaPurchaseSettings
	 */
	function get($by)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "by", $by);
		$this->client->queueServiceActionCall("purchasesettings", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPurchaseSettings");
		return $resultObject;
	}

	/**
	 * Set a purchase PIN for the household or user
	 * 
	 * @param string $entityReference Reference type to filter by
	 * @param KalturaPurchaseSettings $settings New settings to apply
	 * @return KalturaPurchaseSettings
	 */
	function update($entityReference, KalturaPurchaseSettings $settings)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->addParam($kparams, "settings", $settings->toParams());
		$this->client->queueServiceActionCall("purchasesettings", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaPurchaseSettings");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecommendationProfileService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new recommendation engine for partner
	 * 
	 * @param KalturaRecommendationProfile $recommendationEngine Recommendation engine Object
	 * @return KalturaRecommendationProfile
	 */
	function add(KalturaRecommendationProfile $recommendationEngine)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recommendationEngine", $recommendationEngine->toParams());
		$this->client->queueServiceActionCall("recommendationprofile", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecommendationProfile");
		return $resultObject;
	}

	/**
	 * Delete recommendation engine by recommendation engine id
	 * 
	 * @param int $id Recommendation engine Identifier
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recommendationprofile", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Generate recommendation engine  shared secret
	 * 
	 * @param int $recommendationEngineId Recommendation engine Identifier
	 * @return KalturaRecommendationProfile
	 */
	function generateSharedSecret($recommendationEngineId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recommendationEngineId", $recommendationEngineId);
		$this->client->queueServiceActionCall("recommendationprofile", "generateSharedSecret", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecommendationProfile");
		return $resultObject;
	}

	/**
	 * Returns all recommendation engines for partner
	 * 
	 * @return KalturaRecommendationProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("recommendationprofile", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecommendationProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update recommendation engine details
	 * 
	 * @param int $recommendationEngineId Recommendation engine identifier
	 * @param KalturaRecommendationProfile $recommendationEngine Recommendation engine Object
	 * @return KalturaRecommendationProfile
	 */
	function update($recommendationEngineId, KalturaRecommendationProfile $recommendationEngine)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recommendationEngineId", $recommendationEngineId);
		$this->client->addParam($kparams, "recommendationEngine", $recommendationEngine->toParams());
		$this->client->queueServiceActionCall("recommendationprofile", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecommendationProfile");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRecordingService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Issue a record request for a program
	 * 
	 * @param KalturaRecording $recording Recording Object
	 * @return KalturaRecording
	 */
	function add(KalturaRecording $recording)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("recording", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecording");
		return $resultObject;
	}

	/**
	 * Cancel a previously requested recording. Cancel recording can be called for recording in status Scheduled or Recording Only
	 * 
	 * @param bigint $id Recording identifier
	 * @return KalturaRecording
	 */
	function cancel($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "cancel", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecording");
		return $resultObject;
	}

	/**
	 * Delete one or more user recording(s). Delete recording can be called only for recordings in status Recorded
	 * 
	 * @param bigint $id Recording identifier
	 * @return KalturaRecording
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecording");
		return $resultObject;
	}

	/**
	 * Returns recording object by internal identifier
	 * 
	 * @param bigint $id Recording identifier
	 * @return KalturaRecording
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecording");
		return $resultObject;
	}

	/**
	 * Return a list of recordings for the household with optional filter by status and KSQL.
	 * 
	 * @param KalturaRecordingFilter $filter Filter parameters for filtering out the result
	 * @param KalturaFilterPager $pager Page size and index
	 * @return KalturaRecordingListResponse
	 */
	function listAction(KalturaRecordingFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("recording", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecordingListResponse");
		return $resultObject;
	}

	/**
	 * Protects an existing recording from the cleanup process for the defined protection period
	 * 
	 * @param bigint $id Recording identifier
	 * @return KalturaRecording
	 */
	function protect($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "protect", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRecording");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegionService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns all regions for the partner
	 * 
	 * @param KalturaRegionFilter $filter 
	 * @return KalturaRegionListResponse
	 */
	function listAction(KalturaRegionFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("region", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRegionListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaRegistrySettingsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the registry settings.
	 * 
	 * @return KalturaRegistrySettingsListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("registrysettings", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaRegistrySettingsListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSeriesRecordingService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Issue a record request for a complete season or series
	 * 
	 * @param KalturaSeriesRecording $recording SeriesRecording Object
	 * @return KalturaSeriesRecording
	 */
	function add(KalturaSeriesRecording $recording)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("seriesrecording", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecording");
		return $resultObject;
	}

	/**
	 * Cancel a previously requested series recording. Cancel series recording can be called for recording in status Scheduled or Recording Only
	 * 
	 * @param bigint $id Series Recording identifier
	 * @return KalturaSeriesRecording
	 */
	function cancel($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("seriesrecording", "cancel", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecording");
		return $resultObject;
	}

	/**
	 * Cancel EPG recording that was recorded as part of series
	 * 
	 * @param bigint $id Series Recording identifier
	 * @param bigint $epgId Epg program identifier
	 * @return KalturaSeriesRecording
	 */
	function cancelByEpgId($id, $epgId)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "epgId", $epgId);
		$this->client->queueServiceActionCall("seriesrecording", "cancelByEpgId", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecording");
		return $resultObject;
	}

	/**
	 * Cancel Season recording epgs that was recorded as part of series
	 * 
	 * @param bigint $id Series Recording identifier
	 * @param bigint $seasonNumber Season Number
	 * @return KalturaSeriesRecording
	 */
	function cancelBySeasonNumber($id, $seasonNumber)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "seasonNumber", $seasonNumber);
		$this->client->queueServiceActionCall("seriesrecording", "cancelBySeasonNumber", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecording");
		return $resultObject;
	}

	/**
	 * Delete series recording(s). Delete series recording can be called recordings in any status
	 * 
	 * @param bigint $id Series Recording identifier
	 * @return KalturaSeriesRecording
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("seriesrecording", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecording");
		return $resultObject;
	}

	/**
	 * Delete Season recording epgs that was recorded as part of series
	 * 
	 * @param bigint $id Series Recording identifier
	 * @param int $seasonNumber Season Number
	 * @return KalturaSeriesRecording
	 */
	function deleteBySeasonNumber($id, $seasonNumber)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "seasonNumber", $seasonNumber);
		$this->client->queueServiceActionCall("seriesrecording", "deleteBySeasonNumber", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecording");
		return $resultObject;
	}

	/**
	 * Return a list of series recordings for the household with optional filter by status and KSQL.
	 * 
	 * @param KalturaSeriesRecordingFilter $filter Filter parameters for filtering out the result - support order by only - START_DATE_ASC, START_DATE_DESC, ID_ASC,ID_DESC,SERIES_ID_ASC, SERIES_ID_DESC
	 * @return KalturaSeriesRecordingListResponse
	 */
	function listAction(KalturaSeriesRecordingFilter $filter = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("seriesrecording", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSeriesRecordingListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSessionService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Parses KS
	 * 
	 * @param string $session Additional KS to parse, if not passed the user's KS will be parsed
	 * @return KalturaSession
	 */
	function get($session = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "session", $session);
		$this->client->queueServiceActionCall("session", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSession");
		return $resultObject;
	}

	/**
	 * Switching the user in the session by generating a new session for a new user within the same household
	 * 
	 * @param string $userIdToSwitch The identifier of the user to change
	 * @return KalturaLoginSession
	 */
	function switchUser($userIdToSwitch)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "userIdToSwitch", $userIdToSwitch);
		$this->client->queueServiceActionCall("session", "switchUser", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLoginSession");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSocialService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Return the user object with social information according to a provided external social token
	 * 
	 * @param string $type Social network type
	 * @return KalturaSocial
	 */
	function get($type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSocial");
		return $resultObject;
	}

	/**
	 * Return the user object with social information according to a provided external social token
	 * 
	 * @param int $partnerId Partner identifier
	 * @param string $token Social token
	 * @param string $type Social network type
	 * @return KalturaSocial
	 */
	function getByToken($partnerId, $token, $type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "getByToken", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSocial");
		return $resultObject;
	}

	/**
	 * Retrieve the social network’s configuration information
	 * 
	 * @param int $partnerId Partner identifier
	 * @param string $type Social network type
	 * @return KalturaSocialConfig
	 */
	function getConfiguration($partnerId, $type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "getConfiguration", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSocialConfig");
		return $resultObject;
	}

	/**
	 * Login using social token
	 * 
	 * @param int $partnerId Partner identifier
	 * @param string $token Social token
	 * @param string $type Social network
	 * @param string $udid Device UDID
	 * @return KalturaLoginResponse
	 */
	function login($partnerId, $token, $type, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("social", "login", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaLoginResponse");
		return $resultObject;
	}

	/**
	 * Connect an existing user in the system to an external social network user
	 * 
	 * @param string $token Social token
	 * @param string $type Social network type
	 * @return KalturaSocial
	 */
	function merge($token, $type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "merge", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSocial");
		return $resultObject;
	}

	/**
	 * Create a new user in the system using a provided external social token
	 * 
	 * @param int $partnerId Partner identifier
	 * @param string $token Social token
	 * @param string $type Social network type
	 * @return KalturaSocial
	 */
	function register($partnerId, $token, $type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "register", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSocial");
		return $resultObject;
	}

	/**
	 * Disconnect an existing user in the system from its external social network user
	 * 
	 * @param string $type Social network type
	 * @return KalturaSocial
	 */
	function unmerge($type)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "unmerge", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSocial");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSubscriptionService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns a list of subscriptions requested by Subscription ID or file ID
	 * 
	 * @param KalturaSubscriptionFilter $filter Filter request
	 * @return KalturaSubscriptionListResponse
	 */
	function listAction(KalturaSubscriptionFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("subscription", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaSubscriptionListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaSystemService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Returns country details by the provided IP, if not provided - by the client IP
	 * 
	 * @param string $ip IP
	 * @return KalturaCountry
	 */
	function getCountry($ip = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "ip", $ip);
		$this->client->queueServiceActionCall("system", "getCountry", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaCountry");
		return $resultObject;
	}

	/**
	 * Returns current server timestamp
	 * 
	 * @return bigint
	 */
	function getTime()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("system", "getTime", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "double");
		return $resultObject;
	}

	/**
	 * Returns current server version
	 * 
	 * @return string
	 */
	function getVersion()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("system", "getVersion", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	/**
	 * Returns true
	 * 
	 * @return bool
	 */
	function ping()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("system", "ping", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTimeShiftedTvPartnerSettingsService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the account’s time-shifted TV settings (catch-up and C-DVR, Trick-play, Start-over)
	 * 
	 * @return KalturaTimeShiftedTvPartnerSettings
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("timeshiftedtvpartnersettings", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaTimeShiftedTvPartnerSettings");
		return $resultObject;
	}

	/**
	 * Configure the account’s time-shifted TV settings (catch-up and C-DVR, Trick-play, Start-over)
	 * 
	 * @param KalturaTimeShiftedTvPartnerSettings $settings 
	 * @return bool
	 */
	function update(KalturaTimeShiftedTvPartnerSettings $settings)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "settings", $settings->toParams());
		$this->client->queueServiceActionCall("timeshiftedtvpartnersettings", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTopicService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * TBD
	 * 
	 * @param int $id Topic identifier
	 * @return bool
	 */
	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("topic", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @param int $id Topic id
	 * @return KalturaTopic
	 */
	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("topic", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaTopic");
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @param KalturaTopicFilter $filter Topics filter
	 * @param KalturaFilterPager $pager Page size and index
	 * @return KalturaTopicListResponse
	 */
	function listAction(KalturaTopicFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("topic", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaTopicListResponse");
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @param int $id 
	 * @param string $automaticIssueNotification 
	 * @return bool
	 */
	function updateStatus($id, $automaticIssueNotification)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "automaticIssueNotification", $automaticIssueNotification);
		$this->client->queueServiceActionCall("topic", "updateStatus", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTransactionService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve the purchase session identifier
	 * 
	 * @param KalturaPurchaseSession $purchaseSession Purchase properties
	 * @return bigint
	 */
	function getPurchaseSessionId(KalturaPurchaseSession $purchaseSession)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "purchaseSession", $purchaseSession->toParams());
		$this->client->queueServiceActionCall("transaction", "getPurchaseSessionId", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "double");
		return $resultObject;
	}

	/**
	 * Purchase specific product or subscription for a household. Upon successful charge entitlements to use the requested product or subscription are granted.
	 * 
	 * @param KalturaPurchase $purchase Purchase properties
	 * @return KalturaTransaction
	 */
	function purchase(KalturaPurchase $purchase)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "purchase", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaTransaction");
		return $resultObject;
	}

	/**
	 * This method shall set the waiver flag on the user entitlement table and the waiver date field to the current date.
	 * 
	 * @param int $assetId Asset identifier
	 * @param string $transactionType The transaction type
	 * @return bool
	 */
	function setWaiver($assetId, $transactionType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("transaction", "setWaiver", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Updates a pending purchase transaction state.
	 * 
	 * @param string $paymentGatewayId Payment gateway identifier
	 * @param string $externalTransactionId External transaction identifier
	 * @param string $signature Security signature to validate the caller is a payment gateway adapter application
	 * @param KalturaTransactionStatus $status Status properties
	 */
	function updateStatus($paymentGatewayId, $externalTransactionId, $signature, KalturaTransactionStatus $status)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "externalTransactionId", $externalTransactionId);
		$this->client->addParam($kparams, "signature", $signature);
		$this->client->addParam($kparams, "status", $status->toParams());
		$this->client->queueServiceActionCall("transaction", "updateStatus", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
	}

	/**
	 * Verifies PPV/Subscription/Collection client purchase (such as InApp) and entitles the user.
	 * 
	 * @param KalturaExternalReceipt $externalReceipt Receipt properties
	 * @return KalturaTransaction
	 */
	function validateReceipt(KalturaExternalReceipt $externalReceipt)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "externalReceipt", $externalReceipt->toParams());
		$this->client->queueServiceActionCall("transaction", "validateReceipt", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaTransaction");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaTransactionHistoryService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Gets user or household transaction history.
	 * 
	 * @param KalturaTransactionHistoryFilter $filter Filter by household or user
	 * @param KalturaFilterPager $pager Page size and index
	 * @return KalturaBillingTransactionListResponse
	 */
	function listAction(KalturaTransactionHistoryFilter $filter = null, KalturaFilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("transactionhistory", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaBillingTransactionListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserAssetRuleService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieve all the rules (parental, geo, device or user-type) that applies for this user and asset.
	 * 
	 * @param KalturaUserAssetRuleFilter $filter Filter
	 * @return KalturaUserAssetRuleListResponse
	 */
	function listAction(KalturaUserAssetRuleFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("userassetrule", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserAssetRuleListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserAssetsListItemService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new item to user’s private asset list
	 * 
	 * @param KalturaUserAssetsListItem $userAssetsListItem A list item to add
	 * @return KalturaUserAssetsListItem
	 */
	function add(KalturaUserAssetsListItem $userAssetsListItem)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "userAssetsListItem", $userAssetsListItem->toParams());
		$this->client->queueServiceActionCall("userassetslistitem", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserAssetsListItem");
		return $resultObject;
	}

	/**
	 * Deletes an item from user’s private asset list
	 * 
	 * @param string $assetId Asset id to delete
	 * @param string $listType Asset list type to delete from
	 * @return bool
	 */
	function delete($assetId, $listType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "listType", $listType);
		$this->client->queueServiceActionCall("userassetslistitem", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Get an item from user’s private asset list
	 * 
	 * @param string $assetId Asset id to get
	 * @param string $listType Asset list type to get from
	 * @param string $itemType Item type to get
	 * @return KalturaUserAssetsListItem
	 */
	function get($assetId, $listType, $itemType)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "listType", $listType);
		$this->client->addParam($kparams, "itemType", $itemType);
		$this->client->queueServiceActionCall("userassetslistitem", "get", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserAssetsListItem");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserLoginPinService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Generate a time and usage expiry login-PIN that can allow a single login per PIN. If an active login-PIN already exists. Calling this API again for same user will add another login-PIN
	 * 
	 * @param string $secret Additional security parameter for optional enhanced security
	 * @return KalturaUserLoginPin
	 */
	function add($secret = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->queueServiceActionCall("userloginpin", "add", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserLoginPin");
		return $resultObject;
	}

	/**
	 * Immediately expire all active login-PINs for a user
	 * 
	 * @param string $pinCode Login pin code to expire
	 * @return bool
	 */
	function delete($pinCode)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "pinCode", $pinCode);
		$this->client->queueServiceActionCall("userloginpin", "delete", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Immediately expire all active login-PINs for a user
	 * 
	 * @return bool
	 */
	function deleteAll()
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("userloginpin", "deleteAll", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}

	/**
	 * Set a time and usage expiry login-PIN that can allow a single login per PIN. If an active login-PIN already exists. Calling this API again for same user will add another login-PIN
	 * 
	 * @param string $pinCode Device Identifier
	 * @param string $secret Additional security parameter to validate the login
	 * @return KalturaUserLoginPin
	 */
	function update($pinCode, $secret = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "pinCode", $pinCode);
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->queueServiceActionCall("userloginpin", "update", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserLoginPin");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaUserRoleService extends KalturaServiceBase
{
	function __construct(KalturaClient $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Retrieving user roles by identifiers, if filter is empty, returns all partner roles
	 * 
	 * @param KalturaUserRoleFilter $filter 
	 * @return KalturaUserRoleListResponse
	 */
	function listAction(KalturaUserRoleFilter $filter = null)
	{
		if ($this->client->isMultiRequest())
			throw new KalturaClientException("Action is not supported as part of multi-request.", KalturaClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("userrole", "list", $kparams);
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "KalturaUserRoleListResponse");
		return $resultObject;
	}
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaClient extends KalturaClientBase
{
	/**
	 * 
	 * @var KalturaAnnouncementService
	 */
	public $announcement = null;

	/**
	 * 
	 * @var KalturaAppTokenService
	 */
	public $appToken = null;

	/**
	 * 
	 * @var KalturaAssetCommentService
	 */
	public $assetComment = null;

	/**
	 * 
	 * @var KalturaAssetService
	 */
	public $asset = null;

	/**
	 * 
	 * @var KalturaAssetFileService
	 */
	public $assetFile = null;

	/**
	 * 
	 * @var KalturaAssetHistoryService
	 */
	public $assetHistory = null;

	/**
	 * 
	 * @var KalturaAssetStatisticsService
	 */
	public $assetStatistics = null;

	/**
	 * 
	 * @var KalturaBookmarkService
	 */
	public $bookmark = null;

	/**
	 * 
	 * @var KalturaCdnAdapterProfileService
	 */
	public $cdnAdapterProfile = null;

	/**
	 * 
	 * @var KalturaCdnPartnerSettingsService
	 */
	public $cdnPartnerSettings = null;

	/**
	 * 
	 * @var KalturaCDVRAdapterProfileService
	 */
	public $cDVRAdapterProfile = null;

	/**
	 * 
	 * @var KalturaChannelService
	 */
	public $channel = null;

	/**
	 * 
	 * @var KalturaCouponService
	 */
	public $coupon = null;

	/**
	 * 
	 * @var KalturaEntitlementService
	 */
	public $entitlement = null;

	/**
	 * 
	 * @var KalturaExportTaskService
	 */
	public $exportTask = null;

	/**
	 * 
	 * @var KalturaExternalChannelProfileService
	 */
	public $externalChannelProfile = null;

	/**
	 * 
	 * @var KalturaFavoriteService
	 */
	public $favorite = null;

	/**
	 * 
	 * @var KalturaFollowTvSeriesService
	 */
	public $followTvSeries = null;

	/**
	 * 
	 * @var KalturaHomeNetworkService
	 */
	public $homeNetwork = null;

	/**
	 * 
	 * @var KalturaHouseholdService
	 */
	public $household = null;

	/**
	 * 
	 * @var KalturaHouseholdDeviceService
	 */
	public $householdDevice = null;

	/**
	 * 
	 * @var KalturaHouseholdLimitationsService
	 */
	public $householdLimitations = null;

	/**
	 * 
	 * @var KalturaHouseholdPaymentGatewayService
	 */
	public $householdPaymentGateway = null;

	/**
	 * 
	 * @var KalturaHouseholdPaymentMethodService
	 */
	public $householdPaymentMethod = null;

	/**
	 * 
	 * @var KalturaHouseholdPremiumServiceService
	 */
	public $householdPremiumService = null;

	/**
	 * 
	 * @var KalturaHouseholdQuotaService
	 */
	public $householdQuota = null;

	/**
	 * 
	 * @var KalturaHouseholdUserService
	 */
	public $householdUser = null;

	/**
	 * 
	 * @var KalturaInboxMessageService
	 */
	public $inboxMessage = null;

	/**
	 * 
	 * @var KalturaLicensedUrlService
	 */
	public $licensedUrl = null;

	/**
	 * 
	 * @var KalturaMessageTemplateService
	 */
	public $messageTemplate = null;

	/**
	 * 
	 * @var KalturaNotificationService
	 */
	public $notification = null;

	/**
	 * 
	 * @var KalturaNotificationsPartnerSettingsService
	 */
	public $notificationsPartnerSettings = null;

	/**
	 * 
	 * @var KalturaNotificationsSettingsService
	 */
	public $notificationsSettings = null;

	/**
	 * 
	 * @var KalturaOssAdapterProfileService
	 */
	public $ossAdapterProfile = null;

	/**
	 * 
	 * @var KalturaOttCategoryService
	 */
	public $ottCategory = null;

	/**
	 * 
	 * @var KalturaOttUserService
	 */
	public $ottUser = null;

	/**
	 * 
	 * @var KalturaParentalRuleService
	 */
	public $parentalRule = null;

	/**
	 * 
	 * @var KalturaPartnerConfigurationService
	 */
	public $partnerConfiguration = null;

	/**
	 * 
	 * @var KalturaPaymentGatewayProfileService
	 */
	public $paymentGatewayProfile = null;

	/**
	 * 
	 * @var KalturaPaymentMethodProfileService
	 */
	public $paymentMethodProfile = null;

	/**
	 * 
	 * @var KalturaPersonalFeedService
	 */
	public $personalFeed = null;

	/**
	 * 
	 * @var KalturaPinService
	 */
	public $pin = null;

	/**
	 * 
	 * @var KalturaPpvService
	 */
	public $ppv = null;

	/**
	 * 
	 * @var KalturaProductPriceService
	 */
	public $productPrice = null;

	/**
	 * 
	 * @var KalturaPurchaseSettingsService
	 */
	public $purchaseSettings = null;

	/**
	 * 
	 * @var KalturaRecommendationProfileService
	 */
	public $recommendationProfile = null;

	/**
	 * 
	 * @var KalturaRecordingService
	 */
	public $recording = null;

	/**
	 * 
	 * @var KalturaRegionService
	 */
	public $region = null;

	/**
	 * 
	 * @var KalturaRegistrySettingsService
	 */
	public $registrySettings = null;

	/**
	 * 
	 * @var KalturaSeriesRecordingService
	 */
	public $seriesRecording = null;

	/**
	 * 
	 * @var KalturaSessionService
	 */
	public $session = null;

	/**
	 * 
	 * @var KalturaSocialService
	 */
	public $social = null;

	/**
	 * 
	 * @var KalturaSubscriptionService
	 */
	public $subscription = null;

	/**
	 * 
	 * @var KalturaSystemService
	 */
	public $system = null;

	/**
	 * 
	 * @var KalturaTimeShiftedTvPartnerSettingsService
	 */
	public $timeShiftedTvPartnerSettings = null;

	/**
	 * 
	 * @var KalturaTopicService
	 */
	public $topic = null;

	/**
	 * 
	 * @var KalturaTransactionService
	 */
	public $transaction = null;

	/**
	 * 
	 * @var KalturaTransactionHistoryService
	 */
	public $transactionHistory = null;

	/**
	 * 
	 * @var KalturaUserAssetRuleService
	 */
	public $userAssetRule = null;

	/**
	 * 
	 * @var KalturaUserAssetsListItemService
	 */
	public $userAssetsListItem = null;

	/**
	 * 
	 * @var KalturaUserLoginPinService
	 */
	public $userLoginPin = null;

	/**
	 * 
	 * @var KalturaUserRoleService
	 */
	public $userRole = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param KalturaConfiguration $config
	 */
	public function __construct(KalturaConfiguration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:17-07-05');
		$this->setApiVersion('3.6.287.20330');
		
		$this->announcement = new KalturaAnnouncementService($this);
		$this->appToken = new KalturaAppTokenService($this);
		$this->assetComment = new KalturaAssetCommentService($this);
		$this->asset = new KalturaAssetService($this);
		$this->assetFile = new KalturaAssetFileService($this);
		$this->assetHistory = new KalturaAssetHistoryService($this);
		$this->assetStatistics = new KalturaAssetStatisticsService($this);
		$this->bookmark = new KalturaBookmarkService($this);
		$this->cdnAdapterProfile = new KalturaCdnAdapterProfileService($this);
		$this->cdnPartnerSettings = new KalturaCdnPartnerSettingsService($this);
		$this->cDVRAdapterProfile = new KalturaCDVRAdapterProfileService($this);
		$this->channel = new KalturaChannelService($this);
		$this->coupon = new KalturaCouponService($this);
		$this->entitlement = new KalturaEntitlementService($this);
		$this->exportTask = new KalturaExportTaskService($this);
		$this->externalChannelProfile = new KalturaExternalChannelProfileService($this);
		$this->favorite = new KalturaFavoriteService($this);
		$this->followTvSeries = new KalturaFollowTvSeriesService($this);
		$this->homeNetwork = new KalturaHomeNetworkService($this);
		$this->household = new KalturaHouseholdService($this);
		$this->householdDevice = new KalturaHouseholdDeviceService($this);
		$this->householdLimitations = new KalturaHouseholdLimitationsService($this);
		$this->householdPaymentGateway = new KalturaHouseholdPaymentGatewayService($this);
		$this->householdPaymentMethod = new KalturaHouseholdPaymentMethodService($this);
		$this->householdPremiumService = new KalturaHouseholdPremiumServiceService($this);
		$this->householdQuota = new KalturaHouseholdQuotaService($this);
		$this->householdUser = new KalturaHouseholdUserService($this);
		$this->inboxMessage = new KalturaInboxMessageService($this);
		$this->licensedUrl = new KalturaLicensedUrlService($this);
		$this->messageTemplate = new KalturaMessageTemplateService($this);
		$this->notification = new KalturaNotificationService($this);
		$this->notificationsPartnerSettings = new KalturaNotificationsPartnerSettingsService($this);
		$this->notificationsSettings = new KalturaNotificationsSettingsService($this);
		$this->ossAdapterProfile = new KalturaOssAdapterProfileService($this);
		$this->ottCategory = new KalturaOttCategoryService($this);
		$this->ottUser = new KalturaOttUserService($this);
		$this->parentalRule = new KalturaParentalRuleService($this);
		$this->partnerConfiguration = new KalturaPartnerConfigurationService($this);
		$this->paymentGatewayProfile = new KalturaPaymentGatewayProfileService($this);
		$this->paymentMethodProfile = new KalturaPaymentMethodProfileService($this);
		$this->personalFeed = new KalturaPersonalFeedService($this);
		$this->pin = new KalturaPinService($this);
		$this->ppv = new KalturaPpvService($this);
		$this->productPrice = new KalturaProductPriceService($this);
		$this->purchaseSettings = new KalturaPurchaseSettingsService($this);
		$this->recommendationProfile = new KalturaRecommendationProfileService($this);
		$this->recording = new KalturaRecordingService($this);
		$this->region = new KalturaRegionService($this);
		$this->registrySettings = new KalturaRegistrySettingsService($this);
		$this->seriesRecording = new KalturaSeriesRecordingService($this);
		$this->session = new KalturaSessionService($this);
		$this->social = new KalturaSocialService($this);
		$this->subscription = new KalturaSubscriptionService($this);
		$this->system = new KalturaSystemService($this);
		$this->timeShiftedTvPartnerSettings = new KalturaTimeShiftedTvPartnerSettingsService($this);
		$this->topic = new KalturaTopicService($this);
		$this->transaction = new KalturaTransactionService($this);
		$this->transactionHistory = new KalturaTransactionHistoryService($this);
		$this->userAssetRule = new KalturaUserAssetRuleService($this);
		$this->userAssetsListItem = new KalturaUserAssetsListItemService($this);
		$this->userLoginPin = new KalturaUserLoginPinService($this);
		$this->userRole = new KalturaUserRoleService($this);
	}
	
	/**
	 * @param string $clientTag
	 */
	public function setClientTag($clientTag)
	{
		$this->clientConfiguration['clientTag'] = $clientTag;
	}
	
	/**
	 * @return string
	 */
	public function getClientTag()
	{
		if(isset($this->clientConfiguration['clientTag']))
		{
			return $this->clientConfiguration['clientTag'];
		}
		
		return null;
	}
	
	/**
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->clientConfiguration['apiVersion'] = $apiVersion;
	}
	
	/**
	 * @return string
	 */
	public function getApiVersion()
	{
		if(isset($this->clientConfiguration['apiVersion']))
		{
			return $this->clientConfiguration['apiVersion'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @param int $partnerId
	 */
	public function setPartnerId($partnerId)
	{
		$this->requestConfiguration['partnerId'] = $partnerId;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @return int
	 */
	public function getPartnerId()
	{
		if(isset($this->requestConfiguration['partnerId']))
		{
			return $this->requestConfiguration['partnerId'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->requestConfiguration['userId'] = $userId;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @return int
	 */
	public function getUserId()
	{
		if(isset($this->requestConfiguration['userId']))
		{
			return $this->requestConfiguration['userId'];
		}
		
		return null;
	}
	
	/**
	 * Content language
	 * 
	 * @param int $language
	 */
	public function setLanguage($language)
	{
		$this->requestConfiguration['language'] = $language;
	}
	
	/**
	 * Content language
	 * 
	 * @return int
	 */
	public function getLanguage()
	{
		if(isset($this->requestConfiguration['language']))
		{
			return $this->requestConfiguration['language'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $ks
	 */
	public function setKs($ks)
	{
		$this->requestConfiguration['ks'] = $ks;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getKs()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		$this->requestConfiguration['ks'] = $sessionId;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getSessionId()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
	}
}

