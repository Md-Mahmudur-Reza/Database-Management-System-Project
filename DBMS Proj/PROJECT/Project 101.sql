create database if not exists animals;

CREATE TABLE if not exists `Animal` (
  `A_ID` CHAR(09),
  `Animal Name` Varchar(255),
  `Catagory` Varchar(255),
  `Gender` char(06),
  `Age` Integer,
  `Food on time` Boolean,
  `import date` Date,
  PRIMARY KEY (`A_ID`)
);

CREATE TABLE if not exists `Food` (
  `Food name` Varchar(255),
  `Food on stock` Integer,
  `Food regular Needed` Integer,
  PRIMARY KEY (`Food name`)
);

CREATE TABLE  if not exists `Foods of animal` (
  `Food name` Varchar(255),
  `Animal ID` CHAR(09),
  PRIMARY KEY (`Animal ID`),
  Foreign key (`Food name`) references `Food` (`Food name`)
);

CREATE TABLE if not exists `Employees` (
  `E_ID` Char(09),
  `password` Varchar(255),
  `Name` Varchar(255),
  `Designation` Varchar(20),
  `Contact number` Char(11),
  `Availability` Binary,
  `Manager_ID` Char(09),
  `Notify` Date,
  `Salary` Integer,
  PRIMARY KEY (`E_ID`),
  FOREIGN KEY (`Manager_ID`) references `Employees` (`E_ID`)
);

CREATE TABLE if not exists `Employee job history` (
  `Employee_ID` Char(09),
  `Hire Date` Date,
  `End Date` Date,
  FOREIGN KEY (`Employee_ID`) references `Employees` (`E_ID`),
  PRIMARY KEY (`Employee_ID`)
);

CREATE TABLE if not exists `Food Given` (
  `Animal_ID` Char(09),
  `Employee_ID` Char(09),
  `Food` Varchar(255),
  `Date` Date,
  `Time` Time,
  FOREIGN KEY (`Animal_ID`) references `Animal` (`A_ID`),
  FOREIGN KEY (`Employee_ID`) references `Employees` (`E_ID`),
  Constraint PK_FG PRIMARY KEY (`Animal_ID`, `Date`, `Time`)
);

CREATE TABLE if not exists `Health Inspect` (
  `Animal_ID` Char(09),
  `Doctor who checked` Char(09),
  `Last checked` Date,
  `Diseases` Varchar(255),
  `Prescription` Varchar(255),
  FOREIGN KEY (`Animal_ID`) references `Animal` (`A_ID`),
  FOREIGN KEY (`Doctor who checked`) references `Employees` (`E_ID`),
  Constraint PK_HI PRIMARY KEY (`Animal_ID`, `Doctor who checked`)
);

CREATE TABLE if not exists `Reservation` (
  `Doctor_ID` Char(09),
  `Appointment time` Date,
  `Animal_ID` Char(09),
  FOREIGN KEY (`Doctor_ID`) references `Employees` (`E_ID`),
  FOREIGN KEY (`Animal_ID`) references `Animal` (`A_ID`),
  Constraint PK_reserv PRIMARY KEY (`Doctor_ID`, `Appointment time`, `Animal_ID`)
);
#does visitor need two pk
CREATE TABLE if not exists `Visitor` (
  `Name` Varchar(255),
  `Contact Number` Char(11),
  `Times visited` Date,
  `Last visited` Date,
  #Constraint PK_visitor 
    PRIMARY KEY (`Name`)
);

CREATE TABLE if not exists `Offer` (
  `Offer_ID` char(09),
  `Offer name` Varchar(255),
  `Notice` Varchar(255),
  `Start Date` Date,
  `End Date` Date,
  Constraint PK_offer PRIMARY KEY (`Offer name`, `Start Date`, `End Date`)
);


CREATE TABLE if not exists `Ticket Booked` (
  `Visitor Name` Varchar(255),
  `Offer_ID` char(09),
  `Offer name` Varchar(255),
  `Ticket Bought` Integer,
  `Start Date` Date,
  `End Date` Date,
  `Money` Integer,
  
);

Alter table `Ticket Booked`
Add FOREIGN KEY (`Visitor Name`) references `Visitor` (`Name`);

#PROBLEM
Alter table `Ticket Booked`
Add FOREIGN KEY (`Offer_ID`) references `Offer` (`Offer_ID`);

Alter table `Ticket Booked`
Add CONSTRAINT PK_TB PRIMARY KEY (`Visitor Name`, `Offer_ID`);