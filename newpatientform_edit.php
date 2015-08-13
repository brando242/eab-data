<?php
error_reporting (E_ALL);
ini_set("display_errors",1);

$con = new mysqli($host, $db_user, $db_pass, $db_db);

// Query for acquiring cities from database
$query = "SELECT `cityid`, `city` FROM `City`;";
        $stmt_city = $con->prepare($query);
        $stmt_city->execute();
        $stmt_city->store_result();
        $stmt_city->bind_result($city);

$query = "SELECT `stateid`, `state` FROM `State`;";
        $stmt_state = $con->prepare($query);
        $stmt_state->execute();
        $stmt_state->store_result();
        $stmt_state->bind_result($stateid,$state);
        
$query = "SELECT `zipid`, `zip` FROM `Zip`;";
        $stmt_zip = $con->prepare($query);
        $stmt_zip->execute();
        $stmt_zip->store_result();
        $stmt_zip->bind_result($zipid,$zip);

$query = "SELECT `ethnicityid`, `ethnicity` FROM `Ethnicity`;";
        $stmt_ethnicity = $con->prepare($query);
        $stmt_ethnicity->execute();
        $stmt_ethnicity->store_result();
        $stmt_ethnicity->bind_result($ethnicityid,$ethnicity);

$query = "SELECT `genderid`, `gender` FROM `Gender`;";
        $stmt_gender = $con->prepare($query);
        $stmt_gender->execute();
        $stmt_gender->store_result();
        $stmt_gender->bind_result($genderid,$gender);
        
$query = "SELECT `raceid`, `race` FROM `Race`;";
        $stmt_race = $con->prepare($query);
        $stmt_race->execute();
        $stmt_race->store_result();
        $stmt_race->bind_result($raceid,$race);
        
$query = "SELECT `languageid`, `language` FROM `PrimaryLanguage`;";
        $stmt_language = $con->prepare($query);
        $stmt_language->execute();
        $stmt_language->store_result();
        $stmt_language->bind_result($languageid,$language);
        
$query = "SELECT `citizenid`, `citizen` FROM `CitizenStatus`;";
        $stmt_citizen = $con->prepare($query);
        $stmt_citizen->execute();
        $stmt_citizen->store_result();
        $stmt_citizen->bind_result($citizenid,$citizen);
        
$query = "SELECT `cooperid`, `cooper` FROM `CooperGreen`;";
        $stmt_cooper = $con->prepare($query);
        $stmt_cooper->execute();
        $stmt_cooper->store_result();
        $stmt_cooper->bind_result($cooperid,$cooper);

$query = "SELECT `physicianid`, `physician` FROM `PrimaryPhysician`;";
        $stmt_physician = $con->prepare($query);
        $stmt_physician->execute();
        $stmt_physician->store_result();
        $stmt_physician->bind_result($physicianid,$physician);
        
$query = "SELECT `educationid`, `education` FROM `EducationLevel`;";
        $stmt_education = $con->prepare($query);
        $stmt_education->execute();
        $stmt_education->store_result();
        $stmt_education->bind_result($educationid,$education);
        
$query = "SELECT `housestatid`, `housestat` FROM `HeadofHousehold`;";
        $stmt_housestat = $con->prepare($query);
        $stmt_housestat->execute();
        $stmt_housestat->store_result();
        $stmt_housestat->bind_result($housestatid,$housestat);
        
$query = "SELECT `insuranceid`, `insurance` FROM `MedicalInsurance`;";
        $stmt_insurance = $con->prepare($query);
        $stmt_insurance->execute();
        $stmt_insurance->store_result();
        $stmt_insurance->bind_result($insuranceid,$insurance);
        
$query = "SELECT `disabilityid`, `disability` FROM `Disability`;";
        $stmt_disability = $con->prepare($query);
        $stmt_disability->execute();
        $stmt_disability->store_result();
        $stmt_disability->bind_result($disabilityid,$disability);
        
$query = "SELECT `veteranid`, `veteran` FROM `Veteran`;";
        $stmt_veteran = $con->prepare($query);
        $stmt_veteran->execute();
        $stmt_veteran->store_result();
        $stmt_veteran->bind_result($veteranid,$veteran);
        
$query = "SELECT `hometypeid`, `hometype` FROM `HomeType`;";
        $stmt_hometype = $con->prepare($query);
        $stmt_hometype->execute();
        $stmt_hometype->store_result();
        $stmt_hometype->bind_result($hometypeid,$hometype);
        
$query = "SELECT `foodstampid`, `foodstamp` FROM `FoodStamp`;";
        $stmt_foodstamp = $con->prepare($query);
        $stmt_foodstamp->execute();
        $stmt_foodstamp->store_result();
        $stmt_foodstamp->bind_result($foodstampid,$foodstamp);
        
