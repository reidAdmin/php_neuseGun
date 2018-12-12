<?php
// Initialized variables to null.
$F_NAME_PAHError ="";
$L_NAME_PAHError ="";
$EMAIL_PAHError ="";
$ADD_PAHError ="";
$CITY_PAHError ="";
$STATE_PAHError ="";
$ZIP_PAHError ="";
$CELL_PAHError ="";
$DOB_PAHError ="";
$SEX_PAHError ="";
$PSWD_PAHError ="";
$RE_PSWD_PAHError ="";


// When submitting form below function will execute.

if(isset($_POST['SUBMIT'])){
if (empty($_POST["F_NAME_PAH"])) {
$F_NAME_PAHError = "Primary Account holder's first name is required";
} else {
$F_NAME_PAH = test_input($_POST["F_NAME_PAH"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$F_NAME_PAH)) {
$F_NAME_PAHError = "Only letters and white space allowed";
}
if (empty($_POST["L_NAME_PAH"])) {
$L_NAME_Error = "Primary Account holder's last name is required";
} else {
$L_NAME_PAH = test_input($_POST["L_NAME_PAH"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$L_NAME_PAH)) {
$L_NAME_PAHError = "Only letters and white space allowed";
}
}
if (empty($_POST["EMAIL_PAH"])) {
$EMAIL_PAHError = "Email is required";
} else {
$EMAIL_PAH = test_input($_POST["EMAIL_PAH"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$EMAIL_PAH)) {
$EMAIL_PAHError = "Invalid email format";
}
}
if (empty($_POST["ADD_PAH"])) {
$ADD_PAHError = "Address is required";
} else {
$ADD_PAH = test_input($_POST["ADD_PAH"]);
}
if (empty($_POST["CITY_PAH"])) {
$CITY_PAHError = "City is required";
} else {
$CITY_PAH = test_input($_POST["CITY_PAH"]);
}
if(isset($_REQUEST['select_box']) && $_REQUEST['select_box'] == '0') { 
  echo 'Please select a state.'; 
} 
if (empty($_POST["ZIP_PAH"])) {
$ZIP_PAHError = "zip code is required";
} else {
$ZIP_PAH = test_input($_POST["ZIP_PAH"]);
}
if (empty($_POST["CELL_PAH"])) {
$CELL_PAHError = "cell phone number is required";
} else {
$CELL_PAH = test_input($_POST["000-0000-0000"]);
// check if cell phone syntax is valid or not
if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $CELL_PAH)) {
$CELL_Error = "Invalid cell phone format";
}
// Date of Birth mask MM-DD-YYYY
if(!preg_match("/^[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}$/", $_POST["DOB_PAH"]) === 0)
$DOB_PAHError = '<p class="errText">Date of Birth must comply with this format: MM-DD-YYYY</p>';
}
if(
}
if (empty($_POST["PSWD_PAH"])) {
$PSWD_PAHError = "Password is required";
} else {
$PSWD_PAH = test_input($_POST["PSWD_PAH"]);
}
if (empty($_POST["RE_PSWD_PAH"])) {
$RE_PSWD_PAHError = "Re-enter password please!";
} else {
$RE_PSWD_PAH = test_input($_POST["RE_PSWD_PAH"]);
}
if ($_POST['PSWD_PAH'] != $_POST['RE_PSWD_PAH']) {
	$_SESSION['Error'][] = "Passwords don't match";
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
?>