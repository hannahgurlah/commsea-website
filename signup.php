
<?php include "header.php";?>
<?php 
$your_email ='yourname@your-website.com';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "A user  $name submitted the contact form:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".
		"Message: \n ".
		"$user_message\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header('Location: thank-you.html');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<!-- Primary Page Layout
================================================== -->
<!-- globalWrapper -->
<div id="globalWrapper">
	<header class="navbar-fixed-top">
		<!-- header -->
		<div id="mainHeader" role="banner">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
					<a href="index.php" class="btn btn-danger pull-right btn-nav">Home</a>
					<div class="text-center">
						<a href="index.html" class="nav-logo"><img src="images/main-logo.png" alt="ABA"/></a>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- header -->
	<!-- ======================================= content ======================================= -->
	<div id="content">
		<!-- services -->
		<section id="services">
			<br>
			<br>
			<div class="container pt40">
				<div class="row">
					<div class="span12 text-center mb40">
						<h1>American Broadband Association <b>Membership</b></h1>
						<hr>
						<h3>Selection Terms</h3>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 membership-content">
								<div class="bs-example bs-example-tabs mb30">
									<ul id="myTab" class="nav nav-tabs selection-tab">
										<li class="active"><a href="#home-tab" data-toggle="tab">Regular Membership</a></li>
										<li><a href="#profile" data-toggle="tab">Junior, Distinguished and Other Membership</a></li>
									</ul>
									<div id="myTabContent" class="tab-content blue-tab">
										<div class="tab-pane fade" id="home-tab">
											<div class="row tab-content">
												<div class="col-md-6">
													<ul>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">1 year Membership - $ 35.00
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">2 years Membership - $ 60.00
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">3 years Membership - $ 85.00
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">5 year Membership - $ 125.00
																</label>
															</div>
														</li>
													</ul>
												</div>
												<div class="col-md-6">
													<ul>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">Life Membership - $ 1000.00</a>
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">Life Membership - $ 1000.00 <span>(40 quarterly payments of $25)</span>
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">EPL Life Membership - $ 1000.00 <span>(40 monthly payments of $25</span>
																</label>
															</div>
														</li>
													</ul>
												</div>
												
											</div>
										</div>
										<div class="tab-pane fade active in" id="profile">
											<div class="row tab-content">
												<div class="col-md-6">
													<ul>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">1 year Membership - $ 35.00
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">2 years Membership - $ 60.00
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">3 years Membership - $ 85.00
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">5 year Membership - $ 125.00
																</label>
															</div>
														</li>
													</ul>
												</div>
												<div class="col-md-6">
													<ul>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">Life Membership - $ 1000.00</a>
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">EPL Life Membership - $ 1000.00 <span>(40 quarterly payments of $25)</span>
																</label>
															</div>
														</li>
														<li>
															<div class="radio">
																<label>
																	<input type="radio" name="agree">EPL Life Membership - $ 1000.00 <span>(40 monthly payments of $25</span>
																</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="note">
										<p>Easy Pay Life (EPL) - PAy $25.00 today and the NRA will mail you a quarterly or monthly invoice until the total dues are paid. Your membership status will be upgraded to Life Member when the balance is paid in full.</p>
										<p>Contributions, gifts or membership dues made or paid to the National Rifle Association of America are not refundable or transferable and are not deductable as charitable contributions for Federal income tax purposes.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- services -->
		<div class="container">
			<div class="col-md-12 mb40 mt40">
				<hr class="lineLines">
			</div>
		</div>
		<section id="paralaxSlice4" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="span12 text-center">
						<h3>As a Member of the ABA, I want to receive a subscription to (choose one):</h3>
						<div class="col-md-8 col-md-offset-2">
							<div class="row text-center">
								<div class="col-md-3"><img src="images/logo/american-riffle.jpg" alt="American Hunter" class="img-responsive"/></div>
								<div class="col-md-3"><img src="images/logo/american-hunter.jpg" alt="American Hunter" class="img-responsive"/></div>
								<div class="col-md-3"><img src="images/logo/1stfreedom.jpg" alt="American Hunter" class="img-responsive"/></div>
								<div class="col-md-3"><img src="images/logo/insights.jpg" alt="American Hunter" class="img-responsive"/><small>(Juniors Only)</small></div>
								
							</div>
						</div>
						<div class="col-md-6 col-md-offset-3">
							<div class="row">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-5 control-label">Regular Subscription:</label>
										<div class="col-sm-7">
											<select class="form-control">
												<option>NRA Insights</option>
												<option>American Hunter</option>
												<option>1st Freedom</option>
												<option>American Rifleman</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<h5>Delivery of Digital Edition magazines requires a valid email address. <br>What is Premium Digital <a href="#">Click Here</a> for your FREE demo!</h5>
						</div>
					</div>
				</div>
			</div>
		</section>
		<form action="/" method="post">
			<section id="services">
				<div class="container pt40">
					<div class="row">
						<div class="span12 text-center mb40">
							<h1>Please send my ABA Membership benefits right away!</h1>
							<hr>
							<div class="row">
								<div class="col-md-8 col-md-offset-2 membership-form">
									
									<section class="section">
										<h3>Basic Profile<small>Basic information of the Member you are adding.</small></h3>
										<div class="well">
											
											
											<div class="row">
												<div class="col-md-6 form-group ">
													<label>ABA Member ID</label>
													<input type="text" class="col-lg-12 form-control">
													<small>** If applicable **Can't Locate your ABA Member ID? <a href="#">Click Here</a></small>
												</div>
												<div class="col-md-6 form-group ">
													<label>Title</label>
													<select class="form-control">
														<option>Select Title</option>
														<option>#</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 form-group">
													<label>
														Last Name
													</label>
													<input type="text" class="col-lg-12 form-control">
												</div>
												<div class="col-lg-4 form-group">
													<label for="description">
														First Name
													</label>
													<input type="text" class="col-lg-12 form-control">
												</div>
												<div class="col-lg-3 form-group">
													<label>
														Middle Name
													</label>
													<input type="text" class="col-lg-12 form-control">
												</div>
												<div class="col-lg-1 form-group">
													<label for="description">
														Suffix
													</label>
													<input type="text" class="col-lg-12 form-control">
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<div class="row">
														<div class="col-lg-4 form-group">
															<label>
																Date of Birth
															</label>
															<select class="form-control">
																<option>Month</option>
																<option>#</option>
															</select>
														</div>
														<div class="col-lg-4 form-group">
															<label>
																&nbsp;
															</label>
															<select class="form-control">
																<option>Day</option>
																<option>#</option>
															</select>
														</div>
														<div class="col-lg-4 form-group">
															<label>
																&nbsp;
															</label>
															<select class="form-control">
																<option>Year</option>
																<option>#</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-4 form-group ">
													<label>Gender</label>
													<select class="form-control">
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
											</div>
											<br>
										</div>
									</section>
									<section class="section address-info">
										<h3>
										Member's Address
										<small>
										Your're Complete Address
										</small>
										</h3>
										<div class="well">
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-lg-6 form-group">
															<label>
																Country
															</label>
															<select class="form-control">
																<option>United States of America</option>
																<option>#</option>
															</select>
														</div>
														<div class="col-lg-6 form-group">
															<label>
																City
															</label>
															<select class="form-control">
																<option>Select City</option>
																<option>Alabama</option>
															</select>
														</div>
													</div>
													
													<div class="row">
														<div class="col-lg-6 form-group">
															<label>
																State / Province
															</label>
															<select class="form-control">
																<option>Select State / Province</option>
																<option>#</option>
															</select>
														</div>
														<div class="col-lg-6 form-group">
															<label for="zip">
																Zip / Postal Code
															</label>
															<input type="text" name="zip" id="zip" placeholder="" class="form-control col-lg-6">
														</div>
													</div>
													<div class="form-group">
														<label>
															Complete Address
														</label>
														<input type="text" name="address1" id="address1" placeholder="" class="col-lg-12 form-control">
													</div>
												</div>
											</div>
										</div>
									</section>
									<section class="section contact-info">
										<h3>
										Contact Details
										<small>
										Member's contact details. Please be as specific as possible.
										</small>
										</h3>
										<div class="well">
											<div class="row">
												<div class="col-lg-12">
													<div class="row terms">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="Phone Number">
																	Member's Email Address
																</label>
																<input type="text" name="Email-address" id="Email-address" placeholder=""
																class="col-lg-12 form-control">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label for="Phone Number">
																	Phone Number
																</label>
																<input type="text" name="phone" id="phone" placeholder="" class="form-control col-lg-6">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<h6>Applicants outside of the US and Canada, please disregard State and Zip fields.</h6>
						</div>
					</div>
				</div>
			</section>
			<section id="paralaxSlice6">
				<div class="container">
					<div class="row">
						<div class="span12 text-center">
							<h3>Methods of Payment</h3>
							<div class="col-md-8 col-md-offset-2">
								<div class="row">
									<div class="col-md-8">
										<div class="radio">
											<label>
    											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    												<img src="images/logo/credit-card.jpg" alt="American Hunter" class="img-responsive"/>
  											</label>
										</div>
									</div>
									<div class="col-md-4">
										<div class="radio">
											<label>
    											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    												<img src="images/logo/paypal.jpg" alt="American Hunter" class="img-responsive"/>
  											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<hr>
				<div class="container">
					<div class="row">
						<div class="span12 text-center">
						<br>
						<br>
							<h3>For your security</h3>
							<br>
							<div class="col-md-6 col-md-offset-3">
								<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
<br>
								<a href="#" class="btn btn-primary btn-lg btn-form">Submit</a>
							</div>
						</div>
					</div>
					<br>
					
					<div class="text-center">
						<div class="col-md-8 col-md-offset-2">
						<div class="well">
							<p>Foreign members will be subject to additional postage charges. There will be an annual fee of $5 per year for Canada and $10 per year for all other countries.</p>
						</div>
						</div>
						<br><br><br><br>
						<div class="row">
						<br><br>
						<p><i class="fa fa-print"></i> Join By Mail. Print this form and mail to</p>
						<p><b>Address goes here, City, State or Zipcode</b></p>
						<p>Join by phone. Call 1-877-NRA-2000. Monday - Friday from 8:00 am to 9:00 pm. Saturday frp, 9:00 am to 6:00 pm.</p>
						<h6>$3.75 of the membership dues are designated for magazine subscription.</h6>
						</div>
					</div>
				</div>
				<br><br>
			</section>
		</form>
	</div>
	<!-- content -->
	<?php include "footer.php";?>