$query = "SELECT `alcoholid`, `alcohol` FROM `Alcohol`;";
        $stmt_alcohol = $con->prepare($query);
        $stmt_alcohol->execute();
        $stmt_alcohol->store_result();
        $stmt_alcohol->bind_result($alcoholid,$alcohol);
        
$query = "SELECT `relationshipid`, `relationship` FROM `RelationshipStatus`;";
        $stmt_relationship = $con->prepare($query);
        $stmt_relationship->execute();
        $stmt_relationship->store_result();
        $stmt_relationship->bind_result($relationshipid,$relationship);

$query = "SELECT `transportid`, `transport` FROM `Transport`;";
        $stmt_transport = $con->prepare($query);
        $stmt_transport->execute();
        $stmt_transport->store_result();
        $stmt_transport->bind_result($transportid,$transport);

$query = "SELECT `visittypeid`, `visittype` FROM `VisitType`;";
        $stmt_visittype = $con->prepare($query);
        $stmt_visittype->execute();
        $stmt_visittype->store_result();
        $stmt_visittype->bind_result($visittypeid,$visittype);
        
$query = "SELECT `reasonforvisitid`, `reasonforvisit` FROM `ReasonforVisit`;";
        $stmt_reasonforvisit = $con->prepare($query);
        $stmt_reasonforvisit->execute();
        $stmt_reasonforvisit->store_result();
        $stmt_reasonforvisit->bind_result($reasonforvisitid,$reasonforvisit);
        
$query = "SELECT `dayofvisitid`, `dayofvisit` FROM `DayofVisit`;";
        $stmt_dayofvisit = $con->prepare($query);
        $stmt_dayofvisit->execute();
        $stmt_dayofvisit->store_result();
        $stmt_dayofvisit->bind_result($dayofvisitid,$dayofvisit);
?>
<html>
  <head>
    <title>EAB New Patient Intake Form</title>
  </head>
  <body>
    <h1>EAB New Patient Intake Form</h1>
    <p> Please update your information in the form below.</p>
    <!-- Form for adding user -->
    <form action="newpatientform_do.php" method="get" >
      First Name: 
        <input type="text" name="fname"/>
      Last Name: 
        <input type="text" name="lname"/>
      Date of Birth:
        <select name="dob_month"/>
<?php
//Array of Months
$month_array = array(
  1 =>"January",
  2 =>"February",
  3 =>"March",
  4 =>"April",
  5 =>"May",
  6 =>"June",
  7 =>"July",
  8 =>"August",
  9 =>"September",
  10 =>"October",
  11 =>"November",
  12 =>"December",
);
for ($month = 1; $month < 13; $month++) {
  echo "        <option value=\"$month\">$month_array[$month]</option>\n";
}
?>
        </select>
        <select name="dob_day" class="form-control">
<?php
for ($day = 1; $day < 32; $day++) {
  echo "        <option value=\"$day\">$day</option>\n";
}
?>
        </select>
        <select name="dob_year" class="form-control">
<?php
$year = date("Y");
$year_past = $year - 120;
for ($year; $year > $year_past; $year--){
  echo "        <option value=\"$year\">$year</option>\n";
}
?>
        </select>
        Address:
        <input type="text" name="address_street"/>
        City:
        <select name="city"/>
<?php
while ($stmt_city->fetch()){        
    echo "          <option value=\"$cityid\">$city</option>";
}
?>
        </select>
        State:
        <select name="state"/>
<?php
while ($stmt_state->fetch()){        
    echo "<option value=\"$stateid\">$state</option>";
}
?>
        </select>
        Zip:
        <select name="zip"/>
<?php
while ($stmt_zip->fetch()){        
    echo "<option value=\"$zipid\">$zip</option>";
}
?>
        </select>
      Phone Number:
        <input type="text" name="phone_number"/>

      Email:
        <input type="text" name="email_address"/>

      Gender:
        <select name="gender"/>
<?php
while ($stmt_gender->fetch()){        
    echo "<option value=\"$genderid\">$gender</option>";
}
?>
        </select>
      Ethnicity:
      <select name="ethnicity"/>
<?php
while ($stmt_ethnicity->fetch()){        
    echo "<option value=\"$ethnicityid\">$ethnicity</option>";
}
?>
        </select>
      Race:
        <select name="race"/>
<?php
while ($stmt_race->fetch()){        
    echo "<option value=\"$raceid\">$race</option>";
}
?>
        </select>
      What is your primary language?:
        <select name="language"/>
