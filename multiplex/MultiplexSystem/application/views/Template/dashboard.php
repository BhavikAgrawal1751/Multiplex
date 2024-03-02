 <!-- CONTENT -->
 <?php
    echo '<style>
    .boxs-body h4 a {
        color: black;
        font-weight: 500;
        // transition: 0.4s ease-in-out;
    }
    .boxs-body h4 a:hover {
        color: #f0f3f5;
        text-decoration: none;
    }
    .top_report_chart{
        border-radius: 13px !important;
    }   
    .boxs-body p {
        color: black;
        font-weight: 500;
    }
    </style>';
?>
 <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Dashboard</h1>
                            <small class="text-muted"><span style="color:#49cdd0"><h3>Welcome to Admin Panel</h3></span></small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/AdminController/">Admin</a></h4>
                                <p><?php $tt=$this->db->get('admin')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/AreaController/">Area</a></h4>
                                <p><?php $tt=$this->db->get('area')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/CityController/">City</a></h4>
                                <p><?php $tt=$this->db->get('city')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/ContactController/">Contact</a></h4>
                                <p><?php $tt=$this->db->get('contact')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    

                   <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/EventController/">Event</a></h4>
                                <p><?php $tt=$this->db->get('event')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/EventCategoryController/">Event Category</a></h4>
                                <p><?php $tt=$this->db->get('eventcategory')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/eventspeakerController/">Event Speaker</a></h4>
                                <p><?php $tt=$this->db->get('eventspeaker')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/eventticketController/">Event Ticket</a></h4>
                                <p><?php $tt=$this->db->get('eventticket')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/fbaddtocartController/">FBAddToCart</a></h4>
                                <p><?php $tt=$this->db->get('fbaddtocart')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/fbbookingchkoutController/">FBBookingChkout</a></h4>
                                <p><?php $tt=$this->db->get('fbbookingchkout')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/FoodBeverageBookingController/">FoodBeverageBooking</a></h4>
                                <p><?php $tt=$this->db->get('foodbeveragebooking')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieController/">Movie</a></h4>
                                <p><?php $tt=$this->db->get('movie')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieCastController/">MovieCast</a></h4>
                                <p><?php $tt=$this->db->get('moviecast')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieCategoryController/">MovieCategory</a></h4>
                                <p><?php $tt=$this->db->get('moviecategory')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieImgController/">MovieImg</a></h4>
                                <p><?php $tt=$this->db->get('movieimg')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieIndustryController/">MovieIndustry</a></h4>
                                <p><?php $tt=$this->db->get('movieindustry')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieReviewController/">MovieReview</a></h4>
                                <p><?php $tt=$this->db->get('moviereview')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieSeatPlanController/">MovieSeatPlan</a></h4>
                                <p><?php $tt=$this->db->get('movieseatplan')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieTicketBookingController/">MovieTicketBooking</a></h4>
                                <p><?php $tt=$this->db->get('movieticketbooking')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MovieTicketPlanController/">MovieTicketPlan</a></h4>
                                <p><?php $tt=$this->db->get('movieticketplan')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/MultiplexController/">Multiplex</a></h4>
                                <p><?php $tt=$this->db->get('multiplex')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/SportsController/">Sports</a></h4>
                                <p><?php $tt=$this->db->get('sports')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/SportsBookingController/">SportsBooking</a></h4>
                                <p><?php $tt=$this->db->get('sportsbooking')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/StateController/">State</a></h4>
                                <p><?php $tt=$this->db->get('state')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)">  </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h4 class="mt-0"><a href="<?php echo site_url();?>/UserRegistrationController/">UserRegistration</a></h4>
                                <p><?php $tt=$this->db->get('userregistration')->result(); echo count($tt); ?></p>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    </div>
    <!-- Vendor JavaScripts -->
    <script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="<?php echo base_url(); ?>assets/bundles/flotscripts.bundle.js"></script>    
    <script src="<?php echo base_url(); ?>assets/bundles/d3cripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/sparkline.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/raphael.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/morris.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/page/index.js"></script>     
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:43:28 GMT -->
</html>