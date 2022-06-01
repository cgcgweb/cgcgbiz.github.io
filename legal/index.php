<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="icon" href="https://cgcg.biz/wp-content/uploads/2020/02/favicon.png" />
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
table, tr, td {
	border: 1px solid black;
}
h1 {
	color:#0166A3;
	font-size:max(3vw, 24px);
}
p {font-size:18px;}
li {
	list-style-position:inside;
}

.point.col-12 img, .point.col-12 > div {
	display: inline-block;
	padding: 10px;
}

.point div {
	width: 80%;
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
	<?php include $r.'eagle.php'; ?>
	<div class="col-3 desktop" style="overflow: hidden;height: 1px;"></div>
	<div class="col-9" style="padding-left:3%;">
		<div class="proactive col-10">
			<div>
<div>
<div >
<div >
<div >
<div>
<h1 style="text-align: center;"><u>Data Backup and Recovery Standard Terms and Conditions</u></h1>
<p><strong>&nbsp;</strong></p>
<p>In addition to the standard terms and conditions contained in the Service Agreement between Cyber Guardian Consulting Group, LLC d/b/a FileScience (&ldquo;FileScience&rdquo;) and Customer (the &ldquo;Agreement&rdquo;), of which this Schedule is a part of, the Customer agrees that the following terms and conditions apply with respect to the Data Backup and Recovery Service provided to Customer by FileScience. In the event of any inconsistency between this Schedule and the Agreement, this Schedule shall control.</p>
<p>In this Schedule, all capitalized terms that are not defined herein shall have the meaning given to such terms in the Agreement, the FileScience Standard Terms and Conditions, the AUP and any other document referenced in the Agreement, in effect as of the date of the Agreement and posted on FileScience&rsquo;s Website.</p>
<h2>1.&nbsp; Description</h2>
<p>FileScience works to ensure the successful and timely back up and restoration of all Customer data that it provides Backup and Recovery services for.</p>
<p><strong>Successful Backup or Notification </strong>- FileScience will notify customers of any critical failed Backup operation as agreed upon at the time of install. Customer is solely responsible for insuring FileScience has the proper, up to date, contact information.</p>
<p><strong>Time to Initiation of Restoration </strong>&ndash; Customer has full control to initiate a full or partial restore. FileScience will initiate Customer data restoration efforts within 30 minutes of the Customer&rsquo;s request.</p>
<p>The Customer is responsible for integrity of Data targeted for back up by FileScience. FileScience backs up data &ldquo;as is, where is&rdquo; and will restore data in the same format in which it is back up. (Example: corrupted data will get backed up and restored in the same state. Incremental daily backups are done to allow customers to restore data to a &ldquo;good&rdquo; state but assume that customer&rsquo;s data was in a &ldquo;good&rdquo; state when backed up.)</p>
<p>FileScience agrees that it will make commercially reasonable efforts to meet the minimum service levels and targets set out in this Data Backup and Recovery Service Schedule throughout the Term of the Agreement.</p>
<h2>2.&nbsp; Data Back and Recovery Service Fees</h2>
<p><u>Monthly Recurring Data Storage Fees</u>: The Data Backup and Recovery Service is billed on a monthly basis at a per Gigabyte rate specified on the Service Agreement. Fees are calculated at the end each month during the Term.</p>
<p><u>Non-Recurring Fees:</u> The following Non-recurring Fees may also be assessed to the customer, with configuration and specific pricing as defined on the Service Agreement.</p>
<p><u>Software Agents</u>: Software required to enable a server/endpoint/cloud to utilize the Data Backup &amp; Recovery service.</p>
<p><u>Data Backup On-line Installation</u>: Fee to initiate the Data Backup &amp; Recovery service.&nbsp;&nbsp;&nbsp; <u>Custom Installations. Other professional services charges which may be assessed.</u></p>
<p>&nbsp;</p>
<h2>3. Minimum Service Levels</h2>
<p>The minimum service levels for the Data Backup and Recovery Service are as follows:</p>
<ul>
<li>Data Recovery. FileScience will provide 100% recovery guarantee of Successfully Backed Up Data.</li>
<li>Data Restoration Initiation for Online data: We will be able to restore online data through the FileScience An online data restore will begin within 30 minutes from the point that the online data is requested.</li>
</ul>
<p>&nbsp;</p>
<h2>4. Service Level Definitions</h2>
<ul>
<li>Successfully Backed Up Data. FileScience can only provide a 100% data recovery guarantee on data that has been backed up between the Customer&rsquo;s data and the Data Center without error corruption. Upon each backup operation our backup software will set a flag that clearly indicates that a successful backup has occurred. Data backup success will also be reported on a daily basis. In the event of a backup failure FileScience will arrange for a subsequent backup.</li>
<li>Data Restoration Initiation. The Measured Time to Begin Data Restoration starts upon notification of a Data Restoration by the Customer to the FileScience Network Operation Center by telephone or email to <strong>recovery@filescience.io</strong> in accordance with paragraph five of this SLA as so FileScience can execute a data The Measured Time to Restore ends when the data restoration is completed. FileScience will notify the Customer by telephone or e-mail that data restoration has been initiated. Data restoration will begin only when a customer environment is properly functioning and ready to receive data.</li>
<li>Measured Unavailable Time for Service. Data Backup and Recovery Service is deemed to be unavailable to the Customer when the Data Backup and Recovery Service is fully interrupted, such that the Data Backup and Recovery Service cannot be accessed or used (an "Outage"), but excluding any such circumstances arising as the result of any event contemplated in Section 11. The measured unavailable time starts upon notification of an Outage by the Customer to the FileScience Network Operation Center by telephone or e-mail in accordance with paragraph five of this Schedule and the release of the affected Service by the Customer to FileScience for testing and repair. The measured unavailable time ends when the affected Service is restored. FileScience will notify the Customer by telephone or e-mail and the Customer will confirm that the affected Service has been restored. Additional time taken by the Customer to perform confirmation testing is not included in the measured unavailable time if the Service is in fact restored. The Customer acknowledges that although FileScience does monitor use of the Data Backup and Recovery that the Customer is responsible to notify FileScience of any Outages or other Service</li>
<li>Data Retention Time (DRT). FileScience follows a prescribed schedule for backups. Data that undergoes changes, will be retained, by default, for 10 (ten) versions, with deeper retention options available, running on a daily basis or in real-time depending on customer requirements. Customer data will therefore age and new data will overwrite data that is more than 10 versions old.</li>
<li>Recovery Point Objective (RPO). Data backup occurs at a fixed point in time according to a schedule agreed upon between FileScience and Customer. Any data that exists between backups is vulnerable. The length of time between backups is the Recovery Point Objective. This is the point back in time to which a Customer&rsquo;s data must be recovered. This would typically be a maximum of 24 hours since backups take place daily. If a more frequent backup schedule is required it must be pre-arranged with the FileScience account and the Agreement will be amended</li>
<li>Recovery Time Objective (RTO). This is the maximum elapsed time required to complete the recovery of customer&rsquo;s RTO is a function of the size of the data delivery circuit and the total amount data to be recovered. In most cases where the total data recovered is less than 1 terabyte this could be 12, 24 or 48 hours if the Customer environment is properly functioning and ready to receive data. Faster RTO objectives should be discussed with a FileScience account executive. An RTO measurement will begin only when a customer environment is properly functioning and ready to receive data. The default RTO is 48 hours but usually much faster as a frequent courtesy.</li>
</ul>
<p>&nbsp;</p>
<h2>5. Credits for Failure to Meet Service Levels</h2>
<p>If FileScience fails to meet the minimum service levels outlined below for the Data Backup and Recovery Service, the Customer shall be entitled to the following credits:</p>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td width="187"><strong>Services Only</strong></td>
<td width="108"><strong>Time Period</strong></td>
<td width="264"><strong>Credit</strong></td>
</tr>
<tr>
<td width="187">Failure to Meet Data Recovery
<p>Minimum</p>
</td>
<td width="108">In 1 month</td>
<td width="264">50% credit of previous month</td>
</tr>
<tr>
<td width="187">Failure to Meet Measured Time

<p>to Begin Data Restoration Initiation</p>
</td>
<td width="108">In 1 month</td>
<td width="264">1-day credit for each occurrence</td>
</tr>
<tr>
<td rowspan="2" width="187">Measured Unavailable Time for Service</td>
<td width="108">24 hours (1

<p>backup)</p>
</td>
<td width="264">1-day credit</td>
</tr>
<tr>
<td width="108">Each additional

<p>24 hours</p>
</td>
<td width="264">1-day credit</td>
</tr>
</tbody>
</table>

<p>In order to receive the foregoing credit, the Customer must notify, in accordance with the FileScience Service Level Agreement, FileScience of its claim for a credit within thirty (30) days of the above-mentioned service levels for which a credit is claimed.</p>

<h2>6. Service Request Procedure</h2>
<p>The Customer shall contact the FileScience Customer Care Center ("CCC") to report all Service problems. Before calling or e-mailing, the Customer must have the following information:</p>
<ul>
<li>Customer Number</li>
<li>The service affected</li>
<li>A description of the problems encountered</li>
</ul>
<p>During the Service Request, FileScience will open a ticket indicating the exact time the Service Request was received, the name of the person, and the details of the Service Request, including the data affected. A reference number (ticket) will be supplied to the Customer. If a reference number cannot be supplied, one will be supplied as soon as practical.</p>

<h2>7. Service Level Exemptions</h2>
<p>Degradation in the performance of the Services and unavailable time shall not be included for the purposes of determining whether the Services meet the minimum service requirements, or for calculating measured unavailable time if such degradation or unavailable time arises from: (i) Scheduled Maintenance or other service interruptions agreed to by the Customer for the purpose of allowing FileScience to upgrade, change,</p>
<p>implement an order, maintain, or repair the Services or related facilities; (ii) directly or indirectly as the result of the acts or omissions of the Customer, any person for whom the Customer is legally responsible, or any person using the Services; (iii) failure of equipment or systems not within FileScience&rsquo;s Network Backbone, or of equipment or systems not provided, or under the control or direction of FileScience including equipment or systems FileScience may obtain or contract for at the request of the Customer; (iv) any failure by the Customer to afford access to any location for which the Customer is responsible, or to any facilities of FileScience for the purpose of investigating and correcting a degradation in the Services or an Outage; and</p>
<p>(v) any event contemplated in Section 11.</p>
<p>&nbsp;</p>
<h2>8. Scheduled and Unscheduled Maintenance</h2>
<p>Scheduled Maintenance means any maintenance activities performed at the FileScience point of presence (POP) to which Customer&rsquo;s facilities are connected provided that Customer shall be given at least 15 business days&rsquo; advance notice of such maintenance activities. Such activities are typically performed during the standard maintenance window on Sundays 00:01 and 6:00 am local time. Notice of scheduled maintenance shall be given to Customer&rsquo;s designated.</p>
<p>Change Management (&ldquo;CM&rdquo;) Single Point of Contact (&ldquo;SPOC&rdquo;) on the Customer Support Contact Form and any amendments thereto, by a method elected by FileScience (telephone, e-mail, fax or pager). The Customer may change its CM SPOC upon reasonable advance written notice to FileScience.</p>
<p>Unscheduled maintenance means any maintenance activities performed at the FileScience point of presence (POP) to which Customer&rsquo;s facilities are connected as a result of a Threat or an Emergency. A Threat is defined as a situation or condition that would not normally cause an outage to a customer but introduces a very low risk to services or may lead to a brief service interruption of less than 100 milliseconds. Examples include optical cable splicing, contractor working near FileScience fiber cables and digging within three meters of a FileScience fiber cable. In the case of a Threat, FileScience will strive to provide customers with three business days&rsquo; advance notice. In the event of an Emergency (defined as unplanned critical repairs, acts of vandalism and/or nature that has caused or could cause a degradation or interruption of service) FileScience will make best efforts to provide customers with notice and an estimated time to repair.</p>
<p>&nbsp;</p>
<h2>9. Application of Credits</h2>
<p>Credits shall be applied in respect of the next billing period and shall be based on the monthly rates in effect at that time. Calculation of all credits shall be based on the call log and other records maintained by FileScience. In no event shall any credit be awarded in excess of the monthly rates for the affected Data Backup and Recovery Service in effect at the time the credit is applied. If credits remain payable following the termination of the Agreement, the Customer shall be entitled to receive a rebate equal to the amount of such credits.</p>
<p>&nbsp;</p>
<h2>10. Cancellation of Services</h2>
<p>Notwithstanding anything to the contrary in the Agreement, the Customer may elect by providing notice in writing to FileScience to terminate the provision of the Services without liability for early termination (other than on account of charges incurred prior to cancellation) at any time, if: (i) 2 or more unsuccessful full backups resulting from an outage of the Data Backup and Recovery service occurs in any single calendar month and are left un-remedied; or (ii) an Outage occurs as the result of any event contemplated in Section 11 and FileScience does not correct such Outage or failure within 30 days of such occurrence.</p>
<p>&nbsp;</p>
<h2>11. <strong>Force Majeure</strong></h2>
<p>Except with respect to Customer&rsquo;s payment obligations for Services rendered prior to the commencement of a Force Majeure event, notwithstanding any other provision of the Agreement, neither Party shall be liable to the other Party for any delay or failure in performance of the Agreement to the extent such delay or failure is caused by fire, flood, explosion, accident, war, strike, embargo, governmental requirement, civil or military authority, Act of God, inability to secure materials or labor or any other causes beyond its reasonable control. Any such delay or failure shall suspend the Agreement until the Force Majeure ceases.</p>
</div>
</div>
</div>
</div>
</div>
</div>
		</div>
	</div>
</div>
<?php include $r.'footer.php'; ?>
</body>

</html>