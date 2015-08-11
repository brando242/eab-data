<html>
  Number of children under 18
    <select name="numchildren">
      <?php
          $numchildrens = array("0","1","2","3","4","5","6","7","8");
          for ($numchildren_count = 0; $numchildren_count <count($numchildrens)+1; $numchildren_count++){
              echo"        <option value=\"$numchildrens[$numchildren_count]\">$numchildrens[$numchildren_count]</option>\n";
          }
      ?>
    </select> <br />

  Number of people in your household
    <select name="numfammember">
      <?php
          $numfammembers = array("1","2","3","4","5","6","7","8","9","10","11","12","13");
          for ($numfammember_count = 0; $numfammember_count <count($numfammembers)+1; $numfammember_count++){
              echo"        <option value=\"$numfammembers[$numfammember_count]\">$numfammembers[$numfammember_count]</option>\n";
          }
      ?>
    </select> <br />

  Are you the head of your household?
    <select name="housestatid">
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select> <br />

  What is your monthly household income?
    <input type="text" name="householdincome"> <br />

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

  If current or past smoker, how many packs a day do/did you smoke?
    <select name="packsmoked">
      <?php
          $packsmokeds = array("0.5","1","1.5","2","2.5","3","3.5","4","4.5","5","5.5","6","6.5","7");
          for ($packsmoked_count = 0; $packsmoked_count <count($packsmokeds)+1; $packsmoked_count++){
              echo"        <option value=\"$numfammembers[$numfammember_count]\">$numfammembers[$numfammember_count]</option>\n";
          }
      ?>
    </select> <br />

  Is your physician at Cooper Green?
    <select name="cooperid">
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select> <br />

  Do you have a primary care physican?
    <select name="physicianid">
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select> <br />

  What is your highest level of education completed?
    <select name="educationid">
      <option value="1">Some high school</option>
      <option value="2">High school diploma</option>
      <option value="3">GED</option>
      <option value="4">Some college</option>
      <option value="5">College</option>
      <option value="6">Post-graduate</option>
    </select> <br />

  What type of home do you live in?
    <select name="hometypeid">
      <option value="1">House</option>
      <option value="2">Apartment</option>
      <option value="3">Homeless shelter</option>
    </select> <br />

  Do you have health insurance?
    <select name="medicalinsuranceid">
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select> <br />

</html>