<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="icon" href="https://cgcg.biz/wp-content/uploads/2020/02/favicon.png" />
</head>
<body>
<style>
html {
	scroll-behavior: smooth;
} 
body {
	margin: 0;
	overflow-x:hidden;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	width:100vw;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;} 
.col-2d4 {width: 20%;}
[class*="col-"] {float: left;}
.row {
	width:100%;
	padding-right:3%;
	padding-left:3%;
}
* {
	box-sizing:border-box;
}
@media screen and (max-width:900px) {
	[class*="col-"] {
		width: 100%;
	}
	.row.header {
		padding: 0;
	}
	.desktop {display:none !important;}
	nav .menu {
		padding: 40px;
		min-width: 101vw;
		text-align: center;
		padding-left: 0;
		padding-right: 0;
		background-color: #F0F8FC;
	}
}
@media screen and (min-width:900px) {
	.mobile {display:none !important;}
	nav .menu {
		padding: 40px;
		min-width: 60%;
		text-align: center;
	}
	.dropdown-content {position:absolute;left:25%;}
}
nav {overflow:hidden;}
.nav {
	text-decoration:none; color:black;
}
.nav.forbes {
	float: right;
}
nav div {
	float: left;
}

nav .logo {
  padding: 20px;
}

nav .logo.eagle {
	width: 100%;
	padding: 0;
	position: absolute;
	text-align: center;
	top: 16px;
}
.eagle .nav.logo {
	width: 33%;
}

.menu .nav {
	margin: 1vw;
}
.dropdown {
  position: relative;
}
.dropdown-content {
	display: none;
	background-color: #E5E5E5;
	overflow: auto;
	z-index: 1;
	padding-top: 16px;
}
.dropdown-content a {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.show {display: inline;}
#dropper a {
	color: #757575 !important;
	font-weight: bold;
}
.green {
	color:#2DD8A3;
}
.blue {
	color:#0166A3;
}
.spacer {
	margin-top:24px;
}
.gray {
	color:gray;
}
img {
	max-width:100% !important;
}
</style>

<div class="row header">
<nav>
<div class="logo"><img class="nav logo" src="media/CGCG.svg"/></div>
<div class="logo eagle mobile"><img class="nav logo" src="media/ex.svg"/></div>
<div class="menu">
	<a class="nav navlink" href="">home</a>
	<a class="nav navlink" href="about">about</a>
	<a class="nav navlink" id="sopener" onclick="drop()" href="#">services ▼</a>
	<a class="nav navlink" href="resources">resources</a>
	<a class="nav navlink" href="lets-talk">contact</a>	
	<br>
	<div id="dropper" class="dropdown-content">
		<div style="width:50%">
			<span class="sh">Managed Services:</span>
			<a href="managed-it-services">Managed IT Services</a>
			<a href="cybersecurity-solutions">Cybersecurity Solutions</a>
			<a target="_blank" href="https://filescience.io">Cloud Backup and Disaster Recovery</a>
			<a href="reputation-management">Reputation Management</a>
		</div>
		<div style="width:50%">
			<span class="sh">Advisory Services:</span>
			<a href="cisoaas">CISOaaS</a>
			<a href="ctoas">CTOaS</a>
			<a href="cioas">CIOaS</a>
			<a href="socas">SOCaS</a>
			<a href="private-digital-investigations">Private Digital Investigations</a>
		</div>
	</div>
</div>
<img class="nav forbes desktop" src="media/Forbes.svg"/>
</nav>

<script>
function drop() {
  document.getElementById("dropper").classList.toggle("show");
  if(document.getElementById("sopener").innerText == "services ▼") {
	  document.getElementById("sopener").innerText = "services ▲"
  }else {
	  document.getElementById("sopener").innerText = "services ▼"
  }
}

</script>
</div>


<style>
h1 {
	color:#0166A3;
	font-size:max(3vw, 24px);
}
p {font-size:18px;}
.mixed {display:flex;margin-bottom:16px;}
.mixed img {width:20%; float:left; display:flex;align-items:center;padding:8px;}
.mixed span{width:80%; float:right; font-size:18px; padding-top:5px;display:flex; align-items:center; padding-left:16px;}
.reason {text-align:center;}
.reason p {padding:10px;}
.requestMorebtn {
	background-color: #2DD8A3;
	padding: 10px;
	width: 100% !important;
	display: inline-block;
	text-align: center;
	font-size: 21px;
	text-decoration: none;
	color: white;
	border-radius: 5px;
	float: right;
}
.help a {width:100%;display:inline-block;padding:10px;}
.help a img {width:100%;}
.input.text.col-12, .input.phone.col-12, .input.email.col-12, textarea.input {
	padding: 12px;
	border-radius: 5px;
	border: 3px solid gray;
}
.input.container {padding:10px;}
.smi {
	display: block;
}
.input.text.col-12, .input.phone.col-12, .input.email.col-12, textarea.input {
	padding: 18px;
	border-radius: 5px;
	border: none;
	background-color: #F0F8FC;
}
.input.container {padding:10px;padding-left:0;}

