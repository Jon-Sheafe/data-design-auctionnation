<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Auction Nation</title>
		<link rel="stylesheet" href="../css/gen.css">
	</head>
	<body>
		<header><h1>Persona Assignment</h1></header>
		<img id="img" src="../img/AuctionNation.png" alt="Aucton Nation Image">

			<div><h2>Persona</h2>
				<p><b>Name: </b>Carla Humphreys<br>
				<b>Age:</b> 45</br></p>
				<p><b>Profession: </b> Carla owns her own thrift store in  Tucson Arizona which is located in the SouthWest part of the United. Carla sells gently used items to the general public. She also sells used office equipment, which is a part of her business has seen a lot of growth since the economy decline in 2008. <br></p>
				<p><b>Technology: </b> Desktop HP bargain computer. The HP computer has 4gb of ram, and 250 GB hard drive. Carla also owns an iPhone 5S she brought second hand.</br></P>
				<p><b>Attitudes and Behavior: </b> Carla works a lot of hours a day at her store. She does not believe in wasting money buying new items that will only depreciate.</p>
				<p><b>Frustrations and Needs</b> Carla is confortable shopping online, but she has been burnt in the past buying items that were different from what was described. She prefers doing business locally where see can see the items before purchasing.</P>
				<p><b>Goal: </b> Carla is only interested in purchasing local items for business. She does not have a lot of time as she runs the store 100% alone.</p></div>
			<div><h2>Use Case</h2>
				<p>Carla bids on items from auctionnation.com using her desktop PC. She can purchase items on Ebay, but perfers seeing items first and saving on shipping cost by picking up items from Auction Nation's wherehouses which are located mostly in Pheonix AZ. Carla does not only buy from Auction Nation, but keeps an eye on new actions for items that she could sell in her store. Carla wants to see pictures of items, and description of items in order to determine if its an item she will be interested in buying for her store.</p>
			<h2>Interaction Flow</h2>
				<ol type="I">
					<li>enter auctionnation.com into the address bar</li>
					<li>click on view Auction Link</li>
					<li>From here you can scroll down list of lot items for sale</li>
					<li>Clicking on image, title, or lot number takes user to item page</li>
					<li>Item page allows user to enter bid, view additional images, see detail list of items which contains shipping, item condition, and taxes.</li>
					<li>clicking on place bid takes user to sign in page if user has not previously been signed in page</li>
					<li>sign in page requires registered user to sign in with user name and password</li>
					<li>Wining bids requires are automaticly change to user credit card associated to profile </li>
					<li>email sent to a bidder who won instructed bidder to pickup won items by dead line.</li>
				</ol></div>

			<h2>Conceptual Model</h2>
				<h4>User Entity</h4>
				<ul>
					<li>userId: primary key</li>
					<li>userName</li>
					<li>userEmail</li>
					<li>userPhone</li>
					<li>userStreet1</li>
					<li>userStreet2</li>
					<li>userCity</li>
					<li>userState</li>
					<li>userZip</li>
				</ul>
				<h4>Lot Entity</h4>
				<ul>
					<li>lotId: Primary Key</li>
					<li>lotLocation:</li>
					<li>lotDescription</li>
					<li>lotMainImage: foreign Key from Images</li>
					<li>lotCurrentBidPrice</li>
					<li>lotBidEndTime</li>
				</ul>
				<h4>Bid Entity</h4>
				<ul>
					<li>bidUserId: weak Foreign Key from userID</li>
					<li>bidLotId: weak Foreign Key from itemID</li>
					<li>bidDateStamp</li>
					<li>bidAmount</li>
				</ul>
			<h3>Relationships:</h3>
				<ul>
					<li>One user can bid on many lots</li>
					<li>Many lots can have many bids</li>
					<li>many users can have many bids</li>
			</ul>
	</body>
</html>

