CREATE TABLE `user` (
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(25) NOT NULL,
	userEmail VARCHAR (25) NOT NULL,
	userPhone VARCHAR(20) NOT NULL,
	userStreet VARCHAR(50) NOT NULL,
	userCity VARCHAR (50) NOT NULL,
	userState CHAR(2) NOT NULL,
	userZip CHAR(5) NOT NULL,
	-- user data
	UNIQUE (userName,userEmail,userPhone),
	PRIMARY KEY(userId)
);
CREATE TABLE lot (
	lotId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	lotLocation VARCHAR(100),
	lotDescription VARCHAR (255),
	lotMainImage BINARY(255) NOT NULL,
	lotStartBid INT UNSIGNED NOT NULL,
	lotBidEndTime DATETIME NOT NULL,
	lotUserId INT UNSIGNED NOT NULL,
	INDEX(lotId,lotDescription,lotCurrentBidPrice,lotUserId),
	FOREIGN KEY(lotUserId) REFERENCES `user`(userId),
	PRIMARY KEY(lotId)
);
CREATE TABLE bid (
	bidLotId INT UNSIGNED NOT NULL,
	bidUserId INT UNSIGNED NOT NULL,
	bidAmount INT UNSIGNED NOT NULL,
	bidDateStamp,
	INDEX(bidLotId,bidUserId,bidAmount),
	FOREIGN KEY(bidLotId) REFERENCES (lotId),
	FOREIGN KEY(bidUserId) REFERENCES(userId),
	PRIMARY KEY(bidLotid,bidUserId)
);