<?php
while ($stmt_language->fetch()){        
    echo "<option value=\"$languageid\">$language</option>";
}
?>
        </select>
      What is your Citizenship Status?:
        <select name="citizen"/>
<?php
while ($stmt_citizen->fetch()){        
    echo "<option value=\"$citizenid\">$citizen</option>";
}
?>
        </select>

      <!--Social History Here-->
      What type of home do you live in?
        <select name="hometype">
<?php
while ($stmt_hometype->fetch()){        
    echo "<option value=\"$hometypeid\">$hometype</option>";
}
?>
        </select> <br />
      Are you the head of your household?
        <select name="housestat">
<?php
while ($stmt_housestat->fetch()){        
    echo "<option value=\"$housestatid\">$housestat</option>";
}
?>
        </select> <br />
      Number of people in your household:
        <select name="numfammember">
<?php
$numfammembers = array("1","2","3","4","5","6","7","8","9","10","11","12","13");
    for ($numfammember_count = 0; $numfammember_count <count($numfammembers)+1; $numfammember_count++){
        echo"        <option value=\"$numfammembers[$numfammember_count]\">$numfammembers[$numfammember_count]</option>\n";
    }
?>
        </select> <br />
      Number of children under 18 in your household:
        <select name="numchildren">
<?php
$numchildrens = array("0","1","2","3","4","5","6","7","8");
    for ($numchildren_count = 0; $numchildren_count <count($numchildrens)+1; $numchildren_count++){
        echo"        <option value=\"$numchildrens[$numchildren_count]\">$numchildrens[$numchildren_count]</option>\n";
    }
?>
        </select> <br />
      What is your relationship status?
        <select name="relationship"/>
<?php
while ($stmt_relationship->fetch()){        
    echo "<option value=\"$relationshipid\">$relationship</option>";
}
?>
        </select> <br />
      What is your monthly household income?
        <input type="text" name="householdincome"> <br />
      Are you currently employed?
        <select name="employment"/>
<?php
while ($stmt_employment->fetch()){        
    echo "<option value=\"$employmentid\">$employment</option>";
}
?>
        </select> <br />
      Are you on Disabilty?
        <select name="disability"/>
<?php
while ($stmt_disability->fetch()){        
    echo "<option value=\"$disabilityid\">$disability</option>";
}
?>
        </select> <br />
      Are you part of the SNAP program formerly known as Foodstamps?
        <select value="foodstamp"/>
<?php
while ($stmt_foodstamp->fetch()){        
    echo "<option value=\"$foodstampid\">$foodstamp</option>";
}
?>
        </select>
      Are you a United States Military Veteran?
        <select name="veteran"/>
<?php
while ($stmt_veteran->fetch()){        
    echo "<option value=\"$veteranid\">$veteran</option>";
}
?>
        </select>
      What is your highest level of education completed?
        <select name="education">
<?php
while ($stmt_education->fetch()){        
    echo "<option value=\"$educationid\">$education</option>";
}
?>
        </select> <br />
      Do you have health insurance?
        <select name="insurance">
<?php
while ($stmt_insurance->fetch()){        
    echo "<option value=\"$insuranceid\">$insurance</option>";
}
?>
        </select> <br />
      Do you have a primary care physican?
        <select name="physician">
<?php
while ($stmt_physician->fetch()){        
    echo "<option value=\"$physicianid\">$physician</option>";
}
?>
        </select> <br />
      Is your physician at Cooper Green?
        <select name="cooper">
<?php
while ($stmt_cooper->fetch()){        
    echo "<option value=\"$cooperid\">$cooper</option>";
}
?>
        </select> <br />
      If current or past smoker, for how many years have you (or did you) smoke?
        <select name="timesmoked">
<?php
for ($timesmoked_array = 1; $timesmoked_array < 71; $timesmoked_array++) {
    echo "        <option value=\"$timesmoked_array\">$timesmoked_array</option>\n";
}
?>
        </select>
      If current or past smoker, how many packs a day do/did you smoke?
        <select name="packsmoked">
<?php
$packsmokeds = array("0.5","1","1.5","2","2.5","3","3.5","4","4.5","5","5.5","6","6.5","7");
    for ($packsmoked_count = 0; $packsmoked_count <count($packsmokeds)+1; $packsmoked_count++){
        echo"        <option value=\"$packsmokeds[$packsmoked_count]\">$packsmokeds[$packsmoked_count]</option>\n";
        }
?>
        </select>

      How often do you drink alcohol?
        <select value="alcohol"/>
<?php
while ($stmt_alcohol->fetch()){        
    echo "<option value=\"$alcoholid\">$alcohol</option>";
}
?>
        </select>
      How do you primarily get to clinic?
        <select value="transport"/>
