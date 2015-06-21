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
// Copyright (C) 2006-2015  Kaltura Inc.
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
require_once(dirname(__FILE__) . "/KalturaCuePointClientPlugin.php");

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnswerCuePointOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const IS_CORRECT_ASC = "+isCorrect";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const START_TIME_ASC = "+startTime";
	const TRIGGERED_AT_ASC = "+triggeredAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const IS_CORRECT_DESC = "-isCorrect";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
	const START_TIME_DESC = "-startTime";
	const TRIGGERED_AT_DESC = "-triggeredAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuestionCuePointOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const QUESTION_ASC = "+question";
	const START_TIME_ASC = "+startTime";
	const TRIGGERED_AT_ASC = "+triggeredAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const CREATED_AT_DESC = "-createdAt";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
	const QUESTION_DESC = "-question";
	const START_TIME_DESC = "-startTime";
	const TRIGGERED_AT_DESC = "-triggeredAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaOptionalAnswer extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $text = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $weight = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $isCorrect = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuiz extends KalturaObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * Array of key value ui related objects
	 * 	 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $uiAttributes;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $showResultOnAnswer = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $showCorrectKeyOnAnswer = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $allowAnswerUpdate = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $showCorrectAfterSubmission = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnswerCuePoint extends KalturaCuePoint
{
	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $parentId = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $quizUserEntryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $answerKey = null;

	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 * @readonly
	 */
	public $isCorrect = null;

	/**
	 * Array of string
	 * 	 
	 *
	 * @var KalturaTypedArray
	 * @readonly
	 */
	public $correctAnswerKeys;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $explanation = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuestionCuePoint extends KalturaCuePoint
{
	/**
	 * Array of key value answerKey->optionAnswer objects
	 * 	 
	 *
	 * @var map
	 */
	public $optionalAnswers;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hint = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $question = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $explanation = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuizAdvancedFilter extends KalturaSearchItem
{
	/**
	 * 
	 *
	 * @var KalturaNullableBoolean
	 */
	public $isQuiz = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuizListResponse extends KalturaListResponse
{
	/**
	 * 
	 *
	 * @var array of KalturaQuiz
	 * @readonly
	 */
	public $objects;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuizFilter extends KalturaRelatedFilter
{
	/**
	 * This filter should be in use for retrieving only a specific quiz entry (identified by its entryId).
	 * 	 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * This filter should be in use for retrieving few specific quiz entries (string should include comma separated list of entryId strings).
	 * 	 
	 *
	 * @var string
	 */
	public $entryIdIn = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaAnswerCuePointBaseFilter extends KalturaCuePointFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class KalturaQuestionCuePointBaseFilter extends KalturaCuePointFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $questionLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $questionMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $questionMultiLikeAnd = null;


}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaAnswerCuePointFilter extends KalturaAnswerCuePointBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuestionCuePointFilter extends KalturaQuestionCuePointBaseFilter
{

}

/**
 * @package Kaltura
 * @subpackage Client
 */
class KalturaQuizClientPlugin extends KalturaClientPlugin
{
	protected function __construct(KalturaClient $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return KalturaQuizClientPlugin
	 */
	public static function get(KalturaClient $client)
	{
		return new KalturaQuizClientPlugin($client);
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
		return 'quiz';
	}
}