.input::placeholder {
	font-size: 18px;
	font-weight: lighter;
	color: #000000 !important;
	opacity: 1;
}
textarea.input::placeholder {
	font-weight: normal;
	font-family: 'Open Sans', Arial;
}
.submitbutton {
	background-color: #0166A3;
	width:120px;
	float:right;
	display: inline-block;
	text-align: center;
	font-size: 21px;
	text-decoration: none;
	color: white;
	border-radius: 5px;
	padding:10px;
}
</style>
<div class="row main" style="padding-left:0; padding-top:10px;">
	<div class="col-3 desktop" style="position:fixed;">
		<img class="col-12" src="media/le.svg"/>
		<div class="smc" style="position: relative;display: block;float: left;margin:24px;">
			<a href="https://www.facebook.com/CGCGLLC/" class="smi"><img src="media/vfb.svg"/></a>
			<a href="https://www.instagram.com/cyberguardianconsulting/" class="smi"><img src="media/vig.svg"/></a>
			<a href="https://www.linkedin.com/company/cyber-guardian-consulting-group-llc-/" class="smi"><img src="media/vli.svg"/></a>
			<a href="https://twitter.com/CyberGuardianCG" style="margin-left: -3px;" class="smi"><img src="media/vtw.svg"/></a>
		</div>
	</div>
	<style>.smi {display: block;}</style>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<img src="media/m.svg" style="width:100%;height: 33.3%;" />
		<h1 style="color:#0166A3;">Cybersecurity and IT Services</h1>
		<div class="mission col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">our mission</h2>
			<h3>To Create a Complete IT Solution Designed to Help Your Business Thrive</h3>
			<p>We’re a security-first Managed IT and Cybersecurity Consultancy that keeps your business and network safe and healthy so you can perform your work unimpeded and worry-free.</p>
			<h3 class="blue">How we stand above competition</h3>
			<br>
			<div>
				<div class="col-4 mixed"><img loading="lazy" src="media/protection.svg" /><span>Our Proprietary CGCG 7-Layer Cyber Armor System ™</span></div>
				<div class="col-4 mixed"><img loading="lazy" src="media/team.svg" /><span>Our Hand Picked Team</span></div>
				<div class="col-4 mixed"><img loading="lazy" src="media/ni3.svg" /><span>Client Relationship Management</span></div>
				<div class="desktop col-12 spacer"></div>
				<div class="col-4 mixed"><img loading="lazy" src="media/setting.svg" /><span>Scalable Model with Granular Control</span></div>
				<div class="col-4 mixed"><img loading="lazy" src="media/scale.svg" /><span>Highly Adaptable Technology Solutions</span></div>
				<div class="col-4 mixed"><img loading="lazy" src="media/ni6.svg" /><span>Savings & Productivity Byproducts</span></div>
			</div>
		</div>
		<div class="partner col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">what makes us a <br> great business partner</h2>
			<p>We take your business as seriously as your technology and believe that your peace of mind is our most important product. Here at Cyber Guardian, we achieve that goal using the three business-technology principles we were founded on:</p>
			<div class="desktop col-12 spacer"></div>
			<div>
				<div class="col-4 reason"><img loading="lazy" src="media/tech.svg" /><br><h3 class="blue">Technology</h3><p>We always deliver the best possible solution that will grow and evolve with your business.</p></div>
				<div class="col-4 reason"><img loading="lazy" src="media/partnership.svg" /><br><h3 class="blue">Partnership</h3><p>We are the trusted business partner you can rely on for solutions that make sense.</p></div>
				<div class="col-4 reason"><img loading="lazy" src="media/value.svg" /><br><h3 class="blue">Value</h3><p>We always optimize your technology to bring the best return on investment.</p></div>
				<div class="col-12">
					<div class="col-12">
						<a href="/lets-talk" class="requestMorebtn">Request More Information</a> 
					</div>
					<div class="col-12">
						<p class="gray">Our established plans might not be for everyone, but we will work with you to find a solution that fits. Request a call with one of our team members to discuss how we can help your organization with managed IT and cybersecurity services.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="help col-10">
			<h2 class="green" style="font-size:max(2vw, 22px);">how we help</h2>
			<h3>We Offer Comprehensive IT and Security Solutions</h3>
			<p>Our cybersecurity and technology experts are ever vigilant in finding new ways to boost productivity and protect our clients. We can help your business by providing managed IT services, cybersecurity services, or both.</p>
			<div class="col-12">
				<div class="col-6"><a href="#"><img loading="lazy"  src="media/managedservices.svg" /></a></div>
				<div class="col-6"><a href="#"><img loading="lazy" src="media/cybersecurity.svg" /></a></div>
			</div>
		</div>
		<div class="col-10 testmonials">
			<h2 class="green" style="font-size:max(2vw, 22px);">testimonials</h2>
			<p class="gray">Sometimes our clients can explain the value we provide even better than we can. Here is what a few other organizations have had to say about their experience partnering with Cyber Guardian Consulting Group:</p>
			<div class="col-12">
				<div class="col-12"><a href="#"><img loading="lazy" src="media/testm.svg" /></a></div>
			</div>
		</div>
		<div class="col-10 ourpartners">
			<h2 class="green" style="font-size:max(2vw, 22px);">our partners</h2>
			<div class="col-12"><img loading="lazy" src="media/nour.svg" /></div>
		</div>
		<div class="col-10 contacthome">
			<h2 class="green" style="font-size:max(2vw, 22px);">we are here to help</h2>
			<h3>Forget about Long-Term Contracts and Pushy Sales Tactics</h3>
			<p>If this sounds like the approach to cybersecurity and managed IT solutions that you've been looking for, terrific - fill out the contact form or <b>call us at 845-444-8273</b> today to schedule a consultation with one of senior team members today.</p>
			<div class="col-12">
				<form action="" method="POST">
					<div class="input container col-6"><input type="text" placeholder="First Name" class="input text col-12" name="fname" /> </div>
					<div class="input container col-6"><input type="text" placeholder="Last Name" class="input text col-12" name="lname" /> </div>
					<div class="input container col-12"><input type="text" placeholder="Business Name" class="input text col-12" name="bname" /> </div>
					<div class="input container col-6"><input type="tel" placeholder="Phone Number" class="input phone col-12" name="phone" /> </div>
					<div class="input container col-6"><input type="email" placeholder="Business Email" class="input email col-12" name="email" /> </div>
					<div class="input container col-12"><textarea placeholder="How can we help?"  name="message" row="4" class="col-12 input" /></textarea></div>
					<div class="input container col-12"><input type="submit" class="submitbutton" value="send" /> </div>
				</form>
			</div>
		</div>
		<script>
			window.onscroll = function() {
				document.forms[0].action = "https://cgnew.wpengine.com/apis/cgcg/form/home/";
			}
		</script>
	</div>
