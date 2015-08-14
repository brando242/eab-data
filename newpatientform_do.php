<?php
error_reporting(E_ALL);
ini_set("displayed_errors",1);

$drugs = $_GET['drugs'];
$allergies = $_GET['allergies'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$dob = $_GET['dob_year'] . "-" . $_GET['dob_month'] . "-" . $_GET['dob_day'];
$address_street = $_GET['address_street'];
$cityid = $_GET['cityid'];
$stateid = $_GET['stateid'];
$zipid = $_GET['zipid'];
$phone_number = $_GET['phone_number'];
$email_address = $_GET['email_address'];
$genderid = $_GET['genderid'];
$ethnicityid = $_GET['ethnicityid'];
$raceid = $_GET['raceid'];
$languageid = $_GET['languageid'];
$citizenid = $_GET['citizenid'];
$hometypeid = $_GET['hometypeid'];
$housestatid = $_GET['housestatid'];
$numfammember = $_GET['numfammember'];
$numchildren = $_GET['numchildren'];
$relationshipid = $_GET['relationshipid'];
$householdincome = $_GET['householdincome'];
$employmentid = $_GET['employmentid'];
$disabilityid = $_GET['disabilityid'];
$foodstampid = $_GET['foodstampid'];
$veteranid = $_GET['veteranid'];
$educationid = $_GET['educationid'];
$insuranceid = $_GET['insuranceid'];
$physicianid = $_GET['physicianid'];
$cooperid = $_GET['cooperid'];
$timesmoked = $_GET['timesmoked'];
$packsmoked = $_GET['packsmoked'];
$alcoholid = $_GET['alcoholid'];
$transportid = $_GET['transportid'];
$heareab = $_GET['heareab'];
$reasonforvisitid = $_GET['reasonforvisitid'];
$dayofvisitid = $_GET['dayofvisitid'];
$mammogram = $_GET['mammogram_year'] . "-" . $_GET['mammogram_month'] . "-" . $_GET['mammogram_day'];
$colonoscopy = $_GET['colonoscopy_year'] . "-" . $_GET['colonoscopy_month'] . "-" . $_GET['colonoscopy_day'];
$sti = $_GET['STI_year'] . "-" . $_GET['STI_month'] . "-" . $_GET['STI_day'];
$papsmear = $_GET['PAP_year'] . "-" . $_GET['PAP_month'] . "-" . $_GET['PAP_day'];
$submit = $_GET['Submit'];
$pstat = $_pstat['pstat'];
$currentdate = date("Ymd");
$visittypeid = $_GET["visittypeid"];

require_once("includes/db.php");

$con = new mysqli($host, $db_user, $db_pass, $db_db);

$query = "INSERT INTO `Patient` (`fname`, `lname`, `genderid`, `raceid`, `ethnicityid`, `dob`, `address_street`, `cityid`, `stateid`, `zipid`, `phone_number`, `email_address`, `citizenid`, `languageid`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt_patient = $con->prepare($query);
$stmt_patient->bind_param("ssssssssssssss", $fname, $lname, $genderid, $raceid, $ethnicityid, $dob, $address_street, $cityid, $stateid, $zipid, $phone_number, $email_address, $citizenid, $languageid);
$stmt_patient->execute();
$stmt_patient->store_result();
$stmt_patient->close();

$query = "SELECT `patientid` from `Patient` WHERE (`fname`, `lname`, `genderid`, `raceid`, `ethnicityid`, `dob`, `address_street`, `cityid`, `stateid`, `zipid`, `phone_number`, `email_address`, `citizenid`, `languageid`) = (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt_patientid = $con->prepare($query);
$stmt_patientid->bind_param("ssssssssssssss", $fname, $lname, $genderid, $raceid, $ethnicityid, $dob, $address_street, $cityid, $stateid, $zipid, $phone_number, $email_address, $citizenid, $languageid);
$stmt_patientid->execute();
$stmt_patientid->store_result();
$stmt_patientid->bind_result($patientid);
$stmt_patientid->fetch();
$stmt_patientid->close();


$query = "INSERT INTO `SocialHistory` (`householdincome`, `numchildren`, `numfammember`, `heareab`, `cooperid`, `physicianid`, `educationid`, `housestatid`, `insuranceid`, `disabilityid`, `veteranid`, `employmentid`, `relationshipid`, `alcoholid`, `foodstampid`, `hometypeid`, `transportid`, `patientid`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt_socialhistory = $con->prepare($query);
$stmt_socialhistory->bind_param("ssssssssssssssssss", $householdincome, $numchildren, $numfammember, $heareab, $cooperid, $physicianid, $educationid, $housestatid, $insuranceid, $disabilityid, $veteranid, $employmentid, $relationshipid, $alcoholid, $foodstampid, $hometypeid, $transportid, $patientid);
$stmt_socialhistory->execute();
$stmt_socialhistory->store_result();
$stmt_socialhistory->close();


$query = "SELECT `sid` from `SocialHistory` WHERE (`householdincome`, `numchildren`, `numfammember`, `heareab`, `cooperid`, `physicianid`, `educationid`, `housestatid`, `insuranceid`, `disabilityid`, `veteranid`, `employmentid`, `relationshipid`, `alcoholid`, `foodstampid`, `hometypeid`, `transportid`, `patientid`) = (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt_sid = $con->prepare($query);
$stmt_sid->bind_param("ssssssssssssssssss", $householdincome, $numchildren, $numfammember, $heareab, $cooperid, $physicianid, $educationid, $housestatid, $insuranceid, $disabilityid, $veteranid, $employmentid, $relationshipid, $alcoholid, $foodstampid, $hometypeid, $transportid, $patientid);
$stmt_sid->execute();
$stmt_sid->store_result();
$stmt_sid->bind_result($sid);
$stmt_sid->fetch();
$stmt_sid->close();

$query = "INSERT INTO `PatientVisit` (`pstat`, `currentdate`, `reasonforvisitid`, `visittypeid`, `dayofvisitid`, `patientid`) VALUES (?, ?, ?, ?, ?, ?);";
$stmt_patientvisit = $con->prepare($query);
$stmt_patientvisit->bind_param("ssssss", $pstat, $currentdate, $reasonforvisitid, $visittypeid, $dayofvisitid, $patientid);
$stmt_patientvisit->execute();
$stmt_patientvisit->store_result();
$stmt_patientvisit->close();


$query = "INSERT INTO `PatientAllergy` (`allergylistid`, `patientid`) VALUES (?, ?);";
$stmt_patientallergy = $con->prepare($query);
$stmt_patientallergy->bind_param("ss", $allergy, $patientid);

foreach ($allergies as $allergy) {
$stmt_patientallergy->execute();
$stmt_patientallergy->store_result();
}
$stmt_patientallergy->close();


$query = "INSERT INTO `CurrentSmoker` (`sid`, `startdate`, `packsperday`) VALUES (?, ?, ?);";
$stmt_currentsmoker = $con->prepare($query);
$stmt_currentsmoker->bind_param("sss", $sid, $startdate, $packsperday);
$stmt_currentsmoker->execute();
$stmt_currentsmoker->store_result();
$stmt_currentsmoker->close();

$query = "INSERT INTO `PastSmoker` (`sid`, `startdate`, `quitdate`, `packsperday`) VALUES (?, ?, ?, ?);";
$stmt_pastsmoker = $con->prepare($query);
$stmt_pastsmoker->bind_param("ssss", $sid, $startdate, $quitdate, $packsperday);
$stmt_pastsmoker->execute();
$stmt_pastsmoker->store_result();
$stmt_pastsmoker->close();

$query = "INSERT INTO `SocialDrugs` (`drugtypeid`, `sid`) VALUES (?, ?);";
$stmt_socialdrugs = $con->prepare($query);
$stmt_socialdrugs->bind_param("ss", $drug, $sid);

foreach ($drugs as $drug) {
    $stmt_socialdrugs->execute();
    $stmt_socialdrugs->store_result();
}
$stmt_socialdrugs->close();

$query = "INSERT INTO `Mammogram` (`patientid`, `mammogram`) VALUES (?, ?);";
$stmt_mammogram = $con->prepare($query);
$stmt_mammogram->bind_param("ss", $patientid, $mammogram);
$stmt_mammogram->execute();
$stmt_mammogram->store_result();
$stmt_mammogram->close();

$query = "INSERT INTO `STI` (`patientid`, `sti`) VALUES (?, ?);";
$stmt_sti = $con->prepare($query);
$stmt_sti->bind_param("ss", $patientid, $sti);
$stmt_sti->execute();
$stmt_sti->store_result();
$stmt_sti->close();

$query = "INSERT INTO `Colonoscopy` (`patientid`, `colonoscopy`) VALUES (?, ?);";
$stmt_colonoscopy = $con->prepare($query);
$stmt_colonoscopy->bind_param("ss", $patientid, $colonoscopy);
$stmt_colonoscopy->execute();
$stmt_colonoscopy->store_result();
$stmt_colonoscopy->close();

$query = "INSERT INTO `PapSmear` (`patientid`, `papsmear`) VALUES (?, ?);";
$stmt_papsmear = $con->prepare($query);
$stmt_papsmear->bind_param("ss", $patientid, $papsmear);
$stmt_papsmear->execute();
$stmt_papsmear->store_result();
$stmt_papsmear->close();

echo "sid is $sid and patientid is $patientid";
?>
<html>
    <head>
        <title>ChowningRoster</title>
    </head>
    <body>
        <h1>Add Student Confirm</h1>
    </body>
</html>