<!--  CONTENT  -->
<head>
    <style>
        tbody tr td img {
            border-radius: 15px !important;
            box-shadow: 1px 1px 4px rgba(0,0,0,.1) !important;
			transition: transform 0.3s ease-in-out;
        }
		tbody tr td img:hover {
  			box-shadow: 1px 1px 8px rgba(0,0,0,.1) !important;
    		transform: scale(2.5);
			border-radius: 5px !important;
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
							<h1 class="h3 m-0">Movie Table</h1>
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
									<strong>Movie</strong> Table</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
									<a href="<?php echo site_url(); ?>/MovieController/addForm/" class="btn btn-raised" style="border-radius: 50px !important;font-weight: 520;padding:11px 30px;margin-left:750px;"><i class="fa fa-plus" aria-hidden="true"></i> add</a>
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th># </th>
											<th>Industry Name</th>
											<th data-hide="phone">Category Name</th>
											<th data-hide='phone, tablet'>Multiplex Name</th>
											<th data-hide='phone, tablet'>Movie Name</th>
											<th>Movie Cast </th>
											<th>Movie Price </th>
											<th>Movie Rating </th>
											<th>Movie Experience </th>
											<th>Status </th>
											<th>Movie Description </th>
											<th>Movie Poster </th>
											<th>Movie Images </th>
											<th>Movie Trailer </th>
											<th>Movie Language </th>
											<th>Screen </th>
											<th>Movie Duration</th>
											<th>Movie Dateregister</th>
											<th>Movie Status</th>											
											<th colspan="2" class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php $count=1; foreach($data as $row) { ?>	
										<tr <?php echo ($count % 2 != 0) ? 'style="background-color:#dde3ea;"' : ''; ?>>
											<td style="padding-top:20px;"><?php echo $count;?></td>
											<td style="padding-top:20px;"><?php echo $row->industry_name;?></td>
											<td style="padding-top:20px;"><?php echo $row->category_name;?></td>
											<td style="padding-top:20px;"><?php echo $row->multiplex_name;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_name;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_cast;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_price;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_rating;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_experience;?></td>
											<td style="padding-top:20px;"><?php echo $row->status;?></td>
											<!-- <td style="padding-top:40px;"><?php echo $row->movie_description;?></td> -->
											<!-- or -->
											<td style="padding-top:20px;" title="<?php echo $row->movie_description; ?>"><?php echo substr($row->movie_description, 0, 30); ?>...</td>
											<td style="padding-top:20px;"><img src="<?php echo base_url(); ?>/images/<?php echo $row->movie_poster;?>" height="100" width="100"></td>
											<td style="padding-top:20px;"><img src="<?php echo base_url(); ?>/images/<?php echo $row->movie_images;?>" height="100" width="100"></td>
											<td style="padding-top:20px;"><?php echo $row->movie_trailer;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_language;?></td>
											<td style="padding-top:20px;"><?php echo $row->screen;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_duration;?></td>
											<td style="padding-top:20px;"><?php echo $row->movie_Dateregister;?></td>
											<td style="padding-top:20px;"><a href="<?php echo site_url(); ?>/MovieController/status/<?php echo $row->movie_id ?>" class="btn btn-raised <?php echo ($row->movie_status == 'Blocked') ? 'btn-danger' : 'btn-success'; ?>" id="st"><?php echo $row->movie_status;?></a></td>											
											<td style="padding-top:20px;"><a href="<?php echo site_url(); ?>/MovieController/cedit/<?php echo $row->movie_id ?>" class="btn btn-raised btn-danger" id="ed"><i class='fa fa-edit'></i> Edit</a></td>
											<td style="padding-top:20px;"><a href="<?php echo site_url(); ?>/MovieController/delete/<?php echo $row->movie_id ?>" class="btn btn-raised btn-danger" id="de"><i class='fa fa-trash'></i> Delete</a></td>
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