</div>
</body>
<style>
.third {
	width: 32% !important;
	padding:15px;
	display:inline-grid;
}
footer ul, footer p, footer a {
    padding: 0;
    list-style-type: none;
	color:white !important;
	text-decoration:none;
}
footer .mobile label {
	color:#2DD8A3;
}
footer .desktop label, footer .desktop p, footer .desktop a {
	color:white;
}
footer .desktop label {
	font-size: 21px;
}
input {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}
footer .desktop .col-2 {
	padding: 10px;
}
footer .mobile li, footer .mobile p {
	font-size: 14px !important;
}
footer .mobile label {
	font-weight: bold;
}
</style>
<footer>
	<div class="col-12 desktop" style="margin-top: 20px;background-color: #5E5E5E;padding-top:20px;">
		<div class="footer col-12">
			<div class="footer col-12">
				<div class="col-2"><br></div>
				<div class="col-2">
					<div class="col-12">
						<label>Company</label>
						<ul>
							<li><a href="/about">About Us</a></li>
							<li><a href="/resources">Resources</a></li>
						</ul>
					</div>
				</div>
				<div class="col-2">
					<div class="col-12">
						<label>Support</label>
						<ul>
							<li><a href="/lets-talk">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-2">
					<div class="col-12">
						<label>Services</label>
						<ul>
							<li><a href="#">Managed IT Services</a></li>
							<li><a href="#">Cybersecurity Solutions</a></li>
							<li><a href="#">Cloud Backup and Disaster Recovery Services</a></li>
							<li><a href="#">CISO Advisory Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-2">
					<div class="col-12">
						<label>Contact</label>
						<p style="font-weight:200;">Main Office:</p>
						<p><a href="#">63 John Street #3, Kingston, NY 12401</a></p>
						<p><a href="#">hello@cgcg.biz<br>845 - 444 - 8273</a></p>
					</div>
				</div>
				<div class="col-2">
					<div class="col-12">
						<img style="width:150px;" loading="lazy" src="media/lw.svg" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 mobile" style="margin-top: 20px;background-color: #0166A3;">
		<div class="footer">
			<div class="third">
				<div class="col-12">
					<label>Company</label>
					<ul>
						<li><a href="about">About Us</a></li>
						<li><a href="resources">Resources</a></li>
					</ul>
				</div>
				<div class="col-12">
					<label>Support</label>
					<ul>
						<li><a href="lets-talk">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="third">
				<div class="col-12">
					<label>Services</label>
					<ul>
						<li><a href="managed-it-services">Managed IT Services</a></li>
						<li><a href="#">Cybersecurity Solutions</a></li>
						<li><a href="#">Cloud Backup and Disaster Recovery Services</a></li>
						<li><a href="#">CISO Advisory Service</a></li>
					</ul>
				</div>
			</div>
			<div class="third">
				<div class="col-12">
					<label>Contact</label>
					<p style="font-weight:200;">Main Office:</p>
					<p><a href="#">63 John Street #3, Kingston, NY 12401</a></p>
					<p><a href="mailto:hello@cgcg.biz">hello@cgcg.biz<br>845 - 444 - 8273</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
</html>