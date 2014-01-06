<?PHP

$Category = $_POST['Category'];

$nx = $_POST['NX'];
$nxfordesign = $_POST['NX CAD'];
$nxformanufacturing = $_POST['NX CAM'];
$nxforsimulation = $_POST['NX CAE'];
$femap = $_POST['Femap'];
$fibersim = $_POST['Fibersim'];
$teamcenterplm = $_POST['Teamcenter'];
$bct = $_POST['BCT'];
$cnc = $_POST['CNC Programming'];
$training = $_POST['Training'];


$Company = $_POST['Company'];
$CompanyURL = $_POST['CompanyURL'];
$realname = $_POST['realname'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];
$country = $_POST['country'];
$City = $_POST['City'];
$State = $_POST['State'];
$Referred_By = $_POST['Referred_By'];


$Comments = $_POST['Comments'];


$attachment =  $_FILES['attachment']['name'];
$attachment = str_replace(" ", "_", "$attachment");
$attachment = str_replace("#", "_", "$attachment");
$uploaddir = "/home/appliedc/public_html/support/files/";
$uploadfile = $uploaddir . basename($attachment);

if ($attachment != '') {
move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadfile);
$show_attachment = 'yes';
}


$header = "Reply-To: $realname <$email>\r\n"; 
$header = "Return-Path: $realname <$email>\r\n"; 
$header = "From: $realname <$email>\r\n"; 



$Toemail="james.mcpherson@appliedcax.com,online.tom@gmail.com";

///PBarrett@Sherpa-Design.com,George.Laird@PredictiveEngineering.com,kyle.dunscomb@appliedcax.com,ian.mcgahey@appliedcax.com,///

$subject="Someone sent you a contact request";

$MessageText="

A website information request form has been completed at: appliedcax.com

---------------------------

Company: $Company
Contact Name: $realname
Email: $email
Phone: $Phone

---------------------------

We are interested in:

NX: $nx
NX CAD: $nxfordesign
NX CAM: $nxformanufacturing
NX CAE: $nxforsimulation
Femap: $femap
Fibersim: $fibersim
Teamcenter: $teamcenterplm
BCT: $bct
CNC Programming: $cnc
Training: $training
						    
---------------------------

Comments:
$Comments

---------------------------

";

$spam = 'no';


if (preg_match_all("/<a|http:/i", implode($_POST), $out) > 2) {
$spam='true';
}


if ($_POST['realname'] == "" || $_POST['email'] == "" || $_POST['Phone'] == "") {
$spam='true';
}


if ($spam == 'no') {
mail($Toemail, $Category, $MessageText, $header); 
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:spry="http://ns.adobe.com/spry">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Applied CAx</title>
</head>
<body>

<!-- Google Code for Contact Form Thank You Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1033447653;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "6-AdCKueuAUQ5dHk7AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1033447653/?value=0&amp;label=6-AdCKueuAUQ5dHk7AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>
