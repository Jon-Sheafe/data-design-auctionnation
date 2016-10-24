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
	 * Constrctor for the User
	 *
	 * @param int|null $userId id of the user or null if a new user
	 * @param string userName
	 */
	public function __construct(int $newUserId = null, string $newUserName, string $newUserEmail, string $newUserPhone, string $newUserStreet, string $newUserCity, string $newUserState, string $newUserZip) {
		try {
			$this->setUserId($newUserId);
			$this->setUserName($newUserName);
			$this->setUserEmail($newUserEmail);
			$this->setUserPhone($newUserPhone);
			$this->setUserStreet($newUserStreet);
			$this->setUserCity($newUserCity);
			$this->setUserState($newUserState);
			$this->setUserZip($newUserZip);
		} catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
			// rethrow the exception to the caller
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			//rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for user id
	 *
	 * @return int|null value of usr id
	 */
	public function getUserId() {
		return ($this->userId);
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
		return ($this->userName);
	}

	/**
	 * mutator method user name
	 *
	 * @parm string $newUserName new value of user full name
	 * @throw \InvalidArgumentException if $newUserName is not a strign or insecure
	 * @throw \RangeException if $$newUserName is >50 characters
	 * @throw \TypeError if $newUnserName is not a string
	 */
	Public function setNewUserName(string $newUserName) {
		// verify the user name is secure
		$newUserName = trim($newUserName);
		$newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newUserName) === true) {
			throw(new \InvalidArgumentException("user name is empty or insecure"));
		}
		// verify the user name will fit in the database
		if(strlen($newUserName) > 140) {
			throw(new \RangeException("user name is too long"));
		}
		//store user name
		$this->userName = $newUserName;
	}

	/**
	 * accessor method
	 * @return string of email
	 */
	public function getUserEmail() {
		return ($this->userEmail);
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
		if(empty($newUserEmail) === true) {
			throw(new \InvalidArgumentException("user email content is empty or insecure"));
		}
		//verify the user email wwill fit in database
		if(strlen($newUserEmail) > 125) {
			throw(new \RangeException("email is to long"));
		}
		// store the email
		$this->userEmail = $newUserEmail;
	}

	/**
	 * accessor method for user phone number
	 *
	 * @return string required
	 */
	public function getUserPhone() {
		return ($this->userPhone);
	}

	/**
	 * mutator method for user phone
	 *
	 * @param string $NewUserPhone new value of phone number
	 * @throw \RangeException if $newUserPhone is not positive
	 * @throw \TypeError if $nreUserPhone is not string and valid phone number
	 */
	public function setUserPhone(string $newUserPhone = null) {
		//verify the phone is secure
		$newUserPhone = trim($newUserPhone);
		@$newUserPhone = filter_var($newUserPhone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newUserPhone) === true) {
			throw (new \InvalidArgumentException("uer phone number content is empty of insecure"));
		}
		//verify the user phone will fit database
		if(strlen($newUserPhone >= 10)) {
			throw (new \RangeException("phone is to long"));
		}
		//store phone number
		$this->userPhone = $newUserPhone;
	}

	/**
	 * accessor  method for user street
	 *
	 * @return string value of user street address
	 * */
	public function getUserAddress() {
		return ($this->userStreet);
	}

	/**
	 * mutator mehtod for  street address content
	 *
	 * @param string $newUserStreet new value of street address
	 * @pthrow |InvalidArgumentException if $newUserStreet is not a string or insecure
	 * @throw \RangeException if $newUserStreet is >= 50 characters
	 * @throw \TypeError if $newUserStreet is not a string
	 */
	public function setUserStreet(string $newUserStreet) {
		// verify the user street is secure
		$newUserStreet = trim($newUserStreet);
		$newUserStreet = filter_var($newUserStreet, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newUserStreet) === true) {
			throw(new \InvalidArgumentException("User Street content is empty or insecure"));
		}

		// verify the user street address will fit the database
		if(strlen($newUserStreet) > 50) {
			throw(new \RangeException("user street address is too long"));
		}
		// store the street address
		$this->userStreet = $newUserStreet;
	}

	/**
	 * accessor method for user city
	 *
	 * @return string value of user city
	 */
	public function getUserCity() {
		return ($this->userCity);
	}

	/**
	 * mutator method for user city
	 *
	 * @param string @newUserCity new value
	 * @throws \InvalidArgumentException if $newUserCity is not a string or valid
	 * @throws \RangeException if $newUserCity is > 50 characters
	 * @throws |TypeError if $newUserCity is not a string
	 */
	public function setUserCity(string $newUserCity) {
		// verify the user city data is secure
		$newUserCity = trim($newUserCity);
		$newUserCity = filter_var($newUserCity, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newUserCity) === true) {
			throw(new \InvalidArgumentException("user city content is empty or insecure"));
		}

		// verify the user city will fit database
		if(strlen($newUserCity) > 50) {
			throw(new \RangeException("user city name is too large"));
		}

		// store the city name
		$this->userCity = $newUserCity;
	}

	/**
	 * accessor method for user state
	 *
	 * @return string value of state abriviation
	 */
	public function getUserState() {
		return ($this->userState);
	}

	/**
	 * mutator method for state content
	 *
	 * @param string $newUserState new value of user state
	 * @throws \InvalidArgumentException if $newUserState is not a string or insecure
	 * @throws \RangeException if $newUserState is >2 characters
	 * @throws \TypeError if $newUserState is not a string
	 */
	public function setUserState(string $newUserState) {
		//verif the state data is secure
		$newUserState = trim($newUserState);
		$newUserState = filter_var($newUserState, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newUserState) === true) {
			throw(new \InvalidArgumentException("user state is empty or insecure"));
		}
		// verify the user state will fit in the database
		if(strlen($newUserState) > 2) {
			throw(new \RangeException("user state is too large"));
		}

		//show user state
		$this->userState = $newUserState;
	}

	/**
	 * accessor method to user zip code
	 *
	 * @return string value of user zip code
	 */
	public function getUserZip() {
		return ($this->userZip);
	}

	/**
	 * mutator method for user zip
	 *
	 * @param string $newUserZip new value of user zip
	 * @throws \InvalidArgumentException if $newUserZip is not a string or insecure
	 * @throws \RangeException if $newUserZip is > 2 charaters
	 * @throws \TypeError if $newUswerZip
	 */
	public function setUserZip(string $newUserZip) {
		// verify the user zip is secure
		$newUserZip = trim($newUserZip);
		$newUserZip = filter_var($newUserZip, FILTER_FLAG_NO_ENCODE_QUOTES, FILTER_SANITIZE_STRING);
		if(empty($newUserZip) === true) {
			throw(new \InvalidArgumentException(" zip code is empty of insecure"));
		}
		// verify the user zip will fit in the database
		if(strlen($newUserZip) > 2) {
			throw(new \RangeException("user zip too large"));
		}

		// store the user zip
		$this->userZip = $newUserZip;
	}
}

$testUser = new User (null, "Jon", "jsheafe@gmail.com","5057106542","3400 Osuna Rd NE", "Albuquerque", "NM", "87107");


















