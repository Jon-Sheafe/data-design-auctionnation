<?php

/**
 * Auction Nation user entity object creation
 * @author Jon Sheafe
 * @Version 1.0.0
 * @param pull data from user table.
 **/

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


	/**
	 * accessor method for user id
	 *
	 * @return int|null value of usr id
	 */
	public function getUserId() {
		return($this->userId);
	}

	/**
	 * mutator method for user id
	 *
	 * @param int | null $newUserId new value of user id
	 * @throw \RangeException if $newUserId is not positive
	 * @throw \TypeError if $newUserId is not an integer
	 */
	public function setUserId(int $newUserId = null) {
		//base case: if the user id is null, this a new user without a mySQL assigned id (yet)
		if($newUserId === null) {
			$this->userId = null;
			return;
		}

		// verify the user id is positive
		if($newUserId <= 0) {
			throw(new \RangeException("user id is not positive"));
		}

		// convert and store the user id
		$this->userId = $newUserId;
		/**
		 * mutator method for tweet prof
		 */
	}

	/**
	 * accessor method for userName
	 * @return string required
	 *
	 */
	public function getUserName() {
		return($this->userName);
		}

		/**
		 * mutator method user name
		 *
		 * @parm string $newUserName new value of user full name
		 * @throw \InvalidArgumentException if $newUserName is not a strign or insecure
		 * @throw \RangeException if $$newUserName is >50 characters
		 * @throw \TypeError if $newUnserName is not a string
		 */
		Public function setNewUserName(String $newUserName) {
			// verify the user name is secure
			$newUserName = trim($newUserName);
			$newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newUserName) === true) {
				throw(new \InvalidArgumentException("user name is empty or insecure"));
			}
			// verify the user name will fit in the database
			if(strlen($newUserName) >140) {
				throw(new \RangeException("user name is too long"));
			}
			//store user name
			$this->userName = $newUserName;
		}

	/**
	 * accessor method
	 * @return string of email
	 */
		public function getUserEmail(string $newUserEmail) {
			return($this->userEmail);
		}

		/**
		 * mutator mehtod for user email
		 *
		 * @param string $newUserEmail new value of user email
		 * @throw |invalidArgumentException if $newTweetContent is not a string or insecure email
		 * @throw \RangeException if $newUserEmail si >50 characters
		 * @throws |TypeError fi $newUserEmail is not a string
		 */
		public function setUserEmail(string $newUserEmail) {
			//verify the email is secure
			$newUserEmail = trim($newUserEmail);
			$newUserEmail = filter_var($newUserEmail, FILTER_SANITIZE_EMAIL, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newUserEmail) === true){
				throw(new \InvalidArgumentException("user email content is empty or insecure"));
			}
			//verify the user email will fit in database
			if(strlen($newUserEmail) >125) {
				throw(new \RangeException("email is to long"));
			}
			// store the email
			$this->userEmail = $newUserEmail;
		}
















}