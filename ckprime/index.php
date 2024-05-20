<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="CK Prime Dispatch | We Deliver Excellence">
	<meta name="author" content="CK Prime Dispatch">
	<title>CK Prime Dispatch | We Deliver Excellence</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/favicon.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/favicon.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/favicon.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/favicon.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css?q=<?php time()?>" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body class="style_2">
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
			<div class="row" style="text-align: center; display: block;">
				<div class="col-8" style="display: inline-block;">
					<a href="index.php"><img src="img/logo.png" alt="" style="width:200px;"></a>

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->

	<div class="wrapper_centering">
		<div class="container_centering" style="">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-xl-12 col-lg-12 d-flex align-items-center" style="display: block;!important">
						<div class="main_title_1">
							<p>CK Prime Dispatch is an A rated Dispatch Company with over 20 years’ experience in the logistics industry.  We go above and beyond to ensure we’re delivering what the client is asking for. We’re here to serve as a company.  We partner with our clients to ensure their success and provide 24/7 service.</p>
							<p>We provide a variety of services that include dispatching, rate negotiation, driver management, compliance services, bookkeeping, develop dedicated accounts, collect payments.   All you have to do is drive. </p>
							<!-- <p><em>- The CK Prime Team</em></p> -->
						</div>
					</div>
	
					<div class="col-md-12">
								<div id="wizard_container">
									<div id="top-wizard">
										<div id="progressbar"></div>
									</div>
									<!-- /top-wizard -->
									<form id="wrapped" method="POST" autocomplete="off">
										<input id="website" name="website" type="text" value="">
										<!-- Leave for security protection, read docs for details -->
										<div id="middle-wizard">

											<div class="step">
												<h3 class="main_question mb-4"><strong>1 of 6</strong>What is most important to you as a driver ?</h3>
												<div class="review_block">
													<ul>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Home Time" name="question_1" class="required" value="Home Time" onchange="getVals(this, 'question_1');">
																<label class="radio" for="Home Time"></label>
																<label for="Home Time" class="wrapper">Home Time</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Pay" name="question_1" class="required" value="Pay" onchange="getVals(this, 'question_1');">
																<label class="radio" for="Pay"></label>
																<label for="Pay" class="wrapper">Pay</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Benefits" name="question_1" class="required" value="Benefits" onchange="getVals(this, 'question_1');">
																<label class="radio" for="Benefits"></label>
																<label for="Benefits" class="wrapper">Benefits</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Equipment" name="question_1" class="required" value="Equipment" onchange="getVals(this, 'question_1');">
																<label class="radio" for="Equipment"></label>
																<label for="Equipment" class="wrapper">Equipment</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /step 1-->

											<div class="step">
												<h3 class="main_question"><strong>2 of 6</strong>What kind of equipment do you drive? (Click all that apply)</h3>
												<div class="review_block">
													<ul>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_2_opt_1" name="question_2[]" class="required" value="Dry Van" onchange="getVals(this, 'question_2');">
																<label class="checkbox" for="question_2_opt_1"></label>
																<label for="question_2_opt_1" class="wrapper">Dry Van</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_2_opt_2" name="question_2[]" class="required" value="Refrigerated" onchange="getVals(this, 'question_2');">
																<label class="checkbox" for="question_2_opt_2"></label>
																<label for="question_2_opt_2" class="wrapper">Refrigerated</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_2_opt_3" name="question_2[]" class="required" value="Flat Bed" onchange="getVals(this, 'question_2');">
																<label class="checkbox" for="question_2_opt_3"></label>
																<label for="question_2_opt_3" class="wrapper">Flat Bed</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_2_opt_4" name="question_2[]" class="required" value="Other" onchange="getVals(this, 'question_2');">
																<label class="checkbox" for="question_2_opt_4"></label>
																<label for="question_2_opt_4" class="wrapper">Other</label>
															</div>
														</li>
													</ul>
													<small><em>Multiple selections *</em></small>
												</div>
												<div id="bottom-wizard">
													<button type="button" name="forward" class="forward" id="nextButton" hidden>Next</button>
												</div>
											</div>
											<!-- /step 2-->

											<div class="step">
												<h3 class="main_question mb-4"><strong>3 of 6</strong>How many trucks do you own?</h3>
												<div class="review_block">
													<ul>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Single unit owner operator" name="question_3" class="required" value="Single unit owner operator" onchange="getVals(this, 'question_3');">
																<label class="radio" for="Single unit owner operator"></label>
																<label for="Single unit owner operator" class="wrapper">Single unit owner operator</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="2-4 units" name="question_3" class="required" value="2-4 units" onchange="getVals(this, 'question_3');">
																<label class="radio" for="2-4 units"></label>
																<label for="2-4 units" class="wrapper">2-4 units</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="5 or more units" name="question_3" class="required" value="5 or more units" onchange="getVals(this, 'question_3');">
																<label class="radio" for="5 or more units"></label>
																<label for="5 or more units" class="wrapper">5 or more units</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /step 3-->

											<div class="step">
												<h3 class="main_question mb-4"><strong>4 of 6</strong>Why type of loads do you prefer?</h3>
												<div class="review_block">
													<ul>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Local – Home every night" name="question_4" class="required" value="Local – Home every night" onchange="getVals(this, 'question_4');">
																<label class="radio" for="Local – Home every night"></label>
																<label for="Local – Home every night" class="wrapper">Local – Home every night</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="Regional – Home multiple times per week" name="question_4" class="required" value="Regional – Home multiple times per week" onchange="getVals(this, 'question_4');">
																<label class="radio" for="Regional – Home multiple times per week"></label>
																<label for="Regional – Home multiple times per week" class="wrapper">Regional – Home multiple times per week</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="radio" id="OTR – Home a few times per month or less" name="question_4" class="required" value="OTR – Home a few times per month or less" onchange="getVals(this, 'question_4');">
																<label class="radio" for="OTR – Home a few times per month or less"></label>
																<label for="OTR – Home a few times per month or less" class="wrapper">OTR – Home a few times per month or less</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /step 4-->

											<div class="step">
												<h3 class="main_question"><strong>5 of 6</strong>What other areas of the business would you prefer assistance in? (Click all that apply)</h3>
												<div class="review_block">
													<ul>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_5_opt_1" name="question_5[]" class="required" value="Compliance Paperwork" onchange="getVals(this, 'question_5');">
																<label class="checkbox" for="question_5_opt_1"></label>
																<label for="question_5_opt_1" class="wrapper">Compliance Paperwork</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_5_opt_2" name="question_5[]" class="required" value="Communication with Brokers and Shippers" onchange="getVals(this, 'question_5');">
																<label class="checkbox" for="question_5_opt_2"></label>
																<label for="question_5_opt_2" class="wrapper">Communication with Brokers and Shippers</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_5_opt_3" name="question_5[]" class="required" value="Preventative Maintenance" onchange="getVals(this, 'question_5');">
																<label class="checkbox" for="question_5_opt_3"></label>
																<label for="question_5_opt_3" class="wrapper">Preventative Maintenance</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_5_opt_4" name="question_5[]" class="required" value="Collecting Revenue" onchange="getVals(this, 'question_5');">
																<label class="checkbox" for="question_5_opt_4"></label>
																<label for="question_5_opt_4" class="wrapper">Collecting Revenue</label>
															</div>
														</li>
														<li>
															<div class="checkbox_radio_container">
																<input type="checkbox" id="question_5_opt_5" name="question_5[]" class="required" value="Managing Drivers" onchange="getVals(this, 'question_5');">
																<label class="checkbox" for="question_5_opt_5"></label>
																<label for="question_5_opt_5" class="wrapper">Managing Drivers</label>
															</div>
														</li>
													</ul>
													<small><em>Multiple selections *</em></small>
												</div>
												<div id="bottom-wizard">
													<button type="button" name="forward" class="forward" id="nextButton">Next</button>
												</div>
											</div>
											<!-- step 5 -->

											<div class="submit step">
												<h3 class="main_question"><strong>6 of 6</strong>Please fill with your details</h3>
												<div class="form-group">
													<label for="firstname">Name</label>
													<input type="text" name="firstname" id="firstname" class="form-control required">
												</div>
												<div class="form-group">
													<label for="email">Your Email</label>
													<input type="email" name="email" id="email" class="form-control required">
												</div>
												<div class="form-group">
													<label for="telephone">Phone</label>
													<input type="text" name="telephone" id="telephone" class="form-control">
												</div>
											</div>
											<!-- step 6 -->

										</div>
										<!-- /middle-wizard -->

										<div id="bottom-wizard">
											<button type="button" name="backward" class="backward" hidden>Prev</button>
											<button type="button" name="forward" class="forward" id="nextButton" hidden>Next</button>
											<button type="submit" name="process" class="submit">Submit</button>
											<input type="hidden" name="hideMeNow" id="hideMeNow">
										</div>
										<!-- /bottom-wizard -->

									</form>
								</div>
								<!-- /Wizard container -->
							</div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container_centering -->
	    <footer>
	    	<div class="container-fluid">
	    		<div class="row">
	    			<div class="col-md-3">
	    				© <?php echo date('Y'); ?> CK Prime Dispatch
	    			</div>
	    			<div class="col-md-9">
	                   <!--  <ul class="clearfix">
	                        <li><a href="#0" class="animated_link">Purchase this template</a></li>
	                        <li><a href="index.html" class="animated_link">Demo 1</a></li>
	                        <li><a href="index-2.html" class="animated_link">Demo 2</a></li>
	                        <li><a href="index-3.html" class="animated_link">Demo 3</a></li>
	                    </ul> -->
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	        <!-- /container-fluid -->
	    </footer>
	    <!-- /footer -->
	</div>
	<!-- /wrapper_centering -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/survey_func.js"></script>

</body>
</html>