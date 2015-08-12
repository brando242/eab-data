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
$dob_month = array(
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
  echo "        <option value=\"$month\">$dob_month[$month]</option>\n";
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
        <select name="city"/>
<?php
$cities = array("Birmingham","Montgomery","Huntsville","Mobile");
for ($city_count = 0; $city_count <count($cities); $city_count++){
  echo"        <option value=\"$cities[$city_count]\">$cities[$city_count]</option>\n";
}
?>
        </select>
        <input type="text" name="state"/>
        <input type="text" name="zip"/>
      Phone Number:
        <input type="text" name="phone_number"/>
      <!--Do I deal with phone number asa string or as a numerical value since I am using php???-->
      Email:
        <input type="text" name="email_address"/>

<!--Add a header here to separate normal patient information and contact information from the Demographic stuff below?? DEMOGRAPHICS-->
      Gender:
        <select name="gender"/>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="transgender">Transgender</option>
        </select>
      Ethnicity:
        <select name="ethnicity"/>
          <option value="hispanic">Hispanic</option>
          <option value="non-hispanic">Non-hispanic</option>
        </select>
      Race:
        <select name="race"/>
<?php
$races = array("White","Black or African American","American Indian or Alaska Native","Asian","Native Hawaiian or Other Pacific Islander");
for ($race_count = 0; $race_count <count($races); $race_count++){
  echo"        <option value=\"$races[$race_count]\">$races[$race_count]</option>\n";
}
?>
        </select>
      What is your primary language?:
        <select name="language"/>
          <option value="english">English</option>
          <option value="spanish">Spanish</option>
          <option value="mandarin">Mandarin Chinese</option>
        <!--Need to include coding here that allows users to input their own language of choice and then have that populate into the database for future users-->
        </select>
      What is your Citizenship Status?:
        <select name="citizen"/>
          <option value="us citizen">US Citizen</option>
          <option value="permanent resident">Permanent Resident</option>
          <option value="undocumented resident">Undocumented Resident</option>
        </select>

      <!--Social History Here-->
      What type of home do you live in?
        <select name="hometypeid">
          <option value="1">Homeless</option>
          <option value="2">Homeless Shelter</option>
          <option value="3">Apartment or Residence you Pay Rent at</option>
          <option value="4">Personal Residence</option>
        </select> <br />
      Are you the head of your household?
        <select name="housestatid">
          <option value="1">Yes</option>
          <option value="2">No</option>
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
          <option value="never married">Never Married</option>
          <option value="married/partnered">Married/Partnered</option>
          <option value="separated">Separated</option>
          <option value="divorced">Divorced</option>
          <option value="widowed">Widowed</option>
        </select> <br />
      What is your monthly household income?
        <input type="text" name="householdincome"> <br />
      Are you currently employed?
        <select name="employment"/>
          <option value="yes">Yes</option>
          <option value="no">No</option>
          <option value/"employed within last year">I was employed at least once during the past year</option>
        </select> <br />
      Are you on Disabilty?
        <select name="disabilty"/>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select> <br />
      Are you part of the SNAP program formerly known as Foodstamps?
        <select value="foodstamp"/>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      Are you a United States Military Veteran?
        <select name="veteran"/>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      What is your highest level of education completed?
        <select name="educationid">
          <option value="1">Some high school</option>
          <option value="2">High school diploma</option>
          <option value="3">GED</option>
          <option value="4">Some college</option>
          <option value="5">College</option>
          <option value="6">Post-graduate</option>
        </select> <br />
      Do you have health insurance?
        <select name="medicalinsuranceid">
          <option value="1">Yes</option>
          <option value="2">No</option>
        </select> <br />
      Do you have a primary care physican?
        <select name="physicianid">
          <option value="1">Yes</option>
          <option value="2">No</option>
        </select> <br />
      Is your physician at Cooper Green?
        <select name="cooperid">
          <option value="1">Yes</option>
          <option value="2">No</option>
        </select> <br />
 
      Do you smoke?
        <select name="smokeid">
          <option value="1">Current smoker</option>
          <option value="2">Quit</option>
          <option value="3">Never smoked</option>
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
          <option value="never">Never</option>
          <option value="rarely">Quit</option>
          <option value="quit">Rarely</option>
          <option value-"moderate">Moderate</option>
          <option value="daily">Daily</option>
        </select>
        
        <input type="submit" name="submit" value="Submit" />



<!---   -pstat
day of visit  -dayofvisit
visit type  -visittype
reason for visit- reasonforvisit
current data at time of submission - currentdate
allergies
Date of Last Colonoscopy`colodate` DATE(50),
Date of Last Mammogram`mammodate` DATE(50),
Date of Last PAP Smear`papdate` DATE(50),
Date of Last STI/STD Test `stidate` DATE(50) 
Make sure this is separate window that pops up after patient fills out most form. Check in officer will add the practicefusion PRn to this. Practice Fusion PRN  -- patientid -->


    </form>
  </body>
</html>