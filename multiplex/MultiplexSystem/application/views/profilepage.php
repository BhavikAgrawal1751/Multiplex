<!--CONTENT  -->
		<section id="content">
			<div class="page profile-page">
				<!-- page content -->
				<div class="pagecontent">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<section class="boxs">
								<div class="profile-header" style="border-radius:15px;">
									<div class="profile_info">
										<div class="profile-image">
											<img src="<?php echo base_url(); ?>/images/<?php echo $this->session->userdata('adminimage') ?>" alt="hjbhjb" height="100" weight="100">
											<a href="<?php echo site_url(); ?>/ImageController/" style="color:white;position:absolute;bottom:160px;left:605px;">Edit</a>
										</div>
										<h4 class="mb-0"><strong><?php echo $this->session->userdata('adminname'); ?></strong></h4>
										<span class="text-muted">Admin</span>
										<div class="mt-10">
											<button class="btn btn-raised bg-blush btn-sm" style="border-radius:15px !important;">Follow</button>
											<button class="btn btn-raised bg-green btn-sm" style="border-radius:15px !important;">Message</button>
										</div>
										<p class="m-0">
											<a title="Twitter" href="#" class="icon-color p-5">
												<i class="fa fa-twitter"></i>
											</a>
											<a title="Facebook" href="#" class="icon-color p-5">
												<i class="fa fa-facebook"></i>
											</a>
											<a title="Google-plus" href="#" class="icon-color p-5">
												<i class="fa fa-google-plus"></i>
											</a>											
											<a title="Behance" href="#" class="icon-color p-5">
												<i class="fa fa-behance"></i>
											</a>
											<a title="Instagram" href="#" class="icon-color p-5">
												<i class="fa fa-instagram "></i>
											</a>
										</p>
									</div>
								</div>
								<!-- <div class="profile-sub-header">
									<div class="box-list">
										<ul class="text-center">
											<li>
												<a href="mail-inbox.html" class="">
													<i class="fa fa-inbox"></i>
													<p>My Inbox</p>
												</a>
											</li>
											<li>
												<a href="gallery.html" class="">
													<i class="fa fa-photo"></i>
													<p>Gallery</p>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-paperclip"></i>
													<p>Collections</p>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-tasks "></i>
													<p>Tasks</p>
												</a>
											</li>
										</ul>
									</div>
								</div> -->
							</section>
						</div>
					
						<div class="col-md-8 col-sm-12">
							<section class="boxs boxs-simple">
								<div class="boxs-body p-0">
									<div role="tabpanel">
										<ul class="nav nav-tabs tabs-dark-t" role="tablist">
											<li role="presentation">
												<a class="btn btn-raised" href="#setting" role="tab" data-toggle="tab">Setting</a>
											</li>
										</ul>
										<div class="tab-content">
											
											<div role="tabpanel" class="tab-pane" id="setting">
												<div class="wrap-reset">
													<form class="profile-settings">
														<div class="row">
															<div class="form-group col-md-12 legend">
																<h4>
																	<strong>Security</strong> Settings</h4>
																<p>Secure your account</p>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="username">Username</label>
																<input type="text" class="form-control" id="username" value="JonathanSmith" readonly>
															</div>
															<div class="form-group col-sm-6">
																<label for="password">Current Password</label>
																<input type="password" class="form-control" id="password" value="secretpassword" readonly>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="new-password">New Password</label>
																<input type="password" class="form-control" id="new-password">
															</div>
															<div class="form-group col-sm-6">
																<label for="new-password-repeat">New Password Repeat</label>
																<input type="password" class="form-control" id="new-password-repeat">
															</div>
															<div class="form-group col-sm-12">
																<button class="btn btn-raised btn-primary">Save Changes</button>
															</div>
														</div>
														<hr>
														<div class="row">
															<div class="form-group col-md-12 legend">
																<h4>
																	<strong>Account</strong> Settings</h4>
																<p>Your personal account settings</p>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="first-name">First Name</label>
																<input type="text" class="form-control" id="first-name" value="Jonathan">
															</div>
															<div class="form-group col-sm-6">
																<label for="last-name">Last Name</label>
																<input type="text" class="form-control" id="last-name" value="Smith">
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-12">
																<label for="address1">Address Line 1</label>
																<input type="text" class="form-control" id="address1" value="Lorem Ipsum 215">
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-4">
																<label for="city">City</label>
																<input type="text" class="form-control" id="city" value="New Yourk">
															</div>
															<div class="form-group col-sm-4">
																<label for="email">E-mail</label>
																<input type="email" class="form-control" id="email" value="Jonathan.s@infowy.com" readonly>
															</div>
															<div class="form-group col-sm-4">
																<label for="country">Country</label>
																<select id="country" class="chosen-select" style="width: 100%;">
																	<option>USA</option>
																	<option>Canada</option>
																	<option>UK</option>
																	<option>India</option>
																	<option>Japan</option>
																</select>
															</div>
														</div>
														<hr>
														<div class="row">
															<div class="form-group col-md-12 legend">
																<h4>
																	<strong>Social</strong> Settings</h4>
																<p>Connect with your social profiles</p>
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="facebook">Facebook</label>
																<input type="text" class="form-control" id="facebook">
															</div>
															<div class="form-group col-sm-6">
																<label for="dribbble">Dribbble</label>
																<input type="text" class="form-control" id="dribbble">
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="pinterest">Twitter</label>
																<input type="text" class="form-control" id="Twitter">
															</div>
															<div class="form-group col-sm-6">
																<label for="flickr">Instagram</label>
																<input type="text" class="form-control" id="Instagram">
															</div>
														</div>
														<div class="row">
															<div class="form-group col-sm-6">
																<label for="pinterest">Pinterest</label>
																<input type="text" class="form-control" id="pinterest">
															</div>
															<div class="form-group col-sm-6">
																<label for="flickr">Behance</label>
																<input type="text" class="form-control" id="Behance">
															</div>
														</div>
														<hr>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group checkbox mt-0">
																	<label>
																		<input type="checkbox" name="optionsCheckboxes"> Profile Visibility For Everyone
																	</label>
																</div>
																<div class="form-group checkbox">
																	<label>
																		<input type="checkbox" name="optionsCheckboxes" checked> New task notifications
																	</label>
																</div>
																<div class="form-group checkbox">
																	<label>
																		<input type="checkbox" name="optionsCheckboxes"> New friend request notifications
																	</label>
																</div>
															</div>
															<div class="col-sm-12">
																<button class="btn btn-raised btn-default">Cancel</button>
																<button class="btn btn-raised btn-primary">Save All</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /boxs body -->
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	<!--/ Application Content -->

	<!-- Vendor JavaScripts  -->
	<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:14 GMT -->
</html>