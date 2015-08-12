USE `eabdb`;

CREATE TABLE IF NOT EXISTS `Gender` (
`genderid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`gender` VARCHAR(50)
);
INSERT INTO `Gender`(gender) VALUES
  ("Male"),
  ("Female"),
  ("Transgender");


CREATE TABLE IF NOT EXISTS `Race` (
`raceid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`race` VARCHAR(50)
);
INSERT INTO `Race`(race) VALUES 
  ("White"),
  ("Black or African American"),
  ("American Indian or Alaska Native"),
  ("Asian"),
  ("Native Hawaiian or Other Pacific Islander"),
  ("Hispanic");


CREATE TABLE IF NOT EXISTS `Ethnicity` (
`ethnicityid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`ethnicity` VARCHAR(50)
);
INSERT INTO `Ethnicity`(ethnicity) VALUES
  ("Hispanic"),
  ("Non-Hispanic");


CREATE TABLE IF NOT EXISTS `CitizenStatus` (
`citizenid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`citizen` VARCHAR(50)
);
INSERT INTO `CitizenStatus`(citizen) VALUES
  ("US Citizen"),
  ("Permanent Resident"),
  ("Undocumented Resident");


CREATE TABLE IF NOT EXISTS `City` (
`cityid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`city` VARCHAR(50)
);
INSERT INTO `City`(city) VALUES
  ("Birmingham"),
  ("Montgomery"),
  ("Huntsville"),
  ("Mobile"),
  ("N/A");


CREATE TABLE IF NOT EXISTS `State` (
`stateid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`state` VARCHAR(50)
);
INSERT INTO `State`(state) VALUES
  ("Alabama"),
  ("Georgia"),
  ("Tennessee"),
  ("Florida"),
  ("Mississippi"),
  ("N/A");


CREATE TABLE IF NOT EXISTS `Zip` (
`zipid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`zip` VARCHAR(50)
);
INSERT INTO `Zip`(zip) VALUES
  ("35205"),
  ("35233"),
  ("35203"),
  ("35234"),
  ("35204"),
  ("35222"),
  ("N/A");


CREATE TABLE IF NOT EXISTS `PrimaryLanguage` (
`languageid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`language` VARCHAR(50)
);
INSERT INTO `PrimaryLanguage`(language) VALUES
  ("English"),
  ("Spanish"),
  ("Mandarin");

CREATE TABLE IF NOT EXISTS `AllergyList` (
`allergylistid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`allergylist` VARCHAR(50)
);
INSERT INTO `AllergyList`(allergylist) VALUES
  ("Sulfa drugs"),
  ("Penicillin"),
  ("Peanuts"),
  ("Pollen");


CREATE TABLE IF NOT EXISTS `Patient` (
`patientid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`fname` VARCHAR(50),
`lname` VARCHAR(50),
`genderid` BIGINT UNSIGNED NOT NULL,
`raceid` BIGINT UNSIGNED NOT NULL,
`ethnicityid` BIGINT UNSIGNED NOT NULL,
`dob` DATE,
`address_street` VARCHAR(50),
`cityid` BIGINT UNSIGNED NOT NULL,
`stateid` BIGINT UNSIGNED NOT NULL,
`zipid` BIGINT UNSIGNED NOT NULL,
`phone_number` VARCHAR(50),
`email_address` VARCHAR(50),
`citizenid` BIGINT UNSIGNED NOT NULL,
`languageid` BIGINT UNSIGNED NOT NULL
);

CREATE TABLE IF NOT EXISTS `PatientAllergy` (
`patientallergyid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`allergylistid` BIGINT UNSIGNED NOT NULL,
`patientid` BIGINT UNSIGNED NOT NULL
);

CREATE TABLE IF NOT EXISTS `Mammogram` (
`mammogramid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`patientid` BIGINT UNSIGNED NOT NULL,
`mammogram` DATE
);

CREATE TABLE IF NOT EXISTS `Colonoscopy` (
`colonoscopyid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`patientid` BIGINT UNSIGNED NOT NULL,
`colonoscopy` DATE
);

CREATE TABLE IF NOT EXISTS `PapSmear` (
`papsmearid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`patientid` BIGINT UNSIGNED NOT NULL,
`papsmear` DATE
);

CREATE TABLE IF NOT EXISTS `STI` (
`stiid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`patientid` BIGINT UNSIGNED NOT NULL,
`sti` DATE
);



CREATE TABLE IF NOT EXISTS `ReasonforVisit` (
`reasonforvisitid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`reasonforvisit` VARCHAR(50)
);
INSERT INTO `ReasonforVisit`(reasonforvisit) VALUES
  ("Acute Care Managment e.g. Infection, Muscle Pain"),
  ("Chronic Care Management e.g. Blood Pressure, Diabetes"),
  ("Smoking/Alcohol/Drug Cessation"),
  ("Mental Health");

CREATE TABLE IF NOT EXISTS `VisitType` (
`visittypeid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`visittype` VARCHAR(50)
);
INSERT INTO `VisitType`(visittype) VALUES
  ("New Patient"),
  ("Returning Patient");

CREATE TABLE IF NOT EXISTS `DayofVisit` (
`dayofvisitid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`dayofvisit` VARCHAR(50)
);
INSERT INTO `DayofVisit`(dayofvisit) VALUES
  ("Wednesday"),
  ("Sunday");