<?php
while ($stmt_transport->fetch()){        
    echo "<option value=\"$transportid\">$transport</option>";
}
?>
        </select>
       How did you hear about EAB? 
        <input type="text" name="heareab"/>
        
       How would you describe your visit type?
        <select value="visittype"/>
<?php
while ($stmt_visittype->fetch()){        
    echo "<option value=\"$visittypeid\">$visittype</option>";
}
?>
        </select>
        Which option best describes the reason for your visit?
        <select value="reasonforvisit"/>
<?php
while ($stmt_reasonforvisit->fetch()){        
    echo "<option value=\"$reasonforvisitid\">$reasonforvisit</option>";
}
?>
        </select>
        Are you visiting on Wednesday or Sunday?
        <select value="dayofvisit"/>
<?php
while ($stmt_dayofvisit->fetch()){        
    echo "<option value=\"$dayofvisitid\">$dayofvisit</option>";
}
?>
        </select>
    
    Estimate Date of Last Mammogram:
    <select name="mammogram_month"/>
<?php
);
for ($month = 1; $month < 13; $month++) {
  echo "        <option value=\"$month\">$month_array[$month]</option>\n";
}
?>
        </select>
        <select name="mammogram_day" class="form-control">
<?php
for ($day = 1; $day < 32; $day++) {
  echo "        <option value=\"$day\">$day</option>\n";
}
?>
        </select>
        <select name="mammogram_year" class="form-control">
<?php
$year = date("Y");
$year_past = $year - 120;
for ($year; $year > $year_past; $year--){
  echo "        <option value=\"$year\">$year</option>\n";
}
?>
        </select>

    Estimate Date of Last Colonoscopy:
    <select name="colonoscopy_month"/>
<?php
);
for ($month = 1; $month < 13; $month++) {
  echo "        <option value=\"$month\">$month_array[$month]</option>\n";
}
?>
        </select>
        <select name="colonoscopy_day" class="form-control">
<?php
for ($day = 1; $day < 32; $day++) {
  echo "        <option value=\"$day\">$day</option>\n";
}
?>
        </select>
        <select name="colonoscopy_year" class="form-control">
<?php
$year = date("Y");
$year_past = $year - 120;
for ($year; $year > $year_past; $year--){
  echo "        <option value=\"$year\">$year</option>\n";
}
?>
        </select>
    

    Estimate Date of Last STI/STD Test:
    <select name="STI_month"/>
<?php
);
for ($month = 1; $month < 13; $month++) {
  echo "        <option value=\"$month\">$month_array[$month]</option>\n";
}
?>
        </select>
        <select name="STI_day" class="form-control">
<?php
for ($day = 1; $day < 32; $day++) {
  echo "        <option value=\"$day\">$day</option>\n";
}
?>
        </select>
        <select name="STI_year" class="form-control">
<?php
$year = date("Y");
$year_past = $year - 120;
for ($year; $year > $year_past; $year--){
  echo "        <option value=\"$year\">$year</option>\n";
}
?>
        </select>

    Estimate Date of Last PAP Smear:
    <select name="PAP_month"/>
<?php
for ($month = 1; $month < 13; $month++) {
  echo "        <option value=\"$month\">$month_array[$month]</option>\n";
}
?>
        </select>
        <select name="PAP_day" class="form-control">
<?php
for ($day = 1; $day < 32; $day++) {
  echo "        <option value=\"$day\">$day</option>\n";
}
?>
        </select>
        <select name="PAP_year" class="form-control">
<?php
$year = date("Y");
$year_past = $year - 120;
for ($year; $year > $year_past; $year--){
  echo "        <option value=\"$year\">$year</option>\n";
}
?>    
        </select>
    <input type="submit" name="submit" value="Submit" />

<!---   -pstat
current data at time of submission - currentdate
allergies 
Make sure this is separate window that pops up after patient fills out most form. Check in officer will add the practicefusion PRn to this. Practice Fusion PRN  -- patientid -->


    </form>
  </body>
</html>
<?php
$stmt_city->close();
$stmt_state->close();
$stmt_zip->close();
$stmt_ethnicity->close();
$stmt_gender->close();
$stmt_race->close();
$stmt_language->close();
$stmt_citizen->close();
$stmt_cooper->close();
$stmt_physician->close();
$stmt_education->close();
$stmt_housestat->close();
$stmt_insurance->close();
$stmt_disability->close();
$stmt_veteran->close();
$stmt_hometype->close();
$stmt_transport->close();
$stmt_foodstamp->close();
$stmt_alcohol->close();
$stmt_relationship->close();
$stmt_visittype->close();
$stmt_reasonforvisit->close();
$stmt_dayofvisit->close();
$con->close();
?>
