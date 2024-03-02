<!-- CONTENT -->
<section id="content">
	<div class="page page-forms-validate">
		<!-- bradcome -->
		<div class="bg-light lter b-b wrapper-md mb-10">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h1 class="h3 m-0">EventSpeaker Form</h1>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<section class="boxs">
					<div class="boxs-header">
						<h3 class="custom-font hb-blush">
							<strong>Add</strong> EventSpeaker
						</h3>
					</div>
					<div class="boxs-body">
						<form class="form-horizontal" enctype="multipart/form-data" name="form4" action="<?php echo site_url(); ?>/EventSpeakerController/cinsert/" method="post" role="form" id="form4" data-parsley-validate>
							<div class="form-group">
								<label class="col-sm-3 control-label">EventCategory Title</label>
								<div class="col-sm-9">
									<select class="form-control" name="evCatId">
										<option>Select EventCategory Title</option>
										<?php foreach($eventcategoryData as $row) { ?>
											<option value="<?php echo $row->eventcategory_id ?>"><?php echo $row->eventcategory_title ?></option>
										<?php } ?>
									</select> 
								</div>
							</div>

							<div class="form-group">	
								<label class="col-sm-3 control-label">EventSpeaker Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="evSpeakName" placeholder="EventSpeaker Name" data-parsley-trigger="change" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">EventSpeaker Profession</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="evSpeakPro" placeholder="EventSpeaker Profession" data-parsley-trigger="change" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">EventSpeaker Image</label>
								<div class="col-sm-9">
									<!-- <input type="file" class="form-control" name="evSpeakImg" placeholder="EventSpeaker Image" data-parsley-trigger="change" > -->
									<span class="btn btn-raised  fileinput-button">
										<i class="fa fa-upload" aria-hidden="true"></i>
										<span>Add file</span>
										<input type="file" name="evSpeakImg" multiple>
									</span>
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