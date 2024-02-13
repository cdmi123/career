<?php
    //echo '<pre>';print_r($jobdetail);die;
    $this->load->view('header');
?>
<!-- header end here --> 



<div class="detail_page">
    <!-- banner start here -->
    <div class="banner">
        <img src="<?php echo base_url('assets/images/detail_slider_banner.jpg')?>" alt="banner" title="banner" class="img-responsive"/>
        <div class="container">
            <h1>job Detail</h1>
            <div class="bread-crumb">
                <ul class="list-inline">
                    <li>
                                <a href="<?php echo site_url('home/index'); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('apply_job_form/index'); ?>">Jobs Detail</a>
                            </li>
                </ul>
            </div>
        </div>  
    </div>
    <!-- banner end here -->

    <!-- list view start here -->
    <div class="detail_search">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-10 col-xs-12 search">
                    <!-- <div class="input-group">
                        <input placeholder="Search for anything here" id="search" name="search" value="" class="form-control" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default btn-lg" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
                        </div>
                    </div> -->  
                </div>
                <!-- <div class="col-sm-2 col-md-2 col-xs-12 filter">
                    <i class="fa fa-filter" aria-hidden="true"></i> Filter
                </div> -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs columnleft">
                <div class="profile">
                    <img src="<?php echo base_url('assets/images/about-image.jpg')?>" alt="profile" title="profile" class="img-responsive"/>
                    <h3>Job Detail</h3>
                    <ul class="list-inline icons">
                        <li>
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </li>
                       <!--  <li>
                            <i class="icofont icofont-restaurant"></i>
                        </li>
                        <li>
                            <i class="icofont icofont-money-bag"></i>
                        </li> -->
                    </ul>
                    <ul class="list-unstyled ico2">
                        <li>
                            <i class="fa fa-calendar"></i>
                            <div class="detail">
                                Posted date <br/>
                                <span><?php echo $jobdetail['start_date'] ?></span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-bell" aria-hidden="true"></i>
                            <div class="detail">
                                Job Positions <br/>
                                <span><?php echo $jobdetail['post_name'] ?></span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <div class="detail">
                                Reqd Qualification <br/>
                                <span><?php echo $jobdetail['education_name'] ?></span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="detail">
                                Location <br/>
                                <span><?php echo $jobdetail['location_name'] ?> </span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-money"></i>
                            <div class="detail">
                                Salary <br/>
                                <span><?php echo $jobdetail['salary_given'] ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <br/>
               <center> <button type="button" style="color:white;background-color: darkred;" class="btn btn-default btn-lg" onclick="location.href='<?php echo site_url('apply_job_form/index/'.$jobdetail['job_id']); ?>'">Apply Job</button></center>
               <!--  <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3423.1432228188287!2d75.87981636513577!3d30.910620581575493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d30.9100544!2d75.8833152!4m5!1s0x391a83a410b99833%3A0xbe41bee863220706!2sthemultimediadesigner+map!3m2!1d30.911209!2d75.879993!5e0!3m2!1sen!2sin!4v1540202992285" width="600" height="170" style="border:0" allowfullscreen></iframe>
                </div> -->
            </div>
            <div class="col-sm-9 col-xs-12 bgcontent">
               <!--  <ul class="list-inline tab-part">
                    <li><a href=".html">Category Name</a></li>
                    <li><a href="-2.html">Responsibilties</a></li>
                    <li><a href="-3.html">About</a></li>
                    <li><a href="-4.html">Related Jobs</a></li>
                </ul> -->
                <div class="category-block col-sm-12">
                    <div class="heading">Job Description
                       <!--  <div class="pull-right">Report abuse <i class="fa fa-arrow-right" aria-hidden="true"></i></div> -->
                    </div>
                    <div class="description-box">
                        <h3><?php echo $jobdetail['job_title'] ?></h3>
                       
                        <p>
                            <?php echo $jobdetail['basic_req'] ?>     
                        </p>
                    </div>
                </div>
                <div class="responsibility-block col-sm-12">
                    <div class="heading">Responsibilities</div>
                    <div class="description-box">
                        <ul class="list-unstyled">
                            <li><i class="icofont icofont-check-alt"></i> <b>Skill :</b><?php echo $jobdetail['skill_name'] ?> </li>
                            <li><i class="icofont icofont-check-alt"></i> <b>Eduction :</b><?php echo $jobdetail['education_name'] ?> </li>
                           
                        </ul>
                    </div>
                </div>
               <!--  <div class="about-block col-sm-12">
                    <div class="heading">About</div>
                    <img src="<?php echo base_url('assets/images/about_img.jpg')?>" class="img-responsive" alt="about" title="about"/>
                    <div class="description-box">
                        <h3>John Due</h3>
                        <h5>Creative Director</h5>
                        <p>Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</p> 
                        <div class="des">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in </div>
                        <ul class="list-unstyled">
                            <li><i class="icofont icofont-check-alt"></i> initial setup & customizations </li>
                            <li><i class="icofont icofont-check-alt"></i> Regular Update </li>
                            <li><i class="icofont icofont-check-alt"></i> Round the clock Support </li>
                        </ul>
                        <ul class="list-inline soical-icon">
                            <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                            <li><i class="fa fa-dribbble" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div> -->
               <!--  <div class="apply-block col-sm-12">
                    <div class="heading">How To Apply</div>
                    <div class="description-box">
                        <ol>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Loreum impulsm
                                <p>Lorem ipsum dolor sit ameit,consecturer adipiscing elit.Aliquam eget consequat est.Aliquam ac nunc mauris.</p>
                            </li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Loreum impulsm
                                <p>Lorem ipsum dolor sit ameit,consecturer adipiscing elit.Aliquam eget consequat est.Aliquam ac nunc mauris.</p>
                            </li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Loreum impulsm
                                <p>Lorem ipsum dolor sit ameit,consecturer adipiscing elit.Aliquam eget consequat est.Aliquam ac nunc mauris.</p>
                            </li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Loreum impulsm
                                <p>Lorem ipsum dolor sit ameit,consecturer adipiscing elit.Aliquam eget consequat est.Aliquam ac nunc mauris.</p>
                            </li>
                        </ol>
                    </div>
                    <div class="buttons">
                        <a href="apply-job-form.html" class="btn-apply">Apply Now</a>
                        <a href="#" class="btn-apply">Share</a>
                    </div>
                </div> -->
                <div class="related-block col-sm-12">
                    <div class="heading">Related jobs</div>
                    <?php 
                        foreach ($jobpost as $value) {  
                     ?>
                    <div class="products">      
                        <h1><?php echo $value['post_name'] ?><span><?php echo $value['start_date'] ?></span></h1>
                        <ul class="list-inline link">
                            <li>
                                <a href="#"><i class="fa fa-clock-o"></i> Full Time</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-briefcase"></i><?php echo $value['company_name'] ?></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-money"></i><?php echo $value['salary_given'] ?></a>
                            </li>
                        </ul>
                        <!-- <p>A web designer is responsible for creating a site or pages. This includes the design, layout and coding, and can mean working on a brand new website or updating an already existing site.</p> -->
                        <ul class="list-inline applynow">
                            <li><a href="<?php echo site_url('apply_job_form/index/'.$value['job_id']);?>">Apply Now</a></li>
                            <li><a href="<?php echo site_url('jobs_detail/index/'.$value['job_id']);?>">View More</a></li>
                           <!--  <li><a href="company-page.html">Know about organisation</a></li> -->
                        </ul>
                    </div>
                    <?php } ?> 
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
                         <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous"><span aria-hidden="true" class="fa fa-angle-left"></span></a>
                            </li>
                            <li class="active">
                                <a href="#"> 1</a> 
                            </li>
                            <li>
                               <a href="#"> 2</a> 
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#"> 4</a> 
                            </li>
                            <li>
                                <a href="#"> 5</a> 
                            </li>
                            <li>
                               <a href="#" aria-label="Next"><span aria-hidden="true" class="fa fa-angle-right"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- list view end here -->

<!-- footer start here -->
<?php
    $this->load->view('footer');
?>