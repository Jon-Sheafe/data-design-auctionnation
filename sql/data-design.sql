CREATE TABLE `user` (
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(25) NOT NULL,
	userEmail VARCHAR (25) NOT NULL,
	userPhone VARCHAR(20) NOT NULL,
	userStreet VARCHAR(50) NOT NULL,
	userCity VARCHAR (50) NOT NULL,
	userState CHAR(2) NOT NULL,
	userZip CHAR(5) NOT NULL,
	UNIQUE (userName,userEmail,userPhone),
	PRIMARY KEY(userId)
	-- user data main table
);
CREATE TABLE lot (
	lotId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	lotLocation VARCHAR(100),
	lotDescription VARCHAR (255),
	lotMainImage BINARY(255) NOT NULL,
	lotStartBid INT UNSIGNED NOT NULL,
	lotBidEndTime DATETIME NOT NULL,
	lotUserId INT UNSIGNED NOT NULL,
	INDEX(lotId,lotDescription,lotStartBid,lotUserId),
	FOREIGN KEY(lotUserId) REFERENCES `user`(userId),
	PRIMARY KEY(lotId)
	-- create lot table to store items
);
CREATE TABLE bid (
	bidLotId INT UNSIGNED NOT NULL,
	bidUserId INT UNSIGNED NOT NULL,
	bidAmount INT UNSIGNED NOT NULL,
	bidDateStamp TIMESTAMP,
	INDEX(bidLotId,bidUserId,bidAmount),
	FOREIGN KEY(bidLotId) REFERENCES lot(lotId),
	FOREIGN KEY(bidUserId) REFERENCES `user`(userId),
	PRIMARY KEY(bidLotid,bidUserId)
	-- many to many table to track bids
);