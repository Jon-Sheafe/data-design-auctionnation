<?php

/**
 * Auction Nation user entity object creation
 * @author Jon Sheafe
 * @Version 1.0.0
 * @param pull data from user table.
 */

class user {//implements  // \JsonSerializable
	//use ValidateDate;
	/**
	 * validates the date for future date fields
	 */
	private $userId;
	/** id for the user; this is the primary key
	 * @var int $lotUserId
	 */
	private $userName;
	/** user name user entitiy;
	 * @var string $userName
	 */
	private $userEmail;
	/** user email
	 * @var string $userEmail
	 */
	private $userPhone;
	/** user phone number
	 * @var string
	 */
	private $userStreet;
	/** user street address
	 * @var string of user street address
	 */
	private $userCity;
	/** user City
	 * @var string of user city
	 */
	private $userState;
	/** user State location
	 * @var two digit string of user state
	 */
	private $userZip;
	/** user zip code
	 * @var five digit of user zip code
	 */



//constructor goes here later


// not, Write all your accessor (getter) methods
public function setUserId( int $newUserId = null) {
	// base case: if user id is null, this a new tweet without a mySQL assigned id (yet)
	if($newUserId === null) {
		$this->userId = null;
		return;
	}
	// verify the user id is positive
	if($newUserId <= 0) {
		throw(new \RangeException("user id is not positive"));
	}
	// convert and store the user id
	$this->tweetId = $newUserId;
}
/**
 * accessor method for user id
 @return int value of user profile id
 */
public function getUserContent() {
	return($this->userId);
}
/**
 * mutator method for user id
 *
 * @parm int|null $newTweetId new value of tweet id
 * @throws \RangeExceptionif $newUserId is not positive
 * @throws \TypeError if @newUserId is not an integer
 */


/**
 * accessor method for user profile id
 *
 * @return int value of user profile id
 */
public function getLotUserId() {
	return($this->lotUserId);
}
/**
 * mutator method for user lot ID
 *
 * @parmam int $NewUserID new value of user profilt
 */
















}