CREATE TABLE IF NOT EXISTS `PatientVisit` (
`patientvisitid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`pstat` VARCHAR(50),
`currentdate` DATE,
`reasonforvisitid` BIGINT UNSIGNED NOT NULL,
`visittypeid` BIGINT UNSIGNED NOT NULL,
`dayofvisitid` BIGINT UNSIGNED NOT NULL,
`patientid` BIGINT UNSIGNED NOT NULL
);





CREATE TABLE IF NOT EXISTS `CooperGreen` (
`cooperid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`cooper` VARCHAR(50)
);
INSERT INTO `CooperGreen`(cooper) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `PrimaryPhysician` (
`physicianid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`physician` VARCHAR(50)
);
INSERT INTO `PrimaryPhysician`(physician) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `EducationLevel` (
`educationid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`education` VARCHAR(50)
);
INSERT INTO `EducationLevel`(education) VALUES
  ("Some High School"),
  ("High School Diploma"),
  ("GED"),
  ("Some College"),
  ("College"),
  ("Post-graduate");


CREATE TABLE IF NOT EXISTS `HeadofHousehold` (
`housestatid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`housestat` VARCHAR(50)
);
INSERT INTO `HeadofHousehold`(housestat) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `MedicalInsurance` (
`insuranceid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`insurance` VARCHAR(50)
);
INSERT INTO `MedicalInsurance`(insurance) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `Disability` (
`disabilityid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`disability` VARCHAR(50)
);
INSERT INTO `Disability`(disability) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `Veteran` (
`veteranid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`veteran` VARCHAR(50)
);
INSERT INTO `Veteran`(veteran) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `CurrentEmployment` (
`employmentid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`employment` VARCHAR(50)
);
INSERT INTO `CurrentEmployment`(employment) VALUES
  ("Yes"),
  ("No");


CREATE TABLE IF NOT EXISTS `RelationshipStatus` (
`relationshipid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`relationship` VARCHAR(50)
);
INSERT INTO `RelationshipStatus`(relationship) VALUES
  ("Never married"),
  ("Married/Partnered"),
  ("Separated"),
  ("Divorced"),
  ("Widowed");


CREATE TABLE IF NOT EXISTS `Alcohol` (
`alcoholid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`alcohol` VARCHAR(50)
);
INSERT INTO `Alcohol`(alcohol) VALUES
  ("Never"),
  ("Quit"),
  ("Rarely"),
  ("Moderate"),
  ("Daily");

  
CREATE TABLE IF NOT EXISTS `FoodStamp` (
`foodstampid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`foodstamp` VARCHAR(50)
);
INSERT INTO `FoodStamp`(foodstamp) VALUES
  ("Yes"),
  ("No");

CREATE TABLE IF NOT EXISTS `HomeType` (
`hometypeid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`hometype` VARCHAR(50)
);
INSERT INTO `HomeType`(hometype) VALUES
  ("Homeless"),
  ("Homeless Shelter"),
  ("Rental House/Apartment"),
  ("Personal Residence");

CREATE TABLE IF NOT EXISTS `Transport` (
`transportid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`transport` VARCHAR(50)
);
INSERT INTO `Transport`(transport) VALUES
  ("Walk/Bike"),
  ("Public Transportation"),
  ("Personal Vehicle"),
  ("Ride from Friend/Family");


CREATE TABLE IF NOT EXISTS `SocialHistory` (
`sid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`householdincome` BIGINT,
`numchildren` BIGINT,
`numfammember` BIGINT,
`heareab` VARCHAR(50),
`cooperid` BIGINT UNSIGNED NOT NULL,
`physicianid` BIGINT UNSIGNED NOT NULL,
`educationid` BIGINT UNSIGNED NOT NULL,
`housestatid` BIGINT UNSIGNED NOT NULL,
`insuranceid` BIGINT UNSIGNED NOT NULL,
`disabilityid` BIGINT UNSIGNED NOT NULL,
`veteranid` BIGINT UNSIGNED NOT NULL,
`employmentid` BIGINT UNSIGNED NOT NULL,
`relationshipid` BIGINT UNSIGNED NOT NULL,
`alcoholid` BIGINT UNSIGNED NOT NULL,
`foodstampid` BIGINT UNSIGNED NOT NULL,
`hometypeid` BIGINT UNSIGNED NOT NULL,
`transportid` BIGINT UNSIGNED NOT NULL,
`patientid` BIGINT UNSIGNED NOT NULL
);

CREATE TABLE IF NOT EXISTS `PastSmoker` (
`pastsmokerid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`sid` BIGINT UNSIGNED NOT NULL,
`startdate` DATE,
`quitdate` DATE,
`packsperday` INT
);

CREATE TABLE IF NOT EXISTS `CurrentSmoker` (
`currentsmokerid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`sid` BIGINT UNSIGNED NOT NULL,
`startdate` DATE,
`packsperday` INT
);


CREATE TABLE IF NOT EXISTS `DrugType` (
`drugtypeid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`drugtype` VARCHAR(50)
);
INSERT INTO `DrugType`(drugtype) VALUES 
  ("Ecstacy"),
  ("Heroine"),
  ("Cocaine"),
  ("PCP"),
  ("Amphetamines"),
  ("Marijuana"); 


CREATE TABLE IF NOT EXISTS `SocialDrugs` (
`socialdrugsid` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`drugtypeid` BIGINT UNSIGNED NOT NULL,
`sid` BIGINT UNSIGNED NOT NULL
);