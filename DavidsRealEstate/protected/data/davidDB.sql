-- MYSQLITE CODE FOR davidsrealestate.com
-- 07/09/2015
-- Author Mitchell Sainty // team green


CREATE TABLE tbl_lookup
(
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(128) NOT NULL,
	code INTEGER NOT NULL,
	type VARCHAR(128) NOT NULL,
	position INTEGER NOT NULL
);


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
	roles VARCHAR NOT NULL DEFAULT 'tennant', 
	FOREIGN KEY(propertyOwned) REFERENCES tbl_propertylisting(propertyID)
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
	status INTEGER NOT NULL,
    authorID INTEGER NOT NULL,
    imageID VARCHAR(255) NULL,
	tenantID INTEGER NULL,
	FOREIGN KEY(authorID) REFERENCES tbl_user(id),
	FOREIGN KEY(imageID) REFERENCES tbl_gallery(imageID),
	FOREIGN KEY(tenantID) REFERENCES tbl_tenants(tenantID)
);

INSERT INTO tbl_lookup (name, type, code, position) VALUES ('Rented', 'PostStatus', 1, 1);
INSERT INTO tbl_lookup (name, type, code, position) VALUES ('For Rent', 'PostStatus', 2, 2);
INSERT INTO tbl_lookup (name, type, code, position) VALUES ('Archived', 'PostStatus', 3, 3);


INSERT INTO tbl_user (username, password, email, firstname, surname) VALUES ('demo', '$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC', 'david@example.com', 'David', 'Davidson');
INSERT INTO tbl_user (username, password, email, firstname, surname) VALUES ('admin', '$2a$13$M3/HNNEpkEjA85ng1dNKrOzj/SUZDuZxq7FuYdb/HVoWeK6CWPpPW', 'admin@example.com','John','Johnson');
