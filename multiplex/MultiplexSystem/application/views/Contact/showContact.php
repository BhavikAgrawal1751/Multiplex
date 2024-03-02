<!--  CONTENT  -->
<head>
    <style>
        tbody tr td img {
            border-radius: 15px !important;
            box-shadow: 1px 1px 4px rgba(0,0,0,.1) !important;
            transition: box-shadow 0.3s ease-in-out 0.3s;
        }
        tbody tr td img:hover{
            box-shadow: 1px 1px 8px rgba(0,0,0,.3) !important;
        }
        thead tr th{
            color:#48d2cd !important;
        }
        .page-tables-footable{
            background-color:#f0f4f9;
        }
        .boxs{
            overflow:auto;
            border-radius:20px;box-shadow: 1px 1px 4px rgba(0,0,0,.3);
        }
        a#st{
            border-radius:50px !important;padding:9px 22px;font-size:13px;
        }
        a#ed{
            border-radius: 50px !important;background-color:#0b57d0;font-weight: 500;padding:9px 22px;font-size:13px;
        }
        a#de{
            border-radius: 50px !important;font-weight: 500;padding:9px 22px;font-size:13px;
        }
    </style>
</head>

<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Contact Table</h1>
							<!-- <small class="text-muted">Welcome to Falcon application</small> -->
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Contact</strong> Table</h3>
							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th># </th>
											<th>Contact name</th>
											<th data-hide="phone">Contact email</th>
											<th data-hide='phone, tablet'>Contact subject</th>
											<th data-hide='phone, tablet'>Contact message</th>
											<th>Contact dateregister</th>
											<th>Contact status </th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php $count=1; foreach($data as $row) { ?>	
										<tr>
											<td style="padding-top:30px;"><?php echo $count; ?></td>
											<td style="padding-top:30px;"><?php echo $row->contact_name;?></td>
											<td style="padding-top:30px;"><?php echo $row->contact_email;?></td>
											<td style="padding-top:30px;"><?php echo $row->contact_subject;?></td>
											<td style="padding-top:30px;"><?php echo $row->contact_message;?></td>
											<td style="padding-top:30px;"><?php echo $row->contact_Dateregister;?></td>
											<td><a href="<?php echo site_url(); ?>/ContactController/status/<?php echo $row->contact_id ?>" class="btn btn-raised <?php echo ($row->contact_status=='Blocked') ? 'btn-danger' : 'btn-success'; ?>" id="st"><?php echo $row->contact_status;?></a></td>
											<td><a href="<?php echo site_url(); ?>/ContactController/delete/<?php echo $row->contact_id ?>" class="btn btn-raised btn-danger" id="de"><i class='fa fa-trash'></i> Delete</a></td>
										</tr>
									<?php $count++; } ?>
											</tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->

	</div>
	<!--/ Application Content -->

	<!--  Vendor JavaScripts  -->
	<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:54 GMT -->
</html>