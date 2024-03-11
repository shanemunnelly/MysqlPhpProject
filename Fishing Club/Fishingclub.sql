	Drop database if exists Fishing;
	create database Fishing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
	Use Fishing;
	Show tables;
	drop table if exists LOGIN;
	drop table if exists FISH;
	drop table if exists MEMBER;
	drop table if exists Lakes;
	drop table if exists Swims;
	drop table if exists CATCHREPORT;
	drop table if exists user;

	set auto_increment_offset = 10;
	set auto_increment_increment = 10; 


	CREATE TABLE user (
	Id 		int(10) Not NUll AUTO_INCREMENT,
	email 	varchar(30),
	password varchar(100),
	primary key (Id));
	
	 CREATE TABLE FISH (
	 CatchSpeciesID               INT(5) NOT NULL AUTO_INCREMENT,
	 CatchSpeciesDescription      VARCHAR(30),
	 CatchSpeciesDetails          VARCHAR(30),
	 PRIMARY KEY (CatchSpeciesID));
	 
	
	CREATE TABLE MEMBER(
	IngMemNumber         INT(5) NOT NULL AUTO_INCREMENT,
	 strMemTitle         ENUM('Mr ','Mrs ','Miss','Dr'),
	 strMemFName         VARCHAR(15),
	 strMemSName		 VARCHAR(15),
	 strMemHouseNumber   BIGINT(20),
	 strMemStreet		 VARCHAR(30),
	 strMemTown			 VARCHAR(30),
	 strMemCounty		 VARCHAR(30),
	 strMemPostCode		 VARCHAR(30),
	 strMemPhone		 BIGINT(20),
	 strMemMobile		 BIGINT(20),
	 hypeMemEMail		 TEXT(30),
	 PRIMARY KEY (IngMemNumber));
	  
	

	CREATE TABLE Lakes(
	IngLakeID		INT(10) NOT NULL AUTO_INCREMENT,
	StrLakeName		VARCHAR(20),
	IngLakeAmountofSwims SMALLINT(2),
	MemLakeFeatures		VARCHAR(20),
	PRIMARY KEY (IngLakeID)); 



	CREATE TABLE Swims(
	intSwimNumber		INT(10) NOT NULL AUTO_INCREMENT,
	memSwimNotes		VARCHAR(30),
	IngLakeID			INT(10),
	PRIMARY KEY (intSwimNumber),
	FOREIGN KEY (IngLakeID) REFERENCES Lakes(IngLakeID));

	CREATE TABLE CATCHREPORT (
	IngCatchTagID  	INT(10) NOT NULL AUTO_INCREMENT,
	IngMemNumber 	INT(10),
	intSwimNumber	INT(10),
	CatchSpeciesID  INT(10),
	IngCatchWeight  Text(10),
	memCatchConditions VARCHAR(30),
	PRIMARY KEY (IngCatchTagID),
	FOREIGN KEY (CatchSpeciesID) REFERENCES FISH(CatchSpeciesID), 
	FOREIGN KEY (IngMemNumber) REFERENCES MEMBER(IngMemNumber),
	FOREIGN KEY (intSwimNumber) REFERENCES Swims(intSwimNumber)
	);



INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Bass', 'Freshwater fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Trout', 'Salmonid fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Catfish', 'Freshwater fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Perch', 'Freshwater fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Carp', 'Freshwater fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Pike', 'Freshwater fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Salmon', 'Anadromous fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Sturgeon', 'Prehistoric fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Mackerel', 'Saltwater fish');
INSERT INTO FISH (CatchSpeciesDescription, CatchSpeciesDetails) VALUES ('Sardine', 'Small saltwater fish');



INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Mr', 'John', 'Doe', 123, 'Main St', 'Anytown', 'Anycounty', '12345', '5555555555', '5555555556', 'johndoe@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Miss', 'Jane', 'Doe', 456, '2nd Ave', 'Anytown', 'Anycounty', '23456', '5555555557', '5555555558', 'janedoe@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Mrs', 'Mary', 'Smith', 789, '3rd St', 'Anytown', 'Anycounty', '34567', '5555555559', '5555555560', 'marysmith@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Dr', 'William', 'Brown', 12, 'Oak Lane', 'Anytown', 'Anycounty', '45678', '5555555561', '5555555562', 'williambrown@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Mr', 'Robert', 'Jones', 345, 'Maple Rd', 'Anytown', 'Anycounty', '56789', '5555555563', '5555555564', 'robertjones@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Miss', 'Linda', 'Davis', 678, 'Elm St', 'Anytown', 'Anycounty', '67890', '5555555565', '5555555566', 'lindadavis@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail) VALUES ('Mrs', 'Karen', 'Wilson', 901, 'Pine Dr', 'Anytown', 'Anycounty', '78901', '5555555567', '5555555568', 'karenwilson@email.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail)
VALUES ('Miss', 'Alice', 'Smith', '123', 'Oak Street', 'London', 'Greater London', 'SW1A 1AA', '1023456789', '07777777777', 'alice.smith@example.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail)
VALUES ('Dr', 'John', 'Doe', '456', 'Elm Street', 'New York', 'NY', '10001', '2125550123', '3477777777', 'johndoe@example.com');
INSERT INTO MEMBER (strMemTitle, strMemFName, strMemSName, strMemHouseNumber, strMemStreet, strMemTown, strMemCounty, strMemPostCode, strMemPhone, strMemMobile, hypeMemEMail)
VALUES ('Mr', 'David', 'Jones', '789', 'Maple Road', 'Toronto', 'Ontario', 'M4S 1Y5', '4165550123', '6477777777', 'amy@example.com');

INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Meadow Lake', 50, 'Gravel bottom');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Willow Lake', 80, 'Lily pads');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Spring Lake', 30, 'Sand bottom');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Eagle Lake', 60, 'Reed beds');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Oak Lake', 40, 'Weed beds');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Falcon Lake', 70, 'Clay bottom');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Maple Lake', 50, 'Stony bottom');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Birch Lake', 80, 'Clear water');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Pine Lake', 30, 'Deep water');
INSERT INTO Lakes (StrLakeName, IngLakeAmountofSwims, MemLakeFeatures) VALUES ('Cedar Lake', 60, 'Mossy bottom');

INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Shallow water', 10);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Weedy swim', 20);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Overhanging trees', 30);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Rocky swim', 40);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Deep water', 50);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Gravel bottom', 60);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Sandy swim', 70);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Reedy swim', 80);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Mossy swim', 90);
INSERT INTO Swims (memSwimNotes, IngLakeID) VALUES ('Clay bottom', 100);

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (10, 10, 10, '100lbs', 'Sunny day with calm waters');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (20, 30, 50, '50.50lbs', 'Cloudy with light rain');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (40, 20, 30, '70lbs', 'Windy with choppy waters');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (30, 40, 20, '1020lbs', 'Clear sky with moderate winds');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (20, 50, 10, '80lbs', 'Overcast with light drizzle');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (50, 30, 40, '60.50lbs', 'Misty with calm waters');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (10, 60, 20, '90lbs', 'Rainy with strong winds');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (40, 10, 40, '40lbs', 'Sunny day with calm waters');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (30, 20, 10, '1010lbs', 'Clear sky with moderate winds');

INSERT INTO CATCHREPORT (IngMemNumber, intSwimNumber, CatchSpeciesID, IngCatchWeight, memCatchConditions)
VALUES (50, 40, 30, '60lbs', 'Misty with calm waters');