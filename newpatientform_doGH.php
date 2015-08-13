<?php

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
$foodstampid = $_GET['foodstampid']
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

$query = "INSERT INTO `Patient` (`fname`, `lname`, `genderid`, `raceid`, `ethnicityid`, `dob`, `address_street`, `cityid`, `stateid`, `zipid`, `phone_number`, `email_address`, `citizenid`, `languageid`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt_insert = $con->prepare($query);
$stmt_insert->bind_param("ssssssssssssss", $fname, $lname, $genderid, $raceid, $ethnicityid, $dob, $address_street, $cityid, $stateid, $zipid, $phone_number, $email_address, $citizenid, $languageid);
$stmt_insert->execute();
$stmt_insert->store_result();
$stmt_insert->close();
$con->close();


?>


