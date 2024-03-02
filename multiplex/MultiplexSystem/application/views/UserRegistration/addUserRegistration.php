<!-- CONTENT -->
<section id="content">
	<div class="page page-forms-validate">
		<!-- bradcome -->
		<div class="bg-light lter b-b wrapper-md mb-10">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h1 class="h3 m-0">UserRegistration Form</h1>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<section class="boxs">
					<div class="boxs-header">
						<h3 class="custom-font hb-blush">
							<strong>Add</strong> UserRegistration
						</h3>
					</div>
					<div class="boxs-body">
						<form class="form-horizontal" name="form4" action="<?php echo site_url(); ?>/UserRegistrationController/cinsert/" method="post" role="form" id="form4" data-parsley-validate>
							<div class="form-group">
								<label class="col-sm-3 control-label">Username Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="userName" placeholder="Username Name" data-parsley-trigger="change" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Username Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" name="userEmail" placeholder="Username Email" data-parsley-trigger="change" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Username Mobile</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="userMobile" placeholder="Username Mobile" data-parsley-trigger="change" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Username Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" name="userPwd" placeholder="Username Password" data-parsley-trigger="change" required>
								</div>
							</div>
					</div>
					<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
						<button type="submit" class="btn btn-raised btn-success" id="form4Submit">Submit</button>
						</form>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->

<!-- Vendor JavaScripts -->
<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url(); ?>assets/js/vendor/parsley/parsley.min.js"></script>
<!--/ vendor javascripts -->

<!-- Custom JavaScripts  -->
<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js -->
<!--/ custom javascripts -->

<!-- Page Specific Scripts  -->
<script>
	$(window).load(function() {
		$('#form1').parsley().subscribe('parsley:field:validate', function() {
			if ($('#form1').parsley().isValid()) {
				$('#form1Submit').prop('disabled', false);
			} else {
				$('#form1Submit').prop('disabled', true);
			}
		});

		$('#form1Submit').on('click', function() {
			$('#form1').submit();
		});

		$('#form2Submit').on('click', function() {
			$('#form2').submit();
		});

		$('#form3Submit').on('click', function() {
			$('#form3').submit();
		});

		$('#form4Submit').on('click', function() {
			$('#form4').submit();
		});
	});
</script>
<!--/ Page Specific Scripts -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/form-validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:26 GMT -->

</html>