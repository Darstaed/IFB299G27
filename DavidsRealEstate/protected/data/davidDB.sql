-- MYSQLITE CODE FOR davidsrealestate.com
-- 07/09/2015
-- Author Mitchell Sainty // team green

-- -----------------------------------------------------
-- Table propertylisting tbl_user
-- Stored infomation for users of the website, intended to be 
-- for property managers and admins
-- -----------------------------------------------------
CREATE TABLE tbl_user 
(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	username VARCHAR(16) NOT NULL,
	password VARCHAR(32) NOT NULL,
    email VARCHAR(255) NULL,
	firstname VARCHAR(45) NULL,
	surname VARCHAR(45) NULL,
    phoneNumber INTEGER NULL,
	propertyOwned INTEGER NULL,
	FOREIGN KEY(propertyOwned) REFERENCES tbl_propertylisting(propertyID)
);

		
CREATE TABLE tbl_gallery 
(
	imageID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    image VARCHAR(255),
	propertyID INTEGER NOT NULL,
	FOREIGN KEY(propertyID) REFERENCES tbl_propertylisting(propertyID)
);
		
		
-- -----------------------------------------------------
-- Table propertylisting tbl_PropertyListing
-- Stored infomation for property infomation listing
-- -----------------------------------------------------	
CREATE TABLE tbl_propertylisting 
(
	propertyID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	address VARCHAR(255) NOT NULL,
	rent DECIMAL(4,2) NOT NULL,
	rentfreq VARCHAR(15) NOT NULL,
	numBathroom INTEGER NULL,
	numBedroom INTEGER NULL,
    numCarPorts INTEGER NULL,
	createTime DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
	updateTime DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    authorID INTEGER NOT NULL,
    imageID VARCHAR(255) NULL,
	FOREIGN KEY(authorID) REFERENCES tbl_user(id),
	FOREIGN KEY(imageID) REFERENCES tbl_gallery(imageID)
);

INSERT INTO tbl_user (username, password, email, firstname, surname) VALUES ('demo', '$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC', 'david@example.com', 'David', 'Davidson');
INSERT INTO tbl_user (username, password, email, firstname, surname) VALUES ('admin', '$2a$13$M3/HNNEpkEjA85ng1dNKrOzj/SUZDuZxq7FuYdb/HVoWeK6CWPpPW', 'admin@example.com','John','Johnson');
