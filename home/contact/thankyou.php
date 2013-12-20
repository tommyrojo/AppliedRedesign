<?PHP

$Category = $_POST['Category'];

$PLM = $_POST['PLM'];
$CAM = $_POST['CAM'];
$CAE = $_POST['CAE'];
$CAD = $_POST['CAD'];
$CMM_CNC = $_POST['CMM_CNC'];
$Training = $_POST['Training'];
$Other = $_POST['Other'];



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



$Toemail="PBarrett@Sherpa-Design.com,George.Laird@PredictiveEngineering.com,kyle.dunscomb@appliedcax.com,ian.mcgahey@appliedcax.com,james.mcpherson@appliedcax.com";

$MessageText="

A website information request form has been completed at: appliedcax.com

---------------------------

Company: $Company
Company URL: $CompanyURL
Contact Name: $realname
City: $City
State: $State
country: $country
Email: $email
Phone: $Phone

---------------------------

We are interested in:

PLM: $PLM
CAM: $CAM
CAE: $CAE
CAD: $CAD
CMM_CNC: $CMM_CNC
Training: $Training
Other: $Other

---------------------------

Comments:
$Comments

---------------------------

Referred by: $Referred_By

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

<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMasterDetail.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryData.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryHTMLDataSet.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
var dsEvents = new Spry.Data.HTMLDataSet("../news/event_items.html", "newsitem", {sortOnLoad: "Date", sortOrderOnLoad: "descending"});
dsEvents.setColumnType("Date", "date");
dsEvents.setColumnType("Category", "number");

var myFilter = function(dataSet, row, rowNumber)
{
	if (row["Show"] != 1) 
	return null;

var myData = row['Date'];
da = new Date(myData); 
dm = da.getMonth() + 1; // gets month in number 0=January, 11=December add one to reflect actual month
if (dm == 1) dm = "January";
if (dm == 2) dm = "February";
if (dm == 3) dm = "March";
if (dm == 4) dm = "April";
if (dm == 5) dm = "May";
if (dm == 6) dm = "June";
if (dm == 7) dm = "July";
if (dm == 8) dm = "August";
if (dm == 9) dm = "September";
if (dm == 10) dm = "October";
if (dm == 11) dm = "November";
if (dm == 12) dm = "December";

db = da.toGMTString() // convert to a string
dc = db.split(" ") // split the string on spaces
if ( eval( dc[3] ) < 1970 ) dc[3] = eval( dc[3] ) +100 // correct any date before 1970

// Wed 19 Jan 2007 01:30:00 -0700
// [0] Day of week
// [1] Date
// [2] Month
// [3] Year
// [4] Time
// [5] GMT zone
dd = dc[0] + " " + dm + " " + dc[1] + ", " + dc[3]; // format date
row['Date'] = dd;
return row;
}

dsEvents.filter(myFilter);

//-->
</script>
<!--[if IE 5]>
<style type="text/css"> 
#outerWrapper #contentWrapper #leftCol {
  width: 226px;
}
#outerWrapper #contentWrapper #rightCol {
  width: 310px;
}
</style>
<![endif]-->
<!--[if IE]>
<style type="text/css"> 
#outerWrapper #contentWrapper #content {
  zoom: 1;
}
</style>
<![endif]-->

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


<div id="outerWrapper">
 <?PHP include ('../includes/head.inc'); ?>

 <div id="contentWrapper">
  <div id="topNav">
  <?PHP include ('../includes/topNav.inc'); ?>

  </div>
  <div id="leftCol">
  <?PHP include ('../includes/products.inc'); ?>

   <?PHP include ('../includes/loc.inc'); ?>

  </div>
  <div id="rightCol">
  <?PHP include ('../includes/events.inc'); ?>

   <p><br class="clearFloat" />
    <!--END Accordion-->
   </p>
</div>
  <!--END rightCol-->
  <div id="content">
   <h1>Information Received</h1>
   <h2>Thank you for submitting your information. We will contact you as soon as possible.</h2>
  </div>
  <!--END Content-->
  <br class="clearFloat" />
 </div>
 <!--END ContentWrapper-->
 <?PHP include ('../includes/footer.inc'); ?>

</div>
<!--END OuterWrapper-->
<p>&nbsp;</p>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1", { useFixedPanelHeights: false, transition: Spry.squareTransition, duration: 800, defaultPanel: -1 });
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>

</body>
</html>