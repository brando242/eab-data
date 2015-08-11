<html>
  <head>
    <title>EAB New Patient Intake Form</title>
  </head>
  <body>
    <h1>EAB New Patient Intake Form</h1>
    <p> Please update your information in the form below.</p>
    <!-- Form for adding user -->
    <form action="newpatientform_do.php" method="get" >
      First Name: <input type="text" name="fname"/>
      Last Name: <input type="text" name="lname"/>
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
      <!--Patient address (city, state, zipcode) and phone number, email will GO HERE-->
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
$levels = array("MS1","MS2","MS3","MS4","PGY1","PGY2","PGY3","PGY4","Fellow","Attending","Wise Yoda Master");
for ($level_count = 0; $level_count <count($levels); $level_count++){
  echo"        <option value=\"$levels[$level_count]\">$levels[$level_count]</option>\n";
}
?>
      </select>
      Favorite Programming Language:
      <select name="proglang" class="form-control">
<?php
$proglangs = array("PHP","C","C++","Javascript","Java","Python","Ruby");
for ($proglang_count = 0; $proglang_count <count($proglangs); $proglang_count++){
  echo"        <option value=\"$proglangs[$proglang_count]\">$proglangs[$proglang_count]</option>\n";
}
?>
      </select>
      </div>
      <input type="submit" name="submit" value="Submit, if you dare"/>
    </form>
  </body>
</html>
<?php require_once("includes/footer.php"); ?>
