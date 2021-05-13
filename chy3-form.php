<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/head.php'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  	</head>

  	<body class="col-md-12 col-xs-12 col-xm-12 no-padding">
		<div class>
		<form method="Post" id="myform1">		
		<input type="hidden" name="id" value="">
		<div class="col-md-12 col-xs-12 col-sm-12 chy3background">
			<div class="col-md-8 col-xs-12 col-sm-12 offset-md-2 page">
				<p style="color:red;text-align:center;font-weight:bold"> </p>
				<div class="col-md-2 cert">
					CHY3 Cert
				</div>
				<div class="col-md-8 col-sm-12 enduring">
					ENDURING CERTIFICATE 
				</div>
				<div class="col-md-8 col-sm-12 enduring2">
					SECTION 848A TAXES CONSOLIDATION ACT (TCA) 1997
				</div>
				<div class="col-md-11 col-sm-12 enduring3">
					TAX RELIEF FOR DONATIONS TO ELIGIBLE CHARITIES AND OTHER APPROVED BODIES
				</div>
				<div class="col-md-11 col-sm-12 enduring4">
					This form should be completed by donors who are <b>individuals</b> in respect of donations made on or after 1 January 2013.
				</div>

				<div class="col-md-11 col-sm-12 enduring5">
					<b>N.B.</b> In completing Form CHY3 (Enduring Certificate) for a period of 5 years, you should not complete Form CHY4 (Annual Certificate) for any tax year within that period.
				</div>
				<div class="col-md-11 col-sm-12 enduring6">
					PLEASE REFER TO THE NOTES OVERLEAF BEFORE COMPLETING THIS FORM
				</div>
				<div class="col-md-11 col-sm-12 enduring6">
					COMPLETE IN BLOCK LETTERS
				</div>
				<div class="col-md-11 col-sm-12 enduring7">
					PART A
				</div>
				<div class="col-md-12">
					<div class="colm1">
						<b>Name of Donor:</b>
					</div>
					<div class="colm2">
						<input type="text" name="doner_name" value="" style="width:100%" required="required">
					</div>

					<div class="colm1">
						<b>PPS Number:</b>
					</div>
					
					<div class="colm40">
						
						<input type="text" name="pps1" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps2" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps3" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps4" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps5" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps6" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps7" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps8" value="" class="blank_text_n PPS_input" required="required">
						<input type="text" name="pps9" value="" class="blank_text_n PPS_input">
					</div>

					<div class="colm1" style="clear: both;">
						<b>Address:</b>
					</div>
					<div class="colm33">
						<textarea name="address" style="width: 100%; height: 54px; font-size: 13px;"></textarea>
					</div>
					<div class="colm1 pad" style="">
						<b>Phone No.:</b>
					</div>
					<div class="colm33 ">
						<input type="text" name="phone" class="left_input" value="">
					</div>
					<div class="colm1 pad">
						<b>Email Address:</b>
					</div>
					<div class="colm33">
						<input type="text" name="email" value="" class="left_input validemail" required="required">
					</div>
				</div>
				<div class="col-md-12 enduring7" style="clear: both;">
					<b>PART B</b>
				</div>
				<div class="col-md-12">
					<b style="float:left;">Name of eligible charity or other approved body (hereinafter referred to as an approved body):</b>
				</div>
				<div class="col-md-12">
					<input type="text" name="approved_body" style="width: 100%" value="NECRET">
				</div>
				<div class="col-md-9 mt-2 mb-2" style="float:left;">
					
					<b class="float-left">First tax year to which this certificate applies (cannot be earlier than 2013):</b>
				</div>
				<div class="col-md-3 mt-2 mb-2" style="text-align: right;">               
					<input type="number" name="c_year1" style="width:25px; text-align: center;" maxlength="2" size="2" class="blank_text c_year" value="">
					<input type="number" name="c_year2" style="width:25px; text-align: center;" maxlength="2" size="2" class="blank_text c_year" value="">
					<input type="number" name="c_year3" style="width:25px; text-align: center;" maxlength="2" size="2" class="blank_text c_year" value="">
					<input type="number" name="c_year4" style="width:25px; text-align: center;" maxlength="2" size="2" class="blank_text c_year" value="">
				</div>
				<div class="col-md-12 mt-2">
					<b class="enduring7">PART C</b>
					<ul class="ulChy3">
						<li>
							I certify that this certificate is valid for the tax year specified in Part B and each of the four following tax years, unless I notify the approved body of its earlier cancellation. 
						</li>
						<li>
							I understand that the approved body referred to in Part B may apply to the Revenue Commissioners for tax relief under section 848A TCA 1997 in respect of donations made by me to that body during the lifetime of this certificate and that any tax repaid to the body shall not be repaid to me or to any other approved body.
						</li>
						<li>
							I grant permission to the approved body referred to in Part B to use my PPS Number for the purpose of claims for tax relief under section 848A TCA 1997 in respect of donations made by me to that body during the lifetime of this enduring certificate or a renewed enduring certificate
						</li>
						<li>
							I understand I must advise the approved body immediately of any change in my circumstances that would affect the body’s entitlement to claim tax relief in respect of my donations.
						</li>
						<li>
							I am aware that for <b>the purposes of tax relief under section 848A TCA 1997</b> on donations to an approved<br>body-
							<ol type="a">
								<li>
									I must be resident in the State for each tax year in which I make a donation.
								</li>
								<li>
									A donation, or donations, must amount in aggregate to at least €250 in a tax year and be in the form of money and/or designated securities and that tax relief will not apply to the aggregate of my donations to an approved body or bodies in a tax year in excess of €1,000,000.
								</li>
								<li>
									Neither I, nor any person connected with me, can receive a benefit from the approved body in consequence of making a donation.
								</li>
								<li>
									A donation cannot be subject to a condition as to repayment nor can it be conditional on, or associated with, the acquisition of property by the approved body other than by way of gift, from me or a person connected with me.
								</li>
								<li>
									The amount of my aggregate annual donations to an approved body (or bodies) with which I am associated (see Notes) will be restricted to an amount equal to 10% of my total income for the tax year in question and tax relief will not apply to any donations in excess of that amount.
								</li>
								<li>
									I must pay income tax and/or capital gains tax for any tax year in which I make donations of an amount equal to the income tax on the grossed up amount of the donations in order for the approved body to receive a refund of tax (see Notes).
								</li>
							</ol>
						</li>
					</ul>
					
				</div>

				<div class="col-md-12 please_check">
					<span style="vertical-align: middle;">Please tick <i class="fa fa-check"></i> the box if you are associated with the approved body named in this certificate (see Notes)</span> 
					<input type="checkbox" name="associated" style="zoom:1.7">
				</div>
				<div class="col-md-2" style="padding-top: 10px;float:left;">
					Signature:
				</div>
				<div class="col-md-5" style="border: solid 1px #000; text-align: center; color: red; margin-top: 10px; float:left;" id="myBtn">
					<b>click here for signature</b>
				</div>
				<div class="col-md-5" style="">
				<img id="saveSignature" alt="Saved image png" style="width:100%">
				</div>
				
				<div class="col-md-2" style="text-align: center; float:left;">
					<center>Date:<br>
					(DDMMYY)</center>
				</div>
				<div class="col-md-3" style="padding-top: 10px;float:left;">
					<input type="number" name="dd1" value="0" style="width: 13%; text-align: center;" id="dd1" maxlength="2" size="2" class="blank_text c_date">
					<input type="number" name="dd2" value="5" style="width: 13%; text-align: center;" maxlength="2" size="2" class="blank_text c_date">
					<input type="number" name="mm1" value="0" style="width: 13%; text-align: center;" maxlength="2" size="2" class="blank_text c_date">
					<input type="number" name="mm2" value="9" style="width: 13%; text-align: center;" maxlength="2" size="2" class="blank_text c_date">
					<input type="number" name="yy1" value="2" style="width: 13%; text-align: center;" maxlength="2" size="2" class="blank_text c_date">
					<input type="number" name="yy2" value="0" style="width: 13%; text-align: center;" maxlength="2" size="2" class="blank_text c_date">	
				</div>
				<input type="hidden" name="sign" id="r_sign">
				<div class="col-md-12 please_check" style="float:left;">PLEASE FORWARD YOUR COMPLETED CERTIFICATE TO THE APPROVED BODY REFERRED TO IN PART B.</div>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 offset-md-2 page">
				<p class="page-p">
					Tax relief under section 848A TCA 1997 in respect of donations made on or after 1 January 2013 by individuals (whether self-assessed or PAYE-only taxpayers) to an approved body is allowed to the approved body rather than to the donor.
				</p>
				<p class="page-p">
					A donation which satisfies the conditions of section 848A is grossed up at the specified rate (currently 31%) and the approved body is deemed for the purposes of the relief to have received the grossed up amount net of tax deducted at the specified rate.
				</p>
				<p class="page-p">
					For example, Joan makes a cash donation of €1,000 to an approved body in the tax year 2013. Under the tax relief scheme the body is deemed to have received a donation of €1,449.27 (i.e. €1,000 grossed up at 31%) less tax deducted of €449.27. On the assumption that Joan has paid income tax for 2013 of at least €449.27, the approved body can obtain a refund of that amount from Revenue after the end of the tax year 2013.
				</p>
				<p class="page-p">
					The amount repaid to an approved body for any tax year cannot exceed the amount of tax paid by the donor for that year. For example, if Joan’s income tax liability for 2013 is €350 (which she has paid), the repayment to the approved body is restricted to that amount.
				</p>
				<p class="page-p-b">
					Joan is not entitled to a repayment of any part of the tax that has been repaid to the approved body.

				</p>
				<p class="page-p-b">
					What are “approved bodies”?
				</p>
				<p class="page-p">
					The following are approved bodies for the purposes of the scheme of tax relief for donations under section 848A of, and Schedule 26A to, the TCA 1997-
					</p><ul class="ulChy3">
						<li>
							An “eligible charity”, i.e. any charity which is authorised in writing by the Revenue Commissioners,
						</li>
						<li>
							Educational institutions or bodies including primary, second level or third level, as described in Part 1 of Schedule 26A TCA 1997,
						</li>
						<li>
							A body approved for Education in the Arts by the Minister for Finance as described in Part 2 of Schedule 26A TCA 1997,
						</li>
						<li>
							A body to which section 209 TCA 1997 applies.
						</li>
					</ul>
				<p></p>
				<p class="page-p">
					Please refer to the Revenue website at <b>www.revenue.ie</b> for lists of resident and non-resident charities authorised for the purposes of the donations relief scheme.
				</p>
				<p class="page-p-b">
					When should I complete an Enduring Certificate?
				</p>
				<p class="page-p">
					You should complete an Enduring Certificate if you wish to allow an approved body claim tax relief in respect of donations you make to that body during the lifetime of the certificate.
				</p>
				<p>
					An Enduring Certificate is valid for a period of 5 years, unless you cancel it before the end of that period.
				</p>
				<p>
					You should complete this form <b>only</b> in respect of donations for 2013 and subsequent years.
				</p>
				<p class="page-p-b">
					Can I complete more than one Enduring Certificate?
				</p>
				<p class="page-p">
					Yes. You can complete an Enduring Certificate in respect of some or all of the approved bodies to which you make donations.
				</p>
				<p class="page-p-b">
					Can I renew an Enduring Certificate?
				</p>
				<p class="page-p">
					Yes. The qualifying body may contact you in this regard. Alternatively, you can advise the body in question to renew the certificate.
				</p>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 offset-md-2 page">
				<p class="page-p-b">What if I do not want to complete an Enduring Certificate?</p>
				<p class="page-p">
					There is no obligation on you to complete any certificate in respect of your donations. However, you can complete an Annual Certificate if you prefer to provide a certificate to an approved body on an annual basis.
				</p>
				<p class="page-p-b">Can I cancel an Enduring Certificate?</p>
				<p class="page-p">
					Yes, but you must notify the approved body of its cancellation.
				</p>
				<p class="page-p-b">What happens if my circumstances change during the lifetime of an Enduring Certificate?</p>
				<p class="page-p">
					You must advise the approved body immediately of any change in your circumstances that would affect the body’s entitlement to claim tax relief in respect of your donations.
				</p>
				<p class="page-p-b">How do I know if I’m “associated” with an approved body? </p>
				<p class="page-p">
					You are associated with an approved body if at the time you make a donation you are an employee or member of that body, or of another approved body which is associated with the first approved body.
				</p>
				<p class="page-p">
					One approved body is associated with another approved body if it could reasonably be considered that-
					</p><ul class="ulChy3">
						<li>
							The activities carried on by both bodies are, or can be, directed by the same person or by broadly the same group or groups of persons, or
						</li>
						<li>
							The same person or broadly the same group or groups of persons exercise, or can exercise, control over both bodies.
						</li>
					</ul>
				<p></p>
				<p class="page-p-b">
					What should I do if I become, or cease to be, associated with an approved body during the lifetime of an Enduring Certificate? 
				</p>
				<p class="page-p">
					You should advise the approved body immediately where the status of your association with that body alters during the lifetime of your enduring certificate.
				</p>
				<p class="page-p-b">What are the implications of being associated with an approved body?</p>
				<p class="page-p">
					Where the aggregate of your donations in a tax year to all approved bodies with which you are associated exceeds 10% of your total income for that year, the amount of those donations that exceed the 10% limit are not considered relevant donations for the purposes of the scheme and tax relief is not available on that excess amount.
				</p>
				<p class="page-p-b">What are designated securities?</p>
				<p class="page-p">
					These are quoted shares and debentures.
				</p>
				<p class="page-p-b">Are there limits for tax relief purposes on the amount I can donate in any tax year? </p>
				<p class="page-p">
					Yes, there are some limits in place <b>for tax relief purposes</b>. 
				</p>
				<p class="page-p">
					A donation to any one approved body must, for tax relief purposes, be in the form of money and/or designated securities and amount in aggregate in a tax year to at least €250.
				</p>
				<p class="page-p">
					The aggregate of donations to an approved body or bodies in any tax year from 2013 onwards cannot, for tax relief purposes, exceed €1,000,000. 
				</p>
				<p class="page-p">
					If you are associated with an approved body, or bodies, the amount of your donations to that body, or bodies are, for tax relief , limited to an amount equivalent to 10% of your total income.
				</p>
				<p class="page-p">
					<b>N.B.</b> These limits apply <b>solely</b> for the purposes of tax relief on your donations – they <b>do not</b> impose any restrictions on the amount you can donate to an approved body. 
				</p>
			
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 offset-md-2 page">
				<p class="page-p-b">
					Can I reclaim tax that has been repaid to an approved body?
				</p>
				<p class="page-p">
					No. Where an approved body has received a repayment of tax in respect of donations you made to that body, you <b>cannot</b> subsequently have any part of that tax repaid to you. 
				</p>
				<p class="page-p-b">
					Further Information
				</p>
				<p class="page-p">
					You can obtain further information on the Donations Scheme from our website www.revenue.ie or from the Office of the Revenue Commissioners, Charity Claims Unit, Government Offices, Nenagh, Co. Tipperary, E45 T611. <br>
					Phone: 067 63377. Email: Please use the MyEnquiries service available in <span class="page3-my">my</span><span class="page3-A">A</span>ccount or ROS.
					
				</p>
				<div class="col-sm-12 col-md-12 p-bottom bottom_image">
					<img src="./img/chy3.png " style="float:right;">			
					<p class=" col-sm-12 col-md-12 p-bottom2">
					RPC010616_EN_WB_L_2
					</p>
				</div>

		</div>

		</div>
				
		<div class="col-md-12" style="background: #525659; clear:both;">
			
		</div>
		<div class="col-md-12" style="background: #525659;">
		&nbsp;
		</div>
		<center class="stickey_submit">
				<button type="submit" name="btnSubmit" value="submit" class="btn btn-success btn-lg submitform confirm">
					submit
				</button>
		</center>
	</form>
	</div>
	<script src="./js/sign.js"></script>

	<div id="myModal" class="mmodal">

		<!-- Modal content -->
		<div class="mmodal-content" style="width: 60%; margin: 0px auto;">
			<span class="cclose">×</span>
			<style>

			#wrapper {
				width: 100%;
				padding: 1px;
			}
			canvas {
				position: relative;
				margin: 1px;
				margin-left: 0px;
				border: 1px solid #3a87ad;
			}

			#controlPanel {
				margin: 2px;
			}
			#saveSignature {
				display: none;
			}</style>
			<div id="wrapper">
				<p>Sign here:</p>
				<div id="canvas"><canvas id="newSignature" width="1082" height="304"></canvas></div>
				<h4>Chose a Signature to upload <input type="checkbox" id="uploadSignChk"></h4>
					<form method="post" enctype="multipart/form-data" id="uploadSignForm">
						<input type="file" name="uploadSingFile" accept="image/*" required="required" id="uploadSingFile">
				<script>
					zkSignature.capture();
				</script>
				<hr>
				<button type="button" class="btn btn-default pull pull-right" style="margin-right:5px;" id="uploadSingCencel">
					Cancel
				</button>
				<button type="submit" class="btn btn-primary pull pull-right" style="margin-right:5px;" id="uploadSingSubmit">
				Done
				</button>
				<button type="button" onclick="zkSignature.clear()" class="btn btn-default pull pull-right" style="margin-right:5px;" id="drowSingClear">
					Clear Signature
				</button>
				<button type="button" onclick="zkSignature.save()" class="btn btn-primary pull pull-right" style="margin-right:5px;" id="drowSingDone">
				Done
				</button>
				</form>
				<br>
			</div>                		
		</div>
                
	</div>
		<?php include 'includes/bodyScripts.php'; ?>
  	</body>
</html>