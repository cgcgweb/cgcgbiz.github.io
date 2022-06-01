<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

</head>
<body>
<?php 

$r = "";
$levels = substr_count(getcwd(), "/");
$levels -= 4;
for ($i = 0; $i < $levels; $i++) {
	$r .= "../";
}

include $r.'menu.php';

?>
<style>
h1 {
	color:#0166A3;
	font-size:max(3vw, 24px);
}
p {font-size:18px;}
li {
	list-style-position:inside;
}
li::marker {color: #2DD8A3; font-size:18px;}
.casestudies img, .otherresources img {padding:10px;}
.mixed {display:flex;margin-bottom:16px;}
.mixed img {width:20%; float:left; display:flex;align-items:center;padding:8px;}
.mixed span{width:80%; float:right; font-size:18px; padding-top:5px;display:flex; align-items:center; padding-left:16px;}
.reason {text-align:center;}
.reason p {padding:10px;}
.requestMorebtn {
	background-color: #2DD8A3;
	padding: 12px;
	width: 100% !important;
	display: inline-block;
	text-align: center;
	font-size: 21px;
	text-decoration: none;
	color: white;
	border-radius: 5px;
}
.help a {width:100%;display:inline-block;padding:10px;}
.help a img {width:100%;}
.input.text.col-12, .input.phone.col-12, .input.email.col-12, textarea.input {
	padding: 12px;
	border-radius: 5px;
	border: 3px solid gray;
}
.input.container {padding:10px;}
</style>
<div class="row main" style="padding-left:0; padding-top:10px;">
	<div class="col-3 desktop" style="position:fixed;"><img class="col-12" src="<?php echo $r; ?>media/beagle.svg"/></div>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<h1 style="color:#0166A3;">Thank You!</h1>
		<div class="proactive col-10">
			<h2 id="Message" class="green">Thank you for reaching out. A team member will be in contact shortly.</h2>
		</div>
	</div>
</div>

<?php include $r.'footer.php'; ?>

</body>

</html>