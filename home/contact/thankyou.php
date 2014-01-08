<?PHP

$Category = $_POST['Category'];

$nx = $_POST['nx'];
$nxfordesign = $_POST['nxfordesign'];
$nxformanufacturing = $_POST['nxformanufacturing'];
$nxforsimulation = $_POST['nxforsimulation'];
$femap = $_POST['femap'];
$fibersim = $_POST['fibersim'];
$teamcenterplm = $_POST['teamcenterplm'];
$bct = $_POST['bct'];
$cnc = $_POST['cnc'];
$training = $_POST['training'];
$product = $_POST['product'];


$Company = $_POST['Company'];
$CompanyURL = $_POST['CompanyURL'];
$realname = $_POST['realname'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];
$country = $_POST['country'];
$City = $_POST['City'];
$State = $_POST['State'];
$Referred_By = $_POST['referral'];


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
Referral: $Referred_By

---------------------------

We are interested in: $product
						    
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
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7721704-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
<script>
	$(document).ready(function () {
	    // Handler for .ready() called.
	    window.setTimeout(function () {
	        location.href = "/contact/contact.html?pageref=thankyou";
	    }, 500)
	});
</script>
</body>
